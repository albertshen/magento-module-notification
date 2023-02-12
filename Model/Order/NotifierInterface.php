<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model\Order;

/**
 * Interface for Order notifier.
 * 
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotifierInterface
{
    /**
     * Notifies customer.
     *
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param string $event
     * @param \AlbertMage\Notification\Api\Data\NotificationInterface $notification
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @return void
     */
    public function notify(
        \Magento\Sales\Api\Data\OrderInterface $order,
        string $event,
        \AlbertMage\Notification\Api\Data\NotificationInterface $notification
    );
}
