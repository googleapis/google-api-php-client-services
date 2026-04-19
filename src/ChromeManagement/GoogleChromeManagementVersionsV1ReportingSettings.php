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

class GoogleChromeManagementVersionsV1ReportingSettings extends \Google\Collection
{
  protected $collection_key = 'enabledOptInEvents';
  /**
   * Optional. The list of user and browser events that are enabled for this
   * connector. An empty list disables all default events, and using
   * `ALL_DEFAULT_EVENTS` will enable all default events.
   *
   * @var string[]
   */
  public $enabledDefaultEvents;
  /**
   * Optional. The list of device events that are enabled for this config. An
   * empty list disables all device events, and using `ALL_DEVICE_EVENTS` will
   * enable all device events.
   *
   * @var string[]
   */
  public $enabledDeviceEvents;
  /**
   * Optional. The list of opt-in events that are enabled for this config. An
   * empty list disables all opt-in events, and using `ALL_OPT_IN_EVENTS` will
   * enable all opt-in events.
   *
   * @var string[]
   */
  public $enabledOptInEvents;

  /**
   * Optional. The list of user and browser events that are enabled for this
   * connector. An empty list disables all default events, and using
   * `ALL_DEFAULT_EVENTS` will enable all default events.
   *
   * @param string[] $enabledDefaultEvents
   */
  public function setEnabledDefaultEvents($enabledDefaultEvents)
  {
    $this->enabledDefaultEvents = $enabledDefaultEvents;
  }
  /**
   * @return string[]
   */
  public function getEnabledDefaultEvents()
  {
    return $this->enabledDefaultEvents;
  }
  /**
   * Optional. The list of device events that are enabled for this config. An
   * empty list disables all device events, and using `ALL_DEVICE_EVENTS` will
   * enable all device events.
   *
   * @param string[] $enabledDeviceEvents
   */
  public function setEnabledDeviceEvents($enabledDeviceEvents)
  {
    $this->enabledDeviceEvents = $enabledDeviceEvents;
  }
  /**
   * @return string[]
   */
  public function getEnabledDeviceEvents()
  {
    return $this->enabledDeviceEvents;
  }
  /**
   * Optional. The list of opt-in events that are enabled for this config. An
   * empty list disables all opt-in events, and using `ALL_OPT_IN_EVENTS` will
   * enable all opt-in events.
   *
   * @param string[] $enabledOptInEvents
   */
  public function setEnabledOptInEvents($enabledOptInEvents)
  {
    $this->enabledOptInEvents = $enabledOptInEvents;
  }
  /**
   * @return string[]
   */
  public function getEnabledOptInEvents()
  {
    return $this->enabledOptInEvents;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ReportingSettings::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ReportingSettings');
