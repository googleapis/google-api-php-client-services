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

class HeartRateMetadata extends \Google\Model
{
  /**
   * The default value when no data is available.
   */
  public const MOTION_CONTEXT_MOTION_CONTEXT_UNSPECIFIED = 'MOTION_CONTEXT_UNSPECIFIED';
  /**
   * The user is active.
   */
  public const MOTION_CONTEXT_ACTIVE = 'ACTIVE';
  /**
   * The user is inactive.
   */
  public const MOTION_CONTEXT_SEDENTARY = 'SEDENTARY';
  /**
   * The default value when no data is available.
   */
  public const SENSOR_LOCATION_SENSOR_LOCATION_UNSPECIFIED = 'SENSOR_LOCATION_UNSPECIFIED';
  /**
   * Chest sensor.
   */
  public const SENSOR_LOCATION_CHEST = 'CHEST';
  /**
   * Wrist sensor.
   */
  public const SENSOR_LOCATION_WRIST = 'WRIST';
  /**
   * Finger sensor.
   */
  public const SENSOR_LOCATION_FINGER = 'FINGER';
  /**
   * Hand sensor.
   */
  public const SENSOR_LOCATION_HAND = 'HAND';
  /**
   * Ear lobe sensor.
   */
  public const SENSOR_LOCATION_EAR_LOBE = 'EAR_LOBE';
  /**
   * Foot sensor.
   */
  public const SENSOR_LOCATION_FOOT = 'FOOT';
  /**
   * Optional. Indicates the user’s level of activity when the heart rate sample
   * was measured
   *
   * @var string
   */
  public $motionContext;
  /**
   * Optional. Indicates the location of the sensor that measured the heart
   * rate.
   *
   * @var string
   */
  public $sensorLocation;

  /**
   * Optional. Indicates the user’s level of activity when the heart rate sample
   * was measured
   *
   * Accepted values: MOTION_CONTEXT_UNSPECIFIED, ACTIVE, SEDENTARY
   *
   * @param self::MOTION_CONTEXT_* $motionContext
   */
  public function setMotionContext($motionContext)
  {
    $this->motionContext = $motionContext;
  }
  /**
   * @return self::MOTION_CONTEXT_*
   */
  public function getMotionContext()
  {
    return $this->motionContext;
  }
  /**
   * Optional. Indicates the location of the sensor that measured the heart
   * rate.
   *
   * Accepted values: SENSOR_LOCATION_UNSPECIFIED, CHEST, WRIST, FINGER, HAND,
   * EAR_LOBE, FOOT
   *
   * @param self::SENSOR_LOCATION_* $sensorLocation
   */
  public function setSensorLocation($sensorLocation)
  {
    $this->sensorLocation = $sensorLocation;
  }
  /**
   * @return self::SENSOR_LOCATION_*
   */
  public function getSensorLocation()
  {
    return $this->sensorLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartRateMetadata::class, 'Google_Service_GoogleHealthAPI_HeartRateMetadata');
