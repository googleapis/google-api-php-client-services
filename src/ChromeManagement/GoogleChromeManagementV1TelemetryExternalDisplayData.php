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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1TelemetryExternalDisplayData extends \Google\Model
{
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $edidVersion;
  /**
   * @var string
   */
  public $refreshRate;
  /**
   * @var int
   */
  public $resolutionHorizontal;
  /**
   * @var int
   */
  public $resolutionVertical;
  /**
   * @var int
   */
  public $serialNumber;

  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setEdidVersion($edidVersion)
  {
    $this->edidVersion = $edidVersion;
  }
  /**
   * @return string
   */
  public function getEdidVersion()
  {
    return $this->edidVersion;
  }
  /**
   * @param string
   */
  public function setRefreshRate($refreshRate)
  {
    $this->refreshRate = $refreshRate;
  }
  /**
   * @return string
   */
  public function getRefreshRate()
  {
    return $this->refreshRate;
  }
  /**
   * @param int
   */
  public function setResolutionHorizontal($resolutionHorizontal)
  {
    $this->resolutionHorizontal = $resolutionHorizontal;
  }
  /**
   * @return int
   */
  public function getResolutionHorizontal()
  {
    return $this->resolutionHorizontal;
  }
  /**
   * @param int
   */
  public function setResolutionVertical($resolutionVertical)
  {
    $this->resolutionVertical = $resolutionVertical;
  }
  /**
   * @return int
   */
  public function getResolutionVertical()
  {
    return $this->resolutionVertical;
  }
  /**
   * @param int
   */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /**
   * @return int
   */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1TelemetryExternalDisplayData::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1TelemetryExternalDisplayData');
