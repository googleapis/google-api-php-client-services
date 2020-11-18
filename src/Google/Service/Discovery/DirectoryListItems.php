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

class Google_Service_Discovery_DirectoryListItems extends Google_Collection
{
  protected $collection_key = 'labels';
  public $description;
  public $discoveryLink;
  public $discoveryRestUrl;
  public $documentationLink;
  protected $iconsType = 'Google_Service_Discovery_DirectoryListItemsIcons';
  protected $iconsDataType = '';
  public $id;
  public $kind;
  public $labels;
  public $name;
  public $preferred;
  public $title;
  public $version;

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDiscoveryLink($discoveryLink)
  {
    $this->discoveryLink = $discoveryLink;
  }
  public function getDiscoveryLink()
  {
    return $this->discoveryLink;
  }
  public function setDiscoveryRestUrl($discoveryRestUrl)
  {
    $this->discoveryRestUrl = $discoveryRestUrl;
  }
  public function getDiscoveryRestUrl()
  {
    return $this->discoveryRestUrl;
  }
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
  /**
   * @param Google_Service_Discovery_DirectoryListItemsIcons
   */
  public function setIcons(Google_Service_Discovery_DirectoryListItemsIcons $icons)
  {
    $this->icons = $icons;
  }
  /**
   * @return Google_Service_Discovery_DirectoryListItemsIcons
   */
  public function getIcons()
  {
    return $this->icons;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }
  public function getPreferred()
  {
    return $this->preferred;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}
