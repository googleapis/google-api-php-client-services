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

class GoogleAdsSearchads360V23ResourcesRecommendationSubscription extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Output-only. Represents a format not yet defined in this enum.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * A subscription in the enabled state will automatically apply any
   * recommendations of that type.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Recommendations of the relevant type will not be automatically applied.
   * Subscriptions cannot be deleted. Once created, they can only move between
   * enabled and paused states.
   */
  public const STATUS_PAUSED = 'PAUSED';
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
  /**
   * Output only. Time in seconds when the subscription was first created. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss"
   * format.
   *
   * @var string
   */
  public $createDateTime;
  /**
   * Output only. Contains the time in microseconds, when the Recommendation
   * Subscription was last updated. The datetime is in the customer's time zone
   * and in "yyyy-MM-dd HH:mm:ss.ssssss" format.
   *
   * @var string
   */
  public $modifyDateTime;
  /**
   * Immutable. The resource name of the recommendation subscription.
   * `customers/{customer_id}/recommendationSubscriptions/{recommendation_type}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Required. Status of the subscription, either enabled or paused.
   *
   * @var string
   */
  public $status;
  /**
   * Required. Immutable. The type of recommendation subscribed to.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Time in seconds when the subscription was first created. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss"
   * format.
   *
   * @param string $createDateTime
   */
  public function setCreateDateTime($createDateTime)
  {
    $this->createDateTime = $createDateTime;
  }
  /**
   * @return string
   */
  public function getCreateDateTime()
  {
    return $this->createDateTime;
  }
  /**
   * Output only. Contains the time in microseconds, when the Recommendation
   * Subscription was last updated. The datetime is in the customer's time zone
   * and in "yyyy-MM-dd HH:mm:ss.ssssss" format.
   *
   * @param string $modifyDateTime
   */
  public function setModifyDateTime($modifyDateTime)
  {
    $this->modifyDateTime = $modifyDateTime;
  }
  /**
   * @return string
   */
  public function getModifyDateTime()
  {
    return $this->modifyDateTime;
  }
  /**
   * Immutable. The resource name of the recommendation subscription.
   * `customers/{customer_id}/recommendationSubscriptions/{recommendation_type}`
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
   * Required. Status of the subscription, either enabled or paused.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, PAUSED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Required. Immutable. The type of recommendation subscribed to.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationSubscription::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationSubscription');
