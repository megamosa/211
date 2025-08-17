<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api;

use MagoArab\WhatsappChat\Api\Data\BoxInterface;

/**
 * Box repository interface
 */
interface BoxRepositoryInterface
{
    /**
     * Get box settings
     *
     * @return BoxInterface
     */
    public function get();

    /**
     * Save box settings
     *
     * @param BoxInterface $box
     * @return bool
     */
    public function save(BoxInterface $box);

    /**
     * Delete box settings
     *
     * @return bool
     */
    public function delete();
}
