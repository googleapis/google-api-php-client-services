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

class RiskDetails extends \Google\Model
{
  /**
   * Critical severity.
   */
  public const SEVERITY_CRITICAL = 'CRITICAL';
  /**
   * High severity.
   */
  public const SEVERITY_HIGH = 'HIGH';
  /**
   * Low severity.
   */
  public const SEVERITY_LOW = 'LOW';
  /**
   * Medium severity.
   */
  public const SEVERITY_MEDIUM = 'MEDIUM';
  /**
   * No severity specified. The default value.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Risk type related to global DNS.
   */
  public const TYPE_GLOBAL_DNS = 'GLOBAL_DNS';
  /**
   * Default value. This value is unused.
   */
  public const TYPE_RISK_TYPE_UNSPECIFIED = 'RISK_TYPE_UNSPECIFIED';
  /**
   * The duration of the risk since it was detected.
   *
   * @var string
   */
  public $duration;
  protected $globalDnsInsightType = RiskDetailsGlobalDnsInsight::class;
  protected $globalDnsInsightDataType = '';
  /**
   * The last time the risk was updated.
   *
   * @var string
   */
  public $lastUpdateTimestamp;
  /**
   * The severity of the risk.
   *
   * @var string
   */
  public $severity;
  /**
   * The type of risk.
   *
   * @var string
   */
  public $type;

  /**
   * The duration of the risk since it was detected.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * Insight details for global DNS risk.
   *
   * @param RiskDetailsGlobalDnsInsight $globalDnsInsight
   */
  public function setGlobalDnsInsight(RiskDetailsGlobalDnsInsight $globalDnsInsight)
  {
    $this->globalDnsInsight = $globalDnsInsight;
  }
  /**
   * @return RiskDetailsGlobalDnsInsight
   */
  public function getGlobalDnsInsight()
  {
    return $this->globalDnsInsight;
  }
  /**
   * The last time the risk was updated.
   *
   * @param string $lastUpdateTimestamp
   */
  public function setLastUpdateTimestamp($lastUpdateTimestamp)
  {
    $this->lastUpdateTimestamp = $lastUpdateTimestamp;
  }
  /**
   * @return string
   */
  public function getLastUpdateTimestamp()
  {
    return $this->lastUpdateTimestamp;
  }
  /**
   * The severity of the risk.
   *
   * Accepted values: CRITICAL, HIGH, LOW, MEDIUM, SEVERITY_UNSPECIFIED
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * The type of risk.
   *
   * Accepted values: GLOBAL_DNS, RISK_TYPE_UNSPECIFIED
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RiskDetails::class, 'Google_Service_Compute_RiskDetails');
