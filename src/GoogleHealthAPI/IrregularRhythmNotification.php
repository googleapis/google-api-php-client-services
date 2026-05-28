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

class IrregularRhythmNotification extends \Google\Collection
{
  protected $collection_key = 'alertWindows';
  protected $alertWindowsType = AlertWindow::class;
  protected $alertWindowsDataType = 'array';
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  protected $medicalDeviceInfoType = MedicalDeviceInfo::class;
  protected $medicalDeviceInfoDataType = '';

  /**
   * Optional. The overlapping analysis windows that were used to evaluate
   * rhythm for potential AFib, containing specific information about the user's
   * heart rhythm.
   *
   * @param AlertWindow[] $alertWindows
   */
  public function setAlertWindows($alertWindows)
  {
    $this->alertWindows = $alertWindows;
  }
  /**
   * @return AlertWindow[]
   */
  public function getAlertWindows()
  {
    return $this->alertWindows;
  }
  /**
   * Required. Observed interval.
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Output only. The meta information for the compatible device used to conduct
   * the measurement. Irregular Rhythm Notification measurements typically
   * populate `algorithm_version`, `service_version`, and `device_model`.
   *
   * @param MedicalDeviceInfo $medicalDeviceInfo
   */
  public function setMedicalDeviceInfo(MedicalDeviceInfo $medicalDeviceInfo)
  {
    $this->medicalDeviceInfo = $medicalDeviceInfo;
  }
  /**
   * @return MedicalDeviceInfo
   */
  public function getMedicalDeviceInfo()
  {
    return $this->medicalDeviceInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IrregularRhythmNotification::class, 'Google_Service_GoogleHealthAPI_IrregularRhythmNotification');
