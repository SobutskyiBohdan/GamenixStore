<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/errors/smart_campaign_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Errors;

class SmartCampaignError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v16/errors/smart_campaign_error.protogoogle.ads.googleads.v16.errors"�
SmartCampaignErrorEnum"�
SmartCampaignError
UNSPECIFIED 
UNKNOWN 
INVALID_BUSINESS_LOCATION_ID
INVALID_CAMPAIGN1
-BUSINESS_NAME_OR_BUSINESS_LOCATION_ID_MISSING%
!REQUIRED_SUGGESTION_FIELD_MISSING
GEO_TARGETS_REQUIRED&
"CANNOT_DETERMINE_SUGGESTION_LOCALE
FINAL_URL_NOT_CRAWLABLEB�
#com.google.ads.googleads.v16.errorsBSmartCampaignErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/errors;errors�GAA�Google.Ads.GoogleAds.V16.Errors�Google\\Ads\\GoogleAds\\V16\\Errors�#Google::Ads::GoogleAds::V16::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

