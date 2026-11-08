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

class WildfireInlineMlOverride extends \Google\Model
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
   * Protocol not specified.
   */
  public const PROTOCOL_WILDFIRE_PROTOCOL_UNSPECIFIED = 'WILDFIRE_PROTOCOL_UNSPECIFIED';
  /**
   * SMTP protocol.
   */
  public const PROTOCOL_WILDFIRE_SMTP = 'WILDFIRE_SMTP';
  /**
   * SMB protocol.
   */
  public const PROTOCOL_WILDFIRE_SMB = 'WILDFIRE_SMB';
  /**
   * POP3 protocol.
   */
  public const PROTOCOL_WILDFIRE_POP3 = 'WILDFIRE_POP3';
  /**
   * IMAP protocol.
   */
  public const PROTOCOL_WILDFIRE_IMAP = 'WILDFIRE_IMAP';
  /**
   * HTTP2 protocol.
   */
  public const PROTOCOL_WILDFIRE_HTTP2 = 'WILDFIRE_HTTP2';
  /**
   * HTTP protocol.
   */
  public const PROTOCOL_WILDFIRE_HTTP = 'WILDFIRE_HTTP';
  /**
   * FTP protocol.
   */
  public const PROTOCOL_WILDFIRE_FTP = 'WILDFIRE_FTP';
  /**
   * Required. The action to take for Advanced malware sandbox inline ML
   * override.
   *
   * @var string
   */
  public $action;
  /**
   * Required. Protocol to match for Advanced malware sandbox inline ML
   * override.
   *
   * @var string
   */
  public $protocol;

  /**
   * Required. The action to take for Advanced malware sandbox inline ML
   * override.
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
   * Required. Protocol to match for Advanced malware sandbox inline ML
   * override.
   *
   * Accepted values: WILDFIRE_PROTOCOL_UNSPECIFIED, WILDFIRE_SMTP,
   * WILDFIRE_SMB, WILDFIRE_POP3, WILDFIRE_IMAP, WILDFIRE_HTTP2, WILDFIRE_HTTP,
   * WILDFIRE_FTP
   *
   * @param self::PROTOCOL_* $protocol
   */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /**
   * @return self::PROTOCOL_*
   */
  public function getProtocol()
  {
    return $this->protocol;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireInlineMlOverride::class, 'Google_Service_NetworkSecurity_WildfireInlineMlOverride');
