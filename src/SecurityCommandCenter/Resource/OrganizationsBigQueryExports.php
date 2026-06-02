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

namespace Google\Service\SecurityCommandCenter\Resource;

use Google\Service\SecurityCommandCenter\GoogleCloudSecuritycenterV1BigQueryExport;
use Google\Service\SecurityCommandCenter\ListBigQueryExportsResponse;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;

/**
 * The "bigQueryExports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $bigQueryExports = $securitycenterService->organizations_bigQueryExports;
 *  </code>
 */
class OrganizationsBigQueryExports extends \Google\Service\Resource
{
  /**
   * (bigQueryExports.create)
   *
   * @param string $parent
   * @param GoogleCloudSecuritycenterV1BigQueryExport $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string bigQueryExportId
   * @return GoogleCloudSecuritycenterV1BigQueryExport
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudSecuritycenterV1BigQueryExport $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudSecuritycenterV1BigQueryExport::class);
  }
  /**
   * (bigQueryExports.delete)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return SecuritycenterEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SecuritycenterEmpty::class);
  }
  /**
   * (bigQueryExports.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return GoogleCloudSecuritycenterV1BigQueryExport
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudSecuritycenterV1BigQueryExport::class);
  }
  /**
   * (bigQueryExports.listOrganizationsBigQueryExports)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListBigQueryExportsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsBigQueryExports($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListBigQueryExportsResponse::class);
  }
  /**
   * (bigQueryExports.patch)
   *
   * @param string $name
   * @param GoogleCloudSecuritycenterV1BigQueryExport $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return GoogleCloudSecuritycenterV1BigQueryExport
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudSecuritycenterV1BigQueryExport $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudSecuritycenterV1BigQueryExport::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsBigQueryExports::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsBigQueryExports');
