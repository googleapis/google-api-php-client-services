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

class InitialAccessBrokerAlertDetail extends \Google\Collection
{
  protected $collection_key = 'discoveryDocuments';
  /**
   * Optional. Deprecated: Use `discovery_documents` instead. Array of ids to
   * accommodate multiple discovery documents.
   *
   * @deprecated
   * @var string[]
   */
  public $discoveryDocumentIds;
  protected $discoveryDocumentsType = DiscoveryDocument::class;
  protected $discoveryDocumentsDataType = 'array';
  /**
   * Required. The severity of the Initial Access Broker (IAB) alert. Allowed
   * values are: * `LOW` * `MEDIUM` * `HIGH` * `CRITICAL`
   *
   * @var string
   */
  public $severity;

  /**
   * Optional. Deprecated: Use `discovery_documents` instead. Array of ids to
   * accommodate multiple discovery documents.
   *
   * @deprecated
   * @param string[] $discoveryDocumentIds
   */
  public function setDiscoveryDocumentIds($discoveryDocumentIds)
  {
    $this->discoveryDocumentIds = $discoveryDocumentIds;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getDiscoveryDocumentIds()
  {
    return $this->discoveryDocumentIds;
  }
  /**
   * Output only. New structured metadata payload.
   *
   * @param DiscoveryDocument[] $discoveryDocuments
   */
  public function setDiscoveryDocuments($discoveryDocuments)
  {
    $this->discoveryDocuments = $discoveryDocuments;
  }
  /**
   * @return DiscoveryDocument[]
   */
  public function getDiscoveryDocuments()
  {
    return $this->discoveryDocuments;
  }
  /**
   * Required. The severity of the Initial Access Broker (IAB) alert. Allowed
   * values are: * `LOW` * `MEDIUM` * `HIGH` * `CRITICAL`
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
class_alias(InitialAccessBrokerAlertDetail::class, 'Google_Service_ThreatIntelligenceService_InitialAccessBrokerAlertDetail');
