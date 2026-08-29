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

class CustomThreatScenarioConfig extends \Google\Model
{
  /**
   * Output only. The compiled Lucene query string.
   *
   * @var string
   */
  public $compiledLuceneQuery;
  /**
   * Required. The condition driving the scenario, stored as a stringified JSON.
   * This is used to query/filter documents.
   *
   * @var string
   */
  public $documentCondition;
  protected $documentQueryType = DocumentQuery::class;
  protected $documentQueryDataType = '';
  protected $legacyMonitorMetadataType = LegacyMetadata::class;
  protected $legacyMonitorMetadataDataType = '';

  /**
   * Output only. The compiled Lucene query string.
   *
   * @param string $compiledLuceneQuery
   */
  public function setCompiledLuceneQuery($compiledLuceneQuery)
  {
    $this->compiledLuceneQuery = $compiledLuceneQuery;
  }
  /**
   * @return string
   */
  public function getCompiledLuceneQuery()
  {
    return $this->compiledLuceneQuery;
  }
  /**
   * Required. The condition driving the scenario, stored as a stringified JSON.
   * This is used to query/filter documents.
   *
   * @param string $documentCondition
   */
  public function setDocumentCondition($documentCondition)
  {
    $this->documentCondition = $documentCondition;
  }
  /**
   * @return string
   */
  public function getDocumentCondition()
  {
    return $this->documentCondition;
  }
  /**
   * Optional. The query used to match documents.
   *
   * @param DocumentQuery $documentQuery
   */
  public function setDocumentQuery(DocumentQuery $documentQuery)
  {
    $this->documentQuery = $documentQuery;
  }
  /**
   * @return DocumentQuery
   */
  public function getDocumentQuery()
  {
    return $this->documentQuery;
  }
  /**
   * Optional. Legacy metadata associated with this scenario/monitor.
   *
   * @param LegacyMetadata $legacyMonitorMetadata
   */
  public function setLegacyMonitorMetadata(LegacyMetadata $legacyMonitorMetadata)
  {
    $this->legacyMonitorMetadata = $legacyMonitorMetadata;
  }
  /**
   * @return LegacyMetadata
   */
  public function getLegacyMonitorMetadata()
  {
    return $this->legacyMonitorMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomThreatScenarioConfig::class, 'Google_Service_ThreatIntelligenceService_CustomThreatScenarioConfig');
