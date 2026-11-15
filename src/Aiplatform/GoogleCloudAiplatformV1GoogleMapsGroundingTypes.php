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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1GoogleMapsGroundingTypes extends \Google\Model
{
  protected $placesType = GoogleCloudAiplatformV1GoogleMapsPlaces::class;
  protected $placesDataType = '';
  protected $routingType = GoogleCloudAiplatformV1GoogleMapsRouting::class;
  protected $routingDataType = '';

  /**
   * Optional. Enables grounding with Google Maps Places. This is the default
   * grounding type when no `GroundingTypes` are specified.
   *
   * @param GoogleCloudAiplatformV1GoogleMapsPlaces $places
   */
  public function setPlaces(GoogleCloudAiplatformV1GoogleMapsPlaces $places)
  {
    $this->places = $places;
  }
  /**
   * @return GoogleCloudAiplatformV1GoogleMapsPlaces
   */
  public function getPlaces()
  {
    return $this->places;
  }
  /**
   * Optional. Enables grounding with Google Maps Routing APIs (ComputeRoutes
   * and SearchAlongRoute). Also enabled by default for Gemini 4 and later
   * models when no `GroundingTypes` are specified.
   *
   * @param GoogleCloudAiplatformV1GoogleMapsRouting $routing
   */
  public function setRouting(GoogleCloudAiplatformV1GoogleMapsRouting $routing)
  {
    $this->routing = $routing;
  }
  /**
   * @return GoogleCloudAiplatformV1GoogleMapsRouting
   */
  public function getRouting()
  {
    return $this->routing;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GoogleMapsGroundingTypes::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GoogleMapsGroundingTypes');
