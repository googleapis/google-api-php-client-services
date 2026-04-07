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

class Settings extends \Google\Model
{
  /**
   * Distance unit is not specified.
   */
  public const DISTANCE_UNIT_DISTANCE_UNIT_UNSPECIFIED = 'DISTANCE_UNIT_UNSPECIFIED';
  /**
   * Distance unit is miles.
   */
  public const DISTANCE_UNIT_DISTANCE_UNIT_MILES = 'DISTANCE_UNIT_MILES';
  /**
   * Distance unit is kilometers.
   */
  public const DISTANCE_UNIT_DISTANCE_UNIT_KILOMETERS = 'DISTANCE_UNIT_KILOMETERS';
  /**
   * Glucose unit is not specified.
   */
  public const GLUCOSE_UNIT_GLUCOSE_UNIT_UNSPECIFIED = 'GLUCOSE_UNIT_UNSPECIFIED';
  /**
   * Glucose unit is mg/dL.
   */
  public const GLUCOSE_UNIT_GLUCOSE_UNIT_MG_DL = 'GLUCOSE_UNIT_MG_DL';
  /**
   * Glucose unit is mmol/l.
   */
  public const GLUCOSE_UNIT_GLUCOSE_UNIT_MMOL_L = 'GLUCOSE_UNIT_MMOL_L';
  /**
   * Height unit is not specified.
   */
  public const HEIGHT_UNIT_HEIGHT_UNIT_UNSPECIFIED = 'HEIGHT_UNIT_UNSPECIFIED';
  /**
   * Height unit is inches.
   */
  public const HEIGHT_UNIT_HEIGHT_UNIT_INCHES = 'HEIGHT_UNIT_INCHES';
  /**
   * Height unit is cm.
   */
  public const HEIGHT_UNIT_HEIGHT_UNIT_CENTIMETERS = 'HEIGHT_UNIT_CENTIMETERS';
  /**
   * Stride length type is not specified.
   */
  public const STRIDE_LENGTH_RUNNING_TYPE_STRIDE_LENGTH_TYPE_UNSPECIFIED = 'STRIDE_LENGTH_TYPE_UNSPECIFIED';
  /**
   * Stride length type is computed based on the user's gender and height.
   */
  public const STRIDE_LENGTH_RUNNING_TYPE_STRIDE_LENGTH_TYPE_DEFAULT = 'STRIDE_LENGTH_TYPE_DEFAULT';
  /**
   * Stride length type is manually set by the user.
   */
  public const STRIDE_LENGTH_RUNNING_TYPE_STRIDE_LENGTH_TYPE_MANUAL = 'STRIDE_LENGTH_TYPE_MANUAL';
  /**
   * Stride length type is determined automatically.
   */
  public const STRIDE_LENGTH_RUNNING_TYPE_STRIDE_LENGTH_TYPE_AUTO = 'STRIDE_LENGTH_TYPE_AUTO';
  /**
   * Stride length type is not specified.
   */
  public const STRIDE_LENGTH_WALKING_TYPE_STRIDE_LENGTH_TYPE_UNSPECIFIED = 'STRIDE_LENGTH_TYPE_UNSPECIFIED';
  /**
   * Stride length type is computed based on the user's gender and height.
   */
  public const STRIDE_LENGTH_WALKING_TYPE_STRIDE_LENGTH_TYPE_DEFAULT = 'STRIDE_LENGTH_TYPE_DEFAULT';
  /**
   * Stride length type is manually set by the user.
   */
  public const STRIDE_LENGTH_WALKING_TYPE_STRIDE_LENGTH_TYPE_MANUAL = 'STRIDE_LENGTH_TYPE_MANUAL';
  /**
   * Stride length type is determined automatically.
   */
  public const STRIDE_LENGTH_WALKING_TYPE_STRIDE_LENGTH_TYPE_AUTO = 'STRIDE_LENGTH_TYPE_AUTO';
  /**
   * Swim unit is not specified.
   */
  public const SWIM_UNIT_SWIM_UNIT_UNSPECIFIED = 'SWIM_UNIT_UNSPECIFIED';
  /**
   * Swim unit is meters.
   */
  public const SWIM_UNIT_SWIM_UNIT_METERS = 'SWIM_UNIT_METERS';
  /**
   * Swim unit is yards.
   */
  public const SWIM_UNIT_SWIM_UNIT_YARDS = 'SWIM_UNIT_YARDS';
  /**
   * Temperature unit is not specified.
   */
  public const TEMPERATURE_UNIT_TEMPERATURE_UNIT_UNSPECIFIED = 'TEMPERATURE_UNIT_UNSPECIFIED';
  /**
   * Temperature unit is Celsius.
   */
  public const TEMPERATURE_UNIT_TEMPERATURE_UNIT_CELSIUS = 'TEMPERATURE_UNIT_CELSIUS';
  /**
   * Temperature unit is Fahrenheit.
   */
  public const TEMPERATURE_UNIT_TEMPERATURE_UNIT_FAHRENHEIT = 'TEMPERATURE_UNIT_FAHRENHEIT';
  /**
   * Water unit is not specified.
   */
  public const WATER_UNIT_WATER_UNIT_UNSPECIFIED = 'WATER_UNIT_UNSPECIFIED';
  /**
   * Water unit is milliliters.
   */
  public const WATER_UNIT_WATER_UNIT_ML = 'WATER_UNIT_ML';
  /**
   * Water unit is fluid ounces.
   */
  public const WATER_UNIT_WATER_UNIT_FL_OZ = 'WATER_UNIT_FL_OZ';
  /**
   * Water unit is cups.
   */
  public const WATER_UNIT_WATER_UNIT_CUP = 'WATER_UNIT_CUP';
  /**
   * Weight unit is not specified.
   */
  public const WEIGHT_UNIT_WEIGHT_UNIT_UNSPECIFIED = 'WEIGHT_UNIT_UNSPECIFIED';
  /**
   * Weight unit is pounds.
   */
  public const WEIGHT_UNIT_WEIGHT_UNIT_POUNDS = 'WEIGHT_UNIT_POUNDS';
  /**
   * Weight unit is stones.
   */
  public const WEIGHT_UNIT_WEIGHT_UNIT_STONE = 'WEIGHT_UNIT_STONE';
  /**
   * Weight unit is kilograms.
   */
  public const WEIGHT_UNIT_WEIGHT_UNIT_KILOGRAMS = 'WEIGHT_UNIT_KILOGRAMS';
  /**
   * Optional. True if the user's stride length is determined automatically.
   * Updates to this field are currently not supported.
   *
   * @var bool
   */
  public $autoStrideEnabled;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   * Updates to this field are currently not supported.
   *
   * @var string
   */
  public $distanceUnit;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * @var string
   */
  public $glucoseUnit;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * @var string
   */
  public $heightUnit;
  /**
   * Optional. The locale defined in the user's account settings. Updates to
   * this field are currently not supported.
   *
   * @var string
   */
  public $languageLocale;
  /**
   * Identifier. The resource name of this Settings resource. Format:
   * `users/{user}/settings` Example: `users/1234567890/settings` or
   * `users/me/settings` The {user} ID is a system-generated Google Health API
   * user ID, a string of 1-63 characters consisting of lowercase and uppercase
   * letters, numbers, and hyphens. The literal `me` can also be used to refer
   * to the authenticated user.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The stride length type defined in the user's account settings for
   * running. Updates to this field are currently not supported.
   *
   * @var string
   */
  public $strideLengthRunningType;
  /**
   * Optional. The stride length type defined in the user's account settings for
   * walking. Updates to this field are currently not supported.
   *
   * @var string
   */
  public $strideLengthWalkingType;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * @var string
   */
  public $swimUnit;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * @var string
   */
  public $temperatureUnit;
  /**
   * Optional. The timezone defined in the user's account settings. This follows
   * the IANA [Time Zone Database](https://www.iana.org/time-zones). Updates to
   * this field are currently not supported.
   *
   * @var string
   */
  public $timeZone;
  /**
   * Optional. The duration of the offset from UTC in milliseconds. This offset
   * is the difference between the user's current local time and UTC. Updates to
   * this field are currently not supported.
   *
   * @var string
   */
  public $utcOffset;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * @var string
   */
  public $waterUnit;
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * @var string
   */
  public $weightUnit;

  /**
   * Optional. True if the user's stride length is determined automatically.
   * Updates to this field are currently not supported.
   *
   * @param bool $autoStrideEnabled
   */
  public function setAutoStrideEnabled($autoStrideEnabled)
  {
    $this->autoStrideEnabled = $autoStrideEnabled;
  }
  /**
   * @return bool
   */
  public function getAutoStrideEnabled()
  {
    return $this->autoStrideEnabled;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   * Updates to this field are currently not supported.
   *
   * Accepted values: DISTANCE_UNIT_UNSPECIFIED, DISTANCE_UNIT_MILES,
   * DISTANCE_UNIT_KILOMETERS
   *
   * @param self::DISTANCE_UNIT_* $distanceUnit
   */
  public function setDistanceUnit($distanceUnit)
  {
    $this->distanceUnit = $distanceUnit;
  }
  /**
   * @return self::DISTANCE_UNIT_*
   */
  public function getDistanceUnit()
  {
    return $this->distanceUnit;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * Accepted values: GLUCOSE_UNIT_UNSPECIFIED, GLUCOSE_UNIT_MG_DL,
   * GLUCOSE_UNIT_MMOL_L
   *
   * @param self::GLUCOSE_UNIT_* $glucoseUnit
   */
  public function setGlucoseUnit($glucoseUnit)
  {
    $this->glucoseUnit = $glucoseUnit;
  }
  /**
   * @return self::GLUCOSE_UNIT_*
   */
  public function getGlucoseUnit()
  {
    return $this->glucoseUnit;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * Accepted values: HEIGHT_UNIT_UNSPECIFIED, HEIGHT_UNIT_INCHES,
   * HEIGHT_UNIT_CENTIMETERS
   *
   * @param self::HEIGHT_UNIT_* $heightUnit
   */
  public function setHeightUnit($heightUnit)
  {
    $this->heightUnit = $heightUnit;
  }
  /**
   * @return self::HEIGHT_UNIT_*
   */
  public function getHeightUnit()
  {
    return $this->heightUnit;
  }
  /**
   * Optional. The locale defined in the user's account settings. Updates to
   * this field are currently not supported.
   *
   * @param string $languageLocale
   */
  public function setLanguageLocale($languageLocale)
  {
    $this->languageLocale = $languageLocale;
  }
  /**
   * @return string
   */
  public function getLanguageLocale()
  {
    return $this->languageLocale;
  }
  /**
   * Identifier. The resource name of this Settings resource. Format:
   * `users/{user}/settings` Example: `users/1234567890/settings` or
   * `users/me/settings` The {user} ID is a system-generated Google Health API
   * user ID, a string of 1-63 characters consisting of lowercase and uppercase
   * letters, numbers, and hyphens. The literal `me` can also be used to refer
   * to the authenticated user.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. The stride length type defined in the user's account settings for
   * running. Updates to this field are currently not supported.
   *
   * Accepted values: STRIDE_LENGTH_TYPE_UNSPECIFIED,
   * STRIDE_LENGTH_TYPE_DEFAULT, STRIDE_LENGTH_TYPE_MANUAL,
   * STRIDE_LENGTH_TYPE_AUTO
   *
   * @param self::STRIDE_LENGTH_RUNNING_TYPE_* $strideLengthRunningType
   */
  public function setStrideLengthRunningType($strideLengthRunningType)
  {
    $this->strideLengthRunningType = $strideLengthRunningType;
  }
  /**
   * @return self::STRIDE_LENGTH_RUNNING_TYPE_*
   */
  public function getStrideLengthRunningType()
  {
    return $this->strideLengthRunningType;
  }
  /**
   * Optional. The stride length type defined in the user's account settings for
   * walking. Updates to this field are currently not supported.
   *
   * Accepted values: STRIDE_LENGTH_TYPE_UNSPECIFIED,
   * STRIDE_LENGTH_TYPE_DEFAULT, STRIDE_LENGTH_TYPE_MANUAL,
   * STRIDE_LENGTH_TYPE_AUTO
   *
   * @param self::STRIDE_LENGTH_WALKING_TYPE_* $strideLengthWalkingType
   */
  public function setStrideLengthWalkingType($strideLengthWalkingType)
  {
    $this->strideLengthWalkingType = $strideLengthWalkingType;
  }
  /**
   * @return self::STRIDE_LENGTH_WALKING_TYPE_*
   */
  public function getStrideLengthWalkingType()
  {
    return $this->strideLengthWalkingType;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * Accepted values: SWIM_UNIT_UNSPECIFIED, SWIM_UNIT_METERS, SWIM_UNIT_YARDS
   *
   * @param self::SWIM_UNIT_* $swimUnit
   */
  public function setSwimUnit($swimUnit)
  {
    $this->swimUnit = $swimUnit;
  }
  /**
   * @return self::SWIM_UNIT_*
   */
  public function getSwimUnit()
  {
    return $this->swimUnit;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * Accepted values: TEMPERATURE_UNIT_UNSPECIFIED, TEMPERATURE_UNIT_CELSIUS,
   * TEMPERATURE_UNIT_FAHRENHEIT
   *
   * @param self::TEMPERATURE_UNIT_* $temperatureUnit
   */
  public function setTemperatureUnit($temperatureUnit)
  {
    $this->temperatureUnit = $temperatureUnit;
  }
  /**
   * @return self::TEMPERATURE_UNIT_*
   */
  public function getTemperatureUnit()
  {
    return $this->temperatureUnit;
  }
  /**
   * Optional. The timezone defined in the user's account settings. This follows
   * the IANA [Time Zone Database](https://www.iana.org/time-zones). Updates to
   * this field are currently not supported.
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /**
   * Optional. The duration of the offset from UTC in milliseconds. This offset
   * is the difference between the user's current local time and UTC. Updates to
   * this field are currently not supported.
   *
   * @param string $utcOffset
   */
  public function setUtcOffset($utcOffset)
  {
    $this->utcOffset = $utcOffset;
  }
  /**
   * @return string
   */
  public function getUtcOffset()
  {
    return $this->utcOffset;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * Accepted values: WATER_UNIT_UNSPECIFIED, WATER_UNIT_ML, WATER_UNIT_FL_OZ,
   * WATER_UNIT_CUP
   *
   * @param self::WATER_UNIT_* $waterUnit
   */
  public function setWaterUnit($waterUnit)
  {
    $this->waterUnit = $waterUnit;
  }
  /**
   * @return self::WATER_UNIT_*
   */
  public function getWaterUnit()
  {
    return $this->waterUnit;
  }
  /**
   * Optional. The measurement unit defined in the user's account settings.
   *
   * Accepted values: WEIGHT_UNIT_UNSPECIFIED, WEIGHT_UNIT_POUNDS,
   * WEIGHT_UNIT_STONE, WEIGHT_UNIT_KILOGRAMS
   *
   * @param self::WEIGHT_UNIT_* $weightUnit
   */
  public function setWeightUnit($weightUnit)
  {
    $this->weightUnit = $weightUnit;
  }
  /**
   * @return self::WEIGHT_UNIT_*
   */
  public function getWeightUnit()
  {
    return $this->weightUnit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Settings::class, 'Google_Service_GoogleHealthAPI_Settings');
