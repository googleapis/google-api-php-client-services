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

class GoogleChromeManagementVersionsV1PerpetualLicenseInfo extends \Google\Model
{
  /**
   * Output only. Number of standalone perpetual upgrades that were previously
   * enrolled and later unenrolled for RMA, warranty, or repair reasons, and are
   * only available to be reused on a same model device. Conditionally available
   * licenses are a subset of the Assigned total.
   *
   * @var string
   */
  public $conditionallyAvailableCount;
  protected $countsType = GoogleChromeManagementVersionsV1LicenseCounts::class;
  protected $countsDataType = '';
  /**
   * Output only. Number of perpetual upgrades that were purchased but are no
   * longer available for enrollment. These are perpetual upgrades that were
   * enrolled to a device that has since been retired, and the upgrade cannot be
   * transferred or re-used on a different device. Retired licenses are a subset
   * of the Assigned total.
   *
   * @var string
   */
  public $retiredCount;

  /**
   * Output only. Number of standalone perpetual upgrades that were previously
   * enrolled and later unenrolled for RMA, warranty, or repair reasons, and are
   * only available to be reused on a same model device. Conditionally available
   * licenses are a subset of the Assigned total.
   *
   * @param string $conditionallyAvailableCount
   */
  public function setConditionallyAvailableCount($conditionallyAvailableCount)
  {
    $this->conditionallyAvailableCount = $conditionallyAvailableCount;
  }
  /**
   * @return string
   */
  public function getConditionallyAvailableCount()
  {
    return $this->conditionallyAvailableCount;
  }
  /**
   * Output only. License counts for the perpetual SKU.
   *
   * @param GoogleChromeManagementVersionsV1LicenseCounts $counts
   */
  public function setCounts(GoogleChromeManagementVersionsV1LicenseCounts $counts)
  {
    $this->counts = $counts;
  }
  /**
   * @return GoogleChromeManagementVersionsV1LicenseCounts
   */
  public function getCounts()
  {
    return $this->counts;
  }
  /**
   * Output only. Number of perpetual upgrades that were purchased but are no
   * longer available for enrollment. These are perpetual upgrades that were
   * enrolled to a device that has since been retired, and the upgrade cannot be
   * transferred or re-used on a different device. Retired licenses are a subset
   * of the Assigned total.
   *
   * @param string $retiredCount
   */
  public function setRetiredCount($retiredCount)
  {
    $this->retiredCount = $retiredCount;
  }
  /**
   * @return string
   */
  public function getRetiredCount()
  {
    return $this->retiredCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1PerpetualLicenseInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1PerpetualLicenseInfo');
