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

class MetadataImport extends \Google\Model
{
  /**
   * The state of the metadata import is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The metadata import is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The metadata import completed successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The metadata import is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The metadata import failed, and attempted metadata changes were rolled
   * back.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The time when the metadata import was started.
   *
   * @var string
   */
  public $createTime;
  protected $databaseDumpType = DatabaseDump::class;
  protected $databaseDumpDataType = '';
  /**
   * Optional. The description of the metadata import.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The time when the metadata import finished.
   *
   * @var string
   */
  public $endTime;
  /**
   * Immutable. Identifier. The relative resource name of the metadata import,
   * of the form:projects/{project_number}/locations/{location_id}/services/{ser
   * vice_id}/metadataImports/{metadata_import_id}.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current state of the metadata import.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time when the metadata import was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time when the metadata import was started.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Immutable. A database dump from a pre-existing metastore's database.
   *
   * @param DatabaseDump $databaseDump
   */
  public function setDatabaseDump(DatabaseDump $databaseDump)
  {
    $this->databaseDump = $databaseDump;
  }
  /**
   * @return DatabaseDump
   */
  public function getDatabaseDump()
  {
    return $this->databaseDump;
  }
  /**
   * Optional. The description of the metadata import.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The time when the metadata import finished.
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
   * Immutable. Identifier. The relative resource name of the metadata import,
   * of the form:projects/{project_number}/locations/{location_id}/services/{ser
   * vice_id}/metadataImports/{metadata_import_id}.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The current state of the metadata import.
   *
   * Accepted values: STATE_UNSPECIFIED, RUNNING, SUCCEEDED, UPDATING, FAILED
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
  /**
   * Output only. The time when the metadata import was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetadataImport::class, 'Google_Service_DataprocMetastore_MetadataImport');
