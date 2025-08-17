<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use Magento\Framework\Model\AbstractModel;
use MagoArab\WhatsappChat\Api\Data\SchemeInterface;

/**
 * Scheme model
 */
class Scheme extends AbstractModel implements SchemeInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\MagoArab\WhatsappChat\Model\ResourceModel\Scheme::class);
    }

    /**
     * @inheritDoc
     */
    public function getColor()
    {
        return $this->getData(self::COLOR);
    }

    /**
     * @inheritDoc
     */
    public function setColor($color)
    {
        return $this->setData(self::COLOR, $color);
    }

    /**
     * @inheritDoc
     */
    public function getColorHover()
    {
        return $this->getData(self::COLOR_HOVER);
    }

    /**
     * @inheritDoc
     */
    public function setColorHover($colorHover)
    {
        return $this->setData(self::COLOR_HOVER, $colorHover);
    }

    /**
     * @inheritDoc
     */
    public function getColorText()
    {
        return $this->getData(self::COLOR_TEXT);
    }

    /**
     * @inheritDoc
     */
    public function setColorText($colorText)
    {
        return $this->setData(self::COLOR_TEXT, $colorText);
    }

    /**
     * @inheritDoc
     */
    public function getColorTextHover()
    {
        return $this->getData(self::COLOR_TEXT_HOVER);
    }

    /**
     * @inheritDoc
     */
    public function setColorTextHover($colorTextHover)
    {
        return $this->setData(self::COLOR_TEXT_HOVER, $colorTextHover);
    }

    /**
     * @inheritDoc
     */
    public function getColorBox()
    {
        return $this->getData(self::COLOR_BOX);
    }

    /**
     * @inheritDoc
     */
    public function setColorBox($colorBox)
    {
        return $this->setData(self::COLOR_BOX, $colorBox);
    }

    /**
     * @inheritDoc
     */
    public function getColorBoxText()
    {
        return $this->getData(self::COLOR_BOX_TEXT);
    }

    /**
     * @inheritDoc
     */
    public function setColorBoxText($colorBoxText)
    {
        return $this->setData(self::COLOR_BOX_TEXT, $colorBoxText);
    }

    /**
     * @inheritDoc
     */
    public function getColorBoxHover()
    {
        return $this->getData(self::COLOR_BOX_HOVER);
    }

    /**
     * @inheritDoc
     */
    public function setColorBoxHover($colorBoxHover)
    {
        return $this->setData(self::COLOR_BOX_HOVER, $colorBoxHover);
    }

    /**
     * @inheritDoc
     */
    public function getColorBoxTextHover()
    {
        return $this->getData(self::COLOR_BOX_TEXT_HOVER);
    }

    /**
     * @inheritDoc
     */
    public function setColorBoxTextHover($colorBoxTextHover)
    {
        return $this->setData(self::COLOR_BOX_TEXT_HOVER, $colorBoxTextHover);
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
