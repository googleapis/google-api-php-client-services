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

namespace Google\Service\CloudDeploy;

class Analysis extends \Google\Collection
{
  protected $collection_key = 'customChecks';
  protected $customChecksType = CustomCheck::class;
  protected $customChecksDataType = 'array';
  /**
   * Required. The amount of time in minutes the analysis on the target will
   * last. If all analysis checks have successfully completed before the
   * specified duration, the analysis is successful. If a check is still running
   * while the specified duration passes, it will wait for that check to
   * complete to determine if the analysis is successful. The maximum duration
   * is 48 hours.
   *
   * @var string
   */
  public $duration;
  protected $googleCloudType = GoogleCloudAnalysis::class;
  protected $googleCloudDataType = '';

  /**
   * Optional. Custom analysis checks from 3P metric providers.
   *
   * @param CustomCheck[] $customChecks
   */
  public function setCustomChecks($customChecks)
  {
    $this->customChecks = $customChecks;
  }
  /**
   * @return CustomCheck[]
   */
  public function getCustomChecks()
  {
    return $this->customChecks;
  }
  /**
   * Required. The amount of time in minutes the analysis on the target will
   * last. If all analysis checks have successfully completed before the
   * specified duration, the analysis is successful. If a check is still running
   * while the specified duration passes, it will wait for that check to
   * complete to determine if the analysis is successful. The maximum duration
   * is 48 hours.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * Optional. Google Cloud - based analysis checks.
   *
   * @param GoogleCloudAnalysis $googleCloud
   */
  public function setGoogleCloud(GoogleCloudAnalysis $googleCloud)
  {
    $this->googleCloud = $googleCloud;
  }
  /**
   * @return GoogleCloudAnalysis
   */
  public function getGoogleCloud()
  {
    return $this->googleCloud;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Analysis::class, 'Google_Service_CloudDeploy_Analysis');
