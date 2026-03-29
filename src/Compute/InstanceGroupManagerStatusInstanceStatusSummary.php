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

namespace Google\Service\Compute;

class InstanceGroupManagerStatusInstanceStatusSummary extends \Google\Model
{
  /**
   * Output only. The number of instances in the managed instance group that
   * have DEPROVISIONING status.
   *
   * @var int
   */
  public $deprovisioning;
  /**
   * Output only. The number of instances that have not been created yet or have
   * been deleted. Includes only instances that would be shown in the
   * listManagedInstances method and not all instances that have been deleted in
   * the lifetime of the MIG. Does not include FlexStart instances that are
   * waiting for the resources availability, they are considered as 'pending'.
   *
   * @var int
   */
  public $nonExistent;
  /**
   * Output only. The number of instances in the managed instance group that
   * have PENDING status, that is FlexStart instances that are waiting for
   * resources. Instances that do not exist because of the other reasons are
   * counted as 'non_existent'.
   *
   * @var int
   */
  public $pending;
  /**
   * Output only. The number of instances in the managed instance group that
   * have PENDING_STOP status.
   *
   * @var int
   */
  public $pendingStop;
  /**
   * Output only. The number of instances in the managed instance group that
   * have PROVISIONING status.
   *
   * @var int
   */
  public $provisioning;
  /**
   * Output only. The number of instances in the managed instance group that
   * have REPAIRING status.
   *
   * @var int
   */
  public $repairing;
  /**
   * Output only. The number of instances in the managed instance group that
   * have RUNNING status.
   *
   * @var int
   */
  public $running;
  /**
   * Output only. The number of instances in the managed instance group that
   * have STAGING status.
   *
   * @var int
   */
  public $staging;
  /**
   * Output only. The number of instances in the managed instance group that
   * have STOPPED status.
   *
   * @var int
   */
  public $stopped;
  /**
   * Output only. The number of instances in the managed instance group that
   * have STOPPING status.
   *
   * @var int
   */
  public $stopping;
  /**
   * Output only. The number of instances in the managed instance group that
   * have SUSPENDED status.
   *
   * @var int
   */
  public $suspended;
  /**
   * Output only. The number of instances in the managed instance group that
   * have SUSPENDING status.
   *
   * @var int
   */
  public $suspending;
  /**
   * Output only. The number of instances in the managed instance group that
   * have TERMINATED status.
   *
   * @var int
   */
  public $terminated;

  /**
   * Output only. The number of instances in the managed instance group that
   * have DEPROVISIONING status.
   *
   * @param int $deprovisioning
   */
  public function setDeprovisioning($deprovisioning)
  {
    $this->deprovisioning = $deprovisioning;
  }
  /**
   * @return int
   */
  public function getDeprovisioning()
  {
    return $this->deprovisioning;
  }
  /**
   * Output only. The number of instances that have not been created yet or have
   * been deleted. Includes only instances that would be shown in the
   * listManagedInstances method and not all instances that have been deleted in
   * the lifetime of the MIG. Does not include FlexStart instances that are
   * waiting for the resources availability, they are considered as 'pending'.
   *
   * @param int $nonExistent
   */
  public function setNonExistent($nonExistent)
  {
    $this->nonExistent = $nonExistent;
  }
  /**
   * @return int
   */
  public function getNonExistent()
  {
    return $this->nonExistent;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have PENDING status, that is FlexStart instances that are waiting for
   * resources. Instances that do not exist because of the other reasons are
   * counted as 'non_existent'.
   *
   * @param int $pending
   */
  public function setPending($pending)
  {
    $this->pending = $pending;
  }
  /**
   * @return int
   */
  public function getPending()
  {
    return $this->pending;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have PENDING_STOP status.
   *
   * @param int $pendingStop
   */
  public function setPendingStop($pendingStop)
  {
    $this->pendingStop = $pendingStop;
  }
  /**
   * @return int
   */
  public function getPendingStop()
  {
    return $this->pendingStop;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have PROVISIONING status.
   *
   * @param int $provisioning
   */
  public function setProvisioning($provisioning)
  {
    $this->provisioning = $provisioning;
  }
  /**
   * @return int
   */
  public function getProvisioning()
  {
    return $this->provisioning;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have REPAIRING status.
   *
   * @param int $repairing
   */
  public function setRepairing($repairing)
  {
    $this->repairing = $repairing;
  }
  /**
   * @return int
   */
  public function getRepairing()
  {
    return $this->repairing;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have RUNNING status.
   *
   * @param int $running
   */
  public function setRunning($running)
  {
    $this->running = $running;
  }
  /**
   * @return int
   */
  public function getRunning()
  {
    return $this->running;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have STAGING status.
   *
   * @param int $staging
   */
  public function setStaging($staging)
  {
    $this->staging = $staging;
  }
  /**
   * @return int
   */
  public function getStaging()
  {
    return $this->staging;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have STOPPED status.
   *
   * @param int $stopped
   */
  public function setStopped($stopped)
  {
    $this->stopped = $stopped;
  }
  /**
   * @return int
   */
  public function getStopped()
  {
    return $this->stopped;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have STOPPING status.
   *
   * @param int $stopping
   */
  public function setStopping($stopping)
  {
    $this->stopping = $stopping;
  }
  /**
   * @return int
   */
  public function getStopping()
  {
    return $this->stopping;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have SUSPENDED status.
   *
   * @param int $suspended
   */
  public function setSuspended($suspended)
  {
    $this->suspended = $suspended;
  }
  /**
   * @return int
   */
  public function getSuspended()
  {
    return $this->suspended;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have SUSPENDING status.
   *
   * @param int $suspending
   */
  public function setSuspending($suspending)
  {
    $this->suspending = $suspending;
  }
  /**
   * @return int
   */
  public function getSuspending()
  {
    return $this->suspending;
  }
  /**
   * Output only. The number of instances in the managed instance group that
   * have TERMINATED status.
   *
   * @param int $terminated
   */
  public function setTerminated($terminated)
  {
    $this->terminated = $terminated;
  }
  /**
   * @return int
   */
  public function getTerminated()
  {
    return $this->terminated;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerStatusInstanceStatusSummary::class, 'Google_Service_Compute_InstanceGroupManagerStatusInstanceStatusSummary');
