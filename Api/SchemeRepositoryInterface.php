<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api;

use MagoArab\WhatsappChat\Api\Data\SchemeInterface;

/**
 * Scheme repository interface
 */
interface SchemeRepositoryInterface
{
    /**
     * Get scheme settings
     *
     * @return SchemeInterface
     */
    public function get();

    /**
     * Save scheme settings
     *
     * @param SchemeInterface $scheme
     * @return bool
     */
    public function save(SchemeInterface $scheme);

    /**
     * Delete scheme settings
     *
     * @return bool
     */
    public function delete();
}
