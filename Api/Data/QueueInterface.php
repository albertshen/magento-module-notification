<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Api\Data;

/**
 * SmsQueue Interface
 * @author Albert Shen(albertshen1206@gmail.com)
 */
interface QueueInterface
{

    const STORE_ID = 'store_id';
    const CUSTOMER_ID = 'customer_id';
    const INCREMENT_ID = 'increment_id';
    const TOUSER = 'touser';
    const EVENT = 'event';
    const MESSAGE_DATA = 'message_data';

    /**
     * Get Store ID
     *
     * @return int|null
     */
    public function getStoreId();

    /**
     * Set Store ID
     *
     * @param int $storeId
     * @return $this
     */
    public function setStoreId($storeId);

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
     * Get incrementId
     *
     * @return string|null
     */
    public function getIncrementId();

    /**
     * Set incrementId
     *
     * @param string $incrementId
     * @return $this
     */
    public function setIncrementId($incrementId);

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


}
