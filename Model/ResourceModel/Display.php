<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Display resource model
 */
class Display extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magoarab_whatsapp_chat_display', 'id');
    }
}
