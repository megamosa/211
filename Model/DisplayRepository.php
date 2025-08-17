<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Model;

use MagoArab\WhatsappChat\Api\DisplayRepositoryInterface;
use MagoArab\WhatsappChat\Api\Data\DisplayInterface;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * Display repository
 */
class DisplayRepository implements DisplayRepositoryInterface
{
    /**
     * @var DisplayFactory
     */
    private $displayFactory;

    /**
     * @param DisplayFactory $displayFactory
     */
    public function __construct(DisplayFactory $displayFactory)
    {
        $this->displayFactory = $displayFactory;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        $display = $this->displayFactory->create();
        $display->load(1); // Load the first record

        if (!$display->getId()) {
            // Create default display if none exists
            $display->setData([
                'devices' => json_encode(['desktop', 'tablet', 'mobile']),
                'entries' => json_encode(['all']),
                'taxonomies' => json_encode(['all']),
                'target' => json_encode(['all'])
            ]);
            $display->save();
        }

        return $display;
    }

    /**
     * @inheritDoc
     */
    public function save(DisplayInterface $display)
    {
        try {
            $display->save();
            return true;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__('Could not save display: %1', $exception->getMessage()));
        }
    }

    /**
     * @inheritDoc
     */
    public function delete()
    {
        $display = $this->get();
        if ($display->getId()) {
            $display->delete();
            return true;
        }
        return false;
    }
}
