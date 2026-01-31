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

namespace Google\Service\SQLAdmin;

class SqlInstancesRestoreBackupMcpRequest extends \Google\Model
{
  /**
   * Required. The identifier of the backup to restore. This will be one of the
   * following: 1. An int64 containing a backup_run_id. 2. A backup name of the
   * format 'projects/{project}/backups/{backup-uid}'. 3. A backupDR name of the
   * format 'projects/{project}/locations/{location}/backupVaults/{backupvault}/
   * dataSources/{datasource}/backups/{backup-uid}'.
   *
   * @var string
   */
  public $backupId;
  /**
   * Optional. The Cloud SQL instance ID of the source instance containing the
   * backup. Only necessary if the backup_id is a backup_run_id.
   *
   * @var string
   */
  public $sourceInstance;
  /**
   * Required. The project ID of the source instance containing the backup.
   *
   * @var string
   */
  public $sourceProject;

  /**
   * Required. The identifier of the backup to restore. This will be one of the
   * following: 1. An int64 containing a backup_run_id. 2. A backup name of the
   * format 'projects/{project}/backups/{backup-uid}'. 3. A backupDR name of the
   * format 'projects/{project}/locations/{location}/backupVaults/{backupvault}/
   * dataSources/{datasource}/backups/{backup-uid}'.
   *
   * @param string $backupId
   */
  public function setBackupId($backupId)
  {
    $this->backupId = $backupId;
  }
  /**
   * @return string
   */
  public function getBackupId()
  {
    return $this->backupId;
  }
  /**
   * Optional. The Cloud SQL instance ID of the source instance containing the
   * backup. Only necessary if the backup_id is a backup_run_id.
   *
   * @param string $sourceInstance
   */
  public function setSourceInstance($sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  /**
   * @return string
   */
  public function getSourceInstance()
  {
    return $this->sourceInstance;
  }
  /**
   * Required. The project ID of the source instance containing the backup.
   *
   * @param string $sourceProject
   */
  public function setSourceProject($sourceProject)
  {
    $this->sourceProject = $sourceProject;
  }
  /**
   * @return string
   */
  public function getSourceProject()
  {
    return $this->sourceProject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlInstancesRestoreBackupMcpRequest::class, 'Google_Service_SQLAdmin_SqlInstancesRestoreBackupMcpRequest');
