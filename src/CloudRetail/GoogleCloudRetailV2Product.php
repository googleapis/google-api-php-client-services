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

namespace Google\Service\CloudRetail;

class GoogleCloudRetailV2Product extends \Google\Collection
{
  protected $collection_key = 'tags';
  protected $attributesType = GoogleCloudRetailV2CustomAttribute::class;
  protected $attributesDataType = 'map';
  public $availability;
  public $availableQuantity;
  public $availableTime;
  public $categories;
  public $description;
  public $id;
  protected $imagesType = GoogleCloudRetailV2Image::class;
  protected $imagesDataType = 'array';
  public $name;
  protected $priceInfoType = GoogleCloudRetailV2PriceInfo::class;
  protected $priceInfoDataType = '';
  public $primaryProductId;
  public $tags;
  public $title;
  public $type;
  public $uri;

  /**
   * @param GoogleCloudRetailV2CustomAttribute[]
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return GoogleCloudRetailV2CustomAttribute[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  public function getAvailability()
  {
    return $this->availability;
  }
  public function setAvailableQuantity($availableQuantity)
  {
    $this->availableQuantity = $availableQuantity;
  }
  public function getAvailableQuantity()
  {
    return $this->availableQuantity;
  }
  public function setAvailableTime($availableTime)
  {
    $this->availableTime = $availableTime;
  }
  public function getAvailableTime()
  {
    return $this->availableTime;
  }
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  public function getCategories()
  {
    return $this->categories;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param GoogleCloudRetailV2Image[]
   */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /**
   * @return GoogleCloudRetailV2Image[]
   */
  public function getImages()
  {
    return $this->images;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GoogleCloudRetailV2PriceInfo
   */
  public function setPriceInfo(GoogleCloudRetailV2PriceInfo $priceInfo)
  {
    $this->priceInfo = $priceInfo;
  }
  /**
   * @return GoogleCloudRetailV2PriceInfo
   */
  public function getPriceInfo()
  {
    return $this->priceInfo;
  }
  public function setPrimaryProductId($primaryProductId)
  {
    $this->primaryProductId = $primaryProductId;
  }
  public function getPrimaryProductId()
  {
    return $this->primaryProductId;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2Product::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Product');
