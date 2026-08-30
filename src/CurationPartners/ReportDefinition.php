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

class ReportDefinition extends \Google\Collection
{
  /**
   * Unspecified default value.
   */
  public const TIME_ZONE_SOURCE_TIME_ZONE_SOURCE_UNSPECIFIED = 'TIME_ZONE_SOURCE_UNSPECIFIED';
  /**
   * Use the Pacific time zone(PT).
   */
  public const TIME_ZONE_SOURCE_AD_EXCHANGE = 'AD_EXCHANGE';
  /**
   * Use UTC time zone.
   */
  public const TIME_ZONE_SOURCE_UTC = 'UTC';
  /**
   * Use the time zone provided in the ReportDefinition.time_zone field. Reports
   * may take longer to run since the dates are dynamically calculated at
   * request time.
   */
  public const TIME_ZONE_SOURCE_PROVIDED = 'PROVIDED';
  protected $collection_key = 'sorts';
  /**
   * Optional. The ISO 4217 currency code for this report. Defaults to account
   * currency code if not specified.
   *
   * @var string
   */
  public $currencyCode;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  /**
   * Required. The list of dimensions to report on. If empty, the report will
   * have no dimensions, and any metrics will be totals.
   *
   * @var string[]
   */
  public $dimensions;
  protected $filtersType = Filter::class;
  protected $filtersDataType = 'array';
  /**
   * Required. The list of metrics to report on. If empty, the report will have
   * no metrics.
   *
   * @var string[]
   */
  public $metrics;
  protected $sortsType = Sort::class;
  protected $sortsDataType = 'array';
  /**
   * Optional. If time_zone_source is PROVIDED, this is the time zone to use for
   * this report. Leave empty for any other time zone source. Time zone in IANA
   * format. For example, "America/New_York".
   *
   * @var string
   */
  public $timeZone;
  /**
   * Optional. Where to get the time zone for this report. Defaults to using the
   * Pacific time zone (PT). If source is PROVIDED, the time_zone field in the
   * report definition must also set a time zone.
   *
   * @var string
   */
  public $timeZoneSource;

  /**
   * Optional. The ISO 4217 currency code for this report. Defaults to account
   * currency code if not specified.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Required. The primary date range of this report.
   *
   * @param DateRange $dateRange
   */
  public function setDateRange(DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /**
   * @return DateRange
   */
  public function getDateRange()
  {
    return $this->dateRange;
  }
  /**
   * Required. The list of dimensions to report on. If empty, the report will
   * have no dimensions, and any metrics will be totals.
   *
   * @param string[] $dimensions
   */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /**
   * @return string[]
   */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /**
   * Optional. The filters for this report.
   *
   * @param Filter[] $filters
   */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /**
   * @return Filter[]
   */
  public function getFilters()
  {
    return $this->filters;
  }
  /**
   * Required. The list of metrics to report on. If empty, the report will have
   * no metrics.
   *
   * @param string[] $metrics
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return string[]
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * Optional. Default sorts to apply to this report.
   *
   * @param Sort[] $sorts
   */
  public function setSorts($sorts)
  {
    $this->sorts = $sorts;
  }
  /**
   * @return Sort[]
   */
  public function getSorts()
  {
    return $this->sorts;
  }
  /**
   * Optional. If time_zone_source is PROVIDED, this is the time zone to use for
   * this report. Leave empty for any other time zone source. Time zone in IANA
   * format. For example, "America/New_York".
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /**
   * Optional. Where to get the time zone for this report. Defaults to using the
   * Pacific time zone (PT). If source is PROVIDED, the time_zone field in the
   * report definition must also set a time zone.
   *
   * Accepted values: TIME_ZONE_SOURCE_UNSPECIFIED, AD_EXCHANGE, UTC, PROVIDED
   *
   * @param self::TIME_ZONE_SOURCE_* $timeZoneSource
   */
  public function setTimeZoneSource($timeZoneSource)
  {
    $this->timeZoneSource = $timeZoneSource;
  }
  /**
   * @return self::TIME_ZONE_SOURCE_*
   */
  public function getTimeZoneSource()
  {
    return $this->timeZoneSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportDefinition::class, 'Google_Service_CurationPartners_ReportDefinition');
