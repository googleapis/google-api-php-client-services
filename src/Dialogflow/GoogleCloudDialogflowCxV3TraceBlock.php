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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3TraceBlock extends \Google\Collection
{
  public const END_STATE_OUTPUT_STATE_UNSPECIFIED = 'OUTPUT_STATE_UNSPECIFIED';
  public const END_STATE_OUTPUT_STATE_OK = 'OUTPUT_STATE_OK';
  public const END_STATE_OUTPUT_STATE_CANCELLED = 'OUTPUT_STATE_CANCELLED';
  public const END_STATE_OUTPUT_STATE_FAILED = 'OUTPUT_STATE_FAILED';
  public const END_STATE_OUTPUT_STATE_ESCALATED = 'OUTPUT_STATE_ESCALATED';
  public const END_STATE_OUTPUT_STATE_PENDING = 'OUTPUT_STATE_PENDING';
  protected $collection_key = 'actions';
  protected $actionsType = GoogleCloudDialogflowCxV3Action::class;
  protected $actionsDataType = 'array';
  /**
   * @var string
   */
  public $completeTime;
  /**
   * @var string
   */
  public $endState;
  protected $flowTraceMetadataType = GoogleCloudDialogflowCxV3FlowTraceMetadata::class;
  protected $flowTraceMetadataDataType = '';
  /**
   * @var array[]
   */
  public $inputParameters;
  /**
   * @var array[]
   */
  public $outputParameters;
  protected $playbookTraceMetadataType = GoogleCloudDialogflowCxV3PlaybookTraceMetadata::class;
  protected $playbookTraceMetadataDataType = '';
  protected $speechProcessingMetadataType = GoogleCloudDialogflowCxV3SpeechProcessingMetadata::class;
  protected $speechProcessingMetadataDataType = '';
  /**
   * @var string
   */
  public $startTime;

  /**
   * @param GoogleCloudDialogflowCxV3Action[] $actions
   */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /**
   * @return GoogleCloudDialogflowCxV3Action[]
   */
  public function getActions()
  {
    return $this->actions;
  }
  /**
   * @param string $completeTime
   */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /**
   * @return string
   */
  public function getCompleteTime()
  {
    return $this->completeTime;
  }
  /**
   * @param self::END_STATE_* $endState
   */
  public function setEndState($endState)
  {
    $this->endState = $endState;
  }
  /**
   * @return self::END_STATE_*
   */
  public function getEndState()
  {
    return $this->endState;
  }
  /**
   * @param GoogleCloudDialogflowCxV3FlowTraceMetadata $flowTraceMetadata
   */
  public function setFlowTraceMetadata(GoogleCloudDialogflowCxV3FlowTraceMetadata $flowTraceMetadata)
  {
    $this->flowTraceMetadata = $flowTraceMetadata;
  }
  /**
   * @return GoogleCloudDialogflowCxV3FlowTraceMetadata
   */
  public function getFlowTraceMetadata()
  {
    return $this->flowTraceMetadata;
  }
  /**
   * @param array[] $inputParameters
   */
  public function setInputParameters($inputParameters)
  {
    $this->inputParameters = $inputParameters;
  }
  /**
   * @return array[]
   */
  public function getInputParameters()
  {
    return $this->inputParameters;
  }
  /**
   * @param array[] $outputParameters
   */
  public function setOutputParameters($outputParameters)
  {
    $this->outputParameters = $outputParameters;
  }
  /**
   * @return array[]
   */
  public function getOutputParameters()
  {
    return $this->outputParameters;
  }
  /**
   * @param GoogleCloudDialogflowCxV3PlaybookTraceMetadata $playbookTraceMetadata
   */
  public function setPlaybookTraceMetadata(GoogleCloudDialogflowCxV3PlaybookTraceMetadata $playbookTraceMetadata)
  {
    $this->playbookTraceMetadata = $playbookTraceMetadata;
  }
  /**
   * @return GoogleCloudDialogflowCxV3PlaybookTraceMetadata
   */
  public function getPlaybookTraceMetadata()
  {
    return $this->playbookTraceMetadata;
  }
  /**
   * @param GoogleCloudDialogflowCxV3SpeechProcessingMetadata $speechProcessingMetadata
   */
  public function setSpeechProcessingMetadata(GoogleCloudDialogflowCxV3SpeechProcessingMetadata $speechProcessingMetadata)
  {
    $this->speechProcessingMetadata = $speechProcessingMetadata;
  }
  /**
   * @return GoogleCloudDialogflowCxV3SpeechProcessingMetadata
   */
  public function getSpeechProcessingMetadata()
  {
    return $this->speechProcessingMetadata;
  }
  /**
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3TraceBlock::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TraceBlock');
