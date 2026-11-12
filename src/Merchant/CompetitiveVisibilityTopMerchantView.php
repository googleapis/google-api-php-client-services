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

class CompetitiveVisibilityTopMerchantView extends \Google\Model
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
   * [Ads / organic ratio]
   * (https://support.google.com/merchants/answer/11366442#zippy=%2Cads-free-
   * ratio) shows how often the domain receives impressions from Shopping ads
   * compared to organic traffic. The number is rounded and bucketed. Cannot be
   * filtered on in the 'WHERE' clause.
   *
   * @var 
   */
  public $adsOrganicRatio;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Domain of your competitor or your domain, if `is_your_domain` is true.
   * Required in the `SELECT` clause. Cannot be filtered on in the 'WHERE'
   * clause.
   *
   * @var string
   */
  public $domain;
  /**
   * [Higher position rate]
   * (https://support.google.com/merchants/answer/11366442#zippy=%2Chigher-
   * position-rate) shows how often a competitor’s offer got placed in a higher
   * position on the page than your offer. Cannot be filtered on in the 'WHERE'
   * clause.
   *
   * @var 
   */
  public $higherPositionRate;
  /**
   * True if this row contains data for your domain. Cannot be filtered on in
   * the 'WHERE' clause.
   *
   * @var bool
   */
  public $isYourDomain;
  /**
   * [Page overlap rate]
   * (https://support.google.com/merchants/answer/11366442#zippy=%2Cpage-
   * overlap-rate) shows how frequently competing retailers’ offers are shown
   * together with your offers on the same page. Cannot be filtered on in the
   * 'WHERE' clause.
   *
   * @var 
   */
  public $pageOverlapRate;
  /**
   * Position of the domain in the top merchants ranking for the selected keys
   * (`date`, `report_category_id`, `report_country_code`, `traffic_source`)
   * based on impressions. 1 is the highest. Cannot be filtered on in the
   * 'WHERE' clause.
   *
   * @var string
   */
  public $rank;
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

  public function setAdsOrganicRatio($adsOrganicRatio)
  {
    $this->adsOrganicRatio = $adsOrganicRatio;
  }
  public function getAdsOrganicRatio()
  {
    return $this->adsOrganicRatio;
  }
  /**
   * Date of this row. Cannot be selected in the `SELECT` clause. A condition on
   * `date` is required in the `WHERE` clause.
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
   * Domain of your competitor or your domain, if `is_your_domain` is true.
   * Required in the `SELECT` clause. Cannot be filtered on in the 'WHERE'
   * clause.
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  public function setHigherPositionRate($higherPositionRate)
  {
    $this->higherPositionRate = $higherPositionRate;
  }
  public function getHigherPositionRate()
  {
    return $this->higherPositionRate;
  }
  /**
   * True if this row contains data for your domain. Cannot be filtered on in
   * the 'WHERE' clause.
   *
   * @param bool $isYourDomain
   */
  public function setIsYourDomain($isYourDomain)
  {
    $this->isYourDomain = $isYourDomain;
  }
  /**
   * @return bool
   */
  public function getIsYourDomain()
  {
    return $this->isYourDomain;
  }
  public function setPageOverlapRate($pageOverlapRate)
  {
    $this->pageOverlapRate = $pageOverlapRate;
  }
  public function getPageOverlapRate()
  {
    return $this->pageOverlapRate;
  }
  /**
   * Position of the domain in the top merchants ranking for the selected keys
   * (`date`, `report_category_id`, `report_country_code`, `traffic_source`)
   * based on impressions. 1 is the highest. Cannot be filtered on in the
   * 'WHERE' clause.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompetitiveVisibilityTopMerchantView::class, 'Google_Service_Merchant_CompetitiveVisibilityTopMerchantView');
