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

class DatabaseDump extends \Google\Model
{
  /**
   * The type of the source database is unknown.
   */
  public const DATABASE_TYPE_DATABASE_TYPE_UNSPECIFIED = 'DATABASE_TYPE_UNSPECIFIED';
  /**
   * The type of the source database is MySQL.
   */
  public const DATABASE_TYPE_MYSQL = 'MYSQL';
  /**
   * The type of the database dump is unknown.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Database dump is a MySQL dump file.
   */
  public const TYPE_MYSQL = 'MYSQL';
  /**
   * Database dump contains Avro files.
   */
  public const TYPE_AVRO = 'AVRO';
  /**
   * The type of the database.
   *
   * @deprecated
   * @var string
   */
  public $databaseType;
  /**
   * Optional. A Cloud Storage object or folder URI that specifies the source
   * from which to import metadata. It must begin with gs://.
   *
   * @var string
   */
  public $gcsUri;
  /**
   * Optional. The name of the source database.
   *
   * @deprecated
   * @var string
   */
  public $sourceDatabase;
  /**
   * Optional. The type of the database dump. If unspecified, defaults to MYSQL.
   *
   * @var string
   */
  public $type;

  /**
   * The type of the database.
   *
   * Accepted values: DATABASE_TYPE_UNSPECIFIED, MYSQL
   *
   * @deprecated
   * @param self::DATABASE_TYPE_* $databaseType
   */
  public function setDatabaseType($databaseType)
  {
    $this->databaseType = $databaseType;
  }
  /**
   * @deprecated
   * @return self::DATABASE_TYPE_*
   */
  public function getDatabaseType()
  {
    return $this->databaseType;
  }
  /**
   * Optional. A Cloud Storage object or folder URI that specifies the source
   * from which to import metadata. It must begin with gs://.
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * Optional. The name of the source database.
   *
   * @deprecated
   * @param string $sourceDatabase
   */
  public function setSourceDatabase($sourceDatabase)
  {
    $this->sourceDatabase = $sourceDatabase;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getSourceDatabase()
  {
    return $this->sourceDatabase;
  }
  /**
   * Optional. The type of the database dump. If unspecified, defaults to MYSQL.
   *
   * Accepted values: TYPE_UNSPECIFIED, MYSQL, AVRO
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseDump::class, 'Google_Service_DataprocMetastore_DatabaseDump');
