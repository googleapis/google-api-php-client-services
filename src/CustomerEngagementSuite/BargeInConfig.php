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

namespace Google\Service\CustomerEngagementSuite;

class BargeInConfig extends \Google\Model
{
  /**
   * Optional. If enabled, the agent will adapt its next response based on the
   * assumption that the user hasn't heard the full preceding agent message.
   * This should not be used in scenarios where agent responses are displayed
   * visually.
   *
   * @var bool
   */
  public $bargeInAwareness;
  /**
   * Optional. Disables user barge-in while the agent is speaking. If true, user
   * input during agent response playback will be ignored. Deprecated:
   * `disable_barge_in` is deprecated in favor of `disable_barge_in_control` in
   * ChannelProfile.
   *
   * @deprecated
   * @var bool
   */
  public $disableBargeIn;

  /**
   * Optional. If enabled, the agent will adapt its next response based on the
   * assumption that the user hasn't heard the full preceding agent message.
   * This should not be used in scenarios where agent responses are displayed
   * visually.
   *
   * @param bool $bargeInAwareness
   */
  public function setBargeInAwareness($bargeInAwareness)
  {
    $this->bargeInAwareness = $bargeInAwareness;
  }
  /**
   * @return bool
   */
  public function getBargeInAwareness()
  {
    return $this->bargeInAwareness;
  }
  /**
   * Optional. Disables user barge-in while the agent is speaking. If true, user
   * input during agent response playback will be ignored. Deprecated:
   * `disable_barge_in` is deprecated in favor of `disable_barge_in_control` in
   * ChannelProfile.
   *
   * @deprecated
   * @param bool $disableBargeIn
   */
  public function setDisableBargeIn($disableBargeIn)
  {
    $this->disableBargeIn = $disableBargeIn;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getDisableBargeIn()
  {
    return $this->disableBargeIn;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BargeInConfig::class, 'Google_Service_CustomerEngagementSuite_BargeInConfig');
