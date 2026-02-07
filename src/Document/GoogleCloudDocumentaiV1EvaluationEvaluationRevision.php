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

namespace Google\Service\Document;

class GoogleCloudDocumentaiV1EvaluationEvaluationRevision extends \Google\Model
{
  protected $allEntitiesMetricsType = GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics::class;
  protected $allEntitiesMetricsDataType = '';
  protected $documentCountersType = GoogleCloudDocumentaiV1EvaluationCounters::class;
  protected $documentCountersDataType = '';
  protected $entityMetricsType = GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics::class;
  protected $entityMetricsDataType = 'map';
  /**
   * Output only. The revision ID of the evaluation.
   *
   * @var string
   */
  public $revisionId;

  /**
   * Output only. Metrics for all the entities in aggregate.
   *
   * @param GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics $allEntitiesMetrics
   */
  public function setAllEntitiesMetrics(GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics $allEntitiesMetrics)
  {
    $this->allEntitiesMetrics = $allEntitiesMetrics;
  }
  /**
   * @return GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics
   */
  public function getAllEntitiesMetrics()
  {
    return $this->allEntitiesMetrics;
  }
  /**
   * Output only. Counters for the documents used in the evaluation.
   *
   * @param GoogleCloudDocumentaiV1EvaluationCounters $documentCounters
   */
  public function setDocumentCounters(GoogleCloudDocumentaiV1EvaluationCounters $documentCounters)
  {
    $this->documentCounters = $documentCounters;
  }
  /**
   * @return GoogleCloudDocumentaiV1EvaluationCounters
   */
  public function getDocumentCounters()
  {
    return $this->documentCounters;
  }
  /**
   * Output only. Metrics across confidence levels, for different entities.
   *
   * @param GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics[] $entityMetrics
   */
  public function setEntityMetrics($entityMetrics)
  {
    $this->entityMetrics = $entityMetrics;
  }
  /**
   * @return GoogleCloudDocumentaiV1EvaluationMultiConfidenceMetrics[]
   */
  public function getEntityMetrics()
  {
    return $this->entityMetrics;
  }
  /**
   * Output only. The revision ID of the evaluation.
   *
   * @param string $revisionId
   */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /**
   * @return string
   */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1EvaluationEvaluationRevision::class, 'Google_Service_Document_GoogleCloudDocumentaiV1EvaluationEvaluationRevision');
