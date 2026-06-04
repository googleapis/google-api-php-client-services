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

class GoogleAdsSearchads360V23ResourcesRecommendation extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Provides optimized budget recommendations for campaigns.
   */
  public const TYPE_CAMPAIGN_BUDGET = 'CAMPAIGN_BUDGET';
  /**
   * Keyword recommendation.
   */
  public const TYPE_KEYWORD = 'KEYWORD';
  /**
   * Recommendation to add a new text ad.
   */
  public const TYPE_TEXT_AD = 'TEXT_AD';
  /**
   * Recommendation to update a campaign to use a Target CPA bidding strategy.
   */
  public const TYPE_TARGET_CPA_OPT_IN = 'TARGET_CPA_OPT_IN';
  /**
   * Recommendation to update a campaign to use the Maximize Conversions bidding
   * strategy.
   */
  public const TYPE_MAXIMIZE_CONVERSIONS_OPT_IN = 'MAXIMIZE_CONVERSIONS_OPT_IN';
  /**
   * Recommendation to enable Enhanced Cost Per Click for a campaign.
   */
  public const TYPE_ENHANCED_CPC_OPT_IN = 'ENHANCED_CPC_OPT_IN';
  /**
   * Recommendation to start showing your campaign's ads on Google Search
   * Partners Websites.
   */
  public const TYPE_SEARCH_PARTNERS_OPT_IN = 'SEARCH_PARTNERS_OPT_IN';
  /**
   * Recommendation to update a campaign to use a Maximize Clicks bidding
   * strategy.
   */
  public const TYPE_MAXIMIZE_CLICKS_OPT_IN = 'MAXIMIZE_CLICKS_OPT_IN';
  /**
   * Recommendation to start using the "Optimize" ad rotation setting for the
   * given ad group.
   */
  public const TYPE_OPTIMIZE_AD_ROTATION = 'OPTIMIZE_AD_ROTATION';
  /**
   * Recommendation to change an existing keyword from one match type to a
   * broader match type.
   */
  public const TYPE_KEYWORD_MATCH_TYPE = 'KEYWORD_MATCH_TYPE';
  /**
   * Recommendation to move unused budget from one budget to a constrained
   * budget.
   */
  public const TYPE_MOVE_UNUSED_BUDGET = 'MOVE_UNUSED_BUDGET';
  /**
   * Budget recommendation for campaigns that are expected to become budget-
   * constrained in the future (as opposed to the CAMPAIGN_BUDGET
   * recommendation, which applies to campaigns that are currently budget-
   * constrained).
   */
  public const TYPE_FORECASTING_CAMPAIGN_BUDGET = 'FORECASTING_CAMPAIGN_BUDGET';
  /**
   * Recommendation to update a campaign to use a Target ROAS bidding strategy.
   */
  public const TYPE_TARGET_ROAS_OPT_IN = 'TARGET_ROAS_OPT_IN';
  /**
   * Recommendation to add a new responsive search ad.
   */
  public const TYPE_RESPONSIVE_SEARCH_AD = 'RESPONSIVE_SEARCH_AD';
  /**
   * Budget recommendation for campaigns whose ROI is predicted to increase with
   * a budget adjustment.
   */
  public const TYPE_MARGINAL_ROI_CAMPAIGN_BUDGET = 'MARGINAL_ROI_CAMPAIGN_BUDGET';
  /**
   * Recommendation to add broad match versions of keywords for fully automated
   * conversion-based bidding campaigns.
   */
  public const TYPE_USE_BROAD_MATCH_KEYWORD = 'USE_BROAD_MATCH_KEYWORD';
  /**
   * Recommendation to add new responsive search ad assets.
   */
  public const TYPE_RESPONSIVE_SEARCH_AD_ASSET = 'RESPONSIVE_SEARCH_AD_ASSET';
  /**
   * Recommendation to upgrade a Smart Shopping campaign to a Performance Max
   * campaign.
   */
  public const TYPE_UPGRADE_SMART_SHOPPING_CAMPAIGN_TO_PERFORMANCE_MAX = 'UPGRADE_SMART_SHOPPING_CAMPAIGN_TO_PERFORMANCE_MAX';
  /**
   * Recommendation to improve strength of responsive search ad.
   */
  public const TYPE_RESPONSIVE_SEARCH_AD_IMPROVE_AD_STRENGTH = 'RESPONSIVE_SEARCH_AD_IMPROVE_AD_STRENGTH';
  /**
   * Recommendation to update a campaign to use Display Expansion.
   */
  public const TYPE_DISPLAY_EXPANSION_OPT_IN = 'DISPLAY_EXPANSION_OPT_IN';
  /**
   * Recommendation to upgrade a Local campaign to a Performance Max campaign.
   */
  public const TYPE_UPGRADE_LOCAL_CAMPAIGN_TO_PERFORMANCE_MAX = 'UPGRADE_LOCAL_CAMPAIGN_TO_PERFORMANCE_MAX';
  /**
   * Recommendation to raise target CPA when it is too low and there are very
   * few or no conversions. It is applied asynchronously and can take minutes
   * depending on the number of ad groups there are in the related campaign.
   */
  public const TYPE_RAISE_TARGET_CPA_BID_TOO_LOW = 'RAISE_TARGET_CPA_BID_TOO_LOW';
  /**
   * Recommendation to raise the budget in advance of a seasonal event that is
   * forecasted to increase traffic, and change bidding strategy from maximize
   * conversion value to target ROAS.
   */
  public const TYPE_FORECASTING_SET_TARGET_ROAS = 'FORECASTING_SET_TARGET_ROAS';
  /**
   * Recommendation to add callout assets to campaign or customer level.
   */
  public const TYPE_CALLOUT_ASSET = 'CALLOUT_ASSET';
  /**
   * Recommendation to add sitelink assets to campaign or customer level.
   */
  public const TYPE_SITELINK_ASSET = 'SITELINK_ASSET';
  /**
   * Recommendation to add call assets to campaign or customer level.
   */
  public const TYPE_CALL_ASSET = 'CALL_ASSET';
  /**
   * Recommendation to add the age group attribute to offers that are demoted
   * because of a missing age group.
   */
  public const TYPE_SHOPPING_ADD_AGE_GROUP = 'SHOPPING_ADD_AGE_GROUP';
  /**
   * Recommendation to add a color to offers that are demoted because of a
   * missing color.
   */
  public const TYPE_SHOPPING_ADD_COLOR = 'SHOPPING_ADD_COLOR';
  /**
   * Recommendation to add a gender to offers that are demoted because of a
   * missing gender.
   */
  public const TYPE_SHOPPING_ADD_GENDER = 'SHOPPING_ADD_GENDER';
  /**
   * Recommendation to add a GTIN (Global Trade Item Number) to offers that are
   * demoted because of a missing GTIN.
   */
  public const TYPE_SHOPPING_ADD_GTIN = 'SHOPPING_ADD_GTIN';
  /**
   * Recommendation to add more identifiers to offers that are demoted because
   * of missing identifiers.
   */
  public const TYPE_SHOPPING_ADD_MORE_IDENTIFIERS = 'SHOPPING_ADD_MORE_IDENTIFIERS';
  /**
   * Recommendation to add the size to offers that are demoted because of a
   * missing size.
   */
  public const TYPE_SHOPPING_ADD_SIZE = 'SHOPPING_ADD_SIZE';
  /**
   * Recommendation informing a customer about a campaign that cannot serve
   * because no products are being targeted.
   */
  public const TYPE_SHOPPING_ADD_PRODUCTS_TO_CAMPAIGN = 'SHOPPING_ADD_PRODUCTS_TO_CAMPAIGN';
  /**
   * The shopping recommendation informing a customer about campaign with a high
   * percentage of disapproved products.
   */
  public const TYPE_SHOPPING_FIX_DISAPPROVED_PRODUCTS = 'SHOPPING_FIX_DISAPPROVED_PRODUCTS';
  /**
   * Recommendation to create a catch-all campaign that targets all offers.
   */
  public const TYPE_SHOPPING_TARGET_ALL_OFFERS = 'SHOPPING_TARGET_ALL_OFFERS';
  /**
   * Recommendation to fix Merchant Center account suspension issues.
   */
  public const TYPE_SHOPPING_FIX_SUSPENDED_MERCHANT_CENTER_ACCOUNT = 'SHOPPING_FIX_SUSPENDED_MERCHANT_CENTER_ACCOUNT';
  /**
   * Recommendation to fix Merchant Center account suspension warning issues.
   */
  public const TYPE_SHOPPING_FIX_MERCHANT_CENTER_ACCOUNT_SUSPENSION_WARNING = 'SHOPPING_FIX_MERCHANT_CENTER_ACCOUNT_SUSPENSION_WARNING';
  /**
   * Recommendation to migrate offers targeted by Regular Shopping Campaigns to
   * existing Performance Max campaigns.
   */
  public const TYPE_SHOPPING_MIGRATE_REGULAR_SHOPPING_CAMPAIGN_OFFERS_TO_PERFORMANCE_MAX = 'SHOPPING_MIGRATE_REGULAR_SHOPPING_CAMPAIGN_OFFERS_TO_PERFORMANCE_MAX';
  /**
   * Recommendation to enable dynamic image extensions on the account, allowing
   * Google to find the best images from ad landing pages and complement text
   * ads.
   */
  public const TYPE_DYNAMIC_IMAGE_EXTENSION_OPT_IN = 'DYNAMIC_IMAGE_EXTENSION_OPT_IN';
  /**
   * Recommendation to raise Target CPA based on Google predictions modeled from
   * past conversions. It is applied asynchronously and can take minutes
   * depending on the number of ad groups there are in the related campaign.
   */
  public const TYPE_RAISE_TARGET_CPA = 'RAISE_TARGET_CPA';
  /**
   * Recommendation to lower Target ROAS.
   */
  public const TYPE_LOWER_TARGET_ROAS = 'LOWER_TARGET_ROAS';
  /**
   * Recommendation to opt into Performance Max campaigns.
   */
  public const TYPE_PERFORMANCE_MAX_OPT_IN = 'PERFORMANCE_MAX_OPT_IN';
  /**
   * Recommendation to improve the asset group strength of a Performance Max
   * campaign to an "Excellent" rating.
   */
  public const TYPE_IMPROVE_PERFORMANCE_MAX_AD_STRENGTH = 'IMPROVE_PERFORMANCE_MAX_AD_STRENGTH';
  /**
   * Recommendation to migrate Dynamic Search Ads to Performance Max campaigns.
   */
  public const TYPE_MIGRATE_DYNAMIC_SEARCH_ADS_CAMPAIGN_TO_PERFORMANCE_MAX = 'MIGRATE_DYNAMIC_SEARCH_ADS_CAMPAIGN_TO_PERFORMANCE_MAX';
  /**
   * Recommendation to set a target CPA for campaigns that do not have one
   * specified, in advance of a seasonal event that is forecasted to increase
   * traffic.
   */
  public const TYPE_FORECASTING_SET_TARGET_CPA = 'FORECASTING_SET_TARGET_CPA';
  /**
   * Recommendation to set a target CPA for campaigns that do not have one
   * specified.
   */
  public const TYPE_SET_TARGET_CPA = 'SET_TARGET_CPA';
  /**
   * Recommendation to set a target ROAS for campaigns that do not have one
   * specified.
   */
  public const TYPE_SET_TARGET_ROAS = 'SET_TARGET_ROAS';
  /**
   * Recommendation to update a campaign to use the Maximize Conversion Value
   * bidding strategy.
   */
  public const TYPE_MAXIMIZE_CONVERSION_VALUE_OPT_IN = 'MAXIMIZE_CONVERSION_VALUE_OPT_IN';
  /**
   * Recommendation to deploy Google Tag on more pages.
   */
  public const TYPE_IMPROVE_GOOGLE_TAG_COVERAGE = 'IMPROVE_GOOGLE_TAG_COVERAGE';
  /**
   * Recommendation to turn on Final URL expansion for your Performance Max
   * campaigns.
   */
  public const TYPE_PERFORMANCE_MAX_FINAL_URL_OPT_IN = 'PERFORMANCE_MAX_FINAL_URL_OPT_IN';
  /**
   * Recommendation to update a customer list that hasn't been updated in the
   * last 90 days.
   */
  public const TYPE_REFRESH_CUSTOMER_MATCH_LIST = 'REFRESH_CUSTOMER_MATCH_LIST';
  /**
   * Recommendation to create a custom audience.
   */
  public const TYPE_CUSTOM_AUDIENCE_OPT_IN = 'CUSTOM_AUDIENCE_OPT_IN';
  /**
   * Recommendation to add lead form assets to campaign or customer level.
   */
  public const TYPE_LEAD_FORM_ASSET = 'LEAD_FORM_ASSET';
  /**
   * Recommendation to improve the strength of ads in Demand Gen campaigns.
   */
  public const TYPE_IMPROVE_DEMAND_GEN_AD_STRENGTH = 'IMPROVE_DEMAND_GEN_AD_STRENGTH';
  protected $collection_key = 'campaigns';
  /**
   * Output only. The ad group targeted by this recommendation. This will be set
   * only when the recommendation affects a single ad group. This field will be
   * set for the following recommendation types: KEYWORD, OPTIMIZE_AD_ROTATION,
   * TEXT_AD
   *
   * @var string
   */
  public $adGroup;
  protected $callAssetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCallAssetRecommendation::class;
  protected $callAssetRecommendationDataType = '';
  protected $calloutAssetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation::class;
  protected $calloutAssetRecommendationDataType = '';
  /**
   * Output only. The campaign targeted by this recommendation. This field will
   * be set for the following recommendation types: CALL_EXTENSION,
   * CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD, KEYWORD_MATCH_TYPE,
   * MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN, OPTIMIZE_AD_ROTATION,
   * SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION, TARGET_CPA_OPT_IN,
   * TARGET_ROAS_OPT_IN, TEXT_AD,
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. The budget targeted by this recommendation. This will be set
   * only when the recommendation affects a single campaign budget. This field
   * will be set for the following recommendation types: CAMPAIGN_BUDGET,
   * FORECASTING_CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
   *
   * @var string
   */
  public $campaignBudget;
  protected $campaignBudgetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation::class;
  protected $campaignBudgetRecommendationDataType = '';
  /**
   * Output only. The campaigns targeted by this recommendation. This field will
   * be set for the following recommendation types: CAMPAIGN_BUDGET,
   * FORECASTING_CAMPAIGN_BUDGET, MARGINAL_ROI_CAMPAIGN_BUDGET and
   * MOVE_UNUSED_BUDGET
   *
   * @var string[]
   */
  public $campaigns;
  protected $customAudienceOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCustomAudienceOptInRecommendation::class;
  protected $customAudienceOptInRecommendationDataType = '';
  /**
   * Output only. Whether the recommendation is dismissed or not.
   *
   * @var bool
   */
  public $dismissed;
  protected $displayExpansionOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationDisplayExpansionOptInRecommendation::class;
  protected $displayExpansionOptInRecommendationDataType = '';
  protected $dynamicImageExtensionOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationDynamicImageExtensionOptInRecommendation::class;
  protected $dynamicImageExtensionOptInRecommendationDataType = '';
  protected $enhancedCpcOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationEnhancedCpcOptInRecommendation::class;
  protected $enhancedCpcOptInRecommendationDataType = '';
  protected $forecastingCampaignBudgetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation::class;
  protected $forecastingCampaignBudgetRecommendationDataType = '';
  protected $forecastingSetTargetCpaRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation::class;
  protected $forecastingSetTargetCpaRecommendationDataType = '';
  protected $forecastingSetTargetRoasRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation::class;
  protected $forecastingSetTargetRoasRecommendationDataType = '';
  protected $impactType = GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact::class;
  protected $impactDataType = '';
  protected $improveDemandGenAdStrengthRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation::class;
  protected $improveDemandGenAdStrengthRecommendationDataType = '';
  protected $improveGoogleTagCoverageRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationImproveGoogleTagCoverageRecommendation::class;
  protected $improveGoogleTagCoverageRecommendationDataType = '';
  protected $improvePerformanceMaxAdStrengthRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation::class;
  protected $improvePerformanceMaxAdStrengthRecommendationDataType = '';
  protected $keywordMatchTypeRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation::class;
  protected $keywordMatchTypeRecommendationDataType = '';
  protected $keywordRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationKeywordRecommendation::class;
  protected $keywordRecommendationDataType = '';
  protected $leadFormAssetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationLeadFormAssetRecommendation::class;
  protected $leadFormAssetRecommendationDataType = '';
  protected $lowerTargetRoasRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationLowerTargetRoasRecommendation::class;
  protected $lowerTargetRoasRecommendationDataType = '';
  protected $marginalRoiCampaignBudgetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation::class;
  protected $marginalRoiCampaignBudgetRecommendationDataType = '';
  protected $maximizeClicksOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationMaximizeClicksOptInRecommendation::class;
  protected $maximizeClicksOptInRecommendationDataType = '';
  protected $maximizeConversionValueOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionValueOptInRecommendation::class;
  protected $maximizeConversionValueOptInRecommendationDataType = '';
  protected $maximizeConversionsOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionsOptInRecommendation::class;
  protected $maximizeConversionsOptInRecommendationDataType = '';
  protected $migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationMigrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation::class;
  protected $migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendationDataType = '';
  protected $moveUnusedBudgetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation::class;
  protected $moveUnusedBudgetRecommendationDataType = '';
  protected $optimizeAdRotationRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationOptimizeAdRotationRecommendation::class;
  protected $optimizeAdRotationRecommendationDataType = '';
  protected $performanceMaxFinalUrlOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxFinalUrlOptInRecommendation::class;
  protected $performanceMaxFinalUrlOptInRecommendationDataType = '';
  protected $performanceMaxOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxOptInRecommendation::class;
  protected $performanceMaxOptInRecommendationDataType = '';
  protected $raiseTargetCpaBidTooLowRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation::class;
  protected $raiseTargetCpaBidTooLowRecommendationDataType = '';
  protected $raiseTargetCpaRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation::class;
  protected $raiseTargetCpaRecommendationDataType = '';
  protected $refreshCustomerMatchListRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation::class;
  protected $refreshCustomerMatchListRecommendationDataType = '';
  /**
   * Immutable. The resource name of the recommendation.
   * `customers/{customer_id}/recommendations/{recommendation_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $responsiveSearchAdAssetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdAssetRecommendation::class;
  protected $responsiveSearchAdAssetRecommendationDataType = '';
  protected $responsiveSearchAdImproveAdStrengthRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation::class;
  protected $responsiveSearchAdImproveAdStrengthRecommendationDataType = '';
  protected $responsiveSearchAdRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdRecommendation::class;
  protected $responsiveSearchAdRecommendationDataType = '';
  protected $searchPartnersOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationSearchPartnersOptInRecommendation::class;
  protected $searchPartnersOptInRecommendationDataType = '';
  protected $setTargetCpaRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation::class;
  protected $setTargetCpaRecommendationDataType = '';
  protected $setTargetRoasRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation::class;
  protected $setTargetRoasRecommendationDataType = '';
  protected $shoppingAddAgeGroupRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation::class;
  protected $shoppingAddAgeGroupRecommendationDataType = '';
  protected $shoppingAddColorRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation::class;
  protected $shoppingAddColorRecommendationDataType = '';
  protected $shoppingAddGenderRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation::class;
  protected $shoppingAddGenderRecommendationDataType = '';
  protected $shoppingAddGtinRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation::class;
  protected $shoppingAddGtinRecommendationDataType = '';
  protected $shoppingAddMoreIdentifiersRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation::class;
  protected $shoppingAddMoreIdentifiersRecommendationDataType = '';
  protected $shoppingAddProductsToCampaignRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation::class;
  protected $shoppingAddProductsToCampaignRecommendationDataType = '';
  protected $shoppingAddSizeRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation::class;
  protected $shoppingAddSizeRecommendationDataType = '';
  protected $shoppingFixDisapprovedProductsRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingFixDisapprovedProductsRecommendation::class;
  protected $shoppingFixDisapprovedProductsRecommendationDataType = '';
  protected $shoppingFixMerchantCenterAccountSuspensionWarningRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation::class;
  protected $shoppingFixMerchantCenterAccountSuspensionWarningRecommendationDataType = '';
  protected $shoppingFixSuspendedMerchantCenterAccountRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation::class;
  protected $shoppingFixSuspendedMerchantCenterAccountRecommendationDataType = '';
  protected $shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation::class;
  protected $shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendationDataType = '';
  protected $shoppingTargetAllOffersRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationShoppingTargetAllOffersRecommendation::class;
  protected $shoppingTargetAllOffersRecommendationDataType = '';
  protected $sitelinkAssetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation::class;
  protected $sitelinkAssetRecommendationDataType = '';
  protected $targetCpaOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendation::class;
  protected $targetCpaOptInRecommendationDataType = '';
  protected $targetRoasOptInRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation::class;
  protected $targetRoasOptInRecommendationDataType = '';
  protected $textAdRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation::class;
  protected $textAdRecommendationDataType = '';
  /**
   * Output only. The type of recommendation.
   *
   * @var string
   */
  public $type;
  protected $upgradeLocalCampaignToPerformanceMaxRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationUpgradeLocalCampaignToPerformanceMaxRecommendation::class;
  protected $upgradeLocalCampaignToPerformanceMaxRecommendationDataType = '';
  protected $upgradeSmartShoppingCampaignToPerformanceMaxRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationUpgradeSmartShoppingCampaignToPerformanceMaxRecommendation::class;
  protected $upgradeSmartShoppingCampaignToPerformanceMaxRecommendationDataType = '';
  protected $useBroadMatchKeywordRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation::class;
  protected $useBroadMatchKeywordRecommendationDataType = '';

  /**
   * Output only. The ad group targeted by this recommendation. This will be set
   * only when the recommendation affects a single ad group. This field will be
   * set for the following recommendation types: KEYWORD, OPTIMIZE_AD_ROTATION,
   * TEXT_AD
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Output only. The call asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCallAssetRecommendation $callAssetRecommendation
   */
  public function setCallAssetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCallAssetRecommendation $callAssetRecommendation)
  {
    $this->callAssetRecommendation = $callAssetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCallAssetRecommendation
   */
  public function getCallAssetRecommendation()
  {
    return $this->callAssetRecommendation;
  }
  /**
   * Output only. The callout asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation $calloutAssetRecommendation
   */
  public function setCalloutAssetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation $calloutAssetRecommendation)
  {
    $this->calloutAssetRecommendation = $calloutAssetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation
   */
  public function getCalloutAssetRecommendation()
  {
    return $this->calloutAssetRecommendation;
  }
  /**
   * Output only. The campaign targeted by this recommendation. This field will
   * be set for the following recommendation types: CALL_EXTENSION,
   * CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD, KEYWORD_MATCH_TYPE,
   * MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN, OPTIMIZE_AD_ROTATION,
   * SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION, TARGET_CPA_OPT_IN,
   * TARGET_ROAS_OPT_IN, TEXT_AD,
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. The budget targeted by this recommendation. This will be set
   * only when the recommendation affects a single campaign budget. This field
   * will be set for the following recommendation types: CAMPAIGN_BUDGET,
   * FORECASTING_CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
   *
   * @param string $campaignBudget
   */
  public function setCampaignBudget($campaignBudget)
  {
    $this->campaignBudget = $campaignBudget;
  }
  /**
   * @return string
   */
  public function getCampaignBudget()
  {
    return $this->campaignBudget;
  }
  /**
   * Output only. The campaign budget recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $campaignBudgetRecommendation
   */
  public function setCampaignBudgetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $campaignBudgetRecommendation)
  {
    $this->campaignBudgetRecommendation = $campaignBudgetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation
   */
  public function getCampaignBudgetRecommendation()
  {
    return $this->campaignBudgetRecommendation;
  }
  /**
   * Output only. The campaigns targeted by this recommendation. This field will
   * be set for the following recommendation types: CAMPAIGN_BUDGET,
   * FORECASTING_CAMPAIGN_BUDGET, MARGINAL_ROI_CAMPAIGN_BUDGET and
   * MOVE_UNUSED_BUDGET
   *
   * @param string[] $campaigns
   */
  public function setCampaigns($campaigns)
  {
    $this->campaigns = $campaigns;
  }
  /**
   * @return string[]
   */
  public function getCampaigns()
  {
    return $this->campaigns;
  }
  /**
   * Output only. The custom audience opt in recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCustomAudienceOptInRecommendation $customAudienceOptInRecommendation
   */
  public function setCustomAudienceOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCustomAudienceOptInRecommendation $customAudienceOptInRecommendation)
  {
    $this->customAudienceOptInRecommendation = $customAudienceOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCustomAudienceOptInRecommendation
   */
  public function getCustomAudienceOptInRecommendation()
  {
    return $this->customAudienceOptInRecommendation;
  }
  /**
   * Output only. Whether the recommendation is dismissed or not.
   *
   * @param bool $dismissed
   */
  public function setDismissed($dismissed)
  {
    $this->dismissed = $dismissed;
  }
  /**
   * @return bool
   */
  public function getDismissed()
  {
    return $this->dismissed;
  }
  /**
   * Output only. The Display Expansion opt-in recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationDisplayExpansionOptInRecommendation $displayExpansionOptInRecommendation
   */
  public function setDisplayExpansionOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationDisplayExpansionOptInRecommendation $displayExpansionOptInRecommendation)
  {
    $this->displayExpansionOptInRecommendation = $displayExpansionOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationDisplayExpansionOptInRecommendation
   */
  public function getDisplayExpansionOptInRecommendation()
  {
    return $this->displayExpansionOptInRecommendation;
  }
  /**
   * Output only. Recommendation to enable dynamic image extensions on the
   * account, allowing Google to find the best images from ad landing pages and
   * complement text ads.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationDynamicImageExtensionOptInRecommendation $dynamicImageExtensionOptInRecommendation
   */
  public function setDynamicImageExtensionOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationDynamicImageExtensionOptInRecommendation $dynamicImageExtensionOptInRecommendation)
  {
    $this->dynamicImageExtensionOptInRecommendation = $dynamicImageExtensionOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationDynamicImageExtensionOptInRecommendation
   */
  public function getDynamicImageExtensionOptInRecommendation()
  {
    return $this->dynamicImageExtensionOptInRecommendation;
  }
  /**
   * Output only. The Enhanced Cost-Per-Click Opt-In recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationEnhancedCpcOptInRecommendation $enhancedCpcOptInRecommendation
   */
  public function setEnhancedCpcOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationEnhancedCpcOptInRecommendation $enhancedCpcOptInRecommendation)
  {
    $this->enhancedCpcOptInRecommendation = $enhancedCpcOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationEnhancedCpcOptInRecommendation
   */
  public function getEnhancedCpcOptInRecommendation()
  {
    return $this->enhancedCpcOptInRecommendation;
  }
  /**
   * Output only. The forecasting campaign budget recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $forecastingCampaignBudgetRecommendation
   */
  public function setForecastingCampaignBudgetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $forecastingCampaignBudgetRecommendation)
  {
    $this->forecastingCampaignBudgetRecommendation = $forecastingCampaignBudgetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation
   */
  public function getForecastingCampaignBudgetRecommendation()
  {
    return $this->forecastingCampaignBudgetRecommendation;
  }
  /**
   * Output only. The forecasting set target CPA recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation $forecastingSetTargetCpaRecommendation
   */
  public function setForecastingSetTargetCpaRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation $forecastingSetTargetCpaRecommendation)
  {
    $this->forecastingSetTargetCpaRecommendation = $forecastingSetTargetCpaRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation
   */
  public function getForecastingSetTargetCpaRecommendation()
  {
    return $this->forecastingSetTargetCpaRecommendation;
  }
  /**
   * Output only. The forecasting set target ROAS recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation $forecastingSetTargetRoasRecommendation
   */
  public function setForecastingSetTargetRoasRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation $forecastingSetTargetRoasRecommendation)
  {
    $this->forecastingSetTargetRoasRecommendation = $forecastingSetTargetRoasRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation
   */
  public function getForecastingSetTargetRoasRecommendation()
  {
    return $this->forecastingSetTargetRoasRecommendation;
  }
  /**
   * Output only. The impact on account performance as a result of applying the
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact $impact
   */
  public function setImpact(GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact $impact)
  {
    $this->impact = $impact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact
   */
  public function getImpact()
  {
    return $this->impact;
  }
  /**
   * Output only. The improve Demand Gen ad strength recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation $improveDemandGenAdStrengthRecommendation
   */
  public function setImproveDemandGenAdStrengthRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation $improveDemandGenAdStrengthRecommendation)
  {
    $this->improveDemandGenAdStrengthRecommendation = $improveDemandGenAdStrengthRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationImproveDemandGenAdStrengthRecommendation
   */
  public function getImproveDemandGenAdStrengthRecommendation()
  {
    return $this->improveDemandGenAdStrengthRecommendation;
  }
  /**
   * Output only. Recommendation to deploy Google Tag on more pages.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationImproveGoogleTagCoverageRecommendation $improveGoogleTagCoverageRecommendation
   */
  public function setImproveGoogleTagCoverageRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationImproveGoogleTagCoverageRecommendation $improveGoogleTagCoverageRecommendation)
  {
    $this->improveGoogleTagCoverageRecommendation = $improveGoogleTagCoverageRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationImproveGoogleTagCoverageRecommendation
   */
  public function getImproveGoogleTagCoverageRecommendation()
  {
    return $this->improveGoogleTagCoverageRecommendation;
  }
  /**
   * Output only. The improve Performance Max ad strength recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation $improvePerformanceMaxAdStrengthRecommendation
   */
  public function setImprovePerformanceMaxAdStrengthRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation $improvePerformanceMaxAdStrengthRecommendation)
  {
    $this->improvePerformanceMaxAdStrengthRecommendation = $improvePerformanceMaxAdStrengthRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationImprovePerformanceMaxAdStrengthRecommendation
   */
  public function getImprovePerformanceMaxAdStrengthRecommendation()
  {
    return $this->improvePerformanceMaxAdStrengthRecommendation;
  }
  /**
   * Output only. The keyword match type recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation $keywordMatchTypeRecommendation
   */
  public function setKeywordMatchTypeRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation $keywordMatchTypeRecommendation)
  {
    $this->keywordMatchTypeRecommendation = $keywordMatchTypeRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationKeywordMatchTypeRecommendation
   */
  public function getKeywordMatchTypeRecommendation()
  {
    return $this->keywordMatchTypeRecommendation;
  }
  /**
   * Output only. The keyword recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationKeywordRecommendation $keywordRecommendation
   */
  public function setKeywordRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationKeywordRecommendation $keywordRecommendation)
  {
    $this->keywordRecommendation = $keywordRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationKeywordRecommendation
   */
  public function getKeywordRecommendation()
  {
    return $this->keywordRecommendation;
  }
  /**
   * Output only. The lead form asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationLeadFormAssetRecommendation $leadFormAssetRecommendation
   */
  public function setLeadFormAssetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationLeadFormAssetRecommendation $leadFormAssetRecommendation)
  {
    $this->leadFormAssetRecommendation = $leadFormAssetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationLeadFormAssetRecommendation
   */
  public function getLeadFormAssetRecommendation()
  {
    return $this->leadFormAssetRecommendation;
  }
  /**
   * Output only. Recommendation to lower Target ROAS.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationLowerTargetRoasRecommendation $lowerTargetRoasRecommendation
   */
  public function setLowerTargetRoasRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationLowerTargetRoasRecommendation $lowerTargetRoasRecommendation)
  {
    $this->lowerTargetRoasRecommendation = $lowerTargetRoasRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationLowerTargetRoasRecommendation
   */
  public function getLowerTargetRoasRecommendation()
  {
    return $this->lowerTargetRoasRecommendation;
  }
  /**
   * Output only. The marginal ROI campaign budget recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $marginalRoiCampaignBudgetRecommendation
   */
  public function setMarginalRoiCampaignBudgetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $marginalRoiCampaignBudgetRecommendation)
  {
    $this->marginalRoiCampaignBudgetRecommendation = $marginalRoiCampaignBudgetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation
   */
  public function getMarginalRoiCampaignBudgetRecommendation()
  {
    return $this->marginalRoiCampaignBudgetRecommendation;
  }
  /**
   * Output only. The MaximizeClicks Opt-In recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationMaximizeClicksOptInRecommendation $maximizeClicksOptInRecommendation
   */
  public function setMaximizeClicksOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationMaximizeClicksOptInRecommendation $maximizeClicksOptInRecommendation)
  {
    $this->maximizeClicksOptInRecommendation = $maximizeClicksOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationMaximizeClicksOptInRecommendation
   */
  public function getMaximizeClicksOptInRecommendation()
  {
    return $this->maximizeClicksOptInRecommendation;
  }
  /**
   * Output only. The Maximize Conversion Value opt-in recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionValueOptInRecommendation $maximizeConversionValueOptInRecommendation
   */
  public function setMaximizeConversionValueOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionValueOptInRecommendation $maximizeConversionValueOptInRecommendation)
  {
    $this->maximizeConversionValueOptInRecommendation = $maximizeConversionValueOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionValueOptInRecommendation
   */
  public function getMaximizeConversionValueOptInRecommendation()
  {
    return $this->maximizeConversionValueOptInRecommendation;
  }
  /**
   * Output only. The MaximizeConversions Opt-In recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionsOptInRecommendation $maximizeConversionsOptInRecommendation
   */
  public function setMaximizeConversionsOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionsOptInRecommendation $maximizeConversionsOptInRecommendation)
  {
    $this->maximizeConversionsOptInRecommendation = $maximizeConversionsOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationMaximizeConversionsOptInRecommendation
   */
  public function getMaximizeConversionsOptInRecommendation()
  {
    return $this->maximizeConversionsOptInRecommendation;
  }
  /**
   * Output only. The Dynamic Search Ads to Performance Max migration
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationMigrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation $migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation
   */
  public function setMigrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationMigrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation $migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation)
  {
    $this->migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation = $migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationMigrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation
   */
  public function getMigrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation()
  {
    return $this->migrateDynamicSearchAdsCampaignToPerformanceMaxRecommendation;
  }
  /**
   * Output only. The move unused budget recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation $moveUnusedBudgetRecommendation
   */
  public function setMoveUnusedBudgetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation $moveUnusedBudgetRecommendation)
  {
    $this->moveUnusedBudgetRecommendation = $moveUnusedBudgetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation
   */
  public function getMoveUnusedBudgetRecommendation()
  {
    return $this->moveUnusedBudgetRecommendation;
  }
  /**
   * Output only. The Optimize Ad Rotation recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationOptimizeAdRotationRecommendation $optimizeAdRotationRecommendation
   */
  public function setOptimizeAdRotationRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationOptimizeAdRotationRecommendation $optimizeAdRotationRecommendation)
  {
    $this->optimizeAdRotationRecommendation = $optimizeAdRotationRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationOptimizeAdRotationRecommendation
   */
  public function getOptimizeAdRotationRecommendation()
  {
    return $this->optimizeAdRotationRecommendation;
  }
  /**
   * Output only. Recommendation to turn on Final URL expansion for your
   * Performance Max campaigns.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxFinalUrlOptInRecommendation $performanceMaxFinalUrlOptInRecommendation
   */
  public function setPerformanceMaxFinalUrlOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxFinalUrlOptInRecommendation $performanceMaxFinalUrlOptInRecommendation)
  {
    $this->performanceMaxFinalUrlOptInRecommendation = $performanceMaxFinalUrlOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxFinalUrlOptInRecommendation
   */
  public function getPerformanceMaxFinalUrlOptInRecommendation()
  {
    return $this->performanceMaxFinalUrlOptInRecommendation;
  }
  /**
   * Output only. The Performance Max Opt In recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxOptInRecommendation $performanceMaxOptInRecommendation
   */
  public function setPerformanceMaxOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxOptInRecommendation $performanceMaxOptInRecommendation)
  {
    $this->performanceMaxOptInRecommendation = $performanceMaxOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationPerformanceMaxOptInRecommendation
   */
  public function getPerformanceMaxOptInRecommendation()
  {
    return $this->performanceMaxOptInRecommendation;
  }
  /**
   * Output only. The raise target CPA bid too low recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation $raiseTargetCpaBidTooLowRecommendation
   */
  public function setRaiseTargetCpaBidTooLowRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation $raiseTargetCpaBidTooLowRecommendation)
  {
    $this->raiseTargetCpaBidTooLowRecommendation = $raiseTargetCpaBidTooLowRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaBidTooLowRecommendation
   */
  public function getRaiseTargetCpaBidTooLowRecommendation()
  {
    return $this->raiseTargetCpaBidTooLowRecommendation;
  }
  /**
   * Output only. Recommendation to raise Target CPA.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation $raiseTargetCpaRecommendation
   */
  public function setRaiseTargetCpaRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation $raiseTargetCpaRecommendation)
  {
    $this->raiseTargetCpaRecommendation = $raiseTargetCpaRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation
   */
  public function getRaiseTargetCpaRecommendation()
  {
    return $this->raiseTargetCpaRecommendation;
  }
  /**
   * Output only. The refresh customer list recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation $refreshCustomerMatchListRecommendation
   */
  public function setRefreshCustomerMatchListRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation $refreshCustomerMatchListRecommendation)
  {
    $this->refreshCustomerMatchListRecommendation = $refreshCustomerMatchListRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation
   */
  public function getRefreshCustomerMatchListRecommendation()
  {
    return $this->refreshCustomerMatchListRecommendation;
  }
  /**
   * Immutable. The resource name of the recommendation.
   * `customers/{customer_id}/recommendations/{recommendation_id}`
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
   * Output only. The responsive search ad asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdAssetRecommendation $responsiveSearchAdAssetRecommendation
   */
  public function setResponsiveSearchAdAssetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdAssetRecommendation $responsiveSearchAdAssetRecommendation)
  {
    $this->responsiveSearchAdAssetRecommendation = $responsiveSearchAdAssetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdAssetRecommendation
   */
  public function getResponsiveSearchAdAssetRecommendation()
  {
    return $this->responsiveSearchAdAssetRecommendation;
  }
  /**
   * Output only. The responsive search ad improve ad strength recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation $responsiveSearchAdImproveAdStrengthRecommendation
   */
  public function setResponsiveSearchAdImproveAdStrengthRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation $responsiveSearchAdImproveAdStrengthRecommendation)
  {
    $this->responsiveSearchAdImproveAdStrengthRecommendation = $responsiveSearchAdImproveAdStrengthRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdImproveAdStrengthRecommendation
   */
  public function getResponsiveSearchAdImproveAdStrengthRecommendation()
  {
    return $this->responsiveSearchAdImproveAdStrengthRecommendation;
  }
  /**
   * Output only. The add responsive search ad recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdRecommendation $responsiveSearchAdRecommendation
   */
  public function setResponsiveSearchAdRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdRecommendation $responsiveSearchAdRecommendation)
  {
    $this->responsiveSearchAdRecommendation = $responsiveSearchAdRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationResponsiveSearchAdRecommendation
   */
  public function getResponsiveSearchAdRecommendation()
  {
    return $this->responsiveSearchAdRecommendation;
  }
  /**
   * Output only. The Search Partners Opt-In recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationSearchPartnersOptInRecommendation $searchPartnersOptInRecommendation
   */
  public function setSearchPartnersOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationSearchPartnersOptInRecommendation $searchPartnersOptInRecommendation)
  {
    $this->searchPartnersOptInRecommendation = $searchPartnersOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationSearchPartnersOptInRecommendation
   */
  public function getSearchPartnersOptInRecommendation()
  {
    return $this->searchPartnersOptInRecommendation;
  }
  /**
   * Output only. The set target CPA recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation $setTargetCpaRecommendation
   */
  public function setSetTargetCpaRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation $setTargetCpaRecommendation)
  {
    $this->setTargetCpaRecommendation = $setTargetCpaRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetCpaRecommendation
   */
  public function getSetTargetCpaRecommendation()
  {
    return $this->setTargetCpaRecommendation;
  }
  /**
   * Output only. The set target ROAS recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation $setTargetRoasRecommendation
   */
  public function setSetTargetRoasRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation $setTargetRoasRecommendation)
  {
    $this->setTargetRoasRecommendation = $setTargetRoasRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation
   */
  public function getSetTargetRoasRecommendation()
  {
    return $this->setTargetRoasRecommendation;
  }
  /**
   * Output only. The shopping add age group recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddAgeGroupRecommendation
   */
  public function setShoppingAddAgeGroupRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddAgeGroupRecommendation)
  {
    $this->shoppingAddAgeGroupRecommendation = $shoppingAddAgeGroupRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation
   */
  public function getShoppingAddAgeGroupRecommendation()
  {
    return $this->shoppingAddAgeGroupRecommendation;
  }
  /**
   * Output only. The shopping add color recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddColorRecommendation
   */
  public function setShoppingAddColorRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddColorRecommendation)
  {
    $this->shoppingAddColorRecommendation = $shoppingAddColorRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation
   */
  public function getShoppingAddColorRecommendation()
  {
    return $this->shoppingAddColorRecommendation;
  }
  /**
   * Output only. The shopping add gender recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddGenderRecommendation
   */
  public function setShoppingAddGenderRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddGenderRecommendation)
  {
    $this->shoppingAddGenderRecommendation = $shoppingAddGenderRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation
   */
  public function getShoppingAddGenderRecommendation()
  {
    return $this->shoppingAddGenderRecommendation;
  }
  /**
   * Output only. The shopping add GTIN recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddGtinRecommendation
   */
  public function setShoppingAddGtinRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddGtinRecommendation)
  {
    $this->shoppingAddGtinRecommendation = $shoppingAddGtinRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation
   */
  public function getShoppingAddGtinRecommendation()
  {
    return $this->shoppingAddGtinRecommendation;
  }
  /**
   * Output only. The shopping add more identifiers recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddMoreIdentifiersRecommendation
   */
  public function setShoppingAddMoreIdentifiersRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddMoreIdentifiersRecommendation)
  {
    $this->shoppingAddMoreIdentifiersRecommendation = $shoppingAddMoreIdentifiersRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation
   */
  public function getShoppingAddMoreIdentifiersRecommendation()
  {
    return $this->shoppingAddMoreIdentifiersRecommendation;
  }
  /**
   * Output only. The shopping add products to campaign recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation $shoppingAddProductsToCampaignRecommendation
   */
  public function setShoppingAddProductsToCampaignRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation $shoppingAddProductsToCampaignRecommendation)
  {
    $this->shoppingAddProductsToCampaignRecommendation = $shoppingAddProductsToCampaignRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation
   */
  public function getShoppingAddProductsToCampaignRecommendation()
  {
    return $this->shoppingAddProductsToCampaignRecommendation;
  }
  /**
   * Output only. The shopping add size recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddSizeRecommendation
   */
  public function setShoppingAddSizeRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation $shoppingAddSizeRecommendation)
  {
    $this->shoppingAddSizeRecommendation = $shoppingAddSizeRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingOfferAttributeRecommendation
   */
  public function getShoppingAddSizeRecommendation()
  {
    return $this->shoppingAddSizeRecommendation;
  }
  /**
   * Output only. The shopping fix disapproved products recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingFixDisapprovedProductsRecommendation $shoppingFixDisapprovedProductsRecommendation
   */
  public function setShoppingFixDisapprovedProductsRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingFixDisapprovedProductsRecommendation $shoppingFixDisapprovedProductsRecommendation)
  {
    $this->shoppingFixDisapprovedProductsRecommendation = $shoppingFixDisapprovedProductsRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingFixDisapprovedProductsRecommendation
   */
  public function getShoppingFixDisapprovedProductsRecommendation()
  {
    return $this->shoppingFixDisapprovedProductsRecommendation;
  }
  /**
   * Output only. The shopping fix Merchant Center account suspension warning
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation $shoppingFixMerchantCenterAccountSuspensionWarningRecommendation
   */
  public function setShoppingFixMerchantCenterAccountSuspensionWarningRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation $shoppingFixMerchantCenterAccountSuspensionWarningRecommendation)
  {
    $this->shoppingFixMerchantCenterAccountSuspensionWarningRecommendation = $shoppingFixMerchantCenterAccountSuspensionWarningRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation
   */
  public function getShoppingFixMerchantCenterAccountSuspensionWarningRecommendation()
  {
    return $this->shoppingFixMerchantCenterAccountSuspensionWarningRecommendation;
  }
  /**
   * Output only. The shopping fix suspended Merchant Center account
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation $shoppingFixSuspendedMerchantCenterAccountRecommendation
   */
  public function setShoppingFixSuspendedMerchantCenterAccountRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation $shoppingFixSuspendedMerchantCenterAccountRecommendation)
  {
    $this->shoppingFixSuspendedMerchantCenterAccountRecommendation = $shoppingFixSuspendedMerchantCenterAccountRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingMerchantCenterAccountSuspensionRecommendation
   */
  public function getShoppingFixSuspendedMerchantCenterAccountRecommendation()
  {
    return $this->shoppingFixSuspendedMerchantCenterAccountRecommendation;
  }
  /**
   * Output only. The shopping migrate Regular Shopping Campaign offers to
   * Performance Max recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation $shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation
   */
  public function setShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation $shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation)
  {
    $this->shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation = $shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation
   */
  public function getShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation()
  {
    return $this->shoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation;
  }
  /**
   * Output only. The shopping target all offers recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationShoppingTargetAllOffersRecommendation $shoppingTargetAllOffersRecommendation
   */
  public function setShoppingTargetAllOffersRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationShoppingTargetAllOffersRecommendation $shoppingTargetAllOffersRecommendation)
  {
    $this->shoppingTargetAllOffersRecommendation = $shoppingTargetAllOffersRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationShoppingTargetAllOffersRecommendation
   */
  public function getShoppingTargetAllOffersRecommendation()
  {
    return $this->shoppingTargetAllOffersRecommendation;
  }
  /**
   * Output only. The sitelink asset recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation $sitelinkAssetRecommendation
   */
  public function setSitelinkAssetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation $sitelinkAssetRecommendation)
  {
    $this->sitelinkAssetRecommendation = $sitelinkAssetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation
   */
  public function getSitelinkAssetRecommendation()
  {
    return $this->sitelinkAssetRecommendation;
  }
  /**
   * Output only. The TargetCPA opt-in recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendation $targetCpaOptInRecommendation
   */
  public function setTargetCpaOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendation $targetCpaOptInRecommendation)
  {
    $this->targetCpaOptInRecommendation = $targetCpaOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendation
   */
  public function getTargetCpaOptInRecommendation()
  {
    return $this->targetCpaOptInRecommendation;
  }
  /**
   * Output only. The Target ROAS opt-in recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation $targetRoasOptInRecommendation
   */
  public function setTargetRoasOptInRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation $targetRoasOptInRecommendation)
  {
    $this->targetRoasOptInRecommendation = $targetRoasOptInRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation
   */
  public function getTargetRoasOptInRecommendation()
  {
    return $this->targetRoasOptInRecommendation;
  }
  /**
   * Output only. Add expanded text ad recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation $textAdRecommendation
   */
  public function setTextAdRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation $textAdRecommendation)
  {
    $this->textAdRecommendation = $textAdRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation
   */
  public function getTextAdRecommendation()
  {
    return $this->textAdRecommendation;
  }
  /**
   * Output only. The type of recommendation.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BUDGET, KEYWORD, TEXT_AD,
   * TARGET_CPA_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN, ENHANCED_CPC_OPT_IN,
   * SEARCH_PARTNERS_OPT_IN, MAXIMIZE_CLICKS_OPT_IN, OPTIMIZE_AD_ROTATION,
   * KEYWORD_MATCH_TYPE, MOVE_UNUSED_BUDGET, FORECASTING_CAMPAIGN_BUDGET,
   * TARGET_ROAS_OPT_IN, RESPONSIVE_SEARCH_AD, MARGINAL_ROI_CAMPAIGN_BUDGET,
   * USE_BROAD_MATCH_KEYWORD, RESPONSIVE_SEARCH_AD_ASSET,
   * UPGRADE_SMART_SHOPPING_CAMPAIGN_TO_PERFORMANCE_MAX,
   * RESPONSIVE_SEARCH_AD_IMPROVE_AD_STRENGTH, DISPLAY_EXPANSION_OPT_IN,
   * UPGRADE_LOCAL_CAMPAIGN_TO_PERFORMANCE_MAX, RAISE_TARGET_CPA_BID_TOO_LOW,
   * FORECASTING_SET_TARGET_ROAS, CALLOUT_ASSET, SITELINK_ASSET, CALL_ASSET,
   * SHOPPING_ADD_AGE_GROUP, SHOPPING_ADD_COLOR, SHOPPING_ADD_GENDER,
   * SHOPPING_ADD_GTIN, SHOPPING_ADD_MORE_IDENTIFIERS, SHOPPING_ADD_SIZE,
   * SHOPPING_ADD_PRODUCTS_TO_CAMPAIGN, SHOPPING_FIX_DISAPPROVED_PRODUCTS,
   * SHOPPING_TARGET_ALL_OFFERS, SHOPPING_FIX_SUSPENDED_MERCHANT_CENTER_ACCOUNT,
   * SHOPPING_FIX_MERCHANT_CENTER_ACCOUNT_SUSPENSION_WARNING,
   * SHOPPING_MIGRATE_REGULAR_SHOPPING_CAMPAIGN_OFFERS_TO_PERFORMANCE_MAX,
   * DYNAMIC_IMAGE_EXTENSION_OPT_IN, RAISE_TARGET_CPA, LOWER_TARGET_ROAS,
   * PERFORMANCE_MAX_OPT_IN, IMPROVE_PERFORMANCE_MAX_AD_STRENGTH,
   * MIGRATE_DYNAMIC_SEARCH_ADS_CAMPAIGN_TO_PERFORMANCE_MAX,
   * FORECASTING_SET_TARGET_CPA, SET_TARGET_CPA, SET_TARGET_ROAS,
   * MAXIMIZE_CONVERSION_VALUE_OPT_IN, IMPROVE_GOOGLE_TAG_COVERAGE,
   * PERFORMANCE_MAX_FINAL_URL_OPT_IN, REFRESH_CUSTOMER_MATCH_LIST,
   * CUSTOM_AUDIENCE_OPT_IN, LEAD_FORM_ASSET, IMPROVE_DEMAND_GEN_AD_STRENGTH
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. The upgrade a Local campaign to a Performance Max campaign
   * recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationUpgradeLocalCampaignToPerformanceMaxRecommendation $upgradeLocalCampaignToPerformanceMaxRecommendation
   */
  public function setUpgradeLocalCampaignToPerformanceMaxRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationUpgradeLocalCampaignToPerformanceMaxRecommendation $upgradeLocalCampaignToPerformanceMaxRecommendation)
  {
    $this->upgradeLocalCampaignToPerformanceMaxRecommendation = $upgradeLocalCampaignToPerformanceMaxRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationUpgradeLocalCampaignToPerformanceMaxRecommendation
   */
  public function getUpgradeLocalCampaignToPerformanceMaxRecommendation()
  {
    return $this->upgradeLocalCampaignToPerformanceMaxRecommendation;
  }
  /**
   * Output only. The upgrade a Smart Shopping campaign to a Performance Max
   * campaign recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationUpgradeSmartShoppingCampaignToPerformanceMaxRecommendation $upgradeSmartShoppingCampaignToPerformanceMaxRecommendation
   */
  public function setUpgradeSmartShoppingCampaignToPerformanceMaxRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationUpgradeSmartShoppingCampaignToPerformanceMaxRecommendation $upgradeSmartShoppingCampaignToPerformanceMaxRecommendation)
  {
    $this->upgradeSmartShoppingCampaignToPerformanceMaxRecommendation = $upgradeSmartShoppingCampaignToPerformanceMaxRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationUpgradeSmartShoppingCampaignToPerformanceMaxRecommendation
   */
  public function getUpgradeSmartShoppingCampaignToPerformanceMaxRecommendation()
  {
    return $this->upgradeSmartShoppingCampaignToPerformanceMaxRecommendation;
  }
  /**
   * Output only. The use broad match keyword recommendation.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation $useBroadMatchKeywordRecommendation
   */
  public function setUseBroadMatchKeywordRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation $useBroadMatchKeywordRecommendation)
  {
    $this->useBroadMatchKeywordRecommendation = $useBroadMatchKeywordRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationUseBroadMatchKeywordRecommendation
   */
  public function getUseBroadMatchKeywordRecommendation()
  {
    return $this->useBroadMatchKeywordRecommendation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendation');
