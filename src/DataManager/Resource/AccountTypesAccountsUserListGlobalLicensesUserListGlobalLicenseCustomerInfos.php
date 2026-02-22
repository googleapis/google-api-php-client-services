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

use Google\Service\DataManager\ListUserListGlobalLicenseCustomerInfosResponse;

/**
 * The "userListGlobalLicenseCustomerInfos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $userListGlobalLicenseCustomerInfos = $datamanagerService->accountTypes_accounts_userListGlobalLicenses_userListGlobalLicenseCustomerInfos;
 *  </code>
 */
class AccountTypesAccountsUserListGlobalLicensesUserListGlobalLicenseCustomerInfos extends \Google\Service\Resource
{
  /**
   * Lists all customer info for a user list global license. This feature is only
   * available to data partners. (userListGlobalLicenseCustomerInfos.listAccountTy
   * pesAccountsUserListGlobalLicensesUserListGlobalLicenseCustomerInfos)
   *
   * @param string $parent Required. The global license whose customer info are
   * being queried. Should be in the format `accountTypes/{ACCOUNT_TYPE}/accounts/
   * {ACCOUNT_ID}/userListGlobalLicenses/{USER_LIST_GLOBAL_LICENSE_ID}`. To list
   * all global license customer info under an account, replace the user list
   * global license id with a '-' (for example,
   * `accountTypes/DATA_PARTNER/accounts/123/userListGlobalLicenses/-`)
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
   * `ListUserListDirectLicense` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `ListUserListDirectLicense` must match the call that provided the page token.
   * @return ListUserListGlobalLicenseCustomerInfosResponse
   * @throws \Google\Service\Exception
   */
  public function listAccountTypesAccountsUserListGlobalLicensesUserListGlobalLicenseCustomerInfos($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUserListGlobalLicenseCustomerInfosResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsUserListGlobalLicensesUserListGlobalLicenseCustomerInfos::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsUserListGlobalLicensesUserListGlobalLicenseCustomerInfos');
