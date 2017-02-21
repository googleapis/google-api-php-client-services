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
 * The "cases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $cases = $supportcasesService->cases;
 *  </code>
 */
class Google_Service_Supportcases_Resource_Cases extends Google_Service_Resource
{
  /**
   * Assigns the specified case. (cases.assign)
   *
   * @param string $name
   * @param Google_Service_Supportcases_AssignRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_AssignResponse
   */
  public function assign($name, Google_Service_Supportcases_AssignRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('assign', array($params), "Google_Service_Supportcases_AssignResponse");
  }
  /**
   * Deduplicates a case by closing duplicates cases. (cases.dedupe)
   *
   * @param string $name
   * @param Google_Service_Supportcases_DedupeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_DedupeResponse
   */
  public function dedupe($name, Google_Service_Supportcases_DedupeRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('dedupe', array($params), "Google_Service_Supportcases_DedupeResponse");
  }
  /**
   * Sets the specified case to the finished state and triggers other finisher
   * related workflows. (cases.finish)
   *
   * @param string $name
   * @param Google_Service_Supportcases_FinishRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_FinishResponse
   */
  public function finish($name, Google_Service_Supportcases_FinishRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('finish', array($params), "Google_Service_Supportcases_FinishResponse");
  }
  /**
   * Gets the specified case. (cases.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_SupportcasesCase
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Supportcases_SupportcasesCase");
  }
  /**
   * Sets the specified case to the needs info state. (cases.needsInfo)
   *
   * @param string $name
   * @param Google_Service_Supportcases_NeedsInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_NeedsInfoResponse
   */
  public function needsInfo($name, Google_Service_Supportcases_NeedsInfoRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('needsInfo', array($params), "Google_Service_Supportcases_NeedsInfoResponse");
  }
  /**
   * Sets the specified case to the solution offered state indicating that a
   * previous communication was a "solution". (cases.offeredSolution)
   *
   * @param string $name
   * @param Google_Service_Supportcases_OfferedSolutionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_OfferedSolutionResponse
   */
  public function offeredSolution($name, Google_Service_Supportcases_OfferedSolutionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('offeredSolution', array($params), "Google_Service_Supportcases_OfferedSolutionResponse");
  }
  /**
   * Unassigns the specified case from the gaia user associated with this call.
   * (cases.release)
   *
   * @param string $name
   * @param Google_Service_Supportcases_ReleaseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_ReleaseResponse
   */
  public function release($name, Google_Service_Supportcases_ReleaseRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('release', array($params), "Google_Service_Supportcases_ReleaseResponse");
  }
  /**
   * Routes the specified case to another product or team. (cases.route)
   *
   * @param string $name
   * @param Google_Service_Supportcases_RouteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_RouteResponse
   */
  public function route($name, Google_Service_Supportcases_RouteRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('route', array($params), "Google_Service_Supportcases_RouteResponse");
  }
  /**
   * Assigns the specified case to the gaia user associated with this call.
   * (cases.take)
   *
   * @param string $name
   * @param Google_Service_Supportcases_TakeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_TakeResponse
   */
  public function take($name, Google_Service_Supportcases_TakeRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('take', array($params), "Google_Service_Supportcases_TakeResponse");
  }
  /**
   * Transfers the specified case from the gaia user associated with this call to
   * another user. (cases.transfer)
   *
   * @param string $name
   * @param Google_Service_Supportcases_TransferRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_TransferResponse
   */
  public function transfer($name, Google_Service_Supportcases_TransferRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('transfer', array($params), "Google_Service_Supportcases_TransferResponse");
  }
  /**
   * Unassigns the specified case from its current assignee. Note that this also
   * moves the case to the UNASSIGNED state. (cases.unassign)
   *
   * @param string $name
   * @param Google_Service_Supportcases_UnassignRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_UnassignResponse
   */
  public function unassign($name, Google_Service_Supportcases_UnassignRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('unassign', array($params), "Google_Service_Supportcases_UnassignResponse");
  }
  /**
   * Updates contact name for the specified case. (cases.updateContactName)
   *
   * @param string $name
   * @param Google_Service_Supportcases_UpdateContactNameRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_UpdateContactNameResponse
   */
  public function updateContactName($name, Google_Service_Supportcases_UpdateContactNameRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateContactName', array($params), "Google_Service_Supportcases_UpdateContactNameResponse");
  }
  /**
   * Updates customer attributes for the specified case.
   * (cases.updateCustomerAttributes)
   *
   * @param string $name
   * @param Google_Service_Supportcases_UpdateCustomerAttributesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_SupportcasesCase
   */
  public function updateCustomerAttributes($name, Google_Service_Supportcases_UpdateCustomerAttributesRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateCustomerAttributes', array($params), "Google_Service_Supportcases_SupportcasesCase");
  }
}
