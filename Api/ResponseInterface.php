<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Api;

/**
 * Interface for sms result.
 * @api
 * @since 100.0.2
 */
interface ResponseInterface
{

    const STATUS_SUCCESS = 'success';

    const STATUS_FAILURE = 'failure';

    /**
     * Get sid.
     * 
     * @return string
     */
    public function getSid();

    /**
     * Set sid.
     * 
     * @param string $sid
     * @return $this
     */
    public function setSid($sid);

    /**
     * Get status.
     * 
     * @return string
     */
    public function getStatus();

    /**
     * Set status.
     * 
     * @param string $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Get body.
     * 
     * @return string
     */
    public function getBody();

    /**
     * Set body.
     * 
     * @param string $body
     * @return $this
     */
    public function setBody($body);
}