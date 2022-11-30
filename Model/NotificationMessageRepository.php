<?php
/**
 * Notification message entity resource model
 *
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use AlbertMage\Notification\Api\Data\NotificationMessageInterface;
use AlbertMage\Notification\Api\Data\NotificationMessageInterfaceFactory;
use AlbertMage\Notification\Api\Data\NotificationMessageSearchResultsInterfaceFactory;
use AlbertMage\Notification\Model\ResourceModel\NotificationMessage;
use AlbertMage\Notification\Model\ResourceModel\NotificationMessage\CollectionFactory;

/**
 * NotificationMessage repository.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class NotificationMessageRepository implements \AlbertMage\Notification\Api\NotificationMessageRepositoryInterface
{

    /**
     * @var \AlbertMage\Notification\Model\NotificationMessageFactory
     */
    protected $notificationMessageFactory;

    /**
     * @var \AlbertMage\Notification\Model\ResourceModel\NotificationMessage
     */
    protected $notificationMessageResourceModel;

    /**
     * @var \AlbertMage\Notification\Api\Data\NotificationMessageSearchResultsInterfaceFactory
     */
    protected $notificationMessageSearchResultsFactory;

    /**
     * @var \AlbertMage\Notification\Model\ResourceModel\NotificationMessage\CollectionFactory
     */
    protected $notificationMessageCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @param \AlbertMage\Notification\Model\NotificationMessageFactory $notificationMessageFactory
     * @param \AlbertMage\Notification\Model\ResourceModel\NotificationMessage $notificationMessageResourceModel
     * @param \AlbertMage\Notification\Api\Data\NotificationMessageSearchResultsInterfaceFactory $notificationMessageSearchResultsFactory
     * @param \AlbertMage\Notification\Model\ResourceModel\NotificationMessage\CollectionFactory $notificationMessageCollectionFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        \AlbertMage\Notification\Model\NotificationMessageFactory $notificationMessageFactory,
        \AlbertMage\Notification\Model\ResourceModel\NotificationMessage $notificationMessageResourceModel,
        \AlbertMage\Notification\Api\Data\NotificationMessageSearchResultsInterfaceFactory $notificationMessageSearchResultsFactory,
        \AlbertMage\Notification\Model\ResourceModel\NotificationMessage\CollectionFactory $notificationMessageCollectionFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->notificationMessageFactory = $notificationMessageFactory;
        $this->notificationMessageResourceModel = $notificationMessageResourceModel;
        $this->notificationMessageSearchResultsFactory = $notificationMessageSearchResultsFactory;
        $this->notificationMessageCollectionFactory = $notificationMessageCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(\AlbertMage\Notification\Api\Data\NotificationMessageInterface $notificationMessage)
    {
        $this->notificationMessageResourceModel->save($notificationMessage);
        return $notificationMessage;
    }

    /**
     * @inheritDoc
     */
    public function getById($id)
    {
        $notificationMessage = $this->notificationMessageInterfaceFactory->create()->load($id, 'id');
        if (!$notificationMessage->getId()) {
            throw new NoSuchEntityException(
                __("The sms message that was requested doesn't exist.")
            );
        }
        return $notificationMessage;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        /** @var Collection $collection */
        $collection = $this->notificationMessageCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        $items = $collection->getItems();

        /** @var \AlbertMage\Notification\Api\Data\NotificationMessageSearchResultsInterface $searchResults */
        $searchResults = $this->notificationMessageSearchResultsFactory->create();
        $searchResults->setItems($items);
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}
