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

namespace Google\Service\CloudRetail;

class GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec extends \Google\Model
{
  /**
   * @var string
   */
  public $conversationalFilteringMode;
  /**
   * @var bool
   */
  public $enableConversationalFiltering;
  protected $userAnswerType = GoogleCloudRetailV2ConversationalSearchRequestUserAnswer::class;
  protected $userAnswerDataType = '';

  /**
   * @param string
   */
  public function setConversationalFilteringMode($conversationalFilteringMode)
  {
    $this->conversationalFilteringMode = $conversationalFilteringMode;
  }
  /**
   * @return string
   */
  public function getConversationalFilteringMode()
  {
    return $this->conversationalFilteringMode;
  }
  /**
   * @param bool
   */
  public function setEnableConversationalFiltering($enableConversationalFiltering)
  {
    $this->enableConversationalFiltering = $enableConversationalFiltering;
  }
  /**
   * @return bool
   */
  public function getEnableConversationalFiltering()
  {
    return $this->enableConversationalFiltering;
  }
  /**
   * @param GoogleCloudRetailV2ConversationalSearchRequestUserAnswer
   */
  public function setUserAnswer(GoogleCloudRetailV2ConversationalSearchRequestUserAnswer $userAnswer)
  {
    $this->userAnswer = $userAnswer;
  }
  /**
   * @return GoogleCloudRetailV2ConversationalSearchRequestUserAnswer
   */
  public function getUserAnswer()
  {
    return $this->userAnswer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ConversationalSearchRequestConversationalFilteringSpec');
