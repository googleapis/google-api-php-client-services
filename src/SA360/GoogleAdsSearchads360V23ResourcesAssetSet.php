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

class GoogleAdsSearchads360V23ResourcesAssetSet extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The asset set is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The asset set is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Page asset set.
   */
  public const TYPE_PAGE_FEED = 'PAGE_FEED';
  /**
   * Dynamic education asset set.
   */
  public const TYPE_DYNAMIC_EDUCATION = 'DYNAMIC_EDUCATION';
  /**
   * Google Merchant Center asset set.
   */
  public const TYPE_MERCHANT_CENTER_FEED = 'MERCHANT_CENTER_FEED';
  /**
   * Dynamic real estate asset set.
   */
  public const TYPE_DYNAMIC_REAL_ESTATE = 'DYNAMIC_REAL_ESTATE';
  /**
   * Dynamic custom asset set.
   */
  public const TYPE_DYNAMIC_CUSTOM = 'DYNAMIC_CUSTOM';
  /**
   * Dynamic hotels and rentals asset set.
   */
  public const TYPE_DYNAMIC_HOTELS_AND_RENTALS = 'DYNAMIC_HOTELS_AND_RENTALS';
  /**
   * Dynamic flights asset set.
   */
  public const TYPE_DYNAMIC_FLIGHTS = 'DYNAMIC_FLIGHTS';
  /**
   * Dynamic travel asset set.
   */
  public const TYPE_DYNAMIC_TRAVEL = 'DYNAMIC_TRAVEL';
  /**
   * Dynamic local asset set.
   */
  public const TYPE_DYNAMIC_LOCAL = 'DYNAMIC_LOCAL';
  /**
   * Dynamic jobs asset set.
   */
  public const TYPE_DYNAMIC_JOBS = 'DYNAMIC_JOBS';
  /**
   * Location sync level asset set.
   */
  public const TYPE_LOCATION_SYNC = 'LOCATION_SYNC';
  /**
   * Business Profile location group asset set.
   */
  public const TYPE_BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP = 'BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP';
  /**
   * Chain location group asset set which can be used for both owned locations
   * and affiliate locations.
   */
  public const TYPE_CHAIN_DYNAMIC_LOCATION_GROUP = 'CHAIN_DYNAMIC_LOCATION_GROUP';
  /**
   * Static location group asset set which can be used for both owned locations
   * and affiliate locations.
   */
  public const TYPE_STATIC_LOCATION_GROUP = 'STATIC_LOCATION_GROUP';
  /**
   * Hotel Property asset set which is used to link a hotel property feed to
   * Performance Max for travel goals campaigns.
   */
  public const TYPE_HOTEL_PROPERTY = 'HOTEL_PROPERTY';
  /**
   * Travel Feed asset set type. Can represent either a Hotel feed or a Things
   * to Do (activities) feed.
   */
  public const TYPE_TRAVEL_FEED = 'TRAVEL_FEED';
  protected $businessProfileLocationGroupType = GoogleAdsSearchads360V23CommonBusinessProfileLocationGroup::class;
  protected $businessProfileLocationGroupDataType = '';
  protected $chainLocationGroupType = GoogleAdsSearchads360V23CommonChainLocationGroup::class;
  protected $chainLocationGroupDataType = '';
  protected $hotelPropertyDataType = GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData::class;
  protected $hotelPropertyDataDataType = '';
  /**
   * Output only. The ID of the asset set.
   *
   * @var string
   */
  public $id;
  /**
   * Immutable. Parent asset set ID for the asset set where the elements of this
   * asset set come from. For example: the sync level location AssetSet id where
   * the elements in LocationGroup AssetSet come from. This field is required
   * and only applicable for Location Group typed AssetSet.
   *
   * @var string
   */
  public $locationGroupParentAssetSetId;
  protected $locationSetType = GoogleAdsSearchads360V23CommonLocationSet::class;
  protected $locationSetDataType = '';
  protected $merchantCenterFeedType = GoogleAdsSearchads360V23ResourcesAssetSetMerchantCenterFeed::class;
  protected $merchantCenterFeedDataType = '';
  /**
   * Required. Name of the asset set. Required. It must have a minimum length of
   * 1 and maximum length of 128.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the asset set. Asset set resource names
   * have the form: `customers/{customer_id}/assetSets/{asset_set_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the asset set. Read-only.
   *
   * @var string
   */
  public $status;
  /**
   * Required. Immutable. The type of the asset set. Required.
   *
   * @var string
   */
  public $type;

  /**
   * Business Profile location group asset set data.
   *
   * @param GoogleAdsSearchads360V23CommonBusinessProfileLocationGroup $businessProfileLocationGroup
   */
  public function setBusinessProfileLocationGroup(GoogleAdsSearchads360V23CommonBusinessProfileLocationGroup $businessProfileLocationGroup)
  {
    $this->businessProfileLocationGroup = $businessProfileLocationGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBusinessProfileLocationGroup
   */
  public function getBusinessProfileLocationGroup()
  {
    return $this->businessProfileLocationGroup;
  }
  /**
   * Represents information about a Chain dynamic location group. Only
   * applicable if the sync level AssetSet's type is LOCATION_SYNC and sync
   * source is chain.
   *
   * @param GoogleAdsSearchads360V23CommonChainLocationGroup $chainLocationGroup
   */
  public function setChainLocationGroup(GoogleAdsSearchads360V23CommonChainLocationGroup $chainLocationGroup)
  {
    $this->chainLocationGroup = $chainLocationGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonChainLocationGroup
   */
  public function getChainLocationGroup()
  {
    return $this->chainLocationGroup;
  }
  /**
   * Output only. For Performance Max for travel goals campaigns with a Hotel
   * Center account link. Read-only.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData $hotelPropertyData
   */
  public function setHotelPropertyData(GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData $hotelPropertyData)
  {
    $this->hotelPropertyData = $hotelPropertyData;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData
   */
  public function getHotelPropertyData()
  {
    return $this->hotelPropertyData;
  }
  /**
   * Output only. The ID of the asset set.
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
   * Immutable. Parent asset set ID for the asset set where the elements of this
   * asset set come from. For example: the sync level location AssetSet id where
   * the elements in LocationGroup AssetSet come from. This field is required
   * and only applicable for Location Group typed AssetSet.
   *
   * @param string $locationGroupParentAssetSetId
   */
  public function setLocationGroupParentAssetSetId($locationGroupParentAssetSetId)
  {
    $this->locationGroupParentAssetSetId = $locationGroupParentAssetSetId;
  }
  /**
   * @return string
   */
  public function getLocationGroupParentAssetSetId()
  {
    return $this->locationGroupParentAssetSetId;
  }
  /**
   * Location asset set data. This will be used for sync level location set.
   * This can only be set if AssetSet's type is LOCATION_SYNC.
   *
   * @param GoogleAdsSearchads360V23CommonLocationSet $locationSet
   */
  public function setLocationSet(GoogleAdsSearchads360V23CommonLocationSet $locationSet)
  {
    $this->locationSet = $locationSet;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationSet
   */
  public function getLocationSet()
  {
    return $this->locationSet;
  }
  /**
   * Merchant ID and Feed Label from Google Merchant Center.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSetMerchantCenterFeed $merchantCenterFeed
   */
  public function setMerchantCenterFeed(GoogleAdsSearchads360V23ResourcesAssetSetMerchantCenterFeed $merchantCenterFeed)
  {
    $this->merchantCenterFeed = $merchantCenterFeed;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSetMerchantCenterFeed
   */
  public function getMerchantCenterFeed()
  {
    return $this->merchantCenterFeed;
  }
  /**
   * Required. Name of the asset set. Required. It must have a minimum length of
   * 1 and maximum length of 128.
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
   * Immutable. The resource name of the asset set. Asset set resource names
   * have the form: `customers/{customer_id}/assetSets/{asset_set_id}`
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
   * Output only. The status of the asset set. Read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Required. Immutable. The type of the asset set. Required.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PAGE_FEED, DYNAMIC_EDUCATION,
   * MERCHANT_CENTER_FEED, DYNAMIC_REAL_ESTATE, DYNAMIC_CUSTOM,
   * DYNAMIC_HOTELS_AND_RENTALS, DYNAMIC_FLIGHTS, DYNAMIC_TRAVEL, DYNAMIC_LOCAL,
   * DYNAMIC_JOBS, LOCATION_SYNC, BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP,
   * CHAIN_DYNAMIC_LOCATION_GROUP, STATIC_LOCATION_GROUP, HOTEL_PROPERTY,
   * TRAVEL_FEED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAssetSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAssetSet');
