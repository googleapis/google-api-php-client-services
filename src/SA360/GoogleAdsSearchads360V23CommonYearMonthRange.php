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

class GoogleAdsSearchads360V23CommonYearMonthRange extends \Google\Model
{
  protected $endType = GoogleAdsSearchads360V23CommonYearMonth::class;
  protected $endDataType = '';
  protected $startType = GoogleAdsSearchads360V23CommonYearMonth::class;
  protected $startDataType = '';

  /**
   * The inclusive end year month.
   *
   * @param GoogleAdsSearchads360V23CommonYearMonth $end
   */
  public function setEnd(GoogleAdsSearchads360V23CommonYearMonth $end)
  {
    $this->end = $end;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYearMonth
   */
  public function getEnd()
  {
    return $this->end;
  }
  /**
   * The inclusive start year month.
   *
   * @param GoogleAdsSearchads360V23CommonYearMonth $start
   */
  public function setStart(GoogleAdsSearchads360V23CommonYearMonth $start)
  {
    $this->start = $start;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYearMonth
   */
  public function getStart()
  {
    return $this->start;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonYearMonthRange::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonYearMonthRange');
