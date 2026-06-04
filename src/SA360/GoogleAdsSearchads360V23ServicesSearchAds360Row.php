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

class GoogleAdsSearchads360V23ServicesSearchAds360Row extends \Google\Collection
{
  protected $collection_key = 'customColumns';
  protected $accessibleBiddingStrategyType = GoogleAdsSearchads360V23ResourcesAccessibleBiddingStrategy::class;
  protected $accessibleBiddingStrategyDataType = '';
  protected $accountBudgetType = GoogleAdsSearchads360V23ResourcesAccountBudget::class;
  protected $accountBudgetDataType = '';
  protected $accountBudgetProposalType = GoogleAdsSearchads360V23ResourcesAccountBudgetProposal::class;
  protected $accountBudgetProposalDataType = '';
  protected $accountLinkType = GoogleAdsSearchads360V23ResourcesAccountLink::class;
  protected $accountLinkDataType = '';
  protected $adType = GoogleAdsSearchads360V23ResourcesAd::class;
  protected $adDataType = '';
  protected $adGroupType = GoogleAdsSearchads360V23ResourcesAdGroup::class;
  protected $adGroupDataType = '';
  protected $adGroupAdType = GoogleAdsSearchads360V23ResourcesAdGroupAd::class;
  protected $adGroupAdDataType = '';
  protected $adGroupAdAssetCombinationViewType = GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView::class;
  protected $adGroupAdAssetCombinationViewDataType = '';
  protected $adGroupAdAssetViewType = GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView::class;
  protected $adGroupAdAssetViewDataType = '';
  protected $adGroupAdEffectiveLabelType = GoogleAdsSearchads360V23ResourcesAdGroupAdEffectiveLabel::class;
  protected $adGroupAdEffectiveLabelDataType = '';
  protected $adGroupAdLabelType = GoogleAdsSearchads360V23ResourcesAdGroupAdLabel::class;
  protected $adGroupAdLabelDataType = '';
  protected $adGroupAssetType = GoogleAdsSearchads360V23ResourcesAdGroupAsset::class;
  protected $adGroupAssetDataType = '';
  protected $adGroupAssetSetType = GoogleAdsSearchads360V23ResourcesAdGroupAssetSet::class;
  protected $adGroupAssetSetDataType = '';
  protected $adGroupAudienceViewType = GoogleAdsSearchads360V23ResourcesAdGroupAudienceView::class;
  protected $adGroupAudienceViewDataType = '';
  protected $adGroupBidModifierType = GoogleAdsSearchads360V23ResourcesAdGroupBidModifier::class;
  protected $adGroupBidModifierDataType = '';
  protected $adGroupCriterionType = GoogleAdsSearchads360V23ResourcesAdGroupCriterion::class;
  protected $adGroupCriterionDataType = '';
  protected $adGroupCriterionCustomizerType = GoogleAdsSearchads360V23ResourcesAdGroupCriterionCustomizer::class;
  protected $adGroupCriterionCustomizerDataType = '';
  protected $adGroupCriterionEffectiveLabelType = GoogleAdsSearchads360V23ResourcesAdGroupCriterionEffectiveLabel::class;
  protected $adGroupCriterionEffectiveLabelDataType = '';
  protected $adGroupCriterionLabelType = GoogleAdsSearchads360V23ResourcesAdGroupCriterionLabel::class;
  protected $adGroupCriterionLabelDataType = '';
  protected $adGroupCriterionSimulationType = GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation::class;
  protected $adGroupCriterionSimulationDataType = '';
  protected $adGroupCustomizerType = GoogleAdsSearchads360V23ResourcesAdGroupCustomizer::class;
  protected $adGroupCustomizerDataType = '';
  protected $adGroupEffectiveLabelType = GoogleAdsSearchads360V23ResourcesAdGroupEffectiveLabel::class;
  protected $adGroupEffectiveLabelDataType = '';
  protected $adGroupLabelType = GoogleAdsSearchads360V23ResourcesAdGroupLabel::class;
  protected $adGroupLabelDataType = '';
  protected $adGroupSimulationType = GoogleAdsSearchads360V23ResourcesAdGroupSimulation::class;
  protected $adGroupSimulationDataType = '';
  protected $adParameterType = GoogleAdsSearchads360V23ResourcesAdParameter::class;
  protected $adParameterDataType = '';
  protected $adScheduleViewType = GoogleAdsSearchads360V23ResourcesAdScheduleView::class;
  protected $adScheduleViewDataType = '';
  protected $ageRangeViewType = GoogleAdsSearchads360V23ResourcesAgeRangeView::class;
  protected $ageRangeViewDataType = '';
  protected $aiMaxSearchTermAdCombinationViewType = GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView::class;
  protected $aiMaxSearchTermAdCombinationViewDataType = '';
  protected $androidPrivacySharedKeyGoogleAdGroupType = GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleAdGroup::class;
  protected $androidPrivacySharedKeyGoogleAdGroupDataType = '';
  protected $androidPrivacySharedKeyGoogleCampaignType = GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign::class;
  protected $androidPrivacySharedKeyGoogleCampaignDataType = '';
  protected $androidPrivacySharedKeyGoogleNetworkTypeType = GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleNetworkType::class;
  protected $androidPrivacySharedKeyGoogleNetworkTypeDataType = '';
  protected $assetType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $assetDataType = '';
  protected $assetFieldTypeViewType = GoogleAdsSearchads360V23ResourcesAssetFieldTypeView::class;
  protected $assetFieldTypeViewDataType = '';
  protected $assetGroupType = GoogleAdsSearchads360V23ResourcesAssetGroup::class;
  protected $assetGroupDataType = '';
  protected $assetGroupAssetType = GoogleAdsSearchads360V23ResourcesAssetGroupAsset::class;
  protected $assetGroupAssetDataType = '';
  protected $assetGroupListingGroupFilterType = GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter::class;
  protected $assetGroupListingGroupFilterDataType = '';
  protected $assetGroupProductGroupViewType = GoogleAdsSearchads360V23ResourcesAssetGroupProductGroupView::class;
  protected $assetGroupProductGroupViewDataType = '';
  protected $assetGroupSignalType = GoogleAdsSearchads360V23ResourcesAssetGroupSignal::class;
  protected $assetGroupSignalDataType = '';
  protected $assetGroupTopCombinationViewType = GoogleAdsSearchads360V23ResourcesAssetGroupTopCombinationView::class;
  protected $assetGroupTopCombinationViewDataType = '';
  protected $assetSetType = GoogleAdsSearchads360V23ResourcesAssetSet::class;
  protected $assetSetDataType = '';
  protected $assetSetAssetType = GoogleAdsSearchads360V23ResourcesAssetSetAsset::class;
  protected $assetSetAssetDataType = '';
  protected $assetSetTypeViewType = GoogleAdsSearchads360V23ResourcesAssetSetTypeView::class;
  protected $assetSetTypeViewDataType = '';
  protected $audienceType = GoogleAdsSearchads360V23ResourcesAudience::class;
  protected $audienceDataType = '';
  protected $batchJobType = GoogleAdsSearchads360V23ResourcesBatchJob::class;
  protected $batchJobDataType = '';
  protected $biddingDataExclusionType = GoogleAdsSearchads360V23ResourcesBiddingDataExclusion::class;
  protected $biddingDataExclusionDataType = '';
  protected $biddingSeasonalityAdjustmentType = GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment::class;
  protected $biddingSeasonalityAdjustmentDataType = '';
  protected $biddingStrategyType = GoogleAdsSearchads360V23ResourcesBiddingStrategy::class;
  protected $biddingStrategyDataType = '';
  protected $biddingStrategySimulationType = GoogleAdsSearchads360V23ResourcesBiddingStrategySimulation::class;
  protected $biddingStrategySimulationDataType = '';
  protected $billingSetupType = GoogleAdsSearchads360V23ResourcesBillingSetup::class;
  protected $billingSetupDataType = '';
  protected $callViewType = GoogleAdsSearchads360V23ResourcesCallView::class;
  protected $callViewDataType = '';
  protected $campaignType = GoogleAdsSearchads360V23ResourcesCampaign::class;
  protected $campaignDataType = '';
  protected $campaignAssetType = GoogleAdsSearchads360V23ResourcesCampaignAsset::class;
  protected $campaignAssetDataType = '';
  protected $campaignAssetSetType = GoogleAdsSearchads360V23ResourcesCampaignAssetSet::class;
  protected $campaignAssetSetDataType = '';
  protected $campaignAudienceViewType = GoogleAdsSearchads360V23ResourcesCampaignAudienceView::class;
  protected $campaignAudienceViewDataType = '';
  protected $campaignBidModifierType = GoogleAdsSearchads360V23ResourcesCampaignBidModifier::class;
  protected $campaignBidModifierDataType = '';
  protected $campaignBudgetType = GoogleAdsSearchads360V23ResourcesCampaignBudget::class;
  protected $campaignBudgetDataType = '';
  protected $campaignConversionGoalType = GoogleAdsSearchads360V23ResourcesCampaignConversionGoal::class;
  protected $campaignConversionGoalDataType = '';
  protected $campaignCriterionType = GoogleAdsSearchads360V23ResourcesCampaignCriterion::class;
  protected $campaignCriterionDataType = '';
  protected $campaignCustomizerType = GoogleAdsSearchads360V23ResourcesCampaignCustomizer::class;
  protected $campaignCustomizerDataType = '';
  protected $campaignDraftType = GoogleAdsSearchads360V23ResourcesCampaignDraft::class;
  protected $campaignDraftDataType = '';
  protected $campaignEffectiveLabelType = GoogleAdsSearchads360V23ResourcesCampaignEffectiveLabel::class;
  protected $campaignEffectiveLabelDataType = '';
  protected $campaignGoalConfigType = GoogleAdsSearchads360V23ResourcesCampaignGoalConfig::class;
  protected $campaignGoalConfigDataType = '';
  protected $campaignGroupType = GoogleAdsSearchads360V23ResourcesCampaignGroup::class;
  protected $campaignGroupDataType = '';
  protected $campaignLabelType = GoogleAdsSearchads360V23ResourcesCampaignLabel::class;
  protected $campaignLabelDataType = '';
  protected $campaignLifecycleGoalType = GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal::class;
  protected $campaignLifecycleGoalDataType = '';
  protected $campaignSearchTermInsightType = GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight::class;
  protected $campaignSearchTermInsightDataType = '';
  protected $campaignSearchTermViewType = GoogleAdsSearchads360V23ResourcesCampaignSearchTermView::class;
  protected $campaignSearchTermViewDataType = '';
  protected $campaignSharedSetType = GoogleAdsSearchads360V23ResourcesCampaignSharedSet::class;
  protected $campaignSharedSetDataType = '';
  protected $campaignSimulationType = GoogleAdsSearchads360V23ResourcesCampaignSimulation::class;
  protected $campaignSimulationDataType = '';
  protected $carrierConstantType = GoogleAdsSearchads360V23ResourcesCarrierConstant::class;
  protected $carrierConstantDataType = '';
  protected $cartDataSalesViewType = GoogleAdsSearchads360V23ResourcesCartDataSalesView::class;
  protected $cartDataSalesViewDataType = '';
  protected $changeEventType = GoogleAdsSearchads360V23ResourcesChangeEvent::class;
  protected $changeEventDataType = '';
  protected $changeStatusType = GoogleAdsSearchads360V23ResourcesChangeStatus::class;
  protected $changeStatusDataType = '';
  protected $clickViewType = GoogleAdsSearchads360V23ResourcesClickView::class;
  protected $clickViewDataType = '';
  protected $combinedAudienceType = GoogleAdsSearchads360V23ResourcesCombinedAudience::class;
  protected $combinedAudienceDataType = '';
  protected $contentCriterionViewType = GoogleAdsSearchads360V23ResourcesContentCriterionView::class;
  protected $contentCriterionViewDataType = '';
  protected $conversionType = GoogleAdsSearchads360V23ResourcesConversion::class;
  protected $conversionDataType = '';
  protected $conversionActionType = GoogleAdsSearchads360V23ResourcesConversionAction::class;
  protected $conversionActionDataType = '';
  protected $conversionCustomVariableType = GoogleAdsSearchads360V23ResourcesConversionCustomVariable::class;
  protected $conversionCustomVariableDataType = '';
  protected $conversionGoalCampaignConfigType = GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig::class;
  protected $conversionGoalCampaignConfigDataType = '';
  protected $conversionValueRuleType = GoogleAdsSearchads360V23ResourcesConversionValueRule::class;
  protected $conversionValueRuleDataType = '';
  protected $conversionValueRuleSetType = GoogleAdsSearchads360V23ResourcesConversionValueRuleSet::class;
  protected $conversionValueRuleSetDataType = '';
  protected $currencyConstantType = GoogleAdsSearchads360V23ResourcesCurrencyConstant::class;
  protected $currencyConstantDataType = '';
  protected $customAudienceType = GoogleAdsSearchads360V23ResourcesCustomAudience::class;
  protected $customAudienceDataType = '';
  protected $customColumnsType = GoogleAdsSearchads360V23CommonValue::class;
  protected $customColumnsDataType = 'array';
  protected $customConversionGoalType = GoogleAdsSearchads360V23ResourcesCustomConversionGoal::class;
  protected $customConversionGoalDataType = '';
  protected $customInterestType = GoogleAdsSearchads360V23ResourcesCustomInterest::class;
  protected $customInterestDataType = '';
  protected $customerType = GoogleAdsSearchads360V23ResourcesCustomer::class;
  protected $customerDataType = '';
  protected $customerAssetType = GoogleAdsSearchads360V23ResourcesCustomerAsset::class;
  protected $customerAssetDataType = '';
  protected $customerAssetSetType = GoogleAdsSearchads360V23ResourcesCustomerAssetSet::class;
  protected $customerAssetSetDataType = '';
  protected $customerClientType = GoogleAdsSearchads360V23ResourcesCustomerClient::class;
  protected $customerClientDataType = '';
  protected $customerClientLinkType = GoogleAdsSearchads360V23ResourcesCustomerClientLink::class;
  protected $customerClientLinkDataType = '';
  protected $customerConversionGoalType = GoogleAdsSearchads360V23ResourcesCustomerConversionGoal::class;
  protected $customerConversionGoalDataType = '';
  protected $customerCustomizerType = GoogleAdsSearchads360V23ResourcesCustomerCustomizer::class;
  protected $customerCustomizerDataType = '';
  protected $customerLabelType = GoogleAdsSearchads360V23ResourcesCustomerLabel::class;
  protected $customerLabelDataType = '';
  protected $customerLifecycleGoalType = GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal::class;
  protected $customerLifecycleGoalDataType = '';
  protected $customerManagerLinkType = GoogleAdsSearchads360V23ResourcesCustomerManagerLink::class;
  protected $customerManagerLinkDataType = '';
  protected $customerNegativeCriterionType = GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion::class;
  protected $customerNegativeCriterionDataType = '';
  protected $customerSearchTermInsightType = GoogleAdsSearchads360V23ResourcesCustomerSearchTermInsight::class;
  protected $customerSearchTermInsightDataType = '';
  protected $customerUserAccessType = GoogleAdsSearchads360V23ResourcesCustomerUserAccess::class;
  protected $customerUserAccessDataType = '';
  protected $customerUserAccessInvitationType = GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation::class;
  protected $customerUserAccessInvitationDataType = '';
  protected $customizerAttributeType = GoogleAdsSearchads360V23ResourcesCustomizerAttribute::class;
  protected $customizerAttributeDataType = '';
  protected $dataLinkType = GoogleAdsSearchads360V23ResourcesDataLink::class;
  protected $dataLinkDataType = '';
  protected $detailContentSuitabilityPlacementViewType = GoogleAdsSearchads360V23ResourcesDetailContentSuitabilityPlacementView::class;
  protected $detailContentSuitabilityPlacementViewDataType = '';
  protected $detailPlacementViewType = GoogleAdsSearchads360V23ResourcesDetailPlacementView::class;
  protected $detailPlacementViewDataType = '';
  protected $detailedDemographicType = GoogleAdsSearchads360V23ResourcesDetailedDemographic::class;
  protected $detailedDemographicDataType = '';
  protected $displayKeywordViewType = GoogleAdsSearchads360V23ResourcesDisplayKeywordView::class;
  protected $displayKeywordViewDataType = '';
  protected $distanceViewType = GoogleAdsSearchads360V23ResourcesDistanceView::class;
  protected $distanceViewDataType = '';
  protected $dynamicSearchAdsSearchTermViewType = GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView::class;
  protected $dynamicSearchAdsSearchTermViewDataType = '';
  protected $expandedLandingPageViewType = GoogleAdsSearchads360V23ResourcesExpandedLandingPageView::class;
  protected $expandedLandingPageViewDataType = '';
  protected $experimentType = GoogleAdsSearchads360V23ResourcesExperiment::class;
  protected $experimentDataType = '';
  protected $experimentArmType = GoogleAdsSearchads360V23ResourcesExperimentArm::class;
  protected $experimentArmDataType = '';
  protected $finalUrlExpansionAssetViewType = GoogleAdsSearchads360V23ResourcesFinalUrlExpansionAssetView::class;
  protected $finalUrlExpansionAssetViewDataType = '';
  protected $genderViewType = GoogleAdsSearchads360V23ResourcesGenderView::class;
  protected $genderViewDataType = '';
  protected $geoTargetConstantType = GoogleAdsSearchads360V23ResourcesGeoTargetConstant::class;
  protected $geoTargetConstantDataType = '';
  protected $geographicViewType = GoogleAdsSearchads360V23ResourcesGeographicView::class;
  protected $geographicViewDataType = '';
  protected $goalType = GoogleAdsSearchads360V23ResourcesGoal::class;
  protected $goalDataType = '';
  protected $groupContentSuitabilityPlacementViewType = GoogleAdsSearchads360V23ResourcesGroupContentSuitabilityPlacementView::class;
  protected $groupContentSuitabilityPlacementViewDataType = '';
  protected $groupPlacementViewType = GoogleAdsSearchads360V23ResourcesGroupPlacementView::class;
  protected $groupPlacementViewDataType = '';
  protected $hotelGroupViewType = GoogleAdsSearchads360V23ResourcesHotelGroupView::class;
  protected $hotelGroupViewDataType = '';
  protected $hotelPerformanceViewType = GoogleAdsSearchads360V23ResourcesHotelPerformanceView::class;
  protected $hotelPerformanceViewDataType = '';
  protected $hotelReconciliationType = GoogleAdsSearchads360V23ResourcesHotelReconciliation::class;
  protected $hotelReconciliationDataType = '';
  protected $incomeRangeViewType = GoogleAdsSearchads360V23ResourcesIncomeRangeView::class;
  protected $incomeRangeViewDataType = '';
  protected $keywordPlanType = GoogleAdsSearchads360V23ResourcesKeywordPlan::class;
  protected $keywordPlanDataType = '';
  protected $keywordPlanAdGroupType = GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroup::class;
  protected $keywordPlanAdGroupDataType = '';
  protected $keywordPlanAdGroupKeywordType = GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroupKeyword::class;
  protected $keywordPlanAdGroupKeywordDataType = '';
  protected $keywordPlanCampaignType = GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign::class;
  protected $keywordPlanCampaignDataType = '';
  protected $keywordPlanCampaignKeywordType = GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword::class;
  protected $keywordPlanCampaignKeywordDataType = '';
  protected $keywordThemeConstantType = GoogleAdsSearchads360V23ResourcesKeywordThemeConstant::class;
  protected $keywordThemeConstantDataType = '';
  protected $keywordViewType = GoogleAdsSearchads360V23ResourcesKeywordView::class;
  protected $keywordViewDataType = '';
  protected $labelType = GoogleAdsSearchads360V23ResourcesLabel::class;
  protected $labelDataType = '';
  protected $landingPageViewType = GoogleAdsSearchads360V23ResourcesLandingPageView::class;
  protected $landingPageViewDataType = '';
  protected $languageConstantType = GoogleAdsSearchads360V23ResourcesLanguageConstant::class;
  protected $languageConstantDataType = '';
  protected $leadFormSubmissionDataType = GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData::class;
  protected $leadFormSubmissionDataDataType = '';
  protected $lifeEventType = GoogleAdsSearchads360V23ResourcesLifeEvent::class;
  protected $lifeEventDataType = '';
  protected $localServicesEmployeeType = GoogleAdsSearchads360V23ResourcesLocalServicesEmployee::class;
  protected $localServicesEmployeeDataType = '';
  protected $localServicesLeadType = GoogleAdsSearchads360V23ResourcesLocalServicesLead::class;
  protected $localServicesLeadDataType = '';
  protected $localServicesLeadConversationType = GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation::class;
  protected $localServicesLeadConversationDataType = '';
  protected $localServicesVerificationArtifactType = GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact::class;
  protected $localServicesVerificationArtifactDataType = '';
  protected $locationInterestViewType = GoogleAdsSearchads360V23ResourcesLocationInterestView::class;
  protected $locationInterestViewDataType = '';
  protected $locationViewType = GoogleAdsSearchads360V23ResourcesLocationView::class;
  protected $locationViewDataType = '';
  protected $managedPlacementViewType = GoogleAdsSearchads360V23ResourcesManagedPlacementView::class;
  protected $managedPlacementViewDataType = '';
  protected $matchedLocationInterestViewType = GoogleAdsSearchads360V23ResourcesMatchedLocationInterestView::class;
  protected $matchedLocationInterestViewDataType = '';
  protected $mediaFileType = GoogleAdsSearchads360V23ResourcesMediaFile::class;
  protected $mediaFileDataType = '';
  protected $metricsType = GoogleAdsSearchads360V23CommonMetrics::class;
  protected $metricsDataType = '';
  protected $mobileAppCategoryConstantType = GoogleAdsSearchads360V23ResourcesMobileAppCategoryConstant::class;
  protected $mobileAppCategoryConstantDataType = '';
  protected $mobileDeviceConstantType = GoogleAdsSearchads360V23ResourcesMobileDeviceConstant::class;
  protected $mobileDeviceConstantDataType = '';
  protected $offlineConversionUploadClientSummaryType = GoogleAdsSearchads360V23ResourcesOfflineConversionUploadClientSummary::class;
  protected $offlineConversionUploadClientSummaryDataType = '';
  protected $offlineConversionUploadConversionActionSummaryType = GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary::class;
  protected $offlineConversionUploadConversionActionSummaryDataType = '';
  protected $offlineUserDataJobType = GoogleAdsSearchads360V23ResourcesOfflineUserDataJob::class;
  protected $offlineUserDataJobDataType = '';
  protected $operatingSystemVersionConstantType = GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant::class;
  protected $operatingSystemVersionConstantDataType = '';
  protected $paidOrganicSearchTermViewType = GoogleAdsSearchads360V23ResourcesPaidOrganicSearchTermView::class;
  protected $paidOrganicSearchTermViewDataType = '';
  protected $parentalStatusViewType = GoogleAdsSearchads360V23ResourcesParentalStatusView::class;
  protected $parentalStatusViewDataType = '';
  protected $perStoreViewType = GoogleAdsSearchads360V23ResourcesPerStoreView::class;
  protected $perStoreViewDataType = '';
  protected $performanceMaxPlacementViewType = GoogleAdsSearchads360V23ResourcesPerformanceMaxPlacementView::class;
  protected $performanceMaxPlacementViewDataType = '';
  protected $productCategoryConstantType = GoogleAdsSearchads360V23ResourcesProductCategoryConstant::class;
  protected $productCategoryConstantDataType = '';
  protected $productGroupViewType = GoogleAdsSearchads360V23ResourcesProductGroupView::class;
  protected $productGroupViewDataType = '';
  protected $productLinkType = GoogleAdsSearchads360V23ResourcesProductLink::class;
  protected $productLinkDataType = '';
  protected $productLinkInvitationType = GoogleAdsSearchads360V23ResourcesProductLinkInvitation::class;
  protected $productLinkInvitationDataType = '';
  protected $qualifyingQuestionType = GoogleAdsSearchads360V23ResourcesQualifyingQuestion::class;
  protected $qualifyingQuestionDataType = '';
  protected $recommendationType = GoogleAdsSearchads360V23ResourcesRecommendation::class;
  protected $recommendationDataType = '';
  protected $recommendationSubscriptionType = GoogleAdsSearchads360V23ResourcesRecommendationSubscription::class;
  protected $recommendationSubscriptionDataType = '';
  protected $remarketingActionType = GoogleAdsSearchads360V23ResourcesRemarketingAction::class;
  protected $remarketingActionDataType = '';
  protected $searchAds360CampaignType = GoogleAdsSearchads360V23ResourcesSearchAds360Campaign::class;
  protected $searchAds360CampaignDataType = '';
  protected $searchTermViewType = GoogleAdsSearchads360V23ResourcesSearchTermView::class;
  protected $searchTermViewDataType = '';
  protected $segmentsType = GoogleAdsSearchads360V23CommonSegments::class;
  protected $segmentsDataType = '';
  protected $sharedCriterionType = GoogleAdsSearchads360V23ResourcesSharedCriterion::class;
  protected $sharedCriterionDataType = '';
  protected $sharedSetType = GoogleAdsSearchads360V23ResourcesSharedSet::class;
  protected $sharedSetDataType = '';
  protected $shoppingPerformanceViewType = GoogleAdsSearchads360V23ResourcesShoppingPerformanceView::class;
  protected $shoppingPerformanceViewDataType = '';
  protected $shoppingProductType = GoogleAdsSearchads360V23ResourcesShoppingProduct::class;
  protected $shoppingProductDataType = '';
  protected $smartCampaignSearchTermViewType = GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView::class;
  protected $smartCampaignSearchTermViewDataType = '';
  protected $smartCampaignSettingType = GoogleAdsSearchads360V23ResourcesSmartCampaignSetting::class;
  protected $smartCampaignSettingDataType = '';
  protected $targetingExpansionViewType = GoogleAdsSearchads360V23ResourcesTargetingExpansionView::class;
  protected $targetingExpansionViewDataType = '';
  protected $thirdPartyAppAnalyticsLinkType = GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink::class;
  protected $thirdPartyAppAnalyticsLinkDataType = '';
  protected $topicConstantType = GoogleAdsSearchads360V23ResourcesTopicConstant::class;
  protected $topicConstantDataType = '';
  protected $topicViewType = GoogleAdsSearchads360V23ResourcesTopicView::class;
  protected $topicViewDataType = '';
  protected $travelActivityGroupViewType = GoogleAdsSearchads360V23ResourcesTravelActivityGroupView::class;
  protected $travelActivityGroupViewDataType = '';
  protected $travelActivityPerformanceViewType = GoogleAdsSearchads360V23ResourcesTravelActivityPerformanceView::class;
  protected $travelActivityPerformanceViewDataType = '';
  protected $userInterestType = GoogleAdsSearchads360V23ResourcesUserInterest::class;
  protected $userInterestDataType = '';
  protected $userListType = GoogleAdsSearchads360V23ResourcesUserList::class;
  protected $userListDataType = '';
  protected $userListCustomerTypeType = GoogleAdsSearchads360V23ResourcesUserListCustomerType::class;
  protected $userListCustomerTypeDataType = '';
  protected $userLocationViewType = GoogleAdsSearchads360V23ResourcesUserLocationView::class;
  protected $userLocationViewDataType = '';
  protected $videoType = GoogleAdsSearchads360V23ResourcesVideo::class;
  protected $videoDataType = '';
  protected $visitType = GoogleAdsSearchads360V23ResourcesVisit::class;
  protected $visitDataType = '';
  protected $webpageViewType = GoogleAdsSearchads360V23ResourcesWebpageView::class;
  protected $webpageViewDataType = '';

  /**
   * The accessible bidding strategy referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAccessibleBiddingStrategy $accessibleBiddingStrategy
   */
  public function setAccessibleBiddingStrategy(GoogleAdsSearchads360V23ResourcesAccessibleBiddingStrategy $accessibleBiddingStrategy)
  {
    $this->accessibleBiddingStrategy = $accessibleBiddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAccessibleBiddingStrategy
   */
  public function getAccessibleBiddingStrategy()
  {
    return $this->accessibleBiddingStrategy;
  }
  /**
   * The account budget in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAccountBudget $accountBudget
   */
  public function setAccountBudget(GoogleAdsSearchads360V23ResourcesAccountBudget $accountBudget)
  {
    $this->accountBudget = $accountBudget;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAccountBudget
   */
  public function getAccountBudget()
  {
    return $this->accountBudget;
  }
  /**
   * The account budget proposal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAccountBudgetProposal $accountBudgetProposal
   */
  public function setAccountBudgetProposal(GoogleAdsSearchads360V23ResourcesAccountBudgetProposal $accountBudgetProposal)
  {
    $this->accountBudgetProposal = $accountBudgetProposal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAccountBudgetProposal
   */
  public function getAccountBudgetProposal()
  {
    return $this->accountBudgetProposal;
  }
  /**
   * The AccountLink referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAccountLink $accountLink
   */
  public function setAccountLink(GoogleAdsSearchads360V23ResourcesAccountLink $accountLink)
  {
    $this->accountLink = $accountLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAccountLink
   */
  public function getAccountLink()
  {
    return $this->accountLink;
  }
  /**
   * The Ad referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAd $ad
   */
  public function setAd(GoogleAdsSearchads360V23ResourcesAd $ad)
  {
    $this->ad = $ad;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAd
   */
  public function getAd()
  {
    return $this->ad;
  }
  /**
   * The ad group referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroup $adGroup
   */
  public function setAdGroup(GoogleAdsSearchads360V23ResourcesAdGroup $adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroup
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * The ad referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAd $adGroupAd
   */
  public function setAdGroupAd(GoogleAdsSearchads360V23ResourcesAdGroupAd $adGroupAd)
  {
    $this->adGroupAd = $adGroupAd;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAd
   */
  public function getAdGroupAd()
  {
    return $this->adGroupAd;
  }
  /**
   * The ad group ad asset combination view in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView $adGroupAdAssetCombinationView
   */
  public function setAdGroupAdAssetCombinationView(GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView $adGroupAdAssetCombinationView)
  {
    $this->adGroupAdAssetCombinationView = $adGroupAdAssetCombinationView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView
   */
  public function getAdGroupAdAssetCombinationView()
  {
    return $this->adGroupAdAssetCombinationView;
  }
  /**
   * The ad group ad asset view in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView $adGroupAdAssetView
   */
  public function setAdGroupAdAssetView(GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView $adGroupAdAssetView)
  {
    $this->adGroupAdAssetView = $adGroupAdAssetView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdAssetView
   */
  public function getAdGroupAdAssetView()
  {
    return $this->adGroupAdAssetView;
  }
  /**
   * The ad group ad effective label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdEffectiveLabel $adGroupAdEffectiveLabel
   */
  public function setAdGroupAdEffectiveLabel(GoogleAdsSearchads360V23ResourcesAdGroupAdEffectiveLabel $adGroupAdEffectiveLabel)
  {
    $this->adGroupAdEffectiveLabel = $adGroupAdEffectiveLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdEffectiveLabel
   */
  public function getAdGroupAdEffectiveLabel()
  {
    return $this->adGroupAdEffectiveLabel;
  }
  /**
   * The ad group ad label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdLabel $adGroupAdLabel
   */
  public function setAdGroupAdLabel(GoogleAdsSearchads360V23ResourcesAdGroupAdLabel $adGroupAdLabel)
  {
    $this->adGroupAdLabel = $adGroupAdLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdLabel
   */
  public function getAdGroupAdLabel()
  {
    return $this->adGroupAdLabel;
  }
  /**
   * The ad group asset referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAsset $adGroupAsset
   */
  public function setAdGroupAsset(GoogleAdsSearchads360V23ResourcesAdGroupAsset $adGroupAsset)
  {
    $this->adGroupAsset = $adGroupAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAsset
   */
  public function getAdGroupAsset()
  {
    return $this->adGroupAsset;
  }
  /**
   * The ad group asset set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAssetSet $adGroupAssetSet
   */
  public function setAdGroupAssetSet(GoogleAdsSearchads360V23ResourcesAdGroupAssetSet $adGroupAssetSet)
  {
    $this->adGroupAssetSet = $adGroupAssetSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAssetSet
   */
  public function getAdGroupAssetSet()
  {
    return $this->adGroupAssetSet;
  }
  /**
   * The ad group audience view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAudienceView $adGroupAudienceView
   */
  public function setAdGroupAudienceView(GoogleAdsSearchads360V23ResourcesAdGroupAudienceView $adGroupAudienceView)
  {
    $this->adGroupAudienceView = $adGroupAudienceView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAudienceView
   */
  public function getAdGroupAudienceView()
  {
    return $this->adGroupAudienceView;
  }
  /**
   * The bid modifier referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupBidModifier $adGroupBidModifier
   */
  public function setAdGroupBidModifier(GoogleAdsSearchads360V23ResourcesAdGroupBidModifier $adGroupBidModifier)
  {
    $this->adGroupBidModifier = $adGroupBidModifier;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupBidModifier
   */
  public function getAdGroupBidModifier()
  {
    return $this->adGroupBidModifier;
  }
  /**
   * The criterion referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterion $adGroupCriterion
   */
  public function setAdGroupCriterion(GoogleAdsSearchads360V23ResourcesAdGroupCriterion $adGroupCriterion)
  {
    $this->adGroupCriterion = $adGroupCriterion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterion
   */
  public function getAdGroupCriterion()
  {
    return $this->adGroupCriterion;
  }
  /**
   * The ad group criterion customizer referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterionCustomizer $adGroupCriterionCustomizer
   */
  public function setAdGroupCriterionCustomizer(GoogleAdsSearchads360V23ResourcesAdGroupCriterionCustomizer $adGroupCriterionCustomizer)
  {
    $this->adGroupCriterionCustomizer = $adGroupCriterionCustomizer;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterionCustomizer
   */
  public function getAdGroupCriterionCustomizer()
  {
    return $this->adGroupCriterionCustomizer;
  }
  /**
   * The ad group criterion effective label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterionEffectiveLabel $adGroupCriterionEffectiveLabel
   */
  public function setAdGroupCriterionEffectiveLabel(GoogleAdsSearchads360V23ResourcesAdGroupCriterionEffectiveLabel $adGroupCriterionEffectiveLabel)
  {
    $this->adGroupCriterionEffectiveLabel = $adGroupCriterionEffectiveLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterionEffectiveLabel
   */
  public function getAdGroupCriterionEffectiveLabel()
  {
    return $this->adGroupCriterionEffectiveLabel;
  }
  /**
   * The ad group criterion label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterionLabel $adGroupCriterionLabel
   */
  public function setAdGroupCriterionLabel(GoogleAdsSearchads360V23ResourcesAdGroupCriterionLabel $adGroupCriterionLabel)
  {
    $this->adGroupCriterionLabel = $adGroupCriterionLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterionLabel
   */
  public function getAdGroupCriterionLabel()
  {
    return $this->adGroupCriterionLabel;
  }
  /**
   * The ad group criterion simulation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation $adGroupCriterionSimulation
   */
  public function setAdGroupCriterionSimulation(GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation $adGroupCriterionSimulation)
  {
    $this->adGroupCriterionSimulation = $adGroupCriterionSimulation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterionSimulation
   */
  public function getAdGroupCriterionSimulation()
  {
    return $this->adGroupCriterionSimulation;
  }
  /**
   * The ad group customizer referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCustomizer $adGroupCustomizer
   */
  public function setAdGroupCustomizer(GoogleAdsSearchads360V23ResourcesAdGroupCustomizer $adGroupCustomizer)
  {
    $this->adGroupCustomizer = $adGroupCustomizer;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCustomizer
   */
  public function getAdGroupCustomizer()
  {
    return $this->adGroupCustomizer;
  }
  /**
   * The ad group effective label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupEffectiveLabel $adGroupEffectiveLabel
   */
  public function setAdGroupEffectiveLabel(GoogleAdsSearchads360V23ResourcesAdGroupEffectiveLabel $adGroupEffectiveLabel)
  {
    $this->adGroupEffectiveLabel = $adGroupEffectiveLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupEffectiveLabel
   */
  public function getAdGroupEffectiveLabel()
  {
    return $this->adGroupEffectiveLabel;
  }
  /**
   * The ad group label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupLabel $adGroupLabel
   */
  public function setAdGroupLabel(GoogleAdsSearchads360V23ResourcesAdGroupLabel $adGroupLabel)
  {
    $this->adGroupLabel = $adGroupLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupLabel
   */
  public function getAdGroupLabel()
  {
    return $this->adGroupLabel;
  }
  /**
   * The ad group simulation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupSimulation $adGroupSimulation
   */
  public function setAdGroupSimulation(GoogleAdsSearchads360V23ResourcesAdGroupSimulation $adGroupSimulation)
  {
    $this->adGroupSimulation = $adGroupSimulation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupSimulation
   */
  public function getAdGroupSimulation()
  {
    return $this->adGroupSimulation;
  }
  /**
   * The ad parameter referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdParameter $adParameter
   */
  public function setAdParameter(GoogleAdsSearchads360V23ResourcesAdParameter $adParameter)
  {
    $this->adParameter = $adParameter;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdParameter
   */
  public function getAdParameter()
  {
    return $this->adParameter;
  }
  /**
   * The ad schedule view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdScheduleView $adScheduleView
   */
  public function setAdScheduleView(GoogleAdsSearchads360V23ResourcesAdScheduleView $adScheduleView)
  {
    $this->adScheduleView = $adScheduleView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdScheduleView
   */
  public function getAdScheduleView()
  {
    return $this->adScheduleView;
  }
  /**
   * The age range view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAgeRangeView $ageRangeView
   */
  public function setAgeRangeView(GoogleAdsSearchads360V23ResourcesAgeRangeView $ageRangeView)
  {
    $this->ageRangeView = $ageRangeView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAgeRangeView
   */
  public function getAgeRangeView()
  {
    return $this->ageRangeView;
  }
  /**
   * The AI Max search term ad combination view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView $aiMaxSearchTermAdCombinationView
   */
  public function setAiMaxSearchTermAdCombinationView(GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView $aiMaxSearchTermAdCombinationView)
  {
    $this->aiMaxSearchTermAdCombinationView = $aiMaxSearchTermAdCombinationView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAiMaxSearchTermAdCombinationView
   */
  public function getAiMaxSearchTermAdCombinationView()
  {
    return $this->aiMaxSearchTermAdCombinationView;
  }
  /**
   * The android privacy shared key google ad group referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleAdGroup $androidPrivacySharedKeyGoogleAdGroup
   */
  public function setAndroidPrivacySharedKeyGoogleAdGroup(GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleAdGroup $androidPrivacySharedKeyGoogleAdGroup)
  {
    $this->androidPrivacySharedKeyGoogleAdGroup = $androidPrivacySharedKeyGoogleAdGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleAdGroup
   */
  public function getAndroidPrivacySharedKeyGoogleAdGroup()
  {
    return $this->androidPrivacySharedKeyGoogleAdGroup;
  }
  /**
   * The android privacy shared key google campaign referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign $androidPrivacySharedKeyGoogleCampaign
   */
  public function setAndroidPrivacySharedKeyGoogleCampaign(GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign $androidPrivacySharedKeyGoogleCampaign)
  {
    $this->androidPrivacySharedKeyGoogleCampaign = $androidPrivacySharedKeyGoogleCampaign;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleCampaign
   */
  public function getAndroidPrivacySharedKeyGoogleCampaign()
  {
    return $this->androidPrivacySharedKeyGoogleCampaign;
  }
  /**
   * The android privacy shared key google network type referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleNetworkType $androidPrivacySharedKeyGoogleNetworkType
   */
  public function setAndroidPrivacySharedKeyGoogleNetworkType(GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleNetworkType $androidPrivacySharedKeyGoogleNetworkType)
  {
    $this->androidPrivacySharedKeyGoogleNetworkType = $androidPrivacySharedKeyGoogleNetworkType;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAndroidPrivacySharedKeyGoogleNetworkType
   */
  public function getAndroidPrivacySharedKeyGoogleNetworkType()
  {
    return $this->androidPrivacySharedKeyGoogleNetworkType;
  }
  /**
   * The asset referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset $asset
   */
  public function setAsset(GoogleAdsSearchads360V23ResourcesAsset $asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * The asset field type view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetFieldTypeView $assetFieldTypeView
   */
  public function setAssetFieldTypeView(GoogleAdsSearchads360V23ResourcesAssetFieldTypeView $assetFieldTypeView)
  {
    $this->assetFieldTypeView = $assetFieldTypeView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetFieldTypeView
   */
  public function getAssetFieldTypeView()
  {
    return $this->assetFieldTypeView;
  }
  /**
   * The asset group referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroup $assetGroup
   */
  public function setAssetGroup(GoogleAdsSearchads360V23ResourcesAssetGroup $assetGroup)
  {
    $this->assetGroup = $assetGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroup
   */
  public function getAssetGroup()
  {
    return $this->assetGroup;
  }
  /**
   * The asset group asset referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroupAsset $assetGroupAsset
   */
  public function setAssetGroupAsset(GoogleAdsSearchads360V23ResourcesAssetGroupAsset $assetGroupAsset)
  {
    $this->assetGroupAsset = $assetGroupAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroupAsset
   */
  public function getAssetGroupAsset()
  {
    return $this->assetGroupAsset;
  }
  /**
   * The asset group listing group filter referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter $assetGroupListingGroupFilter
   */
  public function setAssetGroupListingGroupFilter(GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter $assetGroupListingGroupFilter)
  {
    $this->assetGroupListingGroupFilter = $assetGroupListingGroupFilter;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroupListingGroupFilter
   */
  public function getAssetGroupListingGroupFilter()
  {
    return $this->assetGroupListingGroupFilter;
  }
  /**
   * The asset group product group view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroupProductGroupView $assetGroupProductGroupView
   */
  public function setAssetGroupProductGroupView(GoogleAdsSearchads360V23ResourcesAssetGroupProductGroupView $assetGroupProductGroupView)
  {
    $this->assetGroupProductGroupView = $assetGroupProductGroupView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroupProductGroupView
   */
  public function getAssetGroupProductGroupView()
  {
    return $this->assetGroupProductGroupView;
  }
  /**
   * The asset group signal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroupSignal $assetGroupSignal
   */
  public function setAssetGroupSignal(GoogleAdsSearchads360V23ResourcesAssetGroupSignal $assetGroupSignal)
  {
    $this->assetGroupSignal = $assetGroupSignal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroupSignal
   */
  public function getAssetGroupSignal()
  {
    return $this->assetGroupSignal;
  }
  /**
   * The asset group top combination view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetGroupTopCombinationView $assetGroupTopCombinationView
   */
  public function setAssetGroupTopCombinationView(GoogleAdsSearchads360V23ResourcesAssetGroupTopCombinationView $assetGroupTopCombinationView)
  {
    $this->assetGroupTopCombinationView = $assetGroupTopCombinationView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetGroupTopCombinationView
   */
  public function getAssetGroupTopCombinationView()
  {
    return $this->assetGroupTopCombinationView;
  }
  /**
   * The asset set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSet $assetSet
   */
  public function setAssetSet(GoogleAdsSearchads360V23ResourcesAssetSet $assetSet)
  {
    $this->assetSet = $assetSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSet
   */
  public function getAssetSet()
  {
    return $this->assetSet;
  }
  /**
   * The asset set asset referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSetAsset $assetSetAsset
   */
  public function setAssetSetAsset(GoogleAdsSearchads360V23ResourcesAssetSetAsset $assetSetAsset)
  {
    $this->assetSetAsset = $assetSetAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSetAsset
   */
  public function getAssetSetAsset()
  {
    return $this->assetSetAsset;
  }
  /**
   * The asset set type view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSetTypeView $assetSetTypeView
   */
  public function setAssetSetTypeView(GoogleAdsSearchads360V23ResourcesAssetSetTypeView $assetSetTypeView)
  {
    $this->assetSetTypeView = $assetSetTypeView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSetTypeView
   */
  public function getAssetSetTypeView()
  {
    return $this->assetSetTypeView;
  }
  /**
   * The Audience referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesAudience $audience
   */
  public function setAudience(GoogleAdsSearchads360V23ResourcesAudience $audience)
  {
    $this->audience = $audience;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAudience
   */
  public function getAudience()
  {
    return $this->audience;
  }
  /**
   * The batch job referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesBatchJob $batchJob
   */
  public function setBatchJob(GoogleAdsSearchads360V23ResourcesBatchJob $batchJob)
  {
    $this->batchJob = $batchJob;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBatchJob
   */
  public function getBatchJob()
  {
    return $this->batchJob;
  }
  /**
   * The bidding data exclusion referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesBiddingDataExclusion $biddingDataExclusion
   */
  public function setBiddingDataExclusion(GoogleAdsSearchads360V23ResourcesBiddingDataExclusion $biddingDataExclusion)
  {
    $this->biddingDataExclusion = $biddingDataExclusion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBiddingDataExclusion
   */
  public function getBiddingDataExclusion()
  {
    return $this->biddingDataExclusion;
  }
  /**
   * The bidding seasonality adjustment referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment $biddingSeasonalityAdjustment
   */
  public function setBiddingSeasonalityAdjustment(GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment $biddingSeasonalityAdjustment)
  {
    $this->biddingSeasonalityAdjustment = $biddingSeasonalityAdjustment;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment
   */
  public function getBiddingSeasonalityAdjustment()
  {
    return $this->biddingSeasonalityAdjustment;
  }
  /**
   * The bidding strategy referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesBiddingStrategy $biddingStrategy
   */
  public function setBiddingStrategy(GoogleAdsSearchads360V23ResourcesBiddingStrategy $biddingStrategy)
  {
    $this->biddingStrategy = $biddingStrategy;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBiddingStrategy
   */
  public function getBiddingStrategy()
  {
    return $this->biddingStrategy;
  }
  /**
   * The bidding strategy simulation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesBiddingStrategySimulation $biddingStrategySimulation
   */
  public function setBiddingStrategySimulation(GoogleAdsSearchads360V23ResourcesBiddingStrategySimulation $biddingStrategySimulation)
  {
    $this->biddingStrategySimulation = $biddingStrategySimulation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBiddingStrategySimulation
   */
  public function getBiddingStrategySimulation()
  {
    return $this->biddingStrategySimulation;
  }
  /**
   * The billing setup referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesBillingSetup $billingSetup
   */
  public function setBillingSetup(GoogleAdsSearchads360V23ResourcesBillingSetup $billingSetup)
  {
    $this->billingSetup = $billingSetup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBillingSetup
   */
  public function getBillingSetup()
  {
    return $this->billingSetup;
  }
  /**
   * The call view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCallView $callView
   */
  public function setCallView(GoogleAdsSearchads360V23ResourcesCallView $callView)
  {
    $this->callView = $callView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCallView
   */
  public function getCallView()
  {
    return $this->callView;
  }
  /**
   * The campaign referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaign $campaign
   */
  public function setCampaign(GoogleAdsSearchads360V23ResourcesCampaign $campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaign
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * The campaign asset referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAsset $campaignAsset
   */
  public function setCampaignAsset(GoogleAdsSearchads360V23ResourcesCampaignAsset $campaignAsset)
  {
    $this->campaignAsset = $campaignAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAsset
   */
  public function getCampaignAsset()
  {
    return $this->campaignAsset;
  }
  /**
   * The campaign asset set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAssetSet $campaignAssetSet
   */
  public function setCampaignAssetSet(GoogleAdsSearchads360V23ResourcesCampaignAssetSet $campaignAssetSet)
  {
    $this->campaignAssetSet = $campaignAssetSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAssetSet
   */
  public function getCampaignAssetSet()
  {
    return $this->campaignAssetSet;
  }
  /**
   * The campaign audience view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAudienceView $campaignAudienceView
   */
  public function setCampaignAudienceView(GoogleAdsSearchads360V23ResourcesCampaignAudienceView $campaignAudienceView)
  {
    $this->campaignAudienceView = $campaignAudienceView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAudienceView
   */
  public function getCampaignAudienceView()
  {
    return $this->campaignAudienceView;
  }
  /**
   * The campaign bid modifier referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignBidModifier $campaignBidModifier
   */
  public function setCampaignBidModifier(GoogleAdsSearchads360V23ResourcesCampaignBidModifier $campaignBidModifier)
  {
    $this->campaignBidModifier = $campaignBidModifier;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignBidModifier
   */
  public function getCampaignBidModifier()
  {
    return $this->campaignBidModifier;
  }
  /**
   * The campaign budget referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignBudget $campaignBudget
   */
  public function setCampaignBudget(GoogleAdsSearchads360V23ResourcesCampaignBudget $campaignBudget)
  {
    $this->campaignBudget = $campaignBudget;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignBudget
   */
  public function getCampaignBudget()
  {
    return $this->campaignBudget;
  }
  /**
   * The CampaignConversionGoal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignConversionGoal $campaignConversionGoal
   */
  public function setCampaignConversionGoal(GoogleAdsSearchads360V23ResourcesCampaignConversionGoal $campaignConversionGoal)
  {
    $this->campaignConversionGoal = $campaignConversionGoal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignConversionGoal
   */
  public function getCampaignConversionGoal()
  {
    return $this->campaignConversionGoal;
  }
  /**
   * The campaign criterion referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignCriterion $campaignCriterion
   */
  public function setCampaignCriterion(GoogleAdsSearchads360V23ResourcesCampaignCriterion $campaignCriterion)
  {
    $this->campaignCriterion = $campaignCriterion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignCriterion
   */
  public function getCampaignCriterion()
  {
    return $this->campaignCriterion;
  }
  /**
   * The campaign customizer referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignCustomizer $campaignCustomizer
   */
  public function setCampaignCustomizer(GoogleAdsSearchads360V23ResourcesCampaignCustomizer $campaignCustomizer)
  {
    $this->campaignCustomizer = $campaignCustomizer;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignCustomizer
   */
  public function getCampaignCustomizer()
  {
    return $this->campaignCustomizer;
  }
  /**
   * The campaign draft referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignDraft $campaignDraft
   */
  public function setCampaignDraft(GoogleAdsSearchads360V23ResourcesCampaignDraft $campaignDraft)
  {
    $this->campaignDraft = $campaignDraft;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignDraft
   */
  public function getCampaignDraft()
  {
    return $this->campaignDraft;
  }
  /**
   * The campaign effective label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignEffectiveLabel $campaignEffectiveLabel
   */
  public function setCampaignEffectiveLabel(GoogleAdsSearchads360V23ResourcesCampaignEffectiveLabel $campaignEffectiveLabel)
  {
    $this->campaignEffectiveLabel = $campaignEffectiveLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignEffectiveLabel
   */
  public function getCampaignEffectiveLabel()
  {
    return $this->campaignEffectiveLabel;
  }
  /**
   * The campaign goal config referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignGoalConfig $campaignGoalConfig
   */
  public function setCampaignGoalConfig(GoogleAdsSearchads360V23ResourcesCampaignGoalConfig $campaignGoalConfig)
  {
    $this->campaignGoalConfig = $campaignGoalConfig;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignGoalConfig
   */
  public function getCampaignGoalConfig()
  {
    return $this->campaignGoalConfig;
  }
  /**
   * Campaign Group referenced in AWQL query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignGroup $campaignGroup
   */
  public function setCampaignGroup(GoogleAdsSearchads360V23ResourcesCampaignGroup $campaignGroup)
  {
    $this->campaignGroup = $campaignGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignGroup
   */
  public function getCampaignGroup()
  {
    return $this->campaignGroup;
  }
  /**
   * The campaign label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignLabel $campaignLabel
   */
  public function setCampaignLabel(GoogleAdsSearchads360V23ResourcesCampaignLabel $campaignLabel)
  {
    $this->campaignLabel = $campaignLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignLabel
   */
  public function getCampaignLabel()
  {
    return $this->campaignLabel;
  }
  /**
   * The campaign lifecycle goal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal $campaignLifecycleGoal
   */
  public function setCampaignLifecycleGoal(GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal $campaignLifecycleGoal)
  {
    $this->campaignLifecycleGoal = $campaignLifecycleGoal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal
   */
  public function getCampaignLifecycleGoal()
  {
    return $this->campaignLifecycleGoal;
  }
  /**
   * The campaign search term insight referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight $campaignSearchTermInsight
   */
  public function setCampaignSearchTermInsight(GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight $campaignSearchTermInsight)
  {
    $this->campaignSearchTermInsight = $campaignSearchTermInsight;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignSearchTermInsight
   */
  public function getCampaignSearchTermInsight()
  {
    return $this->campaignSearchTermInsight;
  }
  /**
   * The campaign-level search term view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignSearchTermView $campaignSearchTermView
   */
  public function setCampaignSearchTermView(GoogleAdsSearchads360V23ResourcesCampaignSearchTermView $campaignSearchTermView)
  {
    $this->campaignSearchTermView = $campaignSearchTermView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignSearchTermView
   */
  public function getCampaignSearchTermView()
  {
    return $this->campaignSearchTermView;
  }
  /**
   * Campaign Shared Set referenced in AWQL query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignSharedSet $campaignSharedSet
   */
  public function setCampaignSharedSet(GoogleAdsSearchads360V23ResourcesCampaignSharedSet $campaignSharedSet)
  {
    $this->campaignSharedSet = $campaignSharedSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignSharedSet
   */
  public function getCampaignSharedSet()
  {
    return $this->campaignSharedSet;
  }
  /**
   * The campaign simulation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignSimulation $campaignSimulation
   */
  public function setCampaignSimulation(GoogleAdsSearchads360V23ResourcesCampaignSimulation $campaignSimulation)
  {
    $this->campaignSimulation = $campaignSimulation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignSimulation
   */
  public function getCampaignSimulation()
  {
    return $this->campaignSimulation;
  }
  /**
   * The carrier constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCarrierConstant $carrierConstant
   */
  public function setCarrierConstant(GoogleAdsSearchads360V23ResourcesCarrierConstant $carrierConstant)
  {
    $this->carrierConstant = $carrierConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCarrierConstant
   */
  public function getCarrierConstant()
  {
    return $this->carrierConstant;
  }
  /**
   * The cart data sales view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCartDataSalesView $cartDataSalesView
   */
  public function setCartDataSalesView(GoogleAdsSearchads360V23ResourcesCartDataSalesView $cartDataSalesView)
  {
    $this->cartDataSalesView = $cartDataSalesView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCartDataSalesView
   */
  public function getCartDataSalesView()
  {
    return $this->cartDataSalesView;
  }
  /**
   * The ChangeEvent referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesChangeEvent $changeEvent
   */
  public function setChangeEvent(GoogleAdsSearchads360V23ResourcesChangeEvent $changeEvent)
  {
    $this->changeEvent = $changeEvent;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesChangeEvent
   */
  public function getChangeEvent()
  {
    return $this->changeEvent;
  }
  /**
   * The ChangeStatus referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesChangeStatus $changeStatus
   */
  public function setChangeStatus(GoogleAdsSearchads360V23ResourcesChangeStatus $changeStatus)
  {
    $this->changeStatus = $changeStatus;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesChangeStatus
   */
  public function getChangeStatus()
  {
    return $this->changeStatus;
  }
  /**
   * The ClickView referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesClickView $clickView
   */
  public function setClickView(GoogleAdsSearchads360V23ResourcesClickView $clickView)
  {
    $this->clickView = $clickView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesClickView
   */
  public function getClickView()
  {
    return $this->clickView;
  }
  /**
   * The CombinedAudience referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCombinedAudience $combinedAudience
   */
  public function setCombinedAudience(GoogleAdsSearchads360V23ResourcesCombinedAudience $combinedAudience)
  {
    $this->combinedAudience = $combinedAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCombinedAudience
   */
  public function getCombinedAudience()
  {
    return $this->combinedAudience;
  }
  /**
   * The content criterion view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesContentCriterionView $contentCriterionView
   */
  public function setContentCriterionView(GoogleAdsSearchads360V23ResourcesContentCriterionView $contentCriterionView)
  {
    $this->contentCriterionView = $contentCriterionView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesContentCriterionView
   */
  public function getContentCriterionView()
  {
    return $this->contentCriterionView;
  }
  /**
   * The event level conversion referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversion $conversion
   */
  public function setConversion(GoogleAdsSearchads360V23ResourcesConversion $conversion)
  {
    $this->conversion = $conversion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversion
   */
  public function getConversion()
  {
    return $this->conversion;
  }
  /**
   * The conversion action referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionAction $conversionAction
   */
  public function setConversionAction(GoogleAdsSearchads360V23ResourcesConversionAction $conversionAction)
  {
    $this->conversionAction = $conversionAction;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionAction
   */
  public function getConversionAction()
  {
    return $this->conversionAction;
  }
  /**
   * The conversion custom variable referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionCustomVariable $conversionCustomVariable
   */
  public function setConversionCustomVariable(GoogleAdsSearchads360V23ResourcesConversionCustomVariable $conversionCustomVariable)
  {
    $this->conversionCustomVariable = $conversionCustomVariable;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionCustomVariable
   */
  public function getConversionCustomVariable()
  {
    return $this->conversionCustomVariable;
  }
  /**
   * The ConversionGoalCampaignConfig referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig $conversionGoalCampaignConfig
   */
  public function setConversionGoalCampaignConfig(GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig $conversionGoalCampaignConfig)
  {
    $this->conversionGoalCampaignConfig = $conversionGoalCampaignConfig;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig
   */
  public function getConversionGoalCampaignConfig()
  {
    return $this->conversionGoalCampaignConfig;
  }
  /**
   * The conversion value rule referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRule $conversionValueRule
   */
  public function setConversionValueRule(GoogleAdsSearchads360V23ResourcesConversionValueRule $conversionValueRule)
  {
    $this->conversionValueRule = $conversionValueRule;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRule
   */
  public function getConversionValueRule()
  {
    return $this->conversionValueRule;
  }
  /**
   * The conversion value rule set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleSet $conversionValueRuleSet
   */
  public function setConversionValueRuleSet(GoogleAdsSearchads360V23ResourcesConversionValueRuleSet $conversionValueRuleSet)
  {
    $this->conversionValueRuleSet = $conversionValueRuleSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleSet
   */
  public function getConversionValueRuleSet()
  {
    return $this->conversionValueRuleSet;
  }
  /**
   * The currency constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCurrencyConstant $currencyConstant
   */
  public function setCurrencyConstant(GoogleAdsSearchads360V23ResourcesCurrencyConstant $currencyConstant)
  {
    $this->currencyConstant = $currencyConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCurrencyConstant
   */
  public function getCurrencyConstant()
  {
    return $this->currencyConstant;
  }
  /**
   * The CustomAudience referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomAudience $customAudience
   */
  public function setCustomAudience(GoogleAdsSearchads360V23ResourcesCustomAudience $customAudience)
  {
    $this->customAudience = $customAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomAudience
   */
  public function getCustomAudience()
  {
    return $this->customAudience;
  }
  /**
   * The custom columns.
   *
   * @param GoogleAdsSearchads360V23CommonValue[] $customColumns
   */
  public function setCustomColumns($customColumns)
  {
    $this->customColumns = $customColumns;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonValue[]
   */
  public function getCustomColumns()
  {
    return $this->customColumns;
  }
  /**
   * The CustomConversionGoal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomConversionGoal $customConversionGoal
   */
  public function setCustomConversionGoal(GoogleAdsSearchads360V23ResourcesCustomConversionGoal $customConversionGoal)
  {
    $this->customConversionGoal = $customConversionGoal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomConversionGoal
   */
  public function getCustomConversionGoal()
  {
    return $this->customConversionGoal;
  }
  /**
   * The CustomInterest referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomInterest $customInterest
   */
  public function setCustomInterest(GoogleAdsSearchads360V23ResourcesCustomInterest $customInterest)
  {
    $this->customInterest = $customInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomInterest
   */
  public function getCustomInterest()
  {
    return $this->customInterest;
  }
  /**
   * The customer referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomer $customer
   */
  public function setCustomer(GoogleAdsSearchads360V23ResourcesCustomer $customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomer
   */
  public function getCustomer()
  {
    return $this->customer;
  }
  /**
   * The customer asset referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerAsset $customerAsset
   */
  public function setCustomerAsset(GoogleAdsSearchads360V23ResourcesCustomerAsset $customerAsset)
  {
    $this->customerAsset = $customerAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerAsset
   */
  public function getCustomerAsset()
  {
    return $this->customerAsset;
  }
  /**
   * The customer asset set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerAssetSet $customerAssetSet
   */
  public function setCustomerAssetSet(GoogleAdsSearchads360V23ResourcesCustomerAssetSet $customerAssetSet)
  {
    $this->customerAssetSet = $customerAssetSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerAssetSet
   */
  public function getCustomerAssetSet()
  {
    return $this->customerAssetSet;
  }
  /**
   * The CustomerClient referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerClient $customerClient
   */
  public function setCustomerClient(GoogleAdsSearchads360V23ResourcesCustomerClient $customerClient)
  {
    $this->customerClient = $customerClient;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerClient
   */
  public function getCustomerClient()
  {
    return $this->customerClient;
  }
  /**
   * The CustomerClientLink referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerClientLink $customerClientLink
   */
  public function setCustomerClientLink(GoogleAdsSearchads360V23ResourcesCustomerClientLink $customerClientLink)
  {
    $this->customerClientLink = $customerClientLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerClientLink
   */
  public function getCustomerClientLink()
  {
    return $this->customerClientLink;
  }
  /**
   * The CustomerConversionGoal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerConversionGoal $customerConversionGoal
   */
  public function setCustomerConversionGoal(GoogleAdsSearchads360V23ResourcesCustomerConversionGoal $customerConversionGoal)
  {
    $this->customerConversionGoal = $customerConversionGoal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerConversionGoal
   */
  public function getCustomerConversionGoal()
  {
    return $this->customerConversionGoal;
  }
  /**
   * The customer customizer referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerCustomizer $customerCustomizer
   */
  public function setCustomerCustomizer(GoogleAdsSearchads360V23ResourcesCustomerCustomizer $customerCustomizer)
  {
    $this->customerCustomizer = $customerCustomizer;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerCustomizer
   */
  public function getCustomerCustomizer()
  {
    return $this->customerCustomizer;
  }
  /**
   * The customer label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerLabel $customerLabel
   */
  public function setCustomerLabel(GoogleAdsSearchads360V23ResourcesCustomerLabel $customerLabel)
  {
    $this->customerLabel = $customerLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerLabel
   */
  public function getCustomerLabel()
  {
    return $this->customerLabel;
  }
  /**
   * The customer lifecycle goal referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal $customerLifecycleGoal
   */
  public function setCustomerLifecycleGoal(GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal $customerLifecycleGoal)
  {
    $this->customerLifecycleGoal = $customerLifecycleGoal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal
   */
  public function getCustomerLifecycleGoal()
  {
    return $this->customerLifecycleGoal;
  }
  /**
   * The CustomerManagerLink referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerManagerLink $customerManagerLink
   */
  public function setCustomerManagerLink(GoogleAdsSearchads360V23ResourcesCustomerManagerLink $customerManagerLink)
  {
    $this->customerManagerLink = $customerManagerLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerManagerLink
   */
  public function getCustomerManagerLink()
  {
    return $this->customerManagerLink;
  }
  /**
   * The customer negative criterion referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion $customerNegativeCriterion
   */
  public function setCustomerNegativeCriterion(GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion $customerNegativeCriterion)
  {
    $this->customerNegativeCriterion = $customerNegativeCriterion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion
   */
  public function getCustomerNegativeCriterion()
  {
    return $this->customerNegativeCriterion;
  }
  /**
   * The customer search term insight referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSearchTermInsight $customerSearchTermInsight
   */
  public function setCustomerSearchTermInsight(GoogleAdsSearchads360V23ResourcesCustomerSearchTermInsight $customerSearchTermInsight)
  {
    $this->customerSearchTermInsight = $customerSearchTermInsight;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSearchTermInsight
   */
  public function getCustomerSearchTermInsight()
  {
    return $this->customerSearchTermInsight;
  }
  /**
   * The CustomerUserAccess referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerUserAccess $customerUserAccess
   */
  public function setCustomerUserAccess(GoogleAdsSearchads360V23ResourcesCustomerUserAccess $customerUserAccess)
  {
    $this->customerUserAccess = $customerUserAccess;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerUserAccess
   */
  public function getCustomerUserAccess()
  {
    return $this->customerUserAccess;
  }
  /**
   * The CustomerUserAccessInvitation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation $customerUserAccessInvitation
   */
  public function setCustomerUserAccessInvitation(GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation $customerUserAccessInvitation)
  {
    $this->customerUserAccessInvitation = $customerUserAccessInvitation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation
   */
  public function getCustomerUserAccessInvitation()
  {
    return $this->customerUserAccessInvitation;
  }
  /**
   * The customizer attribute referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomizerAttribute $customizerAttribute
   */
  public function setCustomizerAttribute(GoogleAdsSearchads360V23ResourcesCustomizerAttribute $customizerAttribute)
  {
    $this->customizerAttribute = $customizerAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomizerAttribute
   */
  public function getCustomizerAttribute()
  {
    return $this->customizerAttribute;
  }
  /**
   * The data link referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDataLink $dataLink
   */
  public function setDataLink(GoogleAdsSearchads360V23ResourcesDataLink $dataLink)
  {
    $this->dataLink = $dataLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDataLink
   */
  public function getDataLink()
  {
    return $this->dataLink;
  }
  /**
   * The detail content suitability placement view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDetailContentSuitabilityPlacementView $detailContentSuitabilityPlacementView
   */
  public function setDetailContentSuitabilityPlacementView(GoogleAdsSearchads360V23ResourcesDetailContentSuitabilityPlacementView $detailContentSuitabilityPlacementView)
  {
    $this->detailContentSuitabilityPlacementView = $detailContentSuitabilityPlacementView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDetailContentSuitabilityPlacementView
   */
  public function getDetailContentSuitabilityPlacementView()
  {
    return $this->detailContentSuitabilityPlacementView;
  }
  /**
   * The detail placement view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDetailPlacementView $detailPlacementView
   */
  public function setDetailPlacementView(GoogleAdsSearchads360V23ResourcesDetailPlacementView $detailPlacementView)
  {
    $this->detailPlacementView = $detailPlacementView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDetailPlacementView
   */
  public function getDetailPlacementView()
  {
    return $this->detailPlacementView;
  }
  /**
   * The detailed demographic referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDetailedDemographic $detailedDemographic
   */
  public function setDetailedDemographic(GoogleAdsSearchads360V23ResourcesDetailedDemographic $detailedDemographic)
  {
    $this->detailedDemographic = $detailedDemographic;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDetailedDemographic
   */
  public function getDetailedDemographic()
  {
    return $this->detailedDemographic;
  }
  /**
   * The display keyword view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDisplayKeywordView $displayKeywordView
   */
  public function setDisplayKeywordView(GoogleAdsSearchads360V23ResourcesDisplayKeywordView $displayKeywordView)
  {
    $this->displayKeywordView = $displayKeywordView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDisplayKeywordView
   */
  public function getDisplayKeywordView()
  {
    return $this->displayKeywordView;
  }
  /**
   * The distance view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDistanceView $distanceView
   */
  public function setDistanceView(GoogleAdsSearchads360V23ResourcesDistanceView $distanceView)
  {
    $this->distanceView = $distanceView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDistanceView
   */
  public function getDistanceView()
  {
    return $this->distanceView;
  }
  /**
   * The dynamic search ads search term view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView $dynamicSearchAdsSearchTermView
   */
  public function setDynamicSearchAdsSearchTermView(GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView $dynamicSearchAdsSearchTermView)
  {
    $this->dynamicSearchAdsSearchTermView = $dynamicSearchAdsSearchTermView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDynamicSearchAdsSearchTermView
   */
  public function getDynamicSearchAdsSearchTermView()
  {
    return $this->dynamicSearchAdsSearchTermView;
  }
  /**
   * The expanded landing page view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesExpandedLandingPageView $expandedLandingPageView
   */
  public function setExpandedLandingPageView(GoogleAdsSearchads360V23ResourcesExpandedLandingPageView $expandedLandingPageView)
  {
    $this->expandedLandingPageView = $expandedLandingPageView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesExpandedLandingPageView
   */
  public function getExpandedLandingPageView()
  {
    return $this->expandedLandingPageView;
  }
  /**
   * The experiment referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesExperiment $experiment
   */
  public function setExperiment(GoogleAdsSearchads360V23ResourcesExperiment $experiment)
  {
    $this->experiment = $experiment;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesExperiment
   */
  public function getExperiment()
  {
    return $this->experiment;
  }
  /**
   * The experiment arm referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesExperimentArm $experimentArm
   */
  public function setExperimentArm(GoogleAdsSearchads360V23ResourcesExperimentArm $experimentArm)
  {
    $this->experimentArm = $experimentArm;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesExperimentArm
   */
  public function getExperimentArm()
  {
    return $this->experimentArm;
  }
  /**
   * The final url expansion asset view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesFinalUrlExpansionAssetView $finalUrlExpansionAssetView
   */
  public function setFinalUrlExpansionAssetView(GoogleAdsSearchads360V23ResourcesFinalUrlExpansionAssetView $finalUrlExpansionAssetView)
  {
    $this->finalUrlExpansionAssetView = $finalUrlExpansionAssetView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesFinalUrlExpansionAssetView
   */
  public function getFinalUrlExpansionAssetView()
  {
    return $this->finalUrlExpansionAssetView;
  }
  /**
   * The gender view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesGenderView $genderView
   */
  public function setGenderView(GoogleAdsSearchads360V23ResourcesGenderView $genderView)
  {
    $this->genderView = $genderView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGenderView
   */
  public function getGenderView()
  {
    return $this->genderView;
  }
  /**
   * The geo target constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesGeoTargetConstant $geoTargetConstant
   */
  public function setGeoTargetConstant(GoogleAdsSearchads360V23ResourcesGeoTargetConstant $geoTargetConstant)
  {
    $this->geoTargetConstant = $geoTargetConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGeoTargetConstant
   */
  public function getGeoTargetConstant()
  {
    return $this->geoTargetConstant;
  }
  /**
   * The geographic view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesGeographicView $geographicView
   */
  public function setGeographicView(GoogleAdsSearchads360V23ResourcesGeographicView $geographicView)
  {
    $this->geographicView = $geographicView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGeographicView
   */
  public function getGeographicView()
  {
    return $this->geographicView;
  }
  /**
   * The goal in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesGoal $goal
   */
  public function setGoal(GoogleAdsSearchads360V23ResourcesGoal $goal)
  {
    $this->goal = $goal;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGoal
   */
  public function getGoal()
  {
    return $this->goal;
  }
  /**
   * The group content suitability placement view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesGroupContentSuitabilityPlacementView $groupContentSuitabilityPlacementView
   */
  public function setGroupContentSuitabilityPlacementView(GoogleAdsSearchads360V23ResourcesGroupContentSuitabilityPlacementView $groupContentSuitabilityPlacementView)
  {
    $this->groupContentSuitabilityPlacementView = $groupContentSuitabilityPlacementView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGroupContentSuitabilityPlacementView
   */
  public function getGroupContentSuitabilityPlacementView()
  {
    return $this->groupContentSuitabilityPlacementView;
  }
  /**
   * The group placement view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesGroupPlacementView $groupPlacementView
   */
  public function setGroupPlacementView(GoogleAdsSearchads360V23ResourcesGroupPlacementView $groupPlacementView)
  {
    $this->groupPlacementView = $groupPlacementView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGroupPlacementView
   */
  public function getGroupPlacementView()
  {
    return $this->groupPlacementView;
  }
  /**
   * The hotel group view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesHotelGroupView $hotelGroupView
   */
  public function setHotelGroupView(GoogleAdsSearchads360V23ResourcesHotelGroupView $hotelGroupView)
  {
    $this->hotelGroupView = $hotelGroupView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesHotelGroupView
   */
  public function getHotelGroupView()
  {
    return $this->hotelGroupView;
  }
  /**
   * The hotel performance view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesHotelPerformanceView $hotelPerformanceView
   */
  public function setHotelPerformanceView(GoogleAdsSearchads360V23ResourcesHotelPerformanceView $hotelPerformanceView)
  {
    $this->hotelPerformanceView = $hotelPerformanceView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesHotelPerformanceView
   */
  public function getHotelPerformanceView()
  {
    return $this->hotelPerformanceView;
  }
  /**
   * The hotel reconciliation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesHotelReconciliation $hotelReconciliation
   */
  public function setHotelReconciliation(GoogleAdsSearchads360V23ResourcesHotelReconciliation $hotelReconciliation)
  {
    $this->hotelReconciliation = $hotelReconciliation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesHotelReconciliation
   */
  public function getHotelReconciliation()
  {
    return $this->hotelReconciliation;
  }
  /**
   * The income range view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesIncomeRangeView $incomeRangeView
   */
  public function setIncomeRangeView(GoogleAdsSearchads360V23ResourcesIncomeRangeView $incomeRangeView)
  {
    $this->incomeRangeView = $incomeRangeView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesIncomeRangeView
   */
  public function getIncomeRangeView()
  {
    return $this->incomeRangeView;
  }
  /**
   * The keyword plan referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlan $keywordPlan
   */
  public function setKeywordPlan(GoogleAdsSearchads360V23ResourcesKeywordPlan $keywordPlan)
  {
    $this->keywordPlan = $keywordPlan;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlan
   */
  public function getKeywordPlan()
  {
    return $this->keywordPlan;
  }
  /**
   * The keyword plan ad group referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroup $keywordPlanAdGroup
   */
  public function setKeywordPlanAdGroup(GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroup $keywordPlanAdGroup)
  {
    $this->keywordPlanAdGroup = $keywordPlanAdGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroup
   */
  public function getKeywordPlanAdGroup()
  {
    return $this->keywordPlanAdGroup;
  }
  /**
   * The keyword plan ad group referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroupKeyword $keywordPlanAdGroupKeyword
   */
  public function setKeywordPlanAdGroupKeyword(GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroupKeyword $keywordPlanAdGroupKeyword)
  {
    $this->keywordPlanAdGroupKeyword = $keywordPlanAdGroupKeyword;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanAdGroupKeyword
   */
  public function getKeywordPlanAdGroupKeyword()
  {
    return $this->keywordPlanAdGroupKeyword;
  }
  /**
   * The keyword plan campaign referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign $keywordPlanCampaign
   */
  public function setKeywordPlanCampaign(GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign $keywordPlanCampaign)
  {
    $this->keywordPlanCampaign = $keywordPlanCampaign;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanCampaign
   */
  public function getKeywordPlanCampaign()
  {
    return $this->keywordPlanCampaign;
  }
  /**
   * The keyword plan campaign keyword referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword $keywordPlanCampaignKeyword
   */
  public function setKeywordPlanCampaignKeyword(GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword $keywordPlanCampaignKeyword)
  {
    $this->keywordPlanCampaignKeyword = $keywordPlanCampaignKeyword;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordPlanCampaignKeyword
   */
  public function getKeywordPlanCampaignKeyword()
  {
    return $this->keywordPlanCampaignKeyword;
  }
  /**
   * The keyword theme constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordThemeConstant $keywordThemeConstant
   */
  public function setKeywordThemeConstant(GoogleAdsSearchads360V23ResourcesKeywordThemeConstant $keywordThemeConstant)
  {
    $this->keywordThemeConstant = $keywordThemeConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordThemeConstant
   */
  public function getKeywordThemeConstant()
  {
    return $this->keywordThemeConstant;
  }
  /**
   * The keyword view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesKeywordView $keywordView
   */
  public function setKeywordView(GoogleAdsSearchads360V23ResourcesKeywordView $keywordView)
  {
    $this->keywordView = $keywordView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesKeywordView
   */
  public function getKeywordView()
  {
    return $this->keywordView;
  }
  /**
   * The label referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLabel $label
   */
  public function setLabel(GoogleAdsSearchads360V23ResourcesLabel $label)
  {
    $this->label = $label;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLabel
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * The landing page view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLandingPageView $landingPageView
   */
  public function setLandingPageView(GoogleAdsSearchads360V23ResourcesLandingPageView $landingPageView)
  {
    $this->landingPageView = $landingPageView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLandingPageView
   */
  public function getLandingPageView()
  {
    return $this->landingPageView;
  }
  /**
   * The language constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLanguageConstant $languageConstant
   */
  public function setLanguageConstant(GoogleAdsSearchads360V23ResourcesLanguageConstant $languageConstant)
  {
    $this->languageConstant = $languageConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLanguageConstant
   */
  public function getLanguageConstant()
  {
    return $this->languageConstant;
  }
  /**
   * The lead form user submission referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData $leadFormSubmissionData
   */
  public function setLeadFormSubmissionData(GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData $leadFormSubmissionData)
  {
    $this->leadFormSubmissionData = $leadFormSubmissionData;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData
   */
  public function getLeadFormSubmissionData()
  {
    return $this->leadFormSubmissionData;
  }
  /**
   * The life event referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLifeEvent $lifeEvent
   */
  public function setLifeEvent(GoogleAdsSearchads360V23ResourcesLifeEvent $lifeEvent)
  {
    $this->lifeEvent = $lifeEvent;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLifeEvent
   */
  public function getLifeEvent()
  {
    return $this->lifeEvent;
  }
  /**
   * The local services employee referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocalServicesEmployee $localServicesEmployee
   */
  public function setLocalServicesEmployee(GoogleAdsSearchads360V23ResourcesLocalServicesEmployee $localServicesEmployee)
  {
    $this->localServicesEmployee = $localServicesEmployee;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocalServicesEmployee
   */
  public function getLocalServicesEmployee()
  {
    return $this->localServicesEmployee;
  }
  /**
   * The local services lead referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocalServicesLead $localServicesLead
   */
  public function setLocalServicesLead(GoogleAdsSearchads360V23ResourcesLocalServicesLead $localServicesLead)
  {
    $this->localServicesLead = $localServicesLead;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocalServicesLead
   */
  public function getLocalServicesLead()
  {
    return $this->localServicesLead;
  }
  /**
   * The local services lead conversationreferenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation $localServicesLeadConversation
   */
  public function setLocalServicesLeadConversation(GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation $localServicesLeadConversation)
  {
    $this->localServicesLeadConversation = $localServicesLeadConversation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation
   */
  public function getLocalServicesLeadConversation()
  {
    return $this->localServicesLeadConversation;
  }
  /**
   * The local services verification artifact referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact $localServicesVerificationArtifact
   */
  public function setLocalServicesVerificationArtifact(GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact $localServicesVerificationArtifact)
  {
    $this->localServicesVerificationArtifact = $localServicesVerificationArtifact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact
   */
  public function getLocalServicesVerificationArtifact()
  {
    return $this->localServicesVerificationArtifact;
  }
  /**
   * The location interest view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocationInterestView $locationInterestView
   */
  public function setLocationInterestView(GoogleAdsSearchads360V23ResourcesLocationInterestView $locationInterestView)
  {
    $this->locationInterestView = $locationInterestView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocationInterestView
   */
  public function getLocationInterestView()
  {
    return $this->locationInterestView;
  }
  /**
   * The location view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocationView $locationView
   */
  public function setLocationView(GoogleAdsSearchads360V23ResourcesLocationView $locationView)
  {
    $this->locationView = $locationView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocationView
   */
  public function getLocationView()
  {
    return $this->locationView;
  }
  /**
   * The managed placement view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesManagedPlacementView $managedPlacementView
   */
  public function setManagedPlacementView(GoogleAdsSearchads360V23ResourcesManagedPlacementView $managedPlacementView)
  {
    $this->managedPlacementView = $managedPlacementView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesManagedPlacementView
   */
  public function getManagedPlacementView()
  {
    return $this->managedPlacementView;
  }
  /**
   * The matched location interest view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesMatchedLocationInterestView $matchedLocationInterestView
   */
  public function setMatchedLocationInterestView(GoogleAdsSearchads360V23ResourcesMatchedLocationInterestView $matchedLocationInterestView)
  {
    $this->matchedLocationInterestView = $matchedLocationInterestView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMatchedLocationInterestView
   */
  public function getMatchedLocationInterestView()
  {
    return $this->matchedLocationInterestView;
  }
  /**
   * The media file referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesMediaFile $mediaFile
   */
  public function setMediaFile(GoogleAdsSearchads360V23ResourcesMediaFile $mediaFile)
  {
    $this->mediaFile = $mediaFile;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMediaFile
   */
  public function getMediaFile()
  {
    return $this->mediaFile;
  }
  /**
   * The metrics.
   *
   * @param GoogleAdsSearchads360V23CommonMetrics $metrics
   */
  public function setMetrics(GoogleAdsSearchads360V23CommonMetrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMetrics
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * The mobile app category constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesMobileAppCategoryConstant $mobileAppCategoryConstant
   */
  public function setMobileAppCategoryConstant(GoogleAdsSearchads360V23ResourcesMobileAppCategoryConstant $mobileAppCategoryConstant)
  {
    $this->mobileAppCategoryConstant = $mobileAppCategoryConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMobileAppCategoryConstant
   */
  public function getMobileAppCategoryConstant()
  {
    return $this->mobileAppCategoryConstant;
  }
  /**
   * The mobile device constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesMobileDeviceConstant $mobileDeviceConstant
   */
  public function setMobileDeviceConstant(GoogleAdsSearchads360V23ResourcesMobileDeviceConstant $mobileDeviceConstant)
  {
    $this->mobileDeviceConstant = $mobileDeviceConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMobileDeviceConstant
   */
  public function getMobileDeviceConstant()
  {
    return $this->mobileDeviceConstant;
  }
  /**
   * Offline conversion upload summary at customer level.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineConversionUploadClientSummary $offlineConversionUploadClientSummary
   */
  public function setOfflineConversionUploadClientSummary(GoogleAdsSearchads360V23ResourcesOfflineConversionUploadClientSummary $offlineConversionUploadClientSummary)
  {
    $this->offlineConversionUploadClientSummary = $offlineConversionUploadClientSummary;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineConversionUploadClientSummary
   */
  public function getOfflineConversionUploadClientSummary()
  {
    return $this->offlineConversionUploadClientSummary;
  }
  /**
   * Offline conversion upload summary at conversion type level.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary $offlineConversionUploadConversionActionSummary
   */
  public function setOfflineConversionUploadConversionActionSummary(GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary $offlineConversionUploadConversionActionSummary)
  {
    $this->offlineConversionUploadConversionActionSummary = $offlineConversionUploadConversionActionSummary;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary
   */
  public function getOfflineConversionUploadConversionActionSummary()
  {
    return $this->offlineConversionUploadConversionActionSummary;
  }
  /**
   * The offline user data job referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineUserDataJob $offlineUserDataJob
   */
  public function setOfflineUserDataJob(GoogleAdsSearchads360V23ResourcesOfflineUserDataJob $offlineUserDataJob)
  {
    $this->offlineUserDataJob = $offlineUserDataJob;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineUserDataJob
   */
  public function getOfflineUserDataJob()
  {
    return $this->offlineUserDataJob;
  }
  /**
   * The operating system version constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant $operatingSystemVersionConstant
   */
  public function setOperatingSystemVersionConstant(GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant $operatingSystemVersionConstant)
  {
    $this->operatingSystemVersionConstant = $operatingSystemVersionConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOperatingSystemVersionConstant
   */
  public function getOperatingSystemVersionConstant()
  {
    return $this->operatingSystemVersionConstant;
  }
  /**
   * The paid organic search term view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesPaidOrganicSearchTermView $paidOrganicSearchTermView
   */
  public function setPaidOrganicSearchTermView(GoogleAdsSearchads360V23ResourcesPaidOrganicSearchTermView $paidOrganicSearchTermView)
  {
    $this->paidOrganicSearchTermView = $paidOrganicSearchTermView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesPaidOrganicSearchTermView
   */
  public function getPaidOrganicSearchTermView()
  {
    return $this->paidOrganicSearchTermView;
  }
  /**
   * The parental status view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesParentalStatusView $parentalStatusView
   */
  public function setParentalStatusView(GoogleAdsSearchads360V23ResourcesParentalStatusView $parentalStatusView)
  {
    $this->parentalStatusView = $parentalStatusView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesParentalStatusView
   */
  public function getParentalStatusView()
  {
    return $this->parentalStatusView;
  }
  /**
   * The per store view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesPerStoreView $perStoreView
   */
  public function setPerStoreView(GoogleAdsSearchads360V23ResourcesPerStoreView $perStoreView)
  {
    $this->perStoreView = $perStoreView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesPerStoreView
   */
  public function getPerStoreView()
  {
    return $this->perStoreView;
  }
  /**
   * The performance max placement view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesPerformanceMaxPlacementView $performanceMaxPlacementView
   */
  public function setPerformanceMaxPlacementView(GoogleAdsSearchads360V23ResourcesPerformanceMaxPlacementView $performanceMaxPlacementView)
  {
    $this->performanceMaxPlacementView = $performanceMaxPlacementView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesPerformanceMaxPlacementView
   */
  public function getPerformanceMaxPlacementView()
  {
    return $this->performanceMaxPlacementView;
  }
  /**
   * The product category referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesProductCategoryConstant $productCategoryConstant
   */
  public function setProductCategoryConstant(GoogleAdsSearchads360V23ResourcesProductCategoryConstant $productCategoryConstant)
  {
    $this->productCategoryConstant = $productCategoryConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesProductCategoryConstant
   */
  public function getProductCategoryConstant()
  {
    return $this->productCategoryConstant;
  }
  /**
   * The product group view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesProductGroupView $productGroupView
   */
  public function setProductGroupView(GoogleAdsSearchads360V23ResourcesProductGroupView $productGroupView)
  {
    $this->productGroupView = $productGroupView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesProductGroupView
   */
  public function getProductGroupView()
  {
    return $this->productGroupView;
  }
  /**
   * The product link referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesProductLink $productLink
   */
  public function setProductLink(GoogleAdsSearchads360V23ResourcesProductLink $productLink)
  {
    $this->productLink = $productLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesProductLink
   */
  public function getProductLink()
  {
    return $this->productLink;
  }
  /**
   * The product link invitation in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesProductLinkInvitation $productLinkInvitation
   */
  public function setProductLinkInvitation(GoogleAdsSearchads360V23ResourcesProductLinkInvitation $productLinkInvitation)
  {
    $this->productLinkInvitation = $productLinkInvitation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesProductLinkInvitation
   */
  public function getProductLinkInvitation()
  {
    return $this->productLinkInvitation;
  }
  /**
   * The qualifying question referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesQualifyingQuestion $qualifyingQuestion
   */
  public function setQualifyingQuestion(GoogleAdsSearchads360V23ResourcesQualifyingQuestion $qualifyingQuestion)
  {
    $this->qualifyingQuestion = $qualifyingQuestion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesQualifyingQuestion
   */
  public function getQualifyingQuestion()
  {
    return $this->qualifyingQuestion;
  }
  /**
   * The recommendation referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendation $recommendation
   */
  public function setRecommendation(GoogleAdsSearchads360V23ResourcesRecommendation $recommendation)
  {
    $this->recommendation = $recommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendation
   */
  public function getRecommendation()
  {
    return $this->recommendation;
  }
  /**
   * The recommendation subscription referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationSubscription $recommendationSubscription
   */
  public function setRecommendationSubscription(GoogleAdsSearchads360V23ResourcesRecommendationSubscription $recommendationSubscription)
  {
    $this->recommendationSubscription = $recommendationSubscription;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationSubscription
   */
  public function getRecommendationSubscription()
  {
    return $this->recommendationSubscription;
  }
  /**
   * The remarketing action referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesRemarketingAction $remarketingAction
   */
  public function setRemarketingAction(GoogleAdsSearchads360V23ResourcesRemarketingAction $remarketingAction)
  {
    $this->remarketingAction = $remarketingAction;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRemarketingAction
   */
  public function getRemarketingAction()
  {
    return $this->remarketingAction;
  }
  /**
   * The Search Ads 360 campaign referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesSearchAds360Campaign $searchAds360Campaign
   */
  public function setSearchAds360Campaign(GoogleAdsSearchads360V23ResourcesSearchAds360Campaign $searchAds360Campaign)
  {
    $this->searchAds360Campaign = $searchAds360Campaign;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSearchAds360Campaign
   */
  public function getSearchAds360Campaign()
  {
    return $this->searchAds360Campaign;
  }
  /**
   * The search term view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesSearchTermView $searchTermView
   */
  public function setSearchTermView(GoogleAdsSearchads360V23ResourcesSearchTermView $searchTermView)
  {
    $this->searchTermView = $searchTermView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSearchTermView
   */
  public function getSearchTermView()
  {
    return $this->searchTermView;
  }
  /**
   * The segments.
   *
   * @param GoogleAdsSearchads360V23CommonSegments $segments
   */
  public function setSegments(GoogleAdsSearchads360V23CommonSegments $segments)
  {
    $this->segments = $segments;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonSegments
   */
  public function getSegments()
  {
    return $this->segments;
  }
  /**
   * The shared set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesSharedCriterion $sharedCriterion
   */
  public function setSharedCriterion(GoogleAdsSearchads360V23ResourcesSharedCriterion $sharedCriterion)
  {
    $this->sharedCriterion = $sharedCriterion;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSharedCriterion
   */
  public function getSharedCriterion()
  {
    return $this->sharedCriterion;
  }
  /**
   * The shared set referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesSharedSet $sharedSet
   */
  public function setSharedSet(GoogleAdsSearchads360V23ResourcesSharedSet $sharedSet)
  {
    $this->sharedSet = $sharedSet;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSharedSet
   */
  public function getSharedSet()
  {
    return $this->sharedSet;
  }
  /**
   * The shopping performance view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesShoppingPerformanceView $shoppingPerformanceView
   */
  public function setShoppingPerformanceView(GoogleAdsSearchads360V23ResourcesShoppingPerformanceView $shoppingPerformanceView)
  {
    $this->shoppingPerformanceView = $shoppingPerformanceView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesShoppingPerformanceView
   */
  public function getShoppingPerformanceView()
  {
    return $this->shoppingPerformanceView;
  }
  /**
   * The shopping product referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesShoppingProduct $shoppingProduct
   */
  public function setShoppingProduct(GoogleAdsSearchads360V23ResourcesShoppingProduct $shoppingProduct)
  {
    $this->shoppingProduct = $shoppingProduct;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesShoppingProduct
   */
  public function getShoppingProduct()
  {
    return $this->shoppingProduct;
  }
  /**
   * The Smart campaign search term view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView $smartCampaignSearchTermView
   */
  public function setSmartCampaignSearchTermView(GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView $smartCampaignSearchTermView)
  {
    $this->smartCampaignSearchTermView = $smartCampaignSearchTermView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSmartCampaignSearchTermView
   */
  public function getSmartCampaignSearchTermView()
  {
    return $this->smartCampaignSearchTermView;
  }
  /**
   * The Smart campaign setting referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesSmartCampaignSetting $smartCampaignSetting
   */
  public function setSmartCampaignSetting(GoogleAdsSearchads360V23ResourcesSmartCampaignSetting $smartCampaignSetting)
  {
    $this->smartCampaignSetting = $smartCampaignSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesSmartCampaignSetting
   */
  public function getSmartCampaignSetting()
  {
    return $this->smartCampaignSetting;
  }
  /**
   * The Targeting expansion view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesTargetingExpansionView $targetingExpansionView
   */
  public function setTargetingExpansionView(GoogleAdsSearchads360V23ResourcesTargetingExpansionView $targetingExpansionView)
  {
    $this->targetingExpansionView = $targetingExpansionView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesTargetingExpansionView
   */
  public function getTargetingExpansionView()
  {
    return $this->targetingExpansionView;
  }
  /**
   * The AccountLink referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink $thirdPartyAppAnalyticsLink
   */
  public function setThirdPartyAppAnalyticsLink(GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink $thirdPartyAppAnalyticsLink)
  {
    $this->thirdPartyAppAnalyticsLink = $thirdPartyAppAnalyticsLink;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink
   */
  public function getThirdPartyAppAnalyticsLink()
  {
    return $this->thirdPartyAppAnalyticsLink;
  }
  /**
   * The topic constant referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesTopicConstant $topicConstant
   */
  public function setTopicConstant(GoogleAdsSearchads360V23ResourcesTopicConstant $topicConstant)
  {
    $this->topicConstant = $topicConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesTopicConstant
   */
  public function getTopicConstant()
  {
    return $this->topicConstant;
  }
  /**
   * The topic view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesTopicView $topicView
   */
  public function setTopicView(GoogleAdsSearchads360V23ResourcesTopicView $topicView)
  {
    $this->topicView = $topicView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesTopicView
   */
  public function getTopicView()
  {
    return $this->topicView;
  }
  /**
   * The travel activity group view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesTravelActivityGroupView $travelActivityGroupView
   */
  public function setTravelActivityGroupView(GoogleAdsSearchads360V23ResourcesTravelActivityGroupView $travelActivityGroupView)
  {
    $this->travelActivityGroupView = $travelActivityGroupView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesTravelActivityGroupView
   */
  public function getTravelActivityGroupView()
  {
    return $this->travelActivityGroupView;
  }
  /**
   * The travel activity performance view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesTravelActivityPerformanceView $travelActivityPerformanceView
   */
  public function setTravelActivityPerformanceView(GoogleAdsSearchads360V23ResourcesTravelActivityPerformanceView $travelActivityPerformanceView)
  {
    $this->travelActivityPerformanceView = $travelActivityPerformanceView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesTravelActivityPerformanceView
   */
  public function getTravelActivityPerformanceView()
  {
    return $this->travelActivityPerformanceView;
  }
  /**
   * The user interest referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesUserInterest $userInterest
   */
  public function setUserInterest(GoogleAdsSearchads360V23ResourcesUserInterest $userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesUserInterest
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * The user list referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesUserList $userList
   */
  public function setUserList(GoogleAdsSearchads360V23ResourcesUserList $userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesUserList
   */
  public function getUserList()
  {
    return $this->userList;
  }
  /**
   * The user list customer type in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesUserListCustomerType $userListCustomerType
   */
  public function setUserListCustomerType(GoogleAdsSearchads360V23ResourcesUserListCustomerType $userListCustomerType)
  {
    $this->userListCustomerType = $userListCustomerType;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesUserListCustomerType
   */
  public function getUserListCustomerType()
  {
    return $this->userListCustomerType;
  }
  /**
   * The user location view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesUserLocationView $userLocationView
   */
  public function setUserLocationView(GoogleAdsSearchads360V23ResourcesUserLocationView $userLocationView)
  {
    $this->userLocationView = $userLocationView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesUserLocationView
   */
  public function getUserLocationView()
  {
    return $this->userLocationView;
  }
  /**
   * The video referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesVideo $video
   */
  public function setVideo(GoogleAdsSearchads360V23ResourcesVideo $video)
  {
    $this->video = $video;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesVideo
   */
  public function getVideo()
  {
    return $this->video;
  }
  /**
   * The event level visit referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesVisit $visit
   */
  public function setVisit(GoogleAdsSearchads360V23ResourcesVisit $visit)
  {
    $this->visit = $visit;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesVisit
   */
  public function getVisit()
  {
    return $this->visit;
  }
  /**
   * The webpage view referenced in the query.
   *
   * @param GoogleAdsSearchads360V23ResourcesWebpageView $webpageView
   */
  public function setWebpageView(GoogleAdsSearchads360V23ResourcesWebpageView $webpageView)
  {
    $this->webpageView = $webpageView;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesWebpageView
   */
  public function getWebpageView()
  {
    return $this->webpageView;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSearchAds360Row::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSearchAds360Row');
