<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Model;

use AlbertMage\Notification\Api\ResponseInterface;

/**
 * Interface for sms result.
 * @api
 * @since 100.0.2
 */
class Response implements ResponseInterface
{

    /**
     * @var string
     */
    private $sid;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $body;

    /**
     * @inheritdoc
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @inheritdoc
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @inheritdoc
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @inheritdoc
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @inheritdoc
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}