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

class Deployment extends \Google\Model
{
  /**
   * The default value. This value is used if the state is omitted.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The deployment is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The deployment is healthy.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The deployment is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The deployment is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The deployment has encountered an unexpected error.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Unspecified workload type
   */
  public const WORKLOAD_TYPE_WORKLOAD_TYPE_UNSPECIFIED = 'WORKLOAD_TYPE_UNSPECIFIED';
  /**
   * SAP S/4HANA workload type
   */
  public const WORKLOAD_TYPE_SAP_S4 = 'SAP_S4';
  /**
   * SQL Server workload type
   */
  public const WORKLOAD_TYPE_SQL_SERVER = 'SQL_SERVER';
  /**
   * Oracle workload type
   */
  public const WORKLOAD_TYPE_ORACLE = 'ORACLE';
  /**
   * Output only. [Output only] Create time stamp
   *
   * @var string
   */
  public $createTime;
  /**
   * Description of the Deployment
   *
   * @var string
   */
  public $description;
  /**
   * The name of deployment resource. The format will be
   * 'projects/{project_id}/locations/{location_id}/deployments/{deployment_id}'
   *
   * @var string
   */
  public $name;
  protected $sapSystemS4ConfigType = SapSystemS4Config::class;
  protected $sapSystemS4ConfigDataType = '';
  /**
   * User-specified Service Account (SA) credentials to be used for cloud build
   * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}` The default
   * Cloud Build SA will be used initially if this field is not set during
   * deployment creation
   *
   * @var string
   */
  public $serviceAccount;
  protected $sqlServerWorkloadType = SqlServerWorkload::class;
  protected $sqlServerWorkloadDataType = '';
  /**
   * Output only. Current state of the deployment.
   *
   * @var string
   */
  public $state;
  protected $terraformVariablesType = TerraformVariable::class;
  protected $terraformVariablesDataType = 'map';
  /**
   * Output only. [Output only] Update time stamp
   *
   * @var string
   */
  public $updateTime;
  /**
   * Optional. The user-specified Cloud Build worker pool resource in which the
   * Cloud Build job will execute. Format:
   * `projects/{project}/locations/{location}/workerPools/{workerPoolId}`. If
   * this field is unspecified, the default Cloud Build worker pool will be
   * used.
   *
   * @var string
   */
  public $workerPool;
  /**
   * Optional. Workload type of the deployment
   *
   * @var string
   */
  public $workloadType;

  /**
   * Output only. [Output only] Create time stamp
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Description of the Deployment
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The name of deployment resource. The format will be
   * 'projects/{project_id}/locations/{location_id}/deployments/{deployment_id}'
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
   * SAP system workload input
   *
   * @param SapSystemS4Config $sapSystemS4Config
   */
  public function setSapSystemS4Config(SapSystemS4Config $sapSystemS4Config)
  {
    $this->sapSystemS4Config = $sapSystemS4Config;
  }
  /**
   * @return SapSystemS4Config
   */
  public function getSapSystemS4Config()
  {
    return $this->sapSystemS4Config;
  }
  /**
   * User-specified Service Account (SA) credentials to be used for cloud build
   * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}` The default
   * Cloud Build SA will be used initially if this field is not set during
   * deployment creation
   *
   * @param string $serviceAccount
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /**
   * MS SQL workload input
   *
   * @param SqlServerWorkload $sqlServerWorkload
   */
  public function setSqlServerWorkload(SqlServerWorkload $sqlServerWorkload)
  {
    $this->sqlServerWorkload = $sqlServerWorkload;
  }
  /**
   * @return SqlServerWorkload
   */
  public function getSqlServerWorkload()
  {
    return $this->sqlServerWorkload;
  }
  /**
   * Output only. Current state of the deployment.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, UPDATING, DELETING,
   * FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. terraform_variables represents all the Terraform variables for
   * the deployment workload. The key is the name of the Terraform variable, and
   * the value is the TerraformVariable. For example: { "project_id": {
   * "input_value": { "string_value": "my-project-id" } }, "zone": {
   * "input_value": { "string_value": "us-central1-a" } } }
   *
   * @param TerraformVariable[] $terraformVariables
   */
  public function setTerraformVariables($terraformVariables)
  {
    $this->terraformVariables = $terraformVariables;
  }
  /**
   * @return TerraformVariable[]
   */
  public function getTerraformVariables()
  {
    return $this->terraformVariables;
  }
  /**
   * Output only. [Output only] Update time stamp
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Optional. The user-specified Cloud Build worker pool resource in which the
   * Cloud Build job will execute. Format:
   * `projects/{project}/locations/{location}/workerPools/{workerPoolId}`. If
   * this field is unspecified, the default Cloud Build worker pool will be
   * used.
   *
   * @param string $workerPool
   */
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /**
   * @return string
   */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
  /**
   * Optional. Workload type of the deployment
   *
   * Accepted values: WORKLOAD_TYPE_UNSPECIFIED, SAP_S4, SQL_SERVER, ORACLE
   *
   * @param self::WORKLOAD_TYPE_* $workloadType
   */
  public function setWorkloadType($workloadType)
  {
    $this->workloadType = $workloadType;
  }
  /**
   * @return self::WORKLOAD_TYPE_*
   */
  public function getWorkloadType()
  {
    return $this->workloadType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Deployment::class, 'Google_Service_WorkloadManager_Deployment');
