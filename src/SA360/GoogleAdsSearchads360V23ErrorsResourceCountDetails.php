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

class GoogleAdsSearchads360V23ErrorsResourceCountDetails extends \Google\Model
{
  /**
   * No value has been specified.
   */
  public const LIMIT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents an unclassified operation unknown in
   * this version.
   */
  public const LIMIT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Number of ENABLED and PAUSED campaigns per customer.
   */
  public const LIMIT_TYPE_CAMPAIGNS_PER_CUSTOMER = 'CAMPAIGNS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED base campaigns per customer.
   */
  public const LIMIT_TYPE_BASE_CAMPAIGNS_PER_CUSTOMER = 'BASE_CAMPAIGNS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED experiment campaigns per customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_CAMPAIGNS_PER_CUSTOMER = 'EXPERIMENT_CAMPAIGNS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED Hotel campaigns per customer.
   */
  public const LIMIT_TYPE_HOTEL_CAMPAIGNS_PER_CUSTOMER = 'HOTEL_CAMPAIGNS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED Smart Shopping campaigns per customer.
   */
  public const LIMIT_TYPE_SMART_SHOPPING_CAMPAIGNS_PER_CUSTOMER = 'SMART_SHOPPING_CAMPAIGNS_PER_CUSTOMER';
  /**
   * Number of ENABLED ad groups per campaign.
   */
  public const LIMIT_TYPE_AD_GROUPS_PER_CAMPAIGN = 'AD_GROUPS_PER_CAMPAIGN';
  /**
   * Number of ENABLED ad groups per Shopping campaign.
   */
  public const LIMIT_TYPE_AD_GROUPS_PER_SHOPPING_CAMPAIGN = 'AD_GROUPS_PER_SHOPPING_CAMPAIGN';
  /**
   * Number of ENABLED ad groups per Hotel campaign.
   */
  public const LIMIT_TYPE_AD_GROUPS_PER_HOTEL_CAMPAIGN = 'AD_GROUPS_PER_HOTEL_CAMPAIGN';
  /**
   * Number of ENABLED reporting ad groups per local campaign.
   */
  public const LIMIT_TYPE_REPORTING_AD_GROUPS_PER_LOCAL_CAMPAIGN = 'REPORTING_AD_GROUPS_PER_LOCAL_CAMPAIGN';
  /**
   * Number of ENABLED reporting ad groups per App campaign. It includes app
   * campaign and app campaign for engagement.
   */
  public const LIMIT_TYPE_REPORTING_AD_GROUPS_PER_APP_CAMPAIGN = 'REPORTING_AD_GROUPS_PER_APP_CAMPAIGN';
  /**
   * Number of ENABLED managed ad groups per smart campaign.
   */
  public const LIMIT_TYPE_MANAGED_AD_GROUPS_PER_SMART_CAMPAIGN = 'MANAGED_AD_GROUPS_PER_SMART_CAMPAIGN';
  /**
   * Number of ENABLED ad group criteria per customer. An ad group criterion is
   * considered as ENABLED if: 1. it's not REMOVED 2. its ad group is not
   * REMOVED 3. its campaign is not REMOVED.
   */
  public const LIMIT_TYPE_AD_GROUP_CRITERIA_PER_CUSTOMER = 'AD_GROUP_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ad group criteria across all base campaigns for a customer.
   */
  public const LIMIT_TYPE_BASE_AD_GROUP_CRITERIA_PER_CUSTOMER = 'BASE_AD_GROUP_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ad group criteria across all experiment campaigns for a customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_AD_GROUP_CRITERIA_PER_CUSTOMER = 'EXPERIMENT_AD_GROUP_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ENABLED ad group criteria per campaign. An ad group criterion is
   * considered as ENABLED if: 1. it's not REMOVED 2. its ad group is not
   * REMOVED.
   */
  public const LIMIT_TYPE_AD_GROUP_CRITERIA_PER_CAMPAIGN = 'AD_GROUP_CRITERIA_PER_CAMPAIGN';
  /**
   * Number of ENABLED campaign criteria per customer.
   */
  public const LIMIT_TYPE_CAMPAIGN_CRITERIA_PER_CUSTOMER = 'CAMPAIGN_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ENABLED campaign criteria across all base campaigns for a
   * customer.
   */
  public const LIMIT_TYPE_BASE_CAMPAIGN_CRITERIA_PER_CUSTOMER = 'BASE_CAMPAIGN_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ENABLED campaign criteria across all experiment campaigns for a
   * customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_CAMPAIGN_CRITERIA_PER_CUSTOMER = 'EXPERIMENT_CAMPAIGN_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ENABLED webpage criteria per customer, including campaign level
   * and ad group level.
   */
  public const LIMIT_TYPE_WEBPAGE_CRITERIA_PER_CUSTOMER = 'WEBPAGE_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ENABLED webpage criteria across all base campaigns for a
   * customer.
   */
  public const LIMIT_TYPE_BASE_WEBPAGE_CRITERIA_PER_CUSTOMER = 'BASE_WEBPAGE_CRITERIA_PER_CUSTOMER';
  /**
   * Meximum number of ENABLED webpage criteria across all experiment campaigns
   * for a customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_WEBPAGE_CRITERIA_PER_CUSTOMER = 'EXPERIMENT_WEBPAGE_CRITERIA_PER_CUSTOMER';
  /**
   * Number of combined audience criteria per ad group.
   */
  public const LIMIT_TYPE_COMBINED_AUDIENCE_CRITERIA_PER_AD_GROUP = 'COMBINED_AUDIENCE_CRITERIA_PER_AD_GROUP';
  /**
   * Limit for placement criterion type group in customer negative criterion.
   */
  public const LIMIT_TYPE_CUSTOMER_NEGATIVE_PLACEMENT_CRITERIA_PER_CUSTOMER = 'CUSTOMER_NEGATIVE_PLACEMENT_CRITERIA_PER_CUSTOMER';
  /**
   * Limit for YouTube TV channels in customer negative criterion.
   */
  public const LIMIT_TYPE_CUSTOMER_NEGATIVE_YOUTUBE_CHANNEL_CRITERIA_PER_CUSTOMER = 'CUSTOMER_NEGATIVE_YOUTUBE_CHANNEL_CRITERIA_PER_CUSTOMER';
  /**
   * Number of ENABLED criteria per ad group.
   */
  public const LIMIT_TYPE_CRITERIA_PER_AD_GROUP = 'CRITERIA_PER_AD_GROUP';
  /**
   * Number of listing group criteria per ad group.
   */
  public const LIMIT_TYPE_LISTING_GROUPS_PER_AD_GROUP = 'LISTING_GROUPS_PER_AD_GROUP';
  /**
   * Number of ENABLED explicitly shared budgets per customer.
   */
  public const LIMIT_TYPE_EXPLICITLY_SHARED_BUDGETS_PER_CUSTOMER = 'EXPLICITLY_SHARED_BUDGETS_PER_CUSTOMER';
  /**
   * Number of ENABLED implicitly shared budgets per customer.
   */
  public const LIMIT_TYPE_IMPLICITLY_SHARED_BUDGETS_PER_CUSTOMER = 'IMPLICITLY_SHARED_BUDGETS_PER_CUSTOMER';
  /**
   * Number of combined audience criteria per campaign.
   */
  public const LIMIT_TYPE_COMBINED_AUDIENCE_CRITERIA_PER_CAMPAIGN = 'COMBINED_AUDIENCE_CRITERIA_PER_CAMPAIGN';
  /**
   * Number of negative keywords per campaign.
   */
  public const LIMIT_TYPE_NEGATIVE_KEYWORDS_PER_CAMPAIGN = 'NEGATIVE_KEYWORDS_PER_CAMPAIGN';
  /**
   * Number of excluded campaign criteria in placement dimension, for example,
   * placement, mobile application, YouTube channel, etc. The API criterion type
   * is NOT limited to placement only, and this does not include exclusions at
   * the ad group or other levels.
   */
  public const LIMIT_TYPE_NEGATIVE_PLACEMENTS_PER_CAMPAIGN = 'NEGATIVE_PLACEMENTS_PER_CAMPAIGN';
  /**
   * Number of geo targets per campaign.
   */
  public const LIMIT_TYPE_GEO_TARGETS_PER_CAMPAIGN = 'GEO_TARGETS_PER_CAMPAIGN';
  /**
   * Number of negative IP blocks per campaign.
   */
  public const LIMIT_TYPE_NEGATIVE_IP_BLOCKS_PER_CAMPAIGN = 'NEGATIVE_IP_BLOCKS_PER_CAMPAIGN';
  /**
   * Number of proximity targets per campaign.
   */
  public const LIMIT_TYPE_PROXIMITIES_PER_CAMPAIGN = 'PROXIMITIES_PER_CAMPAIGN';
  /**
   * Number of listing scopes per Shopping campaign.
   */
  public const LIMIT_TYPE_LISTING_SCOPES_PER_SHOPPING_CAMPAIGN = 'LISTING_SCOPES_PER_SHOPPING_CAMPAIGN';
  /**
   * Number of listing scopes per non-Shopping campaign.
   */
  public const LIMIT_TYPE_LISTING_SCOPES_PER_NON_SHOPPING_CAMPAIGN = 'LISTING_SCOPES_PER_NON_SHOPPING_CAMPAIGN';
  /**
   * Number of criteria per negative keyword shared set.
   */
  public const LIMIT_TYPE_NEGATIVE_KEYWORDS_PER_SHARED_SET = 'NEGATIVE_KEYWORDS_PER_SHARED_SET';
  /**
   * Number of criteria per negative placement shared set.
   */
  public const LIMIT_TYPE_NEGATIVE_PLACEMENTS_PER_SHARED_SET = 'NEGATIVE_PLACEMENTS_PER_SHARED_SET';
  /**
   * Default number of shared sets allowed per type per customer.
   */
  public const LIMIT_TYPE_SHARED_SETS_PER_CUSTOMER_FOR_TYPE_DEFAULT = 'SHARED_SETS_PER_CUSTOMER_FOR_TYPE_DEFAULT';
  /**
   * Number of shared sets of negative placement list type for a manager
   * customer.
   */
  public const LIMIT_TYPE_SHARED_SETS_PER_CUSTOMER_FOR_NEGATIVE_PLACEMENT_LIST_LOWER = 'SHARED_SETS_PER_CUSTOMER_FOR_NEGATIVE_PLACEMENT_LIST_LOWER';
  /**
   * Number of hotel_advance_booking_window bid modifiers per ad group.
   */
  public const LIMIT_TYPE_HOTEL_ADVANCE_BOOKING_WINDOW_BID_MODIFIERS_PER_AD_GROUP = 'HOTEL_ADVANCE_BOOKING_WINDOW_BID_MODIFIERS_PER_AD_GROUP';
  /**
   * Number of ENABLED shared bidding strategies per customer.
   */
  public const LIMIT_TYPE_BIDDING_STRATEGIES_PER_CUSTOMER = 'BIDDING_STRATEGIES_PER_CUSTOMER';
  /**
   * Number of open basic user lists per customer.
   */
  public const LIMIT_TYPE_BASIC_USER_LISTS_PER_CUSTOMER = 'BASIC_USER_LISTS_PER_CUSTOMER';
  /**
   * Number of open logical user lists per customer.
   */
  public const LIMIT_TYPE_LOGICAL_USER_LISTS_PER_CUSTOMER = 'LOGICAL_USER_LISTS_PER_CUSTOMER';
  /**
   * Number of open rule based user lists per customer.
   */
  public const LIMIT_TYPE_RULE_BASED_USER_LISTS_PER_CUSTOMER = 'RULE_BASED_USER_LISTS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED ad group ads across all base campaigns for a
   * customer.
   */
  public const LIMIT_TYPE_BASE_AD_GROUP_ADS_PER_CUSTOMER = 'BASE_AD_GROUP_ADS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED ad group ads across all experiment campaigns
   * for a customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_AD_GROUP_ADS_PER_CUSTOMER = 'EXPERIMENT_AD_GROUP_ADS_PER_CUSTOMER';
  /**
   * Number of ENABLED and PAUSED ad group ads per campaign.
   */
  public const LIMIT_TYPE_AD_GROUP_ADS_PER_CAMPAIGN = 'AD_GROUP_ADS_PER_CAMPAIGN';
  /**
   * Number of ENABLED ads per ad group that do not fall in to other buckets.
   * Includes text and many other types.
   */
  public const LIMIT_TYPE_TEXT_AND_OTHER_ADS_PER_AD_GROUP = 'TEXT_AND_OTHER_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED image ads per ad group.
   */
  public const LIMIT_TYPE_IMAGE_ADS_PER_AD_GROUP = 'IMAGE_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED shopping smart ads per ad group.
   */
  public const LIMIT_TYPE_SHOPPING_SMART_ADS_PER_AD_GROUP = 'SHOPPING_SMART_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED responsive search ads per ad group.
   */
  public const LIMIT_TYPE_RESPONSIVE_SEARCH_ADS_PER_AD_GROUP = 'RESPONSIVE_SEARCH_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED app ads per ad group.
   */
  public const LIMIT_TYPE_APP_ADS_PER_AD_GROUP = 'APP_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED app engagement ads per ad group.
   */
  public const LIMIT_TYPE_APP_ENGAGEMENT_ADS_PER_AD_GROUP = 'APP_ENGAGEMENT_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED local ads per ad group.
   */
  public const LIMIT_TYPE_LOCAL_ADS_PER_AD_GROUP = 'LOCAL_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED video ads per ad group.
   */
  public const LIMIT_TYPE_VIDEO_ADS_PER_AD_GROUP = 'VIDEO_ADS_PER_AD_GROUP';
  /**
   * Number of ENABLED lead form CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_LEAD_FORM_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'LEAD_FORM_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED promotion CustomerAssets per customer.
   */
  public const LIMIT_TYPE_PROMOTION_CUSTOMER_ASSETS_PER_CUSTOMER = 'PROMOTION_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED promotion CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_PROMOTION_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'PROMOTION_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED promotion AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_PROMOTION_AD_GROUP_ASSETS_PER_AD_GROUP = 'PROMOTION_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED callout CustomerAssets per customer.
   */
  public const LIMIT_TYPE_CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER = 'CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED callout CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED callout AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP = 'CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED sitelink CustomerAssets per customer.
   */
  public const LIMIT_TYPE_SITELINK_CUSTOMER_ASSETS_PER_CUSTOMER = 'SITELINK_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED sitelink CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_SITELINK_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'SITELINK_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED sitelink AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_SITELINK_AD_GROUP_ASSETS_PER_AD_GROUP = 'SITELINK_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED structured snippet CustomerAssets per customer.
   */
  public const LIMIT_TYPE_STRUCTURED_SNIPPET_CUSTOMER_ASSETS_PER_CUSTOMER = 'STRUCTURED_SNIPPET_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED structured snippet CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_STRUCTURED_SNIPPET_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'STRUCTURED_SNIPPET_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED structured snippet AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_STRUCTURED_SNIPPET_AD_GROUP_ASSETS_PER_AD_GROUP = 'STRUCTURED_SNIPPET_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED mobile app CustomerAssets per customer.
   */
  public const LIMIT_TYPE_MOBILE_APP_CUSTOMER_ASSETS_PER_CUSTOMER = 'MOBILE_APP_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED mobile app CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_MOBILE_APP_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'MOBILE_APP_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED mobile app AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_MOBILE_APP_AD_GROUP_ASSETS_PER_AD_GROUP = 'MOBILE_APP_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED hotel callout CustomerAssets per customer.
   */
  public const LIMIT_TYPE_HOTEL_CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER = 'HOTEL_CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED hotel callout CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_HOTEL_CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'HOTEL_CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED hotel callout AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_HOTEL_CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP = 'HOTEL_CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED call CustomerAssets per customer.
   */
  public const LIMIT_TYPE_CALL_CUSTOMER_ASSETS_PER_CUSTOMER = 'CALL_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED call CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_CALL_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'CALL_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED call AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_CALL_AD_GROUP_ASSETS_PER_AD_GROUP = 'CALL_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED price CustomerAssets per customer.
   */
  public const LIMIT_TYPE_PRICE_CUSTOMER_ASSETS_PER_CUSTOMER = 'PRICE_CUSTOMER_ASSETS_PER_CUSTOMER';
  /**
   * Number of ENABLED price CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_PRICE_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'PRICE_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED price AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_PRICE_AD_GROUP_ASSETS_PER_AD_GROUP = 'PRICE_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED ad image CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_AD_IMAGE_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'AD_IMAGE_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED ad image AdGroupAssets per ad group.
   */
  public const LIMIT_TYPE_AD_IMAGE_AD_GROUP_ASSETS_PER_AD_GROUP = 'AD_IMAGE_AD_GROUP_ASSETS_PER_AD_GROUP';
  /**
   * Number of ENABLED page feed asset sets per customer.
   */
  public const LIMIT_TYPE_PAGE_FEED_ASSET_SETS_PER_CUSTOMER = 'PAGE_FEED_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED dynamic education feed asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_EDUCATION_FEED_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_EDUCATION_FEED_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per page feed asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_PAGE_FEED_ASSET_SET = 'ASSETS_PER_PAGE_FEED_ASSET_SET';
  /**
   * Number of ENABLED assets per dynamic education asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_EDUCATION_FEED_ASSET_SET = 'ASSETS_PER_DYNAMIC_EDUCATION_FEED_ASSET_SET';
  /**
   * Number of ENABLED dynamic real estate asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_REAL_ESTATE_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_REAL_ESTATE_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic real estate asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_REAL_ESTATE_ASSET_SET = 'ASSETS_PER_DYNAMIC_REAL_ESTATE_ASSET_SET';
  /**
   * Number of ENABLED dynamic custom asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_CUSTOM_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_CUSTOM_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic custom asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_CUSTOM_ASSET_SET = 'ASSETS_PER_DYNAMIC_CUSTOM_ASSET_SET';
  /**
   * Number of ENABLED dynamic hotels and rentals asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_HOTELS_AND_RENTALS_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_HOTELS_AND_RENTALS_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic hotels and rentals asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_HOTELS_AND_RENTALS_ASSET_SET = 'ASSETS_PER_DYNAMIC_HOTELS_AND_RENTALS_ASSET_SET';
  /**
   * Number of ENABLED dynamic local asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_LOCAL_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_LOCAL_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic local asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_LOCAL_ASSET_SET = 'ASSETS_PER_DYNAMIC_LOCAL_ASSET_SET';
  /**
   * Number of ENABLED dynamic flights asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_FLIGHTS_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_FLIGHTS_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic flights asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_FLIGHTS_ASSET_SET = 'ASSETS_PER_DYNAMIC_FLIGHTS_ASSET_SET';
  /**
   * Number of ENABLED dynamic travel asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_TRAVEL_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_TRAVEL_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic travel asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_TRAVEL_ASSET_SET = 'ASSETS_PER_DYNAMIC_TRAVEL_ASSET_SET';
  /**
   * Number of ENABLED dynamic jobs asset sets per customer.
   */
  public const LIMIT_TYPE_DYNAMIC_JOBS_ASSET_SETS_PER_CUSTOMER = 'DYNAMIC_JOBS_ASSET_SETS_PER_CUSTOMER';
  /**
   * Number of ENABLED assets per dynamic jobs asset set.
   */
  public const LIMIT_TYPE_ASSETS_PER_DYNAMIC_JOBS_ASSET_SET = 'ASSETS_PER_DYNAMIC_JOBS_ASSET_SET';
  /**
   * Number of ENABLED business name CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_BUSINESS_NAME_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'BUSINESS_NAME_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of ENABLED business logo CampaignAssets per campaign.
   */
  public const LIMIT_TYPE_BUSINESS_LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'BUSINESS_LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Number of versions per ad.
   */
  public const LIMIT_TYPE_VERSIONS_PER_AD = 'VERSIONS_PER_AD';
  /**
   * Number of ENABLED user feeds per customer.
   */
  public const LIMIT_TYPE_USER_FEEDS_PER_CUSTOMER = 'USER_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED system feeds per customer.
   */
  public const LIMIT_TYPE_SYSTEM_FEEDS_PER_CUSTOMER = 'SYSTEM_FEEDS_PER_CUSTOMER';
  /**
   * Number of feed attributes per feed.
   */
  public const LIMIT_TYPE_FEED_ATTRIBUTES_PER_FEED = 'FEED_ATTRIBUTES_PER_FEED';
  /**
   * Number of ENABLED feed items per customer.
   */
  public const LIMIT_TYPE_FEED_ITEMS_PER_CUSTOMER = 'FEED_ITEMS_PER_CUSTOMER';
  /**
   * Number of ENABLED campaign feeds per customer.
   */
  public const LIMIT_TYPE_CAMPAIGN_FEEDS_PER_CUSTOMER = 'CAMPAIGN_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED campaign feeds across all base campaigns for a customer.
   */
  public const LIMIT_TYPE_BASE_CAMPAIGN_FEEDS_PER_CUSTOMER = 'BASE_CAMPAIGN_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED campaign feeds across all experiment campaigns for a
   * customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_CAMPAIGN_FEEDS_PER_CUSTOMER = 'EXPERIMENT_CAMPAIGN_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED ad group feeds per customer.
   */
  public const LIMIT_TYPE_AD_GROUP_FEEDS_PER_CUSTOMER = 'AD_GROUP_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED ad group feeds across all base campaigns for a customer.
   */
  public const LIMIT_TYPE_BASE_AD_GROUP_FEEDS_PER_CUSTOMER = 'BASE_AD_GROUP_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED ad group feeds across all experiment campaigns for a
   * customer.
   */
  public const LIMIT_TYPE_EXPERIMENT_AD_GROUP_FEEDS_PER_CUSTOMER = 'EXPERIMENT_AD_GROUP_FEEDS_PER_CUSTOMER';
  /**
   * Number of ENABLED ad group feeds per campaign.
   */
  public const LIMIT_TYPE_AD_GROUP_FEEDS_PER_CAMPAIGN = 'AD_GROUP_FEEDS_PER_CAMPAIGN';
  /**
   * Number of ENABLED feed items per customer.
   */
  public const LIMIT_TYPE_FEED_ITEM_SETS_PER_CUSTOMER = 'FEED_ITEM_SETS_PER_CUSTOMER';
  /**
   * Number of feed items per feed item set.
   */
  public const LIMIT_TYPE_FEED_ITEMS_PER_FEED_ITEM_SET = 'FEED_ITEMS_PER_FEED_ITEM_SET';
  /**
   * Number of ENABLED campaign experiments per customer.
   */
  public const LIMIT_TYPE_CAMPAIGN_EXPERIMENTS_PER_CUSTOMER = 'CAMPAIGN_EXPERIMENTS_PER_CUSTOMER';
  /**
   * Number of video experiment arms per experiment.
   */
  public const LIMIT_TYPE_EXPERIMENT_ARMS_PER_VIDEO_EXPERIMENT = 'EXPERIMENT_ARMS_PER_VIDEO_EXPERIMENT';
  /**
   * Number of owned labels per customer.
   */
  public const LIMIT_TYPE_OWNED_LABELS_PER_CUSTOMER = 'OWNED_LABELS_PER_CUSTOMER';
  /**
   * Number of applied labels per campaign.
   */
  public const LIMIT_TYPE_LABELS_PER_CAMPAIGN = 'LABELS_PER_CAMPAIGN';
  /**
   * Number of applied labels per ad group.
   */
  public const LIMIT_TYPE_LABELS_PER_AD_GROUP = 'LABELS_PER_AD_GROUP';
  /**
   * Number of applied labels per ad group ad.
   */
  public const LIMIT_TYPE_LABELS_PER_AD_GROUP_AD = 'LABELS_PER_AD_GROUP_AD';
  /**
   * Number of applied labels per ad group criterion.
   */
  public const LIMIT_TYPE_LABELS_PER_AD_GROUP_CRITERION = 'LABELS_PER_AD_GROUP_CRITERION';
  /**
   * Number of customers with a single label applied.
   */
  public const LIMIT_TYPE_TARGET_CUSTOMERS_PER_LABEL = 'TARGET_CUSTOMERS_PER_LABEL';
  /**
   * Number of ENABLED keyword plans per user per customer. The limit is applied
   * per pair because by default a plan is private to a user of a customer. Each
   * user of a customer has their own independent limit.
   */
  public const LIMIT_TYPE_KEYWORD_PLANS_PER_USER_PER_CUSTOMER = 'KEYWORD_PLANS_PER_USER_PER_CUSTOMER';
  /**
   * Number of keyword plan ad group keywords per keyword plan.
   */
  public const LIMIT_TYPE_KEYWORD_PLAN_AD_GROUP_KEYWORDS_PER_KEYWORD_PLAN = 'KEYWORD_PLAN_AD_GROUP_KEYWORDS_PER_KEYWORD_PLAN';
  /**
   * Number of keyword plan ad groups per keyword plan.
   */
  public const LIMIT_TYPE_KEYWORD_PLAN_AD_GROUPS_PER_KEYWORD_PLAN = 'KEYWORD_PLAN_AD_GROUPS_PER_KEYWORD_PLAN';
  /**
   * Number of keyword plan negative keywords (both campaign and ad group) per
   * keyword plan.
   */
  public const LIMIT_TYPE_KEYWORD_PLAN_NEGATIVE_KEYWORDS_PER_KEYWORD_PLAN = 'KEYWORD_PLAN_NEGATIVE_KEYWORDS_PER_KEYWORD_PLAN';
  /**
   * Number of keyword plan campaigns per keyword plan.
   */
  public const LIMIT_TYPE_KEYWORD_PLAN_CAMPAIGNS_PER_KEYWORD_PLAN = 'KEYWORD_PLAN_CAMPAIGNS_PER_KEYWORD_PLAN';
  /**
   * Number of ENABLED conversion actions per customer.
   */
  public const LIMIT_TYPE_CONVERSION_ACTIONS_PER_CUSTOMER = 'CONVERSION_ACTIONS_PER_CUSTOMER';
  /**
   * Number of operations in a single batch job.
   */
  public const LIMIT_TYPE_BATCH_JOB_OPERATIONS_PER_JOB = 'BATCH_JOB_OPERATIONS_PER_JOB';
  /**
   * Number of PENDING or ENABLED batch jobs per customer.
   */
  public const LIMIT_TYPE_BATCH_JOBS_PER_CUSTOMER = 'BATCH_JOBS_PER_CUSTOMER';
  /**
   * Number of hotel check-in date range bid modifiers per ad agroup.
   */
  public const LIMIT_TYPE_HOTEL_CHECK_IN_DATE_RANGE_BID_MODIFIERS_PER_AD_GROUP = 'HOTEL_CHECK_IN_DATE_RANGE_BID_MODIFIERS_PER_AD_GROUP';
  /**
   * Number of shared sets of type ACCOUNT_LEVEL_NEGATIVE_KEYWORDS per account.
   */
  public const LIMIT_TYPE_SHARED_SETS_PER_ACCOUNT_FOR_ACCOUNT_LEVEL_NEGATIVE_KEYWORDS = 'SHARED_SETS_PER_ACCOUNT_FOR_ACCOUNT_LEVEL_NEGATIVE_KEYWORDS';
  /**
   * Number of keywords per ACCOUNT_LEVEL_NEGATIVE_KEYWORDS shared set.
   */
  public const LIMIT_TYPE_ACCOUNT_LEVEL_NEGATIVE_KEYWORDS_PER_SHARED_SET = 'ACCOUNT_LEVEL_NEGATIVE_KEYWORDS_PER_SHARED_SET';
  /**
   * Maximum number of asset per hotel property asset set.
   */
  public const LIMIT_TYPE_ENABLED_ASSET_PER_HOTEL_PROPERTY_ASSET_SET = 'ENABLED_ASSET_PER_HOTEL_PROPERTY_ASSET_SET';
  /**
   * Maximum number of enabled hotel property assets per asset group.
   */
  public const LIMIT_TYPE_ENABLED_HOTEL_PROPERTY_ASSET_LINKS_PER_ASSET_GROUP = 'ENABLED_HOTEL_PROPERTY_ASSET_LINKS_PER_ASSET_GROUP';
  /**
   * Number of criteria per brand shared set.
   */
  public const LIMIT_TYPE_BRANDS_PER_SHARED_SET = 'BRANDS_PER_SHARED_SET';
  /**
   * Number of active brand list criteria per campaign.
   */
  public const LIMIT_TYPE_ENABLED_BRAND_LIST_CRITERIA_PER_CAMPAIGN = 'ENABLED_BRAND_LIST_CRITERIA_PER_CAMPAIGN';
  /**
   * Maximum number of shared sets of brand type for an account.
   */
  public const LIMIT_TYPE_SHARED_SETS_PER_ACCOUNT_FOR_BRAND = 'SHARED_SETS_PER_ACCOUNT_FOR_BRAND';
  /**
   * Maximum number of lookalike lists per customer.
   */
  public const LIMIT_TYPE_LOOKALIKE_USER_LISTS_PER_CUSTOMER = 'LOOKALIKE_USER_LISTS_PER_CUSTOMER';
  /**
   * Total number of enabled IMAGE CampaignAssets with LOGO and LANDSCAPE_LOGO
   * field types per campaign.
   */
  public const LIMIT_TYPE_LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN = 'LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN';
  /**
   * Maximum number of active business message asset links at customer level.
   */
  public const LIMIT_TYPE_BUSINESS_MESSAGE_ASSET_LINKS_PER_CUSTOMER = 'BUSINESS_MESSAGE_ASSET_LINKS_PER_CUSTOMER';
  /**
   * Maximum number of active WhatsApp business message asset links at campaign
   * level.
   */
  public const LIMIT_TYPE_WHATSAPP_BUSINESS_MESSAGE_ASSET_LINKS_PER_CAMPAIGN = 'WHATSAPP_BUSINESS_MESSAGE_ASSET_LINKS_PER_CAMPAIGN';
  /**
   * Maximum number of active WhatsApp business message asset links at ad group
   * level.
   */
  public const LIMIT_TYPE_WHATSAPP_BUSINESS_MESSAGE_ASSET_LINKS_PER_AD_GROUP = 'WHATSAPP_BUSINESS_MESSAGE_ASSET_LINKS_PER_AD_GROUP';
  /**
   * Number of ENABLED brand list criteria per ad group.
   */
  public const LIMIT_TYPE_BRAND_LIST_CRITERIA_PER_AD_GROUP = 'BRAND_LIST_CRITERIA_PER_AD_GROUP';
  /**
   * The ID of the resource whose limit was exceeded. External customer ID if
   * the limit is for a customer.
   *
   * @var string
   */
  public $enclosingId;
  /**
   * The name of the resource ( etc.) whose limit was exceeded.
   *
   * @var string
   */
  public $enclosingResource;
  /**
   * The count of existing entities.
   *
   * @var int
   */
  public $existingCount;
  /**
   * The limit which was exceeded.
   *
   * @var int
   */
  public $limit;
  /**
   * The resource limit type which was exceeded.
   *
   * @var string
   */
  public $limitType;

  /**
   * The ID of the resource whose limit was exceeded. External customer ID if
   * the limit is for a customer.
   *
   * @param string $enclosingId
   */
  public function setEnclosingId($enclosingId)
  {
    $this->enclosingId = $enclosingId;
  }
  /**
   * @return string
   */
  public function getEnclosingId()
  {
    return $this->enclosingId;
  }
  /**
   * The name of the resource ( etc.) whose limit was exceeded.
   *
   * @param string $enclosingResource
   */
  public function setEnclosingResource($enclosingResource)
  {
    $this->enclosingResource = $enclosingResource;
  }
  /**
   * @return string
   */
  public function getEnclosingResource()
  {
    return $this->enclosingResource;
  }
  /**
   * The count of existing entities.
   *
   * @param int $existingCount
   */
  public function setExistingCount($existingCount)
  {
    $this->existingCount = $existingCount;
  }
  /**
   * @return int
   */
  public function getExistingCount()
  {
    return $this->existingCount;
  }
  /**
   * The limit which was exceeded.
   *
   * @param int $limit
   */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /**
   * @return int
   */
  public function getLimit()
  {
    return $this->limit;
  }
  /**
   * The resource limit type which was exceeded.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGNS_PER_CUSTOMER,
   * BASE_CAMPAIGNS_PER_CUSTOMER, EXPERIMENT_CAMPAIGNS_PER_CUSTOMER,
   * HOTEL_CAMPAIGNS_PER_CUSTOMER, SMART_SHOPPING_CAMPAIGNS_PER_CUSTOMER,
   * AD_GROUPS_PER_CAMPAIGN, AD_GROUPS_PER_SHOPPING_CAMPAIGN,
   * AD_GROUPS_PER_HOTEL_CAMPAIGN, REPORTING_AD_GROUPS_PER_LOCAL_CAMPAIGN,
   * REPORTING_AD_GROUPS_PER_APP_CAMPAIGN, MANAGED_AD_GROUPS_PER_SMART_CAMPAIGN,
   * AD_GROUP_CRITERIA_PER_CUSTOMER, BASE_AD_GROUP_CRITERIA_PER_CUSTOMER,
   * EXPERIMENT_AD_GROUP_CRITERIA_PER_CUSTOMER, AD_GROUP_CRITERIA_PER_CAMPAIGN,
   * CAMPAIGN_CRITERIA_PER_CUSTOMER, BASE_CAMPAIGN_CRITERIA_PER_CUSTOMER,
   * EXPERIMENT_CAMPAIGN_CRITERIA_PER_CUSTOMER, WEBPAGE_CRITERIA_PER_CUSTOMER,
   * BASE_WEBPAGE_CRITERIA_PER_CUSTOMER,
   * EXPERIMENT_WEBPAGE_CRITERIA_PER_CUSTOMER,
   * COMBINED_AUDIENCE_CRITERIA_PER_AD_GROUP,
   * CUSTOMER_NEGATIVE_PLACEMENT_CRITERIA_PER_CUSTOMER,
   * CUSTOMER_NEGATIVE_YOUTUBE_CHANNEL_CRITERIA_PER_CUSTOMER,
   * CRITERIA_PER_AD_GROUP, LISTING_GROUPS_PER_AD_GROUP,
   * EXPLICITLY_SHARED_BUDGETS_PER_CUSTOMER,
   * IMPLICITLY_SHARED_BUDGETS_PER_CUSTOMER,
   * COMBINED_AUDIENCE_CRITERIA_PER_CAMPAIGN, NEGATIVE_KEYWORDS_PER_CAMPAIGN,
   * NEGATIVE_PLACEMENTS_PER_CAMPAIGN, GEO_TARGETS_PER_CAMPAIGN,
   * NEGATIVE_IP_BLOCKS_PER_CAMPAIGN, PROXIMITIES_PER_CAMPAIGN,
   * LISTING_SCOPES_PER_SHOPPING_CAMPAIGN,
   * LISTING_SCOPES_PER_NON_SHOPPING_CAMPAIGN, NEGATIVE_KEYWORDS_PER_SHARED_SET,
   * NEGATIVE_PLACEMENTS_PER_SHARED_SET,
   * SHARED_SETS_PER_CUSTOMER_FOR_TYPE_DEFAULT,
   * SHARED_SETS_PER_CUSTOMER_FOR_NEGATIVE_PLACEMENT_LIST_LOWER,
   * HOTEL_ADVANCE_BOOKING_WINDOW_BID_MODIFIERS_PER_AD_GROUP,
   * BIDDING_STRATEGIES_PER_CUSTOMER, BASIC_USER_LISTS_PER_CUSTOMER,
   * LOGICAL_USER_LISTS_PER_CUSTOMER, RULE_BASED_USER_LISTS_PER_CUSTOMER,
   * BASE_AD_GROUP_ADS_PER_CUSTOMER, EXPERIMENT_AD_GROUP_ADS_PER_CUSTOMER,
   * AD_GROUP_ADS_PER_CAMPAIGN, TEXT_AND_OTHER_ADS_PER_AD_GROUP,
   * IMAGE_ADS_PER_AD_GROUP, SHOPPING_SMART_ADS_PER_AD_GROUP,
   * RESPONSIVE_SEARCH_ADS_PER_AD_GROUP, APP_ADS_PER_AD_GROUP,
   * APP_ENGAGEMENT_ADS_PER_AD_GROUP, LOCAL_ADS_PER_AD_GROUP,
   * VIDEO_ADS_PER_AD_GROUP, LEAD_FORM_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * PROMOTION_CUSTOMER_ASSETS_PER_CUSTOMER,
   * PROMOTION_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * PROMOTION_AD_GROUP_ASSETS_PER_AD_GROUP,
   * CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER, CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP,
   * SITELINK_CUSTOMER_ASSETS_PER_CUSTOMER,
   * SITELINK_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * SITELINK_AD_GROUP_ASSETS_PER_AD_GROUP,
   * STRUCTURED_SNIPPET_CUSTOMER_ASSETS_PER_CUSTOMER,
   * STRUCTURED_SNIPPET_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * STRUCTURED_SNIPPET_AD_GROUP_ASSETS_PER_AD_GROUP,
   * MOBILE_APP_CUSTOMER_ASSETS_PER_CUSTOMER,
   * MOBILE_APP_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * MOBILE_APP_AD_GROUP_ASSETS_PER_AD_GROUP,
   * HOTEL_CALLOUT_CUSTOMER_ASSETS_PER_CUSTOMER,
   * HOTEL_CALLOUT_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * HOTEL_CALLOUT_AD_GROUP_ASSETS_PER_AD_GROUP,
   * CALL_CUSTOMER_ASSETS_PER_CUSTOMER, CALL_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * CALL_AD_GROUP_ASSETS_PER_AD_GROUP, PRICE_CUSTOMER_ASSETS_PER_CUSTOMER,
   * PRICE_CAMPAIGN_ASSETS_PER_CAMPAIGN, PRICE_AD_GROUP_ASSETS_PER_AD_GROUP,
   * AD_IMAGE_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * AD_IMAGE_AD_GROUP_ASSETS_PER_AD_GROUP, PAGE_FEED_ASSET_SETS_PER_CUSTOMER,
   * DYNAMIC_EDUCATION_FEED_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_PAGE_FEED_ASSET_SET,
   * ASSETS_PER_DYNAMIC_EDUCATION_FEED_ASSET_SET,
   * DYNAMIC_REAL_ESTATE_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_DYNAMIC_REAL_ESTATE_ASSET_SET,
   * DYNAMIC_CUSTOM_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_DYNAMIC_CUSTOM_ASSET_SET,
   * DYNAMIC_HOTELS_AND_RENTALS_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_DYNAMIC_HOTELS_AND_RENTALS_ASSET_SET,
   * DYNAMIC_LOCAL_ASSET_SETS_PER_CUSTOMER, ASSETS_PER_DYNAMIC_LOCAL_ASSET_SET,
   * DYNAMIC_FLIGHTS_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_DYNAMIC_FLIGHTS_ASSET_SET,
   * DYNAMIC_TRAVEL_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_DYNAMIC_TRAVEL_ASSET_SET, DYNAMIC_JOBS_ASSET_SETS_PER_CUSTOMER,
   * ASSETS_PER_DYNAMIC_JOBS_ASSET_SET,
   * BUSINESS_NAME_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * BUSINESS_LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN, VERSIONS_PER_AD,
   * USER_FEEDS_PER_CUSTOMER, SYSTEM_FEEDS_PER_CUSTOMER,
   * FEED_ATTRIBUTES_PER_FEED, FEED_ITEMS_PER_CUSTOMER,
   * CAMPAIGN_FEEDS_PER_CUSTOMER, BASE_CAMPAIGN_FEEDS_PER_CUSTOMER,
   * EXPERIMENT_CAMPAIGN_FEEDS_PER_CUSTOMER, AD_GROUP_FEEDS_PER_CUSTOMER,
   * BASE_AD_GROUP_FEEDS_PER_CUSTOMER, EXPERIMENT_AD_GROUP_FEEDS_PER_CUSTOMER,
   * AD_GROUP_FEEDS_PER_CAMPAIGN, FEED_ITEM_SETS_PER_CUSTOMER,
   * FEED_ITEMS_PER_FEED_ITEM_SET, CAMPAIGN_EXPERIMENTS_PER_CUSTOMER,
   * EXPERIMENT_ARMS_PER_VIDEO_EXPERIMENT, OWNED_LABELS_PER_CUSTOMER,
   * LABELS_PER_CAMPAIGN, LABELS_PER_AD_GROUP, LABELS_PER_AD_GROUP_AD,
   * LABELS_PER_AD_GROUP_CRITERION, TARGET_CUSTOMERS_PER_LABEL,
   * KEYWORD_PLANS_PER_USER_PER_CUSTOMER,
   * KEYWORD_PLAN_AD_GROUP_KEYWORDS_PER_KEYWORD_PLAN,
   * KEYWORD_PLAN_AD_GROUPS_PER_KEYWORD_PLAN,
   * KEYWORD_PLAN_NEGATIVE_KEYWORDS_PER_KEYWORD_PLAN,
   * KEYWORD_PLAN_CAMPAIGNS_PER_KEYWORD_PLAN, CONVERSION_ACTIONS_PER_CUSTOMER,
   * BATCH_JOB_OPERATIONS_PER_JOB, BATCH_JOBS_PER_CUSTOMER,
   * HOTEL_CHECK_IN_DATE_RANGE_BID_MODIFIERS_PER_AD_GROUP,
   * SHARED_SETS_PER_ACCOUNT_FOR_ACCOUNT_LEVEL_NEGATIVE_KEYWORDS,
   * ACCOUNT_LEVEL_NEGATIVE_KEYWORDS_PER_SHARED_SET,
   * ENABLED_ASSET_PER_HOTEL_PROPERTY_ASSET_SET,
   * ENABLED_HOTEL_PROPERTY_ASSET_LINKS_PER_ASSET_GROUP, BRANDS_PER_SHARED_SET,
   * ENABLED_BRAND_LIST_CRITERIA_PER_CAMPAIGN,
   * SHARED_SETS_PER_ACCOUNT_FOR_BRAND, LOOKALIKE_USER_LISTS_PER_CUSTOMER,
   * LOGO_CAMPAIGN_ASSETS_PER_CAMPAIGN,
   * BUSINESS_MESSAGE_ASSET_LINKS_PER_CUSTOMER,
   * WHATSAPP_BUSINESS_MESSAGE_ASSET_LINKS_PER_CAMPAIGN,
   * WHATSAPP_BUSINESS_MESSAGE_ASSET_LINKS_PER_AD_GROUP,
   * BRAND_LIST_CRITERIA_PER_AD_GROUP
   *
   * @param self::LIMIT_TYPE_* $limitType
   */
  public function setLimitType($limitType)
  {
    $this->limitType = $limitType;
  }
  /**
   * @return self::LIMIT_TYPE_*
   */
  public function getLimitType()
  {
    return $this->limitType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ErrorsResourceCountDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ErrorsResourceCountDetails');
