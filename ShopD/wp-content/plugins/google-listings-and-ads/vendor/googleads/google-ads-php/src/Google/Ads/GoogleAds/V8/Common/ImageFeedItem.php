<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/extensions.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an advertiser provided image extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.ImageFeedItem</code>
 */
class ImageFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the image asset.
     *
     * Generated from protobuf field <code>string image_asset = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $image_asset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image_asset
     *           Required. Resource name of the image asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the image asset.
     *
     * Generated from protobuf field <code>string image_asset = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getImageAsset()
    {
        return $this->image_asset;
    }

    /**
     * Required. Resource name of the image asset.
     *
     * Generated from protobuf field <code>string image_asset = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setImageAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_asset = $var;

        return $this;
    }

}

