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

class GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentTranscriptPartProduct extends \Google\Collection
{
  protected $collection_key = 'imageUris';
  /**
   * Optional. Product description.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Product display name.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Product ID.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. Product image URLs.
   *
   * @var string[]
   */
  public $imageUris;
  protected $priceType = GoogleTypeMoney::class;
  protected $priceDataType = '';
  /**
   * Optional. Product URL or deep link.
   *
   * @var string
   */
  public $uri;

  /**
   * Optional. Product description.
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
   * Optional. Product display name.
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
   * Optional. Product ID.
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
   * Optional. Product image URLs.
   *
   * @param string[] $imageUris
   */
  public function setImageUris($imageUris)
  {
    $this->imageUris = $imageUris;
  }
  /**
   * @return string[]
   */
  public function getImageUris()
  {
    return $this->imageUris;
  }
  /**
   * Optional. Product price.
   *
   * @param GoogleTypeMoney $price
   */
  public function setPrice(GoogleTypeMoney $price)
  {
    $this->price = $price;
  }
  /**
   * @return GoogleTypeMoney
   */
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * Optional. Product URL or deep link.
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
class_alias(GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentTranscriptPartProduct::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentTranscriptPartProduct');
