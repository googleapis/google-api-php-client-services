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

class BuildingInsightsDetectedArrays extends \Google\Collection
{
  /**
   * Unspecified status.
   */
  public const DETECTION_STATUS_DETECTION_STATUS_UNSPECIFIED = 'DETECTION_STATUS_UNSPECIFIED';
  /**
   * Detected solar array data is unavailable for this building.
   */
  public const DETECTION_STATUS_DETECTION_STATUS_DATA_UNAVAILABLE = 'DETECTION_STATUS_DATA_UNAVAILABLE';
  /**
   * At least one solar array has been detected for this building.
   */
  public const DETECTION_STATUS_DETECTION_STATUS_ARRAYS_DETECTED = 'DETECTION_STATUS_ARRAYS_DETECTED';
  /**
   * No solar arrays detected for this building.
   */
  public const DETECTION_STATUS_DETECTION_STATUS_NO_ARRAYS_DETECTED = 'DETECTION_STATUS_NO_ARRAYS_DETECTED';
  protected $collection_key = 'arrays';
  protected $arraysType = BuildingInsightsDetectedArraysSolarArray::class;
  protected $arraysDataType = 'array';
  /**
   * Indicates the detection status of solar arrays for this building.
   *
   * @var string
   */
  public $detectionStatus;
  protected $latestCaptureDateType = Date::class;
  protected $latestCaptureDateDataType = '';

  /**
   * A list of solar arrays detected on the building.
   *
   * @param BuildingInsightsDetectedArraysSolarArray[] $arrays
   */
  public function setArrays($arrays)
  {
    $this->arrays = $arrays;
  }
  /**
   * @return BuildingInsightsDetectedArraysSolarArray[]
   */
  public function getArrays()
  {
    return $this->arrays;
  }
  /**
   * Indicates the detection status of solar arrays for this building.
   *
   * Accepted values: DETECTION_STATUS_UNSPECIFIED,
   * DETECTION_STATUS_DATA_UNAVAILABLE, DETECTION_STATUS_ARRAYS_DETECTED,
   * DETECTION_STATUS_NO_ARRAYS_DETECTED
   *
   * @param self::DETECTION_STATUS_* $detectionStatus
   */
  public function setDetectionStatus($detectionStatus)
  {
    $this->detectionStatus = $detectionStatus;
  }
  /**
   * @return self::DETECTION_STATUS_*
   */
  public function getDetectionStatus()
  {
    return $this->detectionStatus;
  }
  /**
   * The date indicating when the latest solar array data was captured.
   *
   * @param Date $latestCaptureDate
   */
  public function setLatestCaptureDate(Date $latestCaptureDate)
  {
    $this->latestCaptureDate = $latestCaptureDate;
  }
  /**
   * @return Date
   */
  public function getLatestCaptureDate()
  {
    return $this->latestCaptureDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BuildingInsightsDetectedArrays::class, 'Google_Service_Solar_BuildingInsightsDetectedArrays');
