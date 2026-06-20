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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ImportEvaluationSetRequest extends \Google\Model
{
  protected $agentEngineSourceType = GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource::class;
  protected $agentEngineSourceDataType = '';
  protected $bigquerySourceType = GoogleCloudAiplatformV1BigQueryRequestSet::class;
  protected $bigquerySourceDataType = '';
  protected $cloudTraceSourceType = GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource::class;
  protected $cloudTraceSourceDataType = '';
  protected $evaluationSetType = GoogleCloudAiplatformV1EvaluationSet::class;
  protected $evaluationSetDataType = '';
  protected $gcsDestinationType = GoogleCloudAiplatformV1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  protected $gcsSourceType = GoogleCloudAiplatformV1ImportEvaluationSetRequestGcsSource::class;
  protected $gcsSourceDataType = '';
  protected $inlineSourceType = GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource::class;
  protected $inlineSourceDataType = '';

  /**
   * Source for loading Agent Engine sessions.
   *
   * @param GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource $agentEngineSource
   */
  public function setAgentEngineSource(GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource $agentEngineSource)
  {
    $this->agentEngineSource = $agentEngineSource;
  }
  /**
   * @return GoogleCloudAiplatformV1ImportEvaluationSetRequestAgentEngineSource
   */
  public function getAgentEngineSource()
  {
    return $this->agentEngineSource;
  }
  /**
   * BigQuery source with column mappings.
   *
   * @param GoogleCloudAiplatformV1BigQueryRequestSet $bigquerySource
   */
  public function setBigquerySource(GoogleCloudAiplatformV1BigQueryRequestSet $bigquerySource)
  {
    $this->bigquerySource = $bigquerySource;
  }
  /**
   * @return GoogleCloudAiplatformV1BigQueryRequestSet
   */
  public function getBigquerySource()
  {
    return $this->bigquerySource;
  }
  /**
   * Source for loading data directly from Cloud Trace.
   *
   * @param GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource $cloudTraceSource
   */
  public function setCloudTraceSource(GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource $cloudTraceSource)
  {
    $this->cloudTraceSource = $cloudTraceSource;
  }
  /**
   * @return GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource
   */
  public function getCloudTraceSource()
  {
    return $this->cloudTraceSource;
  }
  /**
   * Required. The EvaluationSet to create. Used to specify 'display_name' and
   * 'metadata'. The 'evaluation_items' field is ignored and populated by the
   * import process.
   *
   * @param GoogleCloudAiplatformV1EvaluationSet $evaluationSet
   */
  public function setEvaluationSet(GoogleCloudAiplatformV1EvaluationSet $evaluationSet)
  {
    $this->evaluationSet = $evaluationSet;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationSet
   */
  public function getEvaluationSet()
  {
    return $this->evaluationSet;
  }
  /**
   * Required. The Cloud Storage location where the resulting EvaluationItem
   * payloads will be stored.
   *
   * @param GoogleCloudAiplatformV1GcsDestination $gcsDestination
   */
  public function setGcsDestination(GoogleCloudAiplatformV1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /**
   * @return GoogleCloudAiplatformV1GcsDestination
   */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /**
   * Google Cloud Storage location.
   *
   * @param GoogleCloudAiplatformV1ImportEvaluationSetRequestGcsSource $gcsSource
   */
  public function setGcsSource(GoogleCloudAiplatformV1ImportEvaluationSetRequestGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /**
   * @return GoogleCloudAiplatformV1ImportEvaluationSetRequestGcsSource
   */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /**
   * Inline source for small payloads (< 4MB).
   *
   * @param GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource $inlineSource
   */
  public function setInlineSource(GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource $inlineSource)
  {
    $this->inlineSource = $inlineSource;
  }
  /**
   * @return GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource
   */
  public function getInlineSource()
  {
    return $this->inlineSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImportEvaluationSetRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImportEvaluationSetRequest');
