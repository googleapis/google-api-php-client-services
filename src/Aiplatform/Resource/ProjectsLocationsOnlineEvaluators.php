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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ActivateOnlineEvaluatorRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListOnlineEvaluatorsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1OnlineEvaluator;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1SuspendOnlineEvaluatorRequest;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "onlineEvaluators" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $onlineEvaluators = $aiplatformService->projects_locations_onlineEvaluators;
 *  </code>
 */
class ProjectsLocationsOnlineEvaluators extends \Google\Service\Resource
{
  /**
   * Activates an OnlineEvaluator. (onlineEvaluators.activate)
   *
   * @param string $name Required. The name of the OnlineEvaluator to activate.
   * Format: projects/{project}/locations/{location}/onlineEvaluators/{id}.
   * @param GoogleCloudAiplatformV1ActivateOnlineEvaluatorRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function activate($name, GoogleCloudAiplatformV1ActivateOnlineEvaluatorRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('activate', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Creates an OnlineEvaluator in the given project and location.
   * (onlineEvaluators.create)
   *
   * @param string $parent Required. The parent resource where the OnlineEvaluator
   * will be created. Format: projects/{project}/locations/{location}.
   * @param GoogleCloudAiplatformV1OnlineEvaluator $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1OnlineEvaluator $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes an OnlineEvaluator. (onlineEvaluators.delete)
   *
   * @param string $name Required. The name of the OnlineEvaluator to delete.
   * Format: projects/{project}/locations/{location}/onlineEvaluators/{id}.
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets details of an OnlineEvaluator. (onlineEvaluators.get)
   *
   * @param string $name Required. The name of the OnlineEvaluator to retrieve.
   * Format: projects/{project}/locations/{location}/onlineEvaluators/{id}.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1OnlineEvaluator
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1OnlineEvaluator::class);
  }
  /**
   * Lists the OnlineEvaluators for the given project and location.
   * (onlineEvaluators.listProjectsLocationsOnlineEvaluators)
   *
   * @param string $parent Required. The parent resource of the OnlineEvaluators
   * to list. Format: projects/{project}/locations/{location}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Standard list filter. Supported fields: *
   * `create_time` * `update_time` * `agent_resource` Example:
   * `create_time>"2026-01-01T00:00:00-04:00"` where the timestamp is in RFC 3339
   * format) Based on aip.dev/160.
   * @opt_param string orderBy Optional. A comma-separated list of fields to order
   * by. The default sorting order is ascending. Use "desc" after a field name for
   * descending. Supported fields: * `create_time` * `update_time` Example:
   * `create_time desc`. Based on aip.dev/132.
   * @opt_param int pageSize Optional. The maximum number of OnlineEvaluators to
   * return. The service may return fewer than this value. If unspecified, at most
   * 100 OnlineEvaluators will be returned. The maximum value is 100; values above
   * 100 will be coerced to 100. Based on aip.dev/158.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return. Based on aip.dev/158.
   * @return GoogleCloudAiplatformV1ListOnlineEvaluatorsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsOnlineEvaluators($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListOnlineEvaluatorsResponse::class);
  }
  /**
   * Updates the fields of an OnlineEvaluator. (onlineEvaluators.patch)
   *
   * @param string $name Identifier. The resource name of the OnlineEvaluator.
   * Format: projects/{project}/locations/{location}/onlineEvaluators/{id}.
   * @param GoogleCloudAiplatformV1OnlineEvaluator $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudAiplatformV1OnlineEvaluator $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Suspends an OnlineEvaluator. When an OnlineEvaluator is suspended, it won't
   * run any evaluations until it is activated again. (onlineEvaluators.suspend)
   *
   * @param string $name Required. The name of the OnlineEvaluator to suspend.
   * Format: projects/{project}/locations/{location}/onlineEvaluators/{id}.
   * @param GoogleCloudAiplatformV1SuspendOnlineEvaluatorRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function suspend($name, GoogleCloudAiplatformV1SuspendOnlineEvaluatorRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suspend', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsOnlineEvaluators::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsOnlineEvaluators');
