<?php
/**
 * Notification entity resource model
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
 namespace AlbertMage\Notification\Model\Order\Invoice;

/**
 * Interface for Invoice notifier.
 *
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotifierInterface
{
    /**
     * Notifies customer.
     *
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param \Magento\Sales\Api\Data\InvoiceInterface $invoice
     *
     */
    public function notify(
        \Magento\Sales\Api\Data\OrderInterface $order,
        \Magento\Sales\Api\Data\InvoiceInterface $invoice
    );
}