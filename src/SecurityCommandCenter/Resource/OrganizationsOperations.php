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

use Google\Service\SecurityCommandCenter\ListOperationsResponse;
use Google\Service\SecurityCommandCenter\Operation;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;

/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $operations = $securitycenterService->organizations_operations;
 *  </code>
 */
class OrganizationsOperations extends \Google\Service\Resource
{
  /**
   * (operations.cancel)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return SecuritycenterEmpty
   * @throws \Google\Service\Exception
   */
  public function cancel($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('cancel', [$params], SecuritycenterEmpty::class);
  }
  /**
   * (operations.delete)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return SecuritycenterEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SecuritycenterEmpty::class);
  }
  /**
   * (operations.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Operation::class);
  }
  /**
   * (operations.listOrganizationsOperations)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @opt_param bool returnPartialSuccess
   * @return ListOperationsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsOperations($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListOperationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsOperations::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsOperations');
