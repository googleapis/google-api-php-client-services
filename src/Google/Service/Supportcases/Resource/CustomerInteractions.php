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
 * The "customerInteractions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $customerInteractions = $supportcasesService->customerInteractions;
 *  </code>
 */
class Google_Service_Supportcases_Resource_CustomerInteractions extends Google_Service_Resource
{
  /**
   * List customer interactions. (customerInteractions.listCustomerInteractions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string adwordsCid
   * @opt_param string emailAddress
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @opt_param string startTime
   * @return Google_Service_Supportcases_ListInteractionsResponse
   */
  public function listCustomerInteractions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Supportcases_ListInteractionsResponse");
  }
  /**
   * Summary statistics about the cutomer's interaction history.
   * (customerInteractions.summarize)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string adwordsCid
   * @opt_param string emailAddress
   * @opt_param string startTime
   * @return Google_Service_Supportcases_SummarizeResponse
   */
  public function summarize($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('summarize', array($params), "Google_Service_Supportcases_SummarizeResponse");
  }
}
