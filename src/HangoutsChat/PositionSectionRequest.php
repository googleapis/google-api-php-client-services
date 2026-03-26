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

namespace Google\Service\HangoutsChat;

class PositionSectionRequest extends \Google\Model
{
  /**
   * Unspecified position.
   */
  public const RELATIVE_POSITION_POSITION_UNSPECIFIED = 'POSITION_UNSPECIFIED';
  /**
   * Start of the list of sections.
   */
  public const RELATIVE_POSITION_START = 'START';
  /**
   * End of the list of sections.
   */
  public const RELATIVE_POSITION_END = 'END';
  /**
   * Optional. The relative position of the section in the list of sections.
   *
   * @var string
   */
  public $relativePosition;
  /**
   * Optional. The absolute position of the section in the list of sections. The
   * position must be greater than 0. If the position is greater than the number
   * of sections, the section will be appended to the end of the list. This
   * operation inserts the section at the given position and shifts the original
   * section at that position, and those below it, to the next position.
   *
   * @var int
   */
  public $sortOrder;

  /**
   * Optional. The relative position of the section in the list of sections.
   *
   * Accepted values: POSITION_UNSPECIFIED, START, END
   *
   * @param self::RELATIVE_POSITION_* $relativePosition
   */
  public function setRelativePosition($relativePosition)
  {
    $this->relativePosition = $relativePosition;
  }
  /**
   * @return self::RELATIVE_POSITION_*
   */
  public function getRelativePosition()
  {
    return $this->relativePosition;
  }
  /**
   * Optional. The absolute position of the section in the list of sections. The
   * position must be greater than 0. If the position is greater than the number
   * of sections, the section will be appended to the end of the list. This
   * operation inserts the section at the given position and shifts the original
   * section at that position, and those below it, to the next position.
   *
   * @param int $sortOrder
   */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /**
   * @return int
   */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PositionSectionRequest::class, 'Google_Service_HangoutsChat_PositionSectionRequest');
