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

class GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability extends \Google\Model
{
  /**
   * Optional. Optional log view that will be used to query logs. If empty, the
   * `_Default` view will be used.
   *
   * @var string
   */
  public $logView;
  protected $openTelemetryType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityOpenTelemetry::class;
  protected $openTelemetryDataType = '';
  protected $traceScopeType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityTraceScope::class;
  protected $traceScopeDataType = '';
  /**
   * Optional. Optional trace view that will be used to query traces. If empty,
   * the `_Default` view will be used. NOTE: This field is not supported yet and
   * will be ignored if set.
   *
   * @var string
   */
  public $traceView;

  /**
   * Optional. Optional log view that will be used to query logs. If empty, the
   * `_Default` view will be used.
   *
   * @param string $logView
   */
  public function setLogView($logView)
  {
    $this->logView = $logView;
  }
  /**
   * @return string
   */
  public function getLogView()
  {
    return $this->logView;
  }
  /**
   * Data source follows OpenTelemetry convention.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityOpenTelemetry $openTelemetry
   */
  public function setOpenTelemetry(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityOpenTelemetry $openTelemetry)
  {
    $this->openTelemetry = $openTelemetry;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityOpenTelemetry
   */
  public function getOpenTelemetry()
  {
    return $this->openTelemetry;
  }
  /**
   * Scope online evaluation to single traces.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityTraceScope $traceScope
   */
  public function setTraceScope(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityTraceScope $traceScope)
  {
    $this->traceScope = $traceScope;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityTraceScope
   */
  public function getTraceScope()
  {
    return $this->traceScope;
  }
  /**
   * Optional. Optional trace view that will be used to query traces. If empty,
   * the `_Default` view will be used. NOTE: This field is not supported yet and
   * will be ignored if set.
   *
   * @param string $traceView
   */
  public function setTraceView($traceView)
  {
    $this->traceView = $traceView;
  }
  /**
   * @return string
   */
  public function getTraceView()
  {
    return $this->traceView;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability');
