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

class GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsRequest extends \Google\Model
{
  protected $campaignType = GoogleAdsSearchads360V23ServicesCampaignToForecast::class;
  protected $campaignDataType = '';
  /**
   * The currency used for exchange rate conversion. By default, the account
   * currency of the customer is used. Set this field only if the currency is
   * different from the account currency. The list of valid currency codes can
   * be found at https://developers.google.com/google-ads/api/data/codes-
   * formats#currency-codes.
   *
   * @var string
   */
  public $currencyCode;
  protected $forecastPeriodType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $forecastPeriodDataType = '';

  /**
   * Required. The campaign used in the forecast.
   *
   * @param GoogleAdsSearchads360V23ServicesCampaignToForecast $campaign
   */
  public function setCampaign(GoogleAdsSearchads360V23ServicesCampaignToForecast $campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCampaignToForecast
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * The currency used for exchange rate conversion. By default, the account
   * currency of the customer is used. Set this field only if the currency is
   * different from the account currency. The list of valid currency codes can
   * be found at https://developers.google.com/google-ads/api/data/codes-
   * formats#currency-codes.
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
   * The date range for the forecast. The start date must be in the future and
   * end date must be within 1 year from today. The reference timezone used is
   * the one of the Google Ads account belonging to the customer. If not set, a
   * default date range from next Sunday to the following Saturday will be used.
   *
   * @param GoogleAdsSearchads360V23CommonDateRange $forecastPeriod
   */
  public function setForecastPeriod(GoogleAdsSearchads360V23CommonDateRange $forecastPeriod)
  {
    $this->forecastPeriod = $forecastPeriod;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDateRange
   */
  public function getForecastPeriod()
  {
    return $this->forecastPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateKeywordForecastMetricsRequest');
