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

namespace Google\Service\GoogleHealthAPI;

class CivilTimeInterval extends \Google\Model
{
  protected $endType = CivilDateTime::class;
  protected $endDataType = '';
  protected $startType = CivilDateTime::class;
  protected $startDataType = '';

  /**
   * Required. The exclusive end of the range.
   *
   * @param CivilDateTime $end
   */
  public function setEnd(CivilDateTime $end)
  {
    $this->end = $end;
  }
  /**
   * @return CivilDateTime
   */
  public function getEnd()
  {
    return $this->end;
  }
  /**
   * Required. The inclusive start of the range.
   *
   * @param CivilDateTime $start
   */
  public function setStart(CivilDateTime $start)
  {
    $this->start = $start;
  }
  /**
   * @return CivilDateTime
   */
  public function getStart()
  {
    return $this->start;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CivilTimeInterval::class, 'Google_Service_GoogleHealthAPI_CivilTimeInterval');
