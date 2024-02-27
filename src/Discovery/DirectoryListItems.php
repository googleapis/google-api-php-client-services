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

namespace Google\Service\Discovery;

class DirectoryListItems extends \Google\Collection
{
  protected $collection_key = 'labels';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $discoveryLink;
  /**
   * @var string
   */
  public $discoveryRestUrl;
  /**
   * @var string
   */
  public $documentationLink;
  protected $iconsType = DirectoryListItemsIcons::class;
  protected $iconsDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $preferred;
  /**
   * @var string
   */
  public $title;
  /**
   * @var string
   */
  public $version;

  /**
   * @param string
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
   * @param string
   */
  public function setDiscoveryLink($discoveryLink)
  {
    $this->discoveryLink = $discoveryLink;
  }
  /**
   * @return string
   */
  public function getDiscoveryLink()
  {
    return $this->discoveryLink;
  }
  /**
   * @param string
   */
  public function setDiscoveryRestUrl($discoveryRestUrl)
  {
    $this->discoveryRestUrl = $discoveryRestUrl;
  }
  /**
   * @return string
   */
  public function getDiscoveryRestUrl()
  {
    return $this->discoveryRestUrl;
  }
  /**
   * @param string
   */
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  /**
   * @return string
   */
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
  /**
   * @param DirectoryListItemsIcons
   */
  public function setIcons(DirectoryListItemsIcons $icons)
  {
    $this->icons = $icons;
  }
  /**
   * @return DirectoryListItemsIcons
   */
  public function getIcons()
  {
    return $this->icons;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param bool
   */
  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
  /**
   * @return bool
   */
  public function getPreferred()
  {
    return $this->preferred;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DirectoryListItems::class, 'Google_Service_Discovery_DirectoryListItems');
