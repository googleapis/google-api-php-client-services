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
 * The "candidates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ghireService = new Google_Service_Ghire(...);
 *   $candidates = $ghireService->candidates;
 *  </code>
 */
class Google_Service_Ghire_Resource_Candidates extends Google_Service_Resource
{
  /**
   * Gets one candidate by ID. (candidates.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string applicationId
   * @opt_param string candidateId The resource ID.
   * @opt_param string domain
   * @opt_param string hrPersonId If specified, will return the record for a given
   * HR person ID.
   * @opt_param string offerId Recruit offer ID (not the same as Offer Workflow
   * offer ID)
   * @opt_param string requester email address of the person making the request,
   * e.g. "samg@google.com"
   * @return Google_Service_Ghire_Candidate
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Ghire_Candidate");
  }
  /**
   * Retrieve multiple candidates that match various criteria sorted by other
   * criteria (candidates.listCandidates)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string applicationId For searchType BY_APPLICATION_IDS only. The
   * user can list the candidates they wish to retrieve using their associated
   * application ids.
   * @opt_param string auditedJobOpeningId For type USER_ENTERED, the user may
   * specify the job opening for which the search is done, and/or the general
   * region of the job opening.
   * @opt_param string domain
   * @opt_param string email should parse to a orgstore search query
   * @opt_param string jobOpeningId
   * @opt_param string jobOpeningLocation Unless the query explicitly states
   * otherwise, assume compliance with US OFCCP regulations.
   * @opt_param string query
   * @opt_param string searchType
   * @opt_param string sortDirection
   * @opt_param string sortProperty
   * @return Google_Service_Ghire_CandidatesListResponse
   */
  public function listCandidates($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Ghire_CandidatesListResponse");
  }
}
