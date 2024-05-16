<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V16\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The sitelink asset recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.resources.Recommendation.SitelinkAssetRecommendation</code>
 */
class SitelinkAssetRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. New sitelink assets recommended at the campaign level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.Asset recommended_campaign_sitelink_assets = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recommended_campaign_sitelink_assets;
    /**
     * Output only. New sitelink assets recommended at the customer level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.Asset recommended_customer_sitelink_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recommended_customer_sitelink_assets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V16\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $recommended_campaign_sitelink_assets
     *           Output only. New sitelink assets recommended at the campaign level.
     *     @type array<\Google\Ads\GoogleAds\V16\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $recommended_customer_sitelink_assets
     *           Output only. New sitelink assets recommended at the customer level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. New sitelink assets recommended at the campaign level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.Asset recommended_campaign_sitelink_assets = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecommendedCampaignSitelinkAssets()
    {
        return $this->recommended_campaign_sitelink_assets;
    }

    /**
     * Output only. New sitelink assets recommended at the campaign level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.Asset recommended_campaign_sitelink_assets = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V16\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecommendedCampaignSitelinkAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Resources\Asset::class);
        $this->recommended_campaign_sitelink_assets = $arr;

        return $this;
    }

    /**
     * Output only. New sitelink assets recommended at the customer level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.Asset recommended_customer_sitelink_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecommendedCustomerSitelinkAssets()
    {
        return $this->recommended_customer_sitelink_assets;
    }

    /**
     * Output only. New sitelink assets recommended at the customer level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.Asset recommended_customer_sitelink_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V16\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecommendedCustomerSitelinkAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Resources\Asset::class);
        $this->recommended_customer_sitelink_assets = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SitelinkAssetRecommendation::class, \Google\Ads\GoogleAds\V16\Resources\Recommendation_SitelinkAssetRecommendation::class);

