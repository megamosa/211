<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use MagoArab\WhatsappChat\Api\ContactRepositoryInterface;
use MagoArab\WhatsappChat\Model\Contact;
use MagoArab\WhatsappChat\Api\ButtonRepositoryInterface;
use MagoArab\WhatsappChat\Model\Button;
use MagoArab\WhatsappChat\Api\BoxRepositoryInterface;
use MagoArab\WhatsappChat\Model\Box;
use MagoArab\WhatsappChat\Api\SchemeRepositoryInterface;
use MagoArab\WhatsappChat\Model\Scheme;
use MagoArab\WhatsappChat\Api\DisplayRepositoryInterface;
use MagoArab\WhatsappChat\Model\Display;

/**
 * Install data patch for WhatsApp Chat module
 */
class InstallData implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * @var Contact
     */
    private $contactModel;

    /**
     * @var ButtonRepositoryInterface
     */
    private $buttonRepository;

    /**
     * @var Button
     */
    private $buttonModel;

    /**
     * @var BoxRepositoryInterface
     */
    private $boxRepository;

    /**
     * @var Box
     */
    private $boxModel;

    /**
     * @var SchemeRepositoryInterface
     */
    private $schemeRepository;

    /**
     * @var Scheme
     */
    private $schemeModel;

    /**
     * @var DisplayRepositoryInterface
     */
    private $displayRepository;

    /**
     * @var Display
     */
    private $displayModel;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param ContactRepositoryInterface $contactRepository
     * @param Contact $contactModel
     * @param ButtonRepositoryInterface $buttonRepository
     * @param Button $buttonModel
     * @param BoxRepositoryInterface $boxRepository
     * @param Box $boxModel
     * @param SchemeRepositoryInterface $schemeRepository
     * @param Scheme $schemeModel
     * @param DisplayRepositoryInterface $displayRepository
     * @param Display $displayModel
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        ContactRepositoryInterface $contactRepository,
        Contact $contactModel,
        ButtonRepositoryInterface $buttonRepository,
        Button $buttonModel,
        BoxRepositoryInterface $boxRepository,
        Box $boxModel,
        SchemeRepositoryInterface $schemeRepository,
        Scheme $schemeModel,
        DisplayRepositoryInterface $displayRepository,
        Display $displayModel
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->contactRepository = $contactRepository;
        $this->contactModel = $contactModel;
        $this->buttonRepository = $buttonRepository;
        $this->buttonModel = $buttonModel;
        $this->boxRepository = $boxRepository;
        $this->boxModel = $boxModel;
        $this->schemeRepository = $schemeRepository;
        $this->schemeModel = $schemeModel;
        $this->displayRepository = $displayRepository;
        $this->displayModel = $displayModel;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        // Create default contacts (agents)
        $this->createDefaultContacts();

        // Create default button settings
        $this->createDefaultButton();

        // Create default box settings
        $this->createDefaultBox();

        // Create default scheme settings
        $this->createDefaultScheme();

        // Create default display settings
        $this->createDefaultDisplay();

        $this->moduleDataSetup->endSetup();
    }

    /**
     * Create default contacts
     */
    private function createDefaultContacts()
    {
        $contacts = [
            [
                'firstname' => 'أحمد',
                'lastname' => 'محمد',
                'phone' => '+201234567890',
                'message' => 'مرحباً! كيف يمكنني مساعدتك؟',
                'label' => 'الدعم الفني',
                'avatar' => '',
                'is_active' => 1
            ],
            [
                'firstname' => 'فاطمة',
                'lastname' => 'علي',
                'phone' => '+201234567891',
                'message' => 'مرحباً! هل تريد معلومات عن منتجاتنا؟',
                'label' => 'المبيعات',
                'avatar' => '',
                'is_active' => 1
            ],
            [
                'firstname' => 'محمد',
                'lastname' => 'حسن',
                'phone' => '+201234567892',
                'message' => 'مرحباً! كيف يمكنني مساعدتك في الفواتير؟',
                'label' => 'المحاسبة',
                'avatar' => '',
                'is_active' => 1
            ]
        ];

        foreach ($contacts as $contactData) {
            $contact = clone $this->contactModel;
            $contact->setData($contactData);
            $this->contactRepository->save($contact);
        }
    }

    /**
     * Create default button settings
     */
    private function createDefaultButton()
    {
        $button = clone $this->buttonModel;
        $button->setData([
            'position' => 'bottom-right',
            'layout' => 'button',
            'text' => 'WhatsApp',
            'box' => 'yes',
            'rounded' => 'yes',
            'animation_name' => 'none',
            'animation_delay' => '0'
        ]);
        $this->buttonRepository->save($button);
    }

    /**
     * Create default box settings
     */
    private function createDefaultBox()
    {
        $box = clone $this->boxModel;
        $box->setData([
            'header' => 'مرحباً! اختر أحد ممثلينا للدردشة',
            'footer' => 'متاح من الساعة 9 صباحاً حتى 6 مساءً'
        ]);
        $this->boxRepository->save($box);
    }

    /**
     * Create default scheme settings
     */
    private function createDefaultScheme()
    {
        $scheme = clone $this->schemeModel;
        $scheme->setData([
            'color' => '#25D366',
            'color_hover' => '#128C7E',
            'color_text' => '#FFFFFF',
            'color_text_hover' => '#FFFFFF',
            'color_box' => '#FFFFFF',
            'color_box_text' => '#333333',
            'color_box_hover' => '#F8F9FA',
            'color_box_text_hover' => '#333333'
        ]);
        $this->schemeRepository->save($scheme);
    }

    /**
     * Create default display settings
     */
    private function createDefaultDisplay()
    {
        $display = clone $this->displayModel;
        $display->setData([
            'design' => 'design-1',
            'show_on_mobile' => 1,
            'show_on_desktop' => 1,
            'time_restrictions' => 0,
            'start_time' => '09:00',
            'end_time' => '18:00'
        ]);
        $this->displayRepository->save($display);
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
