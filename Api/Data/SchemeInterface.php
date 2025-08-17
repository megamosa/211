<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api\Data;

/**
 * Scheme interface
 */
interface SchemeInterface
{
    const ID = 'id';
    const COLOR = 'color';
    const COLOR_HOVER = 'color_hover';
    const COLOR_TEXT = 'color_text';
    const COLOR_TEXT_HOVER = 'color_text_hover';
    const COLOR_BOX = 'color_box';
    const COLOR_BOX_TEXT = 'color_box_text';
    const COLOR_BOX_HOVER = 'color_box_hover';
    const COLOR_BOX_TEXT_HOVER = 'color_box_text_hover';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get color
     *
     * @return string
     */
    public function getColor();

    /**
     * Set color
     *
     * @param string $color
     * @return $this
     */
    public function setColor($color);

    /**
     * Get color hover
     *
     * @return string
     */
    public function getColorHover();

    /**
     * Set color hover
     *
     * @param string $colorHover
     * @return $this
     */
    public function setColorHover($colorHover);

    /**
     * Get color text
     *
     * @return string
     */
    public function getColorText();

    /**
     * Set color text
     *
     * @param string $colorText
     * @return $this
     */
    public function setColorText($colorText);

    /**
     * Get color text hover
     *
     * @return string
     */
    public function getColorTextHover();

    /**
     * Set color text hover
     *
     * @param string $colorTextHover
     * @return $this
     */
    public function setColorTextHover($colorTextHover);

    /**
     * Get color box
     *
     * @return string
     */
    public function getColorBox();

    /**
     * Set color box
     *
     * @param string $colorBox
     * @return $this
     */
    public function setColorBox($colorBox);

    /**
     * Get color box text
     *
     * @return string
     */
    public function getColorBoxText();

    /**
     * Set color box text
     *
     * @param string $colorBoxText
     * @return $this
     */
    public function setColorBoxText($colorBoxText);

    /**
     * Get color box hover
     *
     * @return string
     */
    public function getColorBoxHover();

    /**
     * Set color box hover
     *
     * @param string $colorBoxHover
     * @return $this
     */
    public function setColorBoxHover($colorBoxHover);

    /**
     * Get color box text hover
     *
     * @return string
     */
    public function getColorBoxTextHover();

    /**
     * Set color box text hover
     *
     * @param string $colorBoxTextHover
     * @return $this
     */
    public function setColorBoxTextHover($colorBoxTextHover);

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set created at
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * Set updated at
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);
}
