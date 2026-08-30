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

namespace Google\Service\AgenciesAndBrands;

class Field extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const DIMENSION_DIMENSION_UNSPECIFIED = 'DIMENSION_UNSPECIFIED';
  /**
   * The domain of the advertiser.
   */
  public const DIMENSION_ADVERTISER_DOMAIN = 'ADVERTISER_DOMAIN';
  /**
   * Agency account ID.
   */
  public const DIMENSION_AGENCY_ACCOUNT_ID = 'AGENCY_ACCOUNT_ID';
  /**
   * Agency account name.
   */
  public const DIMENSION_AGENCY_ACCOUNT_NAME = 'AGENCY_ACCOUNT_NAME';
  /**
   * Reason that a Real-time Bidding bid was filtered from the auction.
   */
  public const DIMENSION_BID_FILTERING_REASON = 'BID_FILTERING_REASON';
  /**
   * The short description of the reason that a Real-time Bidding bid was
   * filtered from the auction.
   */
  public const DIMENSION_BID_FILTERING_REASON_NAME = 'BID_FILTERING_REASON_NAME';
  /**
   * A boolean indicating whether the impression was rendered by a buyer SDK. If
   * set to true, the impression was rendered by a buyer SDK.
   */
  public const DIMENSION_BUYER_SDK = 'BUYER_SDK';
  /**
   * The ID of the agency campaign.
   */
  public const DIMENSION_CAMPAIGN_ID = 'CAMPAIGN_ID';
  /**
   * The display name of the agency campaign.
   */
  public const DIMENSION_CAMPAIGN_NAME = 'CAMPAIGN_NAME';
  /**
   * Display name of a country.
   */
  public const DIMENSION_COUNTRY = 'COUNTRY';
  /**
   * Creative format, "Display" vs. "Video".
   */
  public const DIMENSION_CREATIVE_FORMAT = 'CREATIVE_FORMAT';
  /**
   * Creative ID.
   */
  public const DIMENSION_CREATIVE_ID = 'CREATIVE_ID';
  /**
   * Applied creative policies.
   */
  public const DIMENSION_CREATIVE_POLICIES = 'CREATIVE_POLICIES';
  /**
   * The localized display name of applied creative policies.
   */
  public const DIMENSION_CREATIVE_POLICIES_NAME = 'CREATIVE_POLICIES_NAME';
  /**
   * Creative size.
   */
  public const DIMENSION_CREATIVE_SIZE = 'CREATIVE_SIZE';
  /**
   * The ID of the data segment created by a curator.
   */
  public const DIMENSION_CURATION_DATA_SEGMENT_ID = 'CURATION_DATA_SEGMENT_ID';
  /**
   * The display name of the curation partner.
   */
  public const DIMENSION_CURATION_PARTNER_NAME = 'CURATION_PARTNER_NAME';
  /**
   * The type of curation service (e.g. packaging or data segment).
   */
  public const DIMENSION_CURATOR_FEE_TYPE = 'CURATOR_FEE_TYPE';
  /**
   * Date.
   */
  public const DIMENSION_DATE = 'DATE';
  /**
   * Deal ID.
   */
  public const DIMENSION_DEAL_ID = 'DEAL_ID';
  /**
   * Deal name.
   */
  public const DIMENSION_DEAL_NAME = 'DEAL_NAME';
  /**
   * Display name of the detected advertiser.
   */
  public const DIMENSION_DETECTED_ADVERTISER_NAME = 'DETECTED_ADVERTISER_NAME';
  /**
   * Display name of the DSP.
   */
  public const DIMENSION_DSP_NAME = 'DSP_NAME';
  /**
   * DSP Seat ID.
   */
  public const DIMENSION_DSP_SEAT_ID = 'DSP_SEAT_ID';
  /**
   * The user device and container environment where the impression originates.
   * Supported values are "app" and "web".
   */
  public const DIMENSION_ENVIRONMENT = 'ENVIRONMENT';
  /**
   * The localized display name of the user device and container environment
   * where the impression originates. Supported values are "app" and "web".
   */
  public const DIMENSION_ENVIRONMENT_NAME = 'ENVIRONMENT_NAME';
  /**
   * A boolean indicating whether the impression was rendered by the Google
   * Mobile Ads SDK. If set to true, the impression was rendered by the Google
   * Mobile Ads SDK.
   */
  public const DIMENSION_GMA_SDK = 'GMA_SDK';
  /**
   * Hour.
   */
  public const DIMENSION_HOUR = 'HOUR';
  /**
   * Mobile App ID.
   */
  public const DIMENSION_MOBILE_APP_ID = 'MOBILE_APP_ID';
  /**
   * Mobile App Name.
   */
  public const DIMENSION_MOBILE_APP_NAME = 'MOBILE_APP_NAME';
  /**
   * Mobile operating system.
   */
  public const DIMENSION_MOBILE_OS = 'MOBILE_OS';
  /**
   * Month.
   */
  public const DIMENSION_MONTH = 'MONTH';
  /**
   * The visibility of the package fee (e.g. disclosed or non-disclosed).
   */
  public const DIMENSION_PACKAGE_FEE_VISIBILITY = 'PACKAGE_FEE_VISIBILITY';
  /**
   * Placement ID.
   */
  public const DIMENSION_PLACEMENT_ID = 'PLACEMENT_ID';
  /**
   * Platform, e.g. "desktop" vs. "mobile".
   */
  public const DIMENSION_PLATFORM = 'PLATFORM';
  /**
   * Publisher domain.
   */
  public const DIMENSION_PUBLISHER_DOMAIN = 'PUBLISHER_DOMAIN';
  /**
   * Publisher identifier.
   */
  public const DIMENSION_PUBLISHER_ID = 'PUBLISHER_ID';
  /**
   * Publisher name.
   */
  public const DIMENSION_PUBLISHER_NAME = 'PUBLISHER_NAME';
  /**
   * Whether publisher protections are applied.
   */
  public const DIMENSION_PUBLISHER_PROTECTIONS = 'PUBLISHER_PROTECTIONS';
  /**
   * The localized display name indicating whether publisher protections are
   * applied.
   */
  public const DIMENSION_PUBLISHER_PROTECTIONS_NAME = 'PUBLISHER_PROTECTIONS_NAME';
  /**
   * Seller authorization.
   */
  public const DIMENSION_SELLER_AUTHORIZATION = 'SELLER_AUTHORIZATION';
  /**
   * The localized display name of seller authorization.
   */
  public const DIMENSION_SELLER_AUTHORIZATION_NAME = 'SELLER_AUTHORIZATION_NAME';
  /**
   * The supply path type of the deal for Agency Direct.
   */
  public const DIMENSION_SUPPLY_PATH_TYPE = 'SUPPLY_PATH_TYPE';
  /**
   * The localized display name of the supply path type of the deal for Agency
   * Direct.
   */
  public const DIMENSION_SUPPLY_PATH_TYPE_NAME = 'SUPPLY_PATH_TYPE_NAME';
  /**
   * The transaction type of the deal.
   */
  public const DIMENSION_TRANSACTION_TYPE = 'TRANSACTION_TYPE';
  /**
   * VAST error code.
   */
  public const DIMENSION_VAST_ERROR_CODE = 'VAST_ERROR_CODE';
  /**
   * Week.
   */
  public const DIMENSION_WEEK = 'WEEK';
  /**
   * Default value. This value is unused.
   */
  public const METRIC_METRIC_UNSPECIFIED = 'METRIC_UNSPECIFIED';
  /**
   * Active View measurability rate.
   */
  public const METRIC_ACTIVE_VIEW_MEASURABILITY_RATE = 'ACTIVE_VIEW_MEASURABILITY_RATE';
  /**
   * Active View measurable.
   */
  public const METRIC_ACTIVE_VIEW_MEASURABLE = 'ACTIVE_VIEW_MEASURABLE';
  /**
   * Active view viewability rate.
   */
  public const METRIC_ACTIVE_VIEW_VIEWABILITY_RATE = 'ACTIVE_VIEW_VIEWABILITY_RATE';
  /**
   * Active View viewable imps.
   */
  public const METRIC_ACTIVE_VIEW_VIEWABLE = 'ACTIVE_VIEW_VIEWABLE';
  /**
   * Auctions won.
   */
  public const METRIC_AUCTIONS_WON = 'AUCTIONS_WON';
  /**
   * Bids.
   */
  public const METRIC_BIDS = 'BIDS';
  /**
   * Bids in auction.
   */
  public const METRIC_BIDS_IN_AUCTION = 'BIDS_IN_AUCTION';
  /**
   * Clicks.
   */
  public const METRIC_CLICKS = 'CLICKS';
  /**
   * CPC.
   */
  public const METRIC_CPC = 'CPC';
  /**
   * CPM.
   */
  public const METRIC_CPM = 'CPM';
  /**
   * Curator fee.
   */
  public const METRIC_CURATION_PARTNER_FEE = 'CURATION_PARTNER_FEE';
  /**
   * Discount amount in media planner currency.
   */
  public const METRIC_DISCOUNT_AMOUNT = 'DISCOUNT_AMOUNT';
  /**
   * Discount rate in media planner currency.
   */
  public const METRIC_EFFECTIVE_DISCOUNT_RATE = 'EFFECTIVE_DISCOUNT_RATE';
  /**
   * Engaged views.
   */
  public const METRIC_ENGAGED_VIEWS = 'ENGAGED_VIEWS';
  /**
   * Impressions.
   */
  public const METRIC_IMPRESSIONS = 'IMPRESSIONS';
  /**
   * Discount spend in media planner currency.
   */
  public const METRIC_PRE_DISCOUNT_SPEND = 'PRE_DISCOUNT_SPEND';
  /**
   * Gross media cost in media planner currency.
   */
  public const METRIC_PRE_DISCOUNT_SPEND_WITHOUT_CURATION_PARTNER_FEE = 'PRE_DISCOUNT_SPEND_WITHOUT_CURATION_PARTNER_FEE';
  /**
   * Queries that are reached in the mediation chain.
   */
  public const METRIC_REACHED_QUERIES = 'REACHED_QUERIES';
  /**
   * Spend in reporting currency specified in the request. Defaults to USD.
   */
  public const METRIC_SPEND = 'SPEND';
  /**
   * Net media cost in media planner currency.
   */
  public const METRIC_SPEND_WITHOUT_CURATION_PARTNER_FEE = 'SPEND_WITHOUT_CURATION_PARTNER_FEE';
  /**
   * Number of video impressions failed to render due to VAST errors.
   */
  public const METRIC_VAST_ERROR_COUNT = 'VAST_ERROR_COUNT';
  /**
   * Number of video impressions played to completion.
   */
  public const METRIC_VIDEO_COMPLETE = 'VIDEO_COMPLETE';
  /**
   * Number of video impressions played to the first quartile.
   */
  public const METRIC_VIDEO_FIRST_QUARTILE = 'VIDEO_FIRST_QUARTILE';
  /**
   * Number of video impressions played to the midpoint.
   */
  public const METRIC_VIDEO_MIDPOINT = 'VIDEO_MIDPOINT';
  /**
   * Number of video impressions played.
   */
  public const METRIC_VIDEO_START = 'VIDEO_START';
  /**
   * Number of video impressions played to the third quartile.
   */
  public const METRIC_VIDEO_THIRD_QUARTILE = 'VIDEO_THIRD_QUARTILE';
  /**
   * The rate in which video impressions were watched to completion.
   */
  public const METRIC_VIDEO_VTR = 'VIDEO_VTR';
  /**
   * The dimension this field represents.
   *
   * @var string
   */
  public $dimension;
  /**
   * The metric this field represents.
   *
   * @var string
   */
  public $metric;

  /**
   * The dimension this field represents.
   *
   * Accepted values: DIMENSION_UNSPECIFIED, ADVERTISER_DOMAIN,
   * AGENCY_ACCOUNT_ID, AGENCY_ACCOUNT_NAME, BID_FILTERING_REASON,
   * BID_FILTERING_REASON_NAME, BUYER_SDK, CAMPAIGN_ID, CAMPAIGN_NAME, COUNTRY,
   * CREATIVE_FORMAT, CREATIVE_ID, CREATIVE_POLICIES, CREATIVE_POLICIES_NAME,
   * CREATIVE_SIZE, CURATION_DATA_SEGMENT_ID, CURATION_PARTNER_NAME,
   * CURATOR_FEE_TYPE, DATE, DEAL_ID, DEAL_NAME, DETECTED_ADVERTISER_NAME,
   * DSP_NAME, DSP_SEAT_ID, ENVIRONMENT, ENVIRONMENT_NAME, GMA_SDK, HOUR,
   * MOBILE_APP_ID, MOBILE_APP_NAME, MOBILE_OS, MONTH, PACKAGE_FEE_VISIBILITY,
   * PLACEMENT_ID, PLATFORM, PUBLISHER_DOMAIN, PUBLISHER_ID, PUBLISHER_NAME,
   * PUBLISHER_PROTECTIONS, PUBLISHER_PROTECTIONS_NAME, SELLER_AUTHORIZATION,
   * SELLER_AUTHORIZATION_NAME, SUPPLY_PATH_TYPE, SUPPLY_PATH_TYPE_NAME,
   * TRANSACTION_TYPE, VAST_ERROR_CODE, WEEK
   *
   * @param self::DIMENSION_* $dimension
   */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return self::DIMENSION_*
   */
  public function getDimension()
  {
    return $this->dimension;
  }
  /**
   * The metric this field represents.
   *
   * Accepted values: METRIC_UNSPECIFIED, ACTIVE_VIEW_MEASURABILITY_RATE,
   * ACTIVE_VIEW_MEASURABLE, ACTIVE_VIEW_VIEWABILITY_RATE, ACTIVE_VIEW_VIEWABLE,
   * AUCTIONS_WON, BIDS, BIDS_IN_AUCTION, CLICKS, CPC, CPM,
   * CURATION_PARTNER_FEE, DISCOUNT_AMOUNT, EFFECTIVE_DISCOUNT_RATE,
   * ENGAGED_VIEWS, IMPRESSIONS, PRE_DISCOUNT_SPEND,
   * PRE_DISCOUNT_SPEND_WITHOUT_CURATION_PARTNER_FEE, REACHED_QUERIES, SPEND,
   * SPEND_WITHOUT_CURATION_PARTNER_FEE, VAST_ERROR_COUNT, VIDEO_COMPLETE,
   * VIDEO_FIRST_QUARTILE, VIDEO_MIDPOINT, VIDEO_START, VIDEO_THIRD_QUARTILE,
   * VIDEO_VTR
   *
   * @param self::METRIC_* $metric
   */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return self::METRIC_*
   */
  public function getMetric()
  {
    return $this->metric;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Field::class, 'Google_Service_AgenciesAndBrands_Field');
