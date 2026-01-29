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

class GenericHTTPEndpointConfig extends \Google\Model
{
  protected $basicAuthenticationType = BasicAuthentication::class;
  protected $basicAuthenticationDataType = '';
  protected $bearerTokenAuthenticationType = BearerTokenAuthentication::class;
  protected $bearerTokenAuthenticationDataType = '';
  /**
   * Required. Immutable. The service provider's https endpoint.
   *
   * @var string
   */
  public $hostUri;
  protected $serviceDirectoryConfigType = ServiceDirectoryConfig::class;
  protected $serviceDirectoryConfigDataType = '';
  /**
   * Optional. The SSL certificate to use for requests to the HTTP service
   * provider.
   *
   * @var string
   */
  public $sslCaCertificate;

  /**
   * Optional. Basic authentication with username and password.
   *
   * @param BasicAuthentication $basicAuthentication
   */
  public function setBasicAuthentication(BasicAuthentication $basicAuthentication)
  {
    $this->basicAuthentication = $basicAuthentication;
  }
  /**
   * @return BasicAuthentication
   */
  public function getBasicAuthentication()
  {
    return $this->basicAuthentication;
  }
  /**
   * Optional. Bearer token authentication with a token.
   *
   * @param BearerTokenAuthentication $bearerTokenAuthentication
   */
  public function setBearerTokenAuthentication(BearerTokenAuthentication $bearerTokenAuthentication)
  {
    $this->bearerTokenAuthentication = $bearerTokenAuthentication;
  }
  /**
   * @return BearerTokenAuthentication
   */
  public function getBearerTokenAuthentication()
  {
    return $this->bearerTokenAuthentication;
  }
  /**
   * Required. Immutable. The service provider's https endpoint.
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
   * Optional. Configuration for using Service Directory to privately connect to
   * a HTTP service provider. This should only be set if the Http service
   * provider is hosted on-premises and not reachable by public internet. If
   * this field is left empty, calls to the HTTP service provider will be made
   * over the public internet.
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
   * Optional. The SSL certificate to use for requests to the HTTP service
   * provider.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenericHTTPEndpointConfig::class, 'Google_Service_DeveloperConnect_GenericHTTPEndpointConfig');
