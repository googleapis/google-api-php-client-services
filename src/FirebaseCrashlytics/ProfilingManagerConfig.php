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

namespace Google\Service\FirebaseCrashlytics;

class ProfilingManagerConfig extends \Google\Model
{
  /**
   * Optional. Resource name of the Google Cloud Storage bucket where enriched
   * heap dumps are stored. Format: "projects/{project}/buckets/{bucket}" (use
   * `_` as `{project}` for global buckets, for example "projects/_/buckets/my-
   * global-bucket").
   *
   * @var string
   */
  public $bucket;
  /**
   * Optional. Whether Crashlytics heap dump collection is enabled for the app.
   *
   * @var bool
   */
  public $heapDumpCollectionEnabled;
  /**
   * Identifier. The resource name of the Profiling Manager configuration.
   * Format: "projects/{project}/apps/{app}/profilingManagerConfig".
   *
   * @var string
   */
  public $name;

  /**
   * Optional. Resource name of the Google Cloud Storage bucket where enriched
   * heap dumps are stored. Format: "projects/{project}/buckets/{bucket}" (use
   * `_` as `{project}` for global buckets, for example "projects/_/buckets/my-
   * global-bucket").
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
   * Optional. Whether Crashlytics heap dump collection is enabled for the app.
   *
   * @param bool $heapDumpCollectionEnabled
   */
  public function setHeapDumpCollectionEnabled($heapDumpCollectionEnabled)
  {
    $this->heapDumpCollectionEnabled = $heapDumpCollectionEnabled;
  }
  /**
   * @return bool
   */
  public function getHeapDumpCollectionEnabled()
  {
    return $this->heapDumpCollectionEnabled;
  }
  /**
   * Identifier. The resource name of the Profiling Manager configuration.
   * Format: "projects/{project}/apps/{app}/profilingManagerConfig".
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProfilingManagerConfig::class, 'Google_Service_FirebaseCrashlytics_ProfilingManagerConfig');
