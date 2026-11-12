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

class BestSellersBrandView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PREVIOUS_RELATIVE_DEMAND_RELATIVE_DEMAND_ENUM_UNSPECIFIED = 'RELATIVE_DEMAND_ENUM_UNSPECIFIED';
  /**
   * Demand is 0-5% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const PREVIOUS_RELATIVE_DEMAND_VERY_LOW = 'VERY_LOW';
  /**
   * Demand is 6-10% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const PREVIOUS_RELATIVE_DEMAND_LOW = 'LOW';
  /**
   * Demand is 11-20% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const PREVIOUS_RELATIVE_DEMAND_MEDIUM = 'MEDIUM';
  /**
   * Demand is 21-50% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const PREVIOUS_RELATIVE_DEMAND_HIGH = 'HIGH';
  /**
   * Demand is 51-100% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const PREVIOUS_RELATIVE_DEMAND_VERY_HIGH = 'VERY_HIGH';
  /**
   * Not specified.
   */
  public const RELATIVE_DEMAND_RELATIVE_DEMAND_ENUM_UNSPECIFIED = 'RELATIVE_DEMAND_ENUM_UNSPECIFIED';
  /**
   * Demand is 0-5% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const RELATIVE_DEMAND_VERY_LOW = 'VERY_LOW';
  /**
   * Demand is 6-10% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const RELATIVE_DEMAND_LOW = 'LOW';
  /**
   * Demand is 11-20% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const RELATIVE_DEMAND_MEDIUM = 'MEDIUM';
  /**
   * Demand is 21-50% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const RELATIVE_DEMAND_HIGH = 'HIGH';
  /**
   * Demand is 51-100% of the demand of the highest ranked product cluster or
   * brand.
   */
  public const RELATIVE_DEMAND_VERY_HIGH = 'VERY_HIGH';
  /**
   * Not specified.
   */
  public const RELATIVE_DEMAND_CHANGE_RELATIVE_DEMAND_CHANGE_TYPE_ENUM_UNSPECIFIED = 'RELATIVE_DEMAND_CHANGE_TYPE_ENUM_UNSPECIFIED';
  /**
   * Relative demand is lower than the previous time period.
   */
  public const RELATIVE_DEMAND_CHANGE_SINKER = 'SINKER';
  /**
   * Relative demand is equal to the previous time period.
   */
  public const RELATIVE_DEMAND_CHANGE_FLAT = 'FLAT';
  /**
   * Relative demand is higher than the previous time period.
   */
  public const RELATIVE_DEMAND_CHANGE_RISER = 'RISER';
  /**
   * Not specified.
   */
  public const REPORT_GRANULARITY_REPORT_GRANULARITY_ENUM_UNSPECIFIED = 'REPORT_GRANULARITY_ENUM_UNSPECIFIED';
  /**
   * Report is computed over a week timeframe.
   */
  public const REPORT_GRANULARITY_WEEKLY = 'WEEKLY';
  /**
   * Report is computed over a month timeframe.
   */
  public const REPORT_GRANULARITY_MONTHLY = 'MONTHLY';
  /**
   * Name of the brand.
   *
   * @var string
   */
  public $brand;
  /**
   * Popularity rank in the previous week or month.
   *
   * @var string
   */
  public $previousRank;
  /**
   * Estimated demand in relation to the brand with the highest popularity rank
   * in the same category and country in the previous week or month.
   *
   * @var string
   */
  public $previousRelativeDemand;
  /**
   * Popularity of the brand on Ads and organic surfaces, in the selected
   * category and country, based on the estimated number of units sold.
   *
   * @var string
   */
  public $rank;
  /**
   * Estimated demand in relation to the brand with the highest popularity rank
   * in the same category and country.
   *
   * @var string
   */
  public $relativeDemand;
  /**
   * Change in the estimated demand. Whether it rose, sank or remained flat.
   *
   * @var string
   */
  public $relativeDemandChange;
  /**
   * Google product category ID to calculate the ranking for, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436). Required in
   * the `SELECT` clause. If a `WHERE` condition on `report_category_id` is not
   * specified in the query, rankings for all top-level categories are returned.
   *
   * @var string
   */
  public $reportCategoryId;
  /**
   * Country where the ranking is calculated. Represented in the ISO 3166
   * format. Required in the `SELECT` clause. Condition on `report_country_code`
   * is required in the `WHERE` clause.
   *
   * @var string
   */
  public $reportCountryCode;
  protected $reportDateType = Date::class;
  protected $reportDateDataType = '';
  /**
   * Granularity of the report. The ranking can be done over a week or a month
   * timeframe. Required in the `SELECT` clause. Condition on
   * `report_granularity` is required in the `WHERE` clause.
   *
   * @var string
   */
  public $reportGranularity;

  /**
   * Name of the brand.
   *
   * @param string $brand
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /**
   * @return string
   */
  public function getBrand()
  {
    return $this->brand;
  }
  /**
   * Popularity rank in the previous week or month.
   *
   * @param string $previousRank
   */
  public function setPreviousRank($previousRank)
  {
    $this->previousRank = $previousRank;
  }
  /**
   * @return string
   */
  public function getPreviousRank()
  {
    return $this->previousRank;
  }
  /**
   * Estimated demand in relation to the brand with the highest popularity rank
   * in the same category and country in the previous week or month.
   *
   * Accepted values: RELATIVE_DEMAND_ENUM_UNSPECIFIED, VERY_LOW, LOW, MEDIUM,
   * HIGH, VERY_HIGH
   *
   * @param self::PREVIOUS_RELATIVE_DEMAND_* $previousRelativeDemand
   */
  public function setPreviousRelativeDemand($previousRelativeDemand)
  {
    $this->previousRelativeDemand = $previousRelativeDemand;
  }
  /**
   * @return self::PREVIOUS_RELATIVE_DEMAND_*
   */
  public function getPreviousRelativeDemand()
  {
    return $this->previousRelativeDemand;
  }
  /**
   * Popularity of the brand on Ads and organic surfaces, in the selected
   * category and country, based on the estimated number of units sold.
   *
   * @param string $rank
   */
  public function setRank($rank)
  {
    $this->rank = $rank;
  }
  /**
   * @return string
   */
  public function getRank()
  {
    return $this->rank;
  }
  /**
   * Estimated demand in relation to the brand with the highest popularity rank
   * in the same category and country.
   *
   * Accepted values: RELATIVE_DEMAND_ENUM_UNSPECIFIED, VERY_LOW, LOW, MEDIUM,
   * HIGH, VERY_HIGH
   *
   * @param self::RELATIVE_DEMAND_* $relativeDemand
   */
  public function setRelativeDemand($relativeDemand)
  {
    $this->relativeDemand = $relativeDemand;
  }
  /**
   * @return self::RELATIVE_DEMAND_*
   */
  public function getRelativeDemand()
  {
    return $this->relativeDemand;
  }
  /**
   * Change in the estimated demand. Whether it rose, sank or remained flat.
   *
   * Accepted values: RELATIVE_DEMAND_CHANGE_TYPE_ENUM_UNSPECIFIED, SINKER,
   * FLAT, RISER
   *
   * @param self::RELATIVE_DEMAND_CHANGE_* $relativeDemandChange
   */
  public function setRelativeDemandChange($relativeDemandChange)
  {
    $this->relativeDemandChange = $relativeDemandChange;
  }
  /**
   * @return self::RELATIVE_DEMAND_CHANGE_*
   */
  public function getRelativeDemandChange()
  {
    return $this->relativeDemandChange;
  }
  /**
   * Google product category ID to calculate the ranking for, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436). Required in
   * the `SELECT` clause. If a `WHERE` condition on `report_category_id` is not
   * specified in the query, rankings for all top-level categories are returned.
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
   * Country where the ranking is calculated. Represented in the ISO 3166
   * format. Required in the `SELECT` clause. Condition on `report_country_code`
   * is required in the `WHERE` clause.
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
   * Report date. The value of this field can only be one of the following: *
   * The first day of the week (Monday) for weekly reports, * The first day of
   * the month for monthly reports. Required in the `SELECT` clause. If a
   * `WHERE` condition on `report_date` is not specified in the query, the
   * latest available weekly or monthly report is returned.
   *
   * @param Date $reportDate
   */
  public function setReportDate(Date $reportDate)
  {
    $this->reportDate = $reportDate;
  }
  /**
   * @return Date
   */
  public function getReportDate()
  {
    return $this->reportDate;
  }
  /**
   * Granularity of the report. The ranking can be done over a week or a month
   * timeframe. Required in the `SELECT` clause. Condition on
   * `report_granularity` is required in the `WHERE` clause.
   *
   * Accepted values: REPORT_GRANULARITY_ENUM_UNSPECIFIED, WEEKLY, MONTHLY
   *
   * @param self::REPORT_GRANULARITY_* $reportGranularity
   */
  public function setReportGranularity($reportGranularity)
  {
    $this->reportGranularity = $reportGranularity;
  }
  /**
   * @return self::REPORT_GRANULARITY_*
   */
  public function getReportGranularity()
  {
    return $this->reportGranularity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BestSellersBrandView::class, 'Google_Service_Merchant_BestSellersBrandView');
