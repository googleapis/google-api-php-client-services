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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1AutoLabelingRuleLabelingCondition extends \Google\Model
{
  /**
   * A optional CEL expression to be evaluated as a boolean value. Once
   * evaluated as true, then we will proceed with the value evaluation. An empty
   * condition will be auto evaluated as true.
   *
   * @var string
   */
  public $condition;
  /**
   * CEL expression to be evaluated as the value.
   *
   * @var string
   */
  public $value;

  /**
   * A optional CEL expression to be evaluated as a boolean value. Once
   * evaluated as true, then we will proceed with the value evaluation. An empty
   * condition will be auto evaluated as true.
   *
   * @param string $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return string
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * CEL expression to be evaluated as the value.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1AutoLabelingRuleLabelingCondition::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AutoLabelingRuleLabelingCondition');
