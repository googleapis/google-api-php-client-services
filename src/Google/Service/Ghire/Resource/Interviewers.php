<?php
/*
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
 * The "interviewers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ghireService = new Google_Service_Ghire(...);
 *   $interviewers = $ghireService->interviewers;
 *  </code>
 */
class Google_Service_Ghire_Resource_Interviewers extends Google_Service_Resource
{
  /**
   * Gets one interviewer resource by id. (interviewers.get)
   *
   * @param string $interviewersId The resource ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string domain
   * @return Google_Service_Ghire_Interviewer
   */
  public function get($interviewersId, $optParams = array())
  {
    $params = array('interviewersId' => $interviewersId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Ghire_Interviewer");
  }
  /**
   * (interviewers.getinterviewerstats)
   *
   * @param Google_Service_Ghire_InterviewersGetInterviewerStatsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Ghire_InterviewersGetInterviewerStatsResponse
   */
  public function getinterviewerstats(Google_Service_Ghire_InterviewersGetInterviewerStatsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getinterviewerstats', array($params), "Google_Service_Ghire_InterviewersGetInterviewerStatsResponse");
  }
  /**
   * Retrieves a list of interviewer resources, possibly filtered.
   * (interviewers.listInterviewers)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string domain
   * @return Google_Service_Ghire_InterviewersListResponse
   */
  public function listInterviewers($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Ghire_InterviewersListResponse");
  }
}
