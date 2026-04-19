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

class GoogleChromeManagementVersionsV1PaloAltoNetworksConfig extends \Google\Model
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
  protected $reportingSettingsType = GoogleChromeManagementVersionsV1ReportingSettings::class;
  protected $reportingSettingsDataType = '';

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
   * Required. The reporting settings for the Palo Alto Networks config.
   *
   * @param GoogleChromeManagementVersionsV1ReportingSettings $reportingSettings
   */
  public function setReportingSettings(GoogleChromeManagementVersionsV1ReportingSettings $reportingSettings)
  {
    $this->reportingSettings = $reportingSettings;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ReportingSettings
   */
  public function getReportingSettings()
  {
    return $this->reportingSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1PaloAltoNetworksConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1PaloAltoNetworksConfig');
