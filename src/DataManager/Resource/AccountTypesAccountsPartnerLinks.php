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
use Google\Service\DataManager\PartnerLink;
use Google\Service\DataManager\SearchPartnerLinksResponse;

/**
 * The "partnerLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $partnerLinks = $datamanagerService->accountTypes_accounts_partnerLinks;
 *  </code>
 */
class AccountTypesAccountsPartnerLinks extends \Google\Service\Resource
{
  /**
   * Creates a partner link for the given account. Authorization Headers: This
   * method supports the following optional headers to define how the API
   * authorizes access for the request: * `login-account`: (Optional) The resource
   * name of the account where the Google Account of the credentials is a user. If
   * not set, defaults to the account of the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (partnerLinks.create)
   *
   * @param string $parent Required. The parent, which owns this collection of
   * partner links. Format: accountTypes/{account_type}/accounts/{account}
   * @param PartnerLink $postBody
   * @param array $optParams Optional parameters.
   * @return PartnerLink
   * @throws \Google\Service\Exception
   */
  public function create($parent, PartnerLink $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], PartnerLink::class);
  }
  /**
   * Deletes a partner link for the given account. Authorization Headers: This
   * method supports the following optional headers to define how the API
   * authorizes access for the request: * `login-account`: (Optional) The resource
   * name of the account where the Google Account of the credentials is a user. If
   * not set, defaults to the account of the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (partnerLinks.delete)
   *
   * @param string $name Required. The resource name of the partner link to
   * delete. Format:
   * accountTypes/{account_type}/accounts/{account}/partnerLinks/{partner_link}
   * @param array $optParams Optional parameters.
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
   * Searches for all partner links to and from a given account. Authorization
   * Headers: This method supports the following optional headers to define how
   * the API authorizes access for the request: * `login-account`: (Optional) The
   * resource name of the account where the Google Account of the credentials is a
   * user. If not set, defaults to the account of the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (partnerLinks.search)
   *
   * @param string $parent Required. Account to search for partner links. If no
   * `filter` is specified, all partner links where this account is either the
   * `owning_account` or `partner_account` are returned. Format:
   * `accountTypes/{account_type}/accounts/{account}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A [filter string](//google.aip.dev/160).
   * All fields need to be on the left hand side of each condition (for example:
   * `partner_link_id = 123456789`). Supported operations: - `AND` - `=` - `!=`
   * Supported fields: - `partner_link_id` - `owning_account.account_type` -
   * `owning_account.account_id` - `partner_account.account_type` -
   * `partner_account.account_id` Example: `owning_account.account_type =
   * "GOOGLE_ADS" OR partner_account.account_id = 987654321`
   * @opt_param int pageSize The maximum number of partner links to return. The
   * service may return fewer than this value. If unspecified, at most 10 partner
   * links will be returned. The maximum value is 100; values above 100 will be
   * coerced to 100.
   * @opt_param string pageToken A page token, received from a previous
   * `SearchPartnerLinks` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `SearchPartnerLinks` must match
   * the call that provided the page token.
   * @return SearchPartnerLinksResponse
   * @throws \Google\Service\Exception
   */
  public function search($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], SearchPartnerLinksResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsPartnerLinks::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsPartnerLinks');
