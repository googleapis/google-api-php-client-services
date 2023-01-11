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

namespace Google\Service\Contentwarehouse\Resource;

use Google\Service\Contentwarehouse\GoogleCloudContentwarehouseV1FetchAclRequest;
use Google\Service\Contentwarehouse\GoogleCloudContentwarehouseV1FetchAclResponse;
use Google\Service\Contentwarehouse\GoogleCloudContentwarehouseV1SetAclRequest;
use Google\Service\Contentwarehouse\GoogleCloudContentwarehouseV1SetAclResponse;

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentwarehouseService = new Google\Service\Contentwarehouse(...);
 *   $projects = $contentwarehouseService->projects;
 *  </code>
 */
class Projects extends \Google\Service\Resource
{
  /**
   * Gets the access control policy for a resource. Returns NOT_FOUND error if the
   * resource does not exist. Returns an empty policy if the resource exists but
   * does not have a policy set. (projects.fetchAcl)
   *
   * @param string $resource Required. REQUIRED: The resource for which the policy
   * is being requested. Format for document:
   * projects/{project_number}/locations/{location}/documents/{document_id}.
   * Format for project: projects/{project_number}.
   * @param GoogleCloudContentwarehouseV1FetchAclRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContentwarehouseV1FetchAclResponse
   */
  public function fetchAcl($resource, GoogleCloudContentwarehouseV1FetchAclRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('fetchAcl', [$params], GoogleCloudContentwarehouseV1FetchAclResponse::class);
  }
  /**
   * Sets the access control policy for a resource. Replaces any existing policy.
   * You can set ACL with condition for projects only. Supported operators are:
   * `=`, `!=`, `<`, `<=`, `>`, and `>=` where the left of the operator is
   * `DocumentSchemaId` or property name and the right of the operator is a number
   * or a quoted string. You must escape backslash (\\) and quote (\") characters.
   * Boolean expressions (AND/OR) are supported up to 3 levels of nesting (for
   * example, "((A AND B AND C) OR D) AND E"), a maximum of 10 comparisons are
   * allowed in the expression. The expression must be < 6000 bytes in length.
   * Sample condition: `"DocumentSchemaId = \"some schema id\" " OR
   * SchemaId.floatPropertyName >= 10` (projects.setAcl)
   *
   * @param string $resource Required. REQUIRED: The resource for which the policy
   * is being requested. Format for document:
   * projects/{project_number}/locations/{location}/documents/{document_id}.
   * Format for project: projects/{project_number}.
   * @param GoogleCloudContentwarehouseV1SetAclRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContentwarehouseV1SetAclResponse
   */
  public function setAcl($resource, GoogleCloudContentwarehouseV1SetAclRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setAcl', [$params], GoogleCloudContentwarehouseV1SetAclResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Projects::class, 'Google_Service_Contentwarehouse_Resource_Projects');
