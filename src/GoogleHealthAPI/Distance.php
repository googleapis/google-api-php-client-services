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

namespace Google\Service\GoogleHealthAPI;

class Distance extends \Google\Model
{
  protected $intervalType = ObservationTimeInterval::class;
  protected $intervalDataType = '';
  /**
   * Required. Distance in millimeters over the observed interval.
   *
   * @var string
   */
  public $millimeters;

  /**
   * Required. Observed interval.
   *
   * @param ObservationTimeInterval $interval
   */
  public function setInterval(ObservationTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return ObservationTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Required. Distance in millimeters over the observed interval.
   *
   * @param string $millimeters
   */
  public function setMillimeters($millimeters)
  {
    $this->millimeters = $millimeters;
  }
  /**
   * @return string
   */
  public function getMillimeters()
  {
    return $this->millimeters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Distance::class, 'Google_Service_GoogleHealthAPI_Distance');
