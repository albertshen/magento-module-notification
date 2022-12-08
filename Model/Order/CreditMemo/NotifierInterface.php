<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
 namespace AlbertMage\Notification\Model\Order\CreditMemo;

/**
 * Interface for CreditMemo notifier.
 *
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotifierInterface
{
    /**
     * Notifies customer.
     *
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     *
     */
    public function notify(
        \Magento\Sales\Api\Data\OrderInterface $order
    );
}