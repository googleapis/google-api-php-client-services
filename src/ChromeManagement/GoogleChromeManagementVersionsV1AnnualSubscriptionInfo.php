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

class GoogleChromeManagementVersionsV1AnnualSubscriptionInfo extends \Google\Model
{
  protected $countsType = GoogleChromeManagementVersionsV1LicenseCounts::class;
  protected $countsDataType = '';
  /**
   * Output only. The date when the current subscription period ends.
   *
   * @var string
   */
  public $subscriptionEndTime;

  /**
   * Output only. License counts for this subscription.
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
   * Output only. The date when the current subscription period ends.
   *
   * @param string $subscriptionEndTime
   */
  public function setSubscriptionEndTime($subscriptionEndTime)
  {
    $this->subscriptionEndTime = $subscriptionEndTime;
  }
  /**
   * @return string
   */
  public function getSubscriptionEndTime()
  {
    return $this->subscriptionEndTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1AnnualSubscriptionInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1AnnualSubscriptionInfo');
