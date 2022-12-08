<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Model;

use Magento\Framework\Model\AbstractModel;
use AlbertMage\Notification\Api\Data\QueueInterface;

/**
 * Class Queue
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Queue extends AbstractModel implements QueueInterface
{
    /**
     * @inheritDoc
     */
    public function getStoreId()
    {
        return $this->getData(self::STORE_ID);
    }

    /**
     * @inheritDoc
     */
    public function setStoreId($storeId)
    {
        $this->setData(self::STORE_ID, $storeId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerId($customerId)
    {
        $this->setData(self::CUSTOMER_ID, $customerId);
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getIncrementId()
    {
        return $this->getData(self::INCREMENT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setIncrementId($incrementId)
    {
        $this->setData(self::INCREMENT_ID, $incrementId);
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getTouser()
    {
        return $this->getData(self::TOUSER);
    }

    /**
     * @inheritDoc
     */
    public function setTouser($touser)
    {
        $this->setData(self::TOUSER, $touser);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getEvent()
    {
        return $this->getData(self::EVENT);
    }

    /**
     * @inheritDoc
     */
    public function setEvent($event)
    {
        $this->setData(self::EVENT, $event);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMessageData()
    {
        return $this->getData(self::MESSAGE_DATA);
    }

    /**
     * @inheritDoc
     */
    public function setMessageData($messageData)
    {
        $this->setData(self::MESSAGE_DATA, $messageData);
        return $this;
    }
    
}