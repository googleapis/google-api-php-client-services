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

class GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscriptMessageSystemMessages extends \Google\Collection
{
  protected $collection_key = 'systemMessages';
  protected $systemMessagesType = GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscriptMessageSystemMessage::class;
  protected $systemMessagesDataType = 'array';

  /**
   * A message from the system in response to the user.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscriptMessageSystemMessage[] $systemMessages
   */
  public function setSystemMessages($systemMessages)
  {
    $this->systemMessages = $systemMessages;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscriptMessageSystemMessage[]
   */
  public function getSystemMessages()
  {
    return $this->systemMessages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscriptMessageSystemMessages::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscriptMessageSystemMessages');
