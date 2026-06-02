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

use Google\Service\SecurityCommandCenter\Finding;
use Google\Service\SecurityCommandCenter\GroupFindingsRequest;
use Google\Service\SecurityCommandCenter\GroupFindingsResponse;
use Google\Service\SecurityCommandCenter\ListFindingsResponse;
use Google\Service\SecurityCommandCenter\SecurityMarks;
use Google\Service\SecurityCommandCenter\SetFindingStateRequest;
use Google\Service\SecurityCommandCenter\SetMuteRequest;

/**
 * The "findings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $findings = $securitycenterService->folders_sources_findings;
 *  </code>
 */
class FoldersSourcesFindings extends \Google\Service\Resource
{
  /**
   * (findings.group)
   *
   * @param string $parent
   * @param GroupFindingsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GroupFindingsResponse
   * @throws \Google\Service\Exception
   */
  public function group($parent, GroupFindingsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('group', [$params], GroupFindingsResponse::class);
  }
  /**
   * (findings.listFoldersSourcesFindings)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param string compareDuration
   * @opt_param string fieldMask
   * @opt_param string filter
   * @opt_param string orderBy
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @opt_param string readTime
   * @return ListFindingsResponse
   * @throws \Google\Service\Exception
   */
  public function listFoldersSourcesFindings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListFindingsResponse::class);
  }
  /**
   * (findings.patch)
   *
   * @param string $name
   * @param Finding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return Finding
   * @throws \Google\Service\Exception
   */
  public function patch($name, Finding $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Finding::class);
  }
  /**
   * (findings.setMute)
   *
   * @param string $name
   * @param SetMuteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Finding
   * @throws \Google\Service\Exception
   */
  public function setMute($name, SetMuteRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setMute', [$params], Finding::class);
  }
  /**
   * (findings.setState)
   *
   * @param string $name
   * @param SetFindingStateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Finding
   * @throws \Google\Service\Exception
   */
  public function setState($name, SetFindingStateRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setState', [$params], Finding::class);
  }
  /**
   * (findings.updateSecurityMarks)
   *
   * @param string $name
   * @param SecurityMarks $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime
   * @opt_param string updateMask
   * @return SecurityMarks
   * @throws \Google\Service\Exception
   */
  public function updateSecurityMarks($name, SecurityMarks $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateSecurityMarks', [$params], SecurityMarks::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersSourcesFindings::class, 'Google_Service_SecurityCommandCenter_Resource_FoldersSourcesFindings');
