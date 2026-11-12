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

class BestSellersProductClusterView extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const BRAND_INVENTORY_STATUS_INVENTORY_STATUS_UNSPECIFIED = 'INVENTORY_STATUS_UNSPECIFIED';
  /**
   * You have a product for this product cluster or brand in stock.
   */
  public const BRAND_INVENTORY_STATUS_IN_STOCK = 'IN_STOCK';
  /**
   * You have a product for this product cluster or brand in inventory but it is
   * currently out of stock.
   */
  public const BRAND_INVENTORY_STATUS_OUT_OF_STOCK = 'OUT_OF_STOCK';
  /**
   * You do not have a product for this product cluster or brand in inventory.
   */
  public const BRAND_INVENTORY_STATUS_NOT_IN_INVENTORY = 'NOT_IN_INVENTORY';
  /**
   * Not specified.
   */
  public const INVENTORY_STATUS_INVENTORY_STATUS_UNSPECIFIED = 'INVENTORY_STATUS_UNSPECIFIED';
  /**
   * You have a product for this product cluster or brand in stock.
   */
  public const INVENTORY_STATUS_IN_STOCK = 'IN_STOCK';
  /**
   * You have a product for this product cluster or brand in inventory but it is
   * currently out of stock.
   */
  public const INVENTORY_STATUS_OUT_OF_STOCK = 'OUT_OF_STOCK';
  /**
   * You do not have a product for this product cluster or brand in inventory.
   */
  public const INVENTORY_STATUS_NOT_IN_INVENTORY = 'NOT_IN_INVENTORY';
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
  protected $collection_key = 'variantGtins';
  /**
   * Brand of the product cluster.
   *
   * @var string
   */
  public $brand;
  /**
   * Whether there is at least one product of the brand currently `IN_STOCK` in
   * your product data source in at least one of the countries, all products are
   * `OUT_OF_STOCK` in your product data source in all countries, or
   * `NOT_IN_INVENTORY`. The field doesn't take the Best sellers report country
   * filter into account.
   *
   * @var string
   */
  public $brandInventoryStatus;
  /**
   * Product category (1st level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL1;
  /**
   * Product category (2nd level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL2;
  /**
   * Product category (3rd level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL3;
  /**
   * Product category (4th level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL4;
  /**
   * Product category (5th level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL5;
  /**
   * Whether the product cluster is `IN_STOCK` in your product data source in at
   * least one of the countries, `OUT_OF_STOCK` in your product data source in
   * all countries, or `NOT_IN_INVENTORY` at all. The field doesn't take the
   * Best sellers report country filter into account.
   *
   * @var string
   */
  public $inventoryStatus;
  /**
   * Popularity rank in the previous week or month.
   *
   * @var string
   */
  public $previousRank;
  /**
   * Estimated demand in relation to the product cluster with the highest
   * popularity rank in the same category and country in the previous week or
   * month.
   *
   * @var string
   */
  public $previousRelativeDemand;
  /**
   * Popularity of the product cluster on Ads and organic surfaces, in the
   * selected category and country, based on the estimated number of units sold.
   *
   * @var string
   */
  public $rank;
  /**
   * Estimated demand in relation to the product cluster with the highest
   * popularity rank in the same category and country.
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
   * Title of the product cluster.
   *
   * @var string
   */
  public $title;
  /**
   * GTINs of example variants of the product cluster.
   *
   * @var string[]
   */
  public $variantGtins;

  /**
   * Brand of the product cluster.
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
   * Whether there is at least one product of the brand currently `IN_STOCK` in
   * your product data source in at least one of the countries, all products are
   * `OUT_OF_STOCK` in your product data source in all countries, or
   * `NOT_IN_INVENTORY`. The field doesn't take the Best sellers report country
   * filter into account.
   *
   * Accepted values: INVENTORY_STATUS_UNSPECIFIED, IN_STOCK, OUT_OF_STOCK,
   * NOT_IN_INVENTORY
   *
   * @param self::BRAND_INVENTORY_STATUS_* $brandInventoryStatus
   */
  public function setBrandInventoryStatus($brandInventoryStatus)
  {
    $this->brandInventoryStatus = $brandInventoryStatus;
  }
  /**
   * @return self::BRAND_INVENTORY_STATUS_*
   */
  public function getBrandInventoryStatus()
  {
    return $this->brandInventoryStatus;
  }
  /**
   * Product category (1st level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL1
   */
  public function setCategoryL1($categoryL1)
  {
    $this->categoryL1 = $categoryL1;
  }
  /**
   * @return string
   */
  public function getCategoryL1()
  {
    return $this->categoryL1;
  }
  /**
   * Product category (2nd level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL2
   */
  public function setCategoryL2($categoryL2)
  {
    $this->categoryL2 = $categoryL2;
  }
  /**
   * @return string
   */
  public function getCategoryL2()
  {
    return $this->categoryL2;
  }
  /**
   * Product category (3rd level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL3
   */
  public function setCategoryL3($categoryL3)
  {
    $this->categoryL3 = $categoryL3;
  }
  /**
   * @return string
   */
  public function getCategoryL3()
  {
    return $this->categoryL3;
  }
  /**
   * Product category (4th level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL4
   */
  public function setCategoryL4($categoryL4)
  {
    $this->categoryL4 = $categoryL4;
  }
  /**
   * @return string
   */
  public function getCategoryL4()
  {
    return $this->categoryL4;
  }
  /**
   * Product category (5th level) of the product cluster, represented in
   * [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL5
   */
  public function setCategoryL5($categoryL5)
  {
    $this->categoryL5 = $categoryL5;
  }
  /**
   * @return string
   */
  public function getCategoryL5()
  {
    return $this->categoryL5;
  }
  /**
   * Whether the product cluster is `IN_STOCK` in your product data source in at
   * least one of the countries, `OUT_OF_STOCK` in your product data source in
   * all countries, or `NOT_IN_INVENTORY` at all. The field doesn't take the
   * Best sellers report country filter into account.
   *
   * Accepted values: INVENTORY_STATUS_UNSPECIFIED, IN_STOCK, OUT_OF_STOCK,
   * NOT_IN_INVENTORY
   *
   * @param self::INVENTORY_STATUS_* $inventoryStatus
   */
  public function setInventoryStatus($inventoryStatus)
  {
    $this->inventoryStatus = $inventoryStatus;
  }
  /**
   * @return self::INVENTORY_STATUS_*
   */
  public function getInventoryStatus()
  {
    return $this->inventoryStatus;
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
   * Estimated demand in relation to the product cluster with the highest
   * popularity rank in the same category and country in the previous week or
   * month.
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
   * Popularity of the product cluster on Ads and organic surfaces, in the
   * selected category and country, based on the estimated number of units sold.
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
   * Estimated demand in relation to the product cluster with the highest
   * popularity rank in the same category and country.
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
  /**
   * Title of the product cluster.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * GTINs of example variants of the product cluster.
   *
   * @param string[] $variantGtins
   */
  public function setVariantGtins($variantGtins)
  {
    $this->variantGtins = $variantGtins;
  }
  /**
   * @return string[]
   */
  public function getVariantGtins()
  {
    return $this->variantGtins;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BestSellersProductClusterView::class, 'Google_Service_Merchant_BestSellersProductClusterView');
