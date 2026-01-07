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

namespace Google\Service\GSuiteMarketplaceAPI\Resource;

use Google\Service\GSuiteMarketplaceAPI\UserLicense as UserLicenseModel;

/**
 * The "userLicense" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appsmarketService = new Google\Service\GSuiteMarketplaceAPI(...);
 *   $userLicense = $appsmarketService->userLicense;
 *  </code>
 */
class UserLicense extends \Google\Service\Resource
{
  /**
   * Gets the user's licensing status for their permission to use a given app.
   * (userLicense.get)
   *
   * @param string $applicationId Application Id
   * @param string $userId User Id
   * @param array $optParams Optional parameters.
   * @return UserLicenseModel
   * @throws \Google\Service\Exception
   */
  public function get($applicationId, $userId, $optParams = [])
  {
    $params = ['applicationId' => $applicationId, 'userId' => $userId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UserLicenseModel::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserLicense::class, 'Google_Service_GSuiteMarketplaceAPI_Resource_UserLicense');
