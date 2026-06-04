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

class GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BIDDING_STRATEGY_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BIDDING_STRATEGY_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Commission is an automatic bidding strategy in which the advertiser pays a
   * certain portion of the conversion value.
   */
  public const BIDDING_STRATEGY_TYPE_COMMISSION = 'COMMISSION';
  /**
   * Enhanced CPC is a bidding strategy that raises bids for clicks that seem
   * more likely to lead to a conversion and lowers them for clicks where they
   * seem less likely.
   */
  public const BIDDING_STRATEGY_TYPE_ENHANCED_CPC = 'ENHANCED_CPC';
  /**
   * Used for return value only. Indicates that a campaign does not have a
   * bidding strategy. This prevents the campaign from serving. For example, a
   * campaign may be attached to a manager bidding strategy and the serving
   * account is subsequently unlinked from the manager account. In this case the
   * campaign will automatically be detached from the now inaccessible manager
   * bidding strategy and transition to the INVALID bidding strategy type.
   */
  public const BIDDING_STRATEGY_TYPE_INVALID = 'INVALID';
  /**
   * Manual bidding strategy that allows advertiser to set the bid per
   * advertiser-specified action.
   */
  public const BIDDING_STRATEGY_TYPE_MANUAL_CPA = 'MANUAL_CPA';
  /**
   * Manual click based bidding where user pays per click.
   */
  public const BIDDING_STRATEGY_TYPE_MANUAL_CPC = 'MANUAL_CPC';
  /**
   * Manual impression based bidding where user pays per thousand impressions.
   */
  public const BIDDING_STRATEGY_TYPE_MANUAL_CPM = 'MANUAL_CPM';
  /**
   * A bidding strategy that pays a configurable amount per video view.
   */
  public const BIDDING_STRATEGY_TYPE_MANUAL_CPV = 'MANUAL_CPV';
  /**
   * A bidding strategy that automatically maximizes number of conversions given
   * a daily budget.
   */
  public const BIDDING_STRATEGY_TYPE_MAXIMIZE_CONVERSIONS = 'MAXIMIZE_CONVERSIONS';
  /**
   * An automated bidding strategy that automatically sets bids to maximize
   * revenue while spending your budget.
   */
  public const BIDDING_STRATEGY_TYPE_MAXIMIZE_CONVERSION_VALUE = 'MAXIMIZE_CONVERSION_VALUE';
  /**
   * Page-One Promoted bidding scheme, which sets max cpc bids to target
   * impressions on page one or page one promoted slots on google.com. This enum
   * value is deprecated.
   */
  public const BIDDING_STRATEGY_TYPE_PAGE_ONE_PROMOTED = 'PAGE_ONE_PROMOTED';
  /**
   * Percent Cpc is bidding strategy where bids are a fraction of the advertised
   * price for some good or service.
   */
  public const BIDDING_STRATEGY_TYPE_PERCENT_CPC = 'PERCENT_CPC';
  /**
   * Target CPA is an automated bid strategy that sets bids to help get as many
   * conversions as possible at the target cost-per-acquisition (CPA) you set.
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_CPA = 'TARGET_CPA';
  /**
   * Target CPC is an automated bid strategy that sets bids to help get as many
   * clicks as possible at the target cost-per-click (CPC) you set.
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_CPC = 'TARGET_CPC';
  /**
   * Target CPM is an automated bid strategy that sets bids to help get as many
   * impressions as possible at the target cost per one thousand impressions
   * (CPM) you set.
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_CPM = 'TARGET_CPM';
  /**
   * An automated bidding strategy that sets bids so that a certain percentage
   * of search ads are shown at the top of the first page (or other targeted
   * location).
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE = 'TARGET_IMPRESSION_SHARE';
  /**
   * Target Outrank Share is an automated bidding strategy that sets bids based
   * on the target fraction of auctions where the advertiser should outrank a
   * specific competitor. This enum value is deprecated.
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_OUTRANK_SHARE = 'TARGET_OUTRANK_SHARE';
  /**
   * Target ROAS is an automated bidding strategy that helps you maximize
   * revenue while averaging a specific target Return On Average Spend (ROAS).
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_ROAS = 'TARGET_ROAS';
  /**
   * Target Spend is an automated bid strategy that sets your bids to help get
   * as many clicks as possible within your budget.
   */
  public const BIDDING_STRATEGY_TYPE_TARGET_SPEND = 'TARGET_SPEND';
  /**
   * Current bidding strategy. This field is necessary for the following
   * recommendation_types: MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
   * MAXIMIZE_CONVERSION_VALUE_OPT_IN, SET_TARGET_CPA, SET_TARGET_ROAS,
   * TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * @var string
   */
  public $biddingStrategyType;
  /**
   * Current target_cpa in micros. This can be populated for campaigns with a
   * bidding strategy type of TARGET_CPA or MAXIMIZE_CONVERSIONS.
   *
   * @var string
   */
  public $targetCpaMicros;
  protected $targetImpressionShareInfoType = GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo::class;
  protected $targetImpressionShareInfoDataType = '';
  /**
   * Current target_roas. This can be populated for campaigns with a bidding
   * strategy type of TARGET_ROAS or MAXIMIZE_CONVERSION_VALUE.
   *
   * @var 
   */
  public $targetRoas;

  /**
   * Current bidding strategy. This field is necessary for the following
   * recommendation_types: MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
   * MAXIMIZE_CONVERSION_VALUE_OPT_IN, SET_TARGET_CPA, SET_TARGET_ROAS,
   * TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, COMMISSION, ENHANCED_CPC, INVALID,
   * MANUAL_CPA, MANUAL_CPC, MANUAL_CPM, MANUAL_CPV, MAXIMIZE_CONVERSIONS,
   * MAXIMIZE_CONVERSION_VALUE, PAGE_ONE_PROMOTED, PERCENT_CPC, TARGET_CPA,
   * TARGET_CPC, TARGET_CPM, TARGET_IMPRESSION_SHARE, TARGET_OUTRANK_SHARE,
   * TARGET_ROAS, TARGET_SPEND
   *
   * @param self::BIDDING_STRATEGY_TYPE_* $biddingStrategyType
   */
  public function setBiddingStrategyType($biddingStrategyType)
  {
    $this->biddingStrategyType = $biddingStrategyType;
  }
  /**
   * @return self::BIDDING_STRATEGY_TYPE_*
   */
  public function getBiddingStrategyType()
  {
    return $this->biddingStrategyType;
  }
  /**
   * Current target_cpa in micros. This can be populated for campaigns with a
   * bidding strategy type of TARGET_CPA or MAXIMIZE_CONVERSIONS.
   *
   * @param string $targetCpaMicros
   */
  public function setTargetCpaMicros($targetCpaMicros)
  {
    $this->targetCpaMicros = $targetCpaMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpaMicros()
  {
    return $this->targetCpaMicros;
  }
  /**
   * Optional. Current Target Impression Share information of the campaign. This
   * field is necessary for the following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo $targetImpressionShareInfo
   */
  public function setTargetImpressionShareInfo(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo $targetImpressionShareInfo)
  {
    $this->targetImpressionShareInfo = $targetImpressionShareInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo
   */
  public function getTargetImpressionShareInfo()
  {
    return $this->targetImpressionShareInfo;
  }
  public function setTargetRoas($targetRoas)
  {
    $this->targetRoas = $targetRoas;
  }
  public function getTargetRoas()
  {
    return $this->targetRoas;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo');
