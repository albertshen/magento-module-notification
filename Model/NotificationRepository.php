<?php
/**
 * Notification entity resource model
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use AlbertMage\Notification\Api\Data\NotificationInterface;
use AlbertMage\Notification\Api\Data\NotificationInterfaceFactory;
use AlbertMage\Notification\Api\Data\NotificationSearchResultsInterfaceFactory;
use AlbertMage\Notification\Model\ResourceModel\Notification;
use AlbertMage\Notification\Model\ResourceModel\Notification\CollectionFactory;

/**
 * Notification repository.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class NotificationRepository implements \AlbertMage\Notification\Api\NotificationRepositoryInterface
{

    /**
     * @var \AlbertMage\Notification\Model\NotificationFactory
     */
    protected $notificationFactory;

    /**
     * @var \AlbertMage\Notification\Model\ResourceModel\Notification
     */
    protected $notificationResourceModel;

    /**
     * @var \AlbertMage\Notification\Api\Data\NotificationSearchResultsInterfaceFactory
     */
    protected $notificationSearchResultsFactory;

    /**
     * @var \AlbertMage\Notification\Model\ResourceModel\Notification\CollectionFactory
     */
    protected $notificationCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @param \AlbertMage\Notification\Model\NotificationFactory $notificationFactory
     * @param \AlbertMage\Notification\Model\ResourceModel\Notification $notificationResourceModel
     * @param \AlbertMage\Notification\Api\Data\NotificationSearchResultsInterfaceFactory $notificationSearchResultsFactory
     * @param \AlbertMage\Notification\Model\ResourceModel\Notification\CollectionFactory $notificationCollectionFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        \AlbertMage\Notification\Model\NotificationFactory $notificationFactory,
        \AlbertMage\Notification\Model\ResourceModel\Notification $notificationResourceModel,
        \AlbertMage\Notification\Api\Data\NotificationSearchResultsInterfaceFactory $notificationSearchResultsFactory,
        \AlbertMage\Notification\Model\ResourceModel\Notification\CollectionFactory $notificationCollectionFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->notificationFactory = $notificationFactory;
        $this->notificationResourceModel = $notificationResourceModel;
        $this->notificationSearchResultsFactory = $notificationSearchResultsFactory;
        $this->notificationCollectionFactory = $notificationCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(\AlbertMage\Notification\Api\Data\NotificationInterface $notification)
    {
        $this->notificationResourceModel->save($notification);
        return $notification;
    }

    /**
     * @inheritDoc
     */
    public function delete(\AlbertMage\Notification\Api\Data\NotificationInterface $notification)
    {
        $this->notificationResourceModel->delete($notification);
        return $notification;
    }

    /**
     * @inheritDoc
     */
    public function getById($id)
    {
        $notification = $this->notificationInterfaceFactory->create()->load($id, 'id');
        if (!$notification->getId()) {
            throw new NoSuchEntityException(
                __("The sms message that was requested doesn't exist.")
            );
        }
        return $notification;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        /** @var Collection $collection */
        $collection = $this->notificationCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        $items = $collection->getItems();

        /** @var \AlbertMage\Notification\Api\Data\NotificationSearchResultsInterface $searchResults */
        $searchResults = $this->notificationSearchResultsFactory->create();
        $searchResults->setItems($items);
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}
