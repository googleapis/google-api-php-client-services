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

class GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList extends \Google\Collection
{
  protected $collection_key = 'points';
  protected $pointsType = GoogleAdsSearchads360V23CommonTargetRoasSimulationPoint::class;
  protected $pointsDataType = 'array';

  /**
   * Projected metrics for a series of target ROAS amounts.
   *
   * @param GoogleAdsSearchads360V23CommonTargetRoasSimulationPoint[] $points
   */
  public function setPoints($points)
  {
    $this->points = $points;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetRoasSimulationPoint[]
   */
  public function getPoints()
  {
    return $this->points;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTargetRoasSimulationPointList');
