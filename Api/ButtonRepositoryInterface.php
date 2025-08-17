<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api;

use MagoArab\WhatsappChat\Api\Data\ButtonInterface;

/**
 * Button repository interface
 */
interface ButtonRepositoryInterface
{
    /**
     * Get button settings
     *
     * @return ButtonInterface
     */
    public function get();

    /**
     * Save button settings
     *
     * @param ButtonInterface $button
     * @return bool
     */
    public function save(ButtonInterface $button);

    /**
     * Delete button settings
     *
     * @return bool
     */
    public function delete();
}
