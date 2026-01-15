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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointDialogflowInteractionMeasure extends \Google\Model
{
  protected $percentileAudioInAudioOutLatencyType = GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult::class;
  protected $percentileAudioInAudioOutLatencyDataType = '';
  protected $percentileEndToEndLatencyType = GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult::class;
  protected $percentileEndToEndLatencyDataType = '';
  protected $percentileLlmCallLatencyType = GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult::class;
  protected $percentileLlmCallLatencyDataType = '';
  protected $percentileToolUseLatencyType = GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult::class;
  protected $percentileToolUseLatencyDataType = '';
  protected $percentileTtsLatencyType = GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult::class;
  protected $percentileTtsLatencyDataType = '';

  /**
   * The percentile result for audio in audio out latency in milliseconds per
   * dialogflow interaction level.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileAudioInAudioOutLatency
   */
  public function setPercentileAudioInAudioOutLatency(GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileAudioInAudioOutLatency)
  {
    $this->percentileAudioInAudioOutLatency = $percentileAudioInAudioOutLatency;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult
   */
  public function getPercentileAudioInAudioOutLatency()
  {
    return $this->percentileAudioInAudioOutLatency;
  }
  /**
   * The percentile result for end to end chat latency in milliseconds per
   * dialogflow interaction level.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileEndToEndLatency
   */
  public function setPercentileEndToEndLatency(GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileEndToEndLatency)
  {
    $this->percentileEndToEndLatency = $percentileEndToEndLatency;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult
   */
  public function getPercentileEndToEndLatency()
  {
    return $this->percentileEndToEndLatency;
  }
  /**
   * The percentile result for LLM latency in milliseconds per dialogflow
   * interaction level.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileLlmCallLatency
   */
  public function setPercentileLlmCallLatency(GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileLlmCallLatency)
  {
    $this->percentileLlmCallLatency = $percentileLlmCallLatency;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult
   */
  public function getPercentileLlmCallLatency()
  {
    return $this->percentileLlmCallLatency;
  }
  /**
   * The percentile result for tool use latency in milliseconds per dialogflow
   * interaction level.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileToolUseLatency
   */
  public function setPercentileToolUseLatency(GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileToolUseLatency)
  {
    $this->percentileToolUseLatency = $percentileToolUseLatency;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult
   */
  public function getPercentileToolUseLatency()
  {
    return $this->percentileToolUseLatency;
  }
  /**
   * The percentile result for TTS latency in milliseconds per dialogflow
   * interaction level.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileTtsLatency
   */
  public function setPercentileTtsLatency(GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult $percentileTtsLatency)
  {
    $this->percentileTtsLatency = $percentileTtsLatency;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointPercentileResult
   */
  public function getPercentileTtsLatency()
  {
    return $this->percentileTtsLatency;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointDialogflowInteractionMeasure::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1QueryMetricsResponseSliceDataPointDialogflowInteractionMeasure');
