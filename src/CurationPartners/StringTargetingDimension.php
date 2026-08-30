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

namespace Google\Service\CurationPartners;

class StringTargetingDimension extends \Google\Collection
{
  /**
   * Unspecified selection type. Should not be used.
   */
  public const SELECTION_TYPE_SELECTION_TYPE_UNSPECIFIED = 'SELECTION_TYPE_UNSPECIFIED';
  /**
   * The values in the targeting dimension are included.
   */
  public const SELECTION_TYPE_SELECTION_TYPE_INCLUDE = 'SELECTION_TYPE_INCLUDE';
  /**
   * The values in the targeting dimension are excluded.
   */
  public const SELECTION_TYPE_SELECTION_TYPE_EXCLUDE = 'SELECTION_TYPE_EXCLUDE';
  protected $collection_key = 'values';
  /**
   * Required. How the items in this list should be targeted.
   *
   * @var string
   */
  public $selectionType;
  /**
   * Required. The values specified.
   *
   * @var string[]
   */
  public $values;

  /**
   * Required. How the items in this list should be targeted.
   *
   * Accepted values: SELECTION_TYPE_UNSPECIFIED, SELECTION_TYPE_INCLUDE,
   * SELECTION_TYPE_EXCLUDE
   *
   * @param self::SELECTION_TYPE_* $selectionType
   */
  public function setSelectionType($selectionType)
  {
    $this->selectionType = $selectionType;
  }
  /**
   * @return self::SELECTION_TYPE_*
   */
  public function getSelectionType()
  {
    return $this->selectionType;
  }
  /**
   * Required. The values specified.
   *
   * @param string[] $values
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return string[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StringTargetingDimension::class, 'Google_Service_CurationPartners_StringTargetingDimension');
