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

class GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleRequest extends \Google\Model
{
  protected $autoLabelingRuleType = GoogleCloudContactcenterinsightsV1AutoLabelingRule::class;
  protected $autoLabelingRuleDataType = '';
  protected $conversationType = GoogleCloudContactcenterinsightsV1Conversation::class;
  protected $conversationDataType = '';

  /**
   * Required. The auto labeling rule to test.
   *
   * @param GoogleCloudContactcenterinsightsV1AutoLabelingRule $autoLabelingRule
   */
  public function setAutoLabelingRule(GoogleCloudContactcenterinsightsV1AutoLabelingRule $autoLabelingRule)
  {
    $this->autoLabelingRule = $autoLabelingRule;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1AutoLabelingRule
   */
  public function getAutoLabelingRule()
  {
    return $this->autoLabelingRule;
  }
  /**
   * Required. Conversation data to test rules against.
   *
   * @param GoogleCloudContactcenterinsightsV1Conversation $conversation
   */
  public function setConversation(GoogleCloudContactcenterinsightsV1Conversation $conversation)
  {
    $this->conversation = $conversation;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1Conversation
   */
  public function getConversation()
  {
    return $this->conversation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1TestAutoLabelingRuleRequest');
