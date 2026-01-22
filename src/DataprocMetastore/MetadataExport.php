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

class MetadataExport extends \Google\Model
{
  /**
   * The type of the database dump is unknown.
   */
  public const DATABASE_DUMP_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Database dump is a MySQL dump file.
   */
  public const DATABASE_DUMP_TYPE_MYSQL = 'MYSQL';
  /**
   * Database dump contains Avro files.
   */
  public const DATABASE_DUMP_TYPE_AVRO = 'AVRO';
  /**
   * The state of the metadata export is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The metadata export is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The metadata export completed successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The metadata export failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The metadata export is cancelled.
   */
  public const STATE_CANCELLED = 'CANCELLED';
  /**
   * Output only. The type of the database dump.
   *
   * @var string
   */
  public $databaseDumpType;
  /**
   * Output only. A Cloud Storage URI of a folder that metadata are exported to,
   * in the form of gs:/, where is automatically generated.
   *
   * @var string
   */
  public $destinationGcsUri;
  /**
   * Output only. The time when the export ended.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The time when the export started.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The current state of the export.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The type of the database dump.
   *
   * Accepted values: TYPE_UNSPECIFIED, MYSQL, AVRO
   *
   * @param self::DATABASE_DUMP_TYPE_* $databaseDumpType
   */
  public function setDatabaseDumpType($databaseDumpType)
  {
    $this->databaseDumpType = $databaseDumpType;
  }
  /**
   * @return self::DATABASE_DUMP_TYPE_*
   */
  public function getDatabaseDumpType()
  {
    return $this->databaseDumpType;
  }
  /**
   * Output only. A Cloud Storage URI of a folder that metadata are exported to,
   * in the form of gs:/, where is automatically generated.
   *
   * @param string $destinationGcsUri
   */
  public function setDestinationGcsUri($destinationGcsUri)
  {
    $this->destinationGcsUri = $destinationGcsUri;
  }
  /**
   * @return string
   */
  public function getDestinationGcsUri()
  {
    return $this->destinationGcsUri;
  }
  /**
   * Output only. The time when the export ended.
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
   * Output only. The time when the export started.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. The current state of the export.
   *
   * Accepted values: STATE_UNSPECIFIED, RUNNING, SUCCEEDED, FAILED, CANCELLED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetadataExport::class, 'Google_Service_DataprocMetastore_MetadataExport');
