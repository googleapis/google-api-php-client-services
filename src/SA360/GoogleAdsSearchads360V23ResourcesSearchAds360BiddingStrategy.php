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

class GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy extends \Google\Model
{
  /**
   * The resource name of the portfolio group bidding strategy that this sub-
   * strategy belongs to. To detach the sub-strategy, clear this field and
   * include it in `update_mask`.
   *
   * @var string
   */
  public $portfolioGroupBiddingStrategy;
  /**
   * Immutable. The resource name of the Search Ads 360 bidding strategy. Search
   * Ads 360 bidding strategy resource names have the form: `customers/{customer
   * _id}/searchAds360BiddingStrategies/{bidding_strategy_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * The resource name of the portfolio group bidding strategy that this sub-
   * strategy belongs to. To detach the sub-strategy, clear this field and
   * include it in `update_mask`.
   *
   * @param string $portfolioGroupBiddingStrategy
   */
  public function setPortfolioGroupBiddingStrategy($portfolioGroupBiddingStrategy)
  {
    $this->portfolioGroupBiddingStrategy = $portfolioGroupBiddingStrategy;
  }
  /**
   * @return string
   */
  public function getPortfolioGroupBiddingStrategy()
  {
    return $this->portfolioGroupBiddingStrategy;
  }
  /**
   * Immutable. The resource name of the Search Ads 360 bidding strategy. Search
   * Ads 360 bidding strategy resource names have the form: `customers/{customer
   * _id}/searchAds360BiddingStrategies/{bidding_strategy_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesSearchAds360BiddingStrategy');
