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

class GoogleAdsSearchads360V23ResourcesCampaign extends \Google\Collection
{
  /**
   * No value has been specified.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Ad serving is optimized based on CTR for the campaign.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_OPTIMIZE = 'OPTIMIZE';
  /**
   * Ad serving is optimized based on CTR * Conversion for the campaign. If the
   * campaign is not in the conversion optimizer bidding strategy, it will
   * default to OPTIMIZED.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_CONVERSION_OPTIMIZE = 'CONVERSION_OPTIMIZE';
  /**
   * Ads are rotated evenly for 90 days, then optimized for clicks.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_ROTATE = 'ROTATE';
  /**
   * Show lower performing ads more evenly with higher performing ads, and do
   * not optimize.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_ROTATE_INDEFINITELY = 'ROTATE_INDEFINITELY';
  /**
   * Ad serving optimization status is not available.
   */
  public const AD_SERVING_OPTIMIZATION_STATUS_UNAVAILABLE = 'UNAVAILABLE';
  /**
   * Not specified.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used as a return value only. Represents value unknown in this version.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Mobile app campaigns for Search.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_SEARCH_MOBILE_APP = 'SEARCH_MOBILE_APP';
  /**
   * Mobile app campaigns for Display.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_DISPLAY_MOBILE_APP = 'DISPLAY_MOBILE_APP';
  /**
   * AdWords express campaigns for search.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_SEARCH_EXPRESS = 'SEARCH_EXPRESS';
  /**
   * AdWords Express campaigns for display.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_DISPLAY_EXPRESS = 'DISPLAY_EXPRESS';
  /**
   * Smart Shopping campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_SHOPPING_SMART_ADS = 'SHOPPING_SMART_ADS';
  /**
   * Gmail Ad campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_DISPLAY_GMAIL_AD = 'DISPLAY_GMAIL_AD';
  /**
   * Smart display campaigns. New campaigns of this sub type cannot be created.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_DISPLAY_SMART_CAMPAIGN = 'DISPLAY_SMART_CAMPAIGN';
  /**
   * Video TrueView for Action campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_VIDEO_ACTION = 'VIDEO_ACTION';
  /**
   * Video campaigns with non-skippable video ads.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_VIDEO_NON_SKIPPABLE = 'VIDEO_NON_SKIPPABLE';
  /**
   * App Campaign that lets you easily promote your Android or iOS app across
   * Google's top properties including Search, Play, YouTube, and the Google
   * Display Network.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_APP_CAMPAIGN = 'APP_CAMPAIGN';
  /**
   * App Campaign for engagement, focused on driving re-engagement with the app
   * across several of Google's top properties including Search, YouTube, and
   * the Google Display Network.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_APP_CAMPAIGN_FOR_ENGAGEMENT = 'APP_CAMPAIGN_FOR_ENGAGEMENT';
  /**
   * Campaigns specialized for local advertising.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_LOCAL_CAMPAIGN = 'LOCAL_CAMPAIGN';
  /**
   * Shopping Comparison Listing campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_SHOPPING_COMPARISON_LISTING_ADS = 'SHOPPING_COMPARISON_LISTING_ADS';
  /**
   * Standard Smart campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_SMART_CAMPAIGN = 'SMART_CAMPAIGN';
  /**
   * Video campaigns with sequence video ads.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_VIDEO_SEQUENCE = 'VIDEO_SEQUENCE';
  /**
   * App Campaign for pre registration, specialized for advertising mobile app
   * pre-registration, that targets multiple advertising channels across Google
   * Play, YouTube and Display Network.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_APP_CAMPAIGN_FOR_PRE_REGISTRATION = 'APP_CAMPAIGN_FOR_PRE_REGISTRATION';
  /**
   * Video reach campaign with Target Frequency bidding strategy.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_VIDEO_REACH_TARGET_FREQUENCY = 'VIDEO_REACH_TARGET_FREQUENCY';
  /**
   * Travel Activities campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_TRAVEL_ACTIVITIES = 'TRAVEL_ACTIVITIES';
  /**
   * Facebook tracking only social campaigns.
   */
  public const ADVERTISING_CHANNEL_SUB_TYPE_SOCIAL_FACEBOOK_TRACKING_ONLY = 'SOCIAL_FACEBOOK_TRACKING_ONLY';
  /**
   * Not specified.
   */
  public const ADVERTISING_CHANNEL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ADVERTISING_CHANNEL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Search Network. Includes display bundled, and Search+ campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SEARCH = 'SEARCH';
  /**
   * Google Display Network only.
   */
  public const ADVERTISING_CHANNEL_TYPE_DISPLAY = 'DISPLAY';
  /**
   * Shopping campaigns serve on the shopping property and on google.com search
   * results.
   */
  public const ADVERTISING_CHANNEL_TYPE_SHOPPING = 'SHOPPING';
  /**
   * Hotel Ads campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_HOTEL = 'HOTEL';
  /**
   * Video campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_VIDEO = 'VIDEO';
  /**
   * App Campaigns, and App Campaigns for Engagement, that run across multiple
   * channels.
   */
  public const ADVERTISING_CHANNEL_TYPE_MULTI_CHANNEL = 'MULTI_CHANNEL';
  /**
   * Local ads campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_LOCAL = 'LOCAL';
  /**
   * Smart campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SMART = 'SMART';
  /**
   * Performance Max campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_PERFORMANCE_MAX = 'PERFORMANCE_MAX';
  /**
   * Local services campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_LOCAL_SERVICES = 'LOCAL_SERVICES';
  /**
   * Travel campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_TRAVEL = 'TRAVEL';
  /**
   * Demand Gen campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_DEMAND_GEN = 'DEMAND_GEN';
  /**
   * Social campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SOCIAL = 'SOCIAL';
  /**
   * Signals that an unexpected error occurred, for example, no bidding strategy
   * type was found, or no status information was found.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The bid strategy is active, and AdWords cannot find any specific issues
   * with the strategy.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_ENABLED = 'ENABLED';
  /**
   * The bid strategy is learning because it has been recently created or
   * recently reactivated.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LEARNING_NEW = 'LEARNING_NEW';
  /**
   * The bid strategy is learning because of a recent setting change.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LEARNING_SETTING_CHANGE = 'LEARNING_SETTING_CHANGE';
  /**
   * The bid strategy is learning because of a recent budget change.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LEARNING_BUDGET_CHANGE = 'LEARNING_BUDGET_CHANGE';
  /**
   * The bid strategy is learning because of recent change in number of
   * campaigns, ad groups or keywords attached to it.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LEARNING_COMPOSITION_CHANGE = 'LEARNING_COMPOSITION_CHANGE';
  /**
   * The bid strategy depends on conversion reporting and the customer recently
   * modified conversion types that were relevant to the bid strategy.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LEARNING_CONVERSION_TYPE_CHANGE = 'LEARNING_CONVERSION_TYPE_CHANGE';
  /**
   * The bid strategy depends on conversion reporting and the customer recently
   * changed their conversion settings.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LEARNING_CONVERSION_SETTING_CHANGE = 'LEARNING_CONVERSION_SETTING_CHANGE';
  /**
   * The bid strategy is limited by its bid ceiling.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_CPC_BID_CEILING = 'LIMITED_BY_CPC_BID_CEILING';
  /**
   * The bid strategy is limited by its bid floor.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_CPC_BID_FLOOR = 'LIMITED_BY_CPC_BID_FLOOR';
  /**
   * The bid strategy is limited because there was not enough conversion traffic
   * over the past weeks.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_DATA = 'LIMITED_BY_DATA';
  /**
   * A significant fraction of keywords in this bid strategy are limited by
   * budget.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_BUDGET = 'LIMITED_BY_BUDGET';
  /**
   * The bid strategy cannot reach its target spend because its spend has been
   * de-prioritized.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_LOW_PRIORITY_SPEND = 'LIMITED_BY_LOW_PRIORITY_SPEND';
  /**
   * A significant fraction of keywords in this bid strategy have a low Quality
   * Score.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_LOW_QUALITY = 'LIMITED_BY_LOW_QUALITY';
  /**
   * The bid strategy cannot fully spend its budget because of narrow targeting.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_LIMITED_BY_INVENTORY = 'LIMITED_BY_INVENTORY';
  /**
   * Missing conversion tracking (no pings present) and/or remarketing lists for
   * SSC.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MISCONFIGURED_ZERO_ELIGIBILITY = 'MISCONFIGURED_ZERO_ELIGIBILITY';
  /**
   * The bid strategy depends on conversion reporting and the customer is
   * lacking conversion types that might be reported against this strategy.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MISCONFIGURED_CONVERSION_TYPES = 'MISCONFIGURED_CONVERSION_TYPES';
  /**
   * The bid strategy depends on conversion reporting and the customer's
   * conversion settings are misconfigured.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MISCONFIGURED_CONVERSION_SETTINGS = 'MISCONFIGURED_CONVERSION_SETTINGS';
  /**
   * There are campaigns outside the bid strategy that share budgets with
   * campaigns included in the strategy.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MISCONFIGURED_SHARED_BUDGET = 'MISCONFIGURED_SHARED_BUDGET';
  /**
   * The campaign has an invalid strategy type and is not serving.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MISCONFIGURED_STRATEGY_TYPE = 'MISCONFIGURED_STRATEGY_TYPE';
  /**
   * The bid strategy is not active. Either there are no active campaigns, ad
   * groups or keywords attached to the bid strategy. Or there are no active
   * budgets connected to the bid strategy.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_PAUSED = 'PAUSED';
  /**
   * This bid strategy currently does not support status reporting.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_UNAVAILABLE = 'UNAVAILABLE';
  /**
   * There were multiple LEARNING_* system statuses for this bid strategy during
   * the time in question.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MULTIPLE_LEARNING = 'MULTIPLE_LEARNING';
  /**
   * There were multiple LIMITED_* system statuses for this bid strategy during
   * the time in question.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MULTIPLE_LIMITED = 'MULTIPLE_LIMITED';
  /**
   * There were multiple MISCONFIGURED_* system statuses for this bid strategy
   * during the time in question.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MULTIPLE_MISCONFIGURED = 'MULTIPLE_MISCONFIGURED';
  /**
   * There were multiple system statuses for this bid strategy during the time
   * in question.
   */
  public const BIDDING_STRATEGY_SYSTEM_STATUS_MULTIPLE = 'MULTIPLE';
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
   * Not specified.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign contains political advertising targeted towards the EU. The
   * campaign will be restricted from serving ads in the EU.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_CONTAINS_EU_POLITICAL_ADVERTISING = 'CONTAINS_EU_POLITICAL_ADVERTISING';
  /**
   * The campaign does not contain political advertising targeted towards the
   * EU. No additional serving restrictions will apply.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING = 'DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING';
  /**
   * Not specified.
   */
  public const EXPERIMENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EXPERIMENT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * This is a regular campaign.
   */
  public const EXPERIMENT_TYPE_BASE = 'BASE';
  /**
   * This is a draft version of a campaign. It has some modifications from a
   * base campaign, but it does not serve or accrue metrics.
   */
  public const EXPERIMENT_TYPE_DRAFT = 'DRAFT';
  /**
   * This is an experiment version of a campaign. It has some modifications from
   * a base campaign, and a percentage of traffic is being diverted from the
   * BASE campaign to this experiment campaign.
   */
  public const EXPERIMENT_TYPE_EXPERIMENT = 'EXPERIMENT';
  /**
   * No value has been specified.
   */
  public const KEYWORD_MATCH_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const KEYWORD_MATCH_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Campaign level broad match.
   */
  public const KEYWORD_MATCH_TYPE_BROAD = 'BROAD';
  /**
   * Not specified.
   */
  public const LISTING_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LISTING_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * This campaign serves vehicle ads.
   */
  public const LISTING_TYPE_VEHICLES = 'VEHICLES';
  /**
   * Not specified.
   */
  public const PAYMENT_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PAYMENT_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * Pay per interaction.
   */
  public const PAYMENT_MODE_CLICKS = 'CLICKS';
  /**
   * Pay per conversion value. This mode is only supported by campaigns with
   * AdvertisingChannelType.HOTEL, BiddingStrategyType.COMMISSION, and
   * BudgetType..
   */
  public const PAYMENT_MODE_CONVERSION_VALUE = 'CONVERSION_VALUE';
  /**
   * Pay per conversion. This mode is only supported by campaigns with
   * AdvertisingChannelType.DISPLAY (excluding
   * AdvertisingChannelSubType.DISPLAY_GMAIL), BiddingStrategyType.TARGET_CPA,
   * and BudgetType.FIXED_CPA. The customer must also be eligible for this mode.
   * See Customer.eligibility_failure_reasons for details.
   */
  public const PAYMENT_MODE_CONVERSIONS = 'CONVERSIONS';
  /**
   * Pay per guest stay value. This mode is only supported by campaigns with
   * AdvertisingChannelType.HOTEL, BiddingStrategyType.COMMISSION, and
   * BudgetType.STANDARD.
   */
  public const PAYMENT_MODE_GUEST_STAY = 'GUEST_STAY';
  /**
   * Not specified.
   */
  public const PRIMARY_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRIMARY_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign is eligible to serve.
   */
  public const PRIMARY_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * The user-specified campaign status is paused.
   */
  public const PRIMARY_STATUS_PAUSED = 'PAUSED';
  /**
   * The user-specified campaign status is removed.
   */
  public const PRIMARY_STATUS_REMOVED = 'REMOVED';
  /**
   * The user-specified time for this campaign to end has passed.
   */
  public const PRIMARY_STATUS_ENDED = 'ENDED';
  /**
   * The campaign may serve in the future.
   */
  public const PRIMARY_STATUS_PENDING = 'PENDING';
  /**
   * The campaign or its associated entities have incorrect user-specified
   * settings.
   */
  public const PRIMARY_STATUS_MISCONFIGURED = 'MISCONFIGURED';
  /**
   * The campaign or its associated entities are limited by user-specified
   * settings.
   */
  public const PRIMARY_STATUS_LIMITED = 'LIMITED';
  /**
   * The automated bidding system is adjusting to user-specified changes to the
   * campaign or associated entities.
   */
  public const PRIMARY_STATUS_LEARNING = 'LEARNING';
  /**
   * The campaign is not eligible to serve.
   */
  public const PRIMARY_STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
  /**
   * The selective optimization mode has not been specified.
   */
  public const SELECTIVE_OPTIMIZATION_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The selective optimization mode is not known in this version.
   */
  public const SELECTIVE_OPTIMIZATION_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * Google Ads selective optimization setting has no constraints.
   */
  public const SELECTIVE_OPTIMIZATION_MODE_UNCONSTRAINED = 'UNCONSTRAINED';
  /**
   * Google Ads selective optimization setting matches Search Ads 360 effective
   * campaign level selective optimization setting.
   */
  public const SELECTIVE_OPTIMIZATION_MODE_MATCHES_SEARCH_ADS360_EFFECTIVE_CAMPAIGN_LEVEL_CONFIG = 'MATCHES_SEARCH_ADS360_EFFECTIVE_CAMPAIGN_LEVEL_CONFIG';
  /**
   * No value has been specified.
   */
  public const SERVING_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const SERVING_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Serving.
   */
  public const SERVING_STATUS_SERVING = 'SERVING';
  /**
   * None.
   */
  public const SERVING_STATUS_NONE = 'NONE';
  /**
   * Ended.
   */
  public const SERVING_STATUS_ENDED = 'ENDED';
  /**
   * Pending.
   */
  public const SERVING_STATUS_PENDING = 'PENDING';
  /**
   * Suspended.
   */
  public const SERVING_STATUS_SUSPENDED = 'SUSPENDED';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Campaign is active and can show ads.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Campaign has been paused by the user.
   */
  public const STATUS_PAUSED = 'PAUSED';
  /**
   * Campaign has been removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_UNKNOWN = 'UNKNOWN';
  /**
   * This option lets you show ads across all inventory on YouTube and video
   * partners that meet our standards for monetization. This option may be an
   * appropriate choice for brands that want maximum access to the full breadth
   * of videos eligible for ads, including, for example, videos that have strong
   * profanity in the context of comedy or a documentary, or excessive violence
   * as featured in video games.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_EXPANDED_INVENTORY = 'EXPANDED_INVENTORY';
  /**
   * This option lets you show ads across a wide range of content that's
   * appropriate for most brands, such as popular music videos, documentaries,
   * and movie trailers. The content you can show ads on is based on YouTube's
   * advertiser-friendly content guidelines that take into account, for example,
   * the strength or frequency of profanity, or the appropriateness of subject
   * matter like sensitive events. Ads won't show, for example, on content with
   * repeated strong profanity, strong sexual content, or graphic violence.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_STANDARD_INVENTORY = 'STANDARD_INVENTORY';
  /**
   * This option lets you show ads on a reduced range of content that's
   * appropriate for brands with particularly strict guidelines around
   * inappropriate language and sexual suggestiveness; above and beyond what
   * YouTube's advertiser-friendly content guidelines address. The videos
   * accessible in this sensitive category meet heightened requirements,
   * especially for inappropriate language and sexual suggestiveness. For
   * example, your ads will be excluded from showing on some of YouTube's most
   * popular music videos and other pop culture content across YouTube and
   * Google video partners.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_LIMITED_INVENTORY = 'LIMITED_INVENTORY';
  protected $collection_key = 'urlCustomParameters';
  /**
   * Output only. Resource name of AccessibleBiddingStrategy, a read-only view
   * of the unrestricted attributes of the attached portfolio bidding strategy
   * identified by 'bidding_strategy'. Empty, if the campaign does not use a
   * portfolio strategy. Unrestricted strategy attributes are available to all
   * customers with whom the strategy is shared and are read from the
   * AccessibleBiddingStrategy resource. In contrast, restricted attributes are
   * only available to the owner customer of the strategy and their managers.
   * Restricted attributes can only be read from the BiddingStrategy resource.
   *
   * @var string
   */
  public $accessibleBiddingStrategy;
  /**
   * The ad serving optimization status of the campaign.
   *
   * @var string
   */
  public $adServingOptimizationStatus;
  /**
   * Immutable. Optional refinement to `advertising_channel_type`. Must be a
   * valid sub-type of the parent channel type. Can be set only when creating
   * campaigns. After campaign is created, the field can not be changed.
   *
   * @var string
   */
  public $advertisingChannelSubType;
  /**
   * Immutable. The primary serving target for ads within the campaign. The
   * targeting options can be refined in `network_settings`. This field is
   * required and should not be empty when creating new campaigns. Can be set
   * only when creating campaigns. After the campaign is created, the field can
   * not be changed.
   *
   * @var string
   */
  public $advertisingChannelType;
  protected $aiMaxSettingType = GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting::class;
  protected $aiMaxSettingDataType = '';
  protected $appCampaignSettingType = GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting::class;
  protected $appCampaignSettingDataType = '';
  protected $assetAutomationSettingsType = GoogleAdsSearchads360V23ResourcesCampaignAssetAutomationSetting::class;
  protected $assetAutomationSettingsDataType = 'array';
  protected $audienceSettingType = GoogleAdsSearchads360V23ResourcesCampaignAudienceSetting::class;
  protected $audienceSettingDataType = '';
  /**
   * Output only. The resource name of the base campaign of a draft or
   * experiment campaign. For base campaigns, this is equal to `resource_name`.
   * This field is read-only.
   *
   * @var string
   */
  public $baseCampaign;
  /**
   * The resource name of the portfolio bidding strategy used by the campaign.
   *
   * @var string
   */
  public $biddingStrategy;
  /**
   * Output only. The system status of the campaign's bidding strategy.
   *
   * @var string
   */
  public $biddingStrategySystemStatus;
  /**
   * Output only. The type of bidding strategy. A bidding strategy can be
   * created by setting either the bidding scheme to create a standard bidding
   * strategy or the `bidding_strategy` field to create a portfolio bidding
   * strategy. This field is read-only.
   *
   * @var string
   */
  public $biddingStrategyType;
  protected $brandGuidelinesType = GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines::class;
  protected $brandGuidelinesDataType = '';
  /**
   * Immutable. Whether Brand Guidelines are enabled for this Campaign. Only
   * applicable to Performance Max campaigns. If enabled, business name and logo
   * assets must be linked as CampaignAssets instead of AssetGroupAssets.
   *
   * @var bool
   */
  public $brandGuidelinesEnabled;
  /**
   * The resource name of the campaign budget of the campaign.
   *
   * @var string
   */
  public $campaignBudget;
  /**
   * The resource name of the campaign group that this campaign belongs to.
   *
   * @var string
   */
  public $campaignGroup;
  protected $commissionType = GoogleAdsSearchads360V23CommonCommission::class;
  protected $commissionDataType = '';
  /**
   * The advertiser should self-declare whether this campaign contains political
   * advertising content targeted towards the European Union.
   *
   * @var string
   */
  public $containsEuPoliticalAdvertising;
  protected $demandGenCampaignSettingsType = GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings::class;
  protected $demandGenCampaignSettingsDataType = '';
  protected $dynamicSearchAdsSettingType = GoogleAdsSearchads360V23ResourcesCampaignDynamicSearchAdsSetting::class;
  protected $dynamicSearchAdsSettingDataType = '';
  /**
   * Output only. The resource names of effective labels attached to this
   * campaign. An effective label is a label inherited or directly assigned to
   * this campaign.
   *
   * @var string[]
   */
  public $effectiveLabels;
  /**
   * The last day and time of the campaign in serving customer's timezone in
   * "yyyy-MM-dd HH:mm:ss" format. Set the time component to 23:59:59 for daily
   * granularity, time granularity is only supported for some campaign types. On
   * create, defaults to running indefinitely. To set an existing campaign to
   * run indefinitely, clear this field.
   *
   * @var string
   */
  public $endDateTime;
  /**
   * Output only. ID of the campaign in the external engine account. This field
   * is for non-Google Ads account only, for example, Yahoo Japan, Microsoft,
   * Baidu etc. For Google Ads entity, use "campaign.id" instead.
   *
   * @var string
   */
  public $engineId;
  /**
   * The asset field types that should be excluded from this campaign. Asset
   * links with these field types will not be inherited by this campaign from
   * the upper level.
   *
   * @var string[]
   */
  public $excludedParentAssetFieldTypes;
  /**
   * The asset set types that should be excluded from this campaign. Asset set
   * links with these types will not be inherited by this campaign from the
   * upper level. Location group types (GMB_DYNAMIC_LOCATION_GROUP,
   * CHAIN_DYNAMIC_LOCATION_GROUP, and STATIC_LOCATION_GROUP) are child types of
   * LOCATION_SYNC. Therefore, if LOCATION_SYNC is set for this field, all
   * location group asset sets are not allowed to be linked to this campaign,
   * and all Location Extension (LE) and Affiliate Location Extensions (ALE)
   * will not be served under this campaign. Only LOCATION_SYNC is currently
   * supported.
   *
   * @var string[]
   */
  public $excludedParentAssetSetTypes;
  /**
   * Output only. The type of campaign: normal, draft, or experiment.
   *
   * @var string
   */
  public $experimentType;
  /**
   * Output only. Types of feeds that are attached directly to this campaign.
   *
   * @var string[]
   */
  public $feedTypes;
  /**
   * Suffix used to append query parameters to landing pages that are served
   * with parallel tracking.
   *
   * @var string
   */
  public $finalUrlSuffix;
  protected $frequencyCapsType = GoogleAdsSearchads360V23CommonFrequencyCapEntry::class;
  protected $frequencyCapsDataType = 'array';
  protected $geoTargetTypeSettingType = GoogleAdsSearchads360V23ResourcesCampaignGeoTargetTypeSetting::class;
  protected $geoTargetTypeSettingDataType = '';
  /**
   * Immutable. The resource name for a set of hotel properties for Performance
   * Max for travel goals campaigns.
   *
   * @var string
   */
  public $hotelPropertyAssetSet;
  protected $hotelSettingType = GoogleAdsSearchads360V23ResourcesCampaignHotelSettingInfo::class;
  protected $hotelSettingDataType = '';
  /**
   * Output only. The ID of the campaign.
   *
   * @var string
   */
  public $id;
  /**
   * Keyword match type of Campaign. Set to BROAD to set broad matching for all
   * keywords in a campaign.
   *
   * @var string
   */
  public $keywordMatchType;
  /**
   * Output only. The resource names of labels attached to this campaign.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The datetime when this campaign was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @var string
   */
  public $lastModifiedTime;
  /**
   * Immutable. Listing type of ads served for this campaign. Field is
   * restricted for usage with Performance Max campaigns.
   *
   * @var string
   */
  public $listingType;
  protected $localCampaignSettingType = GoogleAdsSearchads360V23ResourcesCampaignLocalCampaignSetting::class;
  protected $localCampaignSettingDataType = '';
  protected $localServicesCampaignSettingsType = GoogleAdsSearchads360V23ResourcesCampaignLocalServicesCampaignSettings::class;
  protected $localServicesCampaignSettingsDataType = '';
  protected $manualCpaType = GoogleAdsSearchads360V23CommonManualCpa::class;
  protected $manualCpaDataType = '';
  protected $manualCpcType = GoogleAdsSearchads360V23CommonManualCpc::class;
  protected $manualCpcDataType = '';
  protected $manualCpmType = GoogleAdsSearchads360V23CommonManualCpm::class;
  protected $manualCpmDataType = '';
  protected $manualCpvType = GoogleAdsSearchads360V23CommonManualCpv::class;
  protected $manualCpvDataType = '';
  protected $maximizeConversionValueType = GoogleAdsSearchads360V23CommonMaximizeConversionValue::class;
  protected $maximizeConversionValueDataType = '';
  protected $maximizeConversionsType = GoogleAdsSearchads360V23CommonMaximizeConversions::class;
  protected $maximizeConversionsDataType = '';
  /**
   * Output only. Indicates whether this campaign is missing a declaration about
   * whether it contains political advertising targeted towards the EU and is
   * ineligible for any exemptions. If this field is true, use the
   * contains_eu_political_advertising field to add the required declaration.
   * This field is read-only.
   *
   * @var bool
   */
  public $missingEuPoliticalAdvertisingDeclaration;
  /**
   * The name of the campaign. This field is required and should not be empty
   * when creating new campaigns. It must not contain any null (code point 0x0),
   * NL line feed (code point 0xA) or carriage return (code point 0xD)
   * characters.
   *
   * @var string
   */
  public $name;
  protected $networkSettingsType = GoogleAdsSearchads360V23ResourcesCampaignNetworkSettings::class;
  protected $networkSettingsDataType = '';
  protected $optimizationGoalSettingType = GoogleAdsSearchads360V23ResourcesCampaignOptimizationGoalSetting::class;
  protected $optimizationGoalSettingDataType = '';
  /**
   * Output only. Optimization score of the campaign. Optimization score is an
   * estimate of how well a campaign is set to perform. It ranges from 0% (0.0)
   * to 100% (1.0), with 100% indicating that the campaign is performing at full
   * potential. This field is null for unscored campaigns. See "About
   * optimization score" at https://support.google.com/google-
   * ads/answer/9061546. This field is read-only.
   *
   * @var 
   */
  public $optimizationScore;
  /**
   * Payment mode for the campaign.
   *
   * @var string
   */
  public $paymentMode;
  protected $percentCpcType = GoogleAdsSearchads360V23CommonPercentCpc::class;
  protected $percentCpcDataType = '';
  protected $performanceMaxUpgradeType = GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade::class;
  protected $performanceMaxUpgradeDataType = '';
  protected $pmaxCampaignSettingsType = GoogleAdsSearchads360V23ResourcesCampaignPmaxCampaignSettings::class;
  protected $pmaxCampaignSettingsDataType = '';
  /**
   * Output only. The primary status of the campaign. Provides insight into why
   * a campaign is not serving or not serving optimally. Modification to the
   * campaign and its related entities might take a while to be reflected in
   * this status.
   *
   * @var string
   */
  public $primaryStatus;
  /**
   * Output only. The primary status reasons of the campaign. Provides insight
   * into why a campaign is not serving or not serving optimally. These reasons
   * are aggregated to determine an overall CampaignPrimaryStatus.
   *
   * @var string[]
   */
  public $primaryStatusReasons;
  protected $realTimeBiddingSettingType = GoogleAdsSearchads360V23CommonRealTimeBiddingSetting::class;
  protected $realTimeBiddingSettingDataType = '';
  /**
   * Immutable. The resource name of the campaign. Campaign resource names have
   * the form: `customers/{customer_id}/campaigns/{campaign_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $selectiveOptimizationType = GoogleAdsSearchads360V23ResourcesCampaignSelectiveOptimization::class;
  protected $selectiveOptimizationDataType = '';
  /**
   * Selective optimization mode for this campaign.
   *
   * @var string
   */
  public $selectiveOptimizationMode;
  /**
   * Output only. The ad serving status of the campaign.
   *
   * @var string
   */
  public $servingStatus;
  protected $shoppingSettingType = GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting::class;
  protected $shoppingSettingDataType = '';
  /**
   * The date and time when campaign started in serving. The timestamp is in the
   * customer's time zone and in "yyyy-MM-dd HH:mm:ss" format. Set the time
   * component to 00:00:00 for daily granularity, time granularity is only
   * supported for some campaign types.
   *
   * @var string
   */
  public $startDateTime;
  /**
   * The status of the campaign. When a new campaign is added, the status
   * defaults to ENABLED.
   *
   * @var string
   */
  public $status;
  protected $targetCpaType = GoogleAdsSearchads360V23CommonTargetCpa::class;
  protected $targetCpaDataType = '';
  protected $targetCpcType = GoogleAdsSearchads360V23CommonTargetCpc::class;
  protected $targetCpcDataType = '';
  protected $targetCpmType = GoogleAdsSearchads360V23CommonTargetCpm::class;
  protected $targetCpmDataType = '';
  protected $targetImpressionShareType = GoogleAdsSearchads360V23CommonTargetImpressionShare::class;
  protected $targetImpressionShareDataType = '';
  protected $targetRoasType = GoogleAdsSearchads360V23CommonTargetRoas::class;
  protected $targetRoasDataType = '';
  protected $targetSpendType = GoogleAdsSearchads360V23CommonTargetSpend::class;
  protected $targetSpendDataType = '';
  protected $targetingSettingType = GoogleAdsSearchads360V23CommonTargetingSetting::class;
  protected $targetingSettingDataType = '';
  protected $thirdPartyIntegrationPartnersType = GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners::class;
  protected $thirdPartyIntegrationPartnersDataType = '';
  protected $trackingSettingType = GoogleAdsSearchads360V23ResourcesCampaignTrackingSetting::class;
  protected $trackingSettingDataType = '';
  /**
   * The URL template for constructing a tracking URL.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  protected $travelCampaignSettingsType = GoogleAdsSearchads360V23ResourcesCampaignTravelCampaignSettings::class;
  protected $travelCampaignSettingsDataType = '';
  protected $urlCustomParametersType = GoogleAdsSearchads360V23CommonCustomParameter::class;
  protected $urlCustomParametersDataType = 'array';
  protected $vanityPharmaType = GoogleAdsSearchads360V23ResourcesCampaignVanityPharma::class;
  protected $vanityPharmaDataType = '';
  /**
   * Brand Safety setting at the individual campaign level. Allows for selecting
   * an inventory type to show your ads on content that is the right fit for
   * your brand. See https://support.google.com/google-ads/answer/7515513.
   *
   * @var string
   */
  public $videoBrandSafetySuitability;

  /**
   * Output only. Resource name of AccessibleBiddingStrategy, a read-only view
   * of the unrestricted attributes of the attached portfolio bidding strategy
   * identified by 'bidding_strategy'. Empty, if the campaign does not use a
   * portfolio strategy. Unrestricted strategy attributes are available to all
   * customers with whom the strategy is shared and are read from the
   * AccessibleBiddingStrategy resource. In contrast, restricted attributes are
   * only available to the owner customer of the strategy and their managers.
   * Restricted attributes can only be read from the BiddingStrategy resource.
   *
   * @param string $accessibleBiddingStrategy
   */
  public function setAccessibleBiddingStrategy($accessibleBiddingStrategy)
  {
    $this->accessibleBiddingStrategy = $accessibleBiddingStrategy;
  }
  /**
   * @return string
   */
  public function getAccessibleBiddingStrategy()
  {
    return $this->accessibleBiddingStrategy;
  }
  /**
   * The ad serving optimization status of the campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OPTIMIZE, CONVERSION_OPTIMIZE,
   * ROTATE, ROTATE_INDEFINITELY, UNAVAILABLE
   *
   * @param self::AD_SERVING_OPTIMIZATION_STATUS_* $adServingOptimizationStatus
   */
  public function setAdServingOptimizationStatus($adServingOptimizationStatus)
  {
    $this->adServingOptimizationStatus = $adServingOptimizationStatus;
  }
  /**
   * @return self::AD_SERVING_OPTIMIZATION_STATUS_*
   */
  public function getAdServingOptimizationStatus()
  {
    return $this->adServingOptimizationStatus;
  }
  /**
   * Immutable. Optional refinement to `advertising_channel_type`. Must be a
   * valid sub-type of the parent channel type. Can be set only when creating
   * campaigns. After campaign is created, the field can not be changed.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH_MOBILE_APP,
   * DISPLAY_MOBILE_APP, SEARCH_EXPRESS, DISPLAY_EXPRESS, SHOPPING_SMART_ADS,
   * DISPLAY_GMAIL_AD, DISPLAY_SMART_CAMPAIGN, VIDEO_ACTION,
   * VIDEO_NON_SKIPPABLE, APP_CAMPAIGN, APP_CAMPAIGN_FOR_ENGAGEMENT,
   * LOCAL_CAMPAIGN, SHOPPING_COMPARISON_LISTING_ADS, SMART_CAMPAIGN,
   * VIDEO_SEQUENCE, APP_CAMPAIGN_FOR_PRE_REGISTRATION,
   * VIDEO_REACH_TARGET_FREQUENCY, TRAVEL_ACTIVITIES,
   * SOCIAL_FACEBOOK_TRACKING_ONLY
   *
   * @param self::ADVERTISING_CHANNEL_SUB_TYPE_* $advertisingChannelSubType
   */
  public function setAdvertisingChannelSubType($advertisingChannelSubType)
  {
    $this->advertisingChannelSubType = $advertisingChannelSubType;
  }
  /**
   * @return self::ADVERTISING_CHANNEL_SUB_TYPE_*
   */
  public function getAdvertisingChannelSubType()
  {
    return $this->advertisingChannelSubType;
  }
  /**
   * Immutable. The primary serving target for ads within the campaign. The
   * targeting options can be refined in `network_settings`. This field is
   * required and should not be empty when creating new campaigns. Can be set
   * only when creating campaigns. After the campaign is created, the field can
   * not be changed.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH, DISPLAY, SHOPPING, HOTEL,
   * VIDEO, MULTI_CHANNEL, LOCAL, SMART, PERFORMANCE_MAX, LOCAL_SERVICES,
   * TRAVEL, DEMAND_GEN, SOCIAL
   *
   * @param self::ADVERTISING_CHANNEL_TYPE_* $advertisingChannelType
   */
  public function setAdvertisingChannelType($advertisingChannelType)
  {
    $this->advertisingChannelType = $advertisingChannelType;
  }
  /**
   * @return self::ADVERTISING_CHANNEL_TYPE_*
   */
  public function getAdvertisingChannelType()
  {
    return $this->advertisingChannelType;
  }
  /**
   * Settings for AI Max in search campaigns.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting $aiMaxSetting
   */
  public function setAiMaxSetting(GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting $aiMaxSetting)
  {
    $this->aiMaxSetting = $aiMaxSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAiMaxSetting
   */
  public function getAiMaxSetting()
  {
    return $this->aiMaxSetting;
  }
  /**
   * The setting related to App Campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting $appCampaignSetting
   */
  public function setAppCampaignSetting(GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting $appCampaignSetting)
  {
    $this->appCampaignSetting = $appCampaignSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting
   */
  public function getAppCampaignSetting()
  {
    return $this->appCampaignSetting;
  }
  /**
   * Contains the opt-in/out status of each AssetAutomationType. See
   * documentation of each asset automation type enum for default opt in/out
   * behavior.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAssetAutomationSetting[] $assetAutomationSettings
   */
  public function setAssetAutomationSettings($assetAutomationSettings)
  {
    $this->assetAutomationSettings = $assetAutomationSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAssetAutomationSetting[]
   */
  public function getAssetAutomationSettings()
  {
    return $this->assetAutomationSettings;
  }
  /**
   * Immutable. Setting for audience related features.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignAudienceSetting $audienceSetting
   */
  public function setAudienceSetting(GoogleAdsSearchads360V23ResourcesCampaignAudienceSetting $audienceSetting)
  {
    $this->audienceSetting = $audienceSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignAudienceSetting
   */
  public function getAudienceSetting()
  {
    return $this->audienceSetting;
  }
  /**
   * Output only. The resource name of the base campaign of a draft or
   * experiment campaign. For base campaigns, this is equal to `resource_name`.
   * This field is read-only.
   *
   * @param string $baseCampaign
   */
  public function setBaseCampaign($baseCampaign)
  {
    $this->baseCampaign = $baseCampaign;
  }
  /**
   * @return string
   */
  public function getBaseCampaign()
  {
    return $this->baseCampaign;
  }
  /**
   * The resource name of the portfolio bidding strategy used by the campaign.
   *
   * @param string $biddingStrategy
   */
  public function setBiddingStrategy($biddingStrategy)
  {
    $this->biddingStrategy = $biddingStrategy;
  }
  /**
   * @return string
   */
  public function getBiddingStrategy()
  {
    return $this->biddingStrategy;
  }
  /**
   * Output only. The system status of the campaign's bidding strategy.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, LEARNING_NEW,
   * LEARNING_SETTING_CHANGE, LEARNING_BUDGET_CHANGE,
   * LEARNING_COMPOSITION_CHANGE, LEARNING_CONVERSION_TYPE_CHANGE,
   * LEARNING_CONVERSION_SETTING_CHANGE, LIMITED_BY_CPC_BID_CEILING,
   * LIMITED_BY_CPC_BID_FLOOR, LIMITED_BY_DATA, LIMITED_BY_BUDGET,
   * LIMITED_BY_LOW_PRIORITY_SPEND, LIMITED_BY_LOW_QUALITY,
   * LIMITED_BY_INVENTORY, MISCONFIGURED_ZERO_ELIGIBILITY,
   * MISCONFIGURED_CONVERSION_TYPES, MISCONFIGURED_CONVERSION_SETTINGS,
   * MISCONFIGURED_SHARED_BUDGET, MISCONFIGURED_STRATEGY_TYPE, PAUSED,
   * UNAVAILABLE, MULTIPLE_LEARNING, MULTIPLE_LIMITED, MULTIPLE_MISCONFIGURED,
   * MULTIPLE
   *
   * @param self::BIDDING_STRATEGY_SYSTEM_STATUS_* $biddingStrategySystemStatus
   */
  public function setBiddingStrategySystemStatus($biddingStrategySystemStatus)
  {
    $this->biddingStrategySystemStatus = $biddingStrategySystemStatus;
  }
  /**
   * @return self::BIDDING_STRATEGY_SYSTEM_STATUS_*
   */
  public function getBiddingStrategySystemStatus()
  {
    return $this->biddingStrategySystemStatus;
  }
  /**
   * Output only. The type of bidding strategy. A bidding strategy can be
   * created by setting either the bidding scheme to create a standard bidding
   * strategy or the `bidding_strategy` field to create a portfolio bidding
   * strategy. This field is read-only.
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
   * @param GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines $brandGuidelines
   */
  public function setBrandGuidelines(GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines $brandGuidelines)
  {
    $this->brandGuidelines = $brandGuidelines;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines
   */
  public function getBrandGuidelines()
  {
    return $this->brandGuidelines;
  }
  /**
   * Immutable. Whether Brand Guidelines are enabled for this Campaign. Only
   * applicable to Performance Max campaigns. If enabled, business name and logo
   * assets must be linked as CampaignAssets instead of AssetGroupAssets.
   *
   * @param bool $brandGuidelinesEnabled
   */
  public function setBrandGuidelinesEnabled($brandGuidelinesEnabled)
  {
    $this->brandGuidelinesEnabled = $brandGuidelinesEnabled;
  }
  /**
   * @return bool
   */
  public function getBrandGuidelinesEnabled()
  {
    return $this->brandGuidelinesEnabled;
  }
  /**
   * The resource name of the campaign budget of the campaign.
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
   * The resource name of the campaign group that this campaign belongs to.
   *
   * @param string $campaignGroup
   */
  public function setCampaignGroup($campaignGroup)
  {
    $this->campaignGroup = $campaignGroup;
  }
  /**
   * @return string
   */
  public function getCampaignGroup()
  {
    return $this->campaignGroup;
  }
  /**
   * Commission is an automatic bidding strategy in which the advertiser pays a
   * certain portion of the conversion value.
   *
   * @param GoogleAdsSearchads360V23CommonCommission $commission
   */
  public function setCommission(GoogleAdsSearchads360V23CommonCommission $commission)
  {
    $this->commission = $commission;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCommission
   */
  public function getCommission()
  {
    return $this->commission;
  }
  /**
   * The advertiser should self-declare whether this campaign contains political
   * advertising content targeted towards the European Union.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONTAINS_EU_POLITICAL_ADVERTISING,
   * DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING
   *
   * @param self::CONTAINS_EU_POLITICAL_ADVERTISING_* $containsEuPoliticalAdvertising
   */
  public function setContainsEuPoliticalAdvertising($containsEuPoliticalAdvertising)
  {
    $this->containsEuPoliticalAdvertising = $containsEuPoliticalAdvertising;
  }
  /**
   * @return self::CONTAINS_EU_POLITICAL_ADVERTISING_*
   */
  public function getContainsEuPoliticalAdvertising()
  {
    return $this->containsEuPoliticalAdvertising;
  }
  /**
   * Settings for Demand Gen campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings $demandGenCampaignSettings
   */
  public function setDemandGenCampaignSettings(GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings $demandGenCampaignSettings)
  {
    $this->demandGenCampaignSettings = $demandGenCampaignSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings
   */
  public function getDemandGenCampaignSettings()
  {
    return $this->demandGenCampaignSettings;
  }
  /**
   * The setting for controlling Dynamic Search Ads (DSA).
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignDynamicSearchAdsSetting $dynamicSearchAdsSetting
   */
  public function setDynamicSearchAdsSetting(GoogleAdsSearchads360V23ResourcesCampaignDynamicSearchAdsSetting $dynamicSearchAdsSetting)
  {
    $this->dynamicSearchAdsSetting = $dynamicSearchAdsSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignDynamicSearchAdsSetting
   */
  public function getDynamicSearchAdsSetting()
  {
    return $this->dynamicSearchAdsSetting;
  }
  /**
   * Output only. The resource names of effective labels attached to this
   * campaign. An effective label is a label inherited or directly assigned to
   * this campaign.
   *
   * @param string[] $effectiveLabels
   */
  public function setEffectiveLabels($effectiveLabels)
  {
    $this->effectiveLabels = $effectiveLabels;
  }
  /**
   * @return string[]
   */
  public function getEffectiveLabels()
  {
    return $this->effectiveLabels;
  }
  /**
   * The last day and time of the campaign in serving customer's timezone in
   * "yyyy-MM-dd HH:mm:ss" format. Set the time component to 23:59:59 for daily
   * granularity, time granularity is only supported for some campaign types. On
   * create, defaults to running indefinitely. To set an existing campaign to
   * run indefinitely, clear this field.
   *
   * @param string $endDateTime
   */
  public function setEndDateTime($endDateTime)
  {
    $this->endDateTime = $endDateTime;
  }
  /**
   * @return string
   */
  public function getEndDateTime()
  {
    return $this->endDateTime;
  }
  /**
   * Output only. ID of the campaign in the external engine account. This field
   * is for non-Google Ads account only, for example, Yahoo Japan, Microsoft,
   * Baidu etc. For Google Ads entity, use "campaign.id" instead.
   *
   * @param string $engineId
   */
  public function setEngineId($engineId)
  {
    $this->engineId = $engineId;
  }
  /**
   * @return string
   */
  public function getEngineId()
  {
    return $this->engineId;
  }
  /**
   * The asset field types that should be excluded from this campaign. Asset
   * links with these field types will not be inherited by this campaign from
   * the upper level.
   *
   * @param string[] $excludedParentAssetFieldTypes
   */
  public function setExcludedParentAssetFieldTypes($excludedParentAssetFieldTypes)
  {
    $this->excludedParentAssetFieldTypes = $excludedParentAssetFieldTypes;
  }
  /**
   * @return string[]
   */
  public function getExcludedParentAssetFieldTypes()
  {
    return $this->excludedParentAssetFieldTypes;
  }
  /**
   * The asset set types that should be excluded from this campaign. Asset set
   * links with these types will not be inherited by this campaign from the
   * upper level. Location group types (GMB_DYNAMIC_LOCATION_GROUP,
   * CHAIN_DYNAMIC_LOCATION_GROUP, and STATIC_LOCATION_GROUP) are child types of
   * LOCATION_SYNC. Therefore, if LOCATION_SYNC is set for this field, all
   * location group asset sets are not allowed to be linked to this campaign,
   * and all Location Extension (LE) and Affiliate Location Extensions (ALE)
   * will not be served under this campaign. Only LOCATION_SYNC is currently
   * supported.
   *
   * @param string[] $excludedParentAssetSetTypes
   */
  public function setExcludedParentAssetSetTypes($excludedParentAssetSetTypes)
  {
    $this->excludedParentAssetSetTypes = $excludedParentAssetSetTypes;
  }
  /**
   * @return string[]
   */
  public function getExcludedParentAssetSetTypes()
  {
    return $this->excludedParentAssetSetTypes;
  }
  /**
   * Output only. The type of campaign: normal, draft, or experiment.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BASE, DRAFT, EXPERIMENT
   *
   * @param self::EXPERIMENT_TYPE_* $experimentType
   */
  public function setExperimentType($experimentType)
  {
    $this->experimentType = $experimentType;
  }
  /**
   * @return self::EXPERIMENT_TYPE_*
   */
  public function getExperimentType()
  {
    return $this->experimentType;
  }
  /**
   * Output only. Types of feeds that are attached directly to this campaign.
   *
   * @param string[] $feedTypes
   */
  public function setFeedTypes($feedTypes)
  {
    $this->feedTypes = $feedTypes;
  }
  /**
   * @return string[]
   */
  public function getFeedTypes()
  {
    return $this->feedTypes;
  }
  /**
   * Suffix used to append query parameters to landing pages that are served
   * with parallel tracking.
   *
   * @param string $finalUrlSuffix
   */
  public function setFinalUrlSuffix($finalUrlSuffix)
  {
    $this->finalUrlSuffix = $finalUrlSuffix;
  }
  /**
   * @return string
   */
  public function getFinalUrlSuffix()
  {
    return $this->finalUrlSuffix;
  }
  /**
   * A list that limits how often each user will see this campaign's ads.
   *
   * @param GoogleAdsSearchads360V23CommonFrequencyCapEntry[] $frequencyCaps
   */
  public function setFrequencyCaps($frequencyCaps)
  {
    $this->frequencyCaps = $frequencyCaps;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFrequencyCapEntry[]
   */
  public function getFrequencyCaps()
  {
    return $this->frequencyCaps;
  }
  /**
   * The setting for ads geotargeting.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignGeoTargetTypeSetting $geoTargetTypeSetting
   */
  public function setGeoTargetTypeSetting(GoogleAdsSearchads360V23ResourcesCampaignGeoTargetTypeSetting $geoTargetTypeSetting)
  {
    $this->geoTargetTypeSetting = $geoTargetTypeSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignGeoTargetTypeSetting
   */
  public function getGeoTargetTypeSetting()
  {
    return $this->geoTargetTypeSetting;
  }
  /**
   * Immutable. The resource name for a set of hotel properties for Performance
   * Max for travel goals campaigns.
   *
   * @param string $hotelPropertyAssetSet
   */
  public function setHotelPropertyAssetSet($hotelPropertyAssetSet)
  {
    $this->hotelPropertyAssetSet = $hotelPropertyAssetSet;
  }
  /**
   * @return string
   */
  public function getHotelPropertyAssetSet()
  {
    return $this->hotelPropertyAssetSet;
  }
  /**
   * Output only. The hotel setting for the campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignHotelSettingInfo $hotelSetting
   */
  public function setHotelSetting(GoogleAdsSearchads360V23ResourcesCampaignHotelSettingInfo $hotelSetting)
  {
    $this->hotelSetting = $hotelSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignHotelSettingInfo
   */
  public function getHotelSetting()
  {
    return $this->hotelSetting;
  }
  /**
   * Output only. The ID of the campaign.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Keyword match type of Campaign. Set to BROAD to set broad matching for all
   * keywords in a campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BROAD
   *
   * @param self::KEYWORD_MATCH_TYPE_* $keywordMatchType
   */
  public function setKeywordMatchType($keywordMatchType)
  {
    $this->keywordMatchType = $keywordMatchType;
  }
  /**
   * @return self::KEYWORD_MATCH_TYPE_*
   */
  public function getKeywordMatchType()
  {
    return $this->keywordMatchType;
  }
  /**
   * Output only. The resource names of labels attached to this campaign.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The datetime when this campaign was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @param string $lastModifiedTime
   */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /**
   * @return string
   */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /**
   * Immutable. Listing type of ads served for this campaign. Field is
   * restricted for usage with Performance Max campaigns.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VEHICLES
   *
   * @param self::LISTING_TYPE_* $listingType
   */
  public function setListingType($listingType)
  {
    $this->listingType = $listingType;
  }
  /**
   * @return self::LISTING_TYPE_*
   */
  public function getListingType()
  {
    return $this->listingType;
  }
  /**
   * The setting for local campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignLocalCampaignSetting $localCampaignSetting
   */
  public function setLocalCampaignSetting(GoogleAdsSearchads360V23ResourcesCampaignLocalCampaignSetting $localCampaignSetting)
  {
    $this->localCampaignSetting = $localCampaignSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignLocalCampaignSetting
   */
  public function getLocalCampaignSetting()
  {
    return $this->localCampaignSetting;
  }
  /**
   * The Local Services Campaign related settings.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignLocalServicesCampaignSettings $localServicesCampaignSettings
   */
  public function setLocalServicesCampaignSettings(GoogleAdsSearchads360V23ResourcesCampaignLocalServicesCampaignSettings $localServicesCampaignSettings)
  {
    $this->localServicesCampaignSettings = $localServicesCampaignSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignLocalServicesCampaignSettings
   */
  public function getLocalServicesCampaignSettings()
  {
    return $this->localServicesCampaignSettings;
  }
  /**
   * Standard Manual CPA bidding strategy. Manual bidding strategy that allows
   * advertiser to set the bid per advertiser-specified action. Supported only
   * for Local Services campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonManualCpa $manualCpa
   */
  public function setManualCpa(GoogleAdsSearchads360V23CommonManualCpa $manualCpa)
  {
    $this->manualCpa = $manualCpa;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonManualCpa
   */
  public function getManualCpa()
  {
    return $this->manualCpa;
  }
  /**
   * Standard Manual CPC bidding strategy. Manual click-based bidding where user
   * pays per click.
   *
   * @param GoogleAdsSearchads360V23CommonManualCpc $manualCpc
   */
  public function setManualCpc(GoogleAdsSearchads360V23CommonManualCpc $manualCpc)
  {
    $this->manualCpc = $manualCpc;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonManualCpc
   */
  public function getManualCpc()
  {
    return $this->manualCpc;
  }
  /**
   * Standard Manual CPM bidding strategy. Manual impression-based bidding where
   * user pays per thousand impressions.
   *
   * @param GoogleAdsSearchads360V23CommonManualCpm $manualCpm
   */
  public function setManualCpm(GoogleAdsSearchads360V23CommonManualCpm $manualCpm)
  {
    $this->manualCpm = $manualCpm;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonManualCpm
   */
  public function getManualCpm()
  {
    return $this->manualCpm;
  }
  /**
   * A bidding strategy that pays a configurable amount per video view.
   *
   * @param GoogleAdsSearchads360V23CommonManualCpv $manualCpv
   */
  public function setManualCpv(GoogleAdsSearchads360V23CommonManualCpv $manualCpv)
  {
    $this->manualCpv = $manualCpv;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonManualCpv
   */
  public function getManualCpv()
  {
    return $this->manualCpv;
  }
  /**
   * Standard Maximize Conversion Value bidding strategy that automatically sets
   * bids to maximize revenue while spending your budget.
   *
   * @param GoogleAdsSearchads360V23CommonMaximizeConversionValue $maximizeConversionValue
   */
  public function setMaximizeConversionValue(GoogleAdsSearchads360V23CommonMaximizeConversionValue $maximizeConversionValue)
  {
    $this->maximizeConversionValue = $maximizeConversionValue;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMaximizeConversionValue
   */
  public function getMaximizeConversionValue()
  {
    return $this->maximizeConversionValue;
  }
  /**
   * Standard Maximize Conversions bidding strategy that automatically maximizes
   * number of conversions while spending your budget.
   *
   * @param GoogleAdsSearchads360V23CommonMaximizeConversions $maximizeConversions
   */
  public function setMaximizeConversions(GoogleAdsSearchads360V23CommonMaximizeConversions $maximizeConversions)
  {
    $this->maximizeConversions = $maximizeConversions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMaximizeConversions
   */
  public function getMaximizeConversions()
  {
    return $this->maximizeConversions;
  }
  /**
   * Output only. Indicates whether this campaign is missing a declaration about
   * whether it contains political advertising targeted towards the EU and is
   * ineligible for any exemptions. If this field is true, use the
   * contains_eu_political_advertising field to add the required declaration.
   * This field is read-only.
   *
   * @param bool $missingEuPoliticalAdvertisingDeclaration
   */
  public function setMissingEuPoliticalAdvertisingDeclaration($missingEuPoliticalAdvertisingDeclaration)
  {
    $this->missingEuPoliticalAdvertisingDeclaration = $missingEuPoliticalAdvertisingDeclaration;
  }
  /**
   * @return bool
   */
  public function getMissingEuPoliticalAdvertisingDeclaration()
  {
    return $this->missingEuPoliticalAdvertisingDeclaration;
  }
  /**
   * The name of the campaign. This field is required and should not be empty
   * when creating new campaigns. It must not contain any null (code point 0x0),
   * NL line feed (code point 0xA) or carriage return (code point 0xD)
   * characters.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * The network settings for the campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignNetworkSettings $networkSettings
   */
  public function setNetworkSettings(GoogleAdsSearchads360V23ResourcesCampaignNetworkSettings $networkSettings)
  {
    $this->networkSettings = $networkSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignNetworkSettings
   */
  public function getNetworkSettings()
  {
    return $this->networkSettings;
  }
  /**
   * Optimization goal setting for this campaign, which includes a set of
   * optimization goal types.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignOptimizationGoalSetting $optimizationGoalSetting
   */
  public function setOptimizationGoalSetting(GoogleAdsSearchads360V23ResourcesCampaignOptimizationGoalSetting $optimizationGoalSetting)
  {
    $this->optimizationGoalSetting = $optimizationGoalSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignOptimizationGoalSetting
   */
  public function getOptimizationGoalSetting()
  {
    return $this->optimizationGoalSetting;
  }
  public function setOptimizationScore($optimizationScore)
  {
    $this->optimizationScore = $optimizationScore;
  }
  public function getOptimizationScore()
  {
    return $this->optimizationScore;
  }
  /**
   * Payment mode for the campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CLICKS, CONVERSION_VALUE,
   * CONVERSIONS, GUEST_STAY
   *
   * @param self::PAYMENT_MODE_* $paymentMode
   */
  public function setPaymentMode($paymentMode)
  {
    $this->paymentMode = $paymentMode;
  }
  /**
   * @return self::PAYMENT_MODE_*
   */
  public function getPaymentMode()
  {
    return $this->paymentMode;
  }
  /**
   * Standard Percent Cpc bidding strategy where bids are a fraction of the
   * advertised price for some good or service.
   *
   * @param GoogleAdsSearchads360V23CommonPercentCpc $percentCpc
   */
  public function setPercentCpc(GoogleAdsSearchads360V23CommonPercentCpc $percentCpc)
  {
    $this->percentCpc = $percentCpc;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPercentCpc
   */
  public function getPercentCpc()
  {
    return $this->percentCpc;
  }
  /**
   * Output only. Information about campaigns being upgraded to Performance Max.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade $performanceMaxUpgrade
   */
  public function setPerformanceMaxUpgrade(GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade $performanceMaxUpgrade)
  {
    $this->performanceMaxUpgrade = $performanceMaxUpgrade;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignPerformanceMaxUpgrade
   */
  public function getPerformanceMaxUpgrade()
  {
    return $this->performanceMaxUpgrade;
  }
  /**
   * Settings for Performance Max campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignPmaxCampaignSettings $pmaxCampaignSettings
   */
  public function setPmaxCampaignSettings(GoogleAdsSearchads360V23ResourcesCampaignPmaxCampaignSettings $pmaxCampaignSettings)
  {
    $this->pmaxCampaignSettings = $pmaxCampaignSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignPmaxCampaignSettings
   */
  public function getPmaxCampaignSettings()
  {
    return $this->pmaxCampaignSettings;
  }
  /**
   * Output only. The primary status of the campaign. Provides insight into why
   * a campaign is not serving or not serving optimally. Modification to the
   * campaign and its related entities might take a while to be reflected in
   * this status.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, PAUSED, REMOVED, ENDED,
   * PENDING, MISCONFIGURED, LIMITED, LEARNING, NOT_ELIGIBLE
   *
   * @param self::PRIMARY_STATUS_* $primaryStatus
   */
  public function setPrimaryStatus($primaryStatus)
  {
    $this->primaryStatus = $primaryStatus;
  }
  /**
   * @return self::PRIMARY_STATUS_*
   */
  public function getPrimaryStatus()
  {
    return $this->primaryStatus;
  }
  /**
   * Output only. The primary status reasons of the campaign. Provides insight
   * into why a campaign is not serving or not serving optimally. These reasons
   * are aggregated to determine an overall CampaignPrimaryStatus.
   *
   * @param string[] $primaryStatusReasons
   */
  public function setPrimaryStatusReasons($primaryStatusReasons)
  {
    $this->primaryStatusReasons = $primaryStatusReasons;
  }
  /**
   * @return string[]
   */
  public function getPrimaryStatusReasons()
  {
    return $this->primaryStatusReasons;
  }
  /**
   * Settings for Real-Time Bidding, a feature only available for campaigns
   * targeting the Ad Exchange network.
   *
   * @param GoogleAdsSearchads360V23CommonRealTimeBiddingSetting $realTimeBiddingSetting
   */
  public function setRealTimeBiddingSetting(GoogleAdsSearchads360V23CommonRealTimeBiddingSetting $realTimeBiddingSetting)
  {
    $this->realTimeBiddingSetting = $realTimeBiddingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonRealTimeBiddingSetting
   */
  public function getRealTimeBiddingSetting()
  {
    return $this->realTimeBiddingSetting;
  }
  /**
   * Immutable. The resource name of the campaign. Campaign resource names have
   * the form: `customers/{customer_id}/campaigns/{campaign_id}`
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
   * Selective optimization setting for this campaign, which includes a set of
   * conversion actions to optimize this campaign towards. This feature only
   * applies to app campaigns that use MULTI_CHANNEL as AdvertisingChannelType
   * and APP_CAMPAIGN or APP_CAMPAIGN_FOR_ENGAGEMENT as
   * AdvertisingChannelSubType.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignSelectiveOptimization $selectiveOptimization
   */
  public function setSelectiveOptimization(GoogleAdsSearchads360V23ResourcesCampaignSelectiveOptimization $selectiveOptimization)
  {
    $this->selectiveOptimization = $selectiveOptimization;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignSelectiveOptimization
   */
  public function getSelectiveOptimization()
  {
    return $this->selectiveOptimization;
  }
  /**
   * Selective optimization mode for this campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UNCONSTRAINED,
   * MATCHES_SEARCH_ADS360_EFFECTIVE_CAMPAIGN_LEVEL_CONFIG
   *
   * @param self::SELECTIVE_OPTIMIZATION_MODE_* $selectiveOptimizationMode
   */
  public function setSelectiveOptimizationMode($selectiveOptimizationMode)
  {
    $this->selectiveOptimizationMode = $selectiveOptimizationMode;
  }
  /**
   * @return self::SELECTIVE_OPTIMIZATION_MODE_*
   */
  public function getSelectiveOptimizationMode()
  {
    return $this->selectiveOptimizationMode;
  }
  /**
   * Output only. The ad serving status of the campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SERVING, NONE, ENDED, PENDING,
   * SUSPENDED
   *
   * @param self::SERVING_STATUS_* $servingStatus
   */
  public function setServingStatus($servingStatus)
  {
    $this->servingStatus = $servingStatus;
  }
  /**
   * @return self::SERVING_STATUS_*
   */
  public function getServingStatus()
  {
    return $this->servingStatus;
  }
  /**
   * The setting for controlling Shopping campaigns.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting $shoppingSetting
   */
  public function setShoppingSetting(GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting $shoppingSetting)
  {
    $this->shoppingSetting = $shoppingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting
   */
  public function getShoppingSetting()
  {
    return $this->shoppingSetting;
  }
  /**
   * The date and time when campaign started in serving. The timestamp is in the
   * customer's time zone and in "yyyy-MM-dd HH:mm:ss" format. Set the time
   * component to 00:00:00 for daily granularity, time granularity is only
   * supported for some campaign types.
   *
   * @param string $startDateTime
   */
  public function setStartDateTime($startDateTime)
  {
    $this->startDateTime = $startDateTime;
  }
  /**
   * @return string
   */
  public function getStartDateTime()
  {
    return $this->startDateTime;
  }
  /**
   * The status of the campaign. When a new campaign is added, the status
   * defaults to ENABLED.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, PAUSED, REMOVED
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
   * Standard Target CPA bidding strategy that automatically sets bids to help
   * get as many conversions as possible at the target cost-per-acquisition
   * (CPA) you set.
   *
   * @param GoogleAdsSearchads360V23CommonTargetCpa $targetCpa
   */
  public function setTargetCpa(GoogleAdsSearchads360V23CommonTargetCpa $targetCpa)
  {
    $this->targetCpa = $targetCpa;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetCpa
   */
  public function getTargetCpa()
  {
    return $this->targetCpa;
  }
  /**
   * An automated bidding strategy that sets bids to help get as many clicks as
   * possible at the target cost-per-click (CPC) you set.
   *
   * @param GoogleAdsSearchads360V23CommonTargetCpc $targetCpc
   */
  public function setTargetCpc(GoogleAdsSearchads360V23CommonTargetCpc $targetCpc)
  {
    $this->targetCpc = $targetCpc;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetCpc
   */
  public function getTargetCpc()
  {
    return $this->targetCpc;
  }
  /**
   * A bidding strategy that automatically optimizes cost per thousand
   * impressions.
   *
   * @param GoogleAdsSearchads360V23CommonTargetCpm $targetCpm
   */
  public function setTargetCpm(GoogleAdsSearchads360V23CommonTargetCpm $targetCpm)
  {
    $this->targetCpm = $targetCpm;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetCpm
   */
  public function getTargetCpm()
  {
    return $this->targetCpm;
  }
  /**
   * Target Impression Share bidding strategy. An automated bidding strategy
   * that sets bids to achieve a chosen percentage of impressions.
   *
   * @param GoogleAdsSearchads360V23CommonTargetImpressionShare $targetImpressionShare
   */
  public function setTargetImpressionShare(GoogleAdsSearchads360V23CommonTargetImpressionShare $targetImpressionShare)
  {
    $this->targetImpressionShare = $targetImpressionShare;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetImpressionShare
   */
  public function getTargetImpressionShare()
  {
    return $this->targetImpressionShare;
  }
  /**
   * Standard Target ROAS bidding strategy that automatically maximizes revenue
   * while averaging a specific target return on ad spend (ROAS).
   *
   * @param GoogleAdsSearchads360V23CommonTargetRoas $targetRoas
   */
  public function setTargetRoas(GoogleAdsSearchads360V23CommonTargetRoas $targetRoas)
  {
    $this->targetRoas = $targetRoas;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetRoas
   */
  public function getTargetRoas()
  {
    return $this->targetRoas;
  }
  /**
   * Standard Target Spend bidding strategy that automatically sets your bids to
   * help get as many clicks as possible within your budget.
   *
   * @param GoogleAdsSearchads360V23CommonTargetSpend $targetSpend
   */
  public function setTargetSpend(GoogleAdsSearchads360V23CommonTargetSpend $targetSpend)
  {
    $this->targetSpend = $targetSpend;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetSpend
   */
  public function getTargetSpend()
  {
    return $this->targetSpend;
  }
  /**
   * Setting for targeting related features.
   *
   * @param GoogleAdsSearchads360V23CommonTargetingSetting $targetingSetting
   */
  public function setTargetingSetting(GoogleAdsSearchads360V23CommonTargetingSetting $targetingSetting)
  {
    $this->targetingSetting = $targetingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetingSetting
   */
  public function getTargetingSetting()
  {
    return $this->targetingSetting;
  }
  /**
   * Third-Party integration partners.
   *
   * @param GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners $thirdPartyIntegrationPartners
   */
  public function setThirdPartyIntegrationPartners(GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners $thirdPartyIntegrationPartners)
  {
    $this->thirdPartyIntegrationPartners = $thirdPartyIntegrationPartners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCampaignThirdPartyIntegrationPartners
   */
  public function getThirdPartyIntegrationPartners()
  {
    return $this->thirdPartyIntegrationPartners;
  }
  /**
   * Output only. Campaign-level settings for tracking information.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignTrackingSetting $trackingSetting
   */
  public function setTrackingSetting(GoogleAdsSearchads360V23ResourcesCampaignTrackingSetting $trackingSetting)
  {
    $this->trackingSetting = $trackingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignTrackingSetting
   */
  public function getTrackingSetting()
  {
    return $this->trackingSetting;
  }
  /**
   * The URL template for constructing a tracking URL.
   *
   * @param string $trackingUrlTemplate
   */
  public function setTrackingUrlTemplate($trackingUrlTemplate)
  {
    $this->trackingUrlTemplate = $trackingUrlTemplate;
  }
  /**
   * @return string
   */
  public function getTrackingUrlTemplate()
  {
    return $this->trackingUrlTemplate;
  }
  /**
   * Settings for Travel campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignTravelCampaignSettings $travelCampaignSettings
   */
  public function setTravelCampaignSettings(GoogleAdsSearchads360V23ResourcesCampaignTravelCampaignSettings $travelCampaignSettings)
  {
    $this->travelCampaignSettings = $travelCampaignSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignTravelCampaignSettings
   */
  public function getTravelCampaignSettings()
  {
    return $this->travelCampaignSettings;
  }
  /**
   * The list of mappings used to substitute custom parameter tags in a
   * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
   *
   * @param GoogleAdsSearchads360V23CommonCustomParameter[] $urlCustomParameters
   */
  public function setUrlCustomParameters($urlCustomParameters)
  {
    $this->urlCustomParameters = $urlCustomParameters;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomParameter[]
   */
  public function getUrlCustomParameters()
  {
    return $this->urlCustomParameters;
  }
  /**
   * Describes how unbranded pharma ads will be displayed.
   *
   * @param GoogleAdsSearchads360V23ResourcesCampaignVanityPharma $vanityPharma
   */
  public function setVanityPharma(GoogleAdsSearchads360V23ResourcesCampaignVanityPharma $vanityPharma)
  {
    $this->vanityPharma = $vanityPharma;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCampaignVanityPharma
   */
  public function getVanityPharma()
  {
    return $this->vanityPharma;
  }
  /**
   * Brand Safety setting at the individual campaign level. Allows for selecting
   * an inventory type to show your ads on content that is the right fit for
   * your brand. See https://support.google.com/google-ads/answer/7515513.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXPANDED_INVENTORY,
   * STANDARD_INVENTORY, LIMITED_INVENTORY
   *
   * @param self::VIDEO_BRAND_SAFETY_SUITABILITY_* $videoBrandSafetySuitability
   */
  public function setVideoBrandSafetySuitability($videoBrandSafetySuitability)
  {
    $this->videoBrandSafetySuitability = $videoBrandSafetySuitability;
  }
  /**
   * @return self::VIDEO_BRAND_SAFETY_SUITABILITY_*
   */
  public function getVideoBrandSafetySuitability()
  {
    return $this->videoBrandSafetySuitability;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaign::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaign');
