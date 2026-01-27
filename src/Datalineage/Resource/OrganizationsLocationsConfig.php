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

namespace Google\Service\Datalineage\Resource;

use Google\Service\Datalineage\GoogleCloudDatacatalogLineageConfigmanagementV1Config;

/**
 * The "config" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datalineageService = new Google\Service\Datalineage(...);
 *   $config = $datalineageService->organizations_locations_config;
 *  </code>
 */
class OrganizationsLocationsConfig extends \Google\Service\Resource
{
  /**
   * Get the Config for a given resource. (config.get)
   *
   * @param string $name Required. REQUIRED: The resource name of the config to be
   * fetched. Format: `organizations/{organization_id}/locations/global/config`
   * `folders/{folder_id}/locations/global/config`
   * `projects/{project_id}/locations/global/config`
   * `projects/{project_number}/locations/global/config`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatacatalogLineageConfigmanagementV1Config
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDatacatalogLineageConfigmanagementV1Config::class);
  }
  /**
   * Update the Config for a given resource. (config.patch)
   *
   * @param string $name Identifier. The resource name of the config. Format:
   * `organizations/{organization_id}/locations/global/config`
   * `folders/{folder_id}/locations/global/config`
   * `projects/{project_id}/locations/global/config`
   * `projects/{project_number}/locations/global/config`
   * @param GoogleCloudDatacatalogLineageConfigmanagementV1Config $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatacatalogLineageConfigmanagementV1Config
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudDatacatalogLineageConfigmanagementV1Config $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDatacatalogLineageConfigmanagementV1Config::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsConfig::class, 'Google_Service_Datalineage_Resource_OrganizationsLocationsConfig');
