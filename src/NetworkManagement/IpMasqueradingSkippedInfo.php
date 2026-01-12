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

namespace Google\Service\NetworkManagement;

class IpMasqueradingSkippedInfo extends \Google\Model
{
  /**
   * Unused default value.
   */
  public const REASON_REASON_UNSPECIFIED = 'REASON_UNSPECIFIED';
  /**
   * Masquerading not applied because destination IP is in one of configured
   * non-masquerade ranges.
   */
  public const REASON_DESTINATION_IP_IN_CONFIGURED_NON_MASQUERADE_RANGE = 'DESTINATION_IP_IN_CONFIGURED_NON_MASQUERADE_RANGE';
  /**
   * Masquerading not applied because destination IP is in one of default non-
   * masquerade ranges.
   */
  public const REASON_DESTINATION_IP_IN_DEFAULT_NON_MASQUERADE_RANGE = 'DESTINATION_IP_IN_DEFAULT_NON_MASQUERADE_RANGE';
  /**
   * Masquerading not applied because destination is on the same Node.
   */
  public const REASON_DESTINATION_ON_SAME_NODE = 'DESTINATION_ON_SAME_NODE';
  /**
   * Masquerading not applied because ip-masq-agent doesn't exist and default
   * SNAT is disabled.
   */
  public const REASON_DEFAULT_SNAT_DISABLED = 'DEFAULT_SNAT_DISABLED';
  /**
   * Masquerading not applied because the packet's IP version is IPv6.
   */
  public const REASON_NO_MASQUERADING_FOR_IPV6 = 'NO_MASQUERADING_FOR_IPV6';
  /**
   * Masquerading not applied because the source Pod uses the host Node's
   * network namespace, including the Node's IP address.
   */
  public const REASON_POD_USES_NODE_NETWORK_NAMESPACE = 'POD_USES_NODE_NETWORK_NAMESPACE';
  /**
   * Masquerading not applied because the packet is a return packet.
   */
  public const REASON_NO_MASQUERADING_FOR_RETURN_PACKET = 'NO_MASQUERADING_FOR_RETURN_PACKET';
  /**
   * The matched non-masquerade IP range. Only set if reason is
   * DESTINATION_IP_IN_CONFIGURED_NON_MASQUERADE_RANGE or
   * DESTINATION_IP_IN_DEFAULT_NON_MASQUERADE_RANGE.
   *
   * @var string
   */
  public $nonMasqueradeRange;
  /**
   * Reason why IP masquerading was not applied.
   *
   * @var string
   */
  public $reason;

  /**
   * The matched non-masquerade IP range. Only set if reason is
   * DESTINATION_IP_IN_CONFIGURED_NON_MASQUERADE_RANGE or
   * DESTINATION_IP_IN_DEFAULT_NON_MASQUERADE_RANGE.
   *
   * @param string $nonMasqueradeRange
   */
  public function setNonMasqueradeRange($nonMasqueradeRange)
  {
    $this->nonMasqueradeRange = $nonMasqueradeRange;
  }
  /**
   * @return string
   */
  public function getNonMasqueradeRange()
  {
    return $this->nonMasqueradeRange;
  }
  /**
   * Reason why IP masquerading was not applied.
   *
   * Accepted values: REASON_UNSPECIFIED,
   * DESTINATION_IP_IN_CONFIGURED_NON_MASQUERADE_RANGE,
   * DESTINATION_IP_IN_DEFAULT_NON_MASQUERADE_RANGE, DESTINATION_ON_SAME_NODE,
   * DEFAULT_SNAT_DISABLED, NO_MASQUERADING_FOR_IPV6,
   * POD_USES_NODE_NETWORK_NAMESPACE, NO_MASQUERADING_FOR_RETURN_PACKET
   *
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IpMasqueradingSkippedInfo::class, 'Google_Service_NetworkManagement_IpMasqueradingSkippedInfo');
