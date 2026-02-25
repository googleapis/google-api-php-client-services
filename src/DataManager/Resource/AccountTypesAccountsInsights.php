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

use Google\Service\DataManager\RetrieveInsightsRequest;
use Google\Service\DataManager\RetrieveInsightsResponse;

/**
 * The "insights" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $insights = $datamanagerService->accountTypes_accounts_insights;
 *  </code>
 */
class AccountTypesAccountsInsights extends \Google\Service\Resource
{
  /**
   * Retrieves marketing data insights for a given user list. This feature is only
   * available to data partners. Authorization Headers: This method supports the
   * following optional headers to define how the API authorizes access for the
   * request: * `login-account`: (Optional) The resource name of the account where
   * the Google Account of the credentials is a user. If not set, defaults to the
   * account of the request. Format:
   * `accountTypes/{loginAccountType}/accounts/{loginAccountId}` * `linked-
   * account`: (Optional) The resource name of the account with an established
   * product link to the `login-account`. Format:
   * `accountTypes/{linkedAccountType}/accounts/{linkedAccountId}`
   * (insights.retrieve)
   *
   * @param string $parent Required. The parent account that owns the user list.
   * Format: `accountTypes/{account_type}/accounts/{account}`
   * @param RetrieveInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RetrieveInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function retrieve($parent, RetrieveInsightsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('retrieve', [$params], RetrieveInsightsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsInsights::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsInsights');
