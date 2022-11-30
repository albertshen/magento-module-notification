<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Api;

/**
 * Notification message CRUD interface.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotificationMessageRepositoryInterface
{
    /**
     * Save notification message.
     *
     * @param \AlbertMage\Notification\Api\Data\NotificationMessageInterface $notificationMessage
     * @return \AlbertMage\Notification\Api\Data\NotificationMessageInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\AlbertMage\Notification\Api\Data\NotificationMessageInterface $notificationMessage);

    /**
     * Retrieve notification message.
     *
     * @param int $notificationMessageId
     * @return \AlbertMage\Notification\Api\Data\NotificationMessageInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($notificationMessageId);

    /**
     * Retrieve notification message matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AlbertMage\Notification\Api\Data\NotificationMessageSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
