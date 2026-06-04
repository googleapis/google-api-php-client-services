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

class GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleInfo extends \Google\Model
{
  /**
   * The resource name of the Geo Target Constant for the city.
   *
   * @var string
   */
  public $cityCriterionId;
  /**
   * The resource name of the Geo Target Constant for the country.
   *
   * @var string
   */
  public $countryCriterionId;
  /**
   * Integer value specifying the class rating for a hotel. Ranges from 1 to 5
   * stars.
   *
   * @var string
   */
  public $hotelClass;
  /**
   * The id specifying a particular Vertical Ad listing.
   *
   * @var string
   */
  public $itemCode;
  /**
   * The resource name of the Geo Target Constant for the region.
   *
   * @var string
   */
  public $regionCriterionId;

  /**
   * The resource name of the Geo Target Constant for the city.
   *
   * @param string $cityCriterionId
   */
  public function setCityCriterionId($cityCriterionId)
  {
    $this->cityCriterionId = $cityCriterionId;
  }
  /**
   * @return string
   */
  public function getCityCriterionId()
  {
    return $this->cityCriterionId;
  }
  /**
   * The resource name of the Geo Target Constant for the country.
   *
   * @param string $countryCriterionId
   */
  public function setCountryCriterionId($countryCriterionId)
  {
    $this->countryCriterionId = $countryCriterionId;
  }
  /**
   * @return string
   */
  public function getCountryCriterionId()
  {
    return $this->countryCriterionId;
  }
  /**
   * Integer value specifying the class rating for a hotel. Ranges from 1 to 5
   * stars.
   *
   * @param string $hotelClass
   */
  public function setHotelClass($hotelClass)
  {
    $this->hotelClass = $hotelClass;
  }
  /**
   * @return string
   */
  public function getHotelClass()
  {
    return $this->hotelClass;
  }
  /**
   * The id specifying a particular Vertical Ad listing.
   *
   * @param string $itemCode
   */
  public function setItemCode($itemCode)
  {
    $this->itemCode = $itemCode;
  }
  /**
   * @return string
   */
  public function getItemCode()
  {
    return $this->itemCode;
  }
  /**
   * The resource name of the Geo Target Constant for the region.
   *
   * @param string $regionCriterionId
   */
  public function setRegionCriterionId($regionCriterionId)
  {
    $this->regionCriterionId = $regionCriterionId;
  }
  /**
   * @return string
   */
  public function getRegionCriterionId()
  {
    return $this->regionCriterionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleInfo');
