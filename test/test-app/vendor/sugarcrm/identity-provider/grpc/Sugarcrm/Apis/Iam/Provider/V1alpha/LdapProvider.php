<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/provider/v1alpha/provider.proto

namespace Sugarcrm\Apis\Iam\Provider\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.provider.v1alpha.LdapProvider</code>
 */
class LdapProvider extends \Google\Protobuf\Internal\Message
{
    /**
     * srn:cloud:idp::1234567890:provider:ldap
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * LDAP configuration
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.provider.v1alpha.LdapConfig config = 2;</code>
     */
    private $config = null;
    /**
     * Attribute mappings
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.provider.v1alpha.AttributeMap attribute_mapping = 3;</code>
     */
    private $attribute_mapping;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           srn:cloud:idp::1234567890:provider:ldap
     *     @type \Sugarcrm\Apis\Iam\Provider\V1alpha\LdapConfig $config
     *           LDAP configuration
     *     @type \Sugarcrm\Apis\Iam\Provider\V1alpha\AttributeMap[]|\Google\Protobuf\Internal\RepeatedField $attribute_mapping
     *           Attribute mappings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apis\Iam\Provider\V1Alpha\Provider::initOnce();
        parent::__construct($data);
    }

    /**
     * srn:cloud:idp::1234567890:provider:ldap
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * srn:cloud:idp::1234567890:provider:ldap
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * LDAP configuration
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.provider.v1alpha.LdapConfig config = 2;</code>
     * @return \Sugarcrm\Apis\Iam\Provider\V1alpha\LdapConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * LDAP configuration
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.provider.v1alpha.LdapConfig config = 2;</code>
     * @param \Sugarcrm\Apis\Iam\Provider\V1alpha\LdapConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Sugarcrm\Apis\Iam\Provider\V1alpha\LdapConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Attribute mappings
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.provider.v1alpha.AttributeMap attribute_mapping = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeMapping()
    {
        return $this->attribute_mapping;
    }

    /**
     * Attribute mappings
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.provider.v1alpha.AttributeMap attribute_mapping = 3;</code>
     * @param \Sugarcrm\Apis\Iam\Provider\V1alpha\AttributeMap[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeMapping($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sugarcrm\Apis\Iam\Provider\V1alpha\AttributeMap::class);
        $this->attribute_mapping = $arr;

        return $this;
    }

}

