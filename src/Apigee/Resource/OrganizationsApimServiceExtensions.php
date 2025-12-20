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

use Google\Service\Apigee\GoogleCloudApigeeV1ApimServiceExtension;
use Google\Service\Apigee\GoogleCloudApigeeV1ListApimServiceExtensionsResponse;
use Google\Service\Apigee\GoogleLongrunningOperation;

/**
 * The "apimServiceExtensions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google\Service\Apigee(...);
 *   $apimServiceExtensions = $apigeeService->organizations_apimServiceExtensions;
 *  </code>
 */
class OrganizationsApimServiceExtensions extends \Google\Service\Resource
{
  /**
   * Creates an APIM ServiceExtension in an organization.
   * (apimServiceExtensions.create)
   *
   * @param string $parent Required. Name of the organization in which the service
   * extension will be created. Use the following structure in your request:
   * `organizations/{org}`
   * @param GoogleCloudApigeeV1ApimServiceExtension $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string apimServiceExtensionId Optional. ID used to uniquely
   * identify of the service extension. It must conform with RFC-1034, is
   * restricted to lower-cased letters, numbers and hyphens, and can have a
   * maximum length of 63 characters. Additionally, the first character must be a
   * letter and the last a letter or a number.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudApigeeV1ApimServiceExtension $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes APIM service extension from an organization.
   * (apimServiceExtensions.delete)
   *
   * @param string $name Required. Name of the service extension. Use the
   * following structure in your request:
   * `organizations/{org}/apimServiceExtensions/{extension_id}`
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
   * Gets APIM service extension details. (apimServiceExtensions.get)
   *
   * @param string $name Required. Name of the service extension. Use the
   * following structure in your request:
   * `organizations/{org}/apimServiceExtensions/{extension_id}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1ApimServiceExtension
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudApigeeV1ApimServiceExtension::class);
  }
  /**
   * Lists all APIM service extensions in an organization.
   * (apimServiceExtensions.listOrganizationsApimServiceExtensions)
   *
   * @param string $parent Required. Name of the organization for which to list
   * the service extension. Use the following structure in your request:
   * `organizations/{org}/apimServiceExtensions`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of items to return. If
   * unspecified, at most 25 service extension will be returned.
   * @opt_param string pageToken Optional. Page token, returned from a previous
   * `ListApimServiceExtensions` call, that you can use to retrieve the next page.
   * @return GoogleCloudApigeeV1ListApimServiceExtensionsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsApimServiceExtensions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudApigeeV1ListApimServiceExtensionsResponse::class);
  }
  /**
   * Updates an APIM service extension in an organization.
   * (apimServiceExtensions.patch)
   *
   * @param string $name Identifier. unique name of the APIM service extension.
   * The name must conform with RFC-1034, is restricted to lower-cased letters,
   * numbers and hyphens, and can have a maximum length of 63 characters.
   * Additionally, the first character must be a letter and the last a letter or a
   * number.
   * @param GoogleCloudApigeeV1ApimServiceExtension $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true, and the service
   * extension is not found, a new service extension will be created. In this
   * situation, `update_mask` is ignored.
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudApigeeV1ApimServiceExtension $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsApimServiceExtensions::class, 'Google_Service_Apigee_Resource_OrganizationsApimServiceExtensions');
