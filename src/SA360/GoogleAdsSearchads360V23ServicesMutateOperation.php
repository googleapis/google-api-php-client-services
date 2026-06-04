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

class GoogleAdsSearchads360V23ServicesMutateOperation extends \Google\Model
{
  protected $adGroupAdLabelOperationType = GoogleAdsSearchads360V23ServicesAdGroupAdLabelOperation::class;
  protected $adGroupAdLabelOperationDataType = '';
  protected $adGroupAdOperationType = GoogleAdsSearchads360V23ServicesAdGroupAdOperation::class;
  protected $adGroupAdOperationDataType = '';
  protected $adGroupAssetOperationType = GoogleAdsSearchads360V23ServicesAdGroupAssetOperation::class;
  protected $adGroupAssetOperationDataType = '';
  protected $adGroupBidModifierOperationType = GoogleAdsSearchads360V23ServicesAdGroupBidModifierOperation::class;
  protected $adGroupBidModifierOperationDataType = '';
  protected $adGroupCriterionCustomizerOperationType = GoogleAdsSearchads360V23ServicesAdGroupCriterionCustomizerOperation::class;
  protected $adGroupCriterionCustomizerOperationDataType = '';
  protected $adGroupCriterionLabelOperationType = GoogleAdsSearchads360V23ServicesAdGroupCriterionLabelOperation::class;
  protected $adGroupCriterionLabelOperationDataType = '';
  protected $adGroupCriterionOperationType = GoogleAdsSearchads360V23ServicesAdGroupCriterionOperation::class;
  protected $adGroupCriterionOperationDataType = '';
  protected $adGroupCustomizerOperationType = GoogleAdsSearchads360V23ServicesAdGroupCustomizerOperation::class;
  protected $adGroupCustomizerOperationDataType = '';
  protected $adGroupLabelOperationType = GoogleAdsSearchads360V23ServicesAdGroupLabelOperation::class;
  protected $adGroupLabelOperationDataType = '';
  protected $adGroupOperationType = GoogleAdsSearchads360V23ServicesAdGroupOperation::class;
  protected $adGroupOperationDataType = '';
  protected $adOperationType = GoogleAdsSearchads360V23ServicesAdOperation::class;
  protected $adOperationDataType = '';
  protected $adParameterOperationType = GoogleAdsSearchads360V23ServicesAdParameterOperation::class;
  protected $adParameterOperationDataType = '';
  protected $assetGroupAssetOperationType = GoogleAdsSearchads360V23ServicesAssetGroupAssetOperation::class;
  protected $assetGroupAssetOperationDataType = '';
  protected $assetGroupListingGroupFilterOperationType = GoogleAdsSearchads360V23ServicesAssetGroupListingGroupFilterOperation::class;
  protected $assetGroupListingGroupFilterOperationDataType = '';
  protected $assetGroupOperationType = GoogleAdsSearchads360V23ServicesAssetGroupOperation::class;
  protected $assetGroupOperationDataType = '';
  protected $assetGroupSignalOperationType = GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation::class;
  protected $assetGroupSignalOperationDataType = '';
  protected $assetOperationType = GoogleAdsSearchads360V23ServicesAssetOperation::class;
  protected $assetOperationDataType = '';
  protected $assetSetAssetOperationType = GoogleAdsSearchads360V23ServicesAssetSetAssetOperation::class;
  protected $assetSetAssetOperationDataType = '';
  protected $assetSetOperationType = GoogleAdsSearchads360V23ServicesAssetSetOperation::class;
  protected $assetSetOperationDataType = '';
  protected $audienceOperationType = GoogleAdsSearchads360V23ServicesAudienceOperation::class;
  protected $audienceOperationDataType = '';
  protected $biddingDataExclusionOperationType = GoogleAdsSearchads360V23ServicesBiddingDataExclusionOperation::class;
  protected $biddingDataExclusionOperationDataType = '';
  protected $biddingSeasonalityAdjustmentOperationType = GoogleAdsSearchads360V23ServicesBiddingSeasonalityAdjustmentOperation::class;
  protected $biddingSeasonalityAdjustmentOperationDataType = '';
  protected $biddingStrategyOperationType = GoogleAdsSearchads360V23ServicesBiddingStrategyOperation::class;
  protected $biddingStrategyOperationDataType = '';
  protected $campaignAssetOperationType = GoogleAdsSearchads360V23ServicesCampaignAssetOperation::class;
  protected $campaignAssetOperationDataType = '';
  protected $campaignAssetSetOperationType = GoogleAdsSearchads360V23ServicesCampaignAssetSetOperation::class;
  protected $campaignAssetSetOperationDataType = '';
  protected $campaignBidModifierOperationType = GoogleAdsSearchads360V23ServicesCampaignBidModifierOperation::class;
  protected $campaignBidModifierOperationDataType = '';
  protected $campaignBudgetOperationType = GoogleAdsSearchads360V23ServicesCampaignBudgetOperation::class;
  protected $campaignBudgetOperationDataType = '';
  protected $campaignConversionGoalOperationType = GoogleAdsSearchads360V23ServicesCampaignConversionGoalOperation::class;
  protected $campaignConversionGoalOperationDataType = '';
  protected $campaignCriterionOperationType = GoogleAdsSearchads360V23ServicesCampaignCriterionOperation::class;
  protected $campaignCriterionOperationDataType = '';
  protected $campaignCustomizerOperationType = GoogleAdsSearchads360V23ServicesCampaignCustomizerOperation::class;
  protected $campaignCustomizerOperationDataType = '';
  protected $campaignDraftOperationType = GoogleAdsSearchads360V23ServicesCampaignDraftOperation::class;
  protected $campaignDraftOperationDataType = '';
  protected $campaignGroupOperationType = GoogleAdsSearchads360V23ServicesCampaignGroupOperation::class;
  protected $campaignGroupOperationDataType = '';
  protected $campaignLabelOperationType = GoogleAdsSearchads360V23ServicesCampaignLabelOperation::class;
  protected $campaignLabelOperationDataType = '';
  protected $campaignOperationType = GoogleAdsSearchads360V23ServicesCampaignOperation::class;
  protected $campaignOperationDataType = '';
  protected $campaignSharedSetOperationType = GoogleAdsSearchads360V23ServicesCampaignSharedSetOperation::class;
  protected $campaignSharedSetOperationDataType = '';
  protected $conversionActionOperationType = GoogleAdsSearchads360V23ServicesConversionActionOperation::class;
  protected $conversionActionOperationDataType = '';
  protected $conversionCustomVariableOperationType = GoogleAdsSearchads360V23ServicesConversionCustomVariableOperation::class;
  protected $conversionCustomVariableOperationDataType = '';
  protected $conversionGoalCampaignConfigOperationType = GoogleAdsSearchads360V23ServicesConversionGoalCampaignConfigOperation::class;
  protected $conversionGoalCampaignConfigOperationDataType = '';
  protected $conversionValueRuleOperationType = GoogleAdsSearchads360V23ServicesConversionValueRuleOperation::class;
  protected $conversionValueRuleOperationDataType = '';
  protected $conversionValueRuleSetOperationType = GoogleAdsSearchads360V23ServicesConversionValueRuleSetOperation::class;
  protected $conversionValueRuleSetOperationDataType = '';
  protected $customConversionGoalOperationType = GoogleAdsSearchads360V23ServicesCustomConversionGoalOperation::class;
  protected $customConversionGoalOperationDataType = '';
  protected $customerAssetOperationType = GoogleAdsSearchads360V23ServicesCustomerAssetOperation::class;
  protected $customerAssetOperationDataType = '';
  protected $customerConversionGoalOperationType = GoogleAdsSearchads360V23ServicesCustomerConversionGoalOperation::class;
  protected $customerConversionGoalOperationDataType = '';
  protected $customerCustomizerOperationType = GoogleAdsSearchads360V23ServicesCustomerCustomizerOperation::class;
  protected $customerCustomizerOperationDataType = '';
  protected $customerLabelOperationType = GoogleAdsSearchads360V23ServicesCustomerLabelOperation::class;
  protected $customerLabelOperationDataType = '';
  protected $customerNegativeCriterionOperationType = GoogleAdsSearchads360V23ServicesCustomerNegativeCriterionOperation::class;
  protected $customerNegativeCriterionOperationDataType = '';
  protected $customerOperationType = GoogleAdsSearchads360V23ServicesCustomerOperation::class;
  protected $customerOperationDataType = '';
  protected $customizerAttributeOperationType = GoogleAdsSearchads360V23ServicesCustomizerAttributeOperation::class;
  protected $customizerAttributeOperationDataType = '';
  protected $experimentArmOperationType = GoogleAdsSearchads360V23ServicesExperimentArmOperation::class;
  protected $experimentArmOperationDataType = '';
  protected $experimentOperationType = GoogleAdsSearchads360V23ServicesExperimentOperation::class;
  protected $experimentOperationDataType = '';
  protected $keywordPlanAdGroupKeywordOperationType = GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupKeywordOperation::class;
  protected $keywordPlanAdGroupKeywordOperationDataType = '';
  protected $keywordPlanAdGroupOperationType = GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupOperation::class;
  protected $keywordPlanAdGroupOperationDataType = '';
  protected $keywordPlanCampaignKeywordOperationType = GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation::class;
  protected $keywordPlanCampaignKeywordOperationDataType = '';
  protected $keywordPlanCampaignOperationType = GoogleAdsSearchads360V23ServicesKeywordPlanCampaignOperation::class;
  protected $keywordPlanCampaignOperationDataType = '';
  protected $keywordPlanOperationType = GoogleAdsSearchads360V23ServicesKeywordPlanOperation::class;
  protected $keywordPlanOperationDataType = '';
  protected $labelOperationType = GoogleAdsSearchads360V23ServicesLabelOperation::class;
  protected $labelOperationDataType = '';
  protected $recommendationSubscriptionOperationType = GoogleAdsSearchads360V23ServicesRecommendationSubscriptionOperation::class;
  protected $recommendationSubscriptionOperationDataType = '';
  protected $remarketingActionOperationType = GoogleAdsSearchads360V23ServicesRemarketingActionOperation::class;
  protected $remarketingActionOperationDataType = '';
  protected $searchAds360CampaignOperationType = GoogleAdsSearchads360V23ServicesSearchAds360CampaignOperation::class;
  protected $searchAds360CampaignOperationDataType = '';
  protected $sharedCriterionOperationType = GoogleAdsSearchads360V23ServicesSharedCriterionOperation::class;
  protected $sharedCriterionOperationDataType = '';
  protected $sharedSetOperationType = GoogleAdsSearchads360V23ServicesSharedSetOperation::class;
  protected $sharedSetOperationDataType = '';
  protected $smartCampaignSettingOperationType = GoogleAdsSearchads360V23ServicesSmartCampaignSettingOperation::class;
  protected $smartCampaignSettingOperationDataType = '';
  protected $userListOperationType = GoogleAdsSearchads360V23ServicesUserListOperation::class;
  protected $userListOperationDataType = '';

  /**
   * An ad group ad label mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupAdLabelOperation $adGroupAdLabelOperation
   */
  public function setAdGroupAdLabelOperation(GoogleAdsSearchads360V23ServicesAdGroupAdLabelOperation $adGroupAdLabelOperation)
  {
    $this->adGroupAdLabelOperation = $adGroupAdLabelOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupAdLabelOperation
   */
  public function getAdGroupAdLabelOperation()
  {
    return $this->adGroupAdLabelOperation;
  }
  /**
   * An ad group ad mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupAdOperation $adGroupAdOperation
   */
  public function setAdGroupAdOperation(GoogleAdsSearchads360V23ServicesAdGroupAdOperation $adGroupAdOperation)
  {
    $this->adGroupAdOperation = $adGroupAdOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupAdOperation
   */
  public function getAdGroupAdOperation()
  {
    return $this->adGroupAdOperation;
  }
  /**
   * An ad group asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupAssetOperation $adGroupAssetOperation
   */
  public function setAdGroupAssetOperation(GoogleAdsSearchads360V23ServicesAdGroupAssetOperation $adGroupAssetOperation)
  {
    $this->adGroupAssetOperation = $adGroupAssetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupAssetOperation
   */
  public function getAdGroupAssetOperation()
  {
    return $this->adGroupAssetOperation;
  }
  /**
   * An ad group bid modifier mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupBidModifierOperation $adGroupBidModifierOperation
   */
  public function setAdGroupBidModifierOperation(GoogleAdsSearchads360V23ServicesAdGroupBidModifierOperation $adGroupBidModifierOperation)
  {
    $this->adGroupBidModifierOperation = $adGroupBidModifierOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupBidModifierOperation
   */
  public function getAdGroupBidModifierOperation()
  {
    return $this->adGroupBidModifierOperation;
  }
  /**
   * An ad group criterion customizer mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupCriterionCustomizerOperation $adGroupCriterionCustomizerOperation
   */
  public function setAdGroupCriterionCustomizerOperation(GoogleAdsSearchads360V23ServicesAdGroupCriterionCustomizerOperation $adGroupCriterionCustomizerOperation)
  {
    $this->adGroupCriterionCustomizerOperation = $adGroupCriterionCustomizerOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupCriterionCustomizerOperation
   */
  public function getAdGroupCriterionCustomizerOperation()
  {
    return $this->adGroupCriterionCustomizerOperation;
  }
  /**
   * An ad group criterion label mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupCriterionLabelOperation $adGroupCriterionLabelOperation
   */
  public function setAdGroupCriterionLabelOperation(GoogleAdsSearchads360V23ServicesAdGroupCriterionLabelOperation $adGroupCriterionLabelOperation)
  {
    $this->adGroupCriterionLabelOperation = $adGroupCriterionLabelOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupCriterionLabelOperation
   */
  public function getAdGroupCriterionLabelOperation()
  {
    return $this->adGroupCriterionLabelOperation;
  }
  /**
   * An ad group criterion mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupCriterionOperation $adGroupCriterionOperation
   */
  public function setAdGroupCriterionOperation(GoogleAdsSearchads360V23ServicesAdGroupCriterionOperation $adGroupCriterionOperation)
  {
    $this->adGroupCriterionOperation = $adGroupCriterionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupCriterionOperation
   */
  public function getAdGroupCriterionOperation()
  {
    return $this->adGroupCriterionOperation;
  }
  /**
   * An ad group customizer mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupCustomizerOperation $adGroupCustomizerOperation
   */
  public function setAdGroupCustomizerOperation(GoogleAdsSearchads360V23ServicesAdGroupCustomizerOperation $adGroupCustomizerOperation)
  {
    $this->adGroupCustomizerOperation = $adGroupCustomizerOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupCustomizerOperation
   */
  public function getAdGroupCustomizerOperation()
  {
    return $this->adGroupCustomizerOperation;
  }
  /**
   * An ad group label mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupLabelOperation $adGroupLabelOperation
   */
  public function setAdGroupLabelOperation(GoogleAdsSearchads360V23ServicesAdGroupLabelOperation $adGroupLabelOperation)
  {
    $this->adGroupLabelOperation = $adGroupLabelOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupLabelOperation
   */
  public function getAdGroupLabelOperation()
  {
    return $this->adGroupLabelOperation;
  }
  /**
   * An ad group mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupOperation $adGroupOperation
   */
  public function setAdGroupOperation(GoogleAdsSearchads360V23ServicesAdGroupOperation $adGroupOperation)
  {
    $this->adGroupOperation = $adGroupOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupOperation
   */
  public function getAdGroupOperation()
  {
    return $this->adGroupOperation;
  }
  /**
   * An ad mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdOperation $adOperation
   */
  public function setAdOperation(GoogleAdsSearchads360V23ServicesAdOperation $adOperation)
  {
    $this->adOperation = $adOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdOperation
   */
  public function getAdOperation()
  {
    return $this->adOperation;
  }
  /**
   * An ad parameter mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAdParameterOperation $adParameterOperation
   */
  public function setAdParameterOperation(GoogleAdsSearchads360V23ServicesAdParameterOperation $adParameterOperation)
  {
    $this->adParameterOperation = $adParameterOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdParameterOperation
   */
  public function getAdParameterOperation()
  {
    return $this->adParameterOperation;
  }
  /**
   * An asset group asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetGroupAssetOperation $assetGroupAssetOperation
   */
  public function setAssetGroupAssetOperation(GoogleAdsSearchads360V23ServicesAssetGroupAssetOperation $assetGroupAssetOperation)
  {
    $this->assetGroupAssetOperation = $assetGroupAssetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetGroupAssetOperation
   */
  public function getAssetGroupAssetOperation()
  {
    return $this->assetGroupAssetOperation;
  }
  /**
   * An asset group listing group filter mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetGroupListingGroupFilterOperation $assetGroupListingGroupFilterOperation
   */
  public function setAssetGroupListingGroupFilterOperation(GoogleAdsSearchads360V23ServicesAssetGroupListingGroupFilterOperation $assetGroupListingGroupFilterOperation)
  {
    $this->assetGroupListingGroupFilterOperation = $assetGroupListingGroupFilterOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetGroupListingGroupFilterOperation
   */
  public function getAssetGroupListingGroupFilterOperation()
  {
    return $this->assetGroupListingGroupFilterOperation;
  }
  /**
   * An asset group mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetGroupOperation $assetGroupOperation
   */
  public function setAssetGroupOperation(GoogleAdsSearchads360V23ServicesAssetGroupOperation $assetGroupOperation)
  {
    $this->assetGroupOperation = $assetGroupOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetGroupOperation
   */
  public function getAssetGroupOperation()
  {
    return $this->assetGroupOperation;
  }
  /**
   * An asset group signal mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation $assetGroupSignalOperation
   */
  public function setAssetGroupSignalOperation(GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation $assetGroupSignalOperation)
  {
    $this->assetGroupSignalOperation = $assetGroupSignalOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetGroupSignalOperation
   */
  public function getAssetGroupSignalOperation()
  {
    return $this->assetGroupSignalOperation;
  }
  /**
   * An asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetOperation $assetOperation
   */
  public function setAssetOperation(GoogleAdsSearchads360V23ServicesAssetOperation $assetOperation)
  {
    $this->assetOperation = $assetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetOperation
   */
  public function getAssetOperation()
  {
    return $this->assetOperation;
  }
  /**
   * An asset set asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetSetAssetOperation $assetSetAssetOperation
   */
  public function setAssetSetAssetOperation(GoogleAdsSearchads360V23ServicesAssetSetAssetOperation $assetSetAssetOperation)
  {
    $this->assetSetAssetOperation = $assetSetAssetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetSetAssetOperation
   */
  public function getAssetSetAssetOperation()
  {
    return $this->assetSetAssetOperation;
  }
  /**
   * An asset set mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAssetSetOperation $assetSetOperation
   */
  public function setAssetSetOperation(GoogleAdsSearchads360V23ServicesAssetSetOperation $assetSetOperation)
  {
    $this->assetSetOperation = $assetSetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAssetSetOperation
   */
  public function getAssetSetOperation()
  {
    return $this->assetSetOperation;
  }
  /**
   * An audience mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceOperation $audienceOperation
   */
  public function setAudienceOperation(GoogleAdsSearchads360V23ServicesAudienceOperation $audienceOperation)
  {
    $this->audienceOperation = $audienceOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceOperation
   */
  public function getAudienceOperation()
  {
    return $this->audienceOperation;
  }
  /**
   * A bidding data exclusion mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesBiddingDataExclusionOperation $biddingDataExclusionOperation
   */
  public function setBiddingDataExclusionOperation(GoogleAdsSearchads360V23ServicesBiddingDataExclusionOperation $biddingDataExclusionOperation)
  {
    $this->biddingDataExclusionOperation = $biddingDataExclusionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBiddingDataExclusionOperation
   */
  public function getBiddingDataExclusionOperation()
  {
    return $this->biddingDataExclusionOperation;
  }
  /**
   * A bidding seasonality adjustment mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesBiddingSeasonalityAdjustmentOperation $biddingSeasonalityAdjustmentOperation
   */
  public function setBiddingSeasonalityAdjustmentOperation(GoogleAdsSearchads360V23ServicesBiddingSeasonalityAdjustmentOperation $biddingSeasonalityAdjustmentOperation)
  {
    $this->biddingSeasonalityAdjustmentOperation = $biddingSeasonalityAdjustmentOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBiddingSeasonalityAdjustmentOperation
   */
  public function getBiddingSeasonalityAdjustmentOperation()
  {
    return $this->biddingSeasonalityAdjustmentOperation;
  }
  /**
   * A bidding strategy mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesBiddingStrategyOperation $biddingStrategyOperation
   */
  public function setBiddingStrategyOperation(GoogleAdsSearchads360V23ServicesBiddingStrategyOperation $biddingStrategyOperation)
  {
    $this->biddingStrategyOperation = $biddingStrategyOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBiddingStrategyOperation
   */
  public function getBiddingStrategyOperation()
  {
    return $this->biddingStrategyOperation;
  }
  /**
   * A campaign asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignAssetOperation $campaignAssetOperation
   */
  public function setCampaignAssetOperation(GoogleAdsSearchads360V23ServicesCampaignAssetOperation $campaignAssetOperation)
  {
    $this->campaignAssetOperation = $campaignAssetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignAssetOperation
   */
  public function getCampaignAssetOperation()
  {
    return $this->campaignAssetOperation;
  }
  /**
   * A campaign asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignAssetSetOperation $campaignAssetSetOperation
   */
  public function setCampaignAssetSetOperation(GoogleAdsSearchads360V23ServicesCampaignAssetSetOperation $campaignAssetSetOperation)
  {
    $this->campaignAssetSetOperation = $campaignAssetSetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignAssetSetOperation
   */
  public function getCampaignAssetSetOperation()
  {
    return $this->campaignAssetSetOperation;
  }
  /**
   * A campaign bid modifier mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignBidModifierOperation $campaignBidModifierOperation
   */
  public function setCampaignBidModifierOperation(GoogleAdsSearchads360V23ServicesCampaignBidModifierOperation $campaignBidModifierOperation)
  {
    $this->campaignBidModifierOperation = $campaignBidModifierOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignBidModifierOperation
   */
  public function getCampaignBidModifierOperation()
  {
    return $this->campaignBidModifierOperation;
  }
  /**
   * A campaign budget mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignBudgetOperation $campaignBudgetOperation
   */
  public function setCampaignBudgetOperation(GoogleAdsSearchads360V23ServicesCampaignBudgetOperation $campaignBudgetOperation)
  {
    $this->campaignBudgetOperation = $campaignBudgetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignBudgetOperation
   */
  public function getCampaignBudgetOperation()
  {
    return $this->campaignBudgetOperation;
  }
  /**
   * A campaign conversion goal mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignConversionGoalOperation $campaignConversionGoalOperation
   */
  public function setCampaignConversionGoalOperation(GoogleAdsSearchads360V23ServicesCampaignConversionGoalOperation $campaignConversionGoalOperation)
  {
    $this->campaignConversionGoalOperation = $campaignConversionGoalOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignConversionGoalOperation
   */
  public function getCampaignConversionGoalOperation()
  {
    return $this->campaignConversionGoalOperation;
  }
  /**
   * A campaign criterion mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignCriterionOperation $campaignCriterionOperation
   */
  public function setCampaignCriterionOperation(GoogleAdsSearchads360V23ServicesCampaignCriterionOperation $campaignCriterionOperation)
  {
    $this->campaignCriterionOperation = $campaignCriterionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignCriterionOperation
   */
  public function getCampaignCriterionOperation()
  {
    return $this->campaignCriterionOperation;
  }
  /**
   * A campaign customizer mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignCustomizerOperation $campaignCustomizerOperation
   */
  public function setCampaignCustomizerOperation(GoogleAdsSearchads360V23ServicesCampaignCustomizerOperation $campaignCustomizerOperation)
  {
    $this->campaignCustomizerOperation = $campaignCustomizerOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignCustomizerOperation
   */
  public function getCampaignCustomizerOperation()
  {
    return $this->campaignCustomizerOperation;
  }
  /**
   * A campaign draft mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignDraftOperation $campaignDraftOperation
   */
  public function setCampaignDraftOperation(GoogleAdsSearchads360V23ServicesCampaignDraftOperation $campaignDraftOperation)
  {
    $this->campaignDraftOperation = $campaignDraftOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignDraftOperation
   */
  public function getCampaignDraftOperation()
  {
    return $this->campaignDraftOperation;
  }
  /**
   * A campaign group mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignGroupOperation $campaignGroupOperation
   */
  public function setCampaignGroupOperation(GoogleAdsSearchads360V23ServicesCampaignGroupOperation $campaignGroupOperation)
  {
    $this->campaignGroupOperation = $campaignGroupOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignGroupOperation
   */
  public function getCampaignGroupOperation()
  {
    return $this->campaignGroupOperation;
  }
  /**
   * A campaign label mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignLabelOperation $campaignLabelOperation
   */
  public function setCampaignLabelOperation(GoogleAdsSearchads360V23ServicesCampaignLabelOperation $campaignLabelOperation)
  {
    $this->campaignLabelOperation = $campaignLabelOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignLabelOperation
   */
  public function getCampaignLabelOperation()
  {
    return $this->campaignLabelOperation;
  }
  /**
   * A campaign mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignOperation $campaignOperation
   */
  public function setCampaignOperation(GoogleAdsSearchads360V23ServicesCampaignOperation $campaignOperation)
  {
    $this->campaignOperation = $campaignOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignOperation
   */
  public function getCampaignOperation()
  {
    return $this->campaignOperation;
  }
  /**
   * A campaign shared set mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignSharedSetOperation $campaignSharedSetOperation
   */
  public function setCampaignSharedSetOperation(GoogleAdsSearchads360V23ServicesCampaignSharedSetOperation $campaignSharedSetOperation)
  {
    $this->campaignSharedSetOperation = $campaignSharedSetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignSharedSetOperation
   */
  public function getCampaignSharedSetOperation()
  {
    return $this->campaignSharedSetOperation;
  }
  /**
   * A conversion action mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionActionOperation $conversionActionOperation
   */
  public function setConversionActionOperation(GoogleAdsSearchads360V23ServicesConversionActionOperation $conversionActionOperation)
  {
    $this->conversionActionOperation = $conversionActionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionActionOperation
   */
  public function getConversionActionOperation()
  {
    return $this->conversionActionOperation;
  }
  /**
   * A conversion custom variable mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionCustomVariableOperation $conversionCustomVariableOperation
   */
  public function setConversionCustomVariableOperation(GoogleAdsSearchads360V23ServicesConversionCustomVariableOperation $conversionCustomVariableOperation)
  {
    $this->conversionCustomVariableOperation = $conversionCustomVariableOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionCustomVariableOperation
   */
  public function getConversionCustomVariableOperation()
  {
    return $this->conversionCustomVariableOperation;
  }
  /**
   * A conversion goal campaign config mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionGoalCampaignConfigOperation $conversionGoalCampaignConfigOperation
   */
  public function setConversionGoalCampaignConfigOperation(GoogleAdsSearchads360V23ServicesConversionGoalCampaignConfigOperation $conversionGoalCampaignConfigOperation)
  {
    $this->conversionGoalCampaignConfigOperation = $conversionGoalCampaignConfigOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionGoalCampaignConfigOperation
   */
  public function getConversionGoalCampaignConfigOperation()
  {
    return $this->conversionGoalCampaignConfigOperation;
  }
  /**
   * A conversion value rule mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionValueRuleOperation $conversionValueRuleOperation
   */
  public function setConversionValueRuleOperation(GoogleAdsSearchads360V23ServicesConversionValueRuleOperation $conversionValueRuleOperation)
  {
    $this->conversionValueRuleOperation = $conversionValueRuleOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionValueRuleOperation
   */
  public function getConversionValueRuleOperation()
  {
    return $this->conversionValueRuleOperation;
  }
  /**
   * A conversion value rule set mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionValueRuleSetOperation $conversionValueRuleSetOperation
   */
  public function setConversionValueRuleSetOperation(GoogleAdsSearchads360V23ServicesConversionValueRuleSetOperation $conversionValueRuleSetOperation)
  {
    $this->conversionValueRuleSetOperation = $conversionValueRuleSetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionValueRuleSetOperation
   */
  public function getConversionValueRuleSetOperation()
  {
    return $this->conversionValueRuleSetOperation;
  }
  /**
   * A custom conversion goal mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomConversionGoalOperation $customConversionGoalOperation
   */
  public function setCustomConversionGoalOperation(GoogleAdsSearchads360V23ServicesCustomConversionGoalOperation $customConversionGoalOperation)
  {
    $this->customConversionGoalOperation = $customConversionGoalOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomConversionGoalOperation
   */
  public function getCustomConversionGoalOperation()
  {
    return $this->customConversionGoalOperation;
  }
  /**
   * A customer asset mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerAssetOperation $customerAssetOperation
   */
  public function setCustomerAssetOperation(GoogleAdsSearchads360V23ServicesCustomerAssetOperation $customerAssetOperation)
  {
    $this->customerAssetOperation = $customerAssetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerAssetOperation
   */
  public function getCustomerAssetOperation()
  {
    return $this->customerAssetOperation;
  }
  /**
   * A customer conversion goal mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerConversionGoalOperation $customerConversionGoalOperation
   */
  public function setCustomerConversionGoalOperation(GoogleAdsSearchads360V23ServicesCustomerConversionGoalOperation $customerConversionGoalOperation)
  {
    $this->customerConversionGoalOperation = $customerConversionGoalOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerConversionGoalOperation
   */
  public function getCustomerConversionGoalOperation()
  {
    return $this->customerConversionGoalOperation;
  }
  /**
   * A customer customizer mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerCustomizerOperation $customerCustomizerOperation
   */
  public function setCustomerCustomizerOperation(GoogleAdsSearchads360V23ServicesCustomerCustomizerOperation $customerCustomizerOperation)
  {
    $this->customerCustomizerOperation = $customerCustomizerOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerCustomizerOperation
   */
  public function getCustomerCustomizerOperation()
  {
    return $this->customerCustomizerOperation;
  }
  /**
   * A customer label mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerLabelOperation $customerLabelOperation
   */
  public function setCustomerLabelOperation(GoogleAdsSearchads360V23ServicesCustomerLabelOperation $customerLabelOperation)
  {
    $this->customerLabelOperation = $customerLabelOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerLabelOperation
   */
  public function getCustomerLabelOperation()
  {
    return $this->customerLabelOperation;
  }
  /**
   * A customer negative criterion mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerNegativeCriterionOperation $customerNegativeCriterionOperation
   */
  public function setCustomerNegativeCriterionOperation(GoogleAdsSearchads360V23ServicesCustomerNegativeCriterionOperation $customerNegativeCriterionOperation)
  {
    $this->customerNegativeCriterionOperation = $customerNegativeCriterionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerNegativeCriterionOperation
   */
  public function getCustomerNegativeCriterionOperation()
  {
    return $this->customerNegativeCriterionOperation;
  }
  /**
   * A customer mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerOperation $customerOperation
   */
  public function setCustomerOperation(GoogleAdsSearchads360V23ServicesCustomerOperation $customerOperation)
  {
    $this->customerOperation = $customerOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerOperation
   */
  public function getCustomerOperation()
  {
    return $this->customerOperation;
  }
  /**
   * A customizer attribute mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomizerAttributeOperation $customizerAttributeOperation
   */
  public function setCustomizerAttributeOperation(GoogleAdsSearchads360V23ServicesCustomizerAttributeOperation $customizerAttributeOperation)
  {
    $this->customizerAttributeOperation = $customizerAttributeOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomizerAttributeOperation
   */
  public function getCustomizerAttributeOperation()
  {
    return $this->customizerAttributeOperation;
  }
  /**
   * An experiment arm mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesExperimentArmOperation $experimentArmOperation
   */
  public function setExperimentArmOperation(GoogleAdsSearchads360V23ServicesExperimentArmOperation $experimentArmOperation)
  {
    $this->experimentArmOperation = $experimentArmOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesExperimentArmOperation
   */
  public function getExperimentArmOperation()
  {
    return $this->experimentArmOperation;
  }
  /**
   * An experiment mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesExperimentOperation $experimentOperation
   */
  public function setExperimentOperation(GoogleAdsSearchads360V23ServicesExperimentOperation $experimentOperation)
  {
    $this->experimentOperation = $experimentOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesExperimentOperation
   */
  public function getExperimentOperation()
  {
    return $this->experimentOperation;
  }
  /**
   * A keyword plan ad group keyword operation.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupKeywordOperation $keywordPlanAdGroupKeywordOperation
   */
  public function setKeywordPlanAdGroupKeywordOperation(GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupKeywordOperation $keywordPlanAdGroupKeywordOperation)
  {
    $this->keywordPlanAdGroupKeywordOperation = $keywordPlanAdGroupKeywordOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupKeywordOperation
   */
  public function getKeywordPlanAdGroupKeywordOperation()
  {
    return $this->keywordPlanAdGroupKeywordOperation;
  }
  /**
   * A keyword plan ad group operation.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupOperation $keywordPlanAdGroupOperation
   */
  public function setKeywordPlanAdGroupOperation(GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupOperation $keywordPlanAdGroupOperation)
  {
    $this->keywordPlanAdGroupOperation = $keywordPlanAdGroupOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordPlanAdGroupOperation
   */
  public function getKeywordPlanAdGroupOperation()
  {
    return $this->keywordPlanAdGroupOperation;
  }
  /**
   * A keyword plan campaign keyword operation.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation $keywordPlanCampaignKeywordOperation
   */
  public function setKeywordPlanCampaignKeywordOperation(GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation $keywordPlanCampaignKeywordOperation)
  {
    $this->keywordPlanCampaignKeywordOperation = $keywordPlanCampaignKeywordOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordPlanCampaignKeywordOperation
   */
  public function getKeywordPlanCampaignKeywordOperation()
  {
    return $this->keywordPlanCampaignKeywordOperation;
  }
  /**
   * A keyword plan campaign operation.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordPlanCampaignOperation $keywordPlanCampaignOperation
   */
  public function setKeywordPlanCampaignOperation(GoogleAdsSearchads360V23ServicesKeywordPlanCampaignOperation $keywordPlanCampaignOperation)
  {
    $this->keywordPlanCampaignOperation = $keywordPlanCampaignOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordPlanCampaignOperation
   */
  public function getKeywordPlanCampaignOperation()
  {
    return $this->keywordPlanCampaignOperation;
  }
  /**
   * A keyword plan operation.
   *
   * @param GoogleAdsSearchads360V23ServicesKeywordPlanOperation $keywordPlanOperation
   */
  public function setKeywordPlanOperation(GoogleAdsSearchads360V23ServicesKeywordPlanOperation $keywordPlanOperation)
  {
    $this->keywordPlanOperation = $keywordPlanOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesKeywordPlanOperation
   */
  public function getKeywordPlanOperation()
  {
    return $this->keywordPlanOperation;
  }
  /**
   * A label mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesLabelOperation $labelOperation
   */
  public function setLabelOperation(GoogleAdsSearchads360V23ServicesLabelOperation $labelOperation)
  {
    $this->labelOperation = $labelOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesLabelOperation
   */
  public function getLabelOperation()
  {
    return $this->labelOperation;
  }
  /**
   * A recommendation subscription mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesRecommendationSubscriptionOperation $recommendationSubscriptionOperation
   */
  public function setRecommendationSubscriptionOperation(GoogleAdsSearchads360V23ServicesRecommendationSubscriptionOperation $recommendationSubscriptionOperation)
  {
    $this->recommendationSubscriptionOperation = $recommendationSubscriptionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesRecommendationSubscriptionOperation
   */
  public function getRecommendationSubscriptionOperation()
  {
    return $this->recommendationSubscriptionOperation;
  }
  /**
   * A remarketing action mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesRemarketingActionOperation $remarketingActionOperation
   */
  public function setRemarketingActionOperation(GoogleAdsSearchads360V23ServicesRemarketingActionOperation $remarketingActionOperation)
  {
    $this->remarketingActionOperation = $remarketingActionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesRemarketingActionOperation
   */
  public function getRemarketingActionOperation()
  {
    return $this->remarketingActionOperation;
  }
  /**
   * A Search Ads 360 campaign mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesSearchAds360CampaignOperation $searchAds360CampaignOperation
   */
  public function setSearchAds360CampaignOperation(GoogleAdsSearchads360V23ServicesSearchAds360CampaignOperation $searchAds360CampaignOperation)
  {
    $this->searchAds360CampaignOperation = $searchAds360CampaignOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSearchAds360CampaignOperation
   */
  public function getSearchAds360CampaignOperation()
  {
    return $this->searchAds360CampaignOperation;
  }
  /**
   * A shared criterion mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesSharedCriterionOperation $sharedCriterionOperation
   */
  public function setSharedCriterionOperation(GoogleAdsSearchads360V23ServicesSharedCriterionOperation $sharedCriterionOperation)
  {
    $this->sharedCriterionOperation = $sharedCriterionOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSharedCriterionOperation
   */
  public function getSharedCriterionOperation()
  {
    return $this->sharedCriterionOperation;
  }
  /**
   * A shared set mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesSharedSetOperation $sharedSetOperation
   */
  public function setSharedSetOperation(GoogleAdsSearchads360V23ServicesSharedSetOperation $sharedSetOperation)
  {
    $this->sharedSetOperation = $sharedSetOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSharedSetOperation
   */
  public function getSharedSetOperation()
  {
    return $this->sharedSetOperation;
  }
  /**
   * A Smart campaign setting mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignSettingOperation $smartCampaignSettingOperation
   */
  public function setSmartCampaignSettingOperation(GoogleAdsSearchads360V23ServicesSmartCampaignSettingOperation $smartCampaignSettingOperation)
  {
    $this->smartCampaignSettingOperation = $smartCampaignSettingOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignSettingOperation
   */
  public function getSmartCampaignSettingOperation()
  {
    return $this->smartCampaignSettingOperation;
  }
  /**
   * A user list mutate operation.
   *
   * @param GoogleAdsSearchads360V23ServicesUserListOperation $userListOperation
   */
  public function setUserListOperation(GoogleAdsSearchads360V23ServicesUserListOperation $userListOperation)
  {
    $this->userListOperation = $userListOperation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesUserListOperation
   */
  public function getUserListOperation()
  {
    return $this->userListOperation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateOperation');
