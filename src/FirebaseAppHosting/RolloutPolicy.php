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

namespace Google\Service\FirebaseAppHosting;

class RolloutPolicy extends \Google\Collection
{
  protected $collection_key = 'requiredPaths';
  /**
   * If set, specifies a branch that triggers a new build to be started with
   * this policy. Otherwise, no automatic rollouts will happen.
   *
   * @var string
   */
  public $codebaseBranch;
  /**
   * Optional. A flag that, if true, prevents automatic rollouts from being
   * created via this RolloutPolicy.
   *
   * @var bool
   */
  public $disabled;
  /**
   * Output only. If `disabled` is set, the time at which the automatic rollouts
   * were disabled.
   *
   * @var string
   */
  public $disabledTime;
  protected $ignoredPathsType = Path::class;
  protected $ignoredPathsDataType = 'array';
  protected $requiredPathsType = Path::class;
  protected $requiredPathsDataType = 'array';

  /**
   * If set, specifies a branch that triggers a new build to be started with
   * this policy. Otherwise, no automatic rollouts will happen.
   *
   * @param string $codebaseBranch
   */
  public function setCodebaseBranch($codebaseBranch)
  {
    $this->codebaseBranch = $codebaseBranch;
  }
  /**
   * @return string
   */
  public function getCodebaseBranch()
  {
    return $this->codebaseBranch;
  }
  /**
   * Optional. A flag that, if true, prevents automatic rollouts from being
   * created via this RolloutPolicy.
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * Output only. If `disabled` is set, the time at which the automatic rollouts
   * were disabled.
   *
   * @param string $disabledTime
   */
  public function setDisabledTime($disabledTime)
  {
    $this->disabledTime = $disabledTime;
  }
  /**
   * @return string
   */
  public function getDisabledTime()
  {
    return $this->disabledTime;
  }
  /**
   * Optional. A list of file paths patterns to exclude from triggering a
   * rollout. Patterns in this list take precedence over required_paths.
   * **Note**: All paths must be in the ignored_paths in order for the rollout
   * to be skipped. Limited to 100 paths. Example: ignored_paths: { pattern:
   * "foo/bar/excluded” type: GLOB }
   *
   * @param Path[] $ignoredPaths
   */
  public function setIgnoredPaths($ignoredPaths)
  {
    $this->ignoredPaths = $ignoredPaths;
  }
  /**
   * @return Path[]
   */
  public function getIgnoredPaths()
  {
    return $this->ignoredPaths;
  }
  /**
   * Optional. A list of file paths patterns that trigger a build and rollout if
   * at least one of the changed files in the commit are present in this list.
   * This field is optional; the rollout policy will default to triggering on
   * all paths if not populated. Limited to 100 paths. Example: “required_paths:
   * { pattern: "foo/bar” type: GLOB }
   *
   * @param Path[] $requiredPaths
   */
  public function setRequiredPaths($requiredPaths)
  {
    $this->requiredPaths = $requiredPaths;
  }
  /**
   * @return Path[]
   */
  public function getRequiredPaths()
  {
    return $this->requiredPaths;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RolloutPolicy::class, 'Google_Service_FirebaseAppHosting_RolloutPolicy');
