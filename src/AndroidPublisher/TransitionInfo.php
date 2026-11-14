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

class TransitionInfo extends \Google\Model
{
  /**
   * Unspecified transition state.
   */
  public const TRANSITION_STATE_TRANSITION_STATE_UNSPECIFIED = 'TRANSITION_STATE_UNSPECIFIED';
  /**
   * The transition is scheduled to start in the future.
   */
  public const TRANSITION_STATE_SCHEDULED = 'SCHEDULED';
  /**
   * The transition process has been initiated and the initial transition
   * notification has been sent to the user.
   */
  public const TRANSITION_STATE_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * The transition has been completed.
   */
  public const TRANSITION_STATE_COMPLETED = 'COMPLETED';
  /**
   * The transition was canceled.
   */
  public const TRANSITION_STATE_CANCELED = 'CANCELED';
  /**
   * The current expected time at which the plan may be transitioned. This is
   * subject to change (to a future time) due to cases where the renewal time
   * shifts like pause and account hold.
   *
   * @var string
   */
  public $expectedTransitionTime;
  protected $priceType = Money::class;
  protected $priceDataType = '';
  /**
   * Output only. [Required] The current state of the transition.
   *
   * @var string
   */
  public $transitionState;

  /**
   * The current expected time at which the plan may be transitioned. This is
   * subject to change (to a future time) due to cases where the renewal time
   * shifts like pause and account hold.
   *
   * @param string $expectedTransitionTime
   */
  public function setExpectedTransitionTime($expectedTransitionTime)
  {
    $this->expectedTransitionTime = $expectedTransitionTime;
  }
  /**
   * @return string
   */
  public function getExpectedTransitionTime()
  {
    return $this->expectedTransitionTime;
  }
  /**
   * The default base plan price to which the plan will be transitioned.
   *
   * @param Money $price
   */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /**
   * @return Money
   */
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * Output only. [Required] The current state of the transition.
   *
   * Accepted values: TRANSITION_STATE_UNSPECIFIED, SCHEDULED, IN_PROGRESS,
   * COMPLETED, CANCELED
   *
   * @param self::TRANSITION_STATE_* $transitionState
   */
  public function setTransitionState($transitionState)
  {
    $this->transitionState = $transitionState;
  }
  /**
   * @return self::TRANSITION_STATE_*
   */
  public function getTransitionState()
  {
    return $this->transitionState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransitionInfo::class, 'Google_Service_AndroidPublisher_TransitionInfo');
