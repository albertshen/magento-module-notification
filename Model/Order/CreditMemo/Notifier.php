<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model\Order\CreditMemo;

/**
 * Interface for CreditMemo.
 * 
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Notifier implements NotifierInterface
{
    /**
     * @var \AlbertMage\Notification\Model\Order\CreditMemo\NotifierInterface[]
     */
    private $notifiers;

    /**
     * @param \AlbertMage\Notification\Model\Order\CreditMemo\NotifierInterface[] $notifiers
     */
    public function __construct(array $notifiers = [])
    {
        $this->notifiers = $notifiers;
    }

    /**
     * {@inheritdoc}
     */
    public function notify(
        \Magento\Sales\Api\Data\OrderInterface $order
    ) {
        foreach ($this->notifiers as $notifiers) {
            $notifiers->notify($order);
        }
    }
}
