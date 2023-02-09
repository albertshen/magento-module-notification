<?php

namespace AlbertMage\Notification\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\MessageQueue\PublisherInterface;
use AlbertMage\Notification\Api\Data\OrderQueueInterfaceFactory;

/**
 * Order Observer
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Order implements ObserverInterface
{

    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * @var OrderQueueInterfaceFactory
     */
    private $orderQueueFactory;

    /**
     * @var string
     */
    private $queueTopic;

    /**
     * @param PublisherInterface $publisher
     * @param OrderQueueInterfaceFactory $orderQueueFactory
     * @param string $queueTopic
     */
    public function __construct(
        PublisherInterface $publisher,
        OrderQueueInterfaceFactory $orderQueueFactory,
        $event,
        $queueTopic = null
    ) {
        $this->publisher = $publisher;
        $this->orderQueueFactory = $orderQueueFactory;
        $this->event = $event;
        $this->queueTopic = $queueTopic;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $queue = $this->orderQueueFactory->create();
        $queue->setEvent($this->event);
        $queue->setOrderId($observer->getEvent()->getOrder()->getId());
        $this->publisher->publish($this->queueTopic, $queue);
    }

}
