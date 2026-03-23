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

class FailedAlertPolicy extends \Google\Collection
{
  protected $collection_key = 'alerts';
  /**
   * Output only. The name of the alert policy that was found to be firing.
   * Format is
   * `projects/{project}/locations/{location}/alertPolicies/{alertPolicy}`.
   *
   * @var string
   */
  public $alertPolicy;
  /**
   * Output only. Open alerts for the alerting policies that matched the alert
   * policy check configuration.
   *
   * @var string[]
   */
  public $alerts;

  /**
   * Output only. The name of the alert policy that was found to be firing.
   * Format is
   * `projects/{project}/locations/{location}/alertPolicies/{alertPolicy}`.
   *
   * @param string $alertPolicy
   */
  public function setAlertPolicy($alertPolicy)
  {
    $this->alertPolicy = $alertPolicy;
  }
  /**
   * @return string
   */
  public function getAlertPolicy()
  {
    return $this->alertPolicy;
  }
  /**
   * Output only. Open alerts for the alerting policies that matched the alert
   * policy check configuration.
   *
   * @param string[] $alerts
   */
  public function setAlerts($alerts)
  {
    $this->alerts = $alerts;
  }
  /**
   * @return string[]
   */
  public function getAlerts()
  {
    return $this->alerts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FailedAlertPolicy::class, 'Google_Service_CloudDeploy_FailedAlertPolicy');
