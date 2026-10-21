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

namespace Google\Service\ChromeManagement\Resource;

use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1EnrollmentToken;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1ListEnrollmentTokensResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1RevokeEnrollmentTokenRequest;

/**
 * The "enrollmentTokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromemanagementService = new Google\Service\ChromeManagement(...);
 *   $enrollmentTokens = $chromemanagementService->customers_enrollmentTokens;
 *  </code>
 */
class CustomersEnrollmentTokens extends \Google\Service\Resource
{
  /**
   * Creates a new enrollment token for a browser device. Creation fails if there
   * is already an active token for this customer under the same org unit.
   * (enrollmentTokens.create)
   *
   * @param string $parent Required. The parent resource where this enrollment
   * token will be created. Format: customers/{customer}
   * @param GoogleChromeManagementVersionsV1EnrollmentToken $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string enrollmentTokenId Optional. The ID to use for the
   * enrollment token, which will become the final component of the enrollment
   * token's resource name. This value must be local-unique under the customer and
   * is optional. If not provided, it will be auto-generated. If provided, it must
   * be 1-63 characters long and match the regular expression `[a-zA-Z0-9._-]+`.
   * @return GoogleChromeManagementVersionsV1EnrollmentToken
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleChromeManagementVersionsV1EnrollmentToken $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleChromeManagementVersionsV1EnrollmentToken::class);
  }
  /**
   * Gets a browser device enrollment token. (enrollmentTokens.get)
   *
   * @param string $name Required. The name of the enrollment token to retrieve.
   * Format: customers/{customer}/enrollmentTokens/{token_permanent_id}
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1EnrollmentToken
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleChromeManagementVersionsV1EnrollmentToken::class);
  }
  /**
   * Lists all browser device enrollment tokens.
   * (enrollmentTokens.listCustomersEnrollmentTokens)
   *
   * @param string $parent Required. The parent resource where this enrollment
   * token will be created. Format: customers/{customer}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to apply to list results. The
   * following fields can be used in the filter: * `device_type` (currently only
   * `"CHROME_BROWSER"` is supported) * `token_state` (supported values:
   * `"ACTIVE"`, `"EXPIRED"`, `"REVOKED"`) * `org_unit_path` The full path of the
   * org unit, such as `/Montreal/Sales`. * `org_unit_id` The obfuscated id of the
   * org unit, not the full path.
   * @opt_param int pageSize Optional. Maximum number of results to return.
   * Maximum and default are 100.
   * @opt_param string pageToken Optional. Token to specify next page in the list.
   * @return GoogleChromeManagementVersionsV1ListEnrollmentTokensResponse
   * @throws \Google\Service\Exception
   */
  public function listCustomersEnrollmentTokens($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleChromeManagementVersionsV1ListEnrollmentTokensResponse::class);
  }
  /**
   * Revokes a browser device enrollment token. (enrollmentTokens.revoke)
   *
   * @param string $name Required. The name of the enrollment token to revoke.
   * Format: customers/{customer}/enrollmentTokens/{token_permanent_id}
   * @param GoogleChromeManagementVersionsV1RevokeEnrollmentTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1EnrollmentToken
   * @throws \Google\Service\Exception
   */
  public function revoke($name, GoogleChromeManagementVersionsV1RevokeEnrollmentTokenRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('revoke', [$params], GoogleChromeManagementVersionsV1EnrollmentToken::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersEnrollmentTokens::class, 'Google_Service_ChromeManagement_Resource_CustomersEnrollmentTokens');
