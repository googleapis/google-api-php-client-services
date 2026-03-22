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

namespace Google\Service\NetAppFiles;

class RestoreParameters extends \Google\Model
{
  /**
   * Full name of the backup resource. Format for standard backup: projects/{pro
   * ject}/locations/{location}/backupVaults/{backup_vault_id}/backups/{backup_i
   * d} Format for BackupDR backup: projects/{project}/locations/{location}/back
   * upVaults/{backup_vault}/dataSources/{data_source}/backups/{backup}
   *
   * @var string
   */
  public $sourceBackup;
  /**
   * Full name of the snapshot resource. Format: projects/{project}/locations/{l
   * ocation}/volumes/{volume}/snapshots/{snapshot}
   *
   * @var string
   */
  public $sourceSnapshot;

  /**
   * Full name of the backup resource. Format for standard backup: projects/{pro
   * ject}/locations/{location}/backupVaults/{backup_vault_id}/backups/{backup_i
   * d} Format for BackupDR backup: projects/{project}/locations/{location}/back
   * upVaults/{backup_vault}/dataSources/{data_source}/backups/{backup}
   *
   * @param string $sourceBackup
   */
  public function setSourceBackup($sourceBackup)
  {
    $this->sourceBackup = $sourceBackup;
  }
  /**
   * @return string
   */
  public function getSourceBackup()
  {
    return $this->sourceBackup;
  }
  /**
   * Full name of the snapshot resource. Format: projects/{project}/locations/{l
   * ocation}/volumes/{volume}/snapshots/{snapshot}
   *
   * @param string $sourceSnapshot
   */
  public function setSourceSnapshot($sourceSnapshot)
  {
    $this->sourceSnapshot = $sourceSnapshot;
  }
  /**
   * @return string
   */
  public function getSourceSnapshot()
  {
    return $this->sourceSnapshot;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreParameters::class, 'Google_Service_NetAppFiles_RestoreParameters');
