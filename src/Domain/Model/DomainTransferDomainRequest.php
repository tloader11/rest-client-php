<?php
/**
 * DomainTransferDomainRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainTransferDomainRequest Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainTransferDomainRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainTransferDomainRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accept_premium_fee' => 'int',
        'additional_data' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainTransferAdditionalData',
        'admin_handle' => 'string',
        'at' => 'string',
        'auth_code' => 'string',
        'autorenew' => 'string',
        'billing_handle' => 'string',
        'comments' => 'string',
        'dnssec_keys' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainDnssecKey[]',
        'domain' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainDomain',
        'is_dnssec_enabled' => 'bool',
        'is_private_whois_enabled' => 'bool',
        'name_servers' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainNameserver[]',
        'ns_group' => 'string',
        'ns_template_id' => 'int',
        'ns_template_name' => 'string',
        'owner_handle' => 'string',
        'period' => 'int',
        'promo_code' => 'string',
        'reseller_handle' => 'string',
        'tech_handle' => 'string',
        'type' => 'string',
        'unit' => 'string',
        'use_domicile' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accept_premium_fee' => 'int32',
        'additional_data' => null,
        'admin_handle' => null,
        'at' => null,
        'auth_code' => null,
        'autorenew' => null,
        'billing_handle' => null,
        'comments' => null,
        'dnssec_keys' => null,
        'domain' => null,
        'is_dnssec_enabled' => 'boolean',
        'is_private_whois_enabled' => 'boolean',
        'name_servers' => null,
        'ns_group' => null,
        'ns_template_id' => 'int32',
        'ns_template_name' => null,
        'owner_handle' => null,
        'period' => 'int32',
        'promo_code' => null,
        'reseller_handle' => null,
        'tech_handle' => null,
        'type' => null,
        'unit' => null,
        'use_domicile' => 'boolean'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accept_premium_fee' => 'accept_premium_fee',
        'additional_data' => 'additional_data',
        'admin_handle' => 'admin_handle',
        'at' => 'at',
        'auth_code' => 'auth_code',
        'autorenew' => 'autorenew',
        'billing_handle' => 'billing_handle',
        'comments' => 'comments',
        'dnssec_keys' => 'dnssec_keys',
        'domain' => 'domain',
        'is_dnssec_enabled' => 'is_dnssec_enabled',
        'is_private_whois_enabled' => 'is_private_whois_enabled',
        'name_servers' => 'name_servers',
        'ns_group' => 'ns_group',
        'ns_template_id' => 'ns_template_id',
        'ns_template_name' => 'ns_template_name',
        'owner_handle' => 'owner_handle',
        'period' => 'period',
        'promo_code' => 'promo_code',
        'reseller_handle' => 'reseller_handle',
        'tech_handle' => 'tech_handle',
        'type' => 'type',
        'unit' => 'unit',
        'use_domicile' => 'use_domicile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_premium_fee' => 'setAcceptPremiumFee',
        'additional_data' => 'setAdditionalData',
        'admin_handle' => 'setAdminHandle',
        'at' => 'setAt',
        'auth_code' => 'setAuthCode',
        'autorenew' => 'setAutorenew',
        'billing_handle' => 'setBillingHandle',
        'comments' => 'setComments',
        'dnssec_keys' => 'setDnssecKeys',
        'domain' => 'setDomain',
        'is_dnssec_enabled' => 'setIsDnssecEnabled',
        'is_private_whois_enabled' => 'setIsPrivateWhoisEnabled',
        'name_servers' => 'setNameServers',
        'ns_group' => 'setNsGroup',
        'ns_template_id' => 'setNsTemplateId',
        'ns_template_name' => 'setNsTemplateName',
        'owner_handle' => 'setOwnerHandle',
        'period' => 'setPeriod',
        'promo_code' => 'setPromoCode',
        'reseller_handle' => 'setResellerHandle',
        'tech_handle' => 'setTechHandle',
        'type' => 'setType',
        'unit' => 'setUnit',
        'use_domicile' => 'setUseDomicile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_premium_fee' => 'getAcceptPremiumFee',
        'additional_data' => 'getAdditionalData',
        'admin_handle' => 'getAdminHandle',
        'at' => 'getAt',
        'auth_code' => 'getAuthCode',
        'autorenew' => 'getAutorenew',
        'billing_handle' => 'getBillingHandle',
        'comments' => 'getComments',
        'dnssec_keys' => 'getDnssecKeys',
        'domain' => 'getDomain',
        'is_dnssec_enabled' => 'getIsDnssecEnabled',
        'is_private_whois_enabled' => 'getIsPrivateWhoisEnabled',
        'name_servers' => 'getNameServers',
        'ns_group' => 'getNsGroup',
        'ns_template_id' => 'getNsTemplateId',
        'ns_template_name' => 'getNsTemplateName',
        'owner_handle' => 'getOwnerHandle',
        'period' => 'getPeriod',
        'promo_code' => 'getPromoCode',
        'reseller_handle' => 'getResellerHandle',
        'tech_handle' => 'getTechHandle',
        'type' => 'getType',
        'unit' => 'getUnit',
        'use_domicile' => 'getUseDomicile'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accept_premium_fee'] = isset($data['accept_premium_fee']) ? $data['accept_premium_fee'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['admin_handle'] = isset($data['admin_handle']) ? $data['admin_handle'] : null;
        $this->container['at'] = isset($data['at']) ? $data['at'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['autorenew'] = isset($data['autorenew']) ? $data['autorenew'] : null;
        $this->container['billing_handle'] = isset($data['billing_handle']) ? $data['billing_handle'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['dnssec_keys'] = isset($data['dnssec_keys']) ? $data['dnssec_keys'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['is_dnssec_enabled'] = isset($data['is_dnssec_enabled']) ? $data['is_dnssec_enabled'] : null;
        $this->container['is_private_whois_enabled'] = isset($data['is_private_whois_enabled']) ? $data['is_private_whois_enabled'] : null;
        $this->container['name_servers'] = isset($data['name_servers']) ? $data['name_servers'] : null;
        $this->container['ns_group'] = isset($data['ns_group']) ? $data['ns_group'] : null;
        $this->container['ns_template_id'] = isset($data['ns_template_id']) ? $data['ns_template_id'] : null;
        $this->container['ns_template_name'] = isset($data['ns_template_name']) ? $data['ns_template_name'] : null;
        $this->container['owner_handle'] = isset($data['owner_handle']) ? $data['owner_handle'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['promo_code'] = isset($data['promo_code']) ? $data['promo_code'] : null;
        $this->container['reseller_handle'] = isset($data['reseller_handle']) ? $data['reseller_handle'] : null;
        $this->container['tech_handle'] = isset($data['tech_handle']) ? $data['tech_handle'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['use_domicile'] = isset($data['use_domicile']) ? $data['use_domicile'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accept_premium_fee
     *
     * @return int|null
     */
    public function getAcceptPremiumFee()
    {
        return $this->container['accept_premium_fee'];
    }

    /**
     * Sets accept_premium_fee
     *
     * @param int|null $accept_premium_fee accept_premium_fee
     *
     * @return $this
     */
    public function setAcceptPremiumFee($accept_premium_fee)
    {
        $this->container['accept_premium_fee'] = $accept_premium_fee;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainTransferAdditionalData|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainTransferAdditionalData|null $additional_data additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets admin_handle
     *
     * @return string|null
     */
    public function getAdminHandle()
    {
        return $this->container['admin_handle'];
    }

    /**
     * Sets admin_handle
     *
     * @param string|null $admin_handle admin_handle
     *
     * @return $this
     */
    public function setAdminHandle($admin_handle)
    {
        $this->container['admin_handle'] = $admin_handle;

        return $this;
    }

    /**
     * Gets at
     *
     * @return string|null
     */
    public function getAt()
    {
        return $this->container['at'];
    }

    /**
     * Sets at
     *
     * @param string|null $at at
     *
     * @return $this
     */
    public function setAt($at)
    {
        $this->container['at'] = $at;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets autorenew
     *
     * @return string|null
     */
    public function getAutorenew()
    {
        return $this->container['autorenew'];
    }

    /**
     * Sets autorenew
     *
     * @param string|null $autorenew autorenew
     *
     * @return $this
     */
    public function setAutorenew($autorenew)
    {
        $this->container['autorenew'] = $autorenew;

        return $this;
    }

    /**
     * Gets billing_handle
     *
     * @return string|null
     */
    public function getBillingHandle()
    {
        return $this->container['billing_handle'];
    }

    /**
     * Sets billing_handle
     *
     * @param string|null $billing_handle billing_handle
     *
     * @return $this
     */
    public function setBillingHandle($billing_handle)
    {
        $this->container['billing_handle'] = $billing_handle;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets dnssec_keys
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainDnssecKey[]|null
     */
    public function getDnssecKeys()
    {
        return $this->container['dnssec_keys'];
    }

    /**
     * Sets dnssec_keys
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainDnssecKey[]|null $dnssec_keys dnssec_keys
     *
     * @return $this
     */
    public function setDnssecKeys($dnssec_keys)
    {
        $this->container['dnssec_keys'] = $dnssec_keys;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainDomain|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainDomain|null $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets is_dnssec_enabled
     *
     * @return bool|null
     */
    public function getIsDnssecEnabled()
    {
        return $this->container['is_dnssec_enabled'];
    }

    /**
     * Sets is_dnssec_enabled
     *
     * @param bool|null $is_dnssec_enabled is_dnssec_enabled
     *
     * @return $this
     */
    public function setIsDnssecEnabled($is_dnssec_enabled)
    {
        $this->container['is_dnssec_enabled'] = $is_dnssec_enabled;

        return $this;
    }

    /**
     * Gets is_private_whois_enabled
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisEnabled()
    {
        return $this->container['is_private_whois_enabled'];
    }

    /**
     * Sets is_private_whois_enabled
     *
     * @param bool|null $is_private_whois_enabled is_private_whois_enabled
     *
     * @return $this
     */
    public function setIsPrivateWhoisEnabled($is_private_whois_enabled)
    {
        $this->container['is_private_whois_enabled'] = $is_private_whois_enabled;

        return $this;
    }

    /**
     * Gets name_servers
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainNameserver[]|null
     */
    public function getNameServers()
    {
        return $this->container['name_servers'];
    }

    /**
     * Sets name_servers
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainNameserver[]|null $name_servers name_servers
     *
     * @return $this
     */
    public function setNameServers($name_servers)
    {
        $this->container['name_servers'] = $name_servers;

        return $this;
    }

    /**
     * Gets ns_group
     *
     * @return string|null
     */
    public function getNsGroup()
    {
        return $this->container['ns_group'];
    }

    /**
     * Sets ns_group
     *
     * @param string|null $ns_group ns_group
     *
     * @return $this
     */
    public function setNsGroup($ns_group)
    {
        $this->container['ns_group'] = $ns_group;

        return $this;
    }

    /**
     * Gets ns_template_id
     *
     * @return int|null
     */
    public function getNsTemplateId()
    {
        return $this->container['ns_template_id'];
    }

    /**
     * Sets ns_template_id
     *
     * @param int|null $ns_template_id ns_template_id
     *
     * @return $this
     */
    public function setNsTemplateId($ns_template_id)
    {
        $this->container['ns_template_id'] = $ns_template_id;

        return $this;
    }

    /**
     * Gets ns_template_name
     *
     * @return string|null
     */
    public function getNsTemplateName()
    {
        return $this->container['ns_template_name'];
    }

    /**
     * Sets ns_template_name
     *
     * @param string|null $ns_template_name ns_template_name
     *
     * @return $this
     */
    public function setNsTemplateName($ns_template_name)
    {
        $this->container['ns_template_name'] = $ns_template_name;

        return $this;
    }

    /**
     * Gets owner_handle
     *
     * @return string|null
     */
    public function getOwnerHandle()
    {
        return $this->container['owner_handle'];
    }

    /**
     * Sets owner_handle
     *
     * @param string|null $owner_handle owner_handle
     *
     * @return $this
     */
    public function setOwnerHandle($owner_handle)
    {
        $this->container['owner_handle'] = $owner_handle;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets promo_code
     *
     * @return string|null
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     *
     * @param string|null $promo_code promo_code
     *
     * @return $this
     */
    public function setPromoCode($promo_code)
    {
        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets reseller_handle
     *
     * @return string|null
     */
    public function getResellerHandle()
    {
        return $this->container['reseller_handle'];
    }

    /**
     * Sets reseller_handle
     *
     * @param string|null $reseller_handle reseller_handle
     *
     * @return $this
     */
    public function setResellerHandle($reseller_handle)
    {
        $this->container['reseller_handle'] = $reseller_handle;

        return $this;
    }

    /**
     * Gets tech_handle
     *
     * @return string|null
     */
    public function getTechHandle()
    {
        return $this->container['tech_handle'];
    }

    /**
     * Sets tech_handle
     *
     * @param string|null $tech_handle tech_handle
     *
     * @return $this
     */
    public function setTechHandle($tech_handle)
    {
        $this->container['tech_handle'] = $tech_handle;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets use_domicile
     *
     * @return bool|null
     */
    public function getUseDomicile()
    {
        return $this->container['use_domicile'];
    }

    /**
     * Sets use_domicile
     *
     * @param bool|null $use_domicile use_domicile
     *
     * @return $this
     */
    public function setUseDomicile($use_domicile)
    {
        $this->container['use_domicile'] = $use_domicile;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


