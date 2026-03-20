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

namespace Google\Service\DeveloperConnect;

class CustomOAuthConfig extends \Google\Collection
{
  /**
   * The SCM is not specified or BYO Account Connector is not an SCM.
   */
  public const SCM_PROVIDER_SCM_PROVIDER_UNKNOWN = 'SCM_PROVIDER_UNKNOWN';
  /**
   * BYO Account Connector is an instance of GitHub Enterprise.
   */
  public const SCM_PROVIDER_GITHUB_ENTERPRISE = 'GITHUB_ENTERPRISE';
  /**
   * BYO Account Connector is an instance of GitLab Enterprise.
   */
  public const SCM_PROVIDER_GITLAB_ENTERPRISE = 'GITLAB_ENTERPRISE';
  /**
   * BYO Account Connector is an instance of Bitbucket Data Center.
   */
  public const SCM_PROVIDER_BITBUCKET_DATA_CENTER = 'BITBUCKET_DATA_CENTER';
  protected $collection_key = 'scopes';
  /**
   * Required. Immutable. The OAuth2 authorization server URL.
   *
   * @var string
   */
  public $authUri;
  /**
   * Required. The client ID of the OAuth application.
   *
   * @var string
   */
  public $clientId;
  /**
   * Required. Input only. The client secret of the OAuth application. It will
   * be provided as plain text, but encrypted and stored in developer connect.
   * As INPUT_ONLY field, it will not be included in the output.
   *
   * @var string
   */
  public $clientSecret;
  /**
   * Required. The host URI of the OAuth application.
   *
   * @var string
   */
  public $hostUri;
  /**
   * Optional. Disable PKCE for this OAuth config. PKCE is enabled by default.
   *
   * @var bool
   */
  public $pkceDisabled;
  /**
   * Required. The type of the SCM provider.
   *
   * @var string
   */
  public $scmProvider;
  /**
   * Required. The scopes to be requested during OAuth.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * Output only. SCM server version installed at the host URI.
   *
   * @var string
   */
  public $serverVersion;
  protected $serviceDirectoryConfigType = ServiceDirectoryConfig::class;
  protected $serviceDirectoryConfigDataType = '';
  /**
   * Optional. SSL certificate to use for requests to a private service.
   *
   * @var string
   */
  public $sslCaCertificate;
  /**
   * Required. Immutable. The OAuth2 token request URL.
   *
   * @var string
   */
  public $tokenUri;

  /**
   * Required. Immutable. The OAuth2 authorization server URL.
   *
   * @param string $authUri
   */
  public function setAuthUri($authUri)
  {
    $this->authUri = $authUri;
  }
  /**
   * @return string
   */
  public function getAuthUri()
  {
    return $this->authUri;
  }
  /**
   * Required. The client ID of the OAuth application.
   *
   * @param string $clientId
   */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /**
   * @return string
   */
  public function getClientId()
  {
    return $this->clientId;
  }
  /**
   * Required. Input only. The client secret of the OAuth application. It will
   * be provided as plain text, but encrypted and stored in developer connect.
   * As INPUT_ONLY field, it will not be included in the output.
   *
   * @param string $clientSecret
   */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /**
   * @return string
   */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
  /**
   * Required. The host URI of the OAuth application.
   *
   * @param string $hostUri
   */
  public function setHostUri($hostUri)
  {
    $this->hostUri = $hostUri;
  }
  /**
   * @return string
   */
  public function getHostUri()
  {
    return $this->hostUri;
  }
  /**
   * Optional. Disable PKCE for this OAuth config. PKCE is enabled by default.
   *
   * @param bool $pkceDisabled
   */
  public function setPkceDisabled($pkceDisabled)
  {
    $this->pkceDisabled = $pkceDisabled;
  }
  /**
   * @return bool
   */
  public function getPkceDisabled()
  {
    return $this->pkceDisabled;
  }
  /**
   * Required. The type of the SCM provider.
   *
   * Accepted values: SCM_PROVIDER_UNKNOWN, GITHUB_ENTERPRISE,
   * GITLAB_ENTERPRISE, BITBUCKET_DATA_CENTER
   *
   * @param self::SCM_PROVIDER_* $scmProvider
   */
  public function setScmProvider($scmProvider)
  {
    $this->scmProvider = $scmProvider;
  }
  /**
   * @return self::SCM_PROVIDER_*
   */
  public function getScmProvider()
  {
    return $this->scmProvider;
  }
  /**
   * Required. The scopes to be requested during OAuth.
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
   * Output only. SCM server version installed at the host URI.
   *
   * @param string $serverVersion
   */
  public function setServerVersion($serverVersion)
  {
    $this->serverVersion = $serverVersion;
  }
  /**
   * @return string
   */
  public function getServerVersion()
  {
    return $this->serverVersion;
  }
  /**
   * Optional. Configuration for using Service Directory to connect to a private
   * service.
   *
   * @param ServiceDirectoryConfig $serviceDirectoryConfig
   */
  public function setServiceDirectoryConfig(ServiceDirectoryConfig $serviceDirectoryConfig)
  {
    $this->serviceDirectoryConfig = $serviceDirectoryConfig;
  }
  /**
   * @return ServiceDirectoryConfig
   */
  public function getServiceDirectoryConfig()
  {
    return $this->serviceDirectoryConfig;
  }
  /**
   * Optional. SSL certificate to use for requests to a private service.
   *
   * @param string $sslCaCertificate
   */
  public function setSslCaCertificate($sslCaCertificate)
  {
    $this->sslCaCertificate = $sslCaCertificate;
  }
  /**
   * @return string
   */
  public function getSslCaCertificate()
  {
    return $this->sslCaCertificate;
  }
  /**
   * Required. Immutable. The OAuth2 token request URL.
   *
   * @param string $tokenUri
   */
  public function setTokenUri($tokenUri)
  {
    $this->tokenUri = $tokenUri;
  }
  /**
   * @return string
   */
  public function getTokenUri()
  {
    return $this->tokenUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomOAuthConfig::class, 'Google_Service_DeveloperConnect_CustomOAuthConfig');
