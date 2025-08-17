<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use Magento\Framework\Model\AbstractModel;
use MagoArab\WhatsappChat\Api\Data\BoxInterface;

/**
 * Box model
 */
class Box extends AbstractModel implements BoxInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MagoArab\WhatsappChat\Model\ResourceModel\Box::class);
    }

    /**
     * @inheritDoc
     */
    public function getHeader()
    {
        return $this->getData(self::HEADER);
    }

    /**
     * @inheritDoc
     */
    public function setHeader($header)
    {
        return $this->setData(self::HEADER, $header);
    }

    /**
     * @inheritDoc
     */
    public function getFooter()
    {
        return $this->getData(self::FOOTER);
    }

    /**
     * @inheritDoc
     */
    public function setFooter($footer)
    {
        return $this->setData(self::FOOTER, $footer);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getWork()
    {
        return $this->getData(self::WORK);
    }

    /**
     * @inheritDoc
     */
    public function setWork($work)
    {
        return $this->setData(self::WORK, $work);
    }

    /**
     * @inheritDoc
     */
    public function getAvatar()
    {
        return $this->getData(self::AVATAR);
    }

    /**
     * @inheritDoc
     */
    public function setAvatar($avatar)
    {
        return $this->setData(self::AVATAR, $avatar);
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
