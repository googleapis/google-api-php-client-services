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

namespace Google\Service\BeyondCorp;

class GoogleCloudBeyondcorpSecuritygatewaysV1ProxyProtocolConfig extends \Google\Collection
{
  protected $collection_key = 'allowedClientHeaders';
  /**
   * @var string[]
   */
  public $allowedClientHeaders;
  /**
   * @var bool
   */
  public $clientIp;
  protected $contextualHeadersType = GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders::class;
  protected $contextualHeadersDataType = '';
  /**
   * @var string
   */
  public $gatewayIdentity;
  /**
   * @var string[]
   */
  public $metadataHeaders;

  /**
   * @param string[]
   */
  public function setAllowedClientHeaders($allowedClientHeaders)
  {
    $this->allowedClientHeaders = $allowedClientHeaders;
  }
  /**
   * @return string[]
   */
  public function getAllowedClientHeaders()
  {
    return $this->allowedClientHeaders;
  }
  /**
   * @param bool
   */
  public function setClientIp($clientIp)
  {
    $this->clientIp = $clientIp;
  }
  /**
   * @return bool
   */
  public function getClientIp()
  {
    return $this->clientIp;
  }
  /**
   * @param GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders
   */
  public function setContextualHeaders(GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders $contextualHeaders)
  {
    $this->contextualHeaders = $contextualHeaders;
  }
  /**
   * @return GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders
   */
  public function getContextualHeaders()
  {
    return $this->contextualHeaders;
  }
  /**
   * @param string
   */
  public function setGatewayIdentity($gatewayIdentity)
  {
    $this->gatewayIdentity = $gatewayIdentity;
  }
  /**
   * @return string
   */
  public function getGatewayIdentity()
  {
    return $this->gatewayIdentity;
  }
  /**
   * @param string[]
   */
  public function setMetadataHeaders($metadataHeaders)
  {
    $this->metadataHeaders = $metadataHeaders;
  }
  /**
   * @return string[]
   */
  public function getMetadataHeaders()
  {
    return $this->metadataHeaders;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudBeyondcorpSecuritygatewaysV1ProxyProtocolConfig::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpSecuritygatewaysV1ProxyProtocolConfig');
