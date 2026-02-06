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

class Conversation extends \Google\Collection
{
  /**
   * Unspecified channel type.
   */
  public const CHANNEL_TYPE_CHANNEL_TYPE_UNSPECIFIED = 'CHANNEL_TYPE_UNSPECIFIED';
  /**
   * The conversation only contains text messages between the end user and the
   * agent.
   */
  public const CHANNEL_TYPE_TEXT = 'TEXT';
  /**
   * The conversation contains audio messages between the end user and the
   * agent.
   */
  public const CHANNEL_TYPE_AUDIO = 'AUDIO';
  /**
   * The conversation multi-modal messages (e.g. image) between the end user and
   * the agent.
   */
  public const CHANNEL_TYPE_MULTIMODAL = 'MULTIMODAL';
  /**
   * Unspecified source.
   */
  public const SOURCE_SOURCE_UNSPECIFIED = 'SOURCE_UNSPECIFIED';
  /**
   * The conversation is from the live end user.
   */
  public const SOURCE_LIVE = 'LIVE';
  /**
   * The conversation is from the simulator.
   */
  public const SOURCE_SIMULATOR = 'SIMULATOR';
  /**
   * The conversation is from the evaluation.
   */
  public const SOURCE_EVAL = 'EVAL';
  protected $collection_key = 'turns';
  /**
   * Output only. The version of the app used for processing the conversation.
   * Format:
   * `projects/{project}/locations/{location}/apps/{app}/versions/{version}`
   *
   * @var string
   */
  public $appVersion;
  /**
   * DEPRECATED. Please use input_types instead.
   *
   * @deprecated
   * @var string
   */
  public $channelType;
  /**
   * Output only. The deployment of the app used for processing the
   * conversation. Format: `projects/{project}/locations/{location}/apps/{app}/d
   * eployments/{deployment}`
   *
   * @var string
   */
  public $deployment;
  /**
   * Output only. Timestamp when the conversation was completed.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The agent that initially handles the conversation. If not
   * specified, the conversation is handled by the root agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @var string
   */
  public $entryAgent;
  /**
   * Output only. The input types of the conversation.
   *
   * @var string[]
   */
  public $inputTypes;
  /**
   * Output only. The language code of the conversation.
   *
   * @var string
   */
  public $languageCode;
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  /**
   * Identifier. The unique identifier of the conversation. Format: `projects/{p
   * roject}/locations/{location}/apps/{app}/conversations/{conversation}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Indicate the source of the conversation.
   *
   * @var string
   */
  public $source;
  /**
   * Output only. Timestamp when the conversation was created.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The number of turns in the conversation.
   *
   * @var int
   */
  public $turnCount;
  protected $turnsType = ConversationTurn::class;
  protected $turnsDataType = 'array';

  /**
   * Output only. The version of the app used for processing the conversation.
   * Format:
   * `projects/{project}/locations/{location}/apps/{app}/versions/{version}`
   *
   * @param string $appVersion
   */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /**
   * @return string
   */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /**
   * DEPRECATED. Please use input_types instead.
   *
   * Accepted values: CHANNEL_TYPE_UNSPECIFIED, TEXT, AUDIO, MULTIMODAL
   *
   * @deprecated
   * @param self::CHANNEL_TYPE_* $channelType
   */
  public function setChannelType($channelType)
  {
    $this->channelType = $channelType;
  }
  /**
   * @deprecated
   * @return self::CHANNEL_TYPE_*
   */
  public function getChannelType()
  {
    return $this->channelType;
  }
  /**
   * Output only. The deployment of the app used for processing the
   * conversation. Format: `projects/{project}/locations/{location}/apps/{app}/d
   * eployments/{deployment}`
   *
   * @param string $deployment
   */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /**
   * @return string
   */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /**
   * Output only. Timestamp when the conversation was completed.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. The agent that initially handles the conversation. If not
   * specified, the conversation is handled by the root agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @param string $entryAgent
   */
  public function setEntryAgent($entryAgent)
  {
    $this->entryAgent = $entryAgent;
  }
  /**
   * @return string
   */
  public function getEntryAgent()
  {
    return $this->entryAgent;
  }
  /**
   * Output only. The input types of the conversation.
   *
   * @param string[] $inputTypes
   */
  public function setInputTypes($inputTypes)
  {
    $this->inputTypes = $inputTypes;
  }
  /**
   * @return string[]
   */
  public function getInputTypes()
  {
    return $this->inputTypes;
  }
  /**
   * Output only. The language code of the conversation.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Deprecated. Use turns instead.
   *
   * @deprecated
   * @param Message[] $messages
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @deprecated
   * @return Message[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * Identifier. The unique identifier of the conversation. Format: `projects/{p
   * roject}/locations/{location}/apps/{app}/conversations/{conversation}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Indicate the source of the conversation.
   *
   * Accepted values: SOURCE_UNSPECIFIED, LIVE, SIMULATOR, EVAL
   *
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. Timestamp when the conversation was created.
   *
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
  /**
   * Output only. The number of turns in the conversation.
   *
   * @param int $turnCount
   */
  public function setTurnCount($turnCount)
  {
    $this->turnCount = $turnCount;
  }
  /**
   * @return int
   */
  public function getTurnCount()
  {
    return $this->turnCount;
  }
  /**
   * Required. The turns in the conversation.
   *
   * @param ConversationTurn[] $turns
   */
  public function setTurns($turns)
  {
    $this->turns = $turns;
  }
  /**
   * @return ConversationTurn[]
   */
  public function getTurns()
  {
    return $this->turns;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Conversation::class, 'Google_Service_CustomerEngagementSuite_Conversation');
