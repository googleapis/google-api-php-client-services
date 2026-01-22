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

namespace Google\Service\HypercomputeCluster;

class StorageResourceConfig extends \Google\Model
{
  protected $existingBucketType = ExistingBucketConfig::class;
  protected $existingBucketDataType = '';
  protected $existingFilestoreType = ExistingFilestoreConfig::class;
  protected $existingFilestoreDataType = '';
  protected $existingLustreType = ExistingLustreConfig::class;
  protected $existingLustreDataType = '';
  protected $newBucketType = NewBucketConfig::class;
  protected $newBucketDataType = '';
  protected $newFilestoreType = NewFilestoreConfig::class;
  protected $newFilestoreDataType = '';
  protected $newLustreType = NewLustreConfig::class;
  protected $newLustreDataType = '';

  /**
   * Optional. Immutable. If set, indicates that an existing Cloud Storage
   * bucket should be imported.
   *
   * @param ExistingBucketConfig $existingBucket
   */
  public function setExistingBucket(ExistingBucketConfig $existingBucket)
  {
    $this->existingBucket = $existingBucket;
  }
  /**
   * @return ExistingBucketConfig
   */
  public function getExistingBucket()
  {
    return $this->existingBucket;
  }
  /**
   * Optional. Immutable. If set, indicates that an existing Filestore instance
   * should be imported.
   *
   * @param ExistingFilestoreConfig $existingFilestore
   */
  public function setExistingFilestore(ExistingFilestoreConfig $existingFilestore)
  {
    $this->existingFilestore = $existingFilestore;
  }
  /**
   * @return ExistingFilestoreConfig
   */
  public function getExistingFilestore()
  {
    return $this->existingFilestore;
  }
  /**
   * Optional. Immutable. If set, indicates that an existing Managed Lustre
   * instance should be imported.
   *
   * @param ExistingLustreConfig $existingLustre
   */
  public function setExistingLustre(ExistingLustreConfig $existingLustre)
  {
    $this->existingLustre = $existingLustre;
  }
  /**
   * @return ExistingLustreConfig
   */
  public function getExistingLustre()
  {
    return $this->existingLustre;
  }
  /**
   * Optional. Immutable. If set, indicates that a new Cloud Storage bucket
   * should be created.
   *
   * @param NewBucketConfig $newBucket
   */
  public function setNewBucket(NewBucketConfig $newBucket)
  {
    $this->newBucket = $newBucket;
  }
  /**
   * @return NewBucketConfig
   */
  public function getNewBucket()
  {
    return $this->newBucket;
  }
  /**
   * Optional. Immutable. If set, indicates that a new Filestore instance should
   * be created.
   *
   * @param NewFilestoreConfig $newFilestore
   */
  public function setNewFilestore(NewFilestoreConfig $newFilestore)
  {
    $this->newFilestore = $newFilestore;
  }
  /**
   * @return NewFilestoreConfig
   */
  public function getNewFilestore()
  {
    return $this->newFilestore;
  }
  /**
   * Optional. Immutable. If set, indicates that a new Managed Lustre instance
   * should be created.
   *
   * @param NewLustreConfig $newLustre
   */
  public function setNewLustre(NewLustreConfig $newLustre)
  {
    $this->newLustre = $newLustre;
  }
  /**
   * @return NewLustreConfig
   */
  public function getNewLustre()
  {
    return $this->newLustre;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageResourceConfig::class, 'Google_Service_HypercomputeCluster_StorageResourceConfig');
