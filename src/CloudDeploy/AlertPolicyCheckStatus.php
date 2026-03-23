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

class AlertPolicyCheckStatus extends \Google\Collection
{
  protected $collection_key = 'failedAlertPolicies';
  /**
   * Output only. The alert policies that this analysis monitors. Format is
   * `projects/{project}/locations/{location}/alertPolicies/{alertPolicy}`.
   *
   * @var string[]
   */
  public $alertPolicies;
  protected $failedAlertPoliciesType = FailedAlertPolicy::class;
  protected $failedAlertPoliciesDataType = 'array';
  /**
   * Output only. Additional information about the alert policy check failure,
   * if available. This will be empty if the alert policy check succeeded.
   *
   * @var string
   */
  public $failureMessage;
  /**
   * Output only. The ID of this analysis.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resolved labels used to filter for specific incidents.
   *
   * @var string[]
   */
  public $labels;

  /**
   * Output only. The alert policies that this analysis monitors. Format is
   * `projects/{project}/locations/{location}/alertPolicies/{alertPolicy}`.
   *
   * @param string[] $alertPolicies
   */
  public function setAlertPolicies($alertPolicies)
  {
    $this->alertPolicies = $alertPolicies;
  }
  /**
   * @return string[]
   */
  public function getAlertPolicies()
  {
    return $this->alertPolicies;
  }
  /**
   * Output only. The alert policies that were found to be firing during this
   * check. This will be empty if no incidents were found.
   *
   * @param FailedAlertPolicy[] $failedAlertPolicies
   */
  public function setFailedAlertPolicies($failedAlertPolicies)
  {
    $this->failedAlertPolicies = $failedAlertPolicies;
  }
  /**
   * @return FailedAlertPolicy[]
   */
  public function getFailedAlertPolicies()
  {
    return $this->failedAlertPolicies;
  }
  /**
   * Output only. Additional information about the alert policy check failure,
   * if available. This will be empty if the alert policy check succeeded.
   *
   * @param string $failureMessage
   */
  public function setFailureMessage($failureMessage)
  {
    $this->failureMessage = $failureMessage;
  }
  /**
   * @return string
   */
  public function getFailureMessage()
  {
    return $this->failureMessage;
  }
  /**
   * Output only. The ID of this analysis.
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
   * Output only. The resolved labels used to filter for specific incidents.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlertPolicyCheckStatus::class, 'Google_Service_CloudDeploy_AlertPolicyCheckStatus');
