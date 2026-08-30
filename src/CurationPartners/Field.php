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

namespace Google\Service\CurationPartners;

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
   * Display name of a country.
   */
  public const DIMENSION_COUNTRY = 'COUNTRY';
  /**
   * The ID of the data segment created by a curator.
   */
  public const DIMENSION_CURATION_DATA_SEGMENT_ID = 'CURATION_DATA_SEGMENT_ID';
  /**
   * The response status of the data segment requests in the Real-time curation.
   * Refer to https://developers.google.com/authorized-buyers/curation/get-
   * started/start for details.
   */
  public const DIMENSION_CURATION_DATA_SEGMENT_RESPONSE_STATUS = 'CURATION_DATA_SEGMENT_RESPONSE_STATUS';
  /**
   * The localized display name of the response status of the data segment
   * requests in the Real-time curation. Refer to
   * https://developers.google.com/authorized-buyers/curation/get-started/start
   * for details.
   */
  public const DIMENSION_CURATION_DATA_SEGMENT_RESPONSE_STATUS_NAME = 'CURATION_DATA_SEGMENT_RESPONSE_STATUS_NAME';
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
   * Display name of the holding company.
   */
  public const DIMENSION_HOLDING_COMPANY_NAME = 'HOLDING_COMPANY_NAME';
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
   * Bid requests.
   */
  public const METRIC_BID_REQUESTS = 'BID_REQUESTS';
  /**
   * Clicks.
   */
  public const METRIC_CLICKS = 'CLICKS';
  /**
   * Curator fee.
   */
  public const METRIC_CURATION_PARTNER_FEE = 'CURATION_PARTNER_FEE';
  /**
   * Number of data segment requests sent in the Real-time curation.
   */
  public const METRIC_DATA_SEGMENT_REQUESTS = 'DATA_SEGMENT_REQUESTS';
  /**
   * Impressions.
   */
  public const METRIC_IMPRESSIONS = 'IMPRESSIONS';
  /**
   * Spend in reporting currency specified in the request. Defaults to USD.
   */
  public const METRIC_SPEND = 'SPEND';
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
   * Accepted values: DIMENSION_UNSPECIFIED, ADVERTISER_DOMAIN, COUNTRY,
   * CURATION_DATA_SEGMENT_ID, CURATION_DATA_SEGMENT_RESPONSE_STATUS,
   * CURATION_DATA_SEGMENT_RESPONSE_STATUS_NAME, CURATOR_FEE_TYPE, DATE,
   * DEAL_ID, DEAL_NAME, DETECTED_ADVERTISER_NAME, DSP_NAME, DSP_SEAT_ID,
   * ENVIRONMENT, ENVIRONMENT_NAME, HOLDING_COMPANY_NAME, HOUR, MOBILE_APP_ID,
   * MOBILE_APP_NAME, MOBILE_OS, MONTH, PACKAGE_FEE_VISIBILITY, PLATFORM,
   * PUBLISHER_DOMAIN, PUBLISHER_ID, PUBLISHER_NAME, WEEK
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
   * AUCTIONS_WON, BIDS, BIDS_IN_AUCTION, BID_REQUESTS, CLICKS,
   * CURATION_PARTNER_FEE, DATA_SEGMENT_REQUESTS, IMPRESSIONS, SPEND
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
class_alias(Field::class, 'Google_Service_CurationPartners_Field');
