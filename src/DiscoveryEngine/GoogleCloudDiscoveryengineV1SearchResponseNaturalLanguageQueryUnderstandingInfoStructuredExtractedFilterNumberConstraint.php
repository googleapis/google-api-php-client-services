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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint extends \Google\Model
{
  /**
   * Undefined comparison operator.
   */
  public const COMPARISON_COMPARISON_UNSPECIFIED = 'COMPARISON_UNSPECIFIED';
  /**
   * Denotes equality `=` operator.
   */
  public const COMPARISON_EQUALS = 'EQUALS';
  /**
   * Denotes less than or equal to `<=` operator.
   */
  public const COMPARISON_LESS_THAN_EQUALS = 'LESS_THAN_EQUALS';
  /**
   * Denotes less than `<` operator.
   */
  public const COMPARISON_LESS_THAN = 'LESS_THAN';
  /**
   * Denotes greater than or equal to `>=` operator.
   */
  public const COMPARISON_GREATER_THAN_EQUALS = 'GREATER_THAN_EQUALS';
  /**
   * Denotes greater than `>` operator.
   */
  public const COMPARISON_GREATER_THAN = 'GREATER_THAN';
  /**
   * The comparison operation performed between the field value and the value
   * specified in the constraint.
   *
   * @var string
   */
  public $comparison;
  /**
   * Name of the numerical field as defined in the schema.
   *
   * @var string
   */
  public $fieldName;
  /**
   * Identifies the keywords within the search query that match a filter.
   *
   * @var string
   */
  public $querySegment;
  /**
   * The value specified in the numerical constraint.
   *
   * @var 
   */
  public $value;

  /**
   * The comparison operation performed between the field value and the value
   * specified in the constraint.
   *
   * Accepted values: COMPARISON_UNSPECIFIED, EQUALS, LESS_THAN_EQUALS,
   * LESS_THAN, GREATER_THAN_EQUALS, GREATER_THAN
   *
   * @param self::COMPARISON_* $comparison
   */
  public function setComparison($comparison)
  {
    $this->comparison = $comparison;
  }
  /**
   * @return self::COMPARISON_*
   */
  public function getComparison()
  {
    return $this->comparison;
  }
  /**
   * Name of the numerical field as defined in the schema.
   *
   * @param string $fieldName
   */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /**
   * @return string
   */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /**
   * Identifies the keywords within the search query that match a filter.
   *
   * @param string $querySegment
   */
  public function setQuerySegment($querySegment)
  {
    $this->querySegment = $querySegment;
  }
  /**
   * @return string
   */
  public function getQuerySegment()
  {
    return $this->querySegment;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchResponseNaturalLanguageQueryUnderstandingInfoStructuredExtractedFilterNumberConstraint');
