<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Sms\Model;

use Magento\Framework\Model\AbstractModel;
use AlbertMage\Sms\Api\Data\NotificationMessageInterface;

/**
 * Class NotificationMessage
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class NotificationMessage extends AbstractModel implements NotificationMessageInterface
{
    
    /**
     * Initialize notification message model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\AlbertMage\Sms\Model\ResourceModel\NotificationMessage::class);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @inheritDoc
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
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
        $this->setData(self::TOUSER, $id);
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
        $this->setData(self::INCREMENT_ID, $id);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setType($type)
    {
        $this->setData(self::TYPE, $type);
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
    public function getTemplateId()
    {
        return $this->getData(self::TEMPLATE_ID);
    }
    
    /**
     * @inheritDoc
     */
    public function setTemplateId($templateId)
    {
        $this->setData(self::TEMPLATE_ID, $templateId);
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

    /**
     * @inheritDoc
     */
    public function getGateway()
    {
        return $this->getData(self::GATEWAY);
    }

    /**
     * @inheritDoc
     */
    public function setGateway($gateway)
    {
        $this->setData(self::GATEWAY, $gateway);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus($status)
    {
        $this->setData(self::STATUS, $status);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSid()
    {
        return $this->getData(self::SID);
    }

    /**
     * @inheritDoc
     */
    public function setSid($sid)
    {
        $this->setData(self::SID, $sid);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRequest()
    {
        return $this->getData(self::REQUEST);
    }

    /**
     * @inheritDoc
     */
    public function setRequest($request)
    {
        $this->setData(self::REQUEST, $request);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getResponse()
    {
        return $this->getData(self::RESPONSE);
    }

    /**
     * @inheritDoc
     */
    public function setResponse($request)
    {
        $this->setData(self::RESPONSE, $request);
        return $this;
    }
}
