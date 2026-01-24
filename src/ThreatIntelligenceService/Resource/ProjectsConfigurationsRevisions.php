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

use Google\Service\ThreatIntelligenceService\ListConfigurationRevisionsResponse;

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $threatintelligenceService = new Google\Service\ThreatIntelligenceService(...);
 *   $revisions = $threatintelligenceService->projects_configurations_revisions;
 *  </code>
 */
class ProjectsConfigurationsRevisions extends \Google\Service\Resource
{
  /**
   * List configuration revisions that meet the filter criteria.
   * (revisions.listProjectsConfigurationsRevisions)
   *
   * @param string $parent Required. The name of the Configuration to retrieve
   * Revisions for
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An AIP-160 filter string
   * @opt_param string orderBy Optional. Specify ordering of response
   * @opt_param int pageSize Optional. Page Size
   * @opt_param string pageToken Optional. A page token provided by the API
   * @return ListConfigurationRevisionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsConfigurationsRevisions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListConfigurationRevisionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsConfigurationsRevisions::class, 'Google_Service_ThreatIntelligenceService_Resource_ProjectsConfigurationsRevisions');
