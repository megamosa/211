<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Design source model for WhatsApp Chat
 */
class Design implements OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'design-1', 'label' => __('Design 1 - Modern Minimalist (Green)')],
            ['value' => 'design-2', 'label' => __('Design 2 - Corporate Blue')],
            ['value' => 'design-3', 'label' => __('Design 3 - Dark Elegant')],
            ['value' => 'design-4', 'label' => __('Design 4 - Gradient Modern')],
            ['value' => 'design-5', 'label' => __('Design 5 - Bright Vibrant (Red)')],
            ['value' => 'design-6', 'label' => __('Design 6 - Arabic Banner (Green)')]
        ];
    }
}
