<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/errors/feed_item_set_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Errors;

class FeedItemSetError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v16/errors/feed_item_set_error.protogoogle.ads.googleads.v16.errors"�
FeedItemSetErrorEnum"�
FeedItemSetError
UNSPECIFIED 
UNKNOWN
FEED_ITEM_SET_REMOVED
CANNOT_CLEAR_DYNAMIC_FILTER 
CANNOT_CREATE_DYNAMIC_FILTER
INVALID_FEED_TYPE
DUPLICATE_NAME&
"WRONG_DYNAMIC_FILTER_FOR_FEED_TYPE$
 DYNAMIC_FILTER_INVALID_CHAIN_IDSB�
#com.google.ads.googleads.v16.errorsBFeedItemSetErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/errors;errors�GAA�Google.Ads.GoogleAds.V16.Errors�Google\\Ads\\GoogleAds\\V16\\Errors�#Google::Ads::GoogleAds::V16::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

