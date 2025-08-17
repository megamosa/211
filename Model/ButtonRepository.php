<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use MagoArab\WhatsappChat\Api\ButtonRepositoryInterface;
use MagoArab\WhatsappChat\Api\Data\ButtonInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Button repository
 */
class ButtonRepository implements ButtonRepositoryInterface
{
    /**
     * @var ButtonFactory
     */
    private $buttonFactory;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ButtonFactory $buttonFactory
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ButtonFactory $buttonFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->buttonFactory = $buttonFactory;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        $button = $this->buttonFactory->create();
        $button->load(1); // Load the first record

        if (!$button->getId()) {
            // Create default button if none exists
            $button->setData([
                'layout' => 'button',
                'box' => 'no',
                'position' => 'bottom-right',
                'text' => __('How can I help you?'),
                'message' => __('Hello! I\'m testing the WhatsApp Chat plugin'),
                'icon' => 'whatsapp-icon',
                'type' => 'phone',
                'phone' => '1234567890',
                'group' => '',
                'developer' => 'no',
                'rounded' => 'yes',
                'timefrom' => '00:00',
                'timeto' => '00:00',
                'timedays' => '',
                'timezone' => 'UTC',
                'visibility' => 'readonly',
                'animation_name' => '',
                'animation_delay' => ''
            ]);
            $button->save();
        }

        return $button;
    }

    /**
     * @inheritDoc
     */
    public function save(ButtonInterface $button)
    {
        try {
            $button->save();
            return true;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__('Could not save button: %1', $exception->getMessage()));
        }
    }

    /**
     * @inheritDoc
     */
    public function delete()
    {
        $button = $this->get();
        if ($button->getId()) {
            $button->delete();
            return true;
        }
        return false;
    }
}
