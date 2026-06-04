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

class GoogleAdsSearchads360V23ResourcesAssetSetTypeView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ASSET_SET_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ASSET_SET_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Page asset set.
   */
  public const ASSET_SET_TYPE_PAGE_FEED = 'PAGE_FEED';
  /**
   * Dynamic education asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_EDUCATION = 'DYNAMIC_EDUCATION';
  /**
   * Google Merchant Center asset set.
   */
  public const ASSET_SET_TYPE_MERCHANT_CENTER_FEED = 'MERCHANT_CENTER_FEED';
  /**
   * Dynamic real estate asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_REAL_ESTATE = 'DYNAMIC_REAL_ESTATE';
  /**
   * Dynamic custom asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_CUSTOM = 'DYNAMIC_CUSTOM';
  /**
   * Dynamic hotels and rentals asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_HOTELS_AND_RENTALS = 'DYNAMIC_HOTELS_AND_RENTALS';
  /**
   * Dynamic flights asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_FLIGHTS = 'DYNAMIC_FLIGHTS';
  /**
   * Dynamic travel asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_TRAVEL = 'DYNAMIC_TRAVEL';
  /**
   * Dynamic local asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_LOCAL = 'DYNAMIC_LOCAL';
  /**
   * Dynamic jobs asset set.
   */
  public const ASSET_SET_TYPE_DYNAMIC_JOBS = 'DYNAMIC_JOBS';
  /**
   * Location sync level asset set.
   */
  public const ASSET_SET_TYPE_LOCATION_SYNC = 'LOCATION_SYNC';
  /**
   * Business Profile location group asset set.
   */
  public const ASSET_SET_TYPE_BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP = 'BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP';
  /**
   * Chain location group asset set which can be used for both owned locations
   * and affiliate locations.
   */
  public const ASSET_SET_TYPE_CHAIN_DYNAMIC_LOCATION_GROUP = 'CHAIN_DYNAMIC_LOCATION_GROUP';
  /**
   * Static location group asset set which can be used for both owned locations
   * and affiliate locations.
   */
  public const ASSET_SET_TYPE_STATIC_LOCATION_GROUP = 'STATIC_LOCATION_GROUP';
  /**
   * Hotel Property asset set which is used to link a hotel property feed to
   * Performance Max for travel goals campaigns.
   */
  public const ASSET_SET_TYPE_HOTEL_PROPERTY = 'HOTEL_PROPERTY';
  /**
   * Travel Feed asset set type. Can represent either a Hotel feed or a Things
   * to Do (activities) feed.
   */
  public const ASSET_SET_TYPE_TRAVEL_FEED = 'TRAVEL_FEED';
  /**
   * Output only. The asset set type of the asset set type view.
   *
   * @var string
   */
  public $assetSetType;
  /**
   * Output only. The resource name of the asset set type view. Asset set type
   * view resource names have the form:
   * `customers/{customer_id}/assetSetTypeViews/{asset_set_type}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. The asset set type of the asset set type view.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PAGE_FEED, DYNAMIC_EDUCATION,
   * MERCHANT_CENTER_FEED, DYNAMIC_REAL_ESTATE, DYNAMIC_CUSTOM,
   * DYNAMIC_HOTELS_AND_RENTALS, DYNAMIC_FLIGHTS, DYNAMIC_TRAVEL, DYNAMIC_LOCAL,
   * DYNAMIC_JOBS, LOCATION_SYNC, BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP,
   * CHAIN_DYNAMIC_LOCATION_GROUP, STATIC_LOCATION_GROUP, HOTEL_PROPERTY,
   * TRAVEL_FEED
   *
   * @param self::ASSET_SET_TYPE_* $assetSetType
   */
  public function setAssetSetType($assetSetType)
  {
    $this->assetSetType = $assetSetType;
  }
  /**
   * @return self::ASSET_SET_TYPE_*
   */
  public function getAssetSetType()
  {
    return $this->assetSetType;
  }
  /**
   * Output only. The resource name of the asset set type view. Asset set type
   * view resource names have the form:
   * `customers/{customer_id}/assetSetTypeViews/{asset_set_type}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAssetSetTypeView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAssetSetTypeView');
