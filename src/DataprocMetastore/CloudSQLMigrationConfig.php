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

class CloudSQLMigrationConfig extends \Google\Model
{
  protected $cdcConfigType = CdcConfig::class;
  protected $cdcConfigDataType = '';
  protected $cloudSqlConnectionConfigType = CloudSQLConnectionConfig::class;
  protected $cloudSqlConnectionConfigDataType = '';

  /**
   * Required. Configuration information to start the Change Data Capture (CDC)
   * streams from customer database to backend database of Dataproc Metastore.
   * Dataproc Metastore switches to using its backend database after the cutover
   * phase of migration.
   *
   * @param CdcConfig $cdcConfig
   */
  public function setCdcConfig(CdcConfig $cdcConfig)
  {
    $this->cdcConfig = $cdcConfig;
  }
  /**
   * @return CdcConfig
   */
  public function getCdcConfig()
  {
    return $this->cdcConfig;
  }
  /**
   * Required. Configuration information to establish customer database
   * connection before the cutover phase of migration
   *
   * @param CloudSQLConnectionConfig $cloudSqlConnectionConfig
   */
  public function setCloudSqlConnectionConfig(CloudSQLConnectionConfig $cloudSqlConnectionConfig)
  {
    $this->cloudSqlConnectionConfig = $cloudSqlConnectionConfig;
  }
  /**
   * @return CloudSQLConnectionConfig
   */
  public function getCloudSqlConnectionConfig()
  {
    return $this->cloudSqlConnectionConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudSQLMigrationConfig::class, 'Google_Service_DataprocMetastore_CloudSQLMigrationConfig');
