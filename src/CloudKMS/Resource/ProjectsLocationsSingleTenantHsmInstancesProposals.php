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

use Google\Service\CloudKMS\ApproveSingleTenantHsmInstanceProposalRequest;
use Google\Service\CloudKMS\ApproveSingleTenantHsmInstanceProposalResponse;
use Google\Service\CloudKMS\CloudkmsEmpty;
use Google\Service\CloudKMS\ExecuteSingleTenantHsmInstanceProposalRequest;
use Google\Service\CloudKMS\ListSingleTenantHsmInstanceProposalsResponse;
use Google\Service\CloudKMS\Operation;
use Google\Service\CloudKMS\SingleTenantHsmInstanceProposal;

/**
 * The "proposals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudkmsService = new Google\Service\CloudKMS(...);
 *   $proposals = $cloudkmsService->projects_locations_singleTenantHsmInstances_proposals;
 *  </code>
 */
class ProjectsLocationsSingleTenantHsmInstancesProposals extends \Google\Service\Resource
{
  /**
   * Approves a SingleTenantHsmInstanceProposal for a given
   * SingleTenantHsmInstance. The proposal must be in the PENDING state.
   * (proposals.approve)
   *
   * @param string $name Required. The name of the SingleTenantHsmInstanceProposal
   * to approve.
   * @param ApproveSingleTenantHsmInstanceProposalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ApproveSingleTenantHsmInstanceProposalResponse
   * @throws \Google\Service\Exception
   */
  public function approve($name, ApproveSingleTenantHsmInstanceProposalRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('approve', [$params], ApproveSingleTenantHsmInstanceProposalResponse::class);
  }
  /**
   * Creates a new SingleTenantHsmInstanceProposal for a given
   * SingleTenantHsmInstance. (proposals.create)
   *
   * @param string $parent Required. The name of the SingleTenantHsmInstance
   * associated with the SingleTenantHsmInstanceProposals.
   * @param SingleTenantHsmInstanceProposal $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string singleTenantHsmInstanceProposalId Optional. It must be
   * unique within a location and match the regular expression
   * `[a-zA-Z0-9_-]{1,63}`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, SingleTenantHsmInstanceProposal $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a SingleTenantHsmInstanceProposal. (proposals.delete)
   *
   * @param string $name Required. The name of the SingleTenantHsmInstanceProposal
   * to delete.
   * @param array $optParams Optional parameters.
   * @return CloudkmsEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CloudkmsEmpty::class);
  }
  /**
   * Executes a SingleTenantHsmInstanceProposal for a given
   * SingleTenantHsmInstance. The proposal must be in the APPROVED state.
   * (proposals.execute)
   *
   * @param string $name Required. The name of the SingleTenantHsmInstanceProposal
   * to execute.
   * @param ExecuteSingleTenantHsmInstanceProposalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function execute($name, ExecuteSingleTenantHsmInstanceProposalRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('execute', [$params], Operation::class);
  }
  /**
   * Returns metadata for a given SingleTenantHsmInstanceProposal. (proposals.get)
   *
   * @param string $name Required. The name of the SingleTenantHsmInstanceProposal
   * to get.
   * @param array $optParams Optional parameters.
   * @return SingleTenantHsmInstanceProposal
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SingleTenantHsmInstanceProposal::class);
  }
  /**
   * Lists SingleTenantHsmInstanceProposals.
   * (proposals.listProjectsLocationsSingleTenantHsmInstancesProposals)
   *
   * @param string $parent Required. The resource name of the single tenant HSM
   * instance associated with the SingleTenantHsmInstanceProposals to list, in the
   * format `projects/locations/singleTenantHsmInstances`.
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
   * SingleTenantHsmInstanceProposals to include in the response. Further
   * SingleTenantHsmInstanceProposals can subsequently be obtained by including
   * the ListSingleTenantHsmInstanceProposalsResponse.next_page_token in a
   * subsequent request. If unspecified, the server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. Optional pagination token, returned
   * earlier via ListSingleTenantHsmInstanceProposalsResponse.next_page_token.
   * @opt_param bool showDeleted Optional. If set to true,
   * HsmManagement.ListSingleTenantHsmInstanceProposals will also return
   * SingleTenantHsmInstanceProposals in DELETED state.
   * @return ListSingleTenantHsmInstanceProposalsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSingleTenantHsmInstancesProposals($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSingleTenantHsmInstanceProposalsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSingleTenantHsmInstancesProposals::class, 'Google_Service_CloudKMS_Resource_ProjectsLocationsSingleTenantHsmInstancesProposals');
