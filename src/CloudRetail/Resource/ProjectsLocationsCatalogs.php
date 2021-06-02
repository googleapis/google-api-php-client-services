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

namespace Google\Service\CloudRetail\Resource;

use Google\Service\CloudRetail\GoogleCloudRetailV2Catalog;
use Google\Service\CloudRetail\GoogleCloudRetailV2ListCatalogsResponse;

/**
 * The "catalogs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $retailService = new Google\Service\CloudRetail(...);
 *   $catalogs = $retailService->catalogs;
 *  </code>
 */
class ProjectsLocationsCatalogs extends \Google\Service\Resource
{
  /**
   * Lists all the Catalogs associated with the project.
   * (catalogs.listProjectsLocationsCatalogs)
   *
   * @param string $parent Required. The account resource name with an associated
   * location. If the caller does not have permission to list Catalogs under this
   * location, regardless of whether or not this location exists, a
   * PERMISSION_DENIED error is returned.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of Catalogs to return. If unspecified,
   * defaults to 50. The maximum allowed value is 1000. Values above 1000 will be
   * coerced to 1000. If this field is negative, an INVALID_ARGUMENT is returned.
   * @opt_param string pageToken A page token
   * ListCatalogsResponse.next_page_token, received from a previous
   * CatalogService.ListCatalogs call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * CatalogService.ListCatalogs must match the call that provided the page token.
   * Otherwise, an INVALID_ARGUMENT error is returned.
   * @return GoogleCloudRetailV2ListCatalogsResponse
   */
  public function listProjectsLocationsCatalogs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudRetailV2ListCatalogsResponse::class);
  }
  /**
   * Updates the Catalogs. (catalogs.patch)
   *
   * @param string $name Required. Immutable. The fully qualified resource name of
   * the catalog.
   * @param GoogleCloudRetailV2Catalog $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Indicates which fields in the provided Catalog
   * to update. If an unsupported or unknown field is provided, an
   * INVALID_ARGUMENT error is returned.
   * @return GoogleCloudRetailV2Catalog
   */
  public function patch($name, GoogleCloudRetailV2Catalog $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudRetailV2Catalog::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCatalogs::class, 'Google_Service_CloudRetail_Resource_ProjectsLocationsCatalogs');
