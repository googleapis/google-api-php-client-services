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

namespace Google\Service\Contentwarehouse;

class AssistantApiMessageSummarySupport extends \Google\Model
{
  /**
   * @var string
   */
  public $deviceSettingStatus;
  /**
   * @var string
   */
  public $lastVoiceOptInFlowTimestamp;
  /**
   * @var bool
   */
  public $readNotificationSummarizationSupported;
  /**
   * @var int
   */
  public $voiceOptInFlowCounter;

  /**
   * @param string
   */
  public function setDeviceSettingStatus($deviceSettingStatus)
  {
    $this->deviceSettingStatus = $deviceSettingStatus;
  }
  /**
   * @return string
   */
  public function getDeviceSettingStatus()
  {
    return $this->deviceSettingStatus;
  }
  /**
   * @param string
   */
  public function setLastVoiceOptInFlowTimestamp($lastVoiceOptInFlowTimestamp)
  {
    $this->lastVoiceOptInFlowTimestamp = $lastVoiceOptInFlowTimestamp;
  }
  /**
   * @return string
   */
  public function getLastVoiceOptInFlowTimestamp()
  {
    return $this->lastVoiceOptInFlowTimestamp;
  }
  /**
   * @param bool
   */
  public function setReadNotificationSummarizationSupported($readNotificationSummarizationSupported)
  {
    $this->readNotificationSummarizationSupported = $readNotificationSummarizationSupported;
  }
  /**
   * @return bool
   */
  public function getReadNotificationSummarizationSupported()
  {
    return $this->readNotificationSummarizationSupported;
  }
  /**
   * @param int
   */
  public function setVoiceOptInFlowCounter($voiceOptInFlowCounter)
  {
    $this->voiceOptInFlowCounter = $voiceOptInFlowCounter;
  }
  /**
   * @return int
   */
  public function getVoiceOptInFlowCounter()
  {
    return $this->voiceOptInFlowCounter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiMessageSummarySupport::class, 'Google_Service_Contentwarehouse_AssistantApiMessageSummarySupport');
