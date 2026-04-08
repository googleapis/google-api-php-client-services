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

class Application extends \Google\Model
{
  /**
   * Output only. The Google OAuth 2.0 client ID of the web application or
   * service that recorded the data. This is the client ID used during the
   * Google OAuth flow to obtain user credentials. This field is system-
   * populated when the data is uploaded from Google Web API.
   *
   * @var string
   */
  public $googleWebClientId;
  /**
   * Output only. A unique identifier for the mobile application that was the
   * source of the data. This is typically the application's package name on
   * Android (e.g., `com.google.fitbit`) or the bundle ID on iOS. This field is
   * informational and helps trace data origin. This field is system-populated
   * when the data is uploaded from the Fitbit mobile application, Health
   * Connect or Health Kit.
   *
   * @var string
   */
  public $packageName;
  /**
   * Output only. The client ID of the application that recorded the data. This
   * ID is a legacy Fitbit API client ID, which is different from a Google OAuth
   * client ID. Example format: `ABC123`. This field is system-populated and
   * used for tracing data from legacy Fitbit API integrations. This field is
   * system-populated when the data is uploaded from a legacy Fitbit API
   * integration.
   *
   * @var string
   */
  public $webClientId;

  /**
   * Output only. The Google OAuth 2.0 client ID of the web application or
   * service that recorded the data. This is the client ID used during the
   * Google OAuth flow to obtain user credentials. This field is system-
   * populated when the data is uploaded from Google Web API.
   *
   * @param string $googleWebClientId
   */
  public function setGoogleWebClientId($googleWebClientId)
  {
    $this->googleWebClientId = $googleWebClientId;
  }
  /**
   * @return string
   */
  public function getGoogleWebClientId()
  {
    return $this->googleWebClientId;
  }
  /**
   * Output only. A unique identifier for the mobile application that was the
   * source of the data. This is typically the application's package name on
   * Android (e.g., `com.google.fitbit`) or the bundle ID on iOS. This field is
   * informational and helps trace data origin. This field is system-populated
   * when the data is uploaded from the Fitbit mobile application, Health
   * Connect or Health Kit.
   *
   * @param string $packageName
   */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /**
   * @return string
   */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /**
   * Output only. The client ID of the application that recorded the data. This
   * ID is a legacy Fitbit API client ID, which is different from a Google OAuth
   * client ID. Example format: `ABC123`. This field is system-populated and
   * used for tracing data from legacy Fitbit API integrations. This field is
   * system-populated when the data is uploaded from a legacy Fitbit API
   * integration.
   *
   * @param string $webClientId
   */
  public function setWebClientId($webClientId)
  {
    $this->webClientId = $webClientId;
  }
  /**
   * @return string
   */
  public function getWebClientId()
  {
    return $this->webClientId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Application::class, 'Google_Service_GoogleHealthAPI_Application');
