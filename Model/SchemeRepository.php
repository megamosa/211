<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use MagoArab\WhatsappChat\Api\SchemeRepositoryInterface;
use MagoArab\WhatsappChat\Api\Data\SchemeInterface;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * Scheme repository
 */
class SchemeRepository implements SchemeRepositoryInterface
{
    /**
     * @var SchemeFactory
     */
    private $schemeFactory;

    /**
     * @param SchemeFactory $schemeFactory
     */
    public function __construct(SchemeFactory $schemeFactory)
    {
        $this->schemeFactory = $schemeFactory;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        $scheme = $this->schemeFactory->create();
        $scheme->load(1); // Load the first record

        if (!$scheme->getId()) {
            // Create default scheme if none exists
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
            $scheme->save();
        }

        return $scheme;
    }

    /**
     * @inheritDoc
     */
    public function save(SchemeInterface $scheme)
    {
        try {
            $scheme->save();
            return true;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__('Could not save scheme: %1', $exception->getMessage()));
        }
    }

    /**
     * @inheritDoc
     */
    public function delete()
    {
        $scheme = $this->get();
        if ($scheme->getId()) {
            $scheme->delete();
            return true;
        }
        return false;
    }
}
