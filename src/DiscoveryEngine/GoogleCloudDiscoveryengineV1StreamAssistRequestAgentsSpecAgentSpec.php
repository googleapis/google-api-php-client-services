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

class GoogleCloudDiscoveryengineV1StreamAssistRequestAgentsSpecAgentSpec extends \Google\Model
{
  /**
   * Required. ID to identify the agent resource serving the request. This field
   * must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034) with a
   * length limit of 63 characters.
   *
   * @var string
   */
  public $agentId;

  /**
   * Required. ID to identify the agent resource serving the request. This field
   * must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034) with a
   * length limit of 63 characters.
   *
   * @param string $agentId
   */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /**
   * @return string
   */
  public function getAgentId()
  {
    return $this->agentId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1StreamAssistRequestAgentsSpecAgentSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1StreamAssistRequestAgentsSpecAgentSpec');
