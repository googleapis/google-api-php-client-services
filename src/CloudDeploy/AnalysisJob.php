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

class AnalysisJob extends \Google\Collection
{
  protected $collection_key = 'customChecks';
  protected $customChecksType = CustomCheck::class;
  protected $customChecksDataType = 'array';
  /**
   * Output only. The amount of time in minutes the analysis Job will run, up to
   * a maximum of 48 hours. If any check in this Job is still running when the
   * duration ends, the Job keeps running until that check completes.
   *
   * @var string
   */
  public $duration;
  protected $googleCloudType = GoogleCloudAnalysis::class;
  protected $googleCloudDataType = '';

  /**
   * Output only. Custom analysis checks from 3P metric providers that are run
   * as part of the analysis Job.
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
   * Output only. The amount of time in minutes the analysis Job will run, up to
   * a maximum of 48 hours. If any check in this Job is still running when the
   * duration ends, the Job keeps running until that check completes.
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
   * Output only. Google Cloud - based analysis checks that are run as part of
   * the analysis Job.
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
class_alias(AnalysisJob::class, 'Google_Service_CloudDeploy_AnalysisJob');
