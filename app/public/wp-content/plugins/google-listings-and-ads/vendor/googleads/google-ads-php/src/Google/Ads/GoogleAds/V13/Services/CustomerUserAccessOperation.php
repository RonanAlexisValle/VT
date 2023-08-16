<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/customer_user_access_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (update, remove) on customer user access.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.CustomerUserAccessOperation</code>
 */
class CustomerUserAccessOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V13\Resources\CustomerUserAccess $update
     *           Update operation: The customer user access is expected to have a valid
     *           resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed access is
     *           expected, in this format:
     *           `customers/{customer_id}/customerUserAccesses/{CustomerUserAccess.user_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\CustomerUserAccessService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Update operation: The customer user access is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.CustomerUserAccess update = 1;</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\CustomerUserAccess|null
     */
    public function getUpdate()
    {
        return $this->readOneof(1);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Update operation: The customer user access is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.CustomerUserAccess update = 1;</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\CustomerUserAccess $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\CustomerUserAccess::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed access is
     * expected, in this format:
     * `customers/{customer_id}/customerUserAccesses/{CustomerUserAccess.user_id}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove operation: A resource name for the removed access is
     * expected, in this format:
     * `customers/{customer_id}/customerUserAccesses/{CustomerUserAccess.user_id}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

