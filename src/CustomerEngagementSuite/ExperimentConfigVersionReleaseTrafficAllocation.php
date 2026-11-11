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

namespace Google\Service\CustomerEngagementSuite;

class ExperimentConfigVersionReleaseTrafficAllocation extends \Google\Model
{
  /**
   * Optional. App version of the traffic allocation. Format:
   * `projects/{project}/locations/{location}/apps/{app}/versions/{version}`
   *
   * @var string
   */
  public $appVersion;
  /**
   * Optional. Id of the traffic allocation. Free format string, up to 128
   * characters.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. Traffic percentage of the traffic allocation, relative to the
   * remaining non-study traffic. Must be between `0` and `100`.
   *
   * @var int
   */
  public $trafficPercentage;

  /**
   * Optional. App version of the traffic allocation. Format:
   * `projects/{project}/locations/{location}/apps/{app}/versions/{version}`
   *
   * @param string $appVersion
   */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /**
   * @return string
   */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /**
   * Optional. Id of the traffic allocation. Free format string, up to 128
   * characters.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. Traffic percentage of the traffic allocation, relative to the
   * remaining non-study traffic. Must be between `0` and `100`.
   *
   * @param int $trafficPercentage
   */
  public function setTrafficPercentage($trafficPercentage)
  {
    $this->trafficPercentage = $trafficPercentage;
  }
  /**
   * @return int
   */
  public function getTrafficPercentage()
  {
    return $this->trafficPercentage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExperimentConfigVersionReleaseTrafficAllocation::class, 'Google_Service_CustomerEngagementSuite_ExperimentConfigVersionReleaseTrafficAllocation');
