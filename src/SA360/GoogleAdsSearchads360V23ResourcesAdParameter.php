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

class GoogleAdsSearchads360V23ResourcesAdParameter extends \Google\Model
{
  /**
   * Immutable. The ad group criterion that this ad parameter belongs to.
   *
   * @var string
   */
  public $adGroupCriterion;
  /**
   * Numeric value to insert into the ad text. The following restrictions apply:
   * - Can use comma or period as a separator, with an optional period or comma
   * (respectively) for fractional values. For example, 1,000,000.00 and
   * 2.000.000,10 are valid. - Can be prepended or appended with a currency
   * symbol. For example, $99.99 is valid. - Can be prepended or appended with a
   * currency code. For example, 99.99USD and EUR200 are valid. - Can use '%'.
   * For example, 1.0% and 1,0% are valid. - Can use plus or minus. For example,
   * -10.99 and 25+ are valid. - Can use '/' between two numbers. For example
   * 4/1 and 0.95/0.45 are valid.
   *
   * @var string
   */
  public $insertionText;
  /**
   * Immutable. The unique index of this ad parameter. Must be either 1 or 2.
   *
   * @var string
   */
  public $parameterIndex;
  /**
   * Immutable. The resource name of the ad parameter. Ad parameter resource
   * names have the form: `customers/{customer_id}/adParameters/{ad_group_id}~{c
   * riterion_id}~{parameter_index}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Immutable. The ad group criterion that this ad parameter belongs to.
   *
   * @param string $adGroupCriterion
   */
  public function setAdGroupCriterion($adGroupCriterion)
  {
    $this->adGroupCriterion = $adGroupCriterion;
  }
  /**
   * @return string
   */
  public function getAdGroupCriterion()
  {
    return $this->adGroupCriterion;
  }
  /**
   * Numeric value to insert into the ad text. The following restrictions apply:
   * - Can use comma or period as a separator, with an optional period or comma
   * (respectively) for fractional values. For example, 1,000,000.00 and
   * 2.000.000,10 are valid. - Can be prepended or appended with a currency
   * symbol. For example, $99.99 is valid. - Can be prepended or appended with a
   * currency code. For example, 99.99USD and EUR200 are valid. - Can use '%'.
   * For example, 1.0% and 1,0% are valid. - Can use plus or minus. For example,
   * -10.99 and 25+ are valid. - Can use '/' between two numbers. For example
   * 4/1 and 0.95/0.45 are valid.
   *
   * @param string $insertionText
   */
  public function setInsertionText($insertionText)
  {
    $this->insertionText = $insertionText;
  }
  /**
   * @return string
   */
  public function getInsertionText()
  {
    return $this->insertionText;
  }
  /**
   * Immutable. The unique index of this ad parameter. Must be either 1 or 2.
   *
   * @param string $parameterIndex
   */
  public function setParameterIndex($parameterIndex)
  {
    $this->parameterIndex = $parameterIndex;
  }
  /**
   * @return string
   */
  public function getParameterIndex()
  {
    return $this->parameterIndex;
  }
  /**
   * Immutable. The resource name of the ad parameter. Ad parameter resource
   * names have the form: `customers/{customer_id}/adParameters/{ad_group_id}~{c
   * riterion_id}~{parameter_index}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdParameter::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdParameter');
