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

class MoveTableToDatabaseRequest extends \Google\Model
{
  /**
   * Required. The name of the database where the table resides.
   *
   * @var string
   */
  public $dbName;
  /**
   * Required. The name of the database where the table should be moved.
   *
   * @var string
   */
  public $destinationDbName;
  /**
   * Required. The name of the table to be moved.
   *
   * @var string
   */
  public $tableName;

  /**
   * Required. The name of the database where the table resides.
   *
   * @param string $dbName
   */
  public function setDbName($dbName)
  {
    $this->dbName = $dbName;
  }
  /**
   * @return string
   */
  public function getDbName()
  {
    return $this->dbName;
  }
  /**
   * Required. The name of the database where the table should be moved.
   *
   * @param string $destinationDbName
   */
  public function setDestinationDbName($destinationDbName)
  {
    $this->destinationDbName = $destinationDbName;
  }
  /**
   * @return string
   */
  public function getDestinationDbName()
  {
    return $this->destinationDbName;
  }
  /**
   * Required. The name of the table to be moved.
   *
   * @param string $tableName
   */
  public function setTableName($tableName)
  {
    $this->tableName = $tableName;
  }
  /**
   * @return string
   */
  public function getTableName()
  {
    return $this->tableName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoveTableToDatabaseRequest::class, 'Google_Service_DataprocMetastore_MoveTableToDatabaseRequest');
