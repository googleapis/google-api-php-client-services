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

namespace Google\Service\SQLAdmin\Resource;

use Google\Service\SQLAdmin\Operation;
use Google\Service\SQLAdmin\WorkloadCapturesListResponse;
use Google\Service\SQLAdmin\WorkloadCapturesStartReplayRequest;
use Google\Service\SQLAdmin\WorkloadCapturesStartRequest;
use Google\Service\SQLAdmin\WorkloadCapturesStopReplayRequest;
use Google\Service\SQLAdmin\WorkloadCapturesStopRequest;

/**
 * The "workloadCaptures" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google\Service\SQLAdmin(...);
 *   $workloadCaptures = $sqladminService->workloadCaptures;
 *  </code>
 */
class WorkloadCaptures extends \Google\Service\Resource
{
  /**
   * Lists all captured workloads associated with the instance.
   * (workloadCaptures.listWorkloadCaptures)
   *
   * @param string $project Required. Project ID of the project that contains the
   * instance.
   * @param string $instance Required. Cloud SQL instance ID. This does not
   * include the project ID.
   * @param array $optParams Optional parameters.
   * @return WorkloadCapturesListResponse
   * @throws \Google\Service\Exception
   */
  public function listWorkloadCaptures($project, $instance, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], WorkloadCapturesListResponse::class);
  }
  /**
   * Starts capturing the SQL queries, transactions, and other operations executed
   * on the primary instance. This traffic is securely stored and forms a
   * "captured workload". This workload can be replayed later on a different
   * instance to safely test performance impacts, database upgrades, configuration
   * changes etc. before applying them to production. (workloadCaptures.start)
   *
   * @param string $project Required. Project ID of the project that contains the
   * instance.
   * @param string $instance Required. Cloud SQL instance ID. This does not
   * include the project ID.
   * @param WorkloadCapturesStartRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function start($project, $instance, WorkloadCapturesStartRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('start', [$params], Operation::class);
  }
  /**
   * Starts executing a captured workload on a separate Cloud SQL instance
   * provisioned for workload replay. This target instance simulates the
   * production environment without affecting the primary instance.
   * (workloadCaptures.startReplay)
   *
   * @param string $project Required. Project ID of the project that contains the
   * instance.
   * @param string $instance Required. Cloud SQL instance ID. This does not
   * include the project ID.
   * @param string $workloadId Required. The ID of the workload to replay.
   * @param WorkloadCapturesStartReplayRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function startReplay($project, $instance, $workloadId, WorkloadCapturesStartReplayRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'workloadId' => $workloadId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('startReplay', [$params], Operation::class);
  }
  /**
   * Stops capturing the query traffic and related operations executed on the
   * primary instance. (workloadCaptures.stop)
   *
   * @param string $project Required. Project ID of the project that contains the
   * instance.
   * @param string $instance Required. Cloud SQL instance ID. This does not
   * include the project ID.
   * @param WorkloadCapturesStopRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function stop($project, $instance, WorkloadCapturesStopRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stop', [$params], Operation::class);
  }
  /**
   * Stops an active workload replay on the target Cloud SQL replay instance.
   * (workloadCaptures.stopReplay)
   *
   * @param string $project Required. Project ID of the project that contains the
   * target replay instance.
   * @param string $instance Required. Cloud SQL instance ID of the target replay
   * instance. This does not include the project ID.
   * @param WorkloadCapturesStopReplayRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function stopReplay($project, $instance, WorkloadCapturesStopReplayRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stopReplay', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkloadCaptures::class, 'Google_Service_SQLAdmin_Resource_WorkloadCaptures');
