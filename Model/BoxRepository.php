<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use MagoArab\WhatsappChat\Api\BoxRepositoryInterface;
use MagoArab\WhatsappChat\Api\Data\BoxInterface;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * Box repository
 */
class BoxRepository implements BoxRepositoryInterface
{
    /**
     * @var BoxFactory
     */
    private $boxFactory;

    /**
     * @param BoxFactory $boxFactory
     */
    public function __construct(BoxFactory $boxFactory)
    {
        $this->boxFactory = $boxFactory;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        $box = $this->boxFactory->create();
        $box->load(1); // Load the first record

        if (!$box->getId()) {
            // Create default box if none exists
            $box->setData([
                'header' => __('Need help?'),
                'footer' => __('We\'re here to help you!'),
                'name' => __('Support Team'),
                'work' => __('Customer Service'),
                'avatar' => ''
            ]);
            $box->save();
        }

        return $box;
    }

    /**
     * @inheritDoc
     */
    public function save(BoxInterface $box)
    {
        try {
            $box->save();
            return true;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__('Could not save box: %1', $exception->getMessage()));
        }
    }

    /**
     * @inheritDoc
     */
    public function delete()
    {
        $box = $this->get();
        if ($box->getId()) {
            $box->delete();
            return true;
        }
        return false;
    }
}
