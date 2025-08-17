<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Ui\DataProvider;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider as UiDataProvider;
use MagoArab\WhatsappChat\Api\ContactRepositoryInterface;

/**
 * Contact data provider
 */
class ContactDataProvider extends UiDataProvider
{
    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param \Magento\Framework\Api\Search\ReportingInterface $reporting
     * @param \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Api\FilterBuilder $filterBuilder
     * @param ContactRepositoryInterface $contactRepository
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Magento\Framework\Api\Search\ReportingInterface $reporting,
        \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Api\FilterBuilder $filterBuilder,
        ContactRepositoryInterface $contactRepository,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $reporting,
            $searchCriteriaBuilder,
            $request,
            $filterBuilder,
            $meta,
            $data
        );
        $this->contactRepository = $contactRepository;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        $contacts = $this->contactRepository->getAll();
        $items = [];
        
        foreach ($contacts as $contact) {
            $items[] = [
                'id' => $contact->getId(),
                'order' => $contact->getOrder(),
                'active' => $contact->getActive(),
                'chat' => $contact->getChat(),
                'avatar' => $contact->getAvatar(),
                'type' => $contact->getType(),
                'phone' => $contact->getPhone(),
                'group' => $contact->getGroup(),
                'firstname' => $contact->getFirstname(),
                'lastname' => $contact->getLastname(),
                'label' => $contact->getLabel(),
                'message' => $contact->getMessage(),
                'timefrom' => $contact->getTimefrom(),
                'timeto' => $contact->getTimeto(),
                'timezone' => $contact->getTimezone(),
                'visibility' => $contact->getVisibility(),
                'timedays' => $contact->getTimedays(),
                'display' => $contact->getDisplay(),
                'created_at' => $contact->getCreatedAt(),
                'updated_at' => $contact->getUpdatedAt()
            ];
        }
        
        return [
            'totalRecords' => count($items),
            'items' => $items
        ];
    }
}
