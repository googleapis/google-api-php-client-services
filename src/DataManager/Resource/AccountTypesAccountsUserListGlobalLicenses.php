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

namespace Google\Service\DataManager\Resource;

use Google\Service\DataManager\ListUserListGlobalLicensesResponse;
use Google\Service\DataManager\UserListGlobalLicense;

/**
 * The "userListGlobalLicenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $userListGlobalLicenses = $datamanagerService->accountTypes_accounts_userListGlobalLicenses;
 *  </code>
 */
class AccountTypesAccountsUserListGlobalLicenses extends \Google\Service\Resource
{
  /**
   * Creates a user list global license. This feature is only available to data
   * partners. (userListGlobalLicenses.create)
   *
   * @param string $parent Required. The account that owns the user list being
   * licensed. Should be in the format
   * accountTypes/{ACCOUNT_TYPE}/accounts/{ACCOUNT_ID}
   * @param UserListGlobalLicense $postBody
   * @param array $optParams Optional parameters.
   * @return UserListGlobalLicense
   * @throws \Google\Service\Exception
   */
  public function create($parent, UserListGlobalLicense $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], UserListGlobalLicense::class);
  }
  /**
   * Retrieves a user list global license. This feature is only available to data
   * partners. (userListGlobalLicenses.get)
   *
   * @param string $name Required. The resource name of the user list global
   * license.
   * @param array $optParams Optional parameters.
   * @return UserListGlobalLicense
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UserListGlobalLicense::class);
  }
  /**
   * Lists all user list global licenses owned by the parent account. This feature
   * is only available to data partners.
   * (userListGlobalLicenses.listAccountTypesAccountsUserListGlobalLicenses)
   *
   * @param string $parent Required. The account whose licenses are being queried.
   * Should be in the format accountTypes/{ACCOUNT_TYPE}/accounts/{ACCOUNT_ID}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filters to apply to the list request. All
   * fields need to be on the left hand side of each condition (for example:
   * user_list_id = 123). **Supported Operations:** - `AND` - `=` - `!=` - `>` -
   * `>=` - `<` - `<=` **Unsupported Fields:** - `name` (use get method instead) -
   * `historical_pricings` and all its subfields - `pricing.start_time` -
   * `pricing.end_time`
   * @opt_param int pageSize Optional. The maximum number of licenses to return.
   * The service may return fewer than this value. If unspecified, at most 50
   * licenses will be returned. The maximum value is 1000; values above 1000 will
   * be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListUserListGlobalLicense` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `ListUserListDirectLicense` must match the call that provided the page token.
   * @return ListUserListGlobalLicensesResponse
   * @throws \Google\Service\Exception
   */
  public function listAccountTypesAccountsUserListGlobalLicenses($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUserListGlobalLicensesResponse::class);
  }
  /**
   * Updates a user list global license. This feature is only available to data
   * partners. (userListGlobalLicenses.patch)
   *
   * @param string $name Identifier. The resource name of the user list global
   * license.
   * @param UserListGlobalLicense $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update. The
   * special character `*` is not supported and an `INVALID_UPDATE_MASK` error
   * will be thrown if used.
   * @return UserListGlobalLicense
   * @throws \Google\Service\Exception
   */
  public function patch($name, UserListGlobalLicense $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], UserListGlobalLicense::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsUserListGlobalLicenses::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsUserListGlobalLicenses');
