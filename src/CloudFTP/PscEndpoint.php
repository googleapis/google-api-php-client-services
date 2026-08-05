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

namespace Google\Service\CloudFTP;

class PscEndpoint extends \Google\Model
{
  /**
   * Output only. This is a Resource name for Private Service Connect endpoint.
   * Format:
   * `projects/{project}/regions/{region}/forwardingRules/{forwarding_rule}`
   *
   * @var string
   */
  public $endpoint;
  /**
   * Output only. The consumer network. Format:
   * `projects/{project}/locations/{location}/networks/{network}`
   *
   * @var string
   */
  public $network;
  /**
   * Output only. The status of the connected endpoint.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. This is a Resource name for Private Service Connect endpoint.
   * Format:
   * `projects/{project}/regions/{region}/forwardingRules/{forwarding_rule}`
   *
   * @param string $endpoint
   */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /**
   * @return string
   */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /**
   * Output only. The consumer network. Format:
   * `projects/{project}/locations/{location}/networks/{network}`
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Output only. The status of the connected endpoint.
   *
   * @param string $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PscEndpoint::class, 'Google_Service_CloudFTP_PscEndpoint');
