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

class UserQuota extends \Google\Model
{
  /**
   * Output only. Remaining non-expiring bonus free-tier review credits. Bonus
   * credits are consumed only after the rolling 7-day weekly allowance is
   * exhausted and are included in `remaining_review_count`.
   *
   * @var int
   */
  public $bonusReviewCount;
  /**
   * Output only. Whether a custom per-user quota override is active for this
   * user.
   *
   * @var bool
   */
  public $customLimitEnabled;
  /**
   * Output only. Maximum free-tier reviews allowed per rolling 7-day window.
   *
   * @var int
   */
  public $maxReviewCountPerWeek;
  /**
   * Identifier. Resource name of the singleton user quota (`userQuota`).
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when the next review quota slot becomes available if
   * `remaining_review_count` is 0; unset when quota is currently available.
   *
   * @var string
   */
  public $nextAvailableTime;
  /**
   * Output only. Total remaining free-tier reviews currently available,
   * combining the remaining rolling 7-day weekly allowance and any non-expiring
   * bonus credits (`max(0, max_review_count_per_week - used_review_count) +
   * bonus_review_count`).
   *
   * @var int
   */
  public $remainingReviewCount;
  /**
   * Output only. Number of free-tier reviews used in the past 7 days.
   *
   * @var int
   */
  public $usedReviewCount;

  /**
   * Output only. Remaining non-expiring bonus free-tier review credits. Bonus
   * credits are consumed only after the rolling 7-day weekly allowance is
   * exhausted and are included in `remaining_review_count`.
   *
   * @param int $bonusReviewCount
   */
  public function setBonusReviewCount($bonusReviewCount)
  {
    $this->bonusReviewCount = $bonusReviewCount;
  }
  /**
   * @return int
   */
  public function getBonusReviewCount()
  {
    return $this->bonusReviewCount;
  }
  /**
   * Output only. Whether a custom per-user quota override is active for this
   * user.
   *
   * @param bool $customLimitEnabled
   */
  public function setCustomLimitEnabled($customLimitEnabled)
  {
    $this->customLimitEnabled = $customLimitEnabled;
  }
  /**
   * @return bool
   */
  public function getCustomLimitEnabled()
  {
    return $this->customLimitEnabled;
  }
  /**
   * Output only. Maximum free-tier reviews allowed per rolling 7-day window.
   *
   * @param int $maxReviewCountPerWeek
   */
  public function setMaxReviewCountPerWeek($maxReviewCountPerWeek)
  {
    $this->maxReviewCountPerWeek = $maxReviewCountPerWeek;
  }
  /**
   * @return int
   */
  public function getMaxReviewCountPerWeek()
  {
    return $this->maxReviewCountPerWeek;
  }
  /**
   * Identifier. Resource name of the singleton user quota (`userQuota`).
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
   * Output only. Timestamp when the next review quota slot becomes available if
   * `remaining_review_count` is 0; unset when quota is currently available.
   *
   * @param string $nextAvailableTime
   */
  public function setNextAvailableTime($nextAvailableTime)
  {
    $this->nextAvailableTime = $nextAvailableTime;
  }
  /**
   * @return string
   */
  public function getNextAvailableTime()
  {
    return $this->nextAvailableTime;
  }
  /**
   * Output only. Total remaining free-tier reviews currently available,
   * combining the remaining rolling 7-day weekly allowance and any non-expiring
   * bonus credits (`max(0, max_review_count_per_week - used_review_count) +
   * bonus_review_count`).
   *
   * @param int $remainingReviewCount
   */
  public function setRemainingReviewCount($remainingReviewCount)
  {
    $this->remainingReviewCount = $remainingReviewCount;
  }
  /**
   * @return int
   */
  public function getRemainingReviewCount()
  {
    return $this->remainingReviewCount;
  }
  /**
   * Output only. Number of free-tier reviews used in the past 7 days.
   *
   * @param int $usedReviewCount
   */
  public function setUsedReviewCount($usedReviewCount)
  {
    $this->usedReviewCount = $usedReviewCount;
  }
  /**
   * @return int
   */
  public function getUsedReviewCount()
  {
    return $this->usedReviewCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserQuota::class, 'Google_Service_DeepReview_UserQuota');
