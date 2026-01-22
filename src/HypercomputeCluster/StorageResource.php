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

class StorageResource extends \Google\Model
{
  protected $bucketType = BucketReference::class;
  protected $bucketDataType = '';
  protected $configType = StorageResourceConfig::class;
  protected $configDataType = '';
  protected $filestoreType = FilestoreReference::class;
  protected $filestoreDataType = '';
  protected $lustreType = LustreReference::class;
  protected $lustreDataType = '';

  /**
   * Reference to a Google Cloud Storage bucket. Populated if and only if the
   * storage resource was configured to use Google Cloud Storage.
   *
   * @param BucketReference $bucket
   */
  public function setBucket(BucketReference $bucket)
  {
    $this->bucket = $bucket;
  }
  /**
   * @return BucketReference
   */
  public function getBucket()
  {
    return $this->bucket;
  }
  /**
   * Required. Immutable. Configuration for this storage resource, which
   * describes how it should be created or imported. This field only controls
   * how the storage resource is initially created or imported. Subsequent
   * changes to the storage resource should be made via the resource's API and
   * will not be reflected in the configuration.
   *
   * @param StorageResourceConfig $config
   */
  public function setConfig(StorageResourceConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return StorageResourceConfig
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * Reference to a Filestore instance. Populated if and only if the storage
   * resource was configured to use Filestore.
   *
   * @param FilestoreReference $filestore
   */
  public function setFilestore(FilestoreReference $filestore)
  {
    $this->filestore = $filestore;
  }
  /**
   * @return FilestoreReference
   */
  public function getFilestore()
  {
    return $this->filestore;
  }
  /**
   * Reference to a Managed Lustre instance. Populated if and only if the
   * storage resource was configured to use Managed Lustre.
   *
   * @param LustreReference $lustre
   */
  public function setLustre(LustreReference $lustre)
  {
    $this->lustre = $lustre;
  }
  /**
   * @return LustreReference
   */
  public function getLustre()
  {
    return $this->lustre;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageResource::class, 'Google_Service_HypercomputeCluster_StorageResource');
