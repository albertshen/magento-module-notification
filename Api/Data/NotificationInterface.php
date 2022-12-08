<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Api\Data;

/**
 * Notification Interface
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotificationInterface
{

    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID = 'id';
    const CUSTOMER_ID = 'customer_id';
    const STORE_ID = 'store_id';
    const TOUSER = 'touser';
    const INCREMENT_ID = 'increment_id';
    const TYPE = 'type';
    const EVENT = 'event';
    const TEMPLATE_ID = 'template_id';
    const MESSAGE_DATA = 'message_data';
    const GATEWAY = 'gateway';
    const STATUS = 'status';
    const SID = 'sid';
    const REQUEST = 'request';
    const RESPONSE = 'response';
    /**#@-*/

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
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId();

    /**
     * Set customerId
     *
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId);

    /**
     * Get storeId
     *
     * @return int
     */
    public function getStoreId();

    /**
     * Set storeId
     *
     * @param int $storeId
     * @return $this
     */
    public function setStoreId($storeId);

    /**
     * Get Touser
     *
     * @return string
     */
    public function getTouser();

    /**
     * Set Touser
     *
     * @param string $touser
     * @return $this
     */
    public function setTouser($touser);

    /**
     * Get Increment Id
     *
     * @return string
     */
    public function getIncrementId();

    /**
     * Set Increment Id
     *
     * @param string $incrementId
     * @return $this
     */
    public function setIncrementId($incrementId);

    /**
     * Get Type
     *
     * @return string
     */
    public function getType();

    /**
     * Set Type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type);

    /**
     * Get Event
     *
     * @return string
     */
    public function getEvent();

    /**
     * Set Event
     *
     * @param string $event
     * @return $this
     */
    public function setEvent($event);

    /**
     * Get Template ID
     *
     * @return string
     */
    public function getTemplateId();

    /**
     * Set Template ID
     *
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId($templateId);

    /**
     * Get Message Data
     *
     * @return string
     */
    public function getMessageData();

    /**
     * Set Message Data
     *
     * @param string $messageData
     * @return $this
     */
    public function setMessageData($messageData);

    /**
     * Get Gateway
     *
     * @return string
     */
    public function getGateway();

    /**
     * Set Gateway
     *
     * @param string $gateway
     * @return $this
     */
    public function setGateway($gateway);

    /**
     * Get Status
     *
     * @return string
     */
    public function getStatus();

    /**
     * Set Status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Get Sid
     *
     * @return string
     */
    public function getSid();

    /**
     * Set Status
     *
     * @param string $sid
     * @return $this
     */
    public function setSid($sid);

    /**
     * Get Request
     *
     * @return string
     */
    public function getRequest();

    /**
     * Set Request
     *
     * @param string $request
     * @return $this
     */
    public function setRequest($request);

    /**
     * Get Response
     *
     * @return string
     */
    public function getResponse();

    /**
     * Set Response
     *
     * @param string $response
     * @return $this
     */
    public function setResponse($response);

}
