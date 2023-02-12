<?php

namespace AlbertMage\Notification\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use AlbertMage\Notification\Model\Order\Notifier;

/**
 * OrderConsume Observer
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class OrderConsume implements ObserverInterface
{

    /**
     * @var \AlbertMage\Notification\Model\Order\Notifier
     */
    protected $notifier;

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
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(Observer $observer)
    {
        $this->notifier->notify(
            $observer->getEvent()->getOrder()
        );
    }

}