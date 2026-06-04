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

class GoogleAdsSearchads360V23CommonTargetRestrictionOperation extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const OPERATOR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const OPERATOR_UNKNOWN = 'UNKNOWN';
  /**
   * Add the restriction to the existing restrictions.
   */
  public const OPERATOR_ADD = 'ADD';
  /**
   * Remove the restriction from the existing restrictions.
   */
  public const OPERATOR_REMOVE = 'REMOVE';
  /**
   * Type of list operation to perform.
   *
   * @var string
   */
  public $operator;
  protected $valueType = GoogleAdsSearchads360V23CommonTargetRestriction::class;
  protected $valueDataType = '';

  /**
   * Type of list operation to perform.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADD, REMOVE
   *
   * @param self::OPERATOR_* $operator
   */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /**
   * @return self::OPERATOR_*
   */
  public function getOperator()
  {
    return $this->operator;
  }
  /**
   * The target restriction being added to or removed from the list.
   *
   * @param GoogleAdsSearchads360V23CommonTargetRestriction $value
   */
  public function setValue(GoogleAdsSearchads360V23CommonTargetRestriction $value)
  {
    $this->value = $value;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetRestriction
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonTargetRestrictionOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTargetRestrictionOperation');
