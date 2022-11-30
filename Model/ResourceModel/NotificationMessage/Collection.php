<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 */
namespace AlbertMage\Notification\Model\ResourceModel\NotificationMessage;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use AlbertMage\Notification\Model\ResourceModel\NotificationMessage;

/**
 * Class Collection
 * @author Albert Shen <albertshen1206@gmail.com>
 */
class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\AlbertMage\Notification\Model\NotificationMessage::class,
            NotificationMessage::class);
    }
}