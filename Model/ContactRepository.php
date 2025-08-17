<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use MagoArab\WhatsappChat\Api\ContactRepositoryInterface;
use MagoArab\WhatsappChat\Api\Data\ContactInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Contact repository
 */
class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @var ContactFactory
     */
    private $contactFactory;

    /**
     * @var \MagoArab\WhatsappChat\Model\ResourceModel\Contact\CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var SearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * @param ContactFactory $contactFactory
     * @param \MagoArab\WhatsappChat\Model\ResourceModel\Contact\CollectionFactory $collectionFactory
     * @param SearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        ContactFactory $contactFactory,
        \MagoArab\WhatsappChat\Model\ResourceModel\Contact\CollectionFactory $collectionFactory,
        SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->contactFactory = $contactFactory;
        $this->collectionFactory = $collectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @inheritDoc
     */
    public function getById($id)
    {
        $contact = $this->contactFactory->create();
        $contact->load($id);

        if (!$contact->getId()) {
            throw new NoSuchEntityException(__('Contact with id "%1" does not exist.', $id));
        }

        return $contact;
    }

    /**
     * @inheritDoc
     */
    public function getAll()
    {
        $collection = $this->collectionFactory->create();
        $collection->setOrder('order', 'ASC');
        return $collection->getItems();
    }

    /**
     * @inheritDoc
     */
    public function save(ContactInterface $contact)
    {
        try {
            $contact->save();
            return $contact;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__('Could not save contact: %1', $exception->getMessage()));
        }
    }

    /**
     * @inheritDoc
     */
    public function delete(ContactInterface $contact)
    {
        try {
            $contact->delete();
            return true;
        } catch (\Exception $exception) {
            throw new \Exception(__('Could not delete contact: %1', $exception->getMessage()));
        }
    }

    /**
     * @inheritDoc
     */
    public function deleteById($id)
    {
        $contact = $this->getById($id);
        return $this->delete($contact);
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();
        
        // Add filters
        foreach ($searchCriteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                $condition = [$filter->getConditionType() => $filter->getValue()];
                $collection->addFieldToFilter($filter->getField(), $condition);
            }
        }

        // Add sorting
        foreach ($searchCriteria->getSortOrders() as $sortOrder) {
            $collection->addOrder(
                $sortOrder->getField(),
                $sortOrder->getDirection()
            );
        }

        // Add pagination
        $collection->setCurPage($searchCriteria->getCurrentPage());
        $collection->setPageSize($searchCriteria->getPageSize());

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }
}
