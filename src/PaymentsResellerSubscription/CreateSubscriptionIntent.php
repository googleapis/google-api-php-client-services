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

namespace Google\Service\PaymentsResellerSubscription;

class CreateSubscriptionIntent extends \Google\Model
{
  protected $cycleOptionsType = CycleOptions::class;
  protected $cycleOptionsDataType = '';
  /**
   * @var string
   */
  public $parent;
  protected $subscriptionType = Subscription::class;
  protected $subscriptionDataType = '';
  /**
   * @var string
   */
  public $subscriptionId;

  /**
   * @param CycleOptions
   */
  public function setCycleOptions(CycleOptions $cycleOptions)
  {
    $this->cycleOptions = $cycleOptions;
  }
  /**
   * @return CycleOptions
   */
  public function getCycleOptions()
  {
    return $this->cycleOptions;
  }
  /**
   * @param string
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * @param Subscription
   */
  public function setSubscription(Subscription $subscription)
  {
    $this->subscription = $subscription;
  }
  /**
   * @return Subscription
   */
  public function getSubscription()
  {
    return $this->subscription;
  }
  /**
   * @param string
   */
  public function setSubscriptionId($subscriptionId)
  {
    $this->subscriptionId = $subscriptionId;
  }
  /**
   * @return string
   */
  public function getSubscriptionId()
  {
    return $this->subscriptionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateSubscriptionIntent::class, 'Google_Service_PaymentsResellerSubscription_CreateSubscriptionIntent');
