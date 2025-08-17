<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Layout source model
 */
class Layout implements OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'button', 'label' => __('Button')],
            ['value' => 'bubble', 'label' => __('Bubble')]
        ];
    }
}
