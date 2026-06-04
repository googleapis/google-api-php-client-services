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

class GoogleAdsSearchads360V23ResourcesSearchAds360Campaign extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PRODUCT_ATTRIBUTION_FILTER_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRODUCT_ATTRIBUTION_FILTER_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Inherit the filter type from a parent or default configuration.
   */
  public const PRODUCT_ATTRIBUTION_FILTER_TYPE_INHERIT = 'INHERIT';
  /**
   * Manually configure/manage the filter. This requires additional
   * configuration at the campaign level.
   */
  public const PRODUCT_ATTRIBUTION_FILTER_TYPE_MANUAL = 'MANUAL';
  /**
   * Automatically determine and manage the Brand filter through the external
   * API.
   */
  public const PRODUCT_ATTRIBUTION_FILTER_TYPE_AUTO_BRAND = 'AUTO_BRAND';
  /**
   * The type of product attribution filtering to apply to this campaign.
   *
   * @var string
   */
  public $productAttributionFilterType;
  /**
   * Immutable. The resource name of the Search Ads 360 campaign. Search Ads 360
   * campaign resource names have the form:
   * `customers/{customer_id}/searchAds360Campaigns/{campaign_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * The type of product attribution filtering to apply to this campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INHERIT, MANUAL, AUTO_BRAND
   *
   * @param self::PRODUCT_ATTRIBUTION_FILTER_TYPE_* $productAttributionFilterType
   */
  public function setProductAttributionFilterType($productAttributionFilterType)
  {
    $this->productAttributionFilterType = $productAttributionFilterType;
  }
  /**
   * @return self::PRODUCT_ATTRIBUTION_FILTER_TYPE_*
   */
  public function getProductAttributionFilterType()
  {
    return $this->productAttributionFilterType;
  }
  /**
   * Immutable. The resource name of the Search Ads 360 campaign. Search Ads 360
   * campaign resource names have the form:
   * `customers/{customer_id}/searchAds360Campaigns/{campaign_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesSearchAds360Campaign::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesSearchAds360Campaign');
