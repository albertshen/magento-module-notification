<?php

namespace AlbertMage\Notification\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use AlbertMage\Notification\Model\Order\Notifier;

class Order implements ObserverInterface
{

    /**
     * @var \AlbertMage\Notification\Model\Order\Notifier
     */
    private $notifier;

    /**
     * @param Notifier $notifier
     */
    public function __construct(
        Notifier $notifier,
    ) {
        $this->notifier = $notifier;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $this->notifier->notify(
            $observer->getEvent()->getOrder()
        );
    }

}