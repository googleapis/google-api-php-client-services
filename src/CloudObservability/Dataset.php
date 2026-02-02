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

namespace Google\Service\CloudObservability;

class Dataset extends \Google\Model
{
  /**
   * Output only. Create timestamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Delete timestamp.
   *
   * @var string
   */
  public $deleteTime;
  /**
   * Optional. Description of the dataset.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. User friendly display name.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. Name of the dataset. The format is: projects/[PROJECT_ID]/locat
   * ions/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATASET_ID]
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when the dataset in soft-deleted state is purged.
   *
   * @var string
   */
  public $purgeTime;

  /**
   * Output only. Create timestamp.
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
   * Output only. Delete timestamp.
   *
   * @param string $deleteTime
   */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /**
   * @return string
   */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /**
   * Optional. Description of the dataset.
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
   * Optional. User friendly display name.
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
   * Identifier. Name of the dataset. The format is: projects/[PROJECT_ID]/locat
   * ions/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATASET_ID]
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
   * Output only. Timestamp when the dataset in soft-deleted state is purged.
   *
   * @param string $purgeTime
   */
  public function setPurgeTime($purgeTime)
  {
    $this->purgeTime = $purgeTime;
  }
  /**
   * @return string
   */
  public function getPurgeTime()
  {
    return $this->purgeTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Dataset::class, 'Google_Service_CloudObservability_Dataset');
