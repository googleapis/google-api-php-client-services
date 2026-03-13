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

namespace Google\Service\AndroidPublisher;

class ReleaseSummary extends \Google\Collection
{
  /**
   * Fallback value, do not use.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_UNSPECIFIED = 'RELEASE_LIFECYCLE_STATE_UNSPECIFIED';
  /**
   * Waiting to be saved and submitted.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_DRAFT = 'RELEASE_LIFECYCLE_STATE_DRAFT';
  /**
   * Not sent for review and waiting developer action.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_NOT_SENT_FOR_REVIEW = 'RELEASE_LIFECYCLE_STATE_NOT_SENT_FOR_REVIEW';
  /**
   * Sent for review and pending outcome before it can be published.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_IN_REVIEW = 'RELEASE_LIFECYCLE_STATE_IN_REVIEW';
  /**
   * Not yet published, but ready to be published and awaiting developer action.
   * Only applicable for developers with managed publishing turned on.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_APPROVED_NOT_PUBLISHED = 'RELEASE_LIFECYCLE_STATE_APPROVED_NOT_PUBLISHED';
  /**
   * Review submission was rejected.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_NOT_APPROVED = 'RELEASE_LIFECYCLE_STATE_NOT_APPROVED';
  /**
   * Published, includes latest halted release.
   */
  public const RELEASE_LIFECYCLE_STATE_RELEASE_LIFECYCLE_STATE_PUBLISHED = 'RELEASE_LIFECYCLE_STATE_PUBLISHED';
  protected $collection_key = 'activeArtifacts';
  protected $activeArtifactsType = ArtifactSummary::class;
  protected $activeArtifactsDataType = 'array';
  /**
   * The lifecycle state of the release.
   *
   * @var string
   */
  public $releaseLifecycleState;
  /**
   * The name of the release.
   *
   * @var string
   */
  public $releaseName;
  /**
   * The alias of the track that this release belongs to.
   *
   * @var string
   */
  public $track;

  /**
   * List of active artifacts on this release. This does not include controlled
   * artifacts.
   *
   * @param ArtifactSummary[] $activeArtifacts
   */
  public function setActiveArtifacts($activeArtifacts)
  {
    $this->activeArtifacts = $activeArtifacts;
  }
  /**
   * @return ArtifactSummary[]
   */
  public function getActiveArtifacts()
  {
    return $this->activeArtifacts;
  }
  /**
   * The lifecycle state of the release.
   *
   * Accepted values: RELEASE_LIFECYCLE_STATE_UNSPECIFIED,
   * RELEASE_LIFECYCLE_STATE_DRAFT, RELEASE_LIFECYCLE_STATE_NOT_SENT_FOR_REVIEW,
   * RELEASE_LIFECYCLE_STATE_IN_REVIEW,
   * RELEASE_LIFECYCLE_STATE_APPROVED_NOT_PUBLISHED,
   * RELEASE_LIFECYCLE_STATE_NOT_APPROVED, RELEASE_LIFECYCLE_STATE_PUBLISHED
   *
   * @param self::RELEASE_LIFECYCLE_STATE_* $releaseLifecycleState
   */
  public function setReleaseLifecycleState($releaseLifecycleState)
  {
    $this->releaseLifecycleState = $releaseLifecycleState;
  }
  /**
   * @return self::RELEASE_LIFECYCLE_STATE_*
   */
  public function getReleaseLifecycleState()
  {
    return $this->releaseLifecycleState;
  }
  /**
   * The name of the release.
   *
   * @param string $releaseName
   */
  public function setReleaseName($releaseName)
  {
    $this->releaseName = $releaseName;
  }
  /**
   * @return string
   */
  public function getReleaseName()
  {
    return $this->releaseName;
  }
  /**
   * The alias of the track that this release belongs to.
   *
   * @param string $track
   */
  public function setTrack($track)
  {
    $this->track = $track;
  }
  /**
   * @return string
   */
  public function getTrack()
  {
    return $this->track;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReleaseSummary::class, 'Google_Service_AndroidPublisher_ReleaseSummary');
