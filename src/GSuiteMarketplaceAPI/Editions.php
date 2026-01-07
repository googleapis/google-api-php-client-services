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

namespace Google\Service\GSuiteMarketplaceAPI;

class Editions extends \Google\Model
{
  /**
   * (Deprecated)
   *
   * @deprecated
   * @var int
   */
  public $assignedSeats;
  /**
   * (Deprecated)
   *
   * @deprecated
   * @var string
   */
  public $editionId;
  /**
   * (Deprecated)
   *
   * @deprecated
   * @var int
   */
  public $seatCount;

  /**
   * (Deprecated)
   *
   * @deprecated
   * @param int $assignedSeats
   */
  public function setAssignedSeats($assignedSeats)
  {
    $this->assignedSeats = $assignedSeats;
  }
  /**
   * @deprecated
   * @return int
   */
  public function getAssignedSeats()
  {
    return $this->assignedSeats;
  }
  /**
   * (Deprecated)
   *
   * @deprecated
   * @param string $editionId
   */
  public function setEditionId($editionId)
  {
    $this->editionId = $editionId;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getEditionId()
  {
    return $this->editionId;
  }
  /**
   * (Deprecated)
   *
   * @deprecated
   * @param int $seatCount
   */
  public function setSeatCount($seatCount)
  {
    $this->seatCount = $seatCount;
  }
  /**
   * @deprecated
   * @return int
   */
  public function getSeatCount()
  {
    return $this->seatCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Editions::class, 'Google_Service_GSuiteMarketplaceAPI_Editions');
