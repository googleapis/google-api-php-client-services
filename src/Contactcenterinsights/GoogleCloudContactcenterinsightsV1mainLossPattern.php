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

class GoogleCloudContactcenterinsightsV1mainLossPattern extends \Google\Collection
{
  protected $collection_key = 'links';
  /**
   * Output only. A list of conversation IDs that match this loss pattern.
   *
   * @var string[]
   */
  public $conversationIds;
  /**
   * Output only. A markdown description of the loss pattern.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The display name of the loss pattern.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. A markdown of loss pattern examples.
   *
   * @var string
   */
  public $examples;
  /**
   * Output only. The unique identifier for the loss pattern.
   *
   * @var string
   */
  public $id;
  protected $linksType = GoogleCloudContactcenterinsightsV1mainLossPatternLink::class;
  protected $linksDataType = 'array';
  /**
   * Output only. The percentage of conversations that match this loss pattern.
   *
   * @var 
   */
  public $percentage;
  /**
   * Output only. A markdown description of the suggested fixes.
   *
   * @var string
   */
  public $suggestedFixes;

  /**
   * Output only. A list of conversation IDs that match this loss pattern.
   *
   * @param string[] $conversationIds
   */
  public function setConversationIds($conversationIds)
  {
    $this->conversationIds = $conversationIds;
  }
  /**
   * @return string[]
   */
  public function getConversationIds()
  {
    return $this->conversationIds;
  }
  /**
   * Output only. A markdown description of the loss pattern.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The display name of the loss pattern.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. A markdown of loss pattern examples.
   *
   * @param string $examples
   */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /**
   * @return string
   */
  public function getExamples()
  {
    return $this->examples;
  }
  /**
   * Output only. The unique identifier for the loss pattern.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. A list of links to conversations or bot instructions.
   *
   * @param GoogleCloudContactcenterinsightsV1mainLossPatternLink[] $links
   */
  public function setLinks($links)
  {
    $this->links = $links;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainLossPatternLink[]
   */
  public function getLinks()
  {
    return $this->links;
  }
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  public function getPercentage()
  {
    return $this->percentage;
  }
  /**
   * Output only. A markdown description of the suggested fixes.
   *
   * @param string $suggestedFixes
   */
  public function setSuggestedFixes($suggestedFixes)
  {
    $this->suggestedFixes = $suggestedFixes;
  }
  /**
   * @return string
   */
  public function getSuggestedFixes()
  {
    return $this->suggestedFixes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainLossPattern::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainLossPattern');
