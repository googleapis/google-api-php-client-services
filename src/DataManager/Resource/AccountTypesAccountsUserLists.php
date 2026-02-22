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

use Google\Service\DataManager\DatamanagerEmpty;
use Google\Service\DataManager\ListUserListsResponse;
use Google\Service\DataManager\UserList;

/**
 * The "userLists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $userLists = $datamanagerService->accountTypes_accounts_userLists;
 *  </code>
 */
class AccountTypesAccountsUserLists extends \Google\Service\Resource
{
  /**
   * Creates a UserList. Authorization Headers: This method supports the following
   * optional headers to define how the API authorizes access for the request: *
   * `login-account`: (Optional) The resource name of the account where the Google
   * Account of the credentials is a user. If not set, defaults to the account of
   * the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (userLists.create)
   *
   * @param string $parent Required. The parent account where this user list will
   * be created. Format: accountTypes/{account_type}/accounts/{account}
   * @param UserList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validateOnly Optional. If true, the request is validated but
   * not executed.
   * @return UserList
   * @throws \Google\Service\Exception
   */
  public function create($parent, UserList $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], UserList::class);
  }
  /**
   * Deletes a UserList. Authorization Headers: This method supports the following
   * optional headers to define how the API authorizes access for the request: *
   * `login-account`: (Optional) The resource name of the account where the Google
   * Account of the credentials is a user. If not set, defaults to the account of
   * the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (userLists.delete)
   *
   * @param string $name Required. The name of the user list to delete. Format:
   * accountTypes/{account_type}/accounts/{account}/userLists/{user_list}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validateOnly Optional. If true, the request is validated but
   * not executed.
   * @return DatamanagerEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DatamanagerEmpty::class);
  }
  /**
   * Gets a UserList. Authorization Headers: This method supports the following
   * optional headers to define how the API authorizes access for the request: *
   * `login-account`: (Optional) The resource name of the account where the Google
   * Account of the credentials is a user. If not set, defaults to the account of
   * the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}` (userLists.get)
   *
   * @param string $name Required. The resource name of the UserList to retrieve.
   * Format: accountTypes/{account_type}/accounts/{account}/userLists/{user_list}
   * @param array $optParams Optional parameters.
   * @return UserList
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UserList::class);
  }
  /**
   * Lists UserLists. Authorization Headers: This method supports the following
   * optional headers to define how the API authorizes access for the request: *
   * `login-account`: (Optional) The resource name of the account where the Google
   * Account of the credentials is a user. If not set, defaults to the account of
   * the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (userLists.listAccountTypesAccountsUserLists)
   *
   * @param string $parent Required. The parent account which owns this collection
   * of user lists. Format: accountTypes/{account_type}/accounts/{account}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A [filter string](//google.aip.dev/160).
   * All fields need to be on the left hand side of each condition (for example:
   * `display_name = "list 1"`). Supported operations: - `AND` - `=` - `!=` - `>`
   * - `>=` - `<` - `<=` - `:` (has) Supported fields: - `id` - `display_name` -
   * `description` - `membership_status` - `integration_code` - `access_reason` -
   * `ingested_user_list_info.upload_key_types`
   * @opt_param int pageSize Optional. The maximum number of user lists to return.
   * The service may return fewer than this value. If unspecified, at most 50 user
   * lists will be returned. The maximum value is 1000; values above 1000 will be
   * coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListUserLists` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListUserLists` must match the
   * call that provided the page token.
   * @return ListUserListsResponse
   * @throws \Google\Service\Exception
   */
  public function listAccountTypesAccountsUserLists($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUserListsResponse::class);
  }
  /**
   * Updates a UserList. Authorization Headers: This method supports the following
   * optional headers to define how the API authorizes access for the request: *
   * `login-account`: (Optional) The resource name of the account where the Google
   * Account of the credentials is a user. If not set, defaults to the account of
   * the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (userLists.patch)
   *
   * @param string $name Identifier. The resource name of the user list. Format:
   * accountTypes/{account_type}/accounts/{account}/userLists/{user_list}
   * @param UserList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @opt_param bool validateOnly Optional. If true, the request is validated but
   * not executed.
   * @return UserList
   * @throws \Google\Service\Exception
   */
  public function patch($name, UserList $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], UserList::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsUserLists::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsUserLists');
