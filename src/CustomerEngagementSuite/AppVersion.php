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

namespace Google\Service\CustomerEngagementSuite;

class AppVersion extends \Google\Model
{
  /**
   * Output only. Timestamp when the app version was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Email of the user who created the app version.
   *
   * @var string
   */
  public $creator;
  /**
   * Optional. The description of the app version.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The display name of the app version.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation. If the etag is empty, the update will overwrite any
   * concurrent changes.
   *
   * @var string
   */
  public $etag;
  /**
   * Identifier. The unique identifier of the app version. Format:
   * `projects/{project}/locations/{location}/apps/{app}/versions/{version}`
   *
   * @var string
   */
  public $name;
  protected $snapshotType = AppSnapshot::class;
  protected $snapshotDataType = '';

  /**
   * Output only. Timestamp when the app version was created.
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
   * Output only. Email of the user who created the app version.
   *
   * @param string $creator
   */
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /**
   * @return string
   */
  public function getCreator()
  {
    return $this->creator;
  }
  /**
   * Optional. The description of the app version.
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
   * Optional. The display name of the app version.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation. If the etag is empty, the update will overwrite any
   * concurrent changes.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Identifier. The unique identifier of the app version. Format:
   * `projects/{project}/locations/{location}/apps/{app}/versions/{version}`
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
   * Output only. The snapshot of the app when the version is created.
   *
   * @param AppSnapshot $snapshot
   */
  public function setSnapshot(AppSnapshot $snapshot)
  {
    $this->snapshot = $snapshot;
  }
  /**
   * @return AppSnapshot
   */
  public function getSnapshot()
  {
    return $this->snapshot;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppVersion::class, 'Google_Service_CustomerEngagementSuite_AppVersion');
