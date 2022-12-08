<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Model;

/**
 * Interface Config
 * @author Albert Shen <albertshen1206@gmail.com>
 */
interface ConfigInterface
{

    const EVENT_GROUP_CUSTOMER = 'customer';

    const EVENT_GROUP_ORDER = 'order';

    /**
     * Configuration event
     */
    const EVENT_ORDER_CREATE = 'order_create';

    const EVENT_ORDER_CANCEL = 'order_cancel';

    const EVENT_ORDER_EXPIRE_NOTICE = 'order_expire_notice';

    const EVENT_ORDER_UPDATE = 'order_update';

    const EVENT_PAYMENT_CAPTURE = 'payment_capture';

    const EVENT_INVOICE_CREATE = 'invoice_create';

    const EVENT_SHIPMENT_CREATE = 'shipment_create';

    const EVENT_SHIPMENT_UPDATE = 'shipment_update';

    const EVENT_CREDIT_MEMO_CREATE = 'credit_memo_create';

    /**
     * Configuration paths
     */
    const XML_PATH_GATEWAY = '%s/setting/gateway';

    const XML_PATH_GATEWAY_ENABLED = '%s/setting/active';

    const XML_PATH_GATEWAY_CONFIG = '%s/%s/config_%s';

    const XML_PATH_TEMPLATE = '%s/%s/%s/%s_template';

    const XML_PATH_TEMPLATE_ENABLED = '%s/%s/%s/%s_enabled';

    const EVENT_GROUP_MAP = [
        self::EVENT_ORDER_CREATE => self::EVENT_GROUP_ORDER,
        self::EVENT_ORDER_CANCEL => self::EVENT_GROUP_ORDER,
        self::EVENT_ORDER_EXPIRE_NOTICE => self::EVENT_GROUP_ORDER,
        self::EVENT_ORDER_UPDATE => self::EVENT_GROUP_ORDER,
        self::EVENT_PAYMENT_CAPTURE => self::EVENT_GROUP_ORDER,
        self::EVENT_INVOICE_CREATE => self::EVENT_GROUP_ORDER,
        self::EVENT_SHIPMENT_CREATE => self::EVENT_GROUP_ORDER,
        self::EVENT_SHIPMENT_UPDATE => self::EVENT_GROUP_ORDER,
        self::EVENT_CREDIT_MEMO_CREATE => self::EVENT_GROUP_ORDER
    ];

    /**
     * @return string
     */
    public function getXmlPathPrefix();

}
