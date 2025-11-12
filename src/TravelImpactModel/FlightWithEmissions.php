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

namespace Google\Service\TravelImpactModel;

class FlightWithEmissions extends \Google\Model
{
  /**
   * @var string
   */
  public $contrailsImpactBucket;
  protected $easaLabelMetadataType = EasaLabelMetadata::class;
  protected $easaLabelMetadataDataType = '';
  protected $emissionsGramsPerPaxType = EmissionsGramsPerPax::class;
  protected $emissionsGramsPerPaxDataType = '';
  protected $flightType = Flight::class;
  protected $flightDataType = '';
  /**
   * @var string
   */
  public $source;

  /**
   * @param string
   */
  public function setContrailsImpactBucket($contrailsImpactBucket)
  {
    $this->contrailsImpactBucket = $contrailsImpactBucket;
  }
  /**
   * @return string
   */
  public function getContrailsImpactBucket()
  {
    return $this->contrailsImpactBucket;
  }
  /**
   * @param EasaLabelMetadata
   */
  public function setEasaLabelMetadata(EasaLabelMetadata $easaLabelMetadata)
  {
    $this->easaLabelMetadata = $easaLabelMetadata;
  }
  /**
   * @return EasaLabelMetadata
   */
  public function getEasaLabelMetadata()
  {
    return $this->easaLabelMetadata;
  }
  /**
   * @param EmissionsGramsPerPax
   */
  public function setEmissionsGramsPerPax(EmissionsGramsPerPax $emissionsGramsPerPax)
  {
    $this->emissionsGramsPerPax = $emissionsGramsPerPax;
  }
  /**
   * @return EmissionsGramsPerPax
   */
  public function getEmissionsGramsPerPax()
  {
    return $this->emissionsGramsPerPax;
  }
  /**
   * @param Flight
   */
  public function setFlight(Flight $flight)
  {
    $this->flight = $flight;
  }
  /**
   * @return Flight
   */
  public function getFlight()
  {
    return $this->flight;
  }
  /**
   * @param string
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlightWithEmissions::class, 'Google_Service_TravelImpactModel_FlightWithEmissions');
