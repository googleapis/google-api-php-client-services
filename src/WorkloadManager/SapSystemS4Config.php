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

namespace Google\Service\WorkloadManager;

class SapSystemS4Config extends \Google\Model
{
  public const DEPLOYMENT_MODEL_DEPLOYMENT_MODEL_UNSPECIFIED = 'DEPLOYMENT_MODEL_UNSPECIFIED';
  public const DEPLOYMENT_MODEL_DISTRIBUTED = 'DISTRIBUTED';
  public const DEPLOYMENT_MODEL_DISTRIBUTED_HA = 'DISTRIBUTED_HA';
  /**
   * Unspecified environment type
   */
  public const ENVIRONMENT_TYPE_ENVIRONMENT_TYPE_UNSPECIFIED = 'ENVIRONMENT_TYPE_UNSPECIFIED';
  /**
   * Non-production environment type
   */
  public const ENVIRONMENT_TYPE_NON_PRODUCTION = 'NON_PRODUCTION';
  /**
   * Production environment type
   */
  public const ENVIRONMENT_TYPE_PRODUCTION = 'PRODUCTION';
  public const SCALING_METHOD_SCALE_METHOD_UNSPECIFIED = 'SCALE_METHOD_UNSPECIFIED';
  /**
   * Scale up: Increases the size of a physical machine by increasing the amount
   * of RAM and CPU available for processing
   */
  public const SCALING_METHOD_SCALE_UP = 'SCALE_UP';
  /**
   * Scale out: Combines multiple independent computers into one system
   */
  public const SCALING_METHOD_SCALE_OUT = 'SCALE_OUT';
  public const VERSION_VERSION_UNSPECIFIED = 'VERSION_UNSPECIFIED';
  public const VERSION_S4_HANA_2021 = 'S4_HANA_2021';
  public const VERSION_S4_HANA_2022 = 'S4_HANA_2022';
  public const VERSION_S4_HANA_2023 = 'S4_HANA_2023';
  /**
   * @var bool
   */
  public $allowStoppingForUpdate;
  /**
   * Ansible runner service account - let custoemrs bring their own SA for
   * Ansible runner
   *
   * @var string
   */
  public $ansibleRunnerServiceAccount;
  protected $appType = AppDetails::class;
  protected $appDataType = '';
  protected $databaseType = DatabaseDetails::class;
  protected $databaseDataType = '';
  /**
   * Required. two model non-HA and HA supported
   *
   * @var string
   */
  public $deploymentModel;
  /**
   * Required. deployment environment
   *
   * @var string
   */
  public $environmentType;
  /**
   * the project that infrastructure deployed, current only support the same
   * project where the deployment resource exist.
   *
   * @var string
   */
  public $gcpProjectId;
  protected $locationType = LocationDetails::class;
  protected $locationDataType = '';
  /**
   * Required. media_bucket_name
   *
   * @var string
   */
  public $mediaBucketName;
  /**
   * Optional. sap_boot_disk_image
   *
   * @var string
   */
  public $sapBootDiskImage;
  /**
   * Required. support scale up and scale out
   *
   * @var string
   */
  public $scalingMethod;
  /**
   * Required. sap hana version
   *
   * @var string
   */
  public $version;
  /**
   * vm_prefix
   *
   * @var string
   */
  public $vmPrefix;

  /**
   * @param bool $allowStoppingForUpdate
   */
  public function setAllowStoppingForUpdate($allowStoppingForUpdate)
  {
    $this->allowStoppingForUpdate = $allowStoppingForUpdate;
  }
  /**
   * @return bool
   */
  public function getAllowStoppingForUpdate()
  {
    return $this->allowStoppingForUpdate;
  }
  /**
   * Ansible runner service account - let custoemrs bring their own SA for
   * Ansible runner
   *
   * @param string $ansibleRunnerServiceAccount
   */
  public function setAnsibleRunnerServiceAccount($ansibleRunnerServiceAccount)
  {
    $this->ansibleRunnerServiceAccount = $ansibleRunnerServiceAccount;
  }
  /**
   * @return string
   */
  public function getAnsibleRunnerServiceAccount()
  {
    return $this->ansibleRunnerServiceAccount;
  }
  /**
   * instance details
   *
   * @param AppDetails $app
   */
  public function setApp(AppDetails $app)
  {
    $this->app = $app;
  }
  /**
   * @return AppDetails
   */
  public function getApp()
  {
    return $this->app;
  }
  /**
   * database details
   *
   * @param DatabaseDetails $database
   */
  public function setDatabase(DatabaseDetails $database)
  {
    $this->database = $database;
  }
  /**
   * @return DatabaseDetails
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * Required. two model non-HA and HA supported
   *
   * Accepted values: DEPLOYMENT_MODEL_UNSPECIFIED, DISTRIBUTED, DISTRIBUTED_HA
   *
   * @param self::DEPLOYMENT_MODEL_* $deploymentModel
   */
  public function setDeploymentModel($deploymentModel)
  {
    $this->deploymentModel = $deploymentModel;
  }
  /**
   * @return self::DEPLOYMENT_MODEL_*
   */
  public function getDeploymentModel()
  {
    return $this->deploymentModel;
  }
  /**
   * Required. deployment environment
   *
   * Accepted values: ENVIRONMENT_TYPE_UNSPECIFIED, NON_PRODUCTION, PRODUCTION
   *
   * @param self::ENVIRONMENT_TYPE_* $environmentType
   */
  public function setEnvironmentType($environmentType)
  {
    $this->environmentType = $environmentType;
  }
  /**
   * @return self::ENVIRONMENT_TYPE_*
   */
  public function getEnvironmentType()
  {
    return $this->environmentType;
  }
  /**
   * the project that infrastructure deployed, current only support the same
   * project where the deployment resource exist.
   *
   * @param string $gcpProjectId
   */
  public function setGcpProjectId($gcpProjectId)
  {
    $this->gcpProjectId = $gcpProjectId;
  }
  /**
   * @return string
   */
  public function getGcpProjectId()
  {
    return $this->gcpProjectId;
  }
  /**
   * database details
   *
   * @param LocationDetails $location
   */
  public function setLocation(LocationDetails $location)
  {
    $this->location = $location;
  }
  /**
   * @return LocationDetails
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Required. media_bucket_name
   *
   * @param string $mediaBucketName
   */
  public function setMediaBucketName($mediaBucketName)
  {
    $this->mediaBucketName = $mediaBucketName;
  }
  /**
   * @return string
   */
  public function getMediaBucketName()
  {
    return $this->mediaBucketName;
  }
  /**
   * Optional. sap_boot_disk_image
   *
   * @param string $sapBootDiskImage
   */
  public function setSapBootDiskImage($sapBootDiskImage)
  {
    $this->sapBootDiskImage = $sapBootDiskImage;
  }
  /**
   * @return string
   */
  public function getSapBootDiskImage()
  {
    return $this->sapBootDiskImage;
  }
  /**
   * Required. support scale up and scale out
   *
   * Accepted values: SCALE_METHOD_UNSPECIFIED, SCALE_UP, SCALE_OUT
   *
   * @param self::SCALING_METHOD_* $scalingMethod
   */
  public function setScalingMethod($scalingMethod)
  {
    $this->scalingMethod = $scalingMethod;
  }
  /**
   * @return self::SCALING_METHOD_*
   */
  public function getScalingMethod()
  {
    return $this->scalingMethod;
  }
  /**
   * Required. sap hana version
   *
   * Accepted values: VERSION_UNSPECIFIED, S4_HANA_2021, S4_HANA_2022,
   * S4_HANA_2023
   *
   * @param self::VERSION_* $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return self::VERSION_*
   */
  public function getVersion()
  {
    return $this->version;
  }
  /**
   * vm_prefix
   *
   * @param string $vmPrefix
   */
  public function setVmPrefix($vmPrefix)
  {
    $this->vmPrefix = $vmPrefix;
  }
  /**
   * @return string
   */
  public function getVmPrefix()
  {
    return $this->vmPrefix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SapSystemS4Config::class, 'Google_Service_WorkloadManager_SapSystemS4Config');
