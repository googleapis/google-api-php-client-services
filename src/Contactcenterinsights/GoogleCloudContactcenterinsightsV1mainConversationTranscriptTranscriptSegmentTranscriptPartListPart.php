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

class GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart extends \Google\Collection
{
  /**
   * Unspecified list type.
   */
  public const LIST_TYPE_LIST_TYPE_UNSPECIFIED = 'LIST_TYPE_UNSPECIFIED';
  /**
   * Unordered list.
   */
  public const LIST_TYPE_UNORDERED = 'UNORDERED';
  /**
   * Ordered numbered list.
   */
  public const LIST_TYPE_ORDERED_NUMBER = 'ORDERED_NUMBER';
  /**
   * Ordered alphabetic list.
   */
  public const LIST_TYPE_ORDERED_ALPHA = 'ORDERED_ALPHA';
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListItem::class;
  protected $itemsDataType = 'array';
  /**
   * Optional. The type of list.
   *
   * @var string
   */
  public $listType;

  /**
   * Optional. List items.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListItem[] $items
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListItem[]
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * Optional. The type of list.
   *
   * Accepted values: LIST_TYPE_UNSPECIFIED, UNORDERED, ORDERED_NUMBER,
   * ORDERED_ALPHA
   *
   * @param self::LIST_TYPE_* $listType
   */
  public function setListType($listType)
  {
    $this->listType = $listType;
  }
  /**
   * @return self::LIST_TYPE_*
   */
  public function getListType()
  {
    return $this->listType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartListPart');
