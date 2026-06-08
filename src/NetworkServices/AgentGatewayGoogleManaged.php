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

namespace Google\Service\NetworkServices;

class AgentGatewayGoogleManaged extends \Google\Model
{
  /**
   * Governed access path is not specified.
   */
  public const GOVERNED_ACCESS_PATH_GOVERNED_ACCESS_PATH_UNSPECIFIED = 'GOVERNED_ACCESS_PATH_UNSPECIFIED';
  /**
   * Govern agent conections to destinations.
   */
  public const GOVERNED_ACCESS_PATH_AGENT_TO_ANYWHERE = 'AGENT_TO_ANYWHERE';
  /**
   * Protect connection to Agent or Tool.
   */
  public const GOVERNED_ACCESS_PATH_CLIENT_TO_AGENT = 'CLIENT_TO_AGENT';
  /**
   * Optional. Operating Mode of Agent Gateway.
   *
   * @var string
   */
  public $governedAccessPath;

  /**
   * Optional. Operating Mode of Agent Gateway.
   *
   * Accepted values: GOVERNED_ACCESS_PATH_UNSPECIFIED, AGENT_TO_ANYWHERE,
   * CLIENT_TO_AGENT
   *
   * @param self::GOVERNED_ACCESS_PATH_* $governedAccessPath
   */
  public function setGovernedAccessPath($governedAccessPath)
  {
    $this->governedAccessPath = $governedAccessPath;
  }
  /**
   * @return self::GOVERNED_ACCESS_PATH_*
   */
  public function getGovernedAccessPath()
  {
    return $this->governedAccessPath;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentGatewayGoogleManaged::class, 'Google_Service_NetworkServices_AgentGatewayGoogleManaged');
