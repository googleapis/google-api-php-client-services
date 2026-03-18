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

namespace Google\Service\AlertCenter;

class IdentityProviderError extends \Google\Model
{
  /**
   * Error info not specified.
   */
  public const ERROR_INFO_IDENTITY_PROVIDER_ERROR_INFO_UNSPECIFIED = 'IDENTITY_PROVIDER_ERROR_INFO_UNSPECIFIED';
  /**
   * Email in the ID token is different from the user's email.
   */
  public const ERROR_INFO_EMAIL_MISMATCH = 'EMAIL_MISMATCH';
  /**
   * Discovery URL was unreachable.
   */
  public const ERROR_INFO_UNAVAILABLE_DISCOVERY_CONTENT = 'UNAVAILABLE_DISCOVERY_CONTENT';
  /**
   * Discovery URL did not contain all the necessary information.
   */
  public const ERROR_INFO_INVALID_DISCOVERY_CONTENT = 'INVALID_DISCOVERY_CONTENT';
  /**
   * URL for client-side encryption configuration content was unreachable.
   */
  public const ERROR_INFO_UNAVAILABLE_CSE_CONFIGURATION_CONTENT = 'UNAVAILABLE_CSE_CONFIGURATION_CONTENT';
  /**
   * Client-side encryption .well-known URL did not contain all the necessary
   * information.
   */
  public const ERROR_INFO_INVALID_CSE_CONFIGURATION_CONTENT = 'INVALID_CSE_CONFIGURATION_CONTENT';
  /**
   * ID token returned by the identity provider is invalid.
   */
  public const ERROR_INFO_INVALID_ID_TOKEN = 'INVALID_ID_TOKEN';
  /**
   * OIDC setup error.
   */
  public const ERROR_INFO_INVALID_OIDC_SETUP = 'INVALID_OIDC_SETUP';
  /**
   * Identity provider was unreachable.
   */
  public const ERROR_INFO_UNAVAILABLE_IDP = 'UNAVAILABLE_IDP';
  /**
   * Auth code exchange error.
   */
  public const ERROR_INFO_AUTH_CODE_EXCHANGE_ERROR = 'AUTH_CODE_EXCHANGE_ERROR';
  /**
   * Authentication token has no "email" or "google_email" claim.
   */
  public const ERROR_INFO_AUTHENTICATION_TOKEN_MISSING_CLAIM_EMAIL = 'AUTHENTICATION_TOKEN_MISSING_CLAIM_EMAIL';
  /**
   * Authorization base url of the identity provider.
   *
   * @var string
   */
  public $authorizationBaseUrl;
  /**
   * Number of similar errors encountered.
   *
   * @var string
   */
  public $errorCount;
  /**
   * Info on the identity provider error.
   *
   * @var string
   */
  public $errorInfo;

  /**
   * Authorization base url of the identity provider.
   *
   * @param string $authorizationBaseUrl
   */
  public function setAuthorizationBaseUrl($authorizationBaseUrl)
  {
    $this->authorizationBaseUrl = $authorizationBaseUrl;
  }
  /**
   * @return string
   */
  public function getAuthorizationBaseUrl()
  {
    return $this->authorizationBaseUrl;
  }
  /**
   * Number of similar errors encountered.
   *
   * @param string $errorCount
   */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /**
   * @return string
   */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /**
   * Info on the identity provider error.
   *
   * Accepted values: IDENTITY_PROVIDER_ERROR_INFO_UNSPECIFIED, EMAIL_MISMATCH,
   * UNAVAILABLE_DISCOVERY_CONTENT, INVALID_DISCOVERY_CONTENT,
   * UNAVAILABLE_CSE_CONFIGURATION_CONTENT, INVALID_CSE_CONFIGURATION_CONTENT,
   * INVALID_ID_TOKEN, INVALID_OIDC_SETUP, UNAVAILABLE_IDP,
   * AUTH_CODE_EXCHANGE_ERROR, AUTHENTICATION_TOKEN_MISSING_CLAIM_EMAIL
   *
   * @param self::ERROR_INFO_* $errorInfo
   */
  public function setErrorInfo($errorInfo)
  {
    $this->errorInfo = $errorInfo;
  }
  /**
   * @return self::ERROR_INFO_*
   */
  public function getErrorInfo()
  {
    return $this->errorInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdentityProviderError::class, 'Google_Service_AlertCenter_IdentityProviderError');
