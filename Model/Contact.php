<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use Magento\Framework\Model\AbstractModel;
use MagoArab\WhatsappChat\Api\Data\ContactInterface;

/**
 * Contact model
 */
class Contact extends AbstractModel implements ContactInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MagoArab\WhatsappChat\Model\ResourceModel\Contact::class);
    }

    /**
     * @inheritDoc
     */
    public function getOrder()
    {
        return $this->getData(self::ORDER);
    }

    /**
     * @inheritDoc
     */
    public function setOrder($order)
    {
        return $this->setData(self::ORDER, $order);
    }

    /**
     * @inheritDoc
     */
    public function getActive()
    {
        return $this->getData(self::ACTIVE);
    }

    /**
     * @inheritDoc
     */
    public function setActive($active)
    {
        return $this->setData(self::ACTIVE, $active);
    }

    /**
     * @inheritDoc
     */
    public function getChat()
    {
        return $this->getData(self::CHAT);
    }

    /**
     * @inheritDoc
     */
    public function setChat($chat)
    {
        return $this->setData(self::CHAT, $chat);
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
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setType($type)
    {
        return $this->setData(self::TYPE, $type);
    }

    /**
     * @inheritDoc
     */
    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }

    /**
     * @inheritDoc
     */
    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }

    /**
     * @inheritDoc
     */
    public function getGroup()
    {
        return $this->getData(self::GROUP);
    }

    /**
     * @inheritDoc
     */
    public function setGroup($group)
    {
        return $this->setData(self::GROUP, $group);
    }

    /**
     * @inheritDoc
     */
    public function getFirstname()
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * @inheritDoc
     */
    public function setFirstname($firstname)
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    /**
     * @inheritDoc
     */
    public function getLastname()
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * @inheritDoc
     */
    public function setLastname($lastname)
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    /**
     * @inheritDoc
     */
    public function getLabel()
    {
        return $this->getData(self::LABEL);
    }

    /**
     * @inheritDoc
     */
    public function setLabel($label)
    {
        return $this->setData(self::LABEL, $label);
    }

    /**
     * @inheritDoc
     */
    public function getMessage()
    {
        return $this->getData(self::MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function setMessage($message)
    {
        return $this->setData(self::MESSAGE, $message);
    }

    /**
     * @inheritDoc
     */
    public function getTimefrom()
    {
        return $this->getData(self::TIMEFROM);
    }

    /**
     * @inheritDoc
     */
    public function setTimefrom($timefrom)
    {
        return $this->setData(self::TIMEFROM, $timefrom);
    }

    /**
     * @inheritDoc
     */
    public function getTimeto()
    {
        return $this->getData(self::TIMETO);
    }

    /**
     * @inheritDoc
     */
    public function setTimeto($timeto)
    {
        return $this->setData(self::TIMETO, $timeto);
    }

    /**
     * @inheritDoc
     */
    public function getTimezone()
    {
        return $this->getData(self::TIMEZONE);
    }

    /**
     * @inheritDoc
     */
    public function setTimezone($timezone)
    {
        return $this->setData(self::TIMEZONE, $timezone);
    }

    /**
     * @inheritDoc
     */
    public function getVisibility()
    {
        return $this->getData(self::VISIBILITY);
    }

    /**
     * @inheritDoc
     */
    public function setVisibility($visibility)
    {
        return $this->setData(self::VISIBILITY, $visibility);
    }

    /**
     * @inheritDoc
     */
    public function getTimedays()
    {
        return $this->getData(self::TIMEDAYS);
    }

    /**
     * @inheritDoc
     */
    public function setTimedays($timedays)
    {
        return $this->setData(self::TIMEDAYS, $timedays);
    }

    /**
     * @inheritDoc
     */
    public function getDisplay()
    {
        return $this->getData(self::DISPLAY);
    }

    /**
     * @inheritDoc
     */
    public function setDisplay($display)
    {
        return $this->setData(self::DISPLAY, $display);
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
