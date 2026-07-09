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

class LfA2aV1SecurityScheme extends \Google\Model
{
  protected $apiKeySecuritySchemeType = LfA2aV1APIKeySecurityScheme::class;
  protected $apiKeySecuritySchemeDataType = '';
  protected $httpAuthSecuritySchemeType = LfA2aV1HTTPAuthSecurityScheme::class;
  protected $httpAuthSecuritySchemeDataType = '';
  protected $mtlsSecuritySchemeType = LfA2aV1MutualTlsSecurityScheme::class;
  protected $mtlsSecuritySchemeDataType = '';
  protected $oauth2SecuritySchemeType = LfA2aV1OAuth2SecurityScheme::class;
  protected $oauth2SecuritySchemeDataType = '';
  protected $openIdConnectSecuritySchemeType = LfA2aV1OpenIdConnectSecurityScheme::class;
  protected $openIdConnectSecuritySchemeDataType = '';

  /**
   * API key-based authentication.
   *
   * @param LfA2aV1APIKeySecurityScheme $apiKeySecurityScheme
   */
  public function setApiKeySecurityScheme(LfA2aV1APIKeySecurityScheme $apiKeySecurityScheme)
  {
    $this->apiKeySecurityScheme = $apiKeySecurityScheme;
  }
  /**
   * @return LfA2aV1APIKeySecurityScheme
   */
  public function getApiKeySecurityScheme()
  {
    return $this->apiKeySecurityScheme;
  }
  /**
   * HTTP authentication (Basic, Bearer, etc.).
   *
   * @param LfA2aV1HTTPAuthSecurityScheme $httpAuthSecurityScheme
   */
  public function setHttpAuthSecurityScheme(LfA2aV1HTTPAuthSecurityScheme $httpAuthSecurityScheme)
  {
    $this->httpAuthSecurityScheme = $httpAuthSecurityScheme;
  }
  /**
   * @return LfA2aV1HTTPAuthSecurityScheme
   */
  public function getHttpAuthSecurityScheme()
  {
    return $this->httpAuthSecurityScheme;
  }
  /**
   * Mutual TLS authentication.
   *
   * @param LfA2aV1MutualTlsSecurityScheme $mtlsSecurityScheme
   */
  public function setMtlsSecurityScheme(LfA2aV1MutualTlsSecurityScheme $mtlsSecurityScheme)
  {
    $this->mtlsSecurityScheme = $mtlsSecurityScheme;
  }
  /**
   * @return LfA2aV1MutualTlsSecurityScheme
   */
  public function getMtlsSecurityScheme()
  {
    return $this->mtlsSecurityScheme;
  }
  /**
   * OAuth 2.0 authentication.
   *
   * @param LfA2aV1OAuth2SecurityScheme $oauth2SecurityScheme
   */
  public function setOauth2SecurityScheme(LfA2aV1OAuth2SecurityScheme $oauth2SecurityScheme)
  {
    $this->oauth2SecurityScheme = $oauth2SecurityScheme;
  }
  /**
   * @return LfA2aV1OAuth2SecurityScheme
   */
  public function getOauth2SecurityScheme()
  {
    return $this->oauth2SecurityScheme;
  }
  /**
   * OpenID Connect authentication.
   *
   * @param LfA2aV1OpenIdConnectSecurityScheme $openIdConnectSecurityScheme
   */
  public function setOpenIdConnectSecurityScheme(LfA2aV1OpenIdConnectSecurityScheme $openIdConnectSecurityScheme)
  {
    $this->openIdConnectSecurityScheme = $openIdConnectSecurityScheme;
  }
  /**
   * @return LfA2aV1OpenIdConnectSecurityScheme
   */
  public function getOpenIdConnectSecurityScheme()
  {
    return $this->openIdConnectSecurityScheme;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1SecurityScheme::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1SecurityScheme');
