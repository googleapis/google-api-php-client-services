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

class GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart extends \Google\Model
{
  /**
   * Optional. Snippet of the cited text.
   *
   * @var string
   */
  public $snippet;
  /**
   * Optional. The cited source title.
   *
   * @var string
   */
  public $sourceTitle;
  /**
   * Optional. The cited source URI.
   *
   * @var string
   */
  public $sourceUri;

  /**
   * Optional. Snippet of the cited text.
   *
   * @param string $snippet
   */
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  /**
   * @return string
   */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /**
   * Optional. The cited source title.
   *
   * @param string $sourceTitle
   */
  public function setSourceTitle($sourceTitle)
  {
    $this->sourceTitle = $sourceTitle;
  }
  /**
   * @return string
   */
  public function getSourceTitle()
  {
    return $this->sourceTitle;
  }
  /**
   * Optional. The cited source URI.
   *
   * @param string $sourceUri
   */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /**
   * @return string
   */
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart');
