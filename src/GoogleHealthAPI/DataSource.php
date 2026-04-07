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

class DataSource extends \Google\Model
{
  /**
   * The platform is unspecified.
   */
  public const PLATFORM_PLATFORM_UNSPECIFIED = 'PLATFORM_UNSPECIFIED';
  /**
   * The data was uploaded from Fitbit.
   */
  public const PLATFORM_FITBIT = 'FITBIT';
  /**
   * The data was uploaded from Health Connect.
   */
  public const PLATFORM_HEALTH_CONNECT = 'HEALTH_CONNECT';
  /**
   * The data was uploaded from Health Kit.
   */
  public const PLATFORM_HEALTH_KIT = 'HEALTH_KIT';
  /**
   * The data was uploaded from Google Fit.
   */
  public const PLATFORM_FIT = 'FIT';
  /**
   * The data was uploaded from Fitbit legacy Web API.
   */
  public const PLATFORM_FITBIT_WEB_API = 'FITBIT_WEB_API';
  /**
   * The data was uploaded from Nest devices.
   */
  public const PLATFORM_NEST = 'NEST';
  /**
   * The data was uploaded from Google Health API.
   */
  public const PLATFORM_GOOGLE_WEB_API = 'GOOGLE_WEB_API';
  /**
   * The data was uploaded from Google Partner Integrations.
   */
  public const PLATFORM_GOOGLE_PARTNER_INTEGRATION = 'GOOGLE_PARTNER_INTEGRATION';
  /**
   * The recording method is unspecified.
   */
  public const RECORDING_METHOD_RECORDING_METHOD_UNSPECIFIED = 'RECORDING_METHOD_UNSPECIFIED';
  /**
   * The data was manually entered by the user.
   */
  public const RECORDING_METHOD_MANUAL = 'MANUAL';
  /**
   * The data was passively measured by a device.
   */
  public const RECORDING_METHOD_PASSIVELY_MEASURED = 'PASSIVELY_MEASURED';
  /**
   * The data was derived from other data, e.g., by an algorithm in the backend.
   */
  public const RECORDING_METHOD_DERIVED = 'DERIVED';
  /**
   * The data was actively measured by a device.
   */
  public const RECORDING_METHOD_ACTIVELY_MEASURED = 'ACTIVELY_MEASURED';
  /**
   * The recording method is unknown. This is set when the data is uploaded from
   * a third party app that does not provide this information.
   */
  public const RECORDING_METHOD_UNKNOWN = 'UNKNOWN';
  protected $applicationType = Application::class;
  protected $applicationDataType = '';
  protected $deviceType = Device::class;
  protected $deviceDataType = '';
  /**
   * Output only. Captures the platform that uploaded the data.
   *
   * @var string
   */
  public $platform;
  /**
   * Optional. Captures how the data was recorded.
   *
   * @var string
   */
  public $recordingMethod;

  /**
   * Output only. Captures metadata for the application that provided this data.
   *
   * @param Application $application
   */
  public function setApplication(Application $application)
  {
    $this->application = $application;
  }
  /**
   * @return Application
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * Optional. Captures metadata for raw data points originating from devices.
   * We expect this data source to be used for data points written on device
   * sync.
   *
   * @param Device $device
   */
  public function setDevice(Device $device)
  {
    $this->device = $device;
  }
  /**
   * @return Device
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * Output only. Captures the platform that uploaded the data.
   *
   * Accepted values: PLATFORM_UNSPECIFIED, FITBIT, HEALTH_CONNECT, HEALTH_KIT,
   * FIT, FITBIT_WEB_API, NEST, GOOGLE_WEB_API, GOOGLE_PARTNER_INTEGRATION
   *
   * @param self::PLATFORM_* $platform
   */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /**
   * @return self::PLATFORM_*
   */
  public function getPlatform()
  {
    return $this->platform;
  }
  /**
   * Optional. Captures how the data was recorded.
   *
   * Accepted values: RECORDING_METHOD_UNSPECIFIED, MANUAL, PASSIVELY_MEASURED,
   * DERIVED, ACTIVELY_MEASURED, UNKNOWN
   *
   * @param self::RECORDING_METHOD_* $recordingMethod
   */
  public function setRecordingMethod($recordingMethod)
  {
    $this->recordingMethod = $recordingMethod;
  }
  /**
   * @return self::RECORDING_METHOD_*
   */
  public function getRecordingMethod()
  {
    return $this->recordingMethod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataSource::class, 'Google_Service_GoogleHealthAPI_DataSource');
