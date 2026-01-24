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

namespace Google\Service\ThreatIntelligenceService;

class ReportAlertUriResponse extends \Google\Model
{
  /**
   * Unspecified status.
   */
  public const STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_UNSPECIFIED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_UNSPECIFIED';
  /**
   * Issue has not been submitted to WebRisk.
   */
  public const STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_NOT_SUBMITTED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_NOT_SUBMITTED';
  /**
   * Issue has been submitted to WebRisk.
   */
  public const STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_SUBMITTED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_SUBMITTED';
  /**
   * Issue has been submitted to WebRisk and is being processed.
   */
  public const STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_PROCESSING = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_PROCESSING';
  /**
   * Issue has been processed by WebRisk and the domain was added to the
   * blocklist.
   */
  public const STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_ADDED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_ADDED';
  /**
   * Issue has been processed by WebRisk and was rejected.
   */
  public const STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_REJECTED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_REJECTED';
  /**
   * Output only. Status of the alert in WebRisk.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Status of the alert in WebRisk.
   *
   * Accepted values: SUSPICIOUS_DOMAIN_WEB_RISK_STATE_UNSPECIFIED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_NOT_SUBMITTED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_SUBMITTED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_PROCESSING,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_ADDED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_REJECTED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportAlertUriResponse::class, 'Google_Service_ThreatIntelligenceService_ReportAlertUriResponse');
