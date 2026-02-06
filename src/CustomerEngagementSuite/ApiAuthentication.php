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

class ApiAuthentication extends \Google\Model
{
  protected $apiKeyConfigType = ApiKeyConfig::class;
  protected $apiKeyConfigDataType = '';
  protected $bearerTokenConfigType = BearerTokenConfig::class;
  protected $bearerTokenConfigDataType = '';
  protected $oauthConfigType = OAuthConfig::class;
  protected $oauthConfigDataType = '';
  protected $serviceAccountAuthConfigType = ServiceAccountAuthConfig::class;
  protected $serviceAccountAuthConfigDataType = '';
  protected $serviceAgentIdTokenAuthConfigType = ServiceAgentIdTokenAuthConfig::class;
  protected $serviceAgentIdTokenAuthConfigDataType = '';

  /**
   * Optional. Config for API key auth.
   *
   * @param ApiKeyConfig $apiKeyConfig
   */
  public function setApiKeyConfig(ApiKeyConfig $apiKeyConfig)
  {
    $this->apiKeyConfig = $apiKeyConfig;
  }
  /**
   * @return ApiKeyConfig
   */
  public function getApiKeyConfig()
  {
    return $this->apiKeyConfig;
  }
  /**
   * Optional. Config for bearer token auth.
   *
   * @param BearerTokenConfig $bearerTokenConfig
   */
  public function setBearerTokenConfig(BearerTokenConfig $bearerTokenConfig)
  {
    $this->bearerTokenConfig = $bearerTokenConfig;
  }
  /**
   * @return BearerTokenConfig
   */
  public function getBearerTokenConfig()
  {
    return $this->bearerTokenConfig;
  }
  /**
   * Optional. Config for OAuth.
   *
   * @param OAuthConfig $oauthConfig
   */
  public function setOauthConfig(OAuthConfig $oauthConfig)
  {
    $this->oauthConfig = $oauthConfig;
  }
  /**
   * @return OAuthConfig
   */
  public function getOauthConfig()
  {
    return $this->oauthConfig;
  }
  /**
   * Optional. Config for service account authentication.
   *
   * @param ServiceAccountAuthConfig $serviceAccountAuthConfig
   */
  public function setServiceAccountAuthConfig(ServiceAccountAuthConfig $serviceAccountAuthConfig)
  {
    $this->serviceAccountAuthConfig = $serviceAccountAuthConfig;
  }
  /**
   * @return ServiceAccountAuthConfig
   */
  public function getServiceAccountAuthConfig()
  {
    return $this->serviceAccountAuthConfig;
  }
  /**
   * Optional. Config for ID token auth generated from CES service agent.
   *
   * @param ServiceAgentIdTokenAuthConfig $serviceAgentIdTokenAuthConfig
   */
  public function setServiceAgentIdTokenAuthConfig(ServiceAgentIdTokenAuthConfig $serviceAgentIdTokenAuthConfig)
  {
    $this->serviceAgentIdTokenAuthConfig = $serviceAgentIdTokenAuthConfig;
  }
  /**
   * @return ServiceAgentIdTokenAuthConfig
   */
  public function getServiceAgentIdTokenAuthConfig()
  {
    return $this->serviceAgentIdTokenAuthConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiAuthentication::class, 'Google_Service_CustomerEngagementSuite_ApiAuthentication');
