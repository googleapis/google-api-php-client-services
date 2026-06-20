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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate extends \Google\Model
{
  /**
   * Unspecified comparison operator. This value should not be used.
   */
  public const COMPARISON_OPERATOR_COMPARISON_OPERATOR_UNSPECIFIED = 'COMPARISON_OPERATOR_UNSPECIFIED';
  /**
   * Less than.
   */
  public const COMPARISON_OPERATOR_LESS = 'LESS';
  /**
   * Less than or equal to.
   */
  public const COMPARISON_OPERATOR_LESS_OR_EQUAL = 'LESS_OR_EQUAL';
  /**
   * Equal to.
   */
  public const COMPARISON_OPERATOR_EQUAL = 'EQUAL';
  /**
   * Not equal to.
   */
  public const COMPARISON_OPERATOR_NOT_EQUAL = 'NOT_EQUAL';
  /**
   * Greater than or equal to.
   */
  public const COMPARISON_OPERATOR_GREATER_OR_EQUAL = 'GREATER_OR_EQUAL';
  /**
   * Greater than.
   */
  public const COMPARISON_OPERATOR_GREATER = 'GREATER';
  /**
   * Required. The comparison operator to apply.
   *
   * @var string
   */
  public $comparisonOperator;
  /**
   * Required. The value to compare against.
   *
   * @var float
   */
  public $value;

  /**
   * Required. The comparison operator to apply.
   *
   * Accepted values: COMPARISON_OPERATOR_UNSPECIFIED, LESS, LESS_OR_EQUAL,
   * EQUAL, NOT_EQUAL, GREATER_OR_EQUAL, GREATER
   *
   * @param self::COMPARISON_OPERATOR_* $comparisonOperator
   */
  public function setComparisonOperator($comparisonOperator)
  {
    $this->comparisonOperator = $comparisonOperator;
  }
  /**
   * @return self::COMPARISON_OPERATOR_*
   */
  public function getComparisonOperator()
  {
    return $this->comparisonOperator;
  }
  /**
   * Required. The value to compare against.
   *
   * @param float $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return float
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate');
