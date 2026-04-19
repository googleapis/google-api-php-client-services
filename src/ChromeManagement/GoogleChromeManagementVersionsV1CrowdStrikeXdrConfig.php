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

class GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig extends \Google\Model
{
  /**
   * Required. Input only. API key to use on the ingestion API.
   *
   * @var string
   */
  public $apiKey;
  /**
   * Required. Host to identify the customer specific server to receive the
   * events.
   *
   * @var string
   */
  public $host;
  protected $xdrSettingsType = GoogleChromeManagementVersionsV1XdrSettings::class;
  protected $xdrSettingsDataType = '';

  /**
   * Required. Input only. API key to use on the ingestion API.
   *
   * @param string $apiKey
   */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /**
   * @return string
   */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /**
   * Required. Host to identify the customer specific server to receive the
   * events.
   *
   * @param string $host
   */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /**
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }
  /**
   * Required. The XDR settings for the CrowdStrike XDR config.
   *
   * @param GoogleChromeManagementVersionsV1XdrSettings $xdrSettings
   */
  public function setXdrSettings(GoogleChromeManagementVersionsV1XdrSettings $xdrSettings)
  {
    $this->xdrSettings = $xdrSettings;
  }
  /**
   * @return GoogleChromeManagementVersionsV1XdrSettings
   */
  public function getXdrSettings()
  {
    return $this->xdrSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig');
