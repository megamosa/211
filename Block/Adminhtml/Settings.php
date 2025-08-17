<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;

/**
 * Settings block for WhatsApp Chat
 */
class Settings extends Template
{
    /**
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Get configuration URL
     *
     * @return string
     */
    public function getConfigUrl()
    {
        return $this->getUrl('admin/system_config/edit', ['section' => 'whatsapp_chat']);
    }
}
