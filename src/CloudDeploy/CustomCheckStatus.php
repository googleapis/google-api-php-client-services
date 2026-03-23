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

namespace Google\Service\CloudDeploy;

class CustomCheckStatus extends \Google\Model
{
  /**
   * No reason for failure is specified.
   */
  public const FAILURE_CAUSE_FAILURE_CAUSE_UNSPECIFIED = 'FAILURE_CAUSE_UNSPECIFIED';
  /**
   * Cloud Build is not available, either because it is not enabled or because
   * Cloud Deploy has insufficient permissions. See [required
   * permission](https://cloud.google.com/deploy/docs/cloud-deploy-service-
   * account#required_permissions).
   */
  public const FAILURE_CAUSE_CLOUD_BUILD_UNAVAILABLE = 'CLOUD_BUILD_UNAVAILABLE';
  /**
   * The analysis operation did not complete successfully; check Cloud Build
   * logs.
   */
  public const FAILURE_CAUSE_EXECUTION_FAILED = 'EXECUTION_FAILED';
  /**
   * The analysis job run did not complete within the alloted time defined in
   * the target's execution environment configuration.
   */
  public const FAILURE_CAUSE_DEADLINE_EXCEEDED = 'DEADLINE_EXCEEDED';
  /**
   * Cloud Build failed to fulfill Cloud Deploy's request. See failure_message
   * for additional details.
   */
  public const FAILURE_CAUSE_CLOUD_BUILD_REQUEST_FAILED = 'CLOUD_BUILD_REQUEST_FAILED';
  /**
   * Output only. The reason the analysis failed. This will always be
   * unspecified while the analysis is in progress or if it succeeded.
   *
   * @var string
   */
  public $failureCause;
  /**
   * Output only. Additional information about the analysis failure, if
   * available.
   *
   * @var string
   */
  public $failureMessage;
  /**
   * Output only. The frequency in minutes at which the custom check is run.
   *
   * @var string
   */
  public $frequency;
  /**
   * Output only. The ID of the custom check.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resource name of the Cloud Build `Build` object that was
   * used to execute the latest run of this custom action check. Format is
   * `projects/{project}/locations/{location}/builds/{build}`.
   *
   * @var string
   */
  public $latestBuild;
  protected $metadataType = CustomMetadata::class;
  protected $metadataDataType = '';
  protected $taskType = Task::class;
  protected $taskDataType = '';

  /**
   * Output only. The reason the analysis failed. This will always be
   * unspecified while the analysis is in progress or if it succeeded.
   *
   * Accepted values: FAILURE_CAUSE_UNSPECIFIED, CLOUD_BUILD_UNAVAILABLE,
   * EXECUTION_FAILED, DEADLINE_EXCEEDED, CLOUD_BUILD_REQUEST_FAILED
   *
   * @param self::FAILURE_CAUSE_* $failureCause
   */
  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }
  /**
   * @return self::FAILURE_CAUSE_*
   */
  public function getFailureCause()
  {
    return $this->failureCause;
  }
  /**
   * Output only. Additional information about the analysis failure, if
   * available.
   *
   * @param string $failureMessage
   */
  public function setFailureMessage($failureMessage)
  {
    $this->failureMessage = $failureMessage;
  }
  /**
   * @return string
   */
  public function getFailureMessage()
  {
    return $this->failureMessage;
  }
  /**
   * Output only. The frequency in minutes at which the custom check is run.
   *
   * @param string $frequency
   */
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /**
   * @return string
   */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /**
   * Output only. The ID of the custom check.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The resource name of the Cloud Build `Build` object that was
   * used to execute the latest run of this custom action check. Format is
   * `projects/{project}/locations/{location}/builds/{build}`.
   *
   * @param string $latestBuild
   */
  public function setLatestBuild($latestBuild)
  {
    $this->latestBuild = $latestBuild;
  }
  /**
   * @return string
   */
  public function getLatestBuild()
  {
    return $this->latestBuild;
  }
  /**
   * Output only. Custom metadata provided by the user-defined custom check
   * operation. result.
   *
   * @param CustomMetadata $metadata
   */
  public function setMetadata(CustomMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return CustomMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Output only. The task that ran for this custom check.
   *
   * @param Task $task
   */
  public function setTask(Task $task)
  {
    $this->task = $task;
  }
  /**
   * @return Task
   */
  public function getTask()
  {
    return $this->task;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomCheckStatus::class, 'Google_Service_CloudDeploy_CustomCheckStatus');
