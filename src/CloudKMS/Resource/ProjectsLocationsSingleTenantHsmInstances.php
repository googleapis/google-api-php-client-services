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

namespace Google\Service\CloudKMS\Resource;

use Google\Service\CloudKMS\ListSingleTenantHsmInstancesResponse;
use Google\Service\CloudKMS\Operation;
use Google\Service\CloudKMS\SingleTenantHsmInstance;

/**
 * The "singleTenantHsmInstances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudkmsService = new Google\Service\CloudKMS(...);
 *   $singleTenantHsmInstances = $cloudkmsService->projects_locations_singleTenantHsmInstances;
 *  </code>
 */
class ProjectsLocationsSingleTenantHsmInstances extends \Google\Service\Resource
{
  /**
   * Creates a new SingleTenantHsmInstance in a given Project and Location. User
   * must create a RegisterTwoFactorAuthKeys proposal with this single-tenant HSM
   * instance to finish setup of the instance. (singleTenantHsmInstances.create)
   *
   * @param string $parent Required. The resource name of the location associated
   * with the SingleTenantHsmInstance, in the format `projects/locations`.
   * @param SingleTenantHsmInstance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string singleTenantHsmInstanceId Optional. It must be unique
   * within a location and match the regular expression `[a-zA-Z0-9_-]{1,63}`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, SingleTenantHsmInstance $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Returns metadata for a given SingleTenantHsmInstance.
   * (singleTenantHsmInstances.get)
   *
   * @param string $name Required. The name of the SingleTenantHsmInstance to get.
   * @param array $optParams Optional parameters.
   * @return SingleTenantHsmInstance
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SingleTenantHsmInstance::class);
  }
  /**
   * Lists SingleTenantHsmInstances.
   * (singleTenantHsmInstances.listProjectsLocationsSingleTenantHsmInstances)
   *
   * @param string $parent Required. The resource name of the location associated
   * with the SingleTenantHsmInstances to list, in the format
   * `projects/locations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Only include resources that match the
   * filter in the response. For more information, see [Sorting and filtering list
   * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
   * @opt_param string orderBy Optional. Specify how the results should be sorted.
   * If not specified, the results will be sorted in the default order. For more
   * information, see [Sorting and filtering list
   * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
   * @opt_param int pageSize Optional. Optional limit on the number of
   * SingleTenantHsmInstances to include in the response. Further
   * SingleTenantHsmInstances can subsequently be obtained by including the
   * ListSingleTenantHsmInstancesResponse.next_page_token in a subsequent request.
   * If unspecified, the server will pick an appropriate default.
   * @opt_param string pageToken Optional. Optional pagination token, returned
   * earlier via ListSingleTenantHsmInstancesResponse.next_page_token.
   * @opt_param bool showDeleted Optional. If set to true,
   * HsmManagement.ListSingleTenantHsmInstances will also return
   * SingleTenantHsmInstances in DELETED state.
   * @return ListSingleTenantHsmInstancesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSingleTenantHsmInstances($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSingleTenantHsmInstancesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSingleTenantHsmInstances::class, 'Google_Service_CloudKMS_Resource_ProjectsLocationsSingleTenantHsmInstances');
