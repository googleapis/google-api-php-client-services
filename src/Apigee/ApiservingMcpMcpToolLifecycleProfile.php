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

namespace Google\Service\Apigee;

class ApiservingMcpMcpToolLifecycleProfile extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const LAUNCH_STATE_LAUNCH_STATE_UNSPECIFIED = 'LAUNCH_STATE_UNSPECIFIED';
  /**
   * The tool is currently in development.
   */
  public const LAUNCH_STATE_LAUNCH_STATE_DEVELOPMENT = 'LAUNCH_STATE_DEVELOPMENT';
  /**
   * The tool is in production preview.
   */
  public const LAUNCH_STATE_LAUNCH_STATE_PRODUCTION_PREVIEW = 'LAUNCH_STATE_PRODUCTION_PREVIEW';
  /**
   * The tool is generally available.
   */
  public const LAUNCH_STATE_LAUNCH_STATE_GENERAL_AVAILABILITY = 'LAUNCH_STATE_GENERAL_AVAILABILITY';
  /**
   * Output only. The current launch state of the MCP tool.
   *
   * @var string
   */
  public $launchState;

  /**
   * Output only. The current launch state of the MCP tool.
   *
   * Accepted values: LAUNCH_STATE_UNSPECIFIED, LAUNCH_STATE_DEVELOPMENT,
   * LAUNCH_STATE_PRODUCTION_PREVIEW, LAUNCH_STATE_GENERAL_AVAILABILITY
   *
   * @param self::LAUNCH_STATE_* $launchState
   */
  public function setLaunchState($launchState)
  {
    $this->launchState = $launchState;
  }
  /**
   * @return self::LAUNCH_STATE_*
   */
  public function getLaunchState()
  {
    return $this->launchState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiservingMcpMcpToolLifecycleProfile::class, 'Google_Service_Apigee_ApiservingMcpMcpToolLifecycleProfile');
