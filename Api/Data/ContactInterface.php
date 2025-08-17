<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api\Data;

/**
 * Contact interface
 */
interface ContactInterface
{
    const ID = 'id';
    const ORDER = 'order';
    const ACTIVE = 'active';
    const CHAT = 'chat';
    const AVATAR = 'avatar';
    const TYPE = 'type';
    const PHONE = 'phone';
    const GROUP = 'group';
    const FIRSTNAME = 'firstname';
    const LASTNAME = 'lastname';
    const LABEL = 'label';
    const MESSAGE = 'message';
    const TIMEFROM = 'timefrom';
    const TIMETO = 'timeto';
    const TIMEZONE = 'timezone';
    const VISIBILITY = 'visibility';
    const TIMEDAYS = 'timedays';
    const DISPLAY = 'display';
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
     * Get order
     *
     * @return int
     */
    public function getOrder();

    /**
     * Set order
     *
     * @param int $order
     * @return $this
     */
    public function setOrder($order);

    /**
     * Get active
     *
     * @return int
     */
    public function getActive();

    /**
     * Set active
     *
     * @param int $active
     * @return $this
     */
    public function setActive($active);

    /**
     * Get chat
     *
     * @return int
     */
    public function getChat();

    /**
     * Set chat
     *
     * @param int $chat
     * @return $this
     */
    public function setChat($chat);

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar();

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return $this
     */
    public function setAvatar($avatar);

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
     * Get firstname
     *
     * @return string
     */
    public function getFirstname();

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel();

    /**
     * Set label
     *
     * @param string $label
     * @return $this
     */
    public function setLabel($label);

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
     * Get display
     *
     * @return string
     */
    public function getDisplay();

    /**
     * Set display
     *
     * @param string $display
     * @return $this
     */
    public function setDisplay($display);

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
