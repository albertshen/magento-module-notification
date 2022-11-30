<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
declare(strict_types=1);

namespace AlbertMage\Sms\Model;

use AlbertMage\Sms\Api\Data\NotificationMessageSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Service Data Object with NotificationMessage search results.
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class NotificationMessageSearchResults extends SearchResults implements NotificationMessageSearchResultsInterface
{
}
