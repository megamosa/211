<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api\Data;

/**
 * Display interface
 */
interface DisplayInterface
{
    const ID = 'id';
    const DEVICES = 'devices';
    const ENTRIES = 'entries';
    const TAXONOMIES = 'taxonomies';
    const TARGET = 'target';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get devices
     *
     * @return string
     */
    public function getDevices();

    /**
     * Set devices
     *
     * @param string $devices
     * @return $this
     */
    public function setDevices($devices);

    /**
     * Get entries
     *
     * @return string
     */
    public function getEntries();

    /**
     * Set entries
     *
     * @param string $entries
     * @return $this
     */
    public function setEntries($entries);

    /**
     * Get taxonomies
     *
     * @return string
     */
    public function getTaxonomies();

    /**
     * Set taxonomies
     *
     * @param string $taxonomies
     * @return $this
     */
    public function setTaxonomies($taxonomies);

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget();

    /**
     * Set target
     *
     * @param string $target
     * @return $this
     */
    public function setTarget($target);

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set created at
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * Set updated at
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);
}
