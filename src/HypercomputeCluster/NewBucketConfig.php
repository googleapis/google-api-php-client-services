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

class NewBucketConfig extends \Google\Model
{
  /**
   * Not set.
   */
  public const STORAGE_CLASS_STORAGE_CLASS_UNSPECIFIED = 'STORAGE_CLASS_UNSPECIFIED';
  /**
   * Best for data that is frequently accessed.
   */
  public const STORAGE_CLASS_STANDARD = 'STANDARD';
  /**
   * Low-cost storage for data that is accessed less frequently.
   */
  public const STORAGE_CLASS_NEARLINE = 'NEARLINE';
  /**
   * Very low-cost storage for infrequently accessed data.
   */
  public const STORAGE_CLASS_COLDLINE = 'COLDLINE';
  /**
   * Lowest-cost storage for data archiving, online backup, and disaster
   * recovery.
   */
  public const STORAGE_CLASS_ARCHIVE = 'ARCHIVE';
  protected $autoclassType = GcsAutoclassConfig::class;
  protected $autoclassDataType = '';
  /**
   * Required. Immutable. Name of the Cloud Storage bucket to create.
   *
   * @var string
   */
  public $bucket;
  protected $hierarchicalNamespaceType = GcsHierarchicalNamespaceConfig::class;
  protected $hierarchicalNamespaceDataType = '';
  /**
   * Optional. Immutable. If set, uses the provided storage class as the
   * bucket's default storage class.
   *
   * @var string
   */
  public $storageClass;

  /**
   * Optional. Immutable. If set, indicates that the bucket should use
   * [Autoclass](https://cloud.google.com/storage/docs/autoclass).
   *
   * @param GcsAutoclassConfig $autoclass
   */
  public function setAutoclass(GcsAutoclassConfig $autoclass)
  {
    $this->autoclass = $autoclass;
  }
  /**
   * @return GcsAutoclassConfig
   */
  public function getAutoclass()
  {
    return $this->autoclass;
  }
  /**
   * Required. Immutable. Name of the Cloud Storage bucket to create.
   *
   * @param string $bucket
   */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /**
   * @return string
   */
  public function getBucket()
  {
    return $this->bucket;
  }
  /**
   * Optional. Immutable. If set, indicates that the bucket should use
   * [hierarchical namespaces](https://cloud.google.com/storage/docs/hns-
   * overview).
   *
   * @param GcsHierarchicalNamespaceConfig $hierarchicalNamespace
   */
  public function setHierarchicalNamespace(GcsHierarchicalNamespaceConfig $hierarchicalNamespace)
  {
    $this->hierarchicalNamespace = $hierarchicalNamespace;
  }
  /**
   * @return GcsHierarchicalNamespaceConfig
   */
  public function getHierarchicalNamespace()
  {
    return $this->hierarchicalNamespace;
  }
  /**
   * Optional. Immutable. If set, uses the provided storage class as the
   * bucket's default storage class.
   *
   * Accepted values: STORAGE_CLASS_UNSPECIFIED, STANDARD, NEARLINE, COLDLINE,
   * ARCHIVE
   *
   * @param self::STORAGE_CLASS_* $storageClass
   */
  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }
  /**
   * @return self::STORAGE_CLASS_*
   */
  public function getStorageClass()
  {
    return $this->storageClass;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NewBucketConfig::class, 'Google_Service_HypercomputeCluster_NewBucketConfig');
