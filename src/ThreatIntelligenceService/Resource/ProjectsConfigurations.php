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

namespace Google\Service\ThreatIntelligenceService\Resource;

use Google\Service\ThreatIntelligenceService\Configuration;
use Google\Service\ThreatIntelligenceService\ListConfigurationsResponse;
use Google\Service\ThreatIntelligenceService\UpsertConfigurationResponse;

/**
 * The "configurations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $threatintelligenceService = new Google\Service\ThreatIntelligenceService(...);
 *   $configurations = $threatintelligenceService->projects_configurations;
 *  </code>
 */
class ProjectsConfigurations extends \Google\Service\Resource
{
  /**
   * Get a configuration by name. (configurations.get)
   *
   * @param string $name Required. Name of the configuration to get. Format:
   * vaults/{vault}/configurations/{configuration}
   * @param array $optParams Optional parameters.
   * @return Configuration
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Configuration::class);
  }
  /**
   * Get a list of configurations that meet the filter criteria.
   * (configurations.listProjectsConfigurations)
   *
   * @param string $parent Required. Parent of the configuration. Format:
   * vaults/{vault}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter criteria.
   * @opt_param string orderBy Optional. Order by criteria in the csv format:
   * "field1,field2 desc" or "field1,field2" or "field1 asc, field2".
   * @opt_param int pageSize Optional. Page size.
   * @opt_param string pageToken Optional. Page token.
   * @return ListConfigurationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsConfigurations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListConfigurationsResponse::class);
  }
  /**
   * Creates or updates a configuration. (configurations.upsert)
   *
   * @param string $parent Required. Parent of the configuration.
   * @param Configuration $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string publishTime Optional. Time that the configuration should be
   * considered to have been published. This is an advanced feature used when
   * onboarding and bulk loading data from other systems. Do not set this field
   * without consulting with the API team.
   * @return UpsertConfigurationResponse
   * @throws \Google\Service\Exception
   */
  public function upsert($parent, Configuration $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upsert', [$params], UpsertConfigurationResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsConfigurations::class, 'Google_Service_ThreatIntelligenceService_Resource_ProjectsConfigurations');
