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

class EndUserAuthConfigOauth2JwtBearerConfig extends \Google\Model
{
  /**
   * Required. Client parameter name to pass through. Must be in the format
   * `$context.variables.`.
   *
   * @var string
   */
  public $clientKey;
  /**
   * Required. Issuer parameter name to pass through. Must be in the format
   * `$context.variables.`.
   *
   * @var string
   */
  public $issuer;
  /**
   * Required. Subject parameter name to pass through. Must be in the format
   * `$context.variables.`.
   *
   * @var string
   */
  public $subject;

  /**
   * Required. Client parameter name to pass through. Must be in the format
   * `$context.variables.`.
   *
   * @param string $clientKey
   */
  public function setClientKey($clientKey)
  {
    $this->clientKey = $clientKey;
  }
  /**
   * @return string
   */
  public function getClientKey()
  {
    return $this->clientKey;
  }
  /**
   * Required. Issuer parameter name to pass through. Must be in the format
   * `$context.variables.`.
   *
   * @param string $issuer
   */
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  /**
   * @return string
   */
  public function getIssuer()
  {
    return $this->issuer;
  }
  /**
   * Required. Subject parameter name to pass through. Must be in the format
   * `$context.variables.`.
   *
   * @param string $subject
   */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /**
   * @return string
   */
  public function getSubject()
  {
    return $this->subject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EndUserAuthConfigOauth2JwtBearerConfig::class, 'Google_Service_CustomerEngagementSuite_EndUserAuthConfigOauth2JwtBearerConfig');
