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

namespace Google\Service\Connectors;

class OAuth2Config extends \Google\Model
{
  /**
   * Authorization Server URL/Token Endpoint for Authorization Code Flow
   *
   * @var string
   */
  public $authUri;
  /**
   * Client ID for the OAuth2 flow.
   *
   * @var string
   */
  public $clientId;
  /**
   * Client secret for the OAuth2 flow.
   *
   * @var string
   */
  public $clientSecret;

  /**
   * Authorization Server URL/Token Endpoint for Authorization Code Flow
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
   * Client ID for the OAuth2 flow.
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
   * Client secret for the OAuth2 flow.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OAuth2Config::class, 'Google_Service_Connectors_OAuth2Config');
