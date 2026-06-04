<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesAd extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const DEVICE_PREFERENCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DEVICE_PREFERENCE_UNKNOWN = 'UNKNOWN';
  /**
   * Mobile devices with full browsers.
   */
  public const DEVICE_PREFERENCE_MOBILE = 'MOBILE';
  /**
   * Tablets with full browsers.
   */
  public const DEVICE_PREFERENCE_TABLET = 'TABLET';
  /**
   * Computers.
   */
  public const DEVICE_PREFERENCE_DESKTOP = 'DESKTOP';
  /**
   * Smart TVs and game consoles.
   */
  public const DEVICE_PREFERENCE_CONNECTED_TV = 'CONNECTED_TV';
  /**
   * Other device types.
   */
  public const DEVICE_PREFERENCE_OTHER = 'OTHER';
  /**
   * Not specified.
   */
  public const SYSTEM_MANAGED_RESOURCE_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SYSTEM_MANAGED_RESOURCE_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Generated ad variations experiment ad.
   */
  public const SYSTEM_MANAGED_RESOURCE_SOURCE_AD_VARIATIONS = 'AD_VARIATIONS';
  /**
   * No value has been specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The ad is a text ad.
   */
  public const TYPE_TEXT_AD = 'TEXT_AD';
  /**
   * The ad is an expanded text ad.
   */
  public const TYPE_EXPANDED_TEXT_AD = 'EXPANDED_TEXT_AD';
  /**
   * The ad is an expanded dynamic search ad.
   */
  public const TYPE_EXPANDED_DYNAMIC_SEARCH_AD = 'EXPANDED_DYNAMIC_SEARCH_AD';
  /**
   * The ad is a hotel ad.
   */
  public const TYPE_HOTEL_AD = 'HOTEL_AD';
  /**
   * The ad is a Smart Shopping ad.
   */
  public const TYPE_SHOPPING_SMART_AD = 'SHOPPING_SMART_AD';
  /**
   * The ad is a standard Shopping ad.
   */
  public const TYPE_SHOPPING_PRODUCT_AD = 'SHOPPING_PRODUCT_AD';
  /**
   * The ad is a video ad.
   */
  public const TYPE_VIDEO_AD = 'VIDEO_AD';
  /**
   * This ad is an Image ad.
   */
  public const TYPE_IMAGE_AD = 'IMAGE_AD';
  /**
   * The ad is a responsive search ad.
   */
  public const TYPE_RESPONSIVE_SEARCH_AD = 'RESPONSIVE_SEARCH_AD';
  /**
   * The ad is a legacy responsive display ad.
   */
  public const TYPE_LEGACY_RESPONSIVE_DISPLAY_AD = 'LEGACY_RESPONSIVE_DISPLAY_AD';
  /**
   * The ad is an app ad.
   */
  public const TYPE_APP_AD = 'APP_AD';
  /**
   * The ad is a legacy app install ad.
   */
  public const TYPE_LEGACY_APP_INSTALL_AD = 'LEGACY_APP_INSTALL_AD';
  /**
   * The ad is a responsive display ad.
   */
  public const TYPE_RESPONSIVE_DISPLAY_AD = 'RESPONSIVE_DISPLAY_AD';
  /**
   * The ad is a local ad.
   */
  public const TYPE_LOCAL_AD = 'LOCAL_AD';
  /**
   * The ad is a display upload ad with the HTML5_UPLOAD_AD product type.
   */
  public const TYPE_HTML5_UPLOAD_AD = 'HTML5_UPLOAD_AD';
  /**
   * The ad is a display upload ad with one of the DYNAMIC_HTML5_* product
   * types.
   */
  public const TYPE_DYNAMIC_HTML5_AD = 'DYNAMIC_HTML5_AD';
  /**
   * The ad is an app engagement ad.
   */
  public const TYPE_APP_ENGAGEMENT_AD = 'APP_ENGAGEMENT_AD';
  /**
   * The ad is a Shopping Comparison Listing ad.
   */
  public const TYPE_SHOPPING_COMPARISON_LISTING_AD = 'SHOPPING_COMPARISON_LISTING_AD';
  /**
   * Video bumper ad.
   */
  public const TYPE_VIDEO_BUMPER_AD = 'VIDEO_BUMPER_AD';
  /**
   * Video non-skippable in-stream ad.
   */
  public const TYPE_VIDEO_NON_SKIPPABLE_IN_STREAM_AD = 'VIDEO_NON_SKIPPABLE_IN_STREAM_AD';
  /**
   * Video TrueView in-stream ad.
   */
  public const TYPE_VIDEO_TRUEVIEW_IN_STREAM_AD = 'VIDEO_TRUEVIEW_IN_STREAM_AD';
  /**
   * Video responsive ad.
   */
  public const TYPE_VIDEO_RESPONSIVE_AD = 'VIDEO_RESPONSIVE_AD';
  /**
   * Smart campaign ad.
   */
  public const TYPE_SMART_CAMPAIGN_AD = 'SMART_CAMPAIGN_AD';
  /**
   * Call ad.
   */
  public const TYPE_CALL_AD = 'CALL_AD';
  /**
   * Universal app pre-registration ad.
   */
  public const TYPE_APP_PRE_REGISTRATION_AD = 'APP_PRE_REGISTRATION_AD';
  /**
   * Demand Gen multi asset ad.
   */
  public const TYPE_DEMAND_GEN_MULTI_ASSET_AD = 'DEMAND_GEN_MULTI_ASSET_AD';
  /**
   * Demand Gen carousel ad.
   */
  public const TYPE_DEMAND_GEN_CAROUSEL_AD = 'DEMAND_GEN_CAROUSEL_AD';
  /**
   * Travel ad.
   */
  public const TYPE_TRAVEL_AD = 'TRAVEL_AD';
  /**
   * Demand Gen video responsive ad.
   */
  public const TYPE_DEMAND_GEN_VIDEO_RESPONSIVE_AD = 'DEMAND_GEN_VIDEO_RESPONSIVE_AD';
  /**
   * Demand Gen product ad.
   */
  public const TYPE_DEMAND_GEN_PRODUCT_AD = 'DEMAND_GEN_PRODUCT_AD';
  /**
   * Multimedia ad.
   */
  public const TYPE_MULTIMEDIA_AD = 'MULTIMEDIA_AD';
  protected $collection_key = 'urlCustomParameters';
  /**
   * Output only. Indicates if this ad was automatically added by Google Ads and
   * not by a user. For example, this could happen when ads are automatically
   * created as suggestions for new ads based on knowledge of how existing ads
   * are performing.
   *
   * @var bool
   */
  public $addedByGoogleAds;
  protected $appAdType = GoogleAdsSearchads360V23CommonAppAdInfo::class;
  protected $appAdDataType = '';
  protected $appEngagementAdType = GoogleAdsSearchads360V23CommonAppEngagementAdInfo::class;
  protected $appEngagementAdDataType = '';
  protected $appPreRegistrationAdType = GoogleAdsSearchads360V23CommonAppPreRegistrationAdInfo::class;
  protected $appPreRegistrationAdDataType = '';
  protected $demandGenCarouselAdType = GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo::class;
  protected $demandGenCarouselAdDataType = '';
  protected $demandGenMultiAssetAdType = GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo::class;
  protected $demandGenMultiAssetAdDataType = '';
  protected $demandGenProductAdType = GoogleAdsSearchads360V23CommonDemandGenProductAdInfo::class;
  protected $demandGenProductAdDataType = '';
  protected $demandGenVideoResponsiveAdType = GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo::class;
  protected $demandGenVideoResponsiveAdDataType = '';
  /**
   * The device preference for the ad. You can only specify a preference for
   * mobile devices. When this preference is set the ad will be preferred over
   * other ads when being displayed on a mobile device. The ad can still be
   * displayed on other device types, for example, if no other ads are
   * available. If unspecified (no device preference), all devices are targeted.
   * This is only supported by some ad types.
   *
   * @var string
   */
  public $devicePreference;
  protected $displayUploadAdType = GoogleAdsSearchads360V23CommonDisplayUploadAdInfo::class;
  protected $displayUploadAdDataType = '';
  /**
   * The URL that appears in the ad description for some ad formats.
   *
   * @var string
   */
  public $displayUrl;
  protected $expandedDynamicSearchAdType = GoogleAdsSearchads360V23CommonExpandedDynamicSearchAdInfo::class;
  protected $expandedDynamicSearchAdDataType = '';
  protected $expandedTextAdType = GoogleAdsSearchads360V23CommonExpandedTextAdInfo::class;
  protected $expandedTextAdDataType = '';
  protected $finalAppUrlsType = GoogleAdsSearchads360V23CommonFinalAppUrl::class;
  protected $finalAppUrlsDataType = 'array';
  /**
   * The list of possible final mobile URLs after all cross-domain redirects for
   * the ad.
   *
   * @var string[]
   */
  public $finalMobileUrls;
  /**
   * The suffix to use when constructing a final URL.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * The list of possible final URLs after all cross-domain redirects for the
   * ad.
   *
   * @var string[]
   */
  public $finalUrls;
  protected $hotelAdType = GoogleAdsSearchads360V23CommonHotelAdInfo::class;
  protected $hotelAdDataType = '';
  /**
   * Output only. The ID of the ad.
   *
   * @var string
   */
  public $id;
  protected $imageAdType = GoogleAdsSearchads360V23CommonImageAdInfo::class;
  protected $imageAdDataType = '';
  protected $legacyAppInstallAdType = GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo::class;
  protected $legacyAppInstallAdDataType = '';
  protected $legacyResponsiveDisplayAdType = GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo::class;
  protected $legacyResponsiveDisplayAdDataType = '';
  protected $localAdType = GoogleAdsSearchads360V23CommonLocalAdInfo::class;
  protected $localAdDataType = '';
  /**
   * Immutable. The name of the ad. This is only used to be able to identify the
   * ad. It does not need to be unique and does not affect the served ad.
   *
   * @var string
   */
  public $name;
  protected $productAdType = GoogleAdsSearchads360V23CommonSearchAds360ProductAdInfo::class;
  protected $productAdDataType = '';
  /**
   * Immutable. The resource name of the ad. Ad resource names have the form:
   * `customers/{customer_id}/ads/{ad_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $responsiveDisplayAdType = GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo::class;
  protected $responsiveDisplayAdDataType = '';
  protected $responsiveSearchAdType = GoogleAdsSearchads360V23CommonResponsiveSearchAdInfo::class;
  protected $responsiveSearchAdDataType = '';
  protected $searchAds360ExpandedDynamicSearchAdType = GoogleAdsSearchads360V23CommonSearchAds360ExpandedDynamicSearchAdInfo::class;
  protected $searchAds360ExpandedDynamicSearchAdDataType = '';
  protected $searchAds360ExpandedTextAdType = GoogleAdsSearchads360V23CommonSearchAds360ExpandedTextAdInfo::class;
  protected $searchAds360ExpandedTextAdDataType = '';
  protected $searchAds360ResponsiveSearchAdType = GoogleAdsSearchads360V23CommonSearchAds360ResponsiveSearchAdInfo::class;
  protected $searchAds360ResponsiveSearchAdDataType = '';
  protected $searchAds360TextAdType = GoogleAdsSearchads360V23CommonSearchAds360TextAdInfo::class;
  protected $searchAds360TextAdDataType = '';
  protected $shoppingComparisonListingAdType = GoogleAdsSearchads360V23CommonShoppingComparisonListingAdInfo::class;
  protected $shoppingComparisonListingAdDataType = '';
  protected $shoppingProductAdType = GoogleAdsSearchads360V23CommonShoppingProductAdInfo::class;
  protected $shoppingProductAdDataType = '';
  protected $shoppingSmartAdType = GoogleAdsSearchads360V23CommonShoppingSmartAdInfo::class;
  protected $shoppingSmartAdDataType = '';
  protected $smartCampaignAdType = GoogleAdsSearchads360V23CommonSmartCampaignAdInfo::class;
  protected $smartCampaignAdDataType = '';
  /**
   * Output only. If this ad is system managed, then this field will indicate
   * the source. This field is read-only.
   *
   * @var string
   */
  public $systemManagedResourceSource;
  protected $textAdType = GoogleAdsSearchads360V23CommonTextAdInfo::class;
  protected $textAdDataType = '';
  /**
   * The URL template for constructing a tracking URL.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  protected $travelAdType = GoogleAdsSearchads360V23CommonTravelAdInfo::class;
  protected $travelAdDataType = '';
  /**
   * Output only. The type of ad.
   *
   * @var string
   */
  public $type;
  protected $urlCollectionsType = GoogleAdsSearchads360V23CommonUrlCollection::class;
  protected $urlCollectionsDataType = 'array';
  protected $urlCustomParametersType = GoogleAdsSearchads360V23CommonCustomParameter::class;
  protected $urlCustomParametersDataType = 'array';

  /**
   * Output only. Indicates if this ad was automatically added by Google Ads and
   * not by a user. For example, this could happen when ads are automatically
   * created as suggestions for new ads based on knowledge of how existing ads
   * are performing.
   *
   * @param bool $addedByGoogleAds
   */
  public function setAddedByGoogleAds($addedByGoogleAds)
  {
    $this->addedByGoogleAds = $addedByGoogleAds;
  }
  /**
   * @return bool
   */
  public function getAddedByGoogleAds()
  {
    return $this->addedByGoogleAds;
  }
  /**
   * Details pertaining to an app ad.
   *
   * @param GoogleAdsSearchads360V23CommonAppAdInfo $appAd
   */
  public function setAppAd(GoogleAdsSearchads360V23CommonAppAdInfo $appAd)
  {
    $this->appAd = $appAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAppAdInfo
   */
  public function getAppAd()
  {
    return $this->appAd;
  }
  /**
   * Details pertaining to an app engagement ad.
   *
   * @param GoogleAdsSearchads360V23CommonAppEngagementAdInfo $appEngagementAd
   */
  public function setAppEngagementAd(GoogleAdsSearchads360V23CommonAppEngagementAdInfo $appEngagementAd)
  {
    $this->appEngagementAd = $appEngagementAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAppEngagementAdInfo
   */
  public function getAppEngagementAd()
  {
    return $this->appEngagementAd;
  }
  /**
   * Details pertaining to an app pre-registration ad.
   *
   * @param GoogleAdsSearchads360V23CommonAppPreRegistrationAdInfo $appPreRegistrationAd
   */
  public function setAppPreRegistrationAd(GoogleAdsSearchads360V23CommonAppPreRegistrationAdInfo $appPreRegistrationAd)
  {
    $this->appPreRegistrationAd = $appPreRegistrationAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAppPreRegistrationAdInfo
   */
  public function getAppPreRegistrationAd()
  {
    return $this->appPreRegistrationAd;
  }
  /**
   * Details pertaining to a Demand Gen carousel ad.
   *
   * @param GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo $demandGenCarouselAd
   */
  public function setDemandGenCarouselAd(GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo $demandGenCarouselAd)
  {
    $this->demandGenCarouselAd = $demandGenCarouselAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo
   */
  public function getDemandGenCarouselAd()
  {
    return $this->demandGenCarouselAd;
  }
  /**
   * Details pertaining to a Demand Gen multi asset ad.
   *
   * @param GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo $demandGenMultiAssetAd
   */
  public function setDemandGenMultiAssetAd(GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo $demandGenMultiAssetAd)
  {
    $this->demandGenMultiAssetAd = $demandGenMultiAssetAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo
   */
  public function getDemandGenMultiAssetAd()
  {
    return $this->demandGenMultiAssetAd;
  }
  /**
   * Details pertaining to a Demand Gen product ad.
   *
   * @param GoogleAdsSearchads360V23CommonDemandGenProductAdInfo $demandGenProductAd
   */
  public function setDemandGenProductAd(GoogleAdsSearchads360V23CommonDemandGenProductAdInfo $demandGenProductAd)
  {
    $this->demandGenProductAd = $demandGenProductAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDemandGenProductAdInfo
   */
  public function getDemandGenProductAd()
  {
    return $this->demandGenProductAd;
  }
  /**
   * Details pertaining to a Demand Gen video responsive ad.
   *
   * @param GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo $demandGenVideoResponsiveAd
   */
  public function setDemandGenVideoResponsiveAd(GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo $demandGenVideoResponsiveAd)
  {
    $this->demandGenVideoResponsiveAd = $demandGenVideoResponsiveAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo
   */
  public function getDemandGenVideoResponsiveAd()
  {
    return $this->demandGenVideoResponsiveAd;
  }
  /**
   * The device preference for the ad. You can only specify a preference for
   * mobile devices. When this preference is set the ad will be preferred over
   * other ads when being displayed on a mobile device. The ad can still be
   * displayed on other device types, for example, if no other ads are
   * available. If unspecified (no device preference), all devices are targeted.
   * This is only supported by some ad types.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MOBILE, TABLET, DESKTOP,
   * CONNECTED_TV, OTHER
   *
   * @param self::DEVICE_PREFERENCE_* $devicePreference
   */
  public function setDevicePreference($devicePreference)
  {
    $this->devicePreference = $devicePreference;
  }
  /**
   * @return self::DEVICE_PREFERENCE_*
   */
  public function getDevicePreference()
  {
    return $this->devicePreference;
  }
  /**
   * Details pertaining to a display upload ad.
   *
   * @param GoogleAdsSearchads360V23CommonDisplayUploadAdInfo $displayUploadAd
   */
  public function setDisplayUploadAd(GoogleAdsSearchads360V23CommonDisplayUploadAdInfo $displayUploadAd)
  {
    $this->displayUploadAd = $displayUploadAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDisplayUploadAdInfo
   */
  public function getDisplayUploadAd()
  {
    return $this->displayUploadAd;
  }
  /**
   * The URL that appears in the ad description for some ad formats.
   *
   * @param string $displayUrl
   */
  public function setDisplayUrl($displayUrl)
  {
    $this->displayUrl = $displayUrl;
  }
  /**
   * @return string
   */
  public function getDisplayUrl()
  {
    return $this->displayUrl;
  }
  /**
   * Immutable. Details pertaining to an Expanded Dynamic Search Ad. This type
   * of ad has its headline, final URLs, and display URL auto-generated at
   * serving time according to domain name specific information provided by
   * `dynamic_search_ads_setting` linked at the campaign level.
   *
   * @param GoogleAdsSearchads360V23CommonExpandedDynamicSearchAdInfo $expandedDynamicSearchAd
   */
  public function setExpandedDynamicSearchAd(GoogleAdsSearchads360V23CommonExpandedDynamicSearchAdInfo $expandedDynamicSearchAd)
  {
    $this->expandedDynamicSearchAd = $expandedDynamicSearchAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonExpandedDynamicSearchAdInfo
   */
  public function getExpandedDynamicSearchAd()
  {
    return $this->expandedDynamicSearchAd;
  }
  /**
   * Details pertaining to an expanded text ad.
   *
   * @param GoogleAdsSearchads360V23CommonExpandedTextAdInfo $expandedTextAd
   */
  public function setExpandedTextAd(GoogleAdsSearchads360V23CommonExpandedTextAdInfo $expandedTextAd)
  {
    $this->expandedTextAd = $expandedTextAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonExpandedTextAdInfo
   */
  public function getExpandedTextAd()
  {
    return $this->expandedTextAd;
  }
  /**
   * A list of final app URLs that will be used on mobile if the user has the
   * specific app installed.
   *
   * @param GoogleAdsSearchads360V23CommonFinalAppUrl[] $finalAppUrls
   */
  public function setFinalAppUrls($finalAppUrls)
  {
    $this->finalAppUrls = $finalAppUrls;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFinalAppUrl[]
   */
  public function getFinalAppUrls()
  {
    return $this->finalAppUrls;
  }
  /**
   * The list of possible final mobile URLs after all cross-domain redirects for
   * the ad.
   *
   * @param string[] $finalMobileUrls
   */
  public function setFinalMobileUrls($finalMobileUrls)
  {
    $this->finalMobileUrls = $finalMobileUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalMobileUrls()
  {
    return $this->finalMobileUrls;
  }
  /**
   * The suffix to use when constructing a final URL.
   *
   * @param string $finalUrlSuffix
   */
  public function setFinalUrlSuffix($finalUrlSuffix)
  {
    $this->finalUrlSuffix = $finalUrlSuffix;
  }
  /**
   * @return string
   */
  public function getFinalUrlSuffix()
  {
    return $this->finalUrlSuffix;
  }
  /**
   * The list of possible final URLs after all cross-domain redirects for the
   * ad.
   *
   * @param string[] $finalUrls
   */
  public function setFinalUrls($finalUrls)
  {
    $this->finalUrls = $finalUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalUrls()
  {
    return $this->finalUrls;
  }
  /**
   * Details pertaining to a hotel ad.
   *
   * @param GoogleAdsSearchads360V23CommonHotelAdInfo $hotelAd
   */
  public function setHotelAd(GoogleAdsSearchads360V23CommonHotelAdInfo $hotelAd)
  {
    $this->hotelAd = $hotelAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelAdInfo
   */
  public function getHotelAd()
  {
    return $this->hotelAd;
  }
  /**
   * Output only. The ID of the ad.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Immutable. Details pertaining to an Image ad.
   *
   * @param GoogleAdsSearchads360V23CommonImageAdInfo $imageAd
   */
  public function setImageAd(GoogleAdsSearchads360V23CommonImageAdInfo $imageAd)
  {
    $this->imageAd = $imageAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonImageAdInfo
   */
  public function getImageAd()
  {
    return $this->imageAd;
  }
  /**
   * Immutable. Details pertaining to a legacy app install ad.
   *
   * @param GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo $legacyAppInstallAd
   */
  public function setLegacyAppInstallAd(GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo $legacyAppInstallAd)
  {
    $this->legacyAppInstallAd = $legacyAppInstallAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo
   */
  public function getLegacyAppInstallAd()
  {
    return $this->legacyAppInstallAd;
  }
  /**
   * Details pertaining to a legacy responsive display ad.
   *
   * @param GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo $legacyResponsiveDisplayAd
   */
  public function setLegacyResponsiveDisplayAd(GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo $legacyResponsiveDisplayAd)
  {
    $this->legacyResponsiveDisplayAd = $legacyResponsiveDisplayAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo
   */
  public function getLegacyResponsiveDisplayAd()
  {
    return $this->legacyResponsiveDisplayAd;
  }
  /**
   * Details pertaining to a local ad.
   *
   * @param GoogleAdsSearchads360V23CommonLocalAdInfo $localAd
   */
  public function setLocalAd(GoogleAdsSearchads360V23CommonLocalAdInfo $localAd)
  {
    $this->localAd = $localAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocalAdInfo
   */
  public function getLocalAd()
  {
    return $this->localAd;
  }
  /**
   * Immutable. The name of the ad. This is only used to be able to identify the
   * ad. It does not need to be unique and does not affect the served ad.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Immutable. Details pertaining to a product ad.
   *
   * @param GoogleAdsSearchads360V23CommonSearchAds360ProductAdInfo $productAd
   */
  public function setProductAd(GoogleAdsSearchads360V23CommonSearchAds360ProductAdInfo $productAd)
  {
    $this->productAd = $productAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSearchAds360ProductAdInfo
   */
  public function getProductAd()
  {
    return $this->productAd;
  }
  /**
   * Immutable. The resource name of the ad. Ad resource names have the form:
   * `customers/{customer_id}/ads/{ad_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Details pertaining to a responsive display ad.
   *
   * @param GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo $responsiveDisplayAd
   */
  public function setResponsiveDisplayAd(GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo $responsiveDisplayAd)
  {
    $this->responsiveDisplayAd = $responsiveDisplayAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo
   */
  public function getResponsiveDisplayAd()
  {
    return $this->responsiveDisplayAd;
  }
  /**
   * Details pertaining to a responsive search ad.
   *
   * @param GoogleAdsSearchads360V23CommonResponsiveSearchAdInfo $responsiveSearchAd
   */
  public function setResponsiveSearchAd(GoogleAdsSearchads360V23CommonResponsiveSearchAdInfo $responsiveSearchAd)
  {
    $this->responsiveSearchAd = $responsiveSearchAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonResponsiveSearchAdInfo
   */
  public function getResponsiveSearchAd()
  {
    return $this->responsiveSearchAd;
  }
  /**
   * Immutable. Details pertaining to an expanded dynamic search ad.
   *
   * @param GoogleAdsSearchads360V23CommonSearchAds360ExpandedDynamicSearchAdInfo $searchAds360ExpandedDynamicSearchAd
   */
  public function setSearchAds360ExpandedDynamicSearchAd(GoogleAdsSearchads360V23CommonSearchAds360ExpandedDynamicSearchAdInfo $searchAds360ExpandedDynamicSearchAd)
  {
    $this->searchAds360ExpandedDynamicSearchAd = $searchAds360ExpandedDynamicSearchAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSearchAds360ExpandedDynamicSearchAdInfo
   */
  public function getSearchAds360ExpandedDynamicSearchAd()
  {
    return $this->searchAds360ExpandedDynamicSearchAd;
  }
  /**
   * Immutable. Details pertaining to an expanded text ad.
   *
   * @param GoogleAdsSearchads360V23CommonSearchAds360ExpandedTextAdInfo $searchAds360ExpandedTextAd
   */
  public function setSearchAds360ExpandedTextAd(GoogleAdsSearchads360V23CommonSearchAds360ExpandedTextAdInfo $searchAds360ExpandedTextAd)
  {
    $this->searchAds360ExpandedTextAd = $searchAds360ExpandedTextAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSearchAds360ExpandedTextAdInfo
   */
  public function getSearchAds360ExpandedTextAd()
  {
    return $this->searchAds360ExpandedTextAd;
  }
  /**
   * Immutable. Details pertaining to a responsive search ad.
   *
   * @param GoogleAdsSearchads360V23CommonSearchAds360ResponsiveSearchAdInfo $searchAds360ResponsiveSearchAd
   */
  public function setSearchAds360ResponsiveSearchAd(GoogleAdsSearchads360V23CommonSearchAds360ResponsiveSearchAdInfo $searchAds360ResponsiveSearchAd)
  {
    $this->searchAds360ResponsiveSearchAd = $searchAds360ResponsiveSearchAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSearchAds360ResponsiveSearchAdInfo
   */
  public function getSearchAds360ResponsiveSearchAd()
  {
    return $this->searchAds360ResponsiveSearchAd;
  }
  /**
   * Immutable. Details pertaining to a text ad.
   *
   * @param GoogleAdsSearchads360V23CommonSearchAds360TextAdInfo $searchAds360TextAd
   */
  public function setSearchAds360TextAd(GoogleAdsSearchads360V23CommonSearchAds360TextAdInfo $searchAds360TextAd)
  {
    $this->searchAds360TextAd = $searchAds360TextAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSearchAds360TextAdInfo
   */
  public function getSearchAds360TextAd()
  {
    return $this->searchAds360TextAd;
  }
  /**
   * Details pertaining to a Shopping Comparison Listing ad.
   *
   * @param GoogleAdsSearchads360V23CommonShoppingComparisonListingAdInfo $shoppingComparisonListingAd
   */
  public function setShoppingComparisonListingAd(GoogleAdsSearchads360V23CommonShoppingComparisonListingAdInfo $shoppingComparisonListingAd)
  {
    $this->shoppingComparisonListingAd = $shoppingComparisonListingAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonShoppingComparisonListingAdInfo
   */
  public function getShoppingComparisonListingAd()
  {
    return $this->shoppingComparisonListingAd;
  }
  /**
   * Details pertaining to a Shopping product ad.
   *
   * @param GoogleAdsSearchads360V23CommonShoppingProductAdInfo $shoppingProductAd
   */
  public function setShoppingProductAd(GoogleAdsSearchads360V23CommonShoppingProductAdInfo $shoppingProductAd)
  {
    $this->shoppingProductAd = $shoppingProductAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonShoppingProductAdInfo
   */
  public function getShoppingProductAd()
  {
    return $this->shoppingProductAd;
  }
  /**
   * Details pertaining to a Smart Shopping ad.
   *
   * @param GoogleAdsSearchads360V23CommonShoppingSmartAdInfo $shoppingSmartAd
   */
  public function setShoppingSmartAd(GoogleAdsSearchads360V23CommonShoppingSmartAdInfo $shoppingSmartAd)
  {
    $this->shoppingSmartAd = $shoppingSmartAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonShoppingSmartAdInfo
   */
  public function getShoppingSmartAd()
  {
    return $this->shoppingSmartAd;
  }
  /**
   * Details pertaining to a Smart campaign ad.
   *
   * @param GoogleAdsSearchads360V23CommonSmartCampaignAdInfo $smartCampaignAd
   */
  public function setSmartCampaignAd(GoogleAdsSearchads360V23CommonSmartCampaignAdInfo $smartCampaignAd)
  {
    $this->smartCampaignAd = $smartCampaignAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSmartCampaignAdInfo
   */
  public function getSmartCampaignAd()
  {
    return $this->smartCampaignAd;
  }
  /**
   * Output only. If this ad is system managed, then this field will indicate
   * the source. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_VARIATIONS
   *
   * @param self::SYSTEM_MANAGED_RESOURCE_SOURCE_* $systemManagedResourceSource
   */
  public function setSystemManagedResourceSource($systemManagedResourceSource)
  {
    $this->systemManagedResourceSource = $systemManagedResourceSource;
  }
  /**
   * @return self::SYSTEM_MANAGED_RESOURCE_SOURCE_*
   */
  public function getSystemManagedResourceSource()
  {
    return $this->systemManagedResourceSource;
  }
  /**
   * Immutable. Details pertaining to a text ad.
   *
   * @param GoogleAdsSearchads360V23CommonTextAdInfo $textAd
   */
  public function setTextAd(GoogleAdsSearchads360V23CommonTextAdInfo $textAd)
  {
    $this->textAd = $textAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTextAdInfo
   */
  public function getTextAd()
  {
    return $this->textAd;
  }
  /**
   * The URL template for constructing a tracking URL.
   *
   * @param string $trackingUrlTemplate
   */
  public function setTrackingUrlTemplate($trackingUrlTemplate)
  {
    $this->trackingUrlTemplate = $trackingUrlTemplate;
  }
  /**
   * @return string
   */
  public function getTrackingUrlTemplate()
  {
    return $this->trackingUrlTemplate;
  }
  /**
   * Details pertaining to a travel ad.
   *
   * @param GoogleAdsSearchads360V23CommonTravelAdInfo $travelAd
   */
  public function setTravelAd(GoogleAdsSearchads360V23CommonTravelAdInfo $travelAd)
  {
    $this->travelAd = $travelAd;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTravelAdInfo
   */
  public function getTravelAd()
  {
    return $this->travelAd;
  }
  /**
   * Output only. The type of ad.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TEXT_AD, EXPANDED_TEXT_AD,
   * EXPANDED_DYNAMIC_SEARCH_AD, HOTEL_AD, SHOPPING_SMART_AD,
   * SHOPPING_PRODUCT_AD, VIDEO_AD, IMAGE_AD, RESPONSIVE_SEARCH_AD,
   * LEGACY_RESPONSIVE_DISPLAY_AD, APP_AD, LEGACY_APP_INSTALL_AD,
   * RESPONSIVE_DISPLAY_AD, LOCAL_AD, HTML5_UPLOAD_AD, DYNAMIC_HTML5_AD,
   * APP_ENGAGEMENT_AD, SHOPPING_COMPARISON_LISTING_AD, VIDEO_BUMPER_AD,
   * VIDEO_NON_SKIPPABLE_IN_STREAM_AD, VIDEO_TRUEVIEW_IN_STREAM_AD,
   * VIDEO_RESPONSIVE_AD, SMART_CAMPAIGN_AD, CALL_AD, APP_PRE_REGISTRATION_AD,
   * DEMAND_GEN_MULTI_ASSET_AD, DEMAND_GEN_CAROUSEL_AD, TRAVEL_AD,
   * DEMAND_GEN_VIDEO_RESPONSIVE_AD, DEMAND_GEN_PRODUCT_AD, MULTIMEDIA_AD
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Additional URLs for the ad that are tagged with a unique identifier that
   * can be referenced from other fields in the ad.
   *
   * @param GoogleAdsSearchads360V23CommonUrlCollection[] $urlCollections
   */
  public function setUrlCollections($urlCollections)
  {
    $this->urlCollections = $urlCollections;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUrlCollection[]
   */
  public function getUrlCollections()
  {
    return $this->urlCollections;
  }
  /**
   * The list of mappings that can be used to substitute custom parameter tags
   * in a `tracking_url_template`, `final_urls`, or `mobile_final_urls`. For
   * mutates, use url custom parameter operations.
   *
   * @param GoogleAdsSearchads360V23CommonCustomParameter[] $urlCustomParameters
   */
  public function setUrlCustomParameters($urlCustomParameters)
  {
    $this->urlCustomParameters = $urlCustomParameters;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomParameter[]
   */
  public function getUrlCustomParameters()
  {
    return $this->urlCustomParameters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAd::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAd');
