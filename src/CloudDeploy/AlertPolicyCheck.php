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

class AlertPolicyCheck extends \Google\Collection
{
  protected $collection_key = 'alertPolicies';
  /**
   * Required. The Cloud Monitoring Alert Policies to check for active alerts.
   * Format is `projects/{project}/alertPolicies/{alert_policy}`.
   *
   * @var string[]
   */
  public $alertPolicies;
  /**
   * Required. The ID of the analysis check.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. A set of labels to filter active alerts. If set, only alerts
   * having all of the specified labels will be considered. Otherwise, all
   * active alerts will be considered.
   *
   * @var string[]
   */
  public $labels;

  /**
   * Required. The Cloud Monitoring Alert Policies to check for active alerts.
   * Format is `projects/{project}/alertPolicies/{alert_policy}`.
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
   * Required. The ID of the analysis check.
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
   * Optional. A set of labels to filter active alerts. If set, only alerts
   * having all of the specified labels will be considered. Otherwise, all
   * active alerts will be considered.
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
class_alias(AlertPolicyCheck::class, 'Google_Service_CloudDeploy_AlertPolicyCheck');
