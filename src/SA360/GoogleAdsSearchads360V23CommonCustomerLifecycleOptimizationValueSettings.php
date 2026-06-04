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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings extends \Google\Model
{
  /**
   * High lifetime value of the lifecycle goal. For example, for customer
   * acquisition goals, high lifetime value is the incremental conversion value
   * for lapsed customers who are of high value. High lifetime value should be
   * greater than value, if set.
   *
   * @var 
   */
  public $additionalHighLifetimeValue;
  /**
   * Value of the lifecycle goal. For example, for retention goals, value is the
   * incremental conversion value for lapsed customers who are not of high
   * value.
   *
   * @var 
   */
  public $additionalValue;

  public function setAdditionalHighLifetimeValue($additionalHighLifetimeValue)
  {
    $this->additionalHighLifetimeValue = $additionalHighLifetimeValue;
  }
  public function getAdditionalHighLifetimeValue()
  {
    return $this->additionalHighLifetimeValue;
  }
  public function setAdditionalValue($additionalValue)
  {
    $this->additionalValue = $additionalValue;
  }
  public function getAdditionalValue()
  {
    return $this->additionalValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings');
