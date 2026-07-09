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

class LfA2aV1AuthorizationCodeOAuthFlow extends \Google\Model
{
  /**
   * Required. The authorization URL to be used for this flow.
   *
   * @var string
   */
  public $authorizationUrl;
  /**
   * Indicates if PKCE (RFC 7636) is required for this flow. PKCE should always
   * be used for public clients and is recommended for all clients.
   *
   * @var bool
   */
  public $pkceRequired;
  /**
   * The URL to be used for obtaining refresh tokens.
   *
   * @var string
   */
  public $refreshUrl;
  /**
   * Required. The available scopes for the OAuth2 security scheme.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * Required. The token URL to be used for this flow.
   *
   * @var string
   */
  public $tokenUrl;

  /**
   * Required. The authorization URL to be used for this flow.
   *
   * @param string $authorizationUrl
   */
  public function setAuthorizationUrl($authorizationUrl)
  {
    $this->authorizationUrl = $authorizationUrl;
  }
  /**
   * @return string
   */
  public function getAuthorizationUrl()
  {
    return $this->authorizationUrl;
  }
  /**
   * Indicates if PKCE (RFC 7636) is required for this flow. PKCE should always
   * be used for public clients and is recommended for all clients.
   *
   * @param bool $pkceRequired
   */
  public function setPkceRequired($pkceRequired)
  {
    $this->pkceRequired = $pkceRequired;
  }
  /**
   * @return bool
   */
  public function getPkceRequired()
  {
    return $this->pkceRequired;
  }
  /**
   * The URL to be used for obtaining refresh tokens.
   *
   * @param string $refreshUrl
   */
  public function setRefreshUrl($refreshUrl)
  {
    $this->refreshUrl = $refreshUrl;
  }
  /**
   * @return string
   */
  public function getRefreshUrl()
  {
    return $this->refreshUrl;
  }
  /**
   * Required. The available scopes for the OAuth2 security scheme.
   *
   * @param string[] $scopes
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
  }
  /**
   * Required. The token URL to be used for this flow.
   *
   * @param string $tokenUrl
   */
  public function setTokenUrl($tokenUrl)
  {
    $this->tokenUrl = $tokenUrl;
  }
  /**
   * @return string
   */
  public function getTokenUrl()
  {
    return $this->tokenUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1AuthorizationCodeOAuthFlow::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AuthorizationCodeOAuthFlow');
