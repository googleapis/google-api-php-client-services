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

class GoogleAdsSearchads360V23CommonSegments extends \Google\Collection
{
  /**
   * No value has been specified.
   */
  public const AD_FORMAT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const AD_FORMAT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Value assigned to formats (such as experimental formats) which don't
   * support format segmentation in Video and Demand Gen campaigns. Note that
   * these formats may change categories in the future, for example if an
   * experimental format is exposed or a new format is added. We strongly
   * recommend to not rely on this field for long term decisions.
   */
  public const AD_FORMAT_TYPE_OTHER = 'OTHER';
  /**
   * Value assigned for Video TrueView for Action campaigns statistics. Note
   * that statistics with this value may change categories in the future, for
   * example if format segmentation support is added for new campaign types. We
   * strongly recommend to not rely on this field for long term decisions.
   */
  public const AD_FORMAT_TYPE_UNSEGMENTED = 'UNSEGMENTED';
  /**
   * Skippable in-stream ads.
   */
  public const AD_FORMAT_TYPE_INSTREAM_SKIPPABLE = 'INSTREAM_SKIPPABLE';
  /**
   * Non-skippable in-stream ads.
   */
  public const AD_FORMAT_TYPE_INSTREAM_NON_SKIPPABLE = 'INSTREAM_NON_SKIPPABLE';
  /**
   * In-feed YouTube or image ads served on feed surfaces (e.g. Discover Feed,
   * YouTube Home, etc.).
   */
  public const AD_FORMAT_TYPE_INFEED = 'INFEED';
  /**
   * Short (<7 secs) in-stream non-skippable YouTube ads.
   */
  public const AD_FORMAT_TYPE_BUMPER = 'BUMPER';
  /**
   * Outstream ads.
   */
  public const AD_FORMAT_TYPE_OUTSTREAM = 'OUTSTREAM';
  /**
   * Masthead ads.
   */
  public const AD_FORMAT_TYPE_MASTHEAD = 'MASTHEAD';
  /**
   * Audio ads.
   */
  public const AD_FORMAT_TYPE_AUDIO = 'AUDIO';
  /**
   * Vertical full-screen video or image ads served on YouTube Shorts or
   * BrandConnect ads served as organic YouTube Shorts.
   */
  public const AD_FORMAT_TYPE_SHORTS = 'SHORTS';
  /**
   * Image ads served when a user pauses an organic YouTube video on a TV
   * screen. These ads are displayed directly next to the static video frame on
   * the pause screen itself. Note that this does not include Demand Gen image
   * ads served on the ad panel below or on top of a paused organic video. Those
   * are reported under INFEED.
   */
  public const AD_FORMAT_TYPE_PAUSE = 'PAUSE';
  /**
   * An ad format that promotes a specific entity within a vertical, for
   * example, a hotel ad in the Travel vertical on Search.
   */
  public const AD_FORMAT_TYPE_VERTICAL_ADS_PROMOTION = 'VERTICAL_ADS_PROMOTION';
  /**
   * An ad format for a booking link call-to-action within a vertical ad, for
   * example a 'Book Now' link for a hotel ad.
   */
  public const AD_FORMAT_TYPE_VERTICAL_ADS_BOOKING_LINK = 'VERTICAL_ADS_BOOKING_LINK';
  /**
   * A standard text ad format. This is currently only used for ads on the
   * Search network.
   */
  public const AD_FORMAT_TYPE_TEXT = 'TEXT';
  /**
   * Not specified.
   */
  public const AD_NETWORK_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const AD_NETWORK_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Google search.
   */
  public const AD_NETWORK_TYPE_SEARCH = 'SEARCH';
  /**
   * Search partners.
   */
  public const AD_NETWORK_TYPE_SEARCH_PARTNERS = 'SEARCH_PARTNERS';
  /**
   * Display Network.
   */
  public const AD_NETWORK_TYPE_CONTENT = 'CONTENT';
  /**
   * Cross-network.
   */
  public const AD_NETWORK_TYPE_MIXED = 'MIXED';
  /**
   * YouTube
   */
  public const AD_NETWORK_TYPE_YOUTUBE = 'YOUTUBE';
  /**
   * Google TV
   */
  public const AD_NETWORK_TYPE_GOOGLE_TV = 'GOOGLE_TV';
  public const AD_NETWORK_TYPE_GOOGLE_OWNED_CHANNELS = 'GOOGLE_OWNED_CHANNELS';
  /**
   * Gmail
   */
  public const AD_NETWORK_TYPE_GMAIL = 'GMAIL';
  /**
   * Discover Feed
   */
  public const AD_NETWORK_TYPE_DISCOVER = 'DISCOVER';
  /**
   * Maps
   */
  public const AD_NETWORK_TYPE_MAPS = 'MAPS';
  /**
   * Not specified.
   */
  public const CONVERSION_ACTION_CATEGORY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONVERSION_ACTION_CATEGORY_UNKNOWN = 'UNKNOWN';
  /**
   * Default category.
   */
  public const CONVERSION_ACTION_CATEGORY_DEFAULT = 'DEFAULT';
  /**
   * User visiting a page.
   */
  public const CONVERSION_ACTION_CATEGORY_PAGE_VIEW = 'PAGE_VIEW';
  /**
   * Purchase, sales, or "order placed" event.
   */
  public const CONVERSION_ACTION_CATEGORY_PURCHASE = 'PURCHASE';
  /**
   * Signup user action.
   */
  public const CONVERSION_ACTION_CATEGORY_SIGNUP = 'SIGNUP';
  /**
   * Software download action (as for an app).
   */
  public const CONVERSION_ACTION_CATEGORY_DOWNLOAD = 'DOWNLOAD';
  /**
   * The addition of items to a shopping cart or bag on an advertiser site.
   */
  public const CONVERSION_ACTION_CATEGORY_ADD_TO_CART = 'ADD_TO_CART';
  /**
   * When someone enters the checkout flow on an advertiser site.
   */
  public const CONVERSION_ACTION_CATEGORY_BEGIN_CHECKOUT = 'BEGIN_CHECKOUT';
  /**
   * The start of a paid subscription for a product or service.
   */
  public const CONVERSION_ACTION_CATEGORY_SUBSCRIBE_PAID = 'SUBSCRIBE_PAID';
  /**
   * A call to indicate interest in an advertiser's offering.
   */
  public const CONVERSION_ACTION_CATEGORY_PHONE_CALL_LEAD = 'PHONE_CALL_LEAD';
  /**
   * A lead conversion imported from an external source into Google Ads.
   */
  public const CONVERSION_ACTION_CATEGORY_IMPORTED_LEAD = 'IMPORTED_LEAD';
  /**
   * A submission of a form on an advertiser site indicating business interest.
   */
  public const CONVERSION_ACTION_CATEGORY_SUBMIT_LEAD_FORM = 'SUBMIT_LEAD_FORM';
  /**
   * A booking of an appointment with an advertiser's business.
   */
  public const CONVERSION_ACTION_CATEGORY_BOOK_APPOINTMENT = 'BOOK_APPOINTMENT';
  /**
   * A quote or price estimate request.
   */
  public const CONVERSION_ACTION_CATEGORY_REQUEST_QUOTE = 'REQUEST_QUOTE';
  /**
   * A search for an advertiser's business location with intention to visit.
   */
  public const CONVERSION_ACTION_CATEGORY_GET_DIRECTIONS = 'GET_DIRECTIONS';
  /**
   * A click to an advertiser's partner's site.
   */
  public const CONVERSION_ACTION_CATEGORY_OUTBOUND_CLICK = 'OUTBOUND_CLICK';
  /**
   * A call, SMS, email, chat or other type of contact to an advertiser.
   */
  public const CONVERSION_ACTION_CATEGORY_CONTACT = 'CONTACT';
  /**
   * A website engagement event such as long site time or a Google Analytics
   * (GA) Smart Goal. Intended to be used for GA, Firebase, GA Gold goal
   * imports.
   */
  public const CONVERSION_ACTION_CATEGORY_ENGAGEMENT = 'ENGAGEMENT';
  /**
   * A visit to a physical store location.
   */
  public const CONVERSION_ACTION_CATEGORY_STORE_VISIT = 'STORE_VISIT';
  /**
   * A sale occurring in a physical store.
   */
  public const CONVERSION_ACTION_CATEGORY_STORE_SALE = 'STORE_SALE';
  /**
   * A lead conversion imported from an external source into Google Ads, that
   * has been further qualified by the advertiser (marketing/sales team). In the
   * lead-to-sale journey, advertisers get leads, then act on them by reaching
   * out to the consumer. If the consumer is interested and may end up buying
   * their product, the advertiser marks such leads as "qualified leads".
   */
  public const CONVERSION_ACTION_CATEGORY_QUALIFIED_LEAD = 'QUALIFIED_LEAD';
  /**
   * A lead conversion imported from an external source into Google Ads, that
   * has further completed a chosen stage as defined by the lead gen advertiser.
   */
  public const CONVERSION_ACTION_CATEGORY_CONVERTED_LEAD = 'CONVERTED_LEAD';
  /**
   * Not specified.
   */
  public const DAY_OF_WEEK_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DAY_OF_WEEK_UNKNOWN = 'UNKNOWN';
  /**
   * Monday.
   */
  public const DAY_OF_WEEK_MONDAY = 'MONDAY';
  /**
   * Tuesday.
   */
  public const DAY_OF_WEEK_TUESDAY = 'TUESDAY';
  /**
   * Wednesday.
   */
  public const DAY_OF_WEEK_WEDNESDAY = 'WEDNESDAY';
  /**
   * Thursday.
   */
  public const DAY_OF_WEEK_THURSDAY = 'THURSDAY';
  /**
   * Friday.
   */
  public const DAY_OF_WEEK_FRIDAY = 'FRIDAY';
  /**
   * Saturday.
   */
  public const DAY_OF_WEEK_SATURDAY = 'SATURDAY';
  /**
   * Sunday.
   */
  public const DAY_OF_WEEK_SUNDAY = 'SUNDAY';
  /**
   * Not specified.
   */
  public const DEVICE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DEVICE_UNKNOWN = 'UNKNOWN';
  /**
   * Mobile devices with full browsers.
   */
  public const DEVICE_MOBILE = 'MOBILE';
  /**
   * Tablets with full browsers.
   */
  public const DEVICE_TABLET = 'TABLET';
  /**
   * Computers.
   */
  public const DEVICE_DESKTOP = 'DESKTOP';
  /**
   * Smart TVs and game consoles.
   */
  public const DEVICE_CONNECTED_TV = 'CONNECTED_TV';
  /**
   * Other device types.
   */
  public const DEVICE_OTHER = 'OTHER';
  /**
   * Not specified.
   */
  public const PRODUCT_CHANNEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRODUCT_CHANNEL_UNKNOWN = 'UNKNOWN';
  /**
   * The item is sold online.
   */
  public const PRODUCT_CHANNEL_ONLINE = 'ONLINE';
  /**
   * The item is sold in local stores.
   */
  public const PRODUCT_CHANNEL_LOCAL = 'LOCAL';
  /**
   * Not specified.
   */
  public const PRODUCT_CHANNEL_EXCLUSIVITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRODUCT_CHANNEL_EXCLUSIVITY_UNKNOWN = 'UNKNOWN';
  /**
   * The item is sold through one channel only, either local stores or online as
   * indicated by its ProductChannel.
   */
  public const PRODUCT_CHANNEL_EXCLUSIVITY_SINGLE_CHANNEL = 'SINGLE_CHANNEL';
  /**
   * The item is matched to its online or local stores counterpart, indicating
   * it is available for purchase in both ShoppingProductChannels.
   */
  public const PRODUCT_CHANNEL_EXCLUSIVITY_MULTI_CHANNEL = 'MULTI_CHANNEL';
  /**
   * Not specified.
   */
  public const PRODUCT_CONDITION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRODUCT_CONDITION_UNKNOWN = 'UNKNOWN';
  /**
   * The product condition is new.
   */
  public const PRODUCT_CONDITION_NEW = 'NEW';
  /**
   * The product condition is refurbished.
   */
  public const PRODUCT_CONDITION_REFURBISHED = 'REFURBISHED';
  /**
   * The product condition is used.
   */
  public const PRODUCT_CONDITION_USED = 'USED';
  /**
   * Not specified.
   */
  public const PRODUCT_SOLD_CONDITION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRODUCT_SOLD_CONDITION_UNKNOWN = 'UNKNOWN';
  /**
   * The product condition is new.
   */
  public const PRODUCT_SOLD_CONDITION_NEW = 'NEW';
  /**
   * The product condition is refurbished.
   */
  public const PRODUCT_SOLD_CONDITION_REFURBISHED = 'REFURBISHED';
  /**
   * The product condition is used.
   */
  public const PRODUCT_SOLD_CONDITION_USED = 'USED';
  /**
   * Not specified.
   */
  public const VERTICAL_ADS_VERTICAL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VERTICAL_ADS_VERTICAL_UNKNOWN = 'UNKNOWN';
  /**
   * Hotels travel vertical.
   */
  public const VERTICAL_ADS_VERTICAL_HOTELS = 'HOTELS';
  /**
   * Vacation rentals travel vertical.
   */
  public const VERTICAL_ADS_VERTICAL_VACATION_RENTALS = 'VACATION_RENTALS';
  /**
   * Rental cars travel vertical.
   */
  public const VERTICAL_ADS_VERTICAL_RENTAL_CARS = 'RENTAL_CARS';
  /**
   * Events travel vertical.
   */
  public const VERTICAL_ADS_VERTICAL_EVENTS = 'EVENTS';
  /**
   * Things to do travel vertical.
   */
  public const VERTICAL_ADS_VERTICAL_THINGS_TO_DO = 'THINGS_TO_DO';
  /**
   * Flights travel vertical.
   */
  public const VERTICAL_ADS_VERTICAL_FLIGHTS = 'FLIGHTS';
  protected $collection_key = 'rawEventConversionDimensions';
  /**
   * Ad Format type.
   *
   * @var string
   */
  public $adFormatType;
  /**
   * Ad network type.
   *
   * @var string
   */
  public $adNetworkType;
  protected $assetInteractionTargetType = GoogleAdsSearchads360V23CommonAssetInteractionTarget::class;
  protected $assetInteractionTargetDataType = '';
  /**
   * Resource name of the conversion action.
   *
   * @var string
   */
  public $conversionAction;
  /**
   * Conversion action category.
   *
   * @var string
   */
  public $conversionActionCategory;
  /**
   * Conversion action name.
   *
   * @var string
   */
  public $conversionActionName;
  protected $conversionCustomDimensionsType = GoogleAdsSearchads360V23CommonValue::class;
  protected $conversionCustomDimensionsDataType = 'array';
  /**
   * Date to which metrics apply. yyyy-MM-dd format, for example, 2018-04-17.
   *
   * @var string
   */
  public $date;
  /**
   * Day of the week, for example, MONDAY.
   *
   * @var string
   */
  public $dayOfWeek;
  /**
   * Device to which metrics apply.
   *
   * @var string
   */
  public $device;
  /**
   * Resource name of the geo target constant that represents a city.
   *
   * @var string
   */
  public $geoTargetCity;
  /**
   * Resource name of the geo target constant that represents a country.
   *
   * @var string
   */
  public $geoTargetCountry;
  /**
   * Resource name of the geo target constant that represents a metro.
   *
   * @var string
   */
  public $geoTargetMetro;
  /**
   * Resource name of the geo target constant that represents a postal code.
   *
   * @var string
   */
  public $geoTargetPostalCode;
  /**
   * Resource name of the geo target constant that represents a region.
   *
   * @var string
   */
  public $geoTargetRegion;
  /**
   * Hour of day as a number between 0 and 23, inclusive.
   *
   * @var int
   */
  public $hour;
  protected $keywordType = GoogleAdsSearchads360V23CommonKeyword::class;
  protected $keywordDataType = '';
  /**
   * Month as represented by the date of the first day of a month. Formatted as
   * yyyy-MM-dd.
   *
   * @var string
   */
  public $month;
  /**
   * Bidding category (level 1) of the product.
   *
   * @var string
   */
  public $productBiddingCategoryLevel1;
  /**
   * Bidding category (level 2) of the product.
   *
   * @var string
   */
  public $productBiddingCategoryLevel2;
  /**
   * Bidding category (level 3) of the product.
   *
   * @var string
   */
  public $productBiddingCategoryLevel3;
  /**
   * Bidding category (level 4) of the product.
   *
   * @var string
   */
  public $productBiddingCategoryLevel4;
  /**
   * Bidding category (level 5) of the product.
   *
   * @var string
   */
  public $productBiddingCategoryLevel5;
  /**
   * Brand of the product.
   *
   * @var string
   */
  public $productBrand;
  /**
   * Channel of the product.
   *
   * @var string
   */
  public $productChannel;
  /**
   * Channel exclusivity of the product.
   *
   * @var string
   */
  public $productChannelExclusivity;
  /**
   * Condition of the product.
   *
   * @var string
   */
  public $productCondition;
  /**
   * Resource name of the geo target constant for the country of sale of the
   * product.
   *
   * @var string
   */
  public $productCountry;
  /**
   * Custom attribute 0 of the product.
   *
   * @var string
   */
  public $productCustomAttribute0;
  /**
   * Custom attribute 1 of the product.
   *
   * @var string
   */
  public $productCustomAttribute1;
  /**
   * Custom attribute 2 of the product.
   *
   * @var string
   */
  public $productCustomAttribute2;
  /**
   * Custom attribute 3 of the product.
   *
   * @var string
   */
  public $productCustomAttribute3;
  /**
   * Custom attribute 4 of the product.
   *
   * @var string
   */
  public $productCustomAttribute4;
  /**
   * Item ID of the product.
   *
   * @var string
   */
  public $productItemId;
  /**
   * Resource name of the language constant for the language of the product.
   *
   * @var string
   */
  public $productLanguage;
  /**
   * Bidding category (level 1) of the product sold.
   *
   * @var string
   */
  public $productSoldBiddingCategoryLevel1;
  /**
   * Bidding category (level 2) of the product sold.
   *
   * @var string
   */
  public $productSoldBiddingCategoryLevel2;
  /**
   * Bidding category (level 3) of the product sold.
   *
   * @var string
   */
  public $productSoldBiddingCategoryLevel3;
  /**
   * Bidding category (level 4) of the product sold.
   *
   * @var string
   */
  public $productSoldBiddingCategoryLevel4;
  /**
   * Bidding category (level 5) of the product sold.
   *
   * @var string
   */
  public $productSoldBiddingCategoryLevel5;
  /**
   * Brand of the product sold.
   *
   * @var string
   */
  public $productSoldBrand;
  /**
   * Condition of the product sold.
   *
   * @var string
   */
  public $productSoldCondition;
  /**
   * Custom attribute 0 of the product sold.
   *
   * @var string
   */
  public $productSoldCustomAttribute0;
  /**
   * Custom attribute 1 of the product sold.
   *
   * @var string
   */
  public $productSoldCustomAttribute1;
  /**
   * Custom attribute 2 of the product sold.
   *
   * @var string
   */
  public $productSoldCustomAttribute2;
  /**
   * Custom attribute 3 of the product sold.
   *
   * @var string
   */
  public $productSoldCustomAttribute3;
  /**
   * Custom attribute 4 of the product sold.
   *
   * @var string
   */
  public $productSoldCustomAttribute4;
  /**
   * Item ID of the product sold.
   *
   * @var string
   */
  public $productSoldItemId;
  /**
   * Title of the product sold.
   *
   * @var string
   */
  public $productSoldTitle;
  /**
   * Type (level 1) of the product sold.
   *
   * @var string
   */
  public $productSoldTypeL1;
  /**
   * Type (level 2) of the product sold.
   *
   * @var string
   */
  public $productSoldTypeL2;
  /**
   * Type (level 3) of the product sold.
   *
   * @var string
   */
  public $productSoldTypeL3;
  /**
   * Type (level 4) of the product sold.
   *
   * @var string
   */
  public $productSoldTypeL4;
  /**
   * Type (level 5) of the product sold.
   *
   * @var string
   */
  public $productSoldTypeL5;
  /**
   * Store ID of the product.
   *
   * @var string
   */
  public $productStoreId;
  /**
   * Title of the product.
   *
   * @var string
   */
  public $productTitle;
  /**
   * Type (level 1) of the product.
   *
   * @var string
   */
  public $productTypeL1;
  /**
   * Type (level 2) of the product.
   *
   * @var string
   */
  public $productTypeL2;
  /**
   * Type (level 3) of the product.
   *
   * @var string
   */
  public $productTypeL3;
  /**
   * Type (level 4) of the product.
   *
   * @var string
   */
  public $productTypeL4;
  /**
   * Type (level 5) of the product.
   *
   * @var string
   */
  public $productTypeL5;
  /**
   * Quarter as represented by the date of the first day of a quarter. Uses the
   * calendar year for quarters, for example, the second quarter of 2018 starts
   * on 2018-04-01. Formatted as yyyy-MM-dd.
   *
   * @var string
   */
  public $quarter;
  protected $rawEventConversionDimensionsType = GoogleAdsSearchads360V23CommonValue::class;
  protected $rawEventConversionDimensionsDataType = 'array';
  /**
   * The display names of participants in an event listing, like performers,
   * speakers, or teams.
   *
   * @var string
   */
  public $verticalAdsEventParticipantDisplayNames;
  /**
   * The class of the hotel. Generally in the range of 1 to 5 stars, but fully
   * customizable in the hotel feed.
   *
   * @var string
   */
  public $verticalAdsHotelClass;
  /**
   * The listing associated with a listing impression, click or conversion.
   *
   * @var string
   */
  public $verticalAdsListing;
  /**
   * The brand associated with a specific listing within a Vertical Ads context,
   * for example, the brand of a car rental, a vacation home, or an event.
   *
   * @var string
   */
  public $verticalAdsListingBrand;
  /**
   * The city where the vertical ads listing is located.
   *
   * @var string
   */
  public $verticalAdsListingCity;
  /**
   * The country where the vertical ads listing is located.
   *
   * @var string
   */
  public $verticalAdsListingCountry;
  /**
   * The region where the vertical ads listing is located.
   *
   * @var string
   */
  public $verticalAdsListingRegion;
  /**
   * A specific partner account within a Partner Center (for example, Hotel
   * Center) that supplies inventory feed data for Vertical Ads.
   *
   * @var string
   */
  public $verticalAdsPartnerAccount;
  /**
   * Type of vertical ad, such as Vacation Rentals, Car Rentals, or Events, used
   * to categorize and segment data in the context of Vertical Ads.
   *
   * @var string
   */
  public $verticalAdsVertical;
  /**
   * Week as defined as Monday through Sunday, and represented by the date of
   * Monday. Formatted as yyyy-MM-dd.
   *
   * @var string
   */
  public $week;
  /**
   * Year, formatted as yyyy.
   *
   * @var int
   */
  public $year;

  /**
   * Ad Format type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OTHER, UNSEGMENTED,
   * INSTREAM_SKIPPABLE, INSTREAM_NON_SKIPPABLE, INFEED, BUMPER, OUTSTREAM,
   * MASTHEAD, AUDIO, SHORTS, PAUSE, VERTICAL_ADS_PROMOTION,
   * VERTICAL_ADS_BOOKING_LINK, TEXT
   *
   * @param self::AD_FORMAT_TYPE_* $adFormatType
   */
  public function setAdFormatType($adFormatType)
  {
    $this->adFormatType = $adFormatType;
  }
  /**
   * @return self::AD_FORMAT_TYPE_*
   */
  public function getAdFormatType()
  {
    return $this->adFormatType;
  }
  /**
   * Ad network type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH, SEARCH_PARTNERS, CONTENT,
   * MIXED, YOUTUBE, GOOGLE_TV, GOOGLE_OWNED_CHANNELS, GMAIL, DISCOVER, MAPS
   *
   * @param self::AD_NETWORK_TYPE_* $adNetworkType
   */
  public function setAdNetworkType($adNetworkType)
  {
    $this->adNetworkType = $adNetworkType;
  }
  /**
   * @return self::AD_NETWORK_TYPE_*
   */
  public function getAdNetworkType()
  {
    return $this->adNetworkType;
  }
  /**
   * Only used with CustomerAsset, CampaignAsset and AdGroupAsset metrics.
   * Indicates whether the interaction metrics occurred on the asset itself or a
   * different asset or ad unit. Interactions (for example, clicks) are counted
   * across all the parts of the served ad (for example, Ad itself and other
   * components like Sitelinks) when they are served together. When
   * interaction_on_this_asset is true, it means the interactions are on this
   * specific asset and when interaction_on_this_asset is false, it means the
   * interactions is not on this specific asset but on other parts of the served
   * ad this asset is served with.
   *
   * @param GoogleAdsSearchads360V23CommonAssetInteractionTarget $assetInteractionTarget
   */
  public function setAssetInteractionTarget(GoogleAdsSearchads360V23CommonAssetInteractionTarget $assetInteractionTarget)
  {
    $this->assetInteractionTarget = $assetInteractionTarget;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAssetInteractionTarget
   */
  public function getAssetInteractionTarget()
  {
    return $this->assetInteractionTarget;
  }
  /**
   * Resource name of the conversion action.
   *
   * @param string $conversionAction
   */
  public function setConversionAction($conversionAction)
  {
    $this->conversionAction = $conversionAction;
  }
  /**
   * @return string
   */
  public function getConversionAction()
  {
    return $this->conversionAction;
  }
  /**
   * Conversion action category.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DEFAULT, PAGE_VIEW, PURCHASE,
   * SIGNUP, DOWNLOAD, ADD_TO_CART, BEGIN_CHECKOUT, SUBSCRIBE_PAID,
   * PHONE_CALL_LEAD, IMPORTED_LEAD, SUBMIT_LEAD_FORM, BOOK_APPOINTMENT,
   * REQUEST_QUOTE, GET_DIRECTIONS, OUTBOUND_CLICK, CONTACT, ENGAGEMENT,
   * STORE_VISIT, STORE_SALE, QUALIFIED_LEAD, CONVERTED_LEAD
   *
   * @param self::CONVERSION_ACTION_CATEGORY_* $conversionActionCategory
   */
  public function setConversionActionCategory($conversionActionCategory)
  {
    $this->conversionActionCategory = $conversionActionCategory;
  }
  /**
   * @return self::CONVERSION_ACTION_CATEGORY_*
   */
  public function getConversionActionCategory()
  {
    return $this->conversionActionCategory;
  }
  /**
   * Conversion action name.
   *
   * @param string $conversionActionName
   */
  public function setConversionActionName($conversionActionName)
  {
    $this->conversionActionName = $conversionActionName;
  }
  /**
   * @return string
   */
  public function getConversionActionName()
  {
    return $this->conversionActionName;
  }
  /**
   * The conversion custom dimensions.
   *
   * @param GoogleAdsSearchads360V23CommonValue[] $conversionCustomDimensions
   */
  public function setConversionCustomDimensions($conversionCustomDimensions)
  {
    $this->conversionCustomDimensions = $conversionCustomDimensions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonValue[]
   */
  public function getConversionCustomDimensions()
  {
    return $this->conversionCustomDimensions;
  }
  /**
   * Date to which metrics apply. yyyy-MM-dd format, for example, 2018-04-17.
   *
   * @param string $date
   */
  public function setDate($date)
  {
    $this->date = $date;
  }
  /**
   * @return string
   */
  public function getDate()
  {
    return $this->date;
  }
  /**
   * Day of the week, for example, MONDAY.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MONDAY, TUESDAY, WEDNESDAY,
   * THURSDAY, FRIDAY, SATURDAY, SUNDAY
   *
   * @param self::DAY_OF_WEEK_* $dayOfWeek
   */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /**
   * @return self::DAY_OF_WEEK_*
   */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /**
   * Device to which metrics apply.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MOBILE, TABLET, DESKTOP,
   * CONNECTED_TV, OTHER
   *
   * @param self::DEVICE_* $device
   */
  public function setDevice($device)
  {
    $this->device = $device;
  }
  /**
   * @return self::DEVICE_*
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * Resource name of the geo target constant that represents a city.
   *
   * @param string $geoTargetCity
   */
  public function setGeoTargetCity($geoTargetCity)
  {
    $this->geoTargetCity = $geoTargetCity;
  }
  /**
   * @return string
   */
  public function getGeoTargetCity()
  {
    return $this->geoTargetCity;
  }
  /**
   * Resource name of the geo target constant that represents a country.
   *
   * @param string $geoTargetCountry
   */
  public function setGeoTargetCountry($geoTargetCountry)
  {
    $this->geoTargetCountry = $geoTargetCountry;
  }
  /**
   * @return string
   */
  public function getGeoTargetCountry()
  {
    return $this->geoTargetCountry;
  }
  /**
   * Resource name of the geo target constant that represents a metro.
   *
   * @param string $geoTargetMetro
   */
  public function setGeoTargetMetro($geoTargetMetro)
  {
    $this->geoTargetMetro = $geoTargetMetro;
  }
  /**
   * @return string
   */
  public function getGeoTargetMetro()
  {
    return $this->geoTargetMetro;
  }
  /**
   * Resource name of the geo target constant that represents a postal code.
   *
   * @param string $geoTargetPostalCode
   */
  public function setGeoTargetPostalCode($geoTargetPostalCode)
  {
    $this->geoTargetPostalCode = $geoTargetPostalCode;
  }
  /**
   * @return string
   */
  public function getGeoTargetPostalCode()
  {
    return $this->geoTargetPostalCode;
  }
  /**
   * Resource name of the geo target constant that represents a region.
   *
   * @param string $geoTargetRegion
   */
  public function setGeoTargetRegion($geoTargetRegion)
  {
    $this->geoTargetRegion = $geoTargetRegion;
  }
  /**
   * @return string
   */
  public function getGeoTargetRegion()
  {
    return $this->geoTargetRegion;
  }
  /**
   * Hour of day as a number between 0 and 23, inclusive.
   *
   * @param int $hour
   */
  public function setHour($hour)
  {
    $this->hour = $hour;
  }
  /**
   * @return int
   */
  public function getHour()
  {
    return $this->hour;
  }
  /**
   * Keyword criterion.
   *
   * @param GoogleAdsSearchads360V23CommonKeyword $keyword
   */
  public function setKeyword(GoogleAdsSearchads360V23CommonKeyword $keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeyword
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * Month as represented by the date of the first day of a month. Formatted as
   * yyyy-MM-dd.
   *
   * @param string $month
   */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /**
   * @return string
   */
  public function getMonth()
  {
    return $this->month;
  }
  /**
   * Bidding category (level 1) of the product.
   *
   * @param string $productBiddingCategoryLevel1
   */
  public function setProductBiddingCategoryLevel1($productBiddingCategoryLevel1)
  {
    $this->productBiddingCategoryLevel1 = $productBiddingCategoryLevel1;
  }
  /**
   * @return string
   */
  public function getProductBiddingCategoryLevel1()
  {
    return $this->productBiddingCategoryLevel1;
  }
  /**
   * Bidding category (level 2) of the product.
   *
   * @param string $productBiddingCategoryLevel2
   */
  public function setProductBiddingCategoryLevel2($productBiddingCategoryLevel2)
  {
    $this->productBiddingCategoryLevel2 = $productBiddingCategoryLevel2;
  }
  /**
   * @return string
   */
  public function getProductBiddingCategoryLevel2()
  {
    return $this->productBiddingCategoryLevel2;
  }
  /**
   * Bidding category (level 3) of the product.
   *
   * @param string $productBiddingCategoryLevel3
   */
  public function setProductBiddingCategoryLevel3($productBiddingCategoryLevel3)
  {
    $this->productBiddingCategoryLevel3 = $productBiddingCategoryLevel3;
  }
  /**
   * @return string
   */
  public function getProductBiddingCategoryLevel3()
  {
    return $this->productBiddingCategoryLevel3;
  }
  /**
   * Bidding category (level 4) of the product.
   *
   * @param string $productBiddingCategoryLevel4
   */
  public function setProductBiddingCategoryLevel4($productBiddingCategoryLevel4)
  {
    $this->productBiddingCategoryLevel4 = $productBiddingCategoryLevel4;
  }
  /**
   * @return string
   */
  public function getProductBiddingCategoryLevel4()
  {
    return $this->productBiddingCategoryLevel4;
  }
  /**
   * Bidding category (level 5) of the product.
   *
   * @param string $productBiddingCategoryLevel5
   */
  public function setProductBiddingCategoryLevel5($productBiddingCategoryLevel5)
  {
    $this->productBiddingCategoryLevel5 = $productBiddingCategoryLevel5;
  }
  /**
   * @return string
   */
  public function getProductBiddingCategoryLevel5()
  {
    return $this->productBiddingCategoryLevel5;
  }
  /**
   * Brand of the product.
   *
   * @param string $productBrand
   */
  public function setProductBrand($productBrand)
  {
    $this->productBrand = $productBrand;
  }
  /**
   * @return string
   */
  public function getProductBrand()
  {
    return $this->productBrand;
  }
  /**
   * Channel of the product.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ONLINE, LOCAL
   *
   * @param self::PRODUCT_CHANNEL_* $productChannel
   */
  public function setProductChannel($productChannel)
  {
    $this->productChannel = $productChannel;
  }
  /**
   * @return self::PRODUCT_CHANNEL_*
   */
  public function getProductChannel()
  {
    return $this->productChannel;
  }
  /**
   * Channel exclusivity of the product.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SINGLE_CHANNEL, MULTI_CHANNEL
   *
   * @param self::PRODUCT_CHANNEL_EXCLUSIVITY_* $productChannelExclusivity
   */
  public function setProductChannelExclusivity($productChannelExclusivity)
  {
    $this->productChannelExclusivity = $productChannelExclusivity;
  }
  /**
   * @return self::PRODUCT_CHANNEL_EXCLUSIVITY_*
   */
  public function getProductChannelExclusivity()
  {
    return $this->productChannelExclusivity;
  }
  /**
   * Condition of the product.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEW, REFURBISHED, USED
   *
   * @param self::PRODUCT_CONDITION_* $productCondition
   */
  public function setProductCondition($productCondition)
  {
    $this->productCondition = $productCondition;
  }
  /**
   * @return self::PRODUCT_CONDITION_*
   */
  public function getProductCondition()
  {
    return $this->productCondition;
  }
  /**
   * Resource name of the geo target constant for the country of sale of the
   * product.
   *
   * @param string $productCountry
   */
  public function setProductCountry($productCountry)
  {
    $this->productCountry = $productCountry;
  }
  /**
   * @return string
   */
  public function getProductCountry()
  {
    return $this->productCountry;
  }
  /**
   * Custom attribute 0 of the product.
   *
   * @param string $productCustomAttribute0
   */
  public function setProductCustomAttribute0($productCustomAttribute0)
  {
    $this->productCustomAttribute0 = $productCustomAttribute0;
  }
  /**
   * @return string
   */
  public function getProductCustomAttribute0()
  {
    return $this->productCustomAttribute0;
  }
  /**
   * Custom attribute 1 of the product.
   *
   * @param string $productCustomAttribute1
   */
  public function setProductCustomAttribute1($productCustomAttribute1)
  {
    $this->productCustomAttribute1 = $productCustomAttribute1;
  }
  /**
   * @return string
   */
  public function getProductCustomAttribute1()
  {
    return $this->productCustomAttribute1;
  }
  /**
   * Custom attribute 2 of the product.
   *
   * @param string $productCustomAttribute2
   */
  public function setProductCustomAttribute2($productCustomAttribute2)
  {
    $this->productCustomAttribute2 = $productCustomAttribute2;
  }
  /**
   * @return string
   */
  public function getProductCustomAttribute2()
  {
    return $this->productCustomAttribute2;
  }
  /**
   * Custom attribute 3 of the product.
   *
   * @param string $productCustomAttribute3
   */
  public function setProductCustomAttribute3($productCustomAttribute3)
  {
    $this->productCustomAttribute3 = $productCustomAttribute3;
  }
  /**
   * @return string
   */
  public function getProductCustomAttribute3()
  {
    return $this->productCustomAttribute3;
  }
  /**
   * Custom attribute 4 of the product.
   *
   * @param string $productCustomAttribute4
   */
  public function setProductCustomAttribute4($productCustomAttribute4)
  {
    $this->productCustomAttribute4 = $productCustomAttribute4;
  }
  /**
   * @return string
   */
  public function getProductCustomAttribute4()
  {
    return $this->productCustomAttribute4;
  }
  /**
   * Item ID of the product.
   *
   * @param string $productItemId
   */
  public function setProductItemId($productItemId)
  {
    $this->productItemId = $productItemId;
  }
  /**
   * @return string
   */
  public function getProductItemId()
  {
    return $this->productItemId;
  }
  /**
   * Resource name of the language constant for the language of the product.
   *
   * @param string $productLanguage
   */
  public function setProductLanguage($productLanguage)
  {
    $this->productLanguage = $productLanguage;
  }
  /**
   * @return string
   */
  public function getProductLanguage()
  {
    return $this->productLanguage;
  }
  /**
   * Bidding category (level 1) of the product sold.
   *
   * @param string $productSoldBiddingCategoryLevel1
   */
  public function setProductSoldBiddingCategoryLevel1($productSoldBiddingCategoryLevel1)
  {
    $this->productSoldBiddingCategoryLevel1 = $productSoldBiddingCategoryLevel1;
  }
  /**
   * @return string
   */
  public function getProductSoldBiddingCategoryLevel1()
  {
    return $this->productSoldBiddingCategoryLevel1;
  }
  /**
   * Bidding category (level 2) of the product sold.
   *
   * @param string $productSoldBiddingCategoryLevel2
   */
  public function setProductSoldBiddingCategoryLevel2($productSoldBiddingCategoryLevel2)
  {
    $this->productSoldBiddingCategoryLevel2 = $productSoldBiddingCategoryLevel2;
  }
  /**
   * @return string
   */
  public function getProductSoldBiddingCategoryLevel2()
  {
    return $this->productSoldBiddingCategoryLevel2;
  }
  /**
   * Bidding category (level 3) of the product sold.
   *
   * @param string $productSoldBiddingCategoryLevel3
   */
  public function setProductSoldBiddingCategoryLevel3($productSoldBiddingCategoryLevel3)
  {
    $this->productSoldBiddingCategoryLevel3 = $productSoldBiddingCategoryLevel3;
  }
  /**
   * @return string
   */
  public function getProductSoldBiddingCategoryLevel3()
  {
    return $this->productSoldBiddingCategoryLevel3;
  }
  /**
   * Bidding category (level 4) of the product sold.
   *
   * @param string $productSoldBiddingCategoryLevel4
   */
  public function setProductSoldBiddingCategoryLevel4($productSoldBiddingCategoryLevel4)
  {
    $this->productSoldBiddingCategoryLevel4 = $productSoldBiddingCategoryLevel4;
  }
  /**
   * @return string
   */
  public function getProductSoldBiddingCategoryLevel4()
  {
    return $this->productSoldBiddingCategoryLevel4;
  }
  /**
   * Bidding category (level 5) of the product sold.
   *
   * @param string $productSoldBiddingCategoryLevel5
   */
  public function setProductSoldBiddingCategoryLevel5($productSoldBiddingCategoryLevel5)
  {
    $this->productSoldBiddingCategoryLevel5 = $productSoldBiddingCategoryLevel5;
  }
  /**
   * @return string
   */
  public function getProductSoldBiddingCategoryLevel5()
  {
    return $this->productSoldBiddingCategoryLevel5;
  }
  /**
   * Brand of the product sold.
   *
   * @param string $productSoldBrand
   */
  public function setProductSoldBrand($productSoldBrand)
  {
    $this->productSoldBrand = $productSoldBrand;
  }
  /**
   * @return string
   */
  public function getProductSoldBrand()
  {
    return $this->productSoldBrand;
  }
  /**
   * Condition of the product sold.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEW, REFURBISHED, USED
   *
   * @param self::PRODUCT_SOLD_CONDITION_* $productSoldCondition
   */
  public function setProductSoldCondition($productSoldCondition)
  {
    $this->productSoldCondition = $productSoldCondition;
  }
  /**
   * @return self::PRODUCT_SOLD_CONDITION_*
   */
  public function getProductSoldCondition()
  {
    return $this->productSoldCondition;
  }
  /**
   * Custom attribute 0 of the product sold.
   *
   * @param string $productSoldCustomAttribute0
   */
  public function setProductSoldCustomAttribute0($productSoldCustomAttribute0)
  {
    $this->productSoldCustomAttribute0 = $productSoldCustomAttribute0;
  }
  /**
   * @return string
   */
  public function getProductSoldCustomAttribute0()
  {
    return $this->productSoldCustomAttribute0;
  }
  /**
   * Custom attribute 1 of the product sold.
   *
   * @param string $productSoldCustomAttribute1
   */
  public function setProductSoldCustomAttribute1($productSoldCustomAttribute1)
  {
    $this->productSoldCustomAttribute1 = $productSoldCustomAttribute1;
  }
  /**
   * @return string
   */
  public function getProductSoldCustomAttribute1()
  {
    return $this->productSoldCustomAttribute1;
  }
  /**
   * Custom attribute 2 of the product sold.
   *
   * @param string $productSoldCustomAttribute2
   */
  public function setProductSoldCustomAttribute2($productSoldCustomAttribute2)
  {
    $this->productSoldCustomAttribute2 = $productSoldCustomAttribute2;
  }
  /**
   * @return string
   */
  public function getProductSoldCustomAttribute2()
  {
    return $this->productSoldCustomAttribute2;
  }
  /**
   * Custom attribute 3 of the product sold.
   *
   * @param string $productSoldCustomAttribute3
   */
  public function setProductSoldCustomAttribute3($productSoldCustomAttribute3)
  {
    $this->productSoldCustomAttribute3 = $productSoldCustomAttribute3;
  }
  /**
   * @return string
   */
  public function getProductSoldCustomAttribute3()
  {
    return $this->productSoldCustomAttribute3;
  }
  /**
   * Custom attribute 4 of the product sold.
   *
   * @param string $productSoldCustomAttribute4
   */
  public function setProductSoldCustomAttribute4($productSoldCustomAttribute4)
  {
    $this->productSoldCustomAttribute4 = $productSoldCustomAttribute4;
  }
  /**
   * @return string
   */
  public function getProductSoldCustomAttribute4()
  {
    return $this->productSoldCustomAttribute4;
  }
  /**
   * Item ID of the product sold.
   *
   * @param string $productSoldItemId
   */
  public function setProductSoldItemId($productSoldItemId)
  {
    $this->productSoldItemId = $productSoldItemId;
  }
  /**
   * @return string
   */
  public function getProductSoldItemId()
  {
    return $this->productSoldItemId;
  }
  /**
   * Title of the product sold.
   *
   * @param string $productSoldTitle
   */
  public function setProductSoldTitle($productSoldTitle)
  {
    $this->productSoldTitle = $productSoldTitle;
  }
  /**
   * @return string
   */
  public function getProductSoldTitle()
  {
    return $this->productSoldTitle;
  }
  /**
   * Type (level 1) of the product sold.
   *
   * @param string $productSoldTypeL1
   */
  public function setProductSoldTypeL1($productSoldTypeL1)
  {
    $this->productSoldTypeL1 = $productSoldTypeL1;
  }
  /**
   * @return string
   */
  public function getProductSoldTypeL1()
  {
    return $this->productSoldTypeL1;
  }
  /**
   * Type (level 2) of the product sold.
   *
   * @param string $productSoldTypeL2
   */
  public function setProductSoldTypeL2($productSoldTypeL2)
  {
    $this->productSoldTypeL2 = $productSoldTypeL2;
  }
  /**
   * @return string
   */
  public function getProductSoldTypeL2()
  {
    return $this->productSoldTypeL2;
  }
  /**
   * Type (level 3) of the product sold.
   *
   * @param string $productSoldTypeL3
   */
  public function setProductSoldTypeL3($productSoldTypeL3)
  {
    $this->productSoldTypeL3 = $productSoldTypeL3;
  }
  /**
   * @return string
   */
  public function getProductSoldTypeL3()
  {
    return $this->productSoldTypeL3;
  }
  /**
   * Type (level 4) of the product sold.
   *
   * @param string $productSoldTypeL4
   */
  public function setProductSoldTypeL4($productSoldTypeL4)
  {
    $this->productSoldTypeL4 = $productSoldTypeL4;
  }
  /**
   * @return string
   */
  public function getProductSoldTypeL4()
  {
    return $this->productSoldTypeL4;
  }
  /**
   * Type (level 5) of the product sold.
   *
   * @param string $productSoldTypeL5
   */
  public function setProductSoldTypeL5($productSoldTypeL5)
  {
    $this->productSoldTypeL5 = $productSoldTypeL5;
  }
  /**
   * @return string
   */
  public function getProductSoldTypeL5()
  {
    return $this->productSoldTypeL5;
  }
  /**
   * Store ID of the product.
   *
   * @param string $productStoreId
   */
  public function setProductStoreId($productStoreId)
  {
    $this->productStoreId = $productStoreId;
  }
  /**
   * @return string
   */
  public function getProductStoreId()
  {
    return $this->productStoreId;
  }
  /**
   * Title of the product.
   *
   * @param string $productTitle
   */
  public function setProductTitle($productTitle)
  {
    $this->productTitle = $productTitle;
  }
  /**
   * @return string
   */
  public function getProductTitle()
  {
    return $this->productTitle;
  }
  /**
   * Type (level 1) of the product.
   *
   * @param string $productTypeL1
   */
  public function setProductTypeL1($productTypeL1)
  {
    $this->productTypeL1 = $productTypeL1;
  }
  /**
   * @return string
   */
  public function getProductTypeL1()
  {
    return $this->productTypeL1;
  }
  /**
   * Type (level 2) of the product.
   *
   * @param string $productTypeL2
   */
  public function setProductTypeL2($productTypeL2)
  {
    $this->productTypeL2 = $productTypeL2;
  }
  /**
   * @return string
   */
  public function getProductTypeL2()
  {
    return $this->productTypeL2;
  }
  /**
   * Type (level 3) of the product.
   *
   * @param string $productTypeL3
   */
  public function setProductTypeL3($productTypeL3)
  {
    $this->productTypeL3 = $productTypeL3;
  }
  /**
   * @return string
   */
  public function getProductTypeL3()
  {
    return $this->productTypeL3;
  }
  /**
   * Type (level 4) of the product.
   *
   * @param string $productTypeL4
   */
  public function setProductTypeL4($productTypeL4)
  {
    $this->productTypeL4 = $productTypeL4;
  }
  /**
   * @return string
   */
  public function getProductTypeL4()
  {
    return $this->productTypeL4;
  }
  /**
   * Type (level 5) of the product.
   *
   * @param string $productTypeL5
   */
  public function setProductTypeL5($productTypeL5)
  {
    $this->productTypeL5 = $productTypeL5;
  }
  /**
   * @return string
   */
  public function getProductTypeL5()
  {
    return $this->productTypeL5;
  }
  /**
   * Quarter as represented by the date of the first day of a quarter. Uses the
   * calendar year for quarters, for example, the second quarter of 2018 starts
   * on 2018-04-01. Formatted as yyyy-MM-dd.
   *
   * @param string $quarter
   */
  public function setQuarter($quarter)
  {
    $this->quarter = $quarter;
  }
  /**
   * @return string
   */
  public function getQuarter()
  {
    return $this->quarter;
  }
  /**
   * The raw event conversion dimensions.
   *
   * @param GoogleAdsSearchads360V23CommonValue[] $rawEventConversionDimensions
   */
  public function setRawEventConversionDimensions($rawEventConversionDimensions)
  {
    $this->rawEventConversionDimensions = $rawEventConversionDimensions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonValue[]
   */
  public function getRawEventConversionDimensions()
  {
    return $this->rawEventConversionDimensions;
  }
  /**
   * The display names of participants in an event listing, like performers,
   * speakers, or teams.
   *
   * @param string $verticalAdsEventParticipantDisplayNames
   */
  public function setVerticalAdsEventParticipantDisplayNames($verticalAdsEventParticipantDisplayNames)
  {
    $this->verticalAdsEventParticipantDisplayNames = $verticalAdsEventParticipantDisplayNames;
  }
  /**
   * @return string
   */
  public function getVerticalAdsEventParticipantDisplayNames()
  {
    return $this->verticalAdsEventParticipantDisplayNames;
  }
  /**
   * The class of the hotel. Generally in the range of 1 to 5 stars, but fully
   * customizable in the hotel feed.
   *
   * @param string $verticalAdsHotelClass
   */
  public function setVerticalAdsHotelClass($verticalAdsHotelClass)
  {
    $this->verticalAdsHotelClass = $verticalAdsHotelClass;
  }
  /**
   * @return string
   */
  public function getVerticalAdsHotelClass()
  {
    return $this->verticalAdsHotelClass;
  }
  /**
   * The listing associated with a listing impression, click or conversion.
   *
   * @param string $verticalAdsListing
   */
  public function setVerticalAdsListing($verticalAdsListing)
  {
    $this->verticalAdsListing = $verticalAdsListing;
  }
  /**
   * @return string
   */
  public function getVerticalAdsListing()
  {
    return $this->verticalAdsListing;
  }
  /**
   * The brand associated with a specific listing within a Vertical Ads context,
   * for example, the brand of a car rental, a vacation home, or an event.
   *
   * @param string $verticalAdsListingBrand
   */
  public function setVerticalAdsListingBrand($verticalAdsListingBrand)
  {
    $this->verticalAdsListingBrand = $verticalAdsListingBrand;
  }
  /**
   * @return string
   */
  public function getVerticalAdsListingBrand()
  {
    return $this->verticalAdsListingBrand;
  }
  /**
   * The city where the vertical ads listing is located.
   *
   * @param string $verticalAdsListingCity
   */
  public function setVerticalAdsListingCity($verticalAdsListingCity)
  {
    $this->verticalAdsListingCity = $verticalAdsListingCity;
  }
  /**
   * @return string
   */
  public function getVerticalAdsListingCity()
  {
    return $this->verticalAdsListingCity;
  }
  /**
   * The country where the vertical ads listing is located.
   *
   * @param string $verticalAdsListingCountry
   */
  public function setVerticalAdsListingCountry($verticalAdsListingCountry)
  {
    $this->verticalAdsListingCountry = $verticalAdsListingCountry;
  }
  /**
   * @return string
   */
  public function getVerticalAdsListingCountry()
  {
    return $this->verticalAdsListingCountry;
  }
  /**
   * The region where the vertical ads listing is located.
   *
   * @param string $verticalAdsListingRegion
   */
  public function setVerticalAdsListingRegion($verticalAdsListingRegion)
  {
    $this->verticalAdsListingRegion = $verticalAdsListingRegion;
  }
  /**
   * @return string
   */
  public function getVerticalAdsListingRegion()
  {
    return $this->verticalAdsListingRegion;
  }
  /**
   * A specific partner account within a Partner Center (for example, Hotel
   * Center) that supplies inventory feed data for Vertical Ads.
   *
   * @param string $verticalAdsPartnerAccount
   */
  public function setVerticalAdsPartnerAccount($verticalAdsPartnerAccount)
  {
    $this->verticalAdsPartnerAccount = $verticalAdsPartnerAccount;
  }
  /**
   * @return string
   */
  public function getVerticalAdsPartnerAccount()
  {
    return $this->verticalAdsPartnerAccount;
  }
  /**
   * Type of vertical ad, such as Vacation Rentals, Car Rentals, or Events, used
   * to categorize and segment data in the context of Vertical Ads.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HOTELS, VACATION_RENTALS,
   * RENTAL_CARS, EVENTS, THINGS_TO_DO, FLIGHTS
   *
   * @param self::VERTICAL_ADS_VERTICAL_* $verticalAdsVertical
   */
  public function setVerticalAdsVertical($verticalAdsVertical)
  {
    $this->verticalAdsVertical = $verticalAdsVertical;
  }
  /**
   * @return self::VERTICAL_ADS_VERTICAL_*
   */
  public function getVerticalAdsVertical()
  {
    return $this->verticalAdsVertical;
  }
  /**
   * Week as defined as Monday through Sunday, and represented by the date of
   * Monday. Formatted as yyyy-MM-dd.
   *
   * @param string $week
   */
  public function setWeek($week)
  {
    $this->week = $week;
  }
  /**
   * @return string
   */
  public function getWeek()
  {
    return $this->week;
  }
  /**
   * Year, formatted as yyyy.
   *
   * @param int $year
   */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /**
   * @return int
   */
  public function getYear()
  {
    return $this->year;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonSegments::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonSegments');
