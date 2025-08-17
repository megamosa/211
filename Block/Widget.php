<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Block;

use Magento\Framework\View\Element\Template;
use MagoArab\WhatsappChat\Api\ButtonRepositoryInterface;
use MagoArab\WhatsappChat\Api\ContactRepositoryInterface;
use MagoArab\WhatsappChat\Api\DisplayRepositoryInterface;
use MagoArab\WhatsappChat\Api\SchemeRepositoryInterface;
use MagoArab\WhatsappChat\Api\BoxRepositoryInterface;

/**
 * WhatsApp Chat Widget Block
 */
class Widget extends Template
{
    /**
     * @var ButtonRepositoryInterface
     */
    private $buttonRepository;

    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * @var DisplayRepositoryInterface
     */
    private $displayRepository;

    /**
     * @var SchemeRepositoryInterface
     */
    private $schemeRepository;

    /**
     * @var BoxRepositoryInterface
     */
    private $boxRepository;

    /**
     * @param Template\Context $context
     * @param ButtonRepositoryInterface $buttonRepository
     * @param ContactRepositoryInterface $contactRepository
     * @param DisplayRepositoryInterface $displayRepository
     * @param SchemeRepositoryInterface $schemeRepository
     * @param BoxRepositoryInterface $boxRepository
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ButtonRepositoryInterface $buttonRepository,
        ContactRepositoryInterface $contactRepository,
        DisplayRepositoryInterface $displayRepository,
        SchemeRepositoryInterface $schemeRepository,
        BoxRepositoryInterface $boxRepository,
        array $data = []
    ) {
        $this->buttonRepository = $buttonRepository;
        $this->contactRepository = $contactRepository;
        $this->displayRepository = $displayRepository;
        $this->schemeRepository = $schemeRepository;
        $this->boxRepository = $boxRepository;
        parent::__construct($context, $data);
    }

    /**
     * Get button settings
     *
     * @return object
     */
    public function getButton()
    {
        $scopeConfig = $this->_scopeConfig;
        return (object) [
            'position' => $scopeConfig->getValue('whatsapp_chat/display/button_position', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 'bottom-right',
            'layout' => $scopeConfig->getValue('whatsapp_chat/display/button_layout', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 'button',
            'text' => $scopeConfig->getValue('whatsapp_chat/general/default_message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 'Chat with us',
            'rounded' => 'yes',
            'box' => 'yes',
            'animation_name' => '',
            'animation_delay' => '0'
        ];
    }

    /**
     * Get all contacts
     *
     * @return array
     */
    public function getContacts()
    {
        $scopeConfig = $this->_scopeConfig;
        $phoneNumber = $scopeConfig->getValue('whatsapp_chat/general/phone_number', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: '+1234567890';
        $defaultMessage = $scopeConfig->getValue('whatsapp_chat/general/default_message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 'Hello! I have a question.';
        
        return [
            (object) [
                'id' => 1,
                'firstname' => 'Support',
                'lastname' => 'Team',
                'phone' => $phoneNumber,
                'message' => $defaultMessage,
                'label' => 'Customer Support',
                'avatar' => '',
                'status' => 1
            ]
        ];
    }

    /**
     * Get display settings
     *
     * @return object
     */
    public function getDisplay()
    {
        $scopeConfig = $this->_scopeConfig;
        return (object) [
            'show_on_mobile' => $scopeConfig->getValue('whatsapp_chat/display/show_on_mobile', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 1,
            'show_on_desktop' => $scopeConfig->getValue('whatsapp_chat/display/show_on_desktop', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 1,
            'time_restrictions' => $scopeConfig->getValue('whatsapp_chat/advanced/time_restrictions', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 0,
            'start_time' => $scopeConfig->getValue('whatsapp_chat/advanced/start_time', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: '09:00',
            'end_time' => $scopeConfig->getValue('whatsapp_chat/advanced/end_time', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: '18:00'
        ];
    }

    /**
     * Get scheme settings
     *
     * @return object
     */
    public function getScheme()
    {
        return (object) [
            'color' => '#25D366',
            'color_hover' => '#128C7E',
            'color_text' => '#FFFFFF',
            'color_text_hover' => '#FFFFFF',
            'color_box' => '#FFFFFF',
            'color_box_text' => '#000000',
            'color_box_hover' => '#F5F5F5',
            'color_box_text_hover' => '#000000'
        ];
    }

    /**
     * Get box settings
     *
     * @return object
     */
    public function getBox()
    {
        return (object) [
            'header' => 'Chat with us',
            'footer' => 'We\'re here to help!'
        ];
    }

    /**
     * Check if widget should be displayed
     *
     * @return bool
     */
    public function shouldDisplay()
    {
        $scopeConfig = $this->_scopeConfig;
        $enabled = $scopeConfig->getValue('whatsapp_chat/general/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        
        if (!$enabled) {
            return false;
        }
        
        // Check device restrictions
        $showOnMobile = $scopeConfig->getValue('whatsapp_chat/display/show_on_mobile', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $showOnDesktop = $scopeConfig->getValue('whatsapp_chat/display/show_on_desktop', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        
        // Add device detection logic here if needed
        
        return true;
    }

    /**
     * Get selected design from configuration
     *
     * @return string
     */
    public function getSelectedDesign()
    {
        $scopeConfig = $this->_scopeConfig;
        return $scopeConfig->getValue('whatsapp_chat/display/design', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) ?: 'design-1';
    }

    /**
     * Get CSS properties for scheme
     *
     * @return string
     */
    public function getSchemeCssProperties()
    {
        $scheme = $this->getScheme();
        $style = '';
        
        $properties = [
            'color' => $scheme->getColor(),
            'color_hover' => $scheme->getColorHover(),
            'color_text' => $scheme->getColorText(),
            'color_text_hover' => $scheme->getColorTextHover(),
            'color_box' => $scheme->getColorBox(),
            'color_box_text' => $scheme->getColorBoxText(),
            'color_box_hover' => $scheme->getColorBoxHover(),
            'color_box_text_hover' => $scheme->getColorBoxTextHover()
        ];

        foreach ($properties as $key => $value) {
            if ($value) {
                $style .= sprintf('--whatsapp-scheme-%s:%s;', str_replace('_', '-', $key), $value);
            }
        }

        return $style;
    }

    /**
     * Get CSS properties for button
     *
     * @return string
     */
    public function getButtonCssProperties()
    {
        $button = $this->getButton();
        $style = '';
        
        $properties = [
            'animation_name' => $button->getAnimationName(),
            'animation_delay' => $button->getAnimationDelay()
        ];

        foreach ($properties as $key => $value) {
            if ($value) {
                if ($key === 'animation_delay') {
                    $value = $value . 's';
                }
                $style .= sprintf('--whatsapp-button-%s:%s;', str_replace('_', '-', $key), $value);
            }
        }

        return $style;
    }

    /**
     * Get JSON data for JavaScript
     *
     * @return string
     */
    public function getJsonData()
    {
        $data = [
            'contacts' => $this->getContacts(),
            'display' => $this->getDisplay(),
            'button' => $this->getButton(),
            'box' => $this->getBox(),
            'scheme' => $this->getScheme()
        ];

        return json_encode($data);
    }
}
