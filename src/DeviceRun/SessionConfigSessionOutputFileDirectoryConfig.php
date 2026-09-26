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

namespace Google\Service\DeviceRun;

class SessionConfigSessionOutputFileDirectoryConfig extends \Google\Model
{
  /**
   * Optional. Whether to write output files directly under the output directory
   * instead of nesting them under service-generated subdirectories. By default
   * (`false`), output files are stored under `/`. When `true`, the session ID
   * subdirectory is never appended, and the job display name subdirectory is
   * appended only when the session has more than one job. Output files are
   * therefore stored under: - `//` for a single-job session. - `` for a multi-
   * job session. Set this to `true` when the output directory is already unique
   * per session (for example, when a CI system generates it), to avoid
   * redundant nesting.
   *
   * @var bool
   */
  public $flatDirectoryStructure;
  protected $gcsOutputDirectoryType = GcsPath::class;
  protected $gcsOutputDirectoryDataType = '';

  /**
   * Optional. Whether to write output files directly under the output directory
   * instead of nesting them under service-generated subdirectories. By default
   * (`false`), output files are stored under `/`. When `true`, the session ID
   * subdirectory is never appended, and the job display name subdirectory is
   * appended only when the session has more than one job. Output files are
   * therefore stored under: - `//` for a single-job session. - `` for a multi-
   * job session. Set this to `true` when the output directory is already unique
   * per session (for example, when a CI system generates it), to avoid
   * redundant nesting.
   *
   * @param bool $flatDirectoryStructure
   */
  public function setFlatDirectoryStructure($flatDirectoryStructure)
  {
    $this->flatDirectoryStructure = $flatDirectoryStructure;
  }
  /**
   * @return bool
   */
  public function getFlatDirectoryStructure()
  {
    return $this->flatDirectoryStructure;
  }
  /**
   * The Google Cloud Storage path of the output directory (e.g. `gs://my-
   * bucket/output`). The bucket must exist. If the bucket is located in another
   * project or uses fine-grained access controls, ensure the Device Run Service
   * Agent of the project (`service-@gcp-sa-devicerun.iam.gserviceaccount.com`)
   * is granted access to the bucket (such as `roles/storage.objectUser`).
   *
   * @param GcsPath $gcsOutputDirectory
   */
  public function setGcsOutputDirectory(GcsPath $gcsOutputDirectory)
  {
    $this->gcsOutputDirectory = $gcsOutputDirectory;
  }
  /**
   * @return GcsPath
   */
  public function getGcsOutputDirectory()
  {
    return $this->gcsOutputDirectory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionConfigSessionOutputFileDirectoryConfig::class, 'Google_Service_DeviceRun_SessionConfigSessionOutputFileDirectoryConfig');
