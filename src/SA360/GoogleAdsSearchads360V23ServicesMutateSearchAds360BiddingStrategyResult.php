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

class GoogleAdsSearchads360V23ServicesMutateSearchAds360BiddingStrategyResult extends \Google\Model
{
  /**
   * Returned for successful operations.
   *
   * @var string
   */
  public $resourceName;
  protected $searchAds360BiddingStrategyType = GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy::class;
  protected $searchAds360BiddingStrategyDataType = '';

  /**
   * Returned for successful operations.
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
   * The updated Search Ads 360 bidding strategy with mutable fields when
   * response_content_type is MUTABLE_RESOURCE.
   *
   * @param GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy $searchAds360BiddingStrategy
   */
  public function setSearchAds360BiddingStrategy(GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy $searchAds360BiddingStrategy)
  {
    $this->searchAds360BiddingStrategy = $searchAds360BiddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy
   */
  public function getSearchAds360BiddingStrategy()
  {
    return $this->searchAds360BiddingStrategy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateSearchAds360BiddingStrategyResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateSearchAds360BiddingStrategyResult');
