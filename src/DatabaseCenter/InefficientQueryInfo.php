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

namespace Google\Service\DatabaseCenter;

class InefficientQueryInfo extends \Google\Model
{
  /**
   * Name of the database where index is required. For example, "db1", which is
   * the name of the database present in the instance.
   *
   * @var string
   */
  public $database;
  /**
   * Count of queries to be impacted if index is applied
   *
   * @var string
   */
  public $impactedQueriesCount;
  /**
   * SQL statement of the index. Based on the ddl type, this will be either
   * CREATE INDEX or DROP INDEX.
   *
   * @var string
   */
  public $sqlIndexStatement;
  /**
   * Cost of additional disk usage in bytes
   *
   * @var string
   */
  public $storageCostBytes;
  /**
   * Name of the table where index is required
   *
   * @var string
   */
  public $table;

  /**
   * Name of the database where index is required. For example, "db1", which is
   * the name of the database present in the instance.
   *
   * @param string $database
   */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /**
   * @return string
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * Count of queries to be impacted if index is applied
   *
   * @param string $impactedQueriesCount
   */
  public function setImpactedQueriesCount($impactedQueriesCount)
  {
    $this->impactedQueriesCount = $impactedQueriesCount;
  }
  /**
   * @return string
   */
  public function getImpactedQueriesCount()
  {
    return $this->impactedQueriesCount;
  }
  /**
   * SQL statement of the index. Based on the ddl type, this will be either
   * CREATE INDEX or DROP INDEX.
   *
   * @param string $sqlIndexStatement
   */
  public function setSqlIndexStatement($sqlIndexStatement)
  {
    $this->sqlIndexStatement = $sqlIndexStatement;
  }
  /**
   * @return string
   */
  public function getSqlIndexStatement()
  {
    return $this->sqlIndexStatement;
  }
  /**
   * Cost of additional disk usage in bytes
   *
   * @param string $storageCostBytes
   */
  public function setStorageCostBytes($storageCostBytes)
  {
    $this->storageCostBytes = $storageCostBytes;
  }
  /**
   * @return string
   */
  public function getStorageCostBytes()
  {
    return $this->storageCostBytes;
  }
  /**
   * Name of the table where index is required
   *
   * @param string $table
   */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /**
   * @return string
   */
  public function getTable()
  {
    return $this->table;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InefficientQueryInfo::class, 'Google_Service_DatabaseCenter_InefficientQueryInfo');
