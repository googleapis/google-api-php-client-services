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
use Google\Service\DataCatalog\GoogleCloudDatacatalogV1beta1TagTemplate;
use Google\Service\DataCatalog\Policy;
use Google\Service\DataCatalog\SetIamPolicyRequest;
use Google\Service\DataCatalog\TestIamPermissionsRequest;
use Google\Service\DataCatalog\TestIamPermissionsResponse;

/**
 * The "tagTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datacatalogService = new Google\Service\DataCatalog(...);
 *   $tagTemplates = $datacatalogService->tagTemplates;
 *  </code>
 */
class ProjectsLocationsTagTemplates extends \Google\Service\Resource
{
  /**
   * Creates a tag template. The user should enable the Data Catalog API in the
   * project identified by the `parent` parameter (see [Data Catalog Resource
   * Project](https://cloud.google.com/data-catalog/docs/concepts/resource-
   * project) for more information). (tagTemplates.create)
   *
   * @param string $parent Required. The name of the project and the template
   * location [region](https://cloud.google.com/data-
   * catalog/docs/concepts/regions. Example: * projects/{project_id}/locations/us-
   * central1
   * @param GoogleCloudDatacatalogV1beta1TagTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string tagTemplateId Required. The id of the tag template to
   * create.
   * @return GoogleCloudDatacatalogV1beta1TagTemplate
   */
  public function create($parent, GoogleCloudDatacatalogV1beta1TagTemplate $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudDatacatalogV1beta1TagTemplate::class);
  }
  /**
   * Deletes a tag template and all tags using the template. Users should enable
   * the Data Catalog API in the project identified by the `name` parameter (see
   * [Data Catalog Resource Project] (https://cloud.google.com/data-
   * catalog/docs/concepts/resource-project) for more information).
   * (tagTemplates.delete)
   *
   * @param string $name Required. The name of the tag template to delete.
   * Example: *
   * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Required. Currently, this field must always be set to
   * `true`. This confirms the deletion of any possible tags using this template.
   * `force = false` will be supported in the future.
   * @return DatacatalogEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DatacatalogEmpty::class);
  }
  /**
   * Gets a tag template. (tagTemplates.get)
   *
   * @param string $name Required. The name of the tag template. Example: *
   * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatacatalogV1beta1TagTemplate
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDatacatalogV1beta1TagTemplate::class);
  }
  /**
   * Gets the access control policy for a resource. A `NOT_FOUND` error is
   * returned if the resource does not exist. An empty policy is returned if the
   * resource exists but does not have a policy set on it. Supported resources
   * are: - Tag templates. - Entries. - Entry groups. Note, this method cannot be
   * used to manage policies for BigQuery, Pub/Sub and any external Google Cloud
   * Platform resources synced to Data Catalog. Callers must have following Google
   * IAM permission - `datacatalog.tagTemplates.getIamPolicy` to get policies on
   * tag templates. - `datacatalog.entries.getIamPolicy` to get policies on
   * entries. - `datacatalog.entryGroups.getIamPolicy` to get policies on entry
   * groups. (tagTemplates.getIamPolicy)
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
   * Updates a tag template. This method cannot be used to update the fields of a
   * template. The tag template fields are represented as separate resources and
   * should be updated using their own create/update/delete methods. Users should
   * enable the Data Catalog API in the project identified by the
   * `tag_template.name` parameter (see [Data Catalog Resource Project]
   * (https://cloud.google.com/data-catalog/docs/concepts/resource-project) for
   * more information). (tagTemplates.patch)
   *
   * @param string $name The resource name of the tag template in URL format.
   * Example: *
   * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
   * Note that this TagTemplate and its child resources may not actually be stored
   * in the location in this name.
   * @param GoogleCloudDatacatalogV1beta1TagTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Names of fields whose values to overwrite on a
   * tag template. Currently, only `display_name` can be overwritten. In general,
   * if this parameter is absent or empty, all modifiable fields are overwritten.
   * If such fields are non-required and omitted in the request body, their values
   * are emptied.
   * @return GoogleCloudDatacatalogV1beta1TagTemplate
   */
  public function patch($name, GoogleCloudDatacatalogV1beta1TagTemplate $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDatacatalogV1beta1TagTemplate::class);
  }
  /**
   * Sets the access control policy for a resource. Replaces any existing policy.
   * Supported resources are: - Tag templates. - Entries. - Entry groups. Note,
   * this method cannot be used to manage policies for BigQuery, Pub/Sub and any
   * external Google Cloud Platform resources synced to Data Catalog. Callers must
   * have following Google IAM permission -
   * `datacatalog.tagTemplates.setIamPolicy` to set policies on tag templates. -
   * `datacatalog.entries.setIamPolicy` to set policies on entries. -
   * `datacatalog.entryGroups.setIamPolicy` to set policies on entry groups.
   * (tagTemplates.setIamPolicy)
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
   * Returns the caller's permissions on a resource. If the resource does not
   * exist, an empty set of permissions is returned (We don't return a `NOT_FOUND`
   * error). Supported resources are: - Tag templates. - Entries. - Entry groups.
   * Note, this method cannot be used to manage policies for BigQuery, Pub/Sub and
   * any external Google Cloud Platform resources synced to Data Catalog. A caller
   * is not required to have Google IAM permission to make this request.
   * (tagTemplates.testIamPermissions)
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
class_alias(ProjectsLocationsTagTemplates::class, 'Google_Service_DataCatalog_Resource_ProjectsLocationsTagTemplates');
