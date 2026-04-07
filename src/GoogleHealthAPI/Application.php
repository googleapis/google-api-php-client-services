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
   * Output only. Captures the client ID of the entity that recorded the data.
   *
   * @var string
   */
  public $googleWebClientId;
  /**
   * Output only. A unique ID from an external data source. A unique identifier
   * of the mobile application, e.g. `com.google.fitbit`
   *
   * @var string
   */
  public $packageName;
  /**
   * Output only. Captures the client ID of the web application that recorded
   * the data.
   *
   * @var string
   */
  public $webClientId;

  /**
   * Output only. Captures the client ID of the entity that recorded the data.
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
   * Output only. A unique ID from an external data source. A unique identifier
   * of the mobile application, e.g. `com.google.fitbit`
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
   * Output only. Captures the client ID of the web application that recorded
   * the data.
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
