<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model\Order;

use AlbertMage\Notification\Model\Order\NotifierInterface;
use AlbertMage\Notification\Model\NotificationRepository;
use AlbertMage\Notification\Api\Data\NotificationInterfaceFactory;

/**
 * Order cancel notifier
 * 
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Notifier
{

    /**
     * @var NotificationRepository
     */
    protected $notificationRepository;

    /**
     * @var NotificationInterfaceFactory
     */
    protected $notificationInterfaceFactory;

    /**
     * @var NotifierInterface[]
     */
    protected $notifiers;

    /**
     * @var string
     */
    protected $event;

    /**
     * @param NotificationRepository $notificationRepository
     * @param NotificationInterfaceFactory $notificationInterfaceFactory
     * @param string $event
     * @param NotifierInterface[] $notifiers
     */
    public function __construct(
        NotificationRepository $notificationRepository,
        NotificationInterfaceFactory $notificationInterfaceFactory,
        string $event,
        array $notifiers = []
    ) {
        $this->notificationRepository = $notificationRepository;
        $this->notificationInterfaceFactory = $notificationInterfaceFactory;
        $this->event = $event;
        $this->notifiers = $notifiers;
    }

    /**
     * Notify all notifier
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     */
    public function notify(
        \Magento\Sales\Api\Data\OrderInterface $order
    ) {
        foreach ($this->notifiers as $notifier) {
            $notification = $this->notificationInterfaceFactory->create();
            $notifier->notify($order, $this->event, $notification);
            if ($notification->getTouser()) {
                $this->notificationRepository->save($notification);
            }
        }
    }
}
