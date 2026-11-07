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

namespace Google\Service\Backupdr\Resource;

use Google\Service\Backupdr\ListRestoreVerificationPlanAssociationsResponse;
use Google\Service\Backupdr\Operation;
use Google\Service\Backupdr\RestoreVerificationPlanAssociation;
use Google\Service\Backupdr\TriggerRestoreVerificationRequest;

/**
 * The "associations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $associations = $backupdrService->projects_locations_restoreVerificationPlans_associations;
 *  </code>
 */
class ProjectsLocationsRestoreVerificationPlansAssociations extends \Google\Service\Resource
{
  /**
   * Creates a new RestoreVerificationPlanAssociation in a given
   * RestoreVerificationPlan. (associations.create)
   *
   * @param string $parent Required. The parent resource where this association
   * will be created. Format: `projects/{project}/locations/{location}/restoreVeri
   * ficationPlans/{restore_verification_plan}`
   * @param RestoreVerificationPlanAssociation $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know that the server has already received the duplicate
   * request and can avoid responding with an error. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param string restoreVerificationPlanAssociationId Required. The ID to
   * use for the association, which will become the final component of the
   * association's resource name. This value should be 1-63 characters, and valid
   * characters are /[a-z0-9_-]/.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, RestoreVerificationPlanAssociation $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single RestoreVerificationPlanAssociation in a given
   * RestoreVerificationPlan. (associations.delete)
   *
   * @param string $name Required. The resource name of the
   * RestoreVerificationPlanAssociation to delete. Format: `projects/{project}/loc
   * ations/{location}/restoreVerificationPlans/{restore_verification_plan}/associ
   * ations/{association}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know that the server has already received the duplicate
   * request and can avoid responding with an error. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
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
   * Gets details of a single RestoreVerificationPlanAssociation in a given
   * RestoreVerificationPlan. (associations.get)
   *
   * @param string $name Required. The resource name of the
   * RestoreVerificationPlanAssociation to retrieve. Format: `projects/{project}/l
   * ocations/{location}/restoreVerificationPlans/{restore_verification_plan}/asso
   * ciations/{association}`
   * @param array $optParams Optional parameters.
   * @return RestoreVerificationPlanAssociation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], RestoreVerificationPlanAssociation::class);
  }
  /**
   * Lists RestoreVerificationPlanAssociations in a given RestoreVerificationPlan.
   * (associations.listProjectsLocationsRestoreVerificationPlansAssociations)
   *
   * @param string $parent Required. The parent RestoreVerificationPlan name.
   * Format: `projects/{project}/locations/{location}/restoreVerificationPlans/{re
   * store_verification_plan}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filtering results.
   * @opt_param string orderBy Optional. Hint for how to order the results.
   * @opt_param int pageSize Optional. The maximum number of associations to
   * return. The service may return fewer than this value. If unspecified, at most
   * 500 associations will be returned. The maximum value is 1000; values above
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListRestoreVerificationPlanAssociations` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `ListRestoreVerificationPlanAssociations` must match the call that provided
   * the page token.
   * @return ListRestoreVerificationPlanAssociationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsRestoreVerificationPlansAssociations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListRestoreVerificationPlanAssociationsResponse::class);
  }
  /**
   * Triggers a new Restore Verification for the association in a given
   * RestoreVerificationPlan. (associations.triggerRestoreVerification)
   *
   * @param string $name Required. The resource name of the
   * RestoreVerificationPlanAssociation to trigger. Format: `projects/{project}/lo
   * cations/{location}/restoreVerificationPlans/{restore_verification_plan}/assoc
   * iations/{association}`
   * @param TriggerRestoreVerificationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function triggerRestoreVerification($name, TriggerRestoreVerificationRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('triggerRestoreVerification', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRestoreVerificationPlansAssociations::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsRestoreVerificationPlansAssociations');
