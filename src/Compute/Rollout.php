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

namespace Google\Service\Compute;

class Rollout extends \Google\Collection
{
  /**
   * The rollout is in a failure terminal state.
   */
  public const STATE_CANCELLED = 'CANCELLED';
  /**
   * The rollout is being cancelled.
   */
  public const STATE_CANCELLING = 'CANCELLING';
  /**
   * An attempted cancel operation was unsuccessful.
   */
  public const STATE_CANCEL_FAILED = 'CANCEL_FAILED';
  /**
   * The rollout is in a successful terminal state.
   */
  public const STATE_COMPLETED = 'COMPLETED';
  /**
   * An attempted complete operation was unsuccessful.
   */
  public const STATE_COMPLETE_FAILED = 'COMPLETE_FAILED';
  /**
   * The rollout is being marked as completed.
   */
  public const STATE_COMPLETING = 'COMPLETING';
  /**
   * The rollout completed with failures.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The rollout is paused.
   */
  public const STATE_PAUSED = 'PAUSED';
  /**
   * An attempted pause operation was unsuccessful.
   */
  public const STATE_PAUSE_FAILED = 'PAUSE_FAILED';
  /**
   * The rollout is being paused.
   */
  public const STATE_PAUSING = 'PAUSING';
  /**
   * A wave is being processed by the product.
   */
  public const STATE_PROCESSING = 'PROCESSING';
  /**
   * The rollout has been successfully initialized and is ready to start.
   */
  public const STATE_READY = 'READY';
  /**
   * The rollout is being resumed after being paused.
   */
  public const STATE_RESUMING = 'RESUMING';
  /**
   * An attempted rollback operation failed to complete successfully.
   */
  public const STATE_ROLLBACK_WAVE_FAILED = 'ROLLBACK_WAVE_FAILED';
  /**
   * A wave rollback is in progress for this rollout.
   */
  public const STATE_ROLLING_BACK = 'ROLLING_BACK';
  /**
   * Undefined default state. Should never be exposed to users.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The rollout has been created but is not yet ready to be started.
   */
  public const STATE_UNINITIALIZED = 'UNINITIALIZED';
  /**
   * The product failed to process the wave.
   */
  public const STATE_WAVE_FAILED = 'WAVE_FAILED';
  protected $collection_key = 'waveDetails';
  /**
   * Output only. The timestamp at which the Rollout was cancelled.
   *
   * @var string
   */
  public $cancellationTime;
  /**
   * Output only. The timestamp at which the Rollout was completed.
   *
   * @var string
   */
  public $completionTime;
  /**
   * Output only. [Output Only] Creation timestamp inRFC3339 text format.
   *
   * @var string
   */
  public $creationTimestamp;
  /**
   * Output only. The number of the currently running wave. Ex. 1
   *
   * @var string
   */
  public $currentWaveNumber;
  /**
   * An optional description of this resource. Provide this property when you
   * create the resource.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. etag of the Rollout Ex. abc1234
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. [Output Only] The unique identifier for the resource. This
   * identifier is defined by the server.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. [Output Only] Type of the resource. Always compute#rollout for
   * rollouts.
   *
   * @var string
   */
  public $kind;
  /**
   * Name of the resource. Provided by the client when the resource is created.
   * The name must be 1-63 characters long, and comply withRFC1035.
   * Specifically, the name must be 1-63 characters long and match the regular
   * expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character
   * must be a lowercase letter, and all following characters must be a dash,
   * lowercase letter, or digit, except the last character, which cannot be a
   * dash.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The timestamp at which the Rollout was paused.
   *
   * @var string
   */
  public $pauseTime;
  /**
   * Output only. The timestamp at which the Rollout was resumed.
   *
   * @var string
   */
  public $resumeTime;
  protected $rolloutEntityType = RolloutRolloutEntity::class;
  protected $rolloutEntityDataType = '';
  /**
   * Required. Rollout Plan used to model the Rollout. Ex.
   * compute.googleapis.com/v1/projects/1234/rolloutPlans/rp1
   *
   * @var string
   */
  public $rolloutPlan;
  /**
   * Output only. [Output Only] Server-defined fully-qualified URL for this
   * resource.
   *
   * @var string
   */
  public $selfLink;
  /**
   * Output only. [Output Only] Server-defined URL for this resource's resource
   * id.
   *
   * @var string
   */
  public $selfLinkWithId;
  /**
   * Output only. The current state of the Rollout.
   *
   * @var string
   */
  public $state;
  protected $waveDetailsType = RolloutWaveDetails::class;
  protected $waveDetailsDataType = 'array';

  /**
   * Output only. The timestamp at which the Rollout was cancelled.
   *
   * @param string $cancellationTime
   */
  public function setCancellationTime($cancellationTime)
  {
    $this->cancellationTime = $cancellationTime;
  }
  /**
   * @return string
   */
  public function getCancellationTime()
  {
    return $this->cancellationTime;
  }
  /**
   * Output only. The timestamp at which the Rollout was completed.
   *
   * @param string $completionTime
   */
  public function setCompletionTime($completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /**
   * @return string
   */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /**
   * Output only. [Output Only] Creation timestamp inRFC3339 text format.
   *
   * @param string $creationTimestamp
   */
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  /**
   * @return string
   */
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  /**
   * Output only. The number of the currently running wave. Ex. 1
   *
   * @param string $currentWaveNumber
   */
  public function setCurrentWaveNumber($currentWaveNumber)
  {
    $this->currentWaveNumber = $currentWaveNumber;
  }
  /**
   * @return string
   */
  public function getCurrentWaveNumber()
  {
    return $this->currentWaveNumber;
  }
  /**
   * An optional description of this resource. Provide this property when you
   * create the resource.
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
   * Output only. etag of the Rollout Ex. abc1234
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
   * Output only. [Output Only] The unique identifier for the resource. This
   * identifier is defined by the server.
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
   * Output only. [Output Only] Type of the resource. Always compute#rollout for
   * rollouts.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Name of the resource. Provided by the client when the resource is created.
   * The name must be 1-63 characters long, and comply withRFC1035.
   * Specifically, the name must be 1-63 characters long and match the regular
   * expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character
   * must be a lowercase letter, and all following characters must be a dash,
   * lowercase letter, or digit, except the last character, which cannot be a
   * dash.
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
   * Output only. The timestamp at which the Rollout was paused.
   *
   * @param string $pauseTime
   */
  public function setPauseTime($pauseTime)
  {
    $this->pauseTime = $pauseTime;
  }
  /**
   * @return string
   */
  public function getPauseTime()
  {
    return $this->pauseTime;
  }
  /**
   * Output only. The timestamp at which the Rollout was resumed.
   *
   * @param string $resumeTime
   */
  public function setResumeTime($resumeTime)
  {
    $this->resumeTime = $resumeTime;
  }
  /**
   * @return string
   */
  public function getResumeTime()
  {
    return $this->resumeTime;
  }
  /**
   * Required. The resource being rolled out.
   *
   * @param RolloutRolloutEntity $rolloutEntity
   */
  public function setRolloutEntity(RolloutRolloutEntity $rolloutEntity)
  {
    $this->rolloutEntity = $rolloutEntity;
  }
  /**
   * @return RolloutRolloutEntity
   */
  public function getRolloutEntity()
  {
    return $this->rolloutEntity;
  }
  /**
   * Required. Rollout Plan used to model the Rollout. Ex.
   * compute.googleapis.com/v1/projects/1234/rolloutPlans/rp1
   *
   * @param string $rolloutPlan
   */
  public function setRolloutPlan($rolloutPlan)
  {
    $this->rolloutPlan = $rolloutPlan;
  }
  /**
   * @return string
   */
  public function getRolloutPlan()
  {
    return $this->rolloutPlan;
  }
  /**
   * Output only. [Output Only] Server-defined fully-qualified URL for this
   * resource.
   *
   * @param string $selfLink
   */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /**
   * @return string
   */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /**
   * Output only. [Output Only] Server-defined URL for this resource's resource
   * id.
   *
   * @param string $selfLinkWithId
   */
  public function setSelfLinkWithId($selfLinkWithId)
  {
    $this->selfLinkWithId = $selfLinkWithId;
  }
  /**
   * @return string
   */
  public function getSelfLinkWithId()
  {
    return $this->selfLinkWithId;
  }
  /**
   * Output only. The current state of the Rollout.
   *
   * Accepted values: CANCELLED, CANCELLING, CANCEL_FAILED, COMPLETED,
   * COMPLETE_FAILED, COMPLETING, FAILED, PAUSED, PAUSE_FAILED, PAUSING,
   * PROCESSING, READY, RESUMING, ROLLBACK_WAVE_FAILED, ROLLING_BACK,
   * STATE_UNSPECIFIED, UNINITIALIZED, WAVE_FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Details about each wave of the rollout.
   *
   * @param RolloutWaveDetails[] $waveDetails
   */
  public function setWaveDetails($waveDetails)
  {
    $this->waveDetails = $waveDetails;
  }
  /**
   * @return RolloutWaveDetails[]
   */
  public function getWaveDetails()
  {
    return $this->waveDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Rollout::class, 'Google_Service_Compute_Rollout');
