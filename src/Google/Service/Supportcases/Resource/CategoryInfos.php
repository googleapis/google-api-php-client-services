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
 * The "categoryInfos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $categoryInfos = $supportcasesService->categoryInfos;
 *  </code>
 */
class Google_Service_Supportcases_Resource_CategoryInfos extends Google_Service_Resource
{
  /**
   * Searches category info. (categoryInfos.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool baselineOnly
   * @opt_param int filterByParentCategoryId
   * @opt_param bool filterConsultCategories
   * @opt_param int maximumResults
   * @opt_param string productIds
   * @opt_param string query
   * @return Google_Service_Supportcases_SearchCategoryInfosResponse
   */
  public function search($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Supportcases_SearchCategoryInfosResponse");
  }
}
