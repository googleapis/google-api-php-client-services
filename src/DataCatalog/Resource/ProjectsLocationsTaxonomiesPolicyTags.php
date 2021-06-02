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

namespace Google\Service\DataCatalog\Resource;

use Google\Service\DataCatalog\DatacatalogEmpty;
use Google\Service\DataCatalog\GetIamPolicyRequest;
use Google\Service\DataCatalog\GoogleCloudDatacatalogV1beta1ListPolicyTagsResponse;
use Google\Service\DataCatalog\GoogleCloudDatacatalogV1beta1PolicyTag;
use Google\Service\DataCatalog\Policy;
use Google\Service\DataCatalog\SetIamPolicyRequest;
use Google\Service\DataCatalog\TestIamPermissionsRequest;
use Google\Service\DataCatalog\TestIamPermissionsResponse;

/**
 * The "policyTags" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datacatalogService = new Google\Service\DataCatalog(...);
 *   $policyTags = $datacatalogService->policyTags;
 *  </code>
 */
class ProjectsLocationsTaxonomiesPolicyTags extends \Google\Service\Resource
{
  /**
   * Creates a policy tag in the specified taxonomy. (policyTags.create)
   *
   * @param string $parent Required. Resource name of the taxonomy that the policy
   * tag will belong to.
   * @param GoogleCloudDatacatalogV1beta1PolicyTag $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatacatalogV1beta1PolicyTag
   */
  public function create($parent, GoogleCloudDatacatalogV1beta1PolicyTag $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudDatacatalogV1beta1PolicyTag::class);
  }
  /**
   * Deletes a policy tag. Also deletes all of its descendant policy tags.
   * (policyTags.delete)
   *
   * @param string $name Required. Resource name of the policy tag to be deleted.
   * All of its descendant policy tags will also be deleted.
   * @param array $optParams Optional parameters.
   * @return DatacatalogEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DatacatalogEmpty::class);
  }
  /**
   * Gets a policy tag. (policyTags.get)
   *
   * @param string $name Required. Resource name of the requested policy tag.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatacatalogV1beta1PolicyTag
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDatacatalogV1beta1PolicyTag::class);
  }
  /**
   * Gets the IAM policy for a taxonomy or a policy tag. (policyTags.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Policy
   */
  public function getIamPolicy($resource, GetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', [$params], Policy::class);
  }
  /**
   * Lists all policy tags in a taxonomy.
   * (policyTags.listProjectsLocationsTaxonomiesPolicyTags)
   *
   * @param string $parent Required. Resource name of the taxonomy to list the
   * policy tags of.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of items to return. Must be a
   * value between 1 and 1000. If not set, defaults to 50.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous List request, if any. If not set, defaults to an empty string.
   * @return GoogleCloudDatacatalogV1beta1ListPolicyTagsResponse
   */
  public function listProjectsLocationsTaxonomiesPolicyTags($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudDatacatalogV1beta1ListPolicyTagsResponse::class);
  }
  /**
   * Updates a policy tag. (policyTags.patch)
   *
   * @param string $name Output only. Resource name of this policy tag, whose
   * format is: "projects/{project_number}/locations/{location_id}/taxonomies/{tax
   * onomy_id}/policyTags/{id}".
   * @param GoogleCloudDatacatalogV1beta1PolicyTag $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The update mask applies to the resource. Only
   * display_name, description and parent_policy_tag can be updated and thus can
   * be listed in the mask. If update_mask is not provided, all allowed fields
   * (i.e. display_name, description and parent) will be updated. For more
   * information including the `FieldMask` definition, see
   * https://developers.google.com/protocol-
   * buffers/docs/reference/google.protobuf#fieldmask If not set, defaults to all
   * of the fields that are allowed to update.
   * @return GoogleCloudDatacatalogV1beta1PolicyTag
   */
  public function patch($name, GoogleCloudDatacatalogV1beta1PolicyTag $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDatacatalogV1beta1PolicyTag::class);
  }
  /**
   * Sets the IAM policy for a taxonomy or a policy tag. (policyTags.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Policy
   */
  public function setIamPolicy($resource, SetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', [$params], Policy::class);
  }
  /**
   * Returns the permissions that a caller has on the specified taxonomy or policy
   * tag. (policyTags.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, TestIamPermissionsRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', [$params], TestIamPermissionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsTaxonomiesPolicyTags::class, 'Google_Service_DataCatalog_Resource_ProjectsLocationsTaxonomiesPolicyTags');
