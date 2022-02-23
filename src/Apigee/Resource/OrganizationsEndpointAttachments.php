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

namespace Google\Service\Apigee\Resource;

use Google\Service\Apigee\GoogleCloudApigeeV1EndpointAttachment;
use Google\Service\Apigee\GoogleCloudApigeeV1ListEndpointAttachmentsResponse;
use Google\Service\Apigee\GoogleLongrunningOperation;

/**
 * The "endpointAttachments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google\Service\Apigee(...);
 *   $endpointAttachments = $apigeeService->endpointAttachments;
 *  </code>
 */
class OrganizationsEndpointAttachments extends \Google\Service\Resource
{
  /**
   * Creates an EndpointAttachment. **Note:** Not supported for Apigee hybrid.
   * (endpointAttachments.create)
   *
   * @param string $parent Required. The Organization this EndpointAttachment will
   * be created in.
   * @param GoogleCloudApigeeV1EndpointAttachment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string endpointAttachmentId The ID to use for the endpoint
   * attachment. ID must be a 1-20 characters string with lowercase letters and
   * numbers and must start with a letter.
   * @return GoogleLongrunningOperation
   */
  public function create($parent, GoogleCloudApigeeV1EndpointAttachment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes an endpoint attachment. (endpointAttachments.delete)
   *
   * @param string $name Required. Name of the Endpoint Attachment in the
   * following format:
   * `organizations/{organization}/endpointAttachments/{endpoint_attachment}`.
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets the specified EndpointAttachment. (endpointAttachments.get)
   *
   * @param string $name Required. Name of the Endpoint Attachment in the
   * following format:
   * `organizations/{organization}/endpointAttachments/{endpoint_attachment}`.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1EndpointAttachment
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudApigeeV1EndpointAttachment::class);
  }
  /**
   * Lists the EndpointAttachments in the specified Organization.
   * (endpointAttachments.listOrganizationsEndpointAttachments)
   *
   * @param string $parent Required. Name of the Organization for which to list
   * Endpoint Attachments in the format: `organizations/{organization}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of Endpoint Attachments to
   * return. If unspecified, at most 25 attachments will be returned.
   * @opt_param string pageToken Optional. Page token, returned from a previous
   * ListEndpointAttachments call, that you can use to retrieve the next page.
   * @return GoogleCloudApigeeV1ListEndpointAttachmentsResponse
   */
  public function listOrganizationsEndpointAttachments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudApigeeV1ListEndpointAttachmentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsEndpointAttachments::class, 'Google_Service_Apigee_Resource_OrganizationsEndpointAttachments');
