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

class GoogleAdsSearchads360V23CommonPriceOffering extends \Google\Model
{
  /**
   * Not specified.
   */
  public const UNIT_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const UNIT_UNKNOWN = 'UNKNOWN';
  /**
   * Per hour.
   */
  public const UNIT_PER_HOUR = 'PER_HOUR';
  /**
   * Per day.
   */
  public const UNIT_PER_DAY = 'PER_DAY';
  /**
   * Per week.
   */
  public const UNIT_PER_WEEK = 'PER_WEEK';
  /**
   * Per month.
   */
  public const UNIT_PER_MONTH = 'PER_MONTH';
  /**
   * Per year.
   */
  public const UNIT_PER_YEAR = 'PER_YEAR';
  /**
   * Per night.
   */
  public const UNIT_PER_NIGHT = 'PER_NIGHT';
  /**
   * Required. The description of the price offering. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @var string
   */
  public $description;
  /**
   * The final mobile URL after all cross domain redirects.
   *
   * @var string
   */
  public $finalMobileUrl;
  /**
   * Required. The final URL after all cross domain redirects.
   *
   * @var string
   */
  public $finalUrl;
  /**
   * Required. The header of the price offering. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @var string
   */
  public $header;
  protected $priceType = GoogleAdsSearchads360V23CommonMoney::class;
  protected $priceDataType = '';
  /**
   * The price unit of the price offering.
   *
   * @var string
   */
  public $unit;

  /**
   * Required. The description of the price offering. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The final mobile URL after all cross domain redirects.
   *
   * @param string $finalMobileUrl
   */
  public function setFinalMobileUrl($finalMobileUrl)
  {
    $this->finalMobileUrl = $finalMobileUrl;
  }
  /**
   * @return string
   */
  public function getFinalMobileUrl()
  {
    return $this->finalMobileUrl;
  }
  /**
   * Required. The final URL after all cross domain redirects.
   *
   * @param string $finalUrl
   */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /**
   * @return string
   */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /**
   * Required. The header of the price offering. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @param string $header
   */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /**
   * @return string
   */
  public function getHeader()
  {
    return $this->header;
  }
  /**
   * Required. The price value of the price offering.
   *
   * @param GoogleAdsSearchads360V23CommonMoney $price
   */
  public function setPrice(GoogleAdsSearchads360V23CommonMoney $price)
  {
    $this->price = $price;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMoney
   */
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * The price unit of the price offering.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PER_HOUR, PER_DAY, PER_WEEK,
   * PER_MONTH, PER_YEAR, PER_NIGHT
   *
   * @param self::UNIT_* $unit
   */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /**
   * @return self::UNIT_*
   */
  public function getUnit()
  {
    return $this->unit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPriceOffering::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPriceOffering');
