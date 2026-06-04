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

class GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation extends \Google\Collection
{
  protected $collection_key = 'keyword';
  /**
   * Output only. Total number of keywords in the campaign.
   *
   * @var string
   */
  public $campaignKeywordsCount;
  /**
   * Output only. Whether the associated campaign uses a shared budget.
   *
   * @var bool
   */
  public $campaignUsesSharedBudget;
  protected $keywordType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordDataType = 'array';
  /**
   * Output only. The budget recommended to avoid becoming budget constrained
   * after applying the recommendation.
   *
   * @var string
   */
  public $requiredCampaignBudgetAmountMicros;
  /**
   * Output only. Total number of keywords to be expanded to Broad Match in the
   * campaign.
   *
   * @var string
   */
  public $suggestedKeywordsCount;

  /**
   * Output only. Total number of keywords in the campaign.
   *
   * @param string $campaignKeywordsCount
   */
  public function setCampaignKeywordsCount($campaignKeywordsCount)
  {
    $this->campaignKeywordsCount = $campaignKeywordsCount;
  }
  /**
   * @return string
   */
  public function getCampaignKeywordsCount()
  {
    return $this->campaignKeywordsCount;
  }
  /**
   * Output only. Whether the associated campaign uses a shared budget.
   *
   * @param bool $campaignUsesSharedBudget
   */
  public function setCampaignUsesSharedBudget($campaignUsesSharedBudget)
  {
    $this->campaignUsesSharedBudget = $campaignUsesSharedBudget;
  }
  /**
   * @return bool
   */
  public function getCampaignUsesSharedBudget()
  {
    return $this->campaignUsesSharedBudget;
  }
  /**
   * Output only. Sample of keywords to be expanded to Broad Match.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo[] $keyword
   */
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo[]
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * Output only. The budget recommended to avoid becoming budget constrained
   * after applying the recommendation.
   *
   * @param string $requiredCampaignBudgetAmountMicros
   */
  public function setRequiredCampaignBudgetAmountMicros($requiredCampaignBudgetAmountMicros)
  {
    $this->requiredCampaignBudgetAmountMicros = $requiredCampaignBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getRequiredCampaignBudgetAmountMicros()
  {
    return $this->requiredCampaignBudgetAmountMicros;
  }
  /**
   * Output only. Total number of keywords to be expanded to Broad Match in the
   * campaign.
   *
   * @param string $suggestedKeywordsCount
   */
  public function setSuggestedKeywordsCount($suggestedKeywordsCount)
  {
    $this->suggestedKeywordsCount = $suggestedKeywordsCount;
  }
  /**
   * @return string
   */
  public function getSuggestedKeywordsCount()
  {
    return $this->suggestedKeywordsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation');
