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

class DurationRange extends \Google\Model
{
  /**
   * Output only. Upper bound of the estimated review duration.
   *
   * @var string
   */
  public $maxDuration;
  /**
   * Output only. Lower bound of the estimated review duration.
   *
   * @var string
   */
  public $minDuration;

  /**
   * Output only. Upper bound of the estimated review duration.
   *
   * @param string $maxDuration
   */
  public function setMaxDuration($maxDuration)
  {
    $this->maxDuration = $maxDuration;
  }
  /**
   * @return string
   */
  public function getMaxDuration()
  {
    return $this->maxDuration;
  }
  /**
   * Output only. Lower bound of the estimated review duration.
   *
   * @param string $minDuration
   */
  public function setMinDuration($minDuration)
  {
    $this->minDuration = $minDuration;
  }
  /**
   * @return string
   */
  public function getMinDuration()
  {
    return $this->minDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DurationRange::class, 'Google_Service_DeepReview_DurationRange');
