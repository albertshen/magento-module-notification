<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Model;

use Magento\Framework\DataObject;
use AlbertMage\Notification\Api\Data\ResponseInterface;

/**
 * Interface for sms result.
 * @api
 * @since 100.0.2
 */
class Response extends DataObject implements ResponseInterface
{

    /**
     * @inheritdoc
     */
    public function getSid()
    {
        return $this->getData(self::SID);
    }

    /**
     * @inheritdoc
     */
    public function setSid($sid)
    {
        return $this->setData(self::SID, $sid);
    }

    /**
     * @inheritdoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheritdoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->getData(self::BODY);
    }

    /**
     * @inheritdoc
     */
    public function setBody($body)
    {
        return $this->setData(self::BODY, $body);
    }
}