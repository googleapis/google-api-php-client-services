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

namespace Google\Service\Solar;

class BuildingInsightsDetectedArraysSolarArray extends \Google\Model
{
  /**
   * A GeoJSON representation of the building area where solar panels were
   * detected. The GeoJSON data must be in RFC 7946 format and represent a
   * Polygon for a single contiguous area. The Polygon will be represented by
   * several loops when it contains holes. Example: { "type": "Polygon",
   * "coordinates": [ [ [-1, -1], [-1, 0], [0, 0], [-1, -1] ] ] }
   *
   * @var array[]
   */
  public $polygonGeojson;

  /**
   * A GeoJSON representation of the building area where solar panels were
   * detected. The GeoJSON data must be in RFC 7946 format and represent a
   * Polygon for a single contiguous area. The Polygon will be represented by
   * several loops when it contains holes. Example: { "type": "Polygon",
   * "coordinates": [ [ [-1, -1], [-1, 0], [0, 0], [-1, -1] ] ] }
   *
   * @param array[] $polygonGeojson
   */
  public function setPolygonGeojson($polygonGeojson)
  {
    $this->polygonGeojson = $polygonGeojson;
  }
  /**
   * @return array[]
   */
  public function getPolygonGeojson()
  {
    return $this->polygonGeojson;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BuildingInsightsDetectedArraysSolarArray::class, 'Google_Service_Solar_BuildingInsightsDetectedArraysSolarArray');
