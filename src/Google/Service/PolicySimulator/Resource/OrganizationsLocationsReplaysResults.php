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

/**
 * The "results" collection of methods.
 * Typical usage is:
 *  <code>
 *   $policysimulatorService = new Google_Service_PolicySimulator(...);
 *   $results = $policysimulatorService->results;
 *  </code>
 */
class Google_Service_PolicySimulator_Resource_OrganizationsLocationsReplaysResults extends Google_Service_Resource
{
  /**
   * List the results of running a replay
   * (results.listOrganizationsLocationsReplaysResults)
   *
   * @param string $parent Required. The replay we are listing results for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of `ReplayResults` to return. If
   * unspecified, at most 5000 `Replays` will be returned. The maximum value is
   * 5000; values above 5000 will be coerced to 5000.
   * @opt_param string pageToken A page token, received from a previous
   * `ListReplayResults` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListReplayResults` must match
   * the call that provided the page token.
   * @return Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1ListReplayResultsResponse
   */
  public function listOrganizationsLocationsReplaysResults($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1ListReplayResultsResponse");
  }
}
