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

namespace Google\Service\Datastream;

class DiscoverConnectionProfileRequest extends \Google\Model
{
  /**
   * @var ConnectionProfile
   */
  public $connectionProfile;
  protected $connectionProfileType = ConnectionProfile::class;
  protected $connectionProfileDataType = '';
  /**
   * @var string
   */
  public $connectionProfileName;
  /**
   * @var bool
   */
  public $fullHierarchy;
  /**
   * @var int
   */
  public $hierarchyDepth;
  /**
   * @var MysqlRdbms
   */
  public $mysqlRdbms;
  protected $mysqlRdbmsType = MysqlRdbms::class;
  protected $mysqlRdbmsDataType = '';
  /**
   * @var OracleRdbms
   */
  public $oracleRdbms;
  protected $oracleRdbmsType = OracleRdbms::class;
  protected $oracleRdbmsDataType = '';
  /**
   * @var PostgresqlRdbms
   */
  public $postgresqlRdbms;
  protected $postgresqlRdbmsType = PostgresqlRdbms::class;
  protected $postgresqlRdbmsDataType = '';

  /**
   * @param ConnectionProfile
   */
  public function setConnectionProfile(ConnectionProfile $connectionProfile)
  {
    $this->connectionProfile = $connectionProfile;
  }
  /**
   * @return ConnectionProfile
   */
  public function getConnectionProfile()
  {
    return $this->connectionProfile;
  }
  /**
   * @param string
   */
  public function setConnectionProfileName($connectionProfileName)
  {
    $this->connectionProfileName = $connectionProfileName;
  }
  /**
   * @return string
   */
  public function getConnectionProfileName()
  {
    return $this->connectionProfileName;
  }
  /**
   * @param bool
   */
  public function setFullHierarchy($fullHierarchy)
  {
    $this->fullHierarchy = $fullHierarchy;
  }
  /**
   * @return bool
   */
  public function getFullHierarchy()
  {
    return $this->fullHierarchy;
  }
  /**
   * @param int
   */
  public function setHierarchyDepth($hierarchyDepth)
  {
    $this->hierarchyDepth = $hierarchyDepth;
  }
  /**
   * @return int
   */
  public function getHierarchyDepth()
  {
    return $this->hierarchyDepth;
  }
  /**
   * @param MysqlRdbms
   */
  public function setMysqlRdbms(MysqlRdbms $mysqlRdbms)
  {
    $this->mysqlRdbms = $mysqlRdbms;
  }
  /**
   * @return MysqlRdbms
   */
  public function getMysqlRdbms()
  {
    return $this->mysqlRdbms;
  }
  /**
   * @param OracleRdbms
   */
  public function setOracleRdbms(OracleRdbms $oracleRdbms)
  {
    $this->oracleRdbms = $oracleRdbms;
  }
  /**
   * @return OracleRdbms
   */
  public function getOracleRdbms()
  {
    return $this->oracleRdbms;
  }
  /**
   * @param PostgresqlRdbms
   */
  public function setPostgresqlRdbms(PostgresqlRdbms $postgresqlRdbms)
  {
    $this->postgresqlRdbms = $postgresqlRdbms;
  }
  /**
   * @return PostgresqlRdbms
   */
  public function getPostgresqlRdbms()
  {
    return $this->postgresqlRdbms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiscoverConnectionProfileRequest::class, 'Google_Service_Datastream_DiscoverConnectionProfileRequest');
