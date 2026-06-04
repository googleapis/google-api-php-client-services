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

class GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo extends \Google\Model
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
   * Dates selected by default.
   */
  public const TYPE_DEFAULT_SELECTION = 'DEFAULT_SELECTION';
  /**
   * Dates selected by the user.
   */
  public const TYPE_USER_SELECTED = 'USER_SELECTED';
  /**
   * Type of the hotel date selection
   *
   * @var string
   */
  public $type;

  /**
   * Type of the hotel date selection
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DEFAULT_SELECTION, USER_SELECTED
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
class_alias(GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo');
