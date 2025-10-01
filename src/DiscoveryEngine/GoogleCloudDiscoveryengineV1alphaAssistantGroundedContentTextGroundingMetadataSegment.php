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

class GoogleCloudDiscoveryengineV1alphaAssistantGroundedContentTextGroundingMetadataSegment extends \Google\Collection
{
  protected $collection_key = 'referenceIndices';
  /**
   * @var string
   */
  public $endIndex;
  /**
   * @var float
   */
  public $groundingScore;
  /**
   * @var int[]
   */
  public $referenceIndices;
  /**
   * @var string
   */
  public $startIndex;
  /**
   * @var string
   */
  public $text;

  /**
   * @param string
   */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /**
   * @return string
   */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /**
   * @param float
   */
  public function setGroundingScore($groundingScore)
  {
    $this->groundingScore = $groundingScore;
  }
  /**
   * @return float
   */
  public function getGroundingScore()
  {
    return $this->groundingScore;
  }
  /**
   * @param int[]
   */
  public function setReferenceIndices($referenceIndices)
  {
    $this->referenceIndices = $referenceIndices;
  }
  /**
   * @return int[]
   */
  public function getReferenceIndices()
  {
    return $this->referenceIndices;
  }
  /**
   * @param string
   */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /**
   * @return string
   */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /**
   * @param string
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAssistantGroundedContentTextGroundingMetadataSegment::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAssistantGroundedContentTextGroundingMetadataSegment');
