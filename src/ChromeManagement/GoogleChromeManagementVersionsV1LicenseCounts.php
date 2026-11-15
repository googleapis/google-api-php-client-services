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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1LicenseCounts extends \Google\Model
{
  /**
   * Output only. Total number of licenses currently assigned to users or
   * devices.
   *
   * @var string
   */
  public $assignedCount;
  /**
   * Output only. Total number of licenses purchased.
   *
   * @var string
   */
  public $totalPurchasedCount;
  /**
   * Output only. Total number of licenses available for assignment.
   *
   * @var string
   */
  public $unassignedCount;

  /**
   * Output only. Total number of licenses currently assigned to users or
   * devices.
   *
   * @param string $assignedCount
   */
  public function setAssignedCount($assignedCount)
  {
    $this->assignedCount = $assignedCount;
  }
  /**
   * @return string
   */
  public function getAssignedCount()
  {
    return $this->assignedCount;
  }
  /**
   * Output only. Total number of licenses purchased.
   *
   * @param string $totalPurchasedCount
   */
  public function setTotalPurchasedCount($totalPurchasedCount)
  {
    $this->totalPurchasedCount = $totalPurchasedCount;
  }
  /**
   * @return string
   */
  public function getTotalPurchasedCount()
  {
    return $this->totalPurchasedCount;
  }
  /**
   * Output only. Total number of licenses available for assignment.
   *
   * @param string $unassignedCount
   */
  public function setUnassignedCount($unassignedCount)
  {
    $this->unassignedCount = $unassignedCount;
  }
  /**
   * @return string
   */
  public function getUnassignedCount()
  {
    return $this->unassignedCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1LicenseCounts::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1LicenseCounts');
