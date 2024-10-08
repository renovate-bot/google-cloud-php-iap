<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to UpdateTunnelDestGroup.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.UpdateTunnelDestGroupRequest</code>
 */
class UpdateTunnelDestGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new values for the TunnelDestGroup.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.TunnelDestGroup tunnel_dest_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tunnel_dest_group = null;
    /**
     * A field mask that specifies which IAP settings to update.
     * If omitted, then all of the settings are updated. See
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Iap\V1\TunnelDestGroup $tunnelDestGroup Required. The new values for the TunnelDestGroup.
     * @param \Google\Protobuf\FieldMask           $updateMask      A field mask that specifies which IAP settings to update.
     *                                                              If omitted, then all of the settings are updated. See
     *                                                              https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * @return \Google\Cloud\Iap\V1\UpdateTunnelDestGroupRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Iap\V1\TunnelDestGroup $tunnelDestGroup, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setTunnelDestGroup($tunnelDestGroup)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iap\V1\TunnelDestGroup $tunnel_dest_group
     *           Required. The new values for the TunnelDestGroup.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           A field mask that specifies which IAP settings to update.
     *           If omitted, then all of the settings are updated. See
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new values for the TunnelDestGroup.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.TunnelDestGroup tunnel_dest_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iap\V1\TunnelDestGroup|null
     */
    public function getTunnelDestGroup()
    {
        return $this->tunnel_dest_group;
    }

    public function hasTunnelDestGroup()
    {
        return isset($this->tunnel_dest_group);
    }

    public function clearTunnelDestGroup()
    {
        unset($this->tunnel_dest_group);
    }

    /**
     * Required. The new values for the TunnelDestGroup.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.TunnelDestGroup tunnel_dest_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iap\V1\TunnelDestGroup $var
     * @return $this
     */
    public function setTunnelDestGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\TunnelDestGroup::class);
        $this->tunnel_dest_group = $var;

        return $this;
    }

    /**
     * A field mask that specifies which IAP settings to update.
     * If omitted, then all of the settings are updated. See
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * A field mask that specifies which IAP settings to update.
     * If omitted, then all of the settings are updated. See
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

