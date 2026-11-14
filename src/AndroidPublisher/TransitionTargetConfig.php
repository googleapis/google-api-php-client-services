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

class TransitionTargetConfig extends \Google\Model
{
  /**
   * Required. The ID of the transition target base plan.
   *
   * @var string
   */
  public $basePlanId;
  /**
   * Required. The ID of the parent subscription this transition target base
   * plan belongs to.
   *
   * @var string
   */
  public $productId;

  /**
   * Required. The ID of the transition target base plan.
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
   * Required. The ID of the parent subscription this transition target base
   * plan belongs to.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransitionTargetConfig::class, 'Google_Service_AndroidPublisher_TransitionTargetConfig');
