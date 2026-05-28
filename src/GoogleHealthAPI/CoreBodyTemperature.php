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

class CoreBodyTemperature extends \Google\Model
{
  /**
   * Measurement location is unspecified.
   */
  public const MEASUREMENT_LOCATION_MEASUREMENT_LOCATION_UNSPECIFIED = 'MEASUREMENT_LOCATION_UNSPECIFIED';
  /**
   * Other measurement location.
   */
  public const MEASUREMENT_LOCATION_OTHER = 'OTHER';
  /**
   * Armpit measurement location.
   */
  public const MEASUREMENT_LOCATION_ARMPIT = 'ARMPIT';
  /**
   * Body measurement location.
   */
  public const MEASUREMENT_LOCATION_BODY = 'BODY';
  /**
   * Ear measurement location.
   */
  public const MEASUREMENT_LOCATION_EAR = 'EAR';
  /**
   * Finger measurement location.
   */
  public const MEASUREMENT_LOCATION_FINGER = 'FINGER';
  /**
   * Gastro-intestinal measurement location.
   */
  public const MEASUREMENT_LOCATION_GASTRO_INTESTINAL = 'GASTRO_INTESTINAL';
  /**
   * Mouth measurement location.
   */
  public const MEASUREMENT_LOCATION_MOUTH = 'MOUTH';
  /**
   * Rectum measurement location.
   */
  public const MEASUREMENT_LOCATION_RECTUM = 'RECTUM';
  /**
   * Toe measurement location.
   */
  public const MEASUREMENT_LOCATION_TOE = 'TOE';
  /**
   * Ear drum measurement location.
   */
  public const MEASUREMENT_LOCATION_EAR_DRUM = 'EAR_DRUM';
  /**
   * Temporal artery measurement location.
   */
  public const MEASUREMENT_LOCATION_TEMPORAL_ARTERY = 'TEMPORAL_ARTERY';
  /**
   * Forehead measurement location.
   */
  public const MEASUREMENT_LOCATION_FOREHEAD = 'FOREHEAD';
  /**
   * Urinary bladder measurement location.
   */
  public const MEASUREMENT_LOCATION_URINARY_BLADDER = 'URINARY_BLADDER';
  /**
   * Nasal measurement location.
   */
  public const MEASUREMENT_LOCATION_NASAL = 'NASAL';
  /**
   * Nasopharyngeal measurement location.
   */
  public const MEASUREMENT_LOCATION_NASOPHARYNGEAL = 'NASOPHARYNGEAL';
  /**
   * Wrist measurement location.
   */
  public const MEASUREMENT_LOCATION_WRIST = 'WRIST';
  /**
   * Vagina measurement location.
   */
  public const MEASUREMENT_LOCATION_VAGINA = 'VAGINA';
  /**
   * Optional. The unique identifier of the core body temperature measurement.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. The location of the core body temperature measurement.
   *
   * @var string
   */
  public $measurementLocation;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';
  /**
   * Required. The core body temperature in Celsius.
   *
   * @var 
   */
  public $temperatureCelsius;

  /**
   * Optional. The unique identifier of the core body temperature measurement.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. The location of the core body temperature measurement.
   *
   * Accepted values: MEASUREMENT_LOCATION_UNSPECIFIED, OTHER, ARMPIT, BODY,
   * EAR, FINGER, GASTRO_INTESTINAL, MOUTH, RECTUM, TOE, EAR_DRUM,
   * TEMPORAL_ARTERY, FOREHEAD, URINARY_BLADDER, NASAL, NASOPHARYNGEAL, WRIST,
   * VAGINA
   *
   * @param self::MEASUREMENT_LOCATION_* $measurementLocation
   */
  public function setMeasurementLocation($measurementLocation)
  {
    $this->measurementLocation = $measurementLocation;
  }
  /**
   * @return self::MEASUREMENT_LOCATION_*
   */
  public function getMeasurementLocation()
  {
    return $this->measurementLocation;
  }
  /**
   * Required. The time at which core body temperature was measured.
   *
   * @param ObservationSampleTime $sampleTime
   */
  public function setSampleTime(ObservationSampleTime $sampleTime)
  {
    $this->sampleTime = $sampleTime;
  }
  /**
   * @return ObservationSampleTime
   */
  public function getSampleTime()
  {
    return $this->sampleTime;
  }
  public function setTemperatureCelsius($temperatureCelsius)
  {
    $this->temperatureCelsius = $temperatureCelsius;
  }
  public function getTemperatureCelsius()
  {
    return $this->temperatureCelsius;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CoreBodyTemperature::class, 'Google_Service_GoogleHealthAPI_CoreBodyTemperature');
