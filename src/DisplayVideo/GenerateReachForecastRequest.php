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

namespace Google\Service\DisplayVideo;

class GenerateReachForecastRequest extends \Google\Collection
{
  protected $collection_key = 'plannedProducts';
  protected $campaignDurationType = CampaignDuration::class;
  protected $campaignDurationDataType = '';
  /**
   * Required. The currency code for the plan in ISO 4217 format.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Optional. The minimum effective frequency for the reported reach metrics.
   * This is the smallest number of times a customer must be exposed to the ad
   * for it to be considered effective. This setting only impacts reporting.
   * Must be between 1 and 10, inclusive. If not specified, a default of 1 is
   * applied.
   *
   * @var int
   */
  public $minEffectiveFrequency;
  protected $plannedProductsType = PlannedProduct::class;
  protected $plannedProductsDataType = 'array';
  protected $targetingType = Targeting::class;
  protected $targetingDataType = '';

  /**
   * Required. The duration of the planned campaign.
   *
   * @param CampaignDuration $campaignDuration
   */
  public function setCampaignDuration(CampaignDuration $campaignDuration)
  {
    $this->campaignDuration = $campaignDuration;
  }
  /**
   * @return CampaignDuration
   */
  public function getCampaignDuration()
  {
    return $this->campaignDuration;
  }
  /**
   * Required. The currency code for the plan in ISO 4217 format.
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
   * Optional. The minimum effective frequency for the reported reach metrics.
   * This is the smallest number of times a customer must be exposed to the ad
   * for it to be considered effective. This setting only impacts reporting.
   * Must be between 1 and 10, inclusive. If not specified, a default of 1 is
   * applied.
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
   * Required. The list of line items to include in the forecast.
   *
   * @param PlannedProduct[] $plannedProducts
   */
  public function setPlannedProducts($plannedProducts)
  {
    $this->plannedProducts = $plannedProducts;
  }
  /**
   * @return PlannedProduct[]
   */
  public function getPlannedProducts()
  {
    return $this->plannedProducts;
  }
  /**
   * Required. The targeting parameters of the planned campaign.
   *
   * @param Targeting $targeting
   */
  public function setTargeting(Targeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /**
   * @return Targeting
   */
  public function getTargeting()
  {
    return $this->targeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenerateReachForecastRequest::class, 'Google_Service_DisplayVideo_GenerateReachForecastRequest');
