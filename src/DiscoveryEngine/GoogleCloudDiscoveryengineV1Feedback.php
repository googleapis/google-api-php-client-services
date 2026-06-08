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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1Feedback extends \Google\Collection
{
  /**
   * Unspecified feedback source.
   */
  public const FEEDBACK_SOURCE_FEEDBACK_SOURCE_UNSPECIFIED = 'FEEDBACK_SOURCE_UNSPECIFIED';
  /**
   * Feedback source is Google Console.
   */
  public const FEEDBACK_SOURCE_GOOGLE_CONSOLE = 'GOOGLE_CONSOLE';
  /**
   * Feedback source is Google Widget.
   */
  public const FEEDBACK_SOURCE_GOOGLE_WIDGET = 'GOOGLE_WIDGET';
  /**
   * Feedback source is Google Webapp.
   */
  public const FEEDBACK_SOURCE_GOOGLE_WEBAPP = 'GOOGLE_WEBAPP';
  /**
   * Feedback source is Google AgentSpace Mobile app.
   */
  public const FEEDBACK_SOURCE_GOOGLE_AGENTSPACE_MOBILE = 'GOOGLE_AGENTSPACE_MOBILE';
  /**
   * Unspecified feedback type.
   */
  public const FEEDBACK_TYPE_FEEDBACK_TYPE_UNSPECIFIED = 'FEEDBACK_TYPE_UNSPECIFIED';
  /**
   * The user gives a positive feedback.
   */
  public const FEEDBACK_TYPE_LIKE = 'LIKE';
  /**
   * The user gives a negative feedback.
   */
  public const FEEDBACK_TYPE_DISLIKE = 'DISLIKE';
  protected $collection_key = 'reasons';
  /**
   * Optional. The additional user comment of the feedback if user gives a thumb
   * down.
   *
   * @var string
   */
  public $comment;
  /**
   * Optional. The version of the component that this report is being sent from.
   *
   * @var string
   */
  public $componentVersion;
  protected $conversationInfoType = GoogleCloudDiscoveryengineV1FeedbackConversationInfo::class;
  protected $conversationInfoDataType = '';
  /**
   * Optional. Whether the customer accepted data use terms.
   *
   * @var bool
   */
  public $dataTermsAccepted;
  /**
   * Optional. The UI component the user feedback comes from, which could be
   * GOOGLE_CONSOLE, GOOGLE_WIDGET, GOOGLE_WEBAPP.
   *
   * @var string
   */
  public $feedbackSource;
  /**
   * Required. Indicate whether the user gives a positive or negative feedback.
   * If the user gives a negative feedback, there might be more feedback
   * details.
   *
   * @var string
   */
  public $feedbackType;
  /**
   * The version of the LLM model that was used to generate the response.
   *
   * @var string
   */
  public $llmModelVersion;
  /**
   * Optional. The reason if user gives a thumb down.
   *
   * @var string[]
   */
  public $reasons;

  /**
   * Optional. The additional user comment of the feedback if user gives a thumb
   * down.
   *
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * Optional. The version of the component that this report is being sent from.
   *
   * @param string $componentVersion
   */
  public function setComponentVersion($componentVersion)
  {
    $this->componentVersion = $componentVersion;
  }
  /**
   * @return string
   */
  public function getComponentVersion()
  {
    return $this->componentVersion;
  }
  /**
   * The related conversation information when user gives feedback.
   *
   * @param GoogleCloudDiscoveryengineV1FeedbackConversationInfo $conversationInfo
   */
  public function setConversationInfo(GoogleCloudDiscoveryengineV1FeedbackConversationInfo $conversationInfo)
  {
    $this->conversationInfo = $conversationInfo;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1FeedbackConversationInfo
   */
  public function getConversationInfo()
  {
    return $this->conversationInfo;
  }
  /**
   * Optional. Whether the customer accepted data use terms.
   *
   * @param bool $dataTermsAccepted
   */
  public function setDataTermsAccepted($dataTermsAccepted)
  {
    $this->dataTermsAccepted = $dataTermsAccepted;
  }
  /**
   * @return bool
   */
  public function getDataTermsAccepted()
  {
    return $this->dataTermsAccepted;
  }
  /**
   * Optional. The UI component the user feedback comes from, which could be
   * GOOGLE_CONSOLE, GOOGLE_WIDGET, GOOGLE_WEBAPP.
   *
   * Accepted values: FEEDBACK_SOURCE_UNSPECIFIED, GOOGLE_CONSOLE,
   * GOOGLE_WIDGET, GOOGLE_WEBAPP, GOOGLE_AGENTSPACE_MOBILE
   *
   * @param self::FEEDBACK_SOURCE_* $feedbackSource
   */
  public function setFeedbackSource($feedbackSource)
  {
    $this->feedbackSource = $feedbackSource;
  }
  /**
   * @return self::FEEDBACK_SOURCE_*
   */
  public function getFeedbackSource()
  {
    return $this->feedbackSource;
  }
  /**
   * Required. Indicate whether the user gives a positive or negative feedback.
   * If the user gives a negative feedback, there might be more feedback
   * details.
   *
   * Accepted values: FEEDBACK_TYPE_UNSPECIFIED, LIKE, DISLIKE
   *
   * @param self::FEEDBACK_TYPE_* $feedbackType
   */
  public function setFeedbackType($feedbackType)
  {
    $this->feedbackType = $feedbackType;
  }
  /**
   * @return self::FEEDBACK_TYPE_*
   */
  public function getFeedbackType()
  {
    return $this->feedbackType;
  }
  /**
   * The version of the LLM model that was used to generate the response.
   *
   * @param string $llmModelVersion
   */
  public function setLlmModelVersion($llmModelVersion)
  {
    $this->llmModelVersion = $llmModelVersion;
  }
  /**
   * @return string
   */
  public function getLlmModelVersion()
  {
    return $this->llmModelVersion;
  }
  /**
   * Optional. The reason if user gives a thumb down.
   *
   * @param string[] $reasons
   */
  public function setReasons($reasons)
  {
    $this->reasons = $reasons;
  }
  /**
   * @return string[]
   */
  public function getReasons()
  {
    return $this->reasons;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1Feedback::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1Feedback');
