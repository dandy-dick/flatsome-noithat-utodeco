<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/language_constant_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class LanguageConstantService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v8/resources/language_constant.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
LanguageConstantH
resource_name (	B1�A�A+
)googleads.googleapis.com/LanguageConstant
id (B�AH �
code (	B�AH�
name (	B�AH�

targetable	 (B�AH�:P�AM
)googleads.googleapis.com/LanguageConstant languageConstants/{criterion_id}B
_idB
_codeB
_nameB
_targetableB�
%com.google.ads.googleads.v8.resourcesBLanguageConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
@google/ads/googleads/v8/services/language_constant_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"f
GetLanguageConstantRequestH
resource_name (	B1�A�A+
)googleads.googleapis.com/LanguageConstant2�
LanguageConstantService�
GetLanguageConstant<.google.ads.googleads.v8.services.GetLanguageConstantRequest3.google.ads.googleads.v8.resources.LanguageConstant"?���)\'/v8/{resource_name=languageConstants/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBLanguageConstantServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

