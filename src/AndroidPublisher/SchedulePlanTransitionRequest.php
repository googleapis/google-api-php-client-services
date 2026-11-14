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

class SchedulePlanTransitionRequest extends \Google\Model
{
  protected $definiteTransitionType = DefiniteTransition::class;
  protected $definiteTransitionDataType = '';
  /**
   * Required. The earliest time at which the plan transition may take effect.
   * The actual transition will take place at the time of renewal on or after
   * this time.
   *
   * @var string
   */
  public $earliestTransitionEffectiveTime;
  /**
   * If set, the API will fail if the etag does not match the latest etag for
   * this subscription. The etag is retrieved from
   * purchases.subscriptionsv2.get: https://developers.google.com/android-
   * publisher/api-ref/rest/v3/purchases.subscriptionsv2/get
   *
   * @var string
   */
  public $etag;
  /**
   * Required. The subscription product (for example, 'premium_plan') for which
   * the transition must be scheduled.
   *
   * @var string
   */
  public $productId;
  protected $tentativeTransitionType = TentativeTransition::class;
  protected $tentativeTransitionDataType = '';

  /**
   * When using this mode, the user's transition to the new plan is definite,
   * and cannot be canceled.
   *
   * @param DefiniteTransition $definiteTransition
   */
  public function setDefiniteTransition(DefiniteTransition $definiteTransition)
  {
    $this->definiteTransition = $definiteTransition;
  }
  /**
   * @return DefiniteTransition
   */
  public function getDefiniteTransition()
  {
    return $this->definiteTransition;
  }
  /**
   * Required. The earliest time at which the plan transition may take effect.
   * The actual transition will take place at the time of renewal on or after
   * this time.
   *
   * @param string $earliestTransitionEffectiveTime
   */
  public function setEarliestTransitionEffectiveTime($earliestTransitionEffectiveTime)
  {
    $this->earliestTransitionEffectiveTime = $earliestTransitionEffectiveTime;
  }
  /**
   * @return string
   */
  public function getEarliestTransitionEffectiveTime()
  {
    return $this->earliestTransitionEffectiveTime;
  }
  /**
   * If set, the API will fail if the etag does not match the latest etag for
   * this subscription. The etag is retrieved from
   * purchases.subscriptionsv2.get: https://developers.google.com/android-
   * publisher/api-ref/rest/v3/purchases.subscriptionsv2/get
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
   * Required. The subscription product (for example, 'premium_plan') for which
   * the transition must be scheduled.
   *
   * @param string $productId
   */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /**
   * @return string
   */
  public function getProductId()
  {
    return $this->productId;
  }
  /**
   * When using this mode, the user's transition to the new plan is tentative,
   * and can be canceled.
   *
   * @param TentativeTransition $tentativeTransition
   */
  public function setTentativeTransition(TentativeTransition $tentativeTransition)
  {
    $this->tentativeTransition = $tentativeTransition;
  }
  /**
   * @return TentativeTransition
   */
  public function getTentativeTransition()
  {
    return $this->tentativeTransition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SchedulePlanTransitionRequest::class, 'Google_Service_AndroidPublisher_SchedulePlanTransitionRequest');
