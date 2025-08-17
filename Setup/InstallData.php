<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use MagoArab\WhatsappChat\Api\ButtonRepositoryInterface;
use MagoArab\WhatsappChat\Api\ContactRepositoryInterface;
use MagoArab\WhatsappChat\Api\DisplayRepositoryInterface;
use MagoArab\WhatsappChat\Api\SchemeRepositoryInterface;
use MagoArab\WhatsappChat\Api\BoxRepositoryInterface;
use MagoArab\WhatsappChat\Model\ButtonFactory;
use MagoArab\WhatsappChat\Model\ContactFactory;
use MagoArab\WhatsappChat\Model\DisplayFactory;
use MagoArab\WhatsappChat\Model\SchemeFactory;
use MagoArab\WhatsappChat\Model\BoxFactory;

/**
 * Install data
 */
class InstallData implements InstallDataInterface
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
     * @var ButtonFactory
     */
    private $buttonFactory;

    /**
     * @var ContactFactory
     */
    private $contactFactory;

    /**
     * @var DisplayFactory
     */
    private $displayFactory;

    /**
     * @var SchemeFactory
     */
    private $schemeFactory;

    /**
     * @var BoxFactory
     */
    private $boxFactory;

    /**
     * @param ButtonRepositoryInterface $buttonRepository
     * @param ContactRepositoryInterface $contactRepository
     * @param DisplayRepositoryInterface $displayRepository
     * @param SchemeRepositoryInterface $schemeRepository
     * @param BoxRepositoryInterface $boxRepository
     * @param ButtonFactory $buttonFactory
     * @param ContactFactory $contactFactory
     * @param DisplayFactory $displayFactory
     * @param SchemeFactory $schemeFactory
     * @param BoxFactory $boxFactory
     */
    public function __construct(
        ButtonRepositoryInterface $buttonRepository,
        ContactRepositoryInterface $contactRepository,
        DisplayRepositoryInterface $displayRepository,
        SchemeRepositoryInterface $schemeRepository,
        BoxRepositoryInterface $boxRepository,
        ButtonFactory $buttonFactory,
        ContactFactory $contactFactory,
        DisplayFactory $displayFactory,
        SchemeFactory $schemeFactory,
        BoxFactory $boxFactory
    ) {
        $this->buttonRepository = $buttonRepository;
        $this->contactRepository = $contactRepository;
        $this->displayRepository = $displayRepository;
        $this->schemeRepository = $schemeRepository;
        $this->boxRepository = $boxRepository;
        $this->buttonFactory = $buttonFactory;
        $this->contactFactory = $contactFactory;
        $this->displayFactory = $displayFactory;
        $this->schemeFactory = $schemeFactory;
        $this->boxFactory = $boxFactory;
    }

    /**
     * Install data
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // Create default button settings
        $button = $this->buttonFactory->create();
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
        $this->buttonRepository->save($button);

        // Create default contact
        $contact = $this->contactFactory->create();
        $contact->setData([
            'order' => 1,
            'active' => 1,
            'chat' => 1,
            'avatar' => '',
            'type' => 'phone',
            'phone' => '1234567890',
            'group' => '',
            'firstname' => 'Support',
            'lastname' => 'Team',
            'label' => __('Customer Service'),
            'message' => __('Hello! How can I help you today?'),
            'timefrom' => '00:00',
            'timeto' => '00:00',
            'timezone' => 'UTC',
            'visibility' => 'readonly',
            'timedays' => '',
            'display' => ''
        ]);
        $this->contactRepository->save($contact);

        // Create default display settings
        $display = $this->displayFactory->create();
        $display->setData([
            'devices' => json_encode(['desktop', 'tablet', 'mobile']),
            'entries' => json_encode(['all']),
            'taxonomies' => json_encode(['all']),
            'target' => json_encode(['all'])
        ]);
        $this->displayRepository->save($display);

        // Create default color scheme
        $scheme = $this->schemeFactory->create();
        $scheme->setData([
            'color' => '#25D366',
            'color_hover' => '#128C7E',
            'color_text' => '#FFFFFF',
            'color_text_hover' => '#FFFFFF',
            'color_box' => '#FFFFFF',
            'color_box_text' => '#000000',
            'color_box_hover' => '#F5F5F5',
            'color_box_text_hover' => '#000000'
        ]);
        $this->schemeRepository->save($scheme);

        // Create default box settings
        $box = $this->boxFactory->create();
        $box->setData([
            'header' => __('Need help?'),
            'footer' => __('We\'re here to help you!'),
            'name' => __('Support Team'),
            'work' => __('Customer Service'),
            'avatar' => ''
        ]);
        $this->boxRepository->save($box);

        $setup->endSetup();
    }
}
