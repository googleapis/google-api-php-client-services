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

class GoogleChromeManagementVersionsV1ConnectorConfig extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const TYPE_CONNECTOR_TYPE_UNSPECIFIED = 'CONNECTOR_TYPE_UNSPECIFIED';
  /**
   * Reporting connector.
   */
  public const TYPE_REPORTING = 'REPORTING';
  /**
   * Device trust connector.
   */
  public const TYPE_DEVICE_TRUST = 'DEVICE_TRUST';
  /**
   * XDR connector.
   */
  public const TYPE_XDR = 'XDR';
  /**
   * Authentication connector.
   */
  public const TYPE_IDENTITY_BASED_ENROLLMENT = 'IDENTITY_BASED_ENROLLMENT';
  /**
   * Certificate authority connector. Not yet supported in the API.
   */
  public const TYPE_CERTIFICATE_AUTHORITY = 'CERTIFICATE_AUTHORITY';
  /**
   * Root certificate connector.
   */
  public const TYPE_ROOT_STORE = 'ROOT_STORE';
  /**
   * Content analysis connector.
   */
  public const TYPE_CONTENT_ANALYSIS = 'CONTENT_ANALYSIS';
  /**
   * Enterprise proxy connector.
   */
  public const TYPE_ENTERPRISE_PROXY = 'ENTERPRISE_PROXY';
  protected $detailsType = GoogleChromeManagementVersionsV1ConnectorConfigDetails::class;
  protected $detailsDataType = '';
  /**
   * Required. The display name of the config. Must be at most 100 characters.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. Format:
   * customers/{customer}/connectorConfigs/{connector_config}
   *
   * @var string
   */
  public $name;
  protected $statusType = GoogleChromeManagementVersionsV1ConnectorConfigStatus::class;
  protected $statusDataType = '';
  /**
   * Required. The type of the connector.
   *
   * @var string
   */
  public $type;

  /**
   * Required. The details of the connector config.
   *
   * @param GoogleChromeManagementVersionsV1ConnectorConfigDetails $details
   */
  public function setDetails(GoogleChromeManagementVersionsV1ConnectorConfigDetails $details)
  {
    $this->details = $details;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ConnectorConfigDetails
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * Required. The display name of the config. Must be at most 100 characters.
   *
   * @param string $displayName
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
   * Identifier. Format:
   * customers/{customer}/connectorConfigs/{connector_config}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The status of the connector config.
   *
   * @param GoogleChromeManagementVersionsV1ConnectorConfigStatus $status
   */
  public function setStatus(GoogleChromeManagementVersionsV1ConnectorConfigStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ConnectorConfigStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Required. The type of the connector.
   *
   * Accepted values: CONNECTOR_TYPE_UNSPECIFIED, REPORTING, DEVICE_TRUST, XDR,
   * IDENTITY_BASED_ENROLLMENT, CERTIFICATE_AUTHORITY, ROOT_STORE,
   * CONTENT_ANALYSIS, ENTERPRISE_PROXY
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ConnectorConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ConnectorConfig');
