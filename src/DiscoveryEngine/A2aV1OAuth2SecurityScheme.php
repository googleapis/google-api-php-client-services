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

class A2aV1OAuth2SecurityScheme extends \Google\Model
{
  /**
   * Description of this security scheme.
   *
   * @var string
   */
  public $description;
  protected $flowsType = A2aV1OAuthFlows::class;
  protected $flowsDataType = '';
  /**
   * URL to the oauth2 authorization server metadata
   * [RFC8414](https://datatracker.ietf.org/doc/html/rfc8414). TLS is required.
   *
   * @var string
   */
  public $oauth2MetadataUrl;

  /**
   * Description of this security scheme.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * An object containing configuration information for the flow types supported
   *
   * @param A2aV1OAuthFlows $flows
   */
  public function setFlows(A2aV1OAuthFlows $flows)
  {
    $this->flows = $flows;
  }
  /**
   * @return A2aV1OAuthFlows
   */
  public function getFlows()
  {
    return $this->flows;
  }
  /**
   * URL to the oauth2 authorization server metadata
   * [RFC8414](https://datatracker.ietf.org/doc/html/rfc8414). TLS is required.
   *
   * @param string $oauth2MetadataUrl
   */
  public function setOauth2MetadataUrl($oauth2MetadataUrl)
  {
    $this->oauth2MetadataUrl = $oauth2MetadataUrl;
  }
  /**
   * @return string
   */
  public function getOauth2MetadataUrl()
  {
    return $this->oauth2MetadataUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(A2aV1OAuth2SecurityScheme::class, 'Google_Service_DiscoveryEngine_A2aV1OAuth2SecurityScheme');
