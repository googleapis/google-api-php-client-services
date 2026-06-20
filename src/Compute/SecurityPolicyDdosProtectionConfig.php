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

namespace Google\Service\Compute;

class SecurityPolicyDdosProtectionConfig extends \Google\Model
{
  public const DDOS_ADAPTIVE_PROTECTION_DDOS_ADAPTIVE_PROTECTION_UNSPECIFIED = 'DDOS_ADAPTIVE_PROTECTION_UNSPECIFIED';
  public const DDOS_ADAPTIVE_PROTECTION_DISABLED = 'DISABLED';
  public const DDOS_ADAPTIVE_PROTECTION_ENABLED = 'ENABLED';
  public const DDOS_ADAPTIVE_PROTECTION_PREVIEW = 'PREVIEW';
  /**
   * @deprecated
   */
  public const DDOS_ADAPTIVE_PROTECTION_UNSPECIFIED_ADAPTIVE_PROTECTION = 'UNSPECIFIED_ADAPTIVE_PROTECTION';
  public const DDOS_PROTECTION_ADVANCED = 'ADVANCED';
  public const DDOS_PROTECTION_ADVANCED_PREVIEW = 'ADVANCED_PREVIEW';
  public const DDOS_PROTECTION_STANDARD = 'STANDARD';
  /**
   * @var string
   */
  public $ddosAdaptiveProtection;
  /**
   * DDoS Protection for Network Load Balancers (and VMs with public IPs) builds
   * DDoS mitigations that minimize collateral damage. It quantifies this as the
   * fraction of a non-abuse baseline that's inadvertently blocked.
   *
   * Rules whose collateral damage exceeds ddosImpactedBaselineThreshold will
   * not be deployed. Using a lower value will prioritize keeping collateral
   * damage low, possibly at the cost of its effectiveness in rate limiting some
   * or all of the attack. It should typically be unset, so Advanced DDoS (and
   * Adaptive Protection) uses the best mitigation it can find. Setting the
   * threshold is advised if there are logs for false positive detections with
   * high collateral damage, and will cause Advanced DDoS to attempt to find a
   * less aggressive rule that satisfies the constraint. If a suitable rule
   * cannot be found, the system falls back to either no mitigation for smaller
   * attacks or broader network throttles for larger ones.
   *
   * @var float
   */
  public $ddosImpactedBaselineThreshold;
  /**
   * @var string
   */
  public $ddosProtection;

  /**
   * @param self::DDOS_ADAPTIVE_PROTECTION_* $ddosAdaptiveProtection
   */
  public function setDdosAdaptiveProtection($ddosAdaptiveProtection)
  {
    $this->ddosAdaptiveProtection = $ddosAdaptiveProtection;
  }
  /**
   * @return self::DDOS_ADAPTIVE_PROTECTION_*
   */
  public function getDdosAdaptiveProtection()
  {
    return $this->ddosAdaptiveProtection;
  }
  /**
   * DDoS Protection for Network Load Balancers (and VMs with public IPs) builds
   * DDoS mitigations that minimize collateral damage. It quantifies this as the
   * fraction of a non-abuse baseline that's inadvertently blocked.
   *
   * Rules whose collateral damage exceeds ddosImpactedBaselineThreshold will
   * not be deployed. Using a lower value will prioritize keeping collateral
   * damage low, possibly at the cost of its effectiveness in rate limiting some
   * or all of the attack. It should typically be unset, so Advanced DDoS (and
   * Adaptive Protection) uses the best mitigation it can find. Setting the
   * threshold is advised if there are logs for false positive detections with
   * high collateral damage, and will cause Advanced DDoS to attempt to find a
   * less aggressive rule that satisfies the constraint. If a suitable rule
   * cannot be found, the system falls back to either no mitigation for smaller
   * attacks or broader network throttles for larger ones.
   *
   * @param float $ddosImpactedBaselineThreshold
   */
  public function setDdosImpactedBaselineThreshold($ddosImpactedBaselineThreshold)
  {
    $this->ddosImpactedBaselineThreshold = $ddosImpactedBaselineThreshold;
  }
  /**
   * @return float
   */
  public function getDdosImpactedBaselineThreshold()
  {
    return $this->ddosImpactedBaselineThreshold;
  }
  /**
   * @param self::DDOS_PROTECTION_* $ddosProtection
   */
  public function setDdosProtection($ddosProtection)
  {
    $this->ddosProtection = $ddosProtection;
  }
  /**
   * @return self::DDOS_PROTECTION_*
   */
  public function getDdosProtection()
  {
    return $this->ddosProtection;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecurityPolicyDdosProtectionConfig::class, 'Google_Service_Compute_SecurityPolicyDdosProtectionConfig');
