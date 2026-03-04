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

class GoogleCloudAiplatformV1GroundingChunkMapsRoute extends \Google\Model
{
  /**
   * The total distance of the route, in meters.
   *
   * @var int
   */
  public $distanceMeters;
  /**
   * The total duration of the route.
   *
   * @var string
   */
  public $duration;
  /**
   * An encoded polyline of the route. See https://developers.google.com/maps/do
   * cumentation/utilities/polylinealgorithm
   *
   * @var string
   */
  public $encodedPolyline;

  /**
   * The total distance of the route, in meters.
   *
   * @param int $distanceMeters
   */
  public function setDistanceMeters($distanceMeters)
  {
    $this->distanceMeters = $distanceMeters;
  }
  /**
   * @return int
   */
  public function getDistanceMeters()
  {
    return $this->distanceMeters;
  }
  /**
   * The total duration of the route.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * An encoded polyline of the route. See https://developers.google.com/maps/do
   * cumentation/utilities/polylinealgorithm
   *
   * @param string $encodedPolyline
   */
  public function setEncodedPolyline($encodedPolyline)
  {
    $this->encodedPolyline = $encodedPolyline;
  }
  /**
   * @return string
   */
  public function getEncodedPolyline()
  {
    return $this->encodedPolyline;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GroundingChunkMapsRoute::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GroundingChunkMapsRoute');
