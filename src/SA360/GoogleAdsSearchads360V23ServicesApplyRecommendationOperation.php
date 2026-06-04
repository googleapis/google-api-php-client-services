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

class GoogleAdsSearchads360V23ServicesApplyRecommendationOperation extends \Google\Model
{
  protected $callAssetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallAssetParameters::class;
  protected $callAssetDataType = '';
  protected $callExtensionType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallExtensionParameters::class;
  protected $callExtensionDataType = '';
  protected $calloutAssetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutAssetParameters::class;
  protected $calloutAssetDataType = '';
  protected $calloutExtensionType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutExtensionParameters::class;
  protected $calloutExtensionDataType = '';
  protected $campaignBudgetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCampaignBudgetParameters::class;
  protected $campaignBudgetDataType = '';
  protected $forecastingSetTargetCpaType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters::class;
  protected $forecastingSetTargetCpaDataType = '';
  protected $forecastingSetTargetRoasType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters::class;
  protected $forecastingSetTargetRoasDataType = '';
  protected $keywordType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters::class;
  protected $keywordDataType = '';
  protected $leadFormAssetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters::class;
  protected $leadFormAssetDataType = '';
  protected $lowerTargetRoasType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLowerTargetRoasParameters::class;
  protected $lowerTargetRoasDataType = '';
  protected $moveUnusedBudgetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationMoveUnusedBudgetParameters::class;
  protected $moveUnusedBudgetDataType = '';
  protected $raiseTargetCpaType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaParameters::class;
  protected $raiseTargetCpaDataType = '';
  protected $raiseTargetCpaBidTooLowType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaBidTooLowParameters::class;
  protected $raiseTargetCpaBidTooLowDataType = '';
  /**
   * The resource name of the recommendation to apply.
   *
   * @var string
   */
  public $resourceName;
  protected $responsiveSearchAdType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdParameters::class;
  protected $responsiveSearchAdDataType = '';
  protected $responsiveSearchAdAssetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdAssetParameters::class;
  protected $responsiveSearchAdAssetDataType = '';
  protected $responsiveSearchAdImproveAdStrengthType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdImproveAdStrengthParameters::class;
  protected $responsiveSearchAdImproveAdStrengthDataType = '';
  protected $setTargetCpaType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters::class;
  protected $setTargetCpaDataType = '';
  protected $setTargetRoasType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters::class;
  protected $setTargetRoasDataType = '';
  protected $sitelinkAssetType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkAssetParameters::class;
  protected $sitelinkAssetDataType = '';
  protected $sitelinkExtensionType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkExtensionParameters::class;
  protected $sitelinkExtensionDataType = '';
  protected $targetCpaOptInType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetCpaOptInParameters::class;
  protected $targetCpaOptInDataType = '';
  protected $targetRoasOptInType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters::class;
  protected $targetRoasOptInDataType = '';
  protected $textAdType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTextAdParameters::class;
  protected $textAdDataType = '';
  protected $useBroadMatchKeywordType = GoogleAdsSearchads360V23ServicesApplyRecommendationOperationUseBroadMatchKeywordParameters::class;
  protected $useBroadMatchKeywordDataType = '';

  /**
   * Parameters to use when applying call asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallAssetParameters $callAsset
   */
  public function setCallAsset(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallAssetParameters $callAsset)
  {
    $this->callAsset = $callAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallAssetParameters
   */
  public function getCallAsset()
  {
    return $this->callAsset;
  }
  /**
   * Parameters to use when applying call extension recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallExtensionParameters $callExtension
   */
  public function setCallExtension(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallExtensionParameters $callExtension)
  {
    $this->callExtension = $callExtension;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCallExtensionParameters
   */
  public function getCallExtension()
  {
    return $this->callExtension;
  }
  /**
   * Parameters to use when applying callout asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutAssetParameters $calloutAsset
   */
  public function setCalloutAsset(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutAssetParameters $calloutAsset)
  {
    $this->calloutAsset = $calloutAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutAssetParameters
   */
  public function getCalloutAsset()
  {
    return $this->calloutAsset;
  }
  /**
   * Parameters to use when applying callout extension recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutExtensionParameters $calloutExtension
   */
  public function setCalloutExtension(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutExtensionParameters $calloutExtension)
  {
    $this->calloutExtension = $calloutExtension;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCalloutExtensionParameters
   */
  public function getCalloutExtension()
  {
    return $this->calloutExtension;
  }
  /**
   * Optional parameters to use when applying a campaign budget recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCampaignBudgetParameters $campaignBudget
   */
  public function setCampaignBudget(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCampaignBudgetParameters $campaignBudget)
  {
    $this->campaignBudget = $campaignBudget;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationCampaignBudgetParameters
   */
  public function getCampaignBudget()
  {
    return $this->campaignBudget;
  }
  /**
   * Parameters to use when applying forecasting set target CPA recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters $forecastingSetTargetCpa
   */
  public function setForecastingSetTargetCpa(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters $forecastingSetTargetCpa)
  {
    $this->forecastingSetTargetCpa = $forecastingSetTargetCpa;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters
   */
  public function getForecastingSetTargetCpa()
  {
    return $this->forecastingSetTargetCpa;
  }
  /**
   * Parameters to use when applying a forecasting set target ROAS
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters $forecastingSetTargetRoas
   */
  public function setForecastingSetTargetRoas(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters $forecastingSetTargetRoas)
  {
    $this->forecastingSetTargetRoas = $forecastingSetTargetRoas;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters
   */
  public function getForecastingSetTargetRoas()
  {
    return $this->forecastingSetTargetRoas;
  }
  /**
   * Optional parameters to use when applying keyword recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters $keyword
   */
  public function setKeyword(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters $keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationKeywordParameters
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * Parameters to use when applying lead form asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters $leadFormAsset
   */
  public function setLeadFormAsset(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters $leadFormAsset)
  {
    $this->leadFormAsset = $leadFormAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLeadFormAssetParameters
   */
  public function getLeadFormAsset()
  {
    return $this->leadFormAsset;
  }
  /**
   * Parameters to use when applying lower Target ROAS recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLowerTargetRoasParameters $lowerTargetRoas
   */
  public function setLowerTargetRoas(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLowerTargetRoasParameters $lowerTargetRoas)
  {
    $this->lowerTargetRoas = $lowerTargetRoas;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationLowerTargetRoasParameters
   */
  public function getLowerTargetRoas()
  {
    return $this->lowerTargetRoas;
  }
  /**
   * Parameters to use when applying move unused budget recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationMoveUnusedBudgetParameters $moveUnusedBudget
   */
  public function setMoveUnusedBudget(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationMoveUnusedBudgetParameters $moveUnusedBudget)
  {
    $this->moveUnusedBudget = $moveUnusedBudget;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationMoveUnusedBudgetParameters
   */
  public function getMoveUnusedBudget()
  {
    return $this->moveUnusedBudget;
  }
  /**
   * Parameters to use when applying raise Target CPA recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaParameters $raiseTargetCpa
   */
  public function setRaiseTargetCpa(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaParameters $raiseTargetCpa)
  {
    $this->raiseTargetCpa = $raiseTargetCpa;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaParameters
   */
  public function getRaiseTargetCpa()
  {
    return $this->raiseTargetCpa;
  }
  /**
   * Parameters to use when applying a raise target CPA bid too low
   * recommendation. The apply is asynchronous and can take minutes depending on
   * the number of ad groups there is in the related campaign.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaBidTooLowParameters $raiseTargetCpaBidTooLow
   */
  public function setRaiseTargetCpaBidTooLow(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaBidTooLowParameters $raiseTargetCpaBidTooLow)
  {
    $this->raiseTargetCpaBidTooLow = $raiseTargetCpaBidTooLow;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationRaiseTargetCpaBidTooLowParameters
   */
  public function getRaiseTargetCpaBidTooLow()
  {
    return $this->raiseTargetCpaBidTooLow;
  }
  /**
   * The resource name of the recommendation to apply.
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
   * Parameters to use when applying a responsive search ad recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdParameters $responsiveSearchAd
   */
  public function setResponsiveSearchAd(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdParameters $responsiveSearchAd)
  {
    $this->responsiveSearchAd = $responsiveSearchAd;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdParameters
   */
  public function getResponsiveSearchAd()
  {
    return $this->responsiveSearchAd;
  }
  /**
   * Parameters to use when applying a responsive search ad asset
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdAssetParameters $responsiveSearchAdAsset
   */
  public function setResponsiveSearchAdAsset(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdAssetParameters $responsiveSearchAdAsset)
  {
    $this->responsiveSearchAdAsset = $responsiveSearchAdAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdAssetParameters
   */
  public function getResponsiveSearchAdAsset()
  {
    return $this->responsiveSearchAdAsset;
  }
  /**
   * Parameters to use when applying a responsive search ad improve ad strength
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdImproveAdStrengthParameters $responsiveSearchAdImproveAdStrength
   */
  public function setResponsiveSearchAdImproveAdStrength(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdImproveAdStrengthParameters $responsiveSearchAdImproveAdStrength)
  {
    $this->responsiveSearchAdImproveAdStrength = $responsiveSearchAdImproveAdStrength;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationResponsiveSearchAdImproveAdStrengthParameters
   */
  public function getResponsiveSearchAdImproveAdStrength()
  {
    return $this->responsiveSearchAdImproveAdStrength;
  }
  /**
   * Parameters to use when applying set target CPA recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters $setTargetCpa
   */
  public function setSetTargetCpa(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters $setTargetCpa)
  {
    $this->setTargetCpa = $setTargetCpa;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetCpaParameters
   */
  public function getSetTargetCpa()
  {
    return $this->setTargetCpa;
  }
  /**
   * Parameters to use when applying set target ROAS recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters $setTargetRoas
   */
  public function setSetTargetRoas(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters $setTargetRoas)
  {
    $this->setTargetRoas = $setTargetRoas;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters
   */
  public function getSetTargetRoas()
  {
    return $this->setTargetRoas;
  }
  /**
   * Parameters to use when applying sitelink asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkAssetParameters $sitelinkAsset
   */
  public function setSitelinkAsset(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkAssetParameters $sitelinkAsset)
  {
    $this->sitelinkAsset = $sitelinkAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkAssetParameters
   */
  public function getSitelinkAsset()
  {
    return $this->sitelinkAsset;
  }
  /**
   * Parameters to use when applying sitelink recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkExtensionParameters $sitelinkExtension
   */
  public function setSitelinkExtension(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkExtensionParameters $sitelinkExtension)
  {
    $this->sitelinkExtension = $sitelinkExtension;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationSitelinkExtensionParameters
   */
  public function getSitelinkExtension()
  {
    return $this->sitelinkExtension;
  }
  /**
   * Optional parameters to use when applying target CPA opt-in recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetCpaOptInParameters $targetCpaOptIn
   */
  public function setTargetCpaOptIn(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetCpaOptInParameters $targetCpaOptIn)
  {
    $this->targetCpaOptIn = $targetCpaOptIn;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetCpaOptInParameters
   */
  public function getTargetCpaOptIn()
  {
    return $this->targetCpaOptIn;
  }
  /**
   * Optional parameters to use when applying target ROAS opt-in recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters $targetRoasOptIn
   */
  public function setTargetRoasOptIn(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters $targetRoasOptIn)
  {
    $this->targetRoasOptIn = $targetRoasOptIn;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters
   */
  public function getTargetRoasOptIn()
  {
    return $this->targetRoasOptIn;
  }
  /**
   * Optional parameters to use when applying a text ad recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTextAdParameters $textAd
   */
  public function setTextAd(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTextAdParameters $textAd)
  {
    $this->textAd = $textAd;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTextAdParameters
   */
  public function getTextAd()
  {
    return $this->textAd;
  }
  /**
   * Parameters to use when applying a use broad match keyword recommendation.
   *
   * @param GoogleAdsSearchads360V23ServicesApplyRecommendationOperationUseBroadMatchKeywordParameters $useBroadMatchKeyword
   */
  public function setUseBroadMatchKeyword(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationUseBroadMatchKeywordParameters $useBroadMatchKeyword)
  {
    $this->useBroadMatchKeyword = $useBroadMatchKeyword;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesApplyRecommendationOperationUseBroadMatchKeywordParameters
   */
  public function getUseBroadMatchKeyword()
  {
    return $this->useBroadMatchKeyword;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationOperation');
