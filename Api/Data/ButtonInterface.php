<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api\Data;

/**
 * Button interface
 */
interface ButtonInterface
{
    const ID = 'id';
    const LAYOUT = 'layout';
    const BOX = 'box';
    const POSITION = 'position';
    const TEXT = 'text';
    const MESSAGE = 'message';
    const ICON = 'icon';
    const TYPE = 'type';
    const PHONE = 'phone';
    const GROUP = 'group';
    const DEVELOPER = 'developer';
    const ROUNDED = 'rounded';
    const TIMEFROM = 'timefrom';
    const TIMETO = 'timeto';
    const TIMEDAYS = 'timedays';
    const TIMEZONE = 'timezone';
    const VISIBILITY = 'visibility';
    const ANIMATION_NAME = 'animation_name';
    const ANIMATION_DELAY = 'animation_delay';
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
     * Get layout
     *
     * @return string
     */
    public function getLayout();

    /**
     * Set layout
     *
     * @param string $layout
     * @return $this
     */
    public function setLayout($layout);

    /**
     * Get box
     *
     * @return string
     */
    public function getBox();

    /**
     * Set box
     *
     * @param string $box
     * @return $this
     */
    public function setBox($box);

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition();

    /**
     * Set position
     *
     * @param string $position
     * @return $this
     */
    public function setPosition($position);

    /**
     * Get text
     *
     * @return string
     */
    public function getText();

    /**
     * Set text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text);

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage();

    /**
     * Set message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon();

    /**
     * Set icon
     *
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon);

    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type);

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone();

    /**
     * Set phone
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone);

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup();

    /**
     * Set group
     *
     * @param string $group
     * @return $this
     */
    public function setGroup($group);

    /**
     * Get developer
     *
     * @return string
     */
    public function getDeveloper();

    /**
     * Set developer
     *
     * @param string $developer
     * @return $this
     */
    public function setDeveloper($developer);

    /**
     * Get rounded
     *
     * @return string
     */
    public function getRounded();

    /**
     * Set rounded
     *
     * @param string $rounded
     * @return $this
     */
    public function setRounded($rounded);

    /**
     * Get timefrom
     *
     * @return string
     */
    public function getTimefrom();

    /**
     * Set timefrom
     *
     * @param string $timefrom
     * @return $this
     */
    public function setTimefrom($timefrom);

    /**
     * Get timeto
     *
     * @return string
     */
    public function getTimeto();

    /**
     * Set timeto
     *
     * @param string $timeto
     * @return $this
     */
    public function setTimeto($timeto);

    /**
     * Get timedays
     *
     * @return string
     */
    public function getTimedays();

    /**
     * Set timedays
     *
     * @param string $timedays
     * @return $this
     */
    public function setTimedays($timedays);

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone();

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone);

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility();

    /**
     * Set visibility
     *
     * @param string $visibility
     * @return $this
     */
    public function setVisibility($visibility);

    /**
     * Get animation name
     *
     * @return string
     */
    public function getAnimationName();

    /**
     * Set animation name
     *
     * @param string $animationName
     * @return $this
     */
    public function setAnimationName($animationName);

    /**
     * Get animation delay
     *
     * @return string
     */
    public function getAnimationDelay();

    /**
     * Set animation delay
     *
     * @param string $animationDelay
     * @return $this
     */
    public function setAnimationDelay($animationDelay);

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
