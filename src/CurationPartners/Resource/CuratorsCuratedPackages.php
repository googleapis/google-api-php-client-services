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

namespace Google\Service\CurationPartners\Resource;

use Google\Service\CurationPartners\ActivateCuratedPackageRequest;
use Google\Service\CurationPartners\CuratedPackage;
use Google\Service\CurationPartners\DeactivateCuratedPackageRequest;
use Google\Service\CurationPartners\ListCuratedPackagesResponse;

/**
 * The "curatedPackages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $curationpartnersService = new Google\Service\CurationPartners(...);
 *   $curatedPackages = $curationpartnersService->curators_curatedPackages;
 *  </code>
 */
class CuratorsCuratedPackages extends \Google\Service\Resource
{
  /**
   * Activates an existing curated package. (curatedPackages.activate)
   *
   * @param string $name Required. The name of the curated package to activate.
   * Format: `curators/{accountId}/curatedPackages/{curatedPackageId}`
   * @param ActivateCuratedPackageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CuratedPackage
   * @throws \Google\Service\Exception
   */
  public function activate($name, ActivateCuratedPackageRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('activate', [$params], CuratedPackage::class);
  }
  /**
   * Creates a new curated package. (curatedPackages.create)
   *
   * @param string $parent Required. The parent curator account where this curated
   * package will be created. Format: `curators/{accountId}`
   * @param CuratedPackage $postBody
   * @param array $optParams Optional parameters.
   * @return CuratedPackage
   * @throws \Google\Service\Exception
   */
  public function create($parent, CuratedPackage $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], CuratedPackage::class);
  }
  /**
   * Deactivates an existing curated package. (curatedPackages.deactivate)
   *
   * @param string $name Required. The name of the curated package to deactivate.
   * Format: `curators/{accountId}/curatedPackages/{curatedPackageId}`
   * @param DeactivateCuratedPackageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CuratedPackage
   * @throws \Google\Service\Exception
   */
  public function deactivate($name, DeactivateCuratedPackageRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('deactivate', [$params], CuratedPackage::class);
  }
  /**
   * Gets a curated package given its resource name. (curatedPackages.get)
   *
   * @param string $name Required. The name of the curated package to retrieve.
   * Format: `curators/{accountId}/curatedPackages/{curatedPackageId}`
   * @param array $optParams Optional parameters.
   * @return CuratedPackage
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], CuratedPackage::class);
  }
  /**
   * Lists curated packages owned by the specified curator.
   * (curatedPackages.listCuratorsCuratedPackages)
   *
   * @param string $parent Required. The parent curator account which owns this
   * collection of curated packages. Format: `curators/{accountId}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Optional query string using the [Cloud API
   * list filtering syntax](/authorized-buyers/apis/guides/list-filters).
   * Supported columns for filtering are: * displayName * createTime * updateTime
   * * state * feeCpm.currencyCode * feeCpm.units * feeCpm.nanos *
   * floorPriceCpm.currencyCode * floorPriceCpm.units * floorPriceCpm.nanos
   * @opt_param int pageSize Optional. Requested page size. The server may return
   * fewer results than requested. Max allowed page size is 500. If unspecified,
   * the server will default to 500.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListCuratedPackages` call. Provide this to retrieve the subsequent page.
   * @return ListCuratedPackagesResponse
   * @throws \Google\Service\Exception
   */
  public function listCuratorsCuratedPackages($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListCuratedPackagesResponse::class);
  }
  /**
   * Updates an existing curated package. (curatedPackages.patch)
   *
   * @param string $name Identifier. The unique resource name for the curated
   * package. Format: `curators/{accountId}/curatedPackages/{curatedPackageId}`
   * @param CuratedPackage $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. List of fields to be updated. If empty
   * or unspecified, the service will update all fields populated in the update
   * request excluding the output only fields and primitive fields with default
   * value. Note that explicit field mask is required in order to reset a
   * primitive field back to its default value, for example, false for boolean
   * fields, 0 for integer fields. A special field mask consisting of a single
   * path "*" can be used to indicate full replacement (the equivalent of PUT
   * method), updatable fields unset or unspecified in the input will be cleared
   * or set to default value. Output only fields will be ignored regardless of the
   * value of updateMask.
   * @return CuratedPackage
   * @throws \Google\Service\Exception
   */
  public function patch($name, CuratedPackage $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], CuratedPackage::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CuratorsCuratedPackages::class, 'Google_Service_CurationPartners_Resource_CuratorsCuratedPackages');
