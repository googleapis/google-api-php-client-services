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

namespace Google\Service\MapsPlaces;

class GoogleMapsPlacesV1TransitStation extends \Google\Collection
{
  protected $collection_key = 'stops';
  protected $agenciesType = GoogleMapsPlacesV1TransitAgency::class;
  protected $agenciesDataType = 'array';
  protected $displayNameType = GoogleTypeLocalizedText::class;
  protected $displayNameDataType = '';
  protected $stopsType = GoogleMapsPlacesV1TransitStop::class;
  protected $stopsDataType = 'array';

  /**
   * The transit agencies that serve this station.
   *
   * @param GoogleMapsPlacesV1TransitAgency[] $agencies
   */
  public function setAgencies($agencies)
  {
    $this->agencies = $agencies;
  }
  /**
   * @return GoogleMapsPlacesV1TransitAgency[]
   */
  public function getAgencies()
  {
    return $this->agencies;
  }
  /**
   * The name of the station in the local language.
   *
   * @param GoogleTypeLocalizedText $displayName
   */
  public function setDisplayName(GoogleTypeLocalizedText $displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Transit stops at this station.
   *
   * @param GoogleMapsPlacesV1TransitStop[] $stops
   */
  public function setStops($stops)
  {
    $this->stops = $stops;
  }
  /**
   * @return GoogleMapsPlacesV1TransitStop[]
   */
  public function getStops()
  {
    return $this->stops;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleMapsPlacesV1TransitStation::class, 'Google_Service_MapsPlaces_GoogleMapsPlacesV1TransitStation');
