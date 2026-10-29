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

namespace Google\Service\DeepReview;

class ReviewSummary extends \Google\Model
{
  /**
   * Default unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Review created and queued, awaiting worker scheduling.
   */
  public const STATE_PENDING = 'PENDING';
  /**
   * Review worker is actively evaluating the document.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * Review succeeded with generated report.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Review failed after exhausting retry attempts.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. Timestamp when this review attempt was initiated.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Resource name of the Review.
   *
   * @var string
   */
  public $review;
  /**
   * Output only. Current review lifecycle state.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Timestamp when this review attempt was initiated.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Resource name of the Review.
   *
   * @param string $review
   */
  public function setReview($review)
  {
    $this->review = $review;
  }
  /**
   * @return string
   */
  public function getReview()
  {
    return $this->review;
  }
  /**
   * Output only. Current review lifecycle state.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING, RUNNING, SUCCEEDED, FAILED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReviewSummary::class, 'Google_Service_DeepReview_ReviewSummary');
