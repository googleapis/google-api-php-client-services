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

class FlightWithDetailedEmissions extends \Google\Model
{
  protected $emissionsMetadataType = EmissionsMetadata::class;
  protected $emissionsMetadataDataType = '';
  protected $flightType = Flight::class;
  protected $flightDataType = '';
  protected $flightEmissionsDetailsType = FlightEmissionsDetails::class;
  protected $flightEmissionsDetailsDataType = '';

  /**
   * Output only. Additional metadata about the flight emissions calculation.
   *
   * @param EmissionsMetadata $emissionsMetadata
   */
  public function setEmissionsMetadata(EmissionsMetadata $emissionsMetadata)
  {
    $this->emissionsMetadata = $emissionsMetadata;
  }
  /**
   * @return EmissionsMetadata
   */
  public function getEmissionsMetadata()
  {
    return $this->emissionsMetadata;
  }
  /**
   * Output only. Matches the flight identifiers in the request. Note: all IATA
   * codes are capitalized.
   *
   * @param Flight $flight
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
   * Output only. All the flight emissions data.
   *
   * @param FlightEmissionsDetails $flightEmissionsDetails
   */
  public function setFlightEmissionsDetails(FlightEmissionsDetails $flightEmissionsDetails)
  {
    $this->flightEmissionsDetails = $flightEmissionsDetails;
  }
  /**
   * @return FlightEmissionsDetails
   */
  public function getFlightEmissionsDetails()
  {
    return $this->flightEmissionsDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlightWithDetailedEmissions::class, 'Google_Service_TravelImpactModel_FlightWithDetailedEmissions');
