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

namespace Google\Service\Merchant;

class CompetitiveVisibilityBenchmarkView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TRAFFIC_SOURCE_TRAFFIC_SOURCE_ENUM_UNSPECIFIED = 'TRAFFIC_SOURCE_ENUM_UNSPECIFIED';
  /**
   * Organic traffic.
   */
  public const TRAFFIC_SOURCE_ORGANIC = 'ORGANIC';
  /**
   * Traffic from ads.
   */
  public const TRAFFIC_SOURCE_ADS = 'ADS';
  /**
   * Organic and ads traffic.
   */
  public const TRAFFIC_SOURCE_ALL = 'ALL';
  /**
   * Change in visibility based on impressions with respect to the start of the
   * selected time range (or first day with non-zero impressions) for a combined
   * set of merchants with highest visibility approximating the market. Cannot
   * be filtered on in the 'WHERE' clause.
   *
   * @var 
   */
  public $categoryBenchmarkVisibilityTrend;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Google product category ID to calculate the report for, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436). Required in
   * the `SELECT` clause. A condition on `report_category_id` is required in the
   * `WHERE` clause.
   *
   * @var string
   */
  public $reportCategoryId;
  /**
   * Country where impressions appeared. Required in the `SELECT` clause. A
   * condition on `report_country_code` is required in the `WHERE` clause.
   *
   * @var string
   */
  public $reportCountryCode;
  /**
   * Traffic source of impressions. Required in the `SELECT` clause.
   *
   * @var string
   */
  public $trafficSource;
  /**
   * Change in visibility based on impressions for your domain with respect to
   * the start of the selected time range (or first day with non-zero
   * impressions). Cannot be filtered on in the 'WHERE' clause.
   *
   * @var 
   */
  public $yourDomainVisibilityTrend;

  public function setCategoryBenchmarkVisibilityTrend($categoryBenchmarkVisibilityTrend)
  {
    $this->categoryBenchmarkVisibilityTrend = $categoryBenchmarkVisibilityTrend;
  }
  public function getCategoryBenchmarkVisibilityTrend()
  {
    return $this->categoryBenchmarkVisibilityTrend;
  }
  /**
   * Date of this row. Required in the `SELECT` clause. A condition on `date` is
   * required in the `WHERE` clause.
   *
   * @param Date $date
   */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /**
   * @return Date
   */
  public function getDate()
  {
    return $this->date;
  }
  /**
   * Google product category ID to calculate the report for, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436). Required in
   * the `SELECT` clause. A condition on `report_category_id` is required in the
   * `WHERE` clause.
   *
   * @param string $reportCategoryId
   */
  public function setReportCategoryId($reportCategoryId)
  {
    $this->reportCategoryId = $reportCategoryId;
  }
  /**
   * @return string
   */
  public function getReportCategoryId()
  {
    return $this->reportCategoryId;
  }
  /**
   * Country where impressions appeared. Required in the `SELECT` clause. A
   * condition on `report_country_code` is required in the `WHERE` clause.
   *
   * @param string $reportCountryCode
   */
  public function setReportCountryCode($reportCountryCode)
  {
    $this->reportCountryCode = $reportCountryCode;
  }
  /**
   * @return string
   */
  public function getReportCountryCode()
  {
    return $this->reportCountryCode;
  }
  /**
   * Traffic source of impressions. Required in the `SELECT` clause.
   *
   * Accepted values: TRAFFIC_SOURCE_ENUM_UNSPECIFIED, ORGANIC, ADS, ALL
   *
   * @param self::TRAFFIC_SOURCE_* $trafficSource
   */
  public function setTrafficSource($trafficSource)
  {
    $this->trafficSource = $trafficSource;
  }
  /**
   * @return self::TRAFFIC_SOURCE_*
   */
  public function getTrafficSource()
  {
    return $this->trafficSource;
  }
  public function setYourDomainVisibilityTrend($yourDomainVisibilityTrend)
  {
    $this->yourDomainVisibilityTrend = $yourDomainVisibilityTrend;
  }
  public function getYourDomainVisibilityTrend()
  {
    return $this->yourDomainVisibilityTrend;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompetitiveVisibilityBenchmarkView::class, 'Google_Service_Merchant_CompetitiveVisibilityBenchmarkView');
