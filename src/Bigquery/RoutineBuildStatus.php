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

namespace Google\Service\Bigquery;

class RoutineBuildStatus extends \Google\Collection
{
  /**
   * Default value.
   */
  public const BUILD_STATE_BUILD_STATE_UNSPECIFIED = 'BUILD_STATE_UNSPECIFIED';
  /**
   * The build is in progress.
   */
  public const BUILD_STATE_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * The build has succeeded.
   */
  public const BUILD_STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The build has failed.
   */
  public const BUILD_STATE_FAILED = 'FAILED';
  protected $collection_key = 'installedPackages';
  /**
   * Output only. The time taken for the image build. Populated only after the
   * build succeeds or fails.
   *
   * @var string
   */
  public $buildDuration;
  /**
   * Output only. The current build state of the routine.
   *
   * @var string
   */
  public $buildState;
  /**
   * Output only. The time when the build state was updated last.
   *
   * @var string
   */
  public $buildStateUpdateTime;
  protected $errorResultType = ErrorProto::class;
  protected $errorResultDataType = '';
  /**
   * Output only. The size of the image in bytes. Populated only after the build
   * succeeds.
   *
   * @var string
   */
  public $imageSizeBytes;
  protected $installedPackagesType = InstalledPackage::class;
  protected $installedPackagesDataType = 'array';

  /**
   * Output only. The time taken for the image build. Populated only after the
   * build succeeds or fails.
   *
   * @param string $buildDuration
   */
  public function setBuildDuration($buildDuration)
  {
    $this->buildDuration = $buildDuration;
  }
  /**
   * @return string
   */
  public function getBuildDuration()
  {
    return $this->buildDuration;
  }
  /**
   * Output only. The current build state of the routine.
   *
   * Accepted values: BUILD_STATE_UNSPECIFIED, IN_PROGRESS, SUCCEEDED, FAILED
   *
   * @param self::BUILD_STATE_* $buildState
   */
  public function setBuildState($buildState)
  {
    $this->buildState = $buildState;
  }
  /**
   * @return self::BUILD_STATE_*
   */
  public function getBuildState()
  {
    return $this->buildState;
  }
  /**
   * Output only. The time when the build state was updated last.
   *
   * @param string $buildStateUpdateTime
   */
  public function setBuildStateUpdateTime($buildStateUpdateTime)
  {
    $this->buildStateUpdateTime = $buildStateUpdateTime;
  }
  /**
   * @return string
   */
  public function getBuildStateUpdateTime()
  {
    return $this->buildStateUpdateTime;
  }
  /**
   * Output only. A result object that will be present only if the build has
   * failed.
   *
   * @param ErrorProto $errorResult
   */
  public function setErrorResult(ErrorProto $errorResult)
  {
    $this->errorResult = $errorResult;
  }
  /**
   * @return ErrorProto
   */
  public function getErrorResult()
  {
    return $this->errorResult;
  }
  /**
   * Output only. The size of the image in bytes. Populated only after the build
   * succeeds.
   *
   * @param string $imageSizeBytes
   */
  public function setImageSizeBytes($imageSizeBytes)
  {
    $this->imageSizeBytes = $imageSizeBytes;
  }
  /**
   * @return string
   */
  public function getImageSizeBytes()
  {
    return $this->imageSizeBytes;
  }
  /**
   * Output only. The list of installed packages in the routine's execution
   * environment. Populated only after the build succeeds.
   *
   * @param InstalledPackage[] $installedPackages
   */
  public function setInstalledPackages($installedPackages)
  {
    $this->installedPackages = $installedPackages;
  }
  /**
   * @return InstalledPackage[]
   */
  public function getInstalledPackages()
  {
    return $this->installedPackages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RoutineBuildStatus::class, 'Google_Service_Bigquery_RoutineBuildStatus');
