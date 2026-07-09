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

namespace Google\Service\CustomerEngagementSuite;

class LfA2aV1OAuthFlows extends \Google\Model
{
  protected $authorizationCodeType = LfA2aV1AuthorizationCodeOAuthFlow::class;
  protected $authorizationCodeDataType = '';
  protected $clientCredentialsType = LfA2aV1ClientCredentialsOAuthFlow::class;
  protected $clientCredentialsDataType = '';
  protected $deviceCodeType = LfA2aV1DeviceCodeOAuthFlow::class;
  protected $deviceCodeDataType = '';
  protected $implicitType = LfA2aV1ImplicitOAuthFlow::class;
  protected $implicitDataType = '';
  protected $passwordType = LfA2aV1PasswordOAuthFlow::class;
  protected $passwordDataType = '';

  /**
   * Configuration for the OAuth Authorization Code flow.
   *
   * @param LfA2aV1AuthorizationCodeOAuthFlow $authorizationCode
   */
  public function setAuthorizationCode(LfA2aV1AuthorizationCodeOAuthFlow $authorizationCode)
  {
    $this->authorizationCode = $authorizationCode;
  }
  /**
   * @return LfA2aV1AuthorizationCodeOAuthFlow
   */
  public function getAuthorizationCode()
  {
    return $this->authorizationCode;
  }
  /**
   * Configuration for the OAuth Client Credentials flow.
   *
   * @param LfA2aV1ClientCredentialsOAuthFlow $clientCredentials
   */
  public function setClientCredentials(LfA2aV1ClientCredentialsOAuthFlow $clientCredentials)
  {
    $this->clientCredentials = $clientCredentials;
  }
  /**
   * @return LfA2aV1ClientCredentialsOAuthFlow
   */
  public function getClientCredentials()
  {
    return $this->clientCredentials;
  }
  /**
   * Configuration for the OAuth Device Code flow.
   *
   * @param LfA2aV1DeviceCodeOAuthFlow $deviceCode
   */
  public function setDeviceCode(LfA2aV1DeviceCodeOAuthFlow $deviceCode)
  {
    $this->deviceCode = $deviceCode;
  }
  /**
   * @return LfA2aV1DeviceCodeOAuthFlow
   */
  public function getDeviceCode()
  {
    return $this->deviceCode;
  }
  /**
   * Deprecated: Use Authorization Code + PKCE instead.
   *
   * @deprecated
   * @param LfA2aV1ImplicitOAuthFlow $implicit
   */
  public function setImplicit(LfA2aV1ImplicitOAuthFlow $implicit)
  {
    $this->implicit = $implicit;
  }
  /**
   * @deprecated
   * @return LfA2aV1ImplicitOAuthFlow
   */
  public function getImplicit()
  {
    return $this->implicit;
  }
  /**
   * Deprecated: Use Authorization Code + PKCE or Device Code.
   *
   * @deprecated
   * @param LfA2aV1PasswordOAuthFlow $password
   */
  public function setPassword(LfA2aV1PasswordOAuthFlow $password)
  {
    $this->password = $password;
  }
  /**
   * @deprecated
   * @return LfA2aV1PasswordOAuthFlow
   */
  public function getPassword()
  {
    return $this->password;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1OAuthFlows::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1OAuthFlows');
