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

class Backup extends \Google\Collection
{
  /**
   * The state of the backup is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The backup is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The backup is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The backup is active and ready to use.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The backup failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The backup is being restored.
   */
  public const STATE_RESTORING = 'RESTORING';
  protected $collection_key = 'restoringServices';
  /**
   * Output only. The time when the backup was started.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The description of the backup.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The time when the backup finished creating.
   *
   * @var string
   */
  public $endTime;
  /**
   * Immutable. Identifier. The relative resource name of the backup, in the
   * following form:projects/{project_number}/locations/{location_id}/services/{
   * service_id}/backups/{backup_id}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Services that are restoring from the backup.
   *
   * @var string[]
   */
  public $restoringServices;
  protected $serviceRevisionType = Service::class;
  protected $serviceRevisionDataType = '';
  /**
   * Output only. The current state of the backup.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The time when the backup was started.
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
   * Optional. The description of the backup.
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
   * Output only. The time when the backup finished creating.
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
   * Immutable. Identifier. The relative resource name of the backup, in the
   * following form:projects/{project_number}/locations/{location_id}/services/{
   * service_id}/backups/{backup_id}
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
   * Output only. Services that are restoring from the backup.
   *
   * @param string[] $restoringServices
   */
  public function setRestoringServices($restoringServices)
  {
    $this->restoringServices = $restoringServices;
  }
  /**
   * @return string[]
   */
  public function getRestoringServices()
  {
    return $this->restoringServices;
  }
  /**
   * Output only. The revision of the service at the time of backup.
   *
   * @param Service $serviceRevision
   */
  public function setServiceRevision(Service $serviceRevision)
  {
    $this->serviceRevision = $serviceRevision;
  }
  /**
   * @return Service
   */
  public function getServiceRevision()
  {
    return $this->serviceRevision;
  }
  /**
   * Output only. The current state of the backup.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, DELETING, ACTIVE, FAILED,
   * RESTORING
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
class_alias(Backup::class, 'Google_Service_DataprocMetastore_Backup');
