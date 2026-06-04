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

class GoogleAdsSearchads360V23CommonIncomeRangeInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * 0%-50%.
   */
  public const TYPE_INCOME_RANGE_0_50 = 'INCOME_RANGE_0_50';
  /**
   * 50% to 60%.
   */
  public const TYPE_INCOME_RANGE_50_60 = 'INCOME_RANGE_50_60';
  /**
   * 60% to 70%.
   */
  public const TYPE_INCOME_RANGE_60_70 = 'INCOME_RANGE_60_70';
  /**
   * 70% to 80%.
   */
  public const TYPE_INCOME_RANGE_70_80 = 'INCOME_RANGE_70_80';
  /**
   * 80% to 90%.
   */
  public const TYPE_INCOME_RANGE_80_90 = 'INCOME_RANGE_80_90';
  /**
   * Greater than 90%.
   */
  public const TYPE_INCOME_RANGE_90_UP = 'INCOME_RANGE_90_UP';
  /**
   * Undetermined income range.
   */
  public const TYPE_INCOME_RANGE_UNDETERMINED = 'INCOME_RANGE_UNDETERMINED';
  /**
   * Type of the income range.
   *
   * @var string
   */
  public $type;

  /**
   * Type of the income range.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INCOME_RANGE_0_50,
   * INCOME_RANGE_50_60, INCOME_RANGE_60_70, INCOME_RANGE_70_80,
   * INCOME_RANGE_80_90, INCOME_RANGE_90_UP, INCOME_RANGE_UNDETERMINED
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonIncomeRangeInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonIncomeRangeInfo');
