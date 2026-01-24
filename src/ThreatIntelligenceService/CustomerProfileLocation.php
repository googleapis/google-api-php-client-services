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

namespace Google\Service\ThreatIntelligenceService;

class CustomerProfileLocation extends \Google\Collection
{
  protected $collection_key = 'citationIds';
  /**
   * Required. The address of the location.
   *
   * @var string
   */
  public $address;
  /**
   * Required. The brand of the location.
   *
   * @var string
   */
  public $brand;
  /**
   * Optional. The citation ids for the location.
   *
   * @var string[]
   */
  public $citationIds;
  /**
   * Optional. The type of location.
   *
   * @var string
   */
  public $facilityType;

  /**
   * Required. The address of the location.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * Required. The brand of the location.
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
   * Optional. The citation ids for the location.
   *
   * @param string[] $citationIds
   */
  public function setCitationIds($citationIds)
  {
    $this->citationIds = $citationIds;
  }
  /**
   * @return string[]
   */
  public function getCitationIds()
  {
    return $this->citationIds;
  }
  /**
   * Optional. The type of location.
   *
   * @param string $facilityType
   */
  public function setFacilityType($facilityType)
  {
    $this->facilityType = $facilityType;
  }
  /**
   * @return string
   */
  public function getFacilityType()
  {
    return $this->facilityType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileLocation::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileLocation');
