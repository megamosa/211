<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use MagoArab\WhatsappChat\Model\ContactFactory;

/**
 * Contacts block for WhatsApp Chat
 */
class Contacts extends Template
{
    /**
     * @var ContactFactory
     */
    protected $contactFactory;

    /**
     * @param Context $context
     * @param ContactFactory $contactFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        ContactFactory $contactFactory,
        array $data = []
    ) {
        $this->contactFactory = $contactFactory;
        parent::__construct($context, $data);
    }

    /**
     * Get all contacts
     *
     * @return \MagoArab\WhatsappChat\Model\ResourceModel\Contact\Collection
     */
    public function getContacts()
    {
        return $this->contactFactory->create()->getCollection();
    }

    /**
     * Get add new contact URL
     *
     * @return string
     */
    public function getAddUrl()
    {
        return $this->getUrl('*/*/new');
    }
}
