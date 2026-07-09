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

class LfA2aV1OAuth2SecurityScheme extends \Google\Model
{
  /**
   * An optional description for the security scheme.
   *
   * @var string
   */
  public $description;
  protected $flowsType = LfA2aV1OAuthFlows::class;
  protected $flowsDataType = '';
  /**
   * URL to the OAuth2 authorization server metadata [RFC
   * 8414](https://datatracker.ietf.org/doc/html/rfc8414). TLS is required.
   *
   * @var string
   */
  public $oauth2MetadataUrl;

  /**
   * An optional description for the security scheme.
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
   * Required. An object containing configuration information for the supported
   * OAuth 2.0 flows.
   *
   * @param LfA2aV1OAuthFlows $flows
   */
  public function setFlows(LfA2aV1OAuthFlows $flows)
  {
    $this->flows = $flows;
  }
  /**
   * @return LfA2aV1OAuthFlows
   */
  public function getFlows()
  {
    return $this->flows;
  }
  /**
   * URL to the OAuth2 authorization server metadata [RFC
   * 8414](https://datatracker.ietf.org/doc/html/rfc8414). TLS is required.
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
class_alias(LfA2aV1OAuth2SecurityScheme::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1OAuth2SecurityScheme');
