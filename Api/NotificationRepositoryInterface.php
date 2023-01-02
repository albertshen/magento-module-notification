<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Api;

/**
 * Notification CRUD interface.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotificationRepositoryInterface
{
    /**
     * Save notification.
     *
     * @param \AlbertMage\Notification\Api\Data\NotificationInterface $notification
     * @return \AlbertMage\Notification\Api\Data\NotificationInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\AlbertMage\Notification\Api\Data\NotificationInterface $notification);

    /**
     * Delete notification.
     *
     * @param \AlbertMage\Notification\Api\Data\NotificationInterface $notification
     * @return \AlbertMage\Notification\Api\Data\NotificationInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\AlbertMage\Notification\Api\Data\NotificationInterface $notification);

    /**
     * Retrieve notification.
     *
     * @param int $notificationId
     * @return \AlbertMage\Notification\Api\Data\NotificationInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($notificationId);

    /**
     * Retrieve notification matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AlbertMage\Notification\Api\Data\NotificationSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
