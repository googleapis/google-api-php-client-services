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

class GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart extends \Google\Model
{
  /**
   * Optional. Alternative text description.
   *
   * @var string
   */
  public $alternativeText;
  /**
   * Optional. URI or URL to the media.
   *
   * @var string
   */
  public $uri;

  /**
   * Optional. Alternative text description.
   *
   * @param string $alternativeText
   */
  public function setAlternativeText($alternativeText)
  {
    $this->alternativeText = $alternativeText;
  }
  /**
   * @return string
   */
  public function getAlternativeText()
  {
    return $this->alternativeText;
  }
  /**
   * Optional. URI or URL to the media.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart');
