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

use Google\Service\ThreatIntelligenceService\Finding;
use Google\Service\ThreatIntelligenceService\ListFindingsResponse;
use Google\Service\ThreatIntelligenceService\SearchFindingsResponse;

/**
 * The "findings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $threatintelligenceService = new Google\Service\ThreatIntelligenceService(...);
 *   $findings = $threatintelligenceService->projects_findings;
 *  </code>
 */
class ProjectsFindings extends \Google\Service\Resource
{
  /**
   * Get a finding by name. (findings.get)
   *
   * @param string $name Required. Name of the finding to get.
   * @param array $optParams Optional parameters.
   * @return Finding
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Finding::class);
  }
  /**
   * Get a list of findings that meet the filter criteria.
   * (findings.listProjectsFindings)
   *
   * @param string $parent Required. Parent of the findings.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter criteria.
   * @opt_param string orderBy Optional. Order by criteria in the csv format:
   * "field1,field2 desc" or "field1,field2" or "field1 asc, field2".
   * @opt_param int pageSize Optional. Page size.
   * @opt_param string pageToken Optional. Page token.
   * @return ListFindingsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsFindings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListFindingsResponse::class);
  }
  /**
   * SearchFindings is a more powerful version of ListFindings that supports
   * complex queries like "findings for issues" using functions such as
   * `has_issue` and `has_asset` in the query string. Example to search for
   * findings for a specific issue:
   * `has_issue("name=\"vaults/vault-12345/issues/issue-12345\"")`)
   * (findings.search)
   *
   * @param string $parent Required. Parent of the findings. Format:
   * vaults/{vault}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy Optional. Order by criteria in the csv format:
   * "field1,field2 desc" or "field1,field2" or "field1 asc, field2".
   * @opt_param int pageSize Optional. Page size.
   * @opt_param string pageToken Optional. Page token.
   * @opt_param string query Optional. Query on what findings will be returned.
   * This supports the same filter criteria as FindingService.ListFindings as well
   * as the following relationship queries `has_issue` and `has_asset`. Examples:
   * - has_issue("name=\"vaults/vault-12345/issues/issue-12345\"") -
   * has_asset("name=\"vaults/vault-12345/assets/asset-12345\"")
   * @return SearchFindingsResponse
   * @throws \Google\Service\Exception
   */
  public function search($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], SearchFindingsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsFindings::class, 'Google_Service_ThreatIntelligenceService_Resource_ProjectsFindings');
