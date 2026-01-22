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

namespace Google\Service\HypercomputeCluster\Resource;

use Google\Service\HypercomputeCluster\Cluster;
use Google\Service\HypercomputeCluster\ListClustersResponse;
use Google\Service\HypercomputeCluster\Operation;

/**
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $hypercomputeclusterService = new Google\Service\HypercomputeCluster(...);
 *   $clusters = $hypercomputeclusterService->projects_locations_clusters;
 *  </code>
 */
class ProjectsLocationsClusters extends \Google\Service\Resource
{
  /**
   * Creates a new Cluster in a given project and location. (clusters.create)
   *
   * @param string $parent Required. Parent location in which the cluster should
   * be created, in the format `projects/{project}/locations/{location}`.
   * @param Cluster $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clusterId Required. ID of the cluster to create. Must
   * conform to [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034) (lower-
   * case, alphanumeric, and at most 63 characters).
   * @opt_param string requestId Optional. A unique identifier for this request. A
   * random UUID is recommended. This request is idempotent if and only if
   * `request_id` is provided.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Cluster $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single Cluster. (clusters.delete)
   *
   * @param string $name Required. Name of the cluster to delete, in the format
   * `projects/{project}/locations/{location}/clusters/{cluster}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. A unique identifier for this request. A
   * random UUID is recommended. This request is idempotent if and only if
   * `request_id` is provided.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets details of a single Cluster. (clusters.get)
   *
   * @param string $name Required. Name of the cluster to retrieve, in the format
   * `projects/{project}/locations/{location}/clusters/{cluster}`.
   * @param array $optParams Optional parameters.
   * @return Cluster
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Cluster::class);
  }
  /**
   * Lists Clusters in a given project and location.
   * (clusters.listProjectsLocationsClusters)
   *
   * @param string $parent Required. Parent location of the clusters to list, in
   * the format `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. [Filter](https://google.aip.dev/160) to
   * apply to the returned results.
   * @opt_param string orderBy Optional. How to order the resulting clusters. Must
   * be one of the following strings: * `name` * `name desc` * `create_time` *
   * `create_time desc` If not specified, clusters will be returned in an
   * arbitrary order.
   * @opt_param int pageSize Optional. Maximum number of clusters to return. The
   * service may return fewer than this value.
   * @opt_param string pageToken Optional. A page token received from a previous
   * `ListClusters` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListClusters` must match the
   * call that provided the page token.
   * @return ListClustersResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsClusters($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListClustersResponse::class);
  }
  /**
   * Updates the parameters of a single Cluster. (clusters.patch)
   *
   * @param string $name Identifier. [Relative resource
   * name](https://google.aip.dev/122) of the cluster, in the format
   * `projects/{project}/locations/{location}/clusters/{cluster}`.
   * @param Cluster $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. A unique identifier for this request. A
   * random UUID is recommended. This request is idempotent if and only if
   * `request_id` is provided.
   * @opt_param string updateMask Optional. Mask specifying which fields in the
   * cluster to update. All paths must be specified explicitly - wildcards are not
   * supported. At least one path must be provided.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Cluster $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsClusters::class, 'Google_Service_HypercomputeCluster_Resource_ProjectsLocationsClusters');
