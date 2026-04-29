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

class GoogleCloudDiscoveryengineV1alphaAssistantGroundedContentTextGroundingMetadataVisualSegment extends \Google\Collection
{
  protected $collection_key = 'referenceIndices';
  /**
   * The content id of the visual segment. In order to display the citation of
   * the visual element, this content_id needs to match with the
   * `grounded_content.content_metadata.content_id` field.
   *
   * @var string
   */
  public $contentId;
  /**
   * References for the visual segment.
   *
   * @var int[]
   */
  public $referenceIndices;

  /**
   * The content id of the visual segment. In order to display the citation of
   * the visual element, this content_id needs to match with the
   * `grounded_content.content_metadata.content_id` field.
   *
   * @param string $contentId
   */
  public function setContentId($contentId)
  {
    $this->contentId = $contentId;
  }
  /**
   * @return string
   */
  public function getContentId()
  {
    return $this->contentId;
  }
  /**
   * References for the visual segment.
   *
   * @param int[] $referenceIndices
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAssistantGroundedContentTextGroundingMetadataVisualSegment::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAssistantGroundedContentTextGroundingMetadataVisualSegment');
