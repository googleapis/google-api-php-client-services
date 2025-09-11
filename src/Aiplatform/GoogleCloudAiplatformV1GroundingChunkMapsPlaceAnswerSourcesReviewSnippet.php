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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesReviewSnippet extends \Google\Model
{
  protected $authorAttributionType = GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesAuthorAttribution::class;
  protected $authorAttributionDataType = '';
  /**
   * @var string
   */
  public $flagContentUri;
  /**
   * @var string
   */
  public $googleMapsUri;
  /**
   * @var string
   */
  public $relativePublishTimeDescription;
  /**
   * @var string
   */
  public $review;

  /**
   * @param GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesAuthorAttribution
   */
  public function setAuthorAttribution(GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesAuthorAttribution $authorAttribution)
  {
    $this->authorAttribution = $authorAttribution;
  }
  /**
   * @return GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesAuthorAttribution
   */
  public function getAuthorAttribution()
  {
    return $this->authorAttribution;
  }
  /**
   * @param string
   */
  public function setFlagContentUri($flagContentUri)
  {
    $this->flagContentUri = $flagContentUri;
  }
  /**
   * @return string
   */
  public function getFlagContentUri()
  {
    return $this->flagContentUri;
  }
  /**
   * @param string
   */
  public function setGoogleMapsUri($googleMapsUri)
  {
    $this->googleMapsUri = $googleMapsUri;
  }
  /**
   * @return string
   */
  public function getGoogleMapsUri()
  {
    return $this->googleMapsUri;
  }
  /**
   * @param string
   */
  public function setRelativePublishTimeDescription($relativePublishTimeDescription)
  {
    $this->relativePublishTimeDescription = $relativePublishTimeDescription;
  }
  /**
   * @return string
   */
  public function getRelativePublishTimeDescription()
  {
    return $this->relativePublishTimeDescription;
  }
  /**
   * @param string
   */
  public function setReview($review)
  {
    $this->review = $review;
  }
  /**
   * @return string
   */
  public function getReview()
  {
    return $this->review;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesReviewSnippet::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GroundingChunkMapsPlaceAnswerSourcesReviewSnippet');
