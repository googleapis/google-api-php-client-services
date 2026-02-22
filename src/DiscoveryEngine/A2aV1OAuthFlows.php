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

namespace Google\Service\DiscoveryEngine;

class A2aV1OAuthFlows extends \Google\Model
{
  protected $authorizationCodeType = A2aV1AuthorizationCodeOAuthFlow::class;
  protected $authorizationCodeDataType = '';
  protected $clientCredentialsType = A2aV1ClientCredentialsOAuthFlow::class;
  protected $clientCredentialsDataType = '';
  protected $implicitType = A2aV1ImplicitOAuthFlow::class;
  protected $implicitDataType = '';
  protected $passwordType = A2aV1PasswordOAuthFlow::class;
  protected $passwordDataType = '';

  /**
   * @param A2aV1AuthorizationCodeOAuthFlow $authorizationCode
   */
  public function setAuthorizationCode(A2aV1AuthorizationCodeOAuthFlow $authorizationCode)
  {
    $this->authorizationCode = $authorizationCode;
  }
  /**
   * @return A2aV1AuthorizationCodeOAuthFlow
   */
  public function getAuthorizationCode()
  {
    return $this->authorizationCode;
  }
  /**
   * @param A2aV1ClientCredentialsOAuthFlow $clientCredentials
   */
  public function setClientCredentials(A2aV1ClientCredentialsOAuthFlow $clientCredentials)
  {
    $this->clientCredentials = $clientCredentials;
  }
  /**
   * @return A2aV1ClientCredentialsOAuthFlow
   */
  public function getClientCredentials()
  {
    return $this->clientCredentials;
  }
  /**
   * @param A2aV1ImplicitOAuthFlow $implicit
   */
  public function setImplicit(A2aV1ImplicitOAuthFlow $implicit)
  {
    $this->implicit = $implicit;
  }
  /**
   * @return A2aV1ImplicitOAuthFlow
   */
  public function getImplicit()
  {
    return $this->implicit;
  }
  /**
   * @param A2aV1PasswordOAuthFlow $password
   */
  public function setPassword(A2aV1PasswordOAuthFlow $password)
  {
    $this->password = $password;
  }
  /**
   * @return A2aV1PasswordOAuthFlow
   */
  public function getPassword()
  {
    return $this->password;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(A2aV1OAuthFlows::class, 'Google_Service_DiscoveryEngine_A2aV1OAuthFlows');
