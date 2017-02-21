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
 * The "resolutions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $resolutions = $supportcasesService->resolutions;
 *  </code>
 */
class Google_Service_Supportcases_Resource_Resolutions extends Google_Service_Resource
{
  /**
   * Query for resolutions. (resolutions.listResolutions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string caseId
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @opt_param string q
   * @opt_param string resultsToken
   * @opt_param string type
   * @return Google_Service_Supportcases_ListResolutionsResponse
   */
  public function listResolutions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Supportcases_ListResolutionsResponse");
  }
}
