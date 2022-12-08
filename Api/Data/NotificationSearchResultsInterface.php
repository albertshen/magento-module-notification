<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Api\Data;

/**
 * Interface for node search results.
 * @api
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface NotificationSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get node list.
     *
     * @return \AlbertMage\Notification\Api\Data\SocialInterface[]
     */
    public function getItems();

    /**
     * Set node list.
     *
     * @param \AlbertMage\Notification\Api\Data\SocialInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
