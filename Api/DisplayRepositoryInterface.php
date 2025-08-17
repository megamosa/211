<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api;

use MagoArab\WhatsappChat\Api\Data\DisplayInterface;

/**
 * Display repository interface
 */
interface DisplayRepositoryInterface
{
    /**
     * Get display settings
     *
     * @return DisplayInterface
     */
    public function get();

    /**
     * Save display settings
     *
     * @param DisplayInterface $display
     * @return bool
     */
    public function save(DisplayInterface $display);

    /**
     * Delete display settings
     *
     * @return bool
     */
    public function delete();
}
