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

namespace Google\Service\CloudHealthcare;

class GoogleCloudHealthcareV1DicomBigQueryDestination extends \Google\Model
{
  /**
   * Default behavior is the same as WRITE_EMPTY.
   */
  public const WRITE_DISPOSITION_WRITE_DISPOSITION_UNSPECIFIED = 'WRITE_DISPOSITION_UNSPECIFIED';
  /**
   * Only export data if the destination table is empty.
   */
  public const WRITE_DISPOSITION_WRITE_EMPTY = 'WRITE_EMPTY';
  /**
   * Erase all existing data in the destination table before writing the
   * instances.
   */
  public const WRITE_DISPOSITION_WRITE_TRUNCATE = 'WRITE_TRUNCATE';
  /**
   * Append data to the destination table.
   */
  public const WRITE_DISPOSITION_WRITE_APPEND = 'WRITE_APPEND';
  /**
   * Optional. Use `write_disposition` instead. If `write_disposition` is
   * specified, this parameter is ignored. force=false is equivalent to
   * write_disposition=WRITE_EMPTY and force=true is equivalent to
   * write_disposition=WRITE_TRUNCATE.
   *
   * @var bool
   */
  public $force;
  /**
   * Optional. BigQuery URI to a table, up to 2000 characters long, in the
   * format `bq://projectId.bqDatasetId.tableId`
   *
   * @var string
   */
  public $tableUri;
  /**
   * Optional. Determines whether the existing table in the destination is to be
   * overwritten or appended to. If a write_disposition is specified, the
   * `force` parameter is ignored.
   *
   * @var string
   */
  public $writeDisposition;

  /**
   * Optional. Use `write_disposition` instead. If `write_disposition` is
   * specified, this parameter is ignored. force=false is equivalent to
   * write_disposition=WRITE_EMPTY and force=true is equivalent to
   * write_disposition=WRITE_TRUNCATE.
   *
   * @param bool $force
   */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /**
   * @return bool
   */
  public function getForce()
  {
    return $this->force;
  }
  /**
   * Optional. BigQuery URI to a table, up to 2000 characters long, in the
   * format `bq://projectId.bqDatasetId.tableId`
   *
   * @param string $tableUri
   */
  public function setTableUri($tableUri)
  {
    $this->tableUri = $tableUri;
  }
  /**
   * @return string
   */
  public function getTableUri()
  {
    return $this->tableUri;
  }
  /**
   * Optional. Determines whether the existing table in the destination is to be
   * overwritten or appended to. If a write_disposition is specified, the
   * `force` parameter is ignored.
   *
   * Accepted values: WRITE_DISPOSITION_UNSPECIFIED, WRITE_EMPTY,
   * WRITE_TRUNCATE, WRITE_APPEND
   *
   * @param self::WRITE_DISPOSITION_* $writeDisposition
   */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /**
   * @return self::WRITE_DISPOSITION_*
   */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudHealthcareV1DicomBigQueryDestination::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1DicomBigQueryDestination');
