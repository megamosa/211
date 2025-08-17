<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api;

use MagoArab\WhatsappChat\Api\Data\ContactInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;

/**
 * Contact repository interface
 */
interface ContactRepositoryInterface
{
    /**
     * Get contact by ID
     *
     * @param int $id
     * @return ContactInterface
     */
    public function getById($id);

    /**
     * Get all contacts
     *
     * @return ContactInterface[]
     */
    public function getAll();

    /**
     * Save contact
     *
     * @param ContactInterface $contact
     * @return ContactInterface
     */
    public function save(ContactInterface $contact);

    /**
     * Delete contact
     *
     * @param ContactInterface $contact
     * @return bool
     */
    public function delete(ContactInterface $contact);

    /**
     * Delete contact by ID
     *
     * @param int $id
     * @return bool
     */
    public function deleteById($id);

    /**
     * Get list
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
