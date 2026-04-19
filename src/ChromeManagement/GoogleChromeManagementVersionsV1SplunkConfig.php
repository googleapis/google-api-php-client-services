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

class GoogleChromeManagementVersionsV1SplunkConfig extends \Google\Model
{
  /**
   * Required. Input only. The data input's HTTP Event Collector token to use as
   * an Authorization header.
   *
   * @var string
   */
  public $hecToken;
  /**
   * Required. Host to identify the customer specific server to receive the
   * events.
   *
   * @var string
   */
  public $host;
  /**
   * Optional. The port number to use. If not set, the default Splunk port is
   * used.
   *
   * @var int
   */
  public $portNumber;
  protected $reportingSettingsType = GoogleChromeManagementVersionsV1ReportingSettings::class;
  protected $reportingSettingsDataType = '';
  /**
   * Optional. Optional source name to override the default one set in the
   * Splunk admin console.
   *
   * @var string
   */
  public $source;
  /**
   * Optional. Whether to use an unsecure HTTP scheme. Defaults to false
   * (HTTPS).
   *
   * @var bool
   */
  public $unsecureScheme;

  /**
   * Required. Input only. The data input's HTTP Event Collector token to use as
   * an Authorization header.
   *
   * @param string $hecToken
   */
  public function setHecToken($hecToken)
  {
    $this->hecToken = $hecToken;
  }
  /**
   * @return string
   */
  public function getHecToken()
  {
    return $this->hecToken;
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
   * Optional. The port number to use. If not set, the default Splunk port is
   * used.
   *
   * @param int $portNumber
   */
  public function setPortNumber($portNumber)
  {
    $this->portNumber = $portNumber;
  }
  /**
   * @return int
   */
  public function getPortNumber()
  {
    return $this->portNumber;
  }
  /**
   * Required. The reporting settings for the Splunk config.
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
  /**
   * Optional. Optional source name to override the default one set in the
   * Splunk admin console.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Optional. Whether to use an unsecure HTTP scheme. Defaults to false
   * (HTTPS).
   *
   * @param bool $unsecureScheme
   */
  public function setUnsecureScheme($unsecureScheme)
  {
    $this->unsecureScheme = $unsecureScheme;
  }
  /**
   * @return bool
   */
  public function getUnsecureScheme()
  {
    return $this->unsecureScheme;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1SplunkConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1SplunkConfig');
