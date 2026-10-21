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

class Review extends \Google\Model
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
   * Output only. Timestamp when the review reached a terminal state.
   *
   * @var string
   */
  public $endTime;
  /**
   * Identifier. Resource name in format
   * `documents/{document}/reviews/{review}`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Estimated completion progress percentage of the review in [0,
   * 100].
   *
   * @var int
   */
  public $progressPercent;
  protected $resultType = Result::class;
  protected $resultDataType = '';
  protected $runConfigType = DeepReviewRunConfig::class;
  protected $runConfigDataType = '';
  /**
   * Output only. Timestamp when the worker started evaluation.
   *
   * @var string
   */
  public $startTime;
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
   * Output only. Timestamp when the review reached a terminal state.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Identifier. Resource name in format
   * `documents/{document}/reviews/{review}`.
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
   * Output only. Estimated completion progress percentage of the review in [0,
   * 100].
   *
   * @param int $progressPercent
   */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /**
   * @return int
   */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /**
   * Output only. Review output (markdown, errors, and future modalities).
   *
   * @param Result $result
   */
  public function setResult(Result $result)
  {
    $this->result = $result;
  }
  /**
   * @return Result
   */
  public function getResult()
  {
    return $this->result;
  }
  /**
   * Optional. Run configuration parameters used for this review.
   *
   * @param DeepReviewRunConfig $runConfig
   */
  public function setRunConfig(DeepReviewRunConfig $runConfig)
  {
    $this->runConfig = $runConfig;
  }
  /**
   * @return DeepReviewRunConfig
   */
  public function getRunConfig()
  {
    return $this->runConfig;
  }
  /**
   * Output only. Timestamp when the worker started evaluation.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
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
class_alias(Review::class, 'Google_Service_DeepReview_Review');
