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

class GoogleCloudContactcenterinsightsV1alpha1ConversationCorrelationInfo extends \Google\Collection
{
  protected $collection_key = 'correlationTypes';
  /**
   * Output only. The correlation types of this conversation. A single
   * conversation can have multiple correlation types. For example a
   * conversation that only has a single segment is both a SEGMENT and a
   * FULL_CONVERSATION.
   *
   * @var string[]
   */
  public $correlationTypes;
  /**
   * Output only. The full conversation correlation id this conversation is a
   * segment of.
   *
   * @var string
   */
  public $fullConversationCorrelationId;
  /**
   * Output only. The full conversation correlation id this conversation is a
   * merged conversation of.
   *
   * @var string
   */
  public $mergedFullConversationCorrelationId;

  /**
   * Output only. The correlation types of this conversation. A single
   * conversation can have multiple correlation types. For example a
   * conversation that only has a single segment is both a SEGMENT and a
   * FULL_CONVERSATION.
   *
   * @param string[] $correlationTypes
   */
  public function setCorrelationTypes($correlationTypes)
  {
    $this->correlationTypes = $correlationTypes;
  }
  /**
   * @return string[]
   */
  public function getCorrelationTypes()
  {
    return $this->correlationTypes;
  }
  /**
   * Output only. The full conversation correlation id this conversation is a
   * segment of.
   *
   * @param string $fullConversationCorrelationId
   */
  public function setFullConversationCorrelationId($fullConversationCorrelationId)
  {
    $this->fullConversationCorrelationId = $fullConversationCorrelationId;
  }
  /**
   * @return string
   */
  public function getFullConversationCorrelationId()
  {
    return $this->fullConversationCorrelationId;
  }
  /**
   * Output only. The full conversation correlation id this conversation is a
   * merged conversation of.
   *
   * @param string $mergedFullConversationCorrelationId
   */
  public function setMergedFullConversationCorrelationId($mergedFullConversationCorrelationId)
  {
    $this->mergedFullConversationCorrelationId = $mergedFullConversationCorrelationId;
  }
  /**
   * @return string
   */
  public function getMergedFullConversationCorrelationId()
  {
    return $this->mergedFullConversationCorrelationId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1ConversationCorrelationInfo::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ConversationCorrelationInfo');
