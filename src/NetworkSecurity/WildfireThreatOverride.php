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

namespace Google\Service\NetworkSecurity;

class WildfireThreatOverride extends \Google\Model
{
  /**
   * Threat action not specified.
   */
  public const ACTION_WILDFIRE_THREAT_ACTION_UNSPECIFIED = 'WILDFIRE_THREAT_ACTION_UNSPECIFIED';
  /**
   * The default action (as specified by the vendor) is taken.
   */
  public const ACTION_WILDFIRE_DEFAULT_ACTION = 'WILDFIRE_DEFAULT_ACTION';
  /**
   * Packets matching this rule are allowed to transmit.
   */
  public const ACTION_WILDFIRE_ALLOW = 'WILDFIRE_ALLOW';
  /**
   * Packets matching this rule are allowed to transmit, and a `threat_log`
   * entry is sent to the consumer project.
   */
  public const ACTION_WILDFIRE_ALERT = 'WILDFIRE_ALERT';
  /**
   * Packets matching this rule are dropped, and a `threat_log` entry is sent to
   * the consumer project.
   */
  public const ACTION_WILDFIRE_DENY = 'WILDFIRE_DENY';
  /**
   * Required. Threat action override.
   *
   * @var string
   */
  public $action;
  /**
   * Required. Threat ID to match.
   *
   * @var string
   */
  public $threatId;

  /**
   * Required. Threat action override.
   *
   * Accepted values: WILDFIRE_THREAT_ACTION_UNSPECIFIED,
   * WILDFIRE_DEFAULT_ACTION, WILDFIRE_ALLOW, WILDFIRE_ALERT, WILDFIRE_DENY
   *
   * @param self::ACTION_* $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return self::ACTION_*
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Required. Threat ID to match.
   *
   * @param string $threatId
   */
  public function setThreatId($threatId)
  {
    $this->threatId = $threatId;
  }
  /**
   * @return string
   */
  public function getThreatId()
  {
    return $this->threatId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireThreatOverride::class, 'Google_Service_NetworkSecurity_WildfireThreatOverride');
