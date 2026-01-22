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

namespace Google\Service\DataprocMetastore;

class MigrationExecution extends \Google\Model
{
  /**
   * The phase of the migration execution is unknown.
   */
  public const PHASE_PHASE_UNSPECIFIED = 'PHASE_UNSPECIFIED';
  /**
   * Replication phase refers to the migration phase when Dataproc Metastore is
   * running a pipeline to replicate changes in the customer database to its
   * backend database. During this phase, Dataproc Metastore uses the customer
   * database as the hive metastore backend database.
   */
  public const PHASE_REPLICATION = 'REPLICATION';
  /**
   * Cutover phase refers to the migration phase when Dataproc Metastore
   * switches to using its own backend database. Migration enters this phase
   * when customer is done migrating all their clusters/workloads to Dataproc
   * Metastore and triggers CompleteMigration.
   */
  public const PHASE_CUTOVER = 'CUTOVER';
  /**
   * The state of the migration execution is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The migration execution is starting.
   */
  public const STATE_STARTING = 'STARTING';
  /**
   * The migration execution is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The migration execution is in the process of being cancelled.
   */
  public const STATE_CANCELLING = 'CANCELLING';
  /**
   * The migration execution is awaiting user action.
   */
  public const STATE_AWAITING_USER_ACTION = 'AWAITING_USER_ACTION';
  /**
   * The migration execution has completed successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The migration execution has failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The migration execution is cancelled.
   */
  public const STATE_CANCELLED = 'CANCELLED';
  /**
   * The migration execution is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $cloudSqlMigrationConfigType = CloudSQLMigrationConfig::class;
  protected $cloudSqlMigrationConfigDataType = '';
  /**
   * Output only. The time when the migration execution was started.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The time when the migration execution finished.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The relative resource name of the migration execution, in the
   * following form: projects/{project_number}/locations/{location_id}/services/
   * {service_id}/migrationExecutions/{migration_execution_id}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current phase of the migration execution.
   *
   * @var string
   */
  public $phase;
  /**
   * Output only. The current state of the migration execution.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Additional information about the current state of the
   * migration execution.
   *
   * @var string
   */
  public $stateMessage;

  /**
   * Configuration information specific to migrating from self-managed hive
   * metastore on Google Cloud using Cloud SQL as the backend database to
   * Dataproc Metastore.
   *
   * @param CloudSQLMigrationConfig $cloudSqlMigrationConfig
   */
  public function setCloudSqlMigrationConfig(CloudSQLMigrationConfig $cloudSqlMigrationConfig)
  {
    $this->cloudSqlMigrationConfig = $cloudSqlMigrationConfig;
  }
  /**
   * @return CloudSQLMigrationConfig
   */
  public function getCloudSqlMigrationConfig()
  {
    return $this->cloudSqlMigrationConfig;
  }
  /**
   * Output only. The time when the migration execution was started.
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
   * Output only. The time when the migration execution finished.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. The relative resource name of the migration execution, in the
   * following form: projects/{project_number}/locations/{location_id}/services/
   * {service_id}/migrationExecutions/{migration_execution_id}
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
   * Output only. The current phase of the migration execution.
   *
   * Accepted values: PHASE_UNSPECIFIED, REPLICATION, CUTOVER
   *
   * @param self::PHASE_* $phase
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return self::PHASE_*
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * Output only. The current state of the migration execution.
   *
   * Accepted values: STATE_UNSPECIFIED, STARTING, RUNNING, CANCELLING,
   * AWAITING_USER_ACTION, SUCCEEDED, FAILED, CANCELLED, DELETING
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
   * Output only. Additional information about the current state of the
   * migration execution.
   *
   * @param string $stateMessage
   */
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /**
   * @return string
   */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrationExecution::class, 'Google_Service_DataprocMetastore_MigrationExecution');
