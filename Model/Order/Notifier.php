<?php
/**
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model\Order;

use AlbertMage\Notification\Model\Order\NotifierInterface;
use AlbertMage\Notification\Api\Data\NotificationInterfaceFactory;
use AlbertMage\Notification\Model\NotificationRepository;

/**
 * Order cancel notifier
 * 
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Notifier implements NotifierInterface
{
    /**
     * @var NotifierInterface[]
     */
    private $notifiers;

    /**
     * @var NotificationInterfaceFactory
     */
    protected $notificationInterfaceFactory;

    /**
     * @var NotificationRepository
     */
    protected $notificationRepository;

    /**
     * @param NotifierInterface[] $notifiers
     * @param NotificationInterfaceFactory $notificationInterfaceFactory
     * @param NotificationRepository $notificationRepository
     */
    public function __construct(
        array $notifiers = [],
        NotificationInterfaceFactory $notificationInterfaceFactory,
        NotificationRepository $notificationRepository
    ) {
        $this->notifiers = $notifiers;
        $this->notificationInterfaceFactory = $notificationInterfaceFactory;
        $this->notificationRepository = $notificationRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function notify(
        \Magento\Sales\Api\Data\OrderInterface $order
    ) {
        foreach ($this->notifiers as $notifier) {

            $notification = $this->notificationInterfaceFactory->create();

            $notifier->notify($order, $notification);

            $this->notificationRepository->save($notification);

        }
    }
}
