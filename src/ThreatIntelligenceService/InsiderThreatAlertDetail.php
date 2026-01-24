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

class InsiderThreatAlertDetail extends \Google\Collection
{
  protected $collection_key = 'discoveryDocumentIds';
  /**
   * Required. Array of ids to accommodate multiple discovery documents
   *
   * @var string[]
   */
  public $discoveryDocumentIds;
  /**
   * Required. InsiderThreat specific severity This will be the string
   * representation of the InsiderThreatFindingDetail.Severityenum. (e.g.,
   * "LOW", "MEDIUM", "HIGH", "CRITICAL")
   *
   * @var string
   */
  public $severity;

  /**
   * Required. Array of ids to accommodate multiple discovery documents
   *
   * @param string[] $discoveryDocumentIds
   */
  public function setDiscoveryDocumentIds($discoveryDocumentIds)
  {
    $this->discoveryDocumentIds = $discoveryDocumentIds;
  }
  /**
   * @return string[]
   */
  public function getDiscoveryDocumentIds()
  {
    return $this->discoveryDocumentIds;
  }
  /**
   * Required. InsiderThreat specific severity This will be the string
   * representation of the InsiderThreatFindingDetail.Severityenum. (e.g.,
   * "LOW", "MEDIUM", "HIGH", "CRITICAL")
   *
   * @param string $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return string
   */
  public function getSeverity()
  {
    return $this->severity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsiderThreatAlertDetail::class, 'Google_Service_ThreatIntelligenceService_InsiderThreatAlertDetail');
