<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Api\Data;

/**
 * Box interface
 */
interface BoxInterface
{
    const ID = 'id';
    const HEADER = 'header';
    const FOOTER = 'footer';
    const NAME = 'name';
    const WORK = 'work';
    const AVATAR = 'avatar';
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
     * Get header
     *
     * @return string
     */
    public function getHeader();

    /**
     * Set header
     *
     * @param string $header
     * @return $this
     */
    public function setHeader($header);

    /**
     * Get footer
     *
     * @return string
     */
    public function getFooter();

    /**
     * Set footer
     *
     * @param string $footer
     * @return $this
     */
    public function setFooter($footer);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get work
     *
     * @return string
     */
    public function getWork();

    /**
     * Set work
     *
     * @param string $work
     * @return $this
     */
    public function setWork($work);

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
