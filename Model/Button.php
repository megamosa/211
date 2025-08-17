<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use Magento\Framework\Model\AbstractModel;
use MagoArab\WhatsappChat\Api\Data\ButtonInterface;

/**
 * Button model
 */
class Button extends AbstractModel implements ButtonInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MagoArab\WhatsappChat\Model\ResourceModel\Button::class);
    }

    /**
     * @inheritDoc
     */
    public function getLayout()
    {
        return $this->getData(self::LAYOUT);
    }

    /**
     * @inheritDoc
     */
    public function setLayout($layout)
    {
        return $this->setData(self::LAYOUT, $layout);
    }

    /**
     * @inheritDoc
     */
    public function getBox()
    {
        return $this->getData(self::BOX);
    }

    /**
     * @inheritDoc
     */
    public function setBox($box)
    {
        return $this->setData(self::BOX, $box);
    }

    /**
     * @inheritDoc
     */
    public function getPosition()
    {
        return $this->getData(self::POSITION);
    }

    /**
     * @inheritDoc
     */
    public function setPosition($position)
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * @inheritDoc
     */
    public function getText()
    {
        return $this->getData(self::TEXT);
    }

    /**
     * @inheritDoc
     */
    public function setText($text)
    {
        return $this->setData(self::TEXT, $text);
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
    public function getIcon()
    {
        return $this->getData(self::ICON);
    }

    /**
     * @inheritDoc
     */
    public function setIcon($icon)
    {
        return $this->setData(self::ICON, $icon);
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
    public function getDeveloper()
    {
        return $this->getData(self::DEVELOPER);
    }

    /**
     * @inheritDoc
     */
    public function setDeveloper($developer)
    {
        return $this->setData(self::DEVELOPER, $developer);
    }

    /**
     * @inheritDoc
     */
    public function getRounded()
    {
        return $this->getData(self::ROUNDED);
    }

    /**
     * @inheritDoc
     */
    public function setRounded($rounded)
    {
        return $this->setData(self::ROUNDED, $rounded);
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
    public function getAnimationName()
    {
        return $this->getData(self::ANIMATION_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setAnimationName($animationName)
    {
        return $this->setData(self::ANIMATION_NAME, $animationName);
    }

    /**
     * @inheritDoc
     */
    public function getAnimationDelay()
    {
        return $this->getData(self::ANIMATION_DELAY);
    }

    /**
     * @inheritDoc
     */
    public function setAnimationDelay($animationDelay)
    {
        return $this->setData(self::ANIMATION_DELAY, $animationDelay);
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
