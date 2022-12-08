<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
declare(strict_types=1);

namespace AlbertMage\Notification\Model;

use AlbertMage\Notification\Api\Data\NotificationSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Service Data Object with Notification search results.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class NotificationSearchResults extends SearchResults implements NotificationSearchResultsInterface
{
}
