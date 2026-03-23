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

class AnalysisJobRun extends \Google\Collection
{
  protected $collection_key = 'customCheckAnalyses';
  protected $alertPolicyAnalysesType = AlertPolicyCheckStatus::class;
  protected $alertPolicyAnalysesDataType = 'array';
  protected $customCheckAnalysesType = CustomCheckStatus::class;
  protected $customCheckAnalysesDataType = 'array';
  /**
   * Output only. The ID of the configured check that failed. This will always
   * be blank while the analysis is in progress or if it succeeded.
   *
   * @var string
   */
  public $failedCheckId;

  /**
   * Output only. The status of the running alert policy checks configured for
   * this analysis.
   *
   * @param AlertPolicyCheckStatus[] $alertPolicyAnalyses
   */
  public function setAlertPolicyAnalyses($alertPolicyAnalyses)
  {
    $this->alertPolicyAnalyses = $alertPolicyAnalyses;
  }
  /**
   * @return AlertPolicyCheckStatus[]
   */
  public function getAlertPolicyAnalyses()
  {
    return $this->alertPolicyAnalyses;
  }
  /**
   * Output only. The status of the running custom checks configured for this
   * analysis.
   *
   * @param CustomCheckStatus[] $customCheckAnalyses
   */
  public function setCustomCheckAnalyses($customCheckAnalyses)
  {
    $this->customCheckAnalyses = $customCheckAnalyses;
  }
  /**
   * @return CustomCheckStatus[]
   */
  public function getCustomCheckAnalyses()
  {
    return $this->customCheckAnalyses;
  }
  /**
   * Output only. The ID of the configured check that failed. This will always
   * be blank while the analysis is in progress or if it succeeded.
   *
   * @param string $failedCheckId
   */
  public function setFailedCheckId($failedCheckId)
  {
    $this->failedCheckId = $failedCheckId;
  }
  /**
   * @return string
   */
  public function getFailedCheckId()
  {
    return $this->failedCheckId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnalysisJobRun::class, 'Google_Service_CloudDeploy_AnalysisJobRun');
