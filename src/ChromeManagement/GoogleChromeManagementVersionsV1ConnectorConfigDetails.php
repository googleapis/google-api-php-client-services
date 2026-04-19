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

class GoogleChromeManagementVersionsV1ConnectorConfigDetails extends \Google\Model
{
  protected $crowdStrikeConfigType = GoogleChromeManagementVersionsV1CrowdStrikeConfig::class;
  protected $crowdStrikeConfigDataType = '';
  protected $crowdStrikeFalconNextGenConfigType = GoogleChromeManagementVersionsV1CrowdStrikeFalconNextGenConfig::class;
  protected $crowdStrikeFalconNextGenConfigDataType = '';
  protected $crowdStrikeXdrConfigType = GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig::class;
  protected $crowdStrikeXdrConfigDataType = '';
  protected $deviceTrustConfigType = GoogleChromeManagementVersionsV1DeviceTrustConfig::class;
  protected $deviceTrustConfigDataType = '';
  protected $googleSecOpsConfigType = GoogleChromeManagementVersionsV1GoogleSecOpsConfig::class;
  protected $googleSecOpsConfigDataType = '';
  protected $paloAltoNetworksConfigType = GoogleChromeManagementVersionsV1PaloAltoNetworksConfig::class;
  protected $paloAltoNetworksConfigDataType = '';
  protected $pubSubConfigType = GoogleChromeManagementVersionsV1PubSubConfig::class;
  protected $pubSubConfigDataType = '';
  protected $pubSubXdrConfigType = GoogleChromeManagementVersionsV1PubSubXdrConfig::class;
  protected $pubSubXdrConfigDataType = '';
  protected $splunkConfigType = GoogleChromeManagementVersionsV1SplunkConfig::class;
  protected $splunkConfigDataType = '';

  /**
   * CrowdStrike connector config.
   *
   * @param GoogleChromeManagementVersionsV1CrowdStrikeConfig $crowdStrikeConfig
   */
  public function setCrowdStrikeConfig(GoogleChromeManagementVersionsV1CrowdStrikeConfig $crowdStrikeConfig)
  {
    $this->crowdStrikeConfig = $crowdStrikeConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1CrowdStrikeConfig
   */
  public function getCrowdStrikeConfig()
  {
    return $this->crowdStrikeConfig;
  }
  /**
   * CrowdStrike Falcon Next Gen connector config.
   *
   * @param GoogleChromeManagementVersionsV1CrowdStrikeFalconNextGenConfig $crowdStrikeFalconNextGenConfig
   */
  public function setCrowdStrikeFalconNextGenConfig(GoogleChromeManagementVersionsV1CrowdStrikeFalconNextGenConfig $crowdStrikeFalconNextGenConfig)
  {
    $this->crowdStrikeFalconNextGenConfig = $crowdStrikeFalconNextGenConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1CrowdStrikeFalconNextGenConfig
   */
  public function getCrowdStrikeFalconNextGenConfig()
  {
    return $this->crowdStrikeFalconNextGenConfig;
  }
  /**
   * CrowdStrike XDR connector config.
   *
   * @param GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig $crowdStrikeXdrConfig
   */
  public function setCrowdStrikeXdrConfig(GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig $crowdStrikeXdrConfig)
  {
    $this->crowdStrikeXdrConfig = $crowdStrikeXdrConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1CrowdStrikeXdrConfig
   */
  public function getCrowdStrikeXdrConfig()
  {
    return $this->crowdStrikeXdrConfig;
  }
  /**
   * Device trust connector config.
   *
   * @param GoogleChromeManagementVersionsV1DeviceTrustConfig $deviceTrustConfig
   */
  public function setDeviceTrustConfig(GoogleChromeManagementVersionsV1DeviceTrustConfig $deviceTrustConfig)
  {
    $this->deviceTrustConfig = $deviceTrustConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1DeviceTrustConfig
   */
  public function getDeviceTrustConfig()
  {
    return $this->deviceTrustConfig;
  }
  /**
   * Google SecOps connector config.
   *
   * @param GoogleChromeManagementVersionsV1GoogleSecOpsConfig $googleSecOpsConfig
   */
  public function setGoogleSecOpsConfig(GoogleChromeManagementVersionsV1GoogleSecOpsConfig $googleSecOpsConfig)
  {
    $this->googleSecOpsConfig = $googleSecOpsConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1GoogleSecOpsConfig
   */
  public function getGoogleSecOpsConfig()
  {
    return $this->googleSecOpsConfig;
  }
  /**
   * Palo Alto Networks connector config.
   *
   * @param GoogleChromeManagementVersionsV1PaloAltoNetworksConfig $paloAltoNetworksConfig
   */
  public function setPaloAltoNetworksConfig(GoogleChromeManagementVersionsV1PaloAltoNetworksConfig $paloAltoNetworksConfig)
  {
    $this->paloAltoNetworksConfig = $paloAltoNetworksConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1PaloAltoNetworksConfig
   */
  public function getPaloAltoNetworksConfig()
  {
    return $this->paloAltoNetworksConfig;
  }
  /**
   * Pub/Sub connector config.
   *
   * @param GoogleChromeManagementVersionsV1PubSubConfig $pubSubConfig
   */
  public function setPubSubConfig(GoogleChromeManagementVersionsV1PubSubConfig $pubSubConfig)
  {
    $this->pubSubConfig = $pubSubConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1PubSubConfig
   */
  public function getPubSubConfig()
  {
    return $this->pubSubConfig;
  }
  /**
   * Pub/Sub XDR connector config.
   *
   * @param GoogleChromeManagementVersionsV1PubSubXdrConfig $pubSubXdrConfig
   */
  public function setPubSubXdrConfig(GoogleChromeManagementVersionsV1PubSubXdrConfig $pubSubXdrConfig)
  {
    $this->pubSubXdrConfig = $pubSubXdrConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1PubSubXdrConfig
   */
  public function getPubSubXdrConfig()
  {
    return $this->pubSubXdrConfig;
  }
  /**
   * Splunk connector config.
   *
   * @param GoogleChromeManagementVersionsV1SplunkConfig $splunkConfig
   */
  public function setSplunkConfig(GoogleChromeManagementVersionsV1SplunkConfig $splunkConfig)
  {
    $this->splunkConfig = $splunkConfig;
  }
  /**
   * @return GoogleChromeManagementVersionsV1SplunkConfig
   */
  public function getSplunkConfig()
  {
    return $this->splunkConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ConnectorConfigDetails::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ConnectorConfigDetails');
