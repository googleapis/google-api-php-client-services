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

namespace Google\Service\Dataproc\Resource;

use Google\Service\Dataproc\NodeGroup;
use Google\Service\Dataproc\Operation;
use Google\Service\Dataproc\ResizeNodeGroupRequest;

/**
 * The "nodeGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataprocService = new Google\Service\Dataproc(...);
 *   $nodeGroups = $dataprocService->nodeGroups;
 *  </code>
 */
class ProjectsRegionsClustersNodeGroups extends \Google\Service\Resource
{
  /**
   * Gets the resource representation for a node group in a cluster.
   * (nodeGroups.get)
   *
   * @param string $name Required. The name of the node group to retrieve. Format:
   * projects/{project}/regions/{region}/clusters/{cluster}/nodeGroups/{nodeGroup}
   * @param array $optParams Optional parameters.
   * @return NodeGroup
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], NodeGroup::class);
  }
  /**
   * Resizes a node group in a cluster. The returned Operation.metadata is
   * NodeGroupOperationMetadata (https://cloud.google.com/dataproc/docs/reference/
   * rpc/google.cloud.dataproc.v1#nodegroupoperationmetadata). (nodeGroups.resize)
   *
   * @param string $name Required. The name of the node group to resize. Format:
   * projects/{project}/regions/{region}/clusters/{cluster}/nodeGroups/{nodeGroup}
   * @param ResizeNodeGroupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function resize($name, ResizeNodeGroupRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('resize', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsRegionsClustersNodeGroups::class, 'Google_Service_Dataproc_Resource_ProjectsRegionsClustersNodeGroups');
