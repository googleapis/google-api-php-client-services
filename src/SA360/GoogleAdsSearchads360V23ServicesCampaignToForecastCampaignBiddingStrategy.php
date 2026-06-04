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

class GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy extends \Google\Model
{
  protected $manualCpcBiddingStrategyType = GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy::class;
  protected $manualCpcBiddingStrategyDataType = '';
  protected $maximizeClicksBiddingStrategyType = GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy::class;
  protected $maximizeClicksBiddingStrategyDataType = '';
  protected $maximizeConversionsBiddingStrategyType = GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy::class;
  protected $maximizeConversionsBiddingStrategyDataType = '';

  /**
   * Use manual CPC bidding strategy for forecasting.
   *
   * @param GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy $manualCpcBiddingStrategy
   */
  public function setManualCpcBiddingStrategy(GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy $manualCpcBiddingStrategy)
  {
    $this->manualCpcBiddingStrategy = $manualCpcBiddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy
   */
  public function getManualCpcBiddingStrategy()
  {
    return $this->manualCpcBiddingStrategy;
  }
  /**
   * Use maximize clicks bidding strategy for forecasting.
   *
   * @param GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy $maximizeClicksBiddingStrategy
   */
  public function setMaximizeClicksBiddingStrategy(GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy $maximizeClicksBiddingStrategy)
  {
    $this->maximizeClicksBiddingStrategy = $maximizeClicksBiddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy
   */
  public function getMaximizeClicksBiddingStrategy()
  {
    return $this->maximizeClicksBiddingStrategy;
  }
  /**
   * Use maximize conversions bidding strategy for forecasting.
   *
   * @param GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy $maximizeConversionsBiddingStrategy
   */
  public function setMaximizeConversionsBiddingStrategy(GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy $maximizeConversionsBiddingStrategy)
  {
    $this->maximizeConversionsBiddingStrategy = $maximizeConversionsBiddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy
   */
  public function getMaximizeConversionsBiddingStrategy()
  {
    return $this->maximizeConversionsBiddingStrategy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy');
