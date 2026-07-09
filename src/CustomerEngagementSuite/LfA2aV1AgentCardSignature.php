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

class LfA2aV1AgentCardSignature extends \Google\Model
{
  /**
   * The unprotected JWS header values.
   *
   * @var array[]
   */
  public $header;
  /**
   * Required. Required. The protected JWS header for the signature. This is
   * always a base64url-encoded JSON object.
   *
   * @var string
   */
  public $protected;
  /**
   * Required. The computed signature, base64url-encoded.
   *
   * @var string
   */
  public $signature;

  /**
   * The unprotected JWS header values.
   *
   * @param array[] $header
   */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /**
   * @return array[]
   */
  public function getHeader()
  {
    return $this->header;
  }
  /**
   * Required. Required. The protected JWS header for the signature. This is
   * always a base64url-encoded JSON object.
   *
   * @param string $protected
   */
  public function setProtected($protected)
  {
    $this->protected = $protected;
  }
  /**
   * @return string
   */
  public function getProtected()
  {
    return $this->protected;
  }
  /**
   * Required. The computed signature, base64url-encoded.
   *
   * @param string $signature
   */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /**
   * @return string
   */
  public function getSignature()
  {
    return $this->signature;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1AgentCardSignature::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentCardSignature');
