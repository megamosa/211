<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;

/**
 * Preview block for WhatsApp Chat designs
 */
class Preview extends Template
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context, $data);
    }

    /**
     * Get designs array
     *
     * @return array
     */
    public function getDesigns()
    {
        return [
            'design-1' => [
                'name' => 'Design 1 - Modern Minimalist (Green)',
                'description' => 'Clean, modern design with WhatsApp\'s signature green'
            ],
            'design-2' => [
                'name' => 'Design 2 - Corporate Blue',
                'description' => 'Professional blue color scheme'
            ],
            'design-3' => [
                'name' => 'Design 3 - Dark Elegant',
                'description' => 'Sophisticated dark theme'
            ],
            'design-4' => [
                'name' => 'Design 4 - Gradient Modern',
                'description' => 'Beautiful gradient background'
            ],
            'design-5' => [
                'name' => 'Design 5 - Bright Vibrant (Red)',
                'description' => 'Eye-catching red color scheme'
            ],
            'design-6' => [
                'name' => 'Design 6 - Arabic Banner (Green)',
                'description' => 'Arabic banner design with RTL support and emojis'
            ]
        ];
    }
}
