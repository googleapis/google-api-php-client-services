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

class GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsRequest extends \Google\Model
{
  protected $applicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $applicationInfoDataType = '';
  protected $benchmarksSourceType = GoogleAdsSearchads360V23ServicesBenchmarksSource::class;
  protected $benchmarksSourceDataType = '';
  /**
   * Optional. The three-character ISO 4217 currency code. If unspecified, the
   * default currency for monetary values is USD.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerBenchmarksGroup;
  protected $dateRangeType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $dateRangeDataType = '';
  protected $locationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $locationDataType = '';
  protected $productFilterType = GoogleAdsSearchads360V23ServicesProductFilter::class;
  protected $productFilterDataType = '';

  /**
   * Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $applicationInfo
   */
  public function setApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $applicationInfo)
  {
    $this->applicationInfo = $applicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getApplicationInfo()
  {
    return $this->applicationInfo;
  }
  /**
   * Required. The source used to generate benchmarks metrics for.
   *
   * @param GoogleAdsSearchads360V23ServicesBenchmarksSource $benchmarksSource
   */
  public function setBenchmarksSource(GoogleAdsSearchads360V23ServicesBenchmarksSource $benchmarksSource)
  {
    $this->benchmarksSource = $benchmarksSource;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBenchmarksSource
   */
  public function getBenchmarksSource()
  {
    return $this->benchmarksSource;
  }
  /**
   * Optional. The three-character ISO 4217 currency code. If unspecified, the
   * default currency for monetary values is USD.
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
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @param string $customerBenchmarksGroup
   */
  public function setCustomerBenchmarksGroup($customerBenchmarksGroup)
  {
    $this->customerBenchmarksGroup = $customerBenchmarksGroup;
  }
  /**
   * @return string
   */
  public function getCustomerBenchmarksGroup()
  {
    return $this->customerBenchmarksGroup;
  }
  /**
   * The date range to aggregate metrics over. If unset, data will be returned
   * for the most recent quarter for which data is available. Dates can be
   * retrieved using BenchmarksService.ListBenchmarksAvailableDates.
   *
   * @param GoogleAdsSearchads360V23CommonDateRange $dateRange
   */
  public function setDateRange(GoogleAdsSearchads360V23CommonDateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDateRange
   */
  public function getDateRange()
  {
    return $this->dateRange;
  }
  /**
   * Required. The location to generate benchmarks metrics for.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $location
   */
  public function setLocation(GoogleAdsSearchads360V23CommonLocationInfo $location)
  {
    $this->location = $location;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Required. The products to aggregate metrics over. Product filter settings
   * support a list of product IDs or a list of marketing objectives.
   *
   * @param GoogleAdsSearchads360V23ServicesProductFilter $productFilter
   */
  public function setProductFilter(GoogleAdsSearchads360V23ServicesProductFilter $productFilter)
  {
    $this->productFilter = $productFilter;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesProductFilter
   */
  public function getProductFilter()
  {
    return $this->productFilter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsRequest');
