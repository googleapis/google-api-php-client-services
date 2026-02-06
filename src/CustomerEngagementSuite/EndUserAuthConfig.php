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

class EndUserAuthConfig extends \Google\Model
{
  protected $oauth2AuthCodeConfigType = EndUserAuthConfigOauth2AuthCodeConfig::class;
  protected $oauth2AuthCodeConfigDataType = '';
  protected $oauth2JwtBearerConfigType = EndUserAuthConfigOauth2JwtBearerConfig::class;
  protected $oauth2JwtBearerConfigDataType = '';

  /**
   * Oauth 2.0 Authorization Code authentication.
   *
   * @param EndUserAuthConfigOauth2AuthCodeConfig $oauth2AuthCodeConfig
   */
  public function setOauth2AuthCodeConfig(EndUserAuthConfigOauth2AuthCodeConfig $oauth2AuthCodeConfig)
  {
    $this->oauth2AuthCodeConfig = $oauth2AuthCodeConfig;
  }
  /**
   * @return EndUserAuthConfigOauth2AuthCodeConfig
   */
  public function getOauth2AuthCodeConfig()
  {
    return $this->oauth2AuthCodeConfig;
  }
  /**
   * JWT Profile Oauth 2.0 Authorization Grant authentication.
   *
   * @param EndUserAuthConfigOauth2JwtBearerConfig $oauth2JwtBearerConfig
   */
  public function setOauth2JwtBearerConfig(EndUserAuthConfigOauth2JwtBearerConfig $oauth2JwtBearerConfig)
  {
    $this->oauth2JwtBearerConfig = $oauth2JwtBearerConfig;
  }
  /**
   * @return EndUserAuthConfigOauth2JwtBearerConfig
   */
  public function getOauth2JwtBearerConfig()
  {
    return $this->oauth2JwtBearerConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EndUserAuthConfig::class, 'Google_Service_CustomerEngagementSuite_EndUserAuthConfig');
