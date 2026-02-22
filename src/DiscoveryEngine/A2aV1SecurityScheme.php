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

class A2aV1SecurityScheme extends \Google\Model
{
  protected $apiKeySecuritySchemeType = A2aV1APIKeySecurityScheme::class;
  protected $apiKeySecuritySchemeDataType = '';
  protected $httpAuthSecuritySchemeType = A2aV1HTTPAuthSecurityScheme::class;
  protected $httpAuthSecuritySchemeDataType = '';
  protected $mtlsSecuritySchemeType = A2aV1MutualTlsSecurityScheme::class;
  protected $mtlsSecuritySchemeDataType = '';
  protected $oauth2SecuritySchemeType = A2aV1OAuth2SecurityScheme::class;
  protected $oauth2SecuritySchemeDataType = '';
  protected $openIdConnectSecuritySchemeType = A2aV1OpenIdConnectSecurityScheme::class;
  protected $openIdConnectSecuritySchemeDataType = '';

  /**
   * @param A2aV1APIKeySecurityScheme $apiKeySecurityScheme
   */
  public function setApiKeySecurityScheme(A2aV1APIKeySecurityScheme $apiKeySecurityScheme)
  {
    $this->apiKeySecurityScheme = $apiKeySecurityScheme;
  }
  /**
   * @return A2aV1APIKeySecurityScheme
   */
  public function getApiKeySecurityScheme()
  {
    return $this->apiKeySecurityScheme;
  }
  /**
   * @param A2aV1HTTPAuthSecurityScheme $httpAuthSecurityScheme
   */
  public function setHttpAuthSecurityScheme(A2aV1HTTPAuthSecurityScheme $httpAuthSecurityScheme)
  {
    $this->httpAuthSecurityScheme = $httpAuthSecurityScheme;
  }
  /**
   * @return A2aV1HTTPAuthSecurityScheme
   */
  public function getHttpAuthSecurityScheme()
  {
    return $this->httpAuthSecurityScheme;
  }
  /**
   * @param A2aV1MutualTlsSecurityScheme $mtlsSecurityScheme
   */
  public function setMtlsSecurityScheme(A2aV1MutualTlsSecurityScheme $mtlsSecurityScheme)
  {
    $this->mtlsSecurityScheme = $mtlsSecurityScheme;
  }
  /**
   * @return A2aV1MutualTlsSecurityScheme
   */
  public function getMtlsSecurityScheme()
  {
    return $this->mtlsSecurityScheme;
  }
  /**
   * @param A2aV1OAuth2SecurityScheme $oauth2SecurityScheme
   */
  public function setOauth2SecurityScheme(A2aV1OAuth2SecurityScheme $oauth2SecurityScheme)
  {
    $this->oauth2SecurityScheme = $oauth2SecurityScheme;
  }
  /**
   * @return A2aV1OAuth2SecurityScheme
   */
  public function getOauth2SecurityScheme()
  {
    return $this->oauth2SecurityScheme;
  }
  /**
   * @param A2aV1OpenIdConnectSecurityScheme $openIdConnectSecurityScheme
   */
  public function setOpenIdConnectSecurityScheme(A2aV1OpenIdConnectSecurityScheme $openIdConnectSecurityScheme)
  {
    $this->openIdConnectSecurityScheme = $openIdConnectSecurityScheme;
  }
  /**
   * @return A2aV1OpenIdConnectSecurityScheme
   */
  public function getOpenIdConnectSecurityScheme()
  {
    return $this->openIdConnectSecurityScheme;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(A2aV1SecurityScheme::class, 'Google_Service_DiscoveryEngine_A2aV1SecurityScheme');
