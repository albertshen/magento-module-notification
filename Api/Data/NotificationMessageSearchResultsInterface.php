<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Api\Data;

/**
 * Interface for notification message search results.
 * @api
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotificationMessageSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get notification message list.
     *
     * @return \AlbertMage\Notification\Api\Data\SocialInterface[]
     */
    public function getItems();

    /**
     * Set notification message list.
     *
     * @param \AlbertMage\Notification\Api\Data\SocialInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
