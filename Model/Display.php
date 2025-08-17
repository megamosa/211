<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use Magento\Framework\Model\AbstractModel;
use MagoArab\WhatsappChat\Api\Data\DisplayInterface;

/**
 * Display model
 */
class Display extends AbstractModel implements DisplayInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MagoArab\WhatsappChat\Model\ResourceModel\Display::class);
    }

    /**
     * @inheritDoc
     */
    public function getDevices()
    {
        return $this->getData(self::DEVICES);
    }

    /**
     * @inheritDoc
     */
    public function setDevices($devices)
    {
        return $this->setData(self::DEVICES, $devices);
    }

    /**
     * @inheritDoc
     */
    public function getEntries()
    {
        return $this->getData(self::ENTRIES);
    }

    /**
     * @inheritDoc
     */
    public function setEntries($entries)
    {
        return $this->setData(self::ENTRIES, $entries);
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomies()
    {
        return $this->getData(self::TAXONOMIES);
    }

    /**
     * @inheritDoc
     */
    public function setTaxonomies($taxonomies)
    {
        return $this->setData(self::TAXONOMIES, $taxonomies);
    }

    /**
     * @inheritDoc
     */
    public function getTarget()
    {
        return $this->getData(self::TARGET);
    }

    /**
     * @inheritDoc
     */
    public function setTarget($target)
    {
        return $this->setData(self::TARGET, $target);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
