<?php
/**
 * Copyright © PHP Digital, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AlbertMage\Notification\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Config
 * @author Albert Shen <albertshen1206@gmail.com>
 */
abstract class AbstractConfig implements ConfigInterface
{

    /**
     * store
     *
     * @var int
     */
    protected $store;

    /**
     * Core store config
     *
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Set store
     *
     * @return void
     */
    public function setStore($store)
    {
        $this->store = $store;
    }

    /**
     * Get store
     *
     * @return int
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Get gateway
     *
     * @return string
     */
    public function getGateway($store = null)
    {
        return $this->getConfigValue(
            sprintf(self::XML_PATH_GATEWAY, $this->getXmlPathPrefix()), $store ?? $this->store
        );
    }

    /**
     * Get gateway
     *
     * @return string
     */
    public function getGatewayConfigValue($value, $store = null)
    {
        $store = $store ?? $this->store;
        
        return $this->getConfigValue(
            sprintf(self::XML_PATH_GATEWAY_CONFIG, $this->getXmlPathPrefix(), $this->getGateway($store), $value),
            $store
        );
    }

    /**
     * Check is enabled template
     * 
     * @param string $event
     * @param string $group
     * @param int $store
     * @return bool
     */
    public function isEnabled($event, $store = null)
    {
        $store = $store ?? $this->store;

        $gatewayEnable = $this->scopeConfig->isSetFlag(
            sprintf(self::XML_PATH_GATEWAY_ENABLED, $this->getXmlPathPrefix()),
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );

        $templateEnable = $this->scopeConfig->isSetFlag(
            sprintf(self::XML_PATH_TEMPLATE_ENABLED, $this->getXmlPathPrefix(), $this->getGateway($store), self::EVENT_GROUP_MAP[$event], $event),
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );

        return $gatewayEnable && $templateEnable;
    }

    /**
     * Get Template Id
     *
     * @return string
     */
    public function getTemplateIdentifier($event, $store = null)
    {
        $store = $store ?? $this->store;
        return $this->getConfigValue(
            sprintf(self::XML_PATH_TEMPLATE, $this->getXmlPathPrefix(), $this->getGateway($store), self::EVENT_GROUP_MAP[$event], $event),
            $store
        );
    }

    /**
     * Return store configuration value
     *
     * @param string $path
     * @param int $store
     * @return mixed
     */
    protected function getConfigValue($path, $store = null)
    {
        return $this->scopeConfig->getValue(
            $path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store ?? $this->store
        );
    }

}
