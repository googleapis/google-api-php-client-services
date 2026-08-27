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

class GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPart extends \Google\Model
{
  protected $citationType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCitationPart::class;
  protected $citationDataType = '';
  protected $customPayloadType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart::class;
  protected $customPayloadDataType = '';
  protected $imageType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart::class;
  protected $imageDataType = '';
  protected $linkType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartLinkPart::class;
  protected $linkDataType = '';
  protected $listType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartListPart::class;
  protected $listDataType = '';
  protected $productCollectionType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart::class;
  protected $productCollectionDataType = '';
  protected $suggestionChipsType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart::class;
  protected $suggestionChipsDataType = '';
  protected $tableType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTablePart::class;
  protected $tableDataType = '';
  protected $textType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTextPart::class;
  protected $textDataType = '';
  protected $thoughtType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart::class;
  protected $thoughtDataType = '';
  protected $videoType = GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart::class;
  protected $videoDataType = '';

  /**
   * Optional. Citation or reference to grounding material.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCitationPart $citation
   */
  public function setCitation(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCitationPart $citation)
  {
    $this->citation = $citation;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCitationPart
   */
  public function getCitation()
  {
    return $this->citation;
  }
  /**
   * Optional. Generic custom structured payload.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart $customPayload
   */
  public function setCustomPayload(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart $customPayload)
  {
    $this->customPayload = $customPayload;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart
   */
  public function getCustomPayload()
  {
    return $this->customPayload;
  }
  /**
   * Optional. Image media.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $image
   */
  public function setImage(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $image)
  {
    $this->image = $image;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Optional. Web link or URL.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartLinkPart $link
   */
  public function setLink(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartLinkPart $link)
  {
    $this->link = $link;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartLinkPart
   */
  public function getLink()
  {
    return $this->link;
  }
  /**
   * Optional. Ordered or unordered list.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartListPart $list
   */
  public function setList(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartListPart $list)
  {
    $this->list = $list;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartListPart
   */
  public function getList()
  {
    return $this->list;
  }
  /**
   * Optional. Product collection or carousel.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart $productCollection
   */
  public function setProductCollection(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart $productCollection)
  {
    $this->productCollection = $productCollection;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart
   */
  public function getProductCollection()
  {
    return $this->productCollection;
  }
  /**
   * Optional. Suggestion chips or interactive buttons.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart $suggestionChips
   */
  public function setSuggestionChips(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart $suggestionChips)
  {
    $this->suggestionChips = $suggestionChips;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart
   */
  public function getSuggestionChips()
  {
    return $this->suggestionChips;
  }
  /**
   * Optional. Tabular data.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTablePart $table
   */
  public function setTable(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTablePart $table)
  {
    $this->table = $table;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTablePart
   */
  public function getTable()
  {
    return $this->table;
  }
  /**
   * Optional. Plain text content.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTextPart $text
   */
  public function setText(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTextPart $text)
  {
    $this->text = $text;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartTextPart
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Optional. Model thought or internal reasoning.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart $thought
   */
  public function setThought(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart $thought)
  {
    $this->thought = $thought;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart
   */
  public function getThought()
  {
    return $this->thought;
  }
  /**
   * Optional. Video media.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $video
   */
  public function setVideo(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $video)
  {
    $this->video = $video;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPartMediaPart
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ConversationTranscriptTranscriptSegmentTranscriptPart');
