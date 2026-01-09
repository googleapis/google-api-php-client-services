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

namespace Google\Service\DatabaseMigrationService;

class PostgresToSqlServerConfig extends \Google\Model
{
  protected $postgresSourceConfigType = PostgresSourceConfig::class;
  protected $postgresSourceConfigDataType = '';
  protected $sqlserverDestinationConfigType = SqlServerDestinationConfig::class;
  protected $sqlserverDestinationConfigDataType = '';

  /**
   * Optional. Configuration for PostgreSQL source.
   *
   * @param PostgresSourceConfig $postgresSourceConfig
   */
  public function setPostgresSourceConfig(PostgresSourceConfig $postgresSourceConfig)
  {
    $this->postgresSourceConfig = $postgresSourceConfig;
  }
  /**
   * @return PostgresSourceConfig
   */
  public function getPostgresSourceConfig()
  {
    return $this->postgresSourceConfig;
  }
  /**
   * Optional. Configuration for SQL Server destination.
   *
   * @param SqlServerDestinationConfig $sqlserverDestinationConfig
   */
  public function setSqlserverDestinationConfig(SqlServerDestinationConfig $sqlserverDestinationConfig)
  {
    $this->sqlserverDestinationConfig = $sqlserverDestinationConfig;
  }
  /**
   * @return SqlServerDestinationConfig
   */
  public function getSqlserverDestinationConfig()
  {
    return $this->sqlserverDestinationConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PostgresToSqlServerConfig::class, 'Google_Service_DatabaseMigrationService_PostgresToSqlServerConfig');
