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

class GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPart extends \Google\Model
{
  protected $citationType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart::class;
  protected $citationDataType = '';
  protected $customPayloadType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart::class;
  protected $customPayloadDataType = '';
  protected $imageType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart::class;
  protected $imageDataType = '';
  protected $linkType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartLinkPart::class;
  protected $linkDataType = '';
  protected $listType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart::class;
  protected $listDataType = '';
  protected $productCollectionType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart::class;
  protected $productCollectionDataType = '';
  protected $suggestionChipsType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart::class;
  protected $suggestionChipsDataType = '';
  protected $tableType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart::class;
  protected $tableDataType = '';
  protected $textType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTextPart::class;
  protected $textDataType = '';
  protected $thoughtType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart::class;
  protected $thoughtDataType = '';
  protected $videoType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart::class;
  protected $videoDataType = '';

  /**
   * Optional. Citation or reference to grounding material.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart $citation
   */
  public function setCitation(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart $citation)
  {
    $this->citation = $citation;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCitationPart
   */
  public function getCitation()
  {
    return $this->citation;
  }
  /**
   * Optional. Generic custom structured payload.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart $customPayload
   */
  public function setCustomPayload(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart $customPayload)
  {
    $this->customPayload = $customPayload;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartCustomPayloadPart
   */
  public function getCustomPayload()
  {
    return $this->customPayload;
  }
  /**
   * Optional. Image media.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $image
   */
  public function setImage(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $image)
  {
    $this->image = $image;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Optional. Web link or URL.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartLinkPart $link
   */
  public function setLink(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartLinkPart $link)
  {
    $this->link = $link;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartLinkPart
   */
  public function getLink()
  {
    return $this->link;
  }
  /**
   * Optional. Ordered or unordered list.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart $list
   */
  public function setList(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart $list)
  {
    $this->list = $list;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart
   */
  public function getList()
  {
    return $this->list;
  }
  /**
   * Optional. Product collection or carousel.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart $productCollection
   */
  public function setProductCollection(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart $productCollection)
  {
    $this->productCollection = $productCollection;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartProductCollectionPart
   */
  public function getProductCollection()
  {
    return $this->productCollection;
  }
  /**
   * Optional. Suggestion chips or interactive buttons.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart $suggestionChips
   */
  public function setSuggestionChips(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart $suggestionChips)
  {
    $this->suggestionChips = $suggestionChips;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartSuggestionChipsPart
   */
  public function getSuggestionChips()
  {
    return $this->suggestionChips;
  }
  /**
   * Optional. Tabular data.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart $table
   */
  public function setTable(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart $table)
  {
    $this->table = $table;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart
   */
  public function getTable()
  {
    return $this->table;
  }
  /**
   * Optional. Plain text content.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTextPart $text
   */
  public function setText(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTextPart $text)
  {
    $this->text = $text;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTextPart
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Optional. Model thought or internal reasoning.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart $thought
   */
  public function setThought(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart $thought)
  {
    $this->thought = $thought;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartThoughtPart
   */
  public function getThought()
  {
    return $this->thought;
  }
  /**
   * Optional. Video media.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $video
   */
  public function setVideo(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart $video)
  {
    $this->video = $video;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartMediaPart
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPart');
