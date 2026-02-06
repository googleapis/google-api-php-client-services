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

namespace Google\Service\CustomerEngagementSuite;

class LoggingSettings extends \Google\Model
{
  protected $audioRecordingConfigType = AudioRecordingConfig::class;
  protected $audioRecordingConfigDataType = '';
  protected $bigqueryExportSettingsType = BigQueryExportSettings::class;
  protected $bigqueryExportSettingsDataType = '';
  protected $cloudLoggingSettingsType = CloudLoggingSettings::class;
  protected $cloudLoggingSettingsDataType = '';
  protected $conversationLoggingSettingsType = ConversationLoggingSettings::class;
  protected $conversationLoggingSettingsDataType = '';
  protected $evaluationAudioRecordingConfigType = AudioRecordingConfig::class;
  protected $evaluationAudioRecordingConfigDataType = '';
  protected $metricAnalysisSettingsType = MetricAnalysisSettings::class;
  protected $metricAnalysisSettingsDataType = '';
  protected $redactionConfigType = RedactionConfig::class;
  protected $redactionConfigDataType = '';

  /**
   * Optional. Configuration for how audio interactions should be recorded.
   *
   * @param AudioRecordingConfig $audioRecordingConfig
   */
  public function setAudioRecordingConfig(AudioRecordingConfig $audioRecordingConfig)
  {
    $this->audioRecordingConfig = $audioRecordingConfig;
  }
  /**
   * @return AudioRecordingConfig
   */
  public function getAudioRecordingConfig()
  {
    return $this->audioRecordingConfig;
  }
  /**
   * Optional. Settings to describe the BigQuery export behaviors for the app.
   * The conversation data will be exported to BigQuery tables if it is enabled.
   *
   * @param BigQueryExportSettings $bigqueryExportSettings
   */
  public function setBigqueryExportSettings(BigQueryExportSettings $bigqueryExportSettings)
  {
    $this->bigqueryExportSettings = $bigqueryExportSettings;
  }
  /**
   * @return BigQueryExportSettings
   */
  public function getBigqueryExportSettings()
  {
    return $this->bigqueryExportSettings;
  }
  /**
   * Optional. Settings to describe the Cloud Logging behaviors for the app.
   *
   * @param CloudLoggingSettings $cloudLoggingSettings
   */
  public function setCloudLoggingSettings(CloudLoggingSettings $cloudLoggingSettings)
  {
    $this->cloudLoggingSettings = $cloudLoggingSettings;
  }
  /**
   * @return CloudLoggingSettings
   */
  public function getCloudLoggingSettings()
  {
    return $this->cloudLoggingSettings;
  }
  /**
   * Optional. Settings to describe the conversation logging behaviors for the
   * app.
   *
   * @param ConversationLoggingSettings $conversationLoggingSettings
   */
  public function setConversationLoggingSettings(ConversationLoggingSettings $conversationLoggingSettings)
  {
    $this->conversationLoggingSettings = $conversationLoggingSettings;
  }
  /**
   * @return ConversationLoggingSettings
   */
  public function getConversationLoggingSettings()
  {
    return $this->conversationLoggingSettings;
  }
  /**
   * Optional. Configuration for how audio interactions should be recorded for
   * the evaluation. By default, audio recording is not enabled for evaluation
   * sessions.
   *
   * @param AudioRecordingConfig $evaluationAudioRecordingConfig
   */
  public function setEvaluationAudioRecordingConfig(AudioRecordingConfig $evaluationAudioRecordingConfig)
  {
    $this->evaluationAudioRecordingConfig = $evaluationAudioRecordingConfig;
  }
  /**
   * @return AudioRecordingConfig
   */
  public function getEvaluationAudioRecordingConfig()
  {
    return $this->evaluationAudioRecordingConfig;
  }
  /**
   * Optional. Settings to describe the conversation data collection behaviors
   * for the LLM analysis pipeline for the app.
   *
   * @param MetricAnalysisSettings $metricAnalysisSettings
   */
  public function setMetricAnalysisSettings(MetricAnalysisSettings $metricAnalysisSettings)
  {
    $this->metricAnalysisSettings = $metricAnalysisSettings;
  }
  /**
   * @return MetricAnalysisSettings
   */
  public function getMetricAnalysisSettings()
  {
    return $this->metricAnalysisSettings;
  }
  /**
   * Optional. Configuration for how sensitive data should be redacted.
   *
   * @param RedactionConfig $redactionConfig
   */
  public function setRedactionConfig(RedactionConfig $redactionConfig)
  {
    $this->redactionConfig = $redactionConfig;
  }
  /**
   * @return RedactionConfig
   */
  public function getRedactionConfig()
  {
    return $this->redactionConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LoggingSettings::class, 'Google_Service_CustomerEngagementSuite_LoggingSettings');
