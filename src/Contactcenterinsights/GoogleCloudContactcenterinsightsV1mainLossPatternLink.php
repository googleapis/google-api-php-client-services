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

class GoogleCloudContactcenterinsightsV1mainLossPatternLink extends \Google\Model
{
  /**
   * Unspecified location type.
   */
  public const LOCATION_TYPE_LOCATION_TYPE_UNSPECIFIED = 'LOCATION_TYPE_UNSPECIFIED';
  /**
   * The link applies to the description field.
   */
  public const LOCATION_TYPE_DESCRIPTION = 'DESCRIPTION';
  /**
   * The link applies to the suggested_fixes field.
   */
  public const LOCATION_TYPE_SUGGESTED_FIXES = 'SUGGESTED_FIXES';
  /**
   * The link applies to the examples field.
   */
  public const LOCATION_TYPE_EXAMPLES = 'EXAMPLES';
  protected $botInstructionLinkType = GoogleCloudContactcenterinsightsV1mainLossPatternLinkBotInstructionLink::class;
  protected $botInstructionLinkDataType = '';
  protected $conversationLinkType = GoogleCloudContactcenterinsightsV1mainLossPatternLinkConversationLink::class;
  protected $conversationLinkDataType = '';
  /**
   * The end byte index of the highlighted text (exclusive).
   *
   * @var int
   */
  public $endByteIndex;
  /**
   * The text that is highlighted. (populated for debugging purposes)
   *
   * @var string
   */
  public $highlightedText;
  /**
   * The location type.
   *
   * @var string
   */
  public $locationType;
  /**
   * The start byte index of the highlighted text (inclusive).
   *
   * @var int
   */
  public $startByteIndex;

  /**
   * A link to a bot instruction.
   *
   * @param GoogleCloudContactcenterinsightsV1mainLossPatternLinkBotInstructionLink $botInstructionLink
   */
  public function setBotInstructionLink(GoogleCloudContactcenterinsightsV1mainLossPatternLinkBotInstructionLink $botInstructionLink)
  {
    $this->botInstructionLink = $botInstructionLink;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainLossPatternLinkBotInstructionLink
   */
  public function getBotInstructionLink()
  {
    return $this->botInstructionLink;
  }
  /**
   * A link to a conversation.
   *
   * @param GoogleCloudContactcenterinsightsV1mainLossPatternLinkConversationLink $conversationLink
   */
  public function setConversationLink(GoogleCloudContactcenterinsightsV1mainLossPatternLinkConversationLink $conversationLink)
  {
    $this->conversationLink = $conversationLink;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainLossPatternLinkConversationLink
   */
  public function getConversationLink()
  {
    return $this->conversationLink;
  }
  /**
   * The end byte index of the highlighted text (exclusive).
   *
   * @param int $endByteIndex
   */
  public function setEndByteIndex($endByteIndex)
  {
    $this->endByteIndex = $endByteIndex;
  }
  /**
   * @return int
   */
  public function getEndByteIndex()
  {
    return $this->endByteIndex;
  }
  /**
   * The text that is highlighted. (populated for debugging purposes)
   *
   * @param string $highlightedText
   */
  public function setHighlightedText($highlightedText)
  {
    $this->highlightedText = $highlightedText;
  }
  /**
   * @return string
   */
  public function getHighlightedText()
  {
    return $this->highlightedText;
  }
  /**
   * The location type.
   *
   * Accepted values: LOCATION_TYPE_UNSPECIFIED, DESCRIPTION, SUGGESTED_FIXES,
   * EXAMPLES
   *
   * @param self::LOCATION_TYPE_* $locationType
   */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /**
   * @return self::LOCATION_TYPE_*
   */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /**
   * The start byte index of the highlighted text (inclusive).
   *
   * @param int $startByteIndex
   */
  public function setStartByteIndex($startByteIndex)
  {
    $this->startByteIndex = $startByteIndex;
  }
  /**
   * @return int
   */
  public function getStartByteIndex()
  {
    return $this->startByteIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainLossPatternLink::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainLossPatternLink');
