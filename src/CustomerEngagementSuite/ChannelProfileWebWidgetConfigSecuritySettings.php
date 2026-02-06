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

class ChannelProfileWebWidgetConfigSecuritySettings extends \Google\Collection
{
  protected $collection_key = 'allowedOrigins';
  /**
   * Optional. The origins that are allowed to host the web widget. An origin is
   * defined by RFC 6454. If empty, all origins are allowed. A maximum of 100
   * origins is allowed. Example: "https://example.com"
   *
   * @var string[]
   */
  public $allowedOrigins;
  /**
   * Optional. Indicates whether origin check for the web widget is enabled. If
   * `true`, the web widget will check the origin of the website that loads the
   * web widget and only allow it to be loaded in the same origin or any of the
   * allowed origins.
   *
   * @var bool
   */
  public $enableOriginCheck;
  /**
   * Optional. Indicates whether public access to the web widget is enabled. If
   * `true`, the web widget will be publicly accessible. If `false`, the web
   * widget must be integrated with your own authentication and authorization
   * system to return valid credentials for accessing the CES agent.
   *
   * @var bool
   */
  public $enablePublicAccess;
  /**
   * Optional. Indicates whether reCAPTCHA verification for the web widget is
   * enabled.
   *
   * @var bool
   */
  public $enableRecaptcha;

  /**
   * Optional. The origins that are allowed to host the web widget. An origin is
   * defined by RFC 6454. If empty, all origins are allowed. A maximum of 100
   * origins is allowed. Example: "https://example.com"
   *
   * @param string[] $allowedOrigins
   */
  public function setAllowedOrigins($allowedOrigins)
  {
    $this->allowedOrigins = $allowedOrigins;
  }
  /**
   * @return string[]
   */
  public function getAllowedOrigins()
  {
    return $this->allowedOrigins;
  }
  /**
   * Optional. Indicates whether origin check for the web widget is enabled. If
   * `true`, the web widget will check the origin of the website that loads the
   * web widget and only allow it to be loaded in the same origin or any of the
   * allowed origins.
   *
   * @param bool $enableOriginCheck
   */
  public function setEnableOriginCheck($enableOriginCheck)
  {
    $this->enableOriginCheck = $enableOriginCheck;
  }
  /**
   * @return bool
   */
  public function getEnableOriginCheck()
  {
    return $this->enableOriginCheck;
  }
  /**
   * Optional. Indicates whether public access to the web widget is enabled. If
   * `true`, the web widget will be publicly accessible. If `false`, the web
   * widget must be integrated with your own authentication and authorization
   * system to return valid credentials for accessing the CES agent.
   *
   * @param bool $enablePublicAccess
   */
  public function setEnablePublicAccess($enablePublicAccess)
  {
    $this->enablePublicAccess = $enablePublicAccess;
  }
  /**
   * @return bool
   */
  public function getEnablePublicAccess()
  {
    return $this->enablePublicAccess;
  }
  /**
   * Optional. Indicates whether reCAPTCHA verification for the web widget is
   * enabled.
   *
   * @param bool $enableRecaptcha
   */
  public function setEnableRecaptcha($enableRecaptcha)
  {
    $this->enableRecaptcha = $enableRecaptcha;
  }
  /**
   * @return bool
   */
  public function getEnableRecaptcha()
  {
    return $this->enableRecaptcha;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelProfileWebWidgetConfigSecuritySettings::class, 'Google_Service_CustomerEngagementSuite_ChannelProfileWebWidgetConfigSecuritySettings');
