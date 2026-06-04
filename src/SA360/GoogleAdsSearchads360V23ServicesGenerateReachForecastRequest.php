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

class GoogleAdsSearchads360V23ServicesGenerateReachForecastRequest extends \Google\Collection
{
  protected $collection_key = 'plannedProducts';
  protected $campaignDurationType = GoogleAdsSearchads360V23ServicesCampaignDuration::class;
  protected $campaignDurationDataType = '';
  /**
   * Chosen cookie frequency cap to be applied to each planned product. This is
   * equivalent to the frequency cap exposed in Google Ads when creating a
   * campaign, it represents the maximum number of times an ad can be shown to
   * the same user. If not specified, no cap is applied. This field is
   * deprecated in v4 and will eventually be removed. Use
   * cookie_frequency_cap_setting instead.
   *
   * @var int
   */
  public $cookieFrequencyCap;
  protected $cookieFrequencyCapSettingType = GoogleAdsSearchads360V23ServicesFrequencyCap::class;
  protected $cookieFrequencyCapSettingDataType = '';
  /**
   * The currency code. Three-character ISO 4217 currency code.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerReachGroup;
  protected $effectiveFrequencyLimitType = GoogleAdsSearchads360V23ServicesEffectiveFrequencyLimit::class;
  protected $effectiveFrequencyLimitDataType = '';
  protected $forecastMetricOptionsType = GoogleAdsSearchads360V23ServicesForecastMetricOptions::class;
  protected $forecastMetricOptionsDataType = '';
  /**
   * Chosen minimum effective frequency (the number of times a person was
   * exposed to the ad) for the reported reach metrics [1-10]. This won't affect
   * the targeting, but just the reporting. If not specified, a default of 1 is
   * applied. This field cannot be combined with the effective_frequency_limit
   * field.
   *
   * @var int
   */
  public $minEffectiveFrequency;
  protected $plannedProductsType = GoogleAdsSearchads360V23ServicesPlannedProduct::class;
  protected $plannedProductsDataType = 'array';
  protected $reachApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $reachApplicationInfoDataType = '';
  protected $targetingType = GoogleAdsSearchads360V23ServicesTargeting::class;
  protected $targetingDataType = '';

  /**
   * Required. Campaign duration.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignDuration $campaignDuration
   */
  public function setCampaignDuration(GoogleAdsSearchads360V23ServicesCampaignDuration $campaignDuration)
  {
    $this->campaignDuration = $campaignDuration;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignDuration
   */
  public function getCampaignDuration()
  {
    return $this->campaignDuration;
  }
  /**
   * Chosen cookie frequency cap to be applied to each planned product. This is
   * equivalent to the frequency cap exposed in Google Ads when creating a
   * campaign, it represents the maximum number of times an ad can be shown to
   * the same user. If not specified, no cap is applied. This field is
   * deprecated in v4 and will eventually be removed. Use
   * cookie_frequency_cap_setting instead.
   *
   * @param int $cookieFrequencyCap
   */
  public function setCookieFrequencyCap($cookieFrequencyCap)
  {
    $this->cookieFrequencyCap = $cookieFrequencyCap;
  }
  /**
   * @return int
   */
  public function getCookieFrequencyCap()
  {
    return $this->cookieFrequencyCap;
  }
  /**
   * Chosen cookie frequency cap to be applied to each planned product. This is
   * equivalent to the frequency cap exposed in Google Ads when creating a
   * campaign, it represents the maximum number of times an ad can be shown to
   * the same user during a specified time interval. If not specified, a default
   * of 0 (no cap) is applied. This field replaces the deprecated
   * cookie_frequency_cap field.
   *
   * @param GoogleAdsSearchads360V23ServicesFrequencyCap $cookieFrequencyCapSetting
   */
  public function setCookieFrequencyCapSetting(GoogleAdsSearchads360V23ServicesFrequencyCap $cookieFrequencyCapSetting)
  {
    $this->cookieFrequencyCapSetting = $cookieFrequencyCapSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesFrequencyCap
   */
  public function getCookieFrequencyCapSetting()
  {
    return $this->cookieFrequencyCapSetting;
  }
  /**
   * The currency code. Three-character ISO 4217 currency code.
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
   * @param string $customerReachGroup
   */
  public function setCustomerReachGroup($customerReachGroup)
  {
    $this->customerReachGroup = $customerReachGroup;
  }
  /**
   * @return string
   */
  public function getCustomerReachGroup()
  {
    return $this->customerReachGroup;
  }
  /**
   * The highest minimum effective frequency (the number of times a person was
   * exposed to the ad) value [1-10] to include in
   * Forecast.effective_frequency_breakdowns. If not specified,
   * Forecast.effective_frequency_breakdowns will not be provided. The effective
   * frequency value provided here will also be used as the minimum effective
   * frequency for the reported reach metrics. This field cannot be combined
   * with the min_effective_frequency field.
   *
   * @param GoogleAdsSearchads360V23ServicesEffectiveFrequencyLimit $effectiveFrequencyLimit
   */
  public function setEffectiveFrequencyLimit(GoogleAdsSearchads360V23ServicesEffectiveFrequencyLimit $effectiveFrequencyLimit)
  {
    $this->effectiveFrequencyLimit = $effectiveFrequencyLimit;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesEffectiveFrequencyLimit
   */
  public function getEffectiveFrequencyLimit()
  {
    return $this->effectiveFrequencyLimit;
  }
  /**
   * Controls the forecast metrics returned in the response.
   *
   * @param GoogleAdsSearchads360V23ServicesForecastMetricOptions $forecastMetricOptions
   */
  public function setForecastMetricOptions(GoogleAdsSearchads360V23ServicesForecastMetricOptions $forecastMetricOptions)
  {
    $this->forecastMetricOptions = $forecastMetricOptions;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesForecastMetricOptions
   */
  public function getForecastMetricOptions()
  {
    return $this->forecastMetricOptions;
  }
  /**
   * Chosen minimum effective frequency (the number of times a person was
   * exposed to the ad) for the reported reach metrics [1-10]. This won't affect
   * the targeting, but just the reporting. If not specified, a default of 1 is
   * applied. This field cannot be combined with the effective_frequency_limit
   * field.
   *
   * @param int $minEffectiveFrequency
   */
  public function setMinEffectiveFrequency($minEffectiveFrequency)
  {
    $this->minEffectiveFrequency = $minEffectiveFrequency;
  }
  /**
   * @return int
   */
  public function getMinEffectiveFrequency()
  {
    return $this->minEffectiveFrequency;
  }
  /**
   * Required. The products to be forecast. The max number of allowed planned
   * products is 15.
   *
   * @param GoogleAdsSearchads360V23ServicesPlannedProduct[] $plannedProducts
   */
  public function setPlannedProducts($plannedProducts)
  {
    $this->plannedProducts = $plannedProducts;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesPlannedProduct[]
   */
  public function getPlannedProducts()
  {
    return $this->plannedProducts;
  }
  /**
   * Optional. Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo
   */
  public function setReachApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo)
  {
    $this->reachApplicationInfo = $reachApplicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getReachApplicationInfo()
  {
    return $this->reachApplicationInfo;
  }
  /**
   * The targeting to be applied to all products selected in the product mix.
   * This is planned targeting: execution details might vary based on the
   * advertising product, consult an implementation specialist. See specific
   * metrics for details on how targeting affects them.
   *
   * @param GoogleAdsSearchads360V23ServicesTargeting $targeting
   */
  public function setTargeting(GoogleAdsSearchads360V23ServicesTargeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesTargeting
   */
  public function getTargeting()
  {
    return $this->targeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateReachForecastRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateReachForecastRequest');
