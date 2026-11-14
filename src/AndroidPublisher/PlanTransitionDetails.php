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

class PlanTransitionDetails extends \Google\Model
{
  /**
   * [Required] The base plan ID to which this plan would be transitioned.
   *
   * @var string
   */
  public $basePlanId;
  /**
   * [Required] The product ID to which this plan would be transitioned, (for
   * example, 'monthly001').
   *
   * @var string
   */
  public $productId;
  protected $transitionInfoType = TransitionInfo::class;
  protected $transitionInfoDataType = '';

  /**
   * [Required] The base plan ID to which this plan would be transitioned.
   *
   * @param string $basePlanId
   */
  public function setBasePlanId($basePlanId)
  {
    $this->basePlanId = $basePlanId;
  }
  /**
   * @return string
   */
  public function getBasePlanId()
  {
    return $this->basePlanId;
  }
  /**
   * [Required] The product ID to which this plan would be transitioned, (for
   * example, 'monthly001').
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
   * Additional info about the scheduled plan transition. Will be present only
   * if a plan transition has been scheduled.
   *
   * @param TransitionInfo $transitionInfo
   */
  public function setTransitionInfo(TransitionInfo $transitionInfo)
  {
    $this->transitionInfo = $transitionInfo;
  }
  /**
   * @return TransitionInfo
   */
  public function getTransitionInfo()
  {
    return $this->transitionInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlanTransitionDetails::class, 'Google_Service_AndroidPublisher_PlanTransitionDetails');
