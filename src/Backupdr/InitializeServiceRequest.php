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

namespace Google\Service\Backupdr;

class InitializeServiceRequest extends \Google\Model
{
  /**
   * Optional. The location where the BackupPlan will be created. This field is
   * required for multi-region BackupVaults and is optional for regional
   * BackupVaults. It is useful when creating a Backup Vault in a multi-region,
   * allowing the BackupPlan to reside in a specific region within that multi-
   * region. If this field is not provided, the BackupPlan will be created in
   * the same location as specified in the `name` field.
   *
   * @var string
   */
  public $backupPlanLocation;
  protected $cloudSqlInstanceInitializationConfigType = CloudSqlInstanceInitializationConfig::class;
  protected $cloudSqlInstanceInitializationConfigDataType = '';
  /**
   * Optional. An optional request ID to identify requests. Specify a unique
   * request ID so that if you must retry your request, the server will know to
   * ignore the request if it has already been completed. The server will
   * guarantee that for at least 60 minutes since the first request. For
   * example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if original operation with the same request ID was
   * received, and if so, will ignore the second request. This prevents clients
   * from accidentally creating duplicate commitments. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   *
   * @var string
   */
  public $requestId;
  /**
   * Required. The resource type to which the default service config will be
   * applied. Examples include, "compute.googleapis.com/Instance" and
   * "storage.googleapis.com/Bucket".
   *
   * @var string
   */
  public $resourceType;
  /**
   * Optional. If set to `true`, only provisions the Backup and DR service agent
   * for the project and skips creating the default BackupVault and BackupPlan
   * resources. When set to `true`, `validate_only` must also be set to `true`.
   *
   * @var bool
   */
  public $serviceAgentOnly;
  /**
   * Optional. If set, validates the request and returns the result, but does
   * not actually run it.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Optional. The location where the BackupPlan will be created. This field is
   * required for multi-region BackupVaults and is optional for regional
   * BackupVaults. It is useful when creating a Backup Vault in a multi-region,
   * allowing the BackupPlan to reside in a specific region within that multi-
   * region. If this field is not provided, the BackupPlan will be created in
   * the same location as specified in the `name` field.
   *
   * @param string $backupPlanLocation
   */
  public function setBackupPlanLocation($backupPlanLocation)
  {
    $this->backupPlanLocation = $backupPlanLocation;
  }
  /**
   * @return string
   */
  public function getBackupPlanLocation()
  {
    return $this->backupPlanLocation;
  }
  /**
   * Optional. The configuration for initializing a Cloud SQL instance.
   *
   * @param CloudSqlInstanceInitializationConfig $cloudSqlInstanceInitializationConfig
   */
  public function setCloudSqlInstanceInitializationConfig(CloudSqlInstanceInitializationConfig $cloudSqlInstanceInitializationConfig)
  {
    $this->cloudSqlInstanceInitializationConfig = $cloudSqlInstanceInitializationConfig;
  }
  /**
   * @return CloudSqlInstanceInitializationConfig
   */
  public function getCloudSqlInstanceInitializationConfig()
  {
    return $this->cloudSqlInstanceInitializationConfig;
  }
  /**
   * Optional. An optional request ID to identify requests. Specify a unique
   * request ID so that if you must retry your request, the server will know to
   * ignore the request if it has already been completed. The server will
   * guarantee that for at least 60 minutes since the first request. For
   * example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if original operation with the same request ID was
   * received, and if so, will ignore the second request. This prevents clients
   * from accidentally creating duplicate commitments. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   *
   * @param string $requestId
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /**
   * Required. The resource type to which the default service config will be
   * applied. Examples include, "compute.googleapis.com/Instance" and
   * "storage.googleapis.com/Bucket".
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Optional. If set to `true`, only provisions the Backup and DR service agent
   * for the project and skips creating the default BackupVault and BackupPlan
   * resources. When set to `true`, `validate_only` must also be set to `true`.
   *
   * @param bool $serviceAgentOnly
   */
  public function setServiceAgentOnly($serviceAgentOnly)
  {
    $this->serviceAgentOnly = $serviceAgentOnly;
  }
  /**
   * @return bool
   */
  public function getServiceAgentOnly()
  {
    return $this->serviceAgentOnly;
  }
  /**
   * Optional. If set, validates the request and returns the result, but does
   * not actually run it.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InitializeServiceRequest::class, 'Google_Service_Backupdr_InitializeServiceRequest');
