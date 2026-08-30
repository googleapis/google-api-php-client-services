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

namespace Google\Service\AgenciesAndBrands;

class FieldFilter extends \Google\Collection
{
  /**
   * For scalar operands, checks if the operand is in the set of provided filter
   * values. For list operands, checks if any element in the operand is in the
   * set of provided filter values. Default value.
   */
  public const OPERATION_IN = 'IN';
  /**
   * For scalar operands, checks that the operand is not in the set of provided
   * filter values. For list operands, checks that none of the elements in the
   * operand is in the set of provided filter values.
   */
  public const OPERATION_NOT_IN = 'NOT_IN';
  /**
   * For scalar string operands, checks if the operand contains any of the
   * provided filter substrings. For string list operands, checks if any string
   * in the operand contains any of the provided filter substrings.
   */
  public const OPERATION_CONTAINS = 'CONTAINS';
  /**
   * For scalar string operands, checks that the operand contains none of the
   * provided filter substrings. For string list operands, checks that none of
   * the strings in the operand contain none of the provided filter substrings.
   */
  public const OPERATION_NOT_CONTAINS = 'NOT_CONTAINS';
  /**
   * Operand is less than the provided filter value.
   */
  public const OPERATION_LESS_THAN = 'LESS_THAN';
  /**
   * Operand is less than or equal to provided filter value.
   */
  public const OPERATION_LESS_THAN_EQUALS = 'LESS_THAN_EQUALS';
  /**
   * Operand is greater than provided filter value.
   */
  public const OPERATION_GREATER_THAN = 'GREATER_THAN';
  /**
   * Operand is greater than or equal to provided filter value.
   */
  public const OPERATION_GREATER_THAN_EQUALS = 'GREATER_THAN_EQUALS';
  /**
   * Operand is between provided filter values.
   */
  public const OPERATION_BETWEEN = 'BETWEEN';
  /**
   * Operand matches against a regular expression or set of regular expressions
   * (one must match).
   */
  public const OPERATION_MATCHES = 'MATCHES';
  /**
   * Operand negative matches against a regular expression or set of regular
   * expressions (none must match).
   */
  public const OPERATION_NOT_MATCHES = 'NOT_MATCHES';
  protected $collection_key = 'values';
  protected $fieldType = Field::class;
  protected $fieldDataType = '';
  /**
   * Required. The operation of this filter.
   *
   * @var string
   */
  public $operation;
  protected $valuesType = ReportValue::class;
  protected $valuesDataType = 'array';

  /**
   * Required. The field to filter on.
   *
   * @param Field $field
   */
  public function setField(Field $field)
  {
    $this->field = $field;
  }
  /**
   * @return Field
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * Required. The operation of this filter.
   *
   * Accepted values: IN, NOT_IN, CONTAINS, NOT_CONTAINS, LESS_THAN,
   * LESS_THAN_EQUALS, GREATER_THAN, GREATER_THAN_EQUALS, BETWEEN, MATCHES,
   * NOT_MATCHES
   *
   * @param self::OPERATION_* $operation
   */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return self::OPERATION_*
   */
  public function getOperation()
  {
    return $this->operation;
  }
  /**
   * Required. Values to filter to.
   *
   * @param ReportValue[] $values
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return ReportValue[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldFilter::class, 'Google_Service_AgenciesAndBrands_FieldFilter');
