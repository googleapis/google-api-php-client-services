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

namespace Google\Service\CloudAuditManager\Resource;

use Google\Service\CloudAuditManager\Operation;

/**
 * The "operationIds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $operationIds = $auditmanagerService->folders_locations_operationIds;
 *  </code>
 */
class FoldersLocationsOperationIds extends \Google\Service\Resource
{
  /**
   * Gets details about the long-running operation to generate audit reports.
   * (operationIds.get)
   *
   * @param string $name The name of the operation resource.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersLocationsOperationIds::class, 'Google_Service_CloudAuditManager_Resource_FoldersLocationsOperationIds');
