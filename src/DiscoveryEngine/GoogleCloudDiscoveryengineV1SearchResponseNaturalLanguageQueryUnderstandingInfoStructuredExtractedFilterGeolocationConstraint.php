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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint extends \Google\Model
{
  /**
   * The reference address that was inferred from the input query. The proximity
   * of the reference address to the geolocation field will be used to filter
   * the results.
   *
   * @var string
   */
  public $address;
  /**
   * The name of the geolocation field as defined in the schema.
   *
   * @var string
   */
  public $fieldName;
  /**
   * The latitude of the geolocation inferred from the input query.
   *
   * @var 
   */
  public $latitude;
  /**
   * The longitude of the geolocation inferred from the input query.
   *
   * @var 
   */
  public $longitude;
  /**
   * The radius in meters around the address. The record is returned if the
   * location of the geolocation field is within the radius.
   *
   * @var float
   */
  public $radiusInMeters;

  /**
   * The reference address that was inferred from the input query. The proximity
   * of the reference address to the geolocation field will be used to filter
   * the results.
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
   * The name of the geolocation field as defined in the schema.
   *
   * @param string $fieldName
   */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /**
   * @return string
   */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
  /**
   * The radius in meters around the address. The record is returned if the
   * location of the geolocation field is within the radius.
   *
   * @param float $radiusInMeters
   */
  public function setRadiusInMeters($radiusInMeters)
  {
    $this->radiusInMeters = $radiusInMeters;
  }
  /**
   * @return float
   */
  public function getRadiusInMeters()
  {
    return $this->radiusInMeters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterGeolocationConstraint');
