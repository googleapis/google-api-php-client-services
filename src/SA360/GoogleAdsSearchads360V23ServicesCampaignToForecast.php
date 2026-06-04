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

class GoogleAdsSearchads360V23ServicesCampaignToForecast extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const KEYWORD_PLAN_NETWORK_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const KEYWORD_PLAN_NETWORK_UNKNOWN = 'UNKNOWN';
  /**
   * Google Search.
   */
  public const KEYWORD_PLAN_NETWORK_GOOGLE_SEARCH = 'GOOGLE_SEARCH';
  /**
   * Google Search + Search partners.
   */
  public const KEYWORD_PLAN_NETWORK_GOOGLE_SEARCH_AND_PARTNERS = 'GOOGLE_SEARCH_AND_PARTNERS';
  protected $collection_key = 'negativeKeywords';
  protected $adGroupsType = GoogleAdsSearchads360V23ServicesForecastAdGroup::class;
  protected $adGroupsDataType = 'array';
  protected $biddingStrategyType = GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy::class;
  protected $biddingStrategyDataType = '';
  /**
   * The expected conversion rate (number of conversions divided by number of
   * total clicks) as defined by the user. This value is expressed as a decimal
   * value, so an expected conversion rate of 2% should be entered as 0.02. If
   * left empty, an estimated conversion rate will be used.
   *
   * @var 
   */
  public $conversionRate;
  protected $geoModifiersType = GoogleAdsSearchads360V23ServicesCriterionBidModifier::class;
  protected $geoModifiersDataType = 'array';
  /**
   * Required. The network used for targeting.
   *
   * @var string
   */
  public $keywordPlanNetwork;
  /**
   * The list of resource names of languages to be targeted. The resource name
   * is of the format "languageConstants/{criterion_id}". See
   * https://developers.google.com/google-ads/api/data/codes-formats#languages
   * for the list of language criterion codes.
   *
   * @var string[]
   */
  public $languageConstants;
  protected $negativeKeywordsType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $negativeKeywordsDataType = 'array';

  /**
   * The ad groups in the new campaign to forecast.
   *
   * @param GoogleAdsSearchads360V23ServicesForecastAdGroup[] $adGroups
   */
  public function setAdGroups($adGroups)
  {
    $this->adGroups = $adGroups;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesForecastAdGroup[]
   */
  public function getAdGroups()
  {
    return $this->adGroups;
  }
  /**
   * Required. The bidding strategy for the campaign.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy $biddingStrategy
   */
  public function setBiddingStrategy(GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy $biddingStrategy)
  {
    $this->biddingStrategy = $biddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignToForecastCampaignBiddingStrategy
   */
  public function getBiddingStrategy()
  {
    return $this->biddingStrategy;
  }
  public function setConversionRate($conversionRate)
  {
    $this->conversionRate = $conversionRate;
  }
  public function getConversionRate()
  {
    return $this->conversionRate;
  }
  /**
   * Locations to be targeted. Locations must be unique.
   *
   * @param GoogleAdsSearchads360V23ServicesCriterionBidModifier[] $geoModifiers
   */
  public function setGeoModifiers($geoModifiers)
  {
    $this->geoModifiers = $geoModifiers;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCriterionBidModifier[]
   */
  public function getGeoModifiers()
  {
    return $this->geoModifiers;
  }
  /**
   * Required. The network used for targeting.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GOOGLE_SEARCH,
   * GOOGLE_SEARCH_AND_PARTNERS
   *
   * @param self::KEYWORD_PLAN_NETWORK_* $keywordPlanNetwork
   */
  public function setKeywordPlanNetwork($keywordPlanNetwork)
  {
    $this->keywordPlanNetwork = $keywordPlanNetwork;
  }
  /**
   * @return self::KEYWORD_PLAN_NETWORK_*
   */
  public function getKeywordPlanNetwork()
  {
    return $this->keywordPlanNetwork;
  }
  /**
   * The list of resource names of languages to be targeted. The resource name
   * is of the format "languageConstants/{criterion_id}". See
   * https://developers.google.com/google-ads/api/data/codes-formats#languages
   * for the list of language criterion codes.
   *
   * @param string[] $languageConstants
   */
  public function setLanguageConstants($languageConstants)
  {
    $this->languageConstants = $languageConstants;
  }
  /**
   * @return string[]
   */
  public function getLanguageConstants()
  {
    return $this->languageConstants;
  }
  /**
   * The list of negative keywords to be used in the campaign when doing the
   * forecast.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo[] $negativeKeywords
   */
  public function setNegativeKeywords($negativeKeywords)
  {
    $this->negativeKeywords = $negativeKeywords;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo[]
   */
  public function getNegativeKeywords()
  {
    return $this->negativeKeywords;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCampaignToForecast::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCampaignToForecast');
