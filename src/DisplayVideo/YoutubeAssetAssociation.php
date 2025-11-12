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

namespace Google\Service\DisplayVideo;

class YoutubeAssetAssociation extends \Google\Model
{
  protected $linkedYoutubeAssetType = YoutubeAssetAssociationLinkedYouTubeAsset::class;
  protected $linkedYoutubeAssetDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $youtubeAssetType;

  /**
   * @param YoutubeAssetAssociationLinkedYouTubeAsset
   */
  public function setLinkedYoutubeAsset(YoutubeAssetAssociationLinkedYouTubeAsset $linkedYoutubeAsset)
  {
    $this->linkedYoutubeAsset = $linkedYoutubeAsset;
  }
  /**
   * @return YoutubeAssetAssociationLinkedYouTubeAsset
   */
  public function getLinkedYoutubeAsset()
  {
    return $this->linkedYoutubeAsset;
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
   * @param string
   */
  public function setYoutubeAssetType($youtubeAssetType)
  {
    $this->youtubeAssetType = $youtubeAssetType;
  }
  /**
   * @return string
   */
  public function getYoutubeAssetType()
  {
    return $this->youtubeAssetType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeAssetAssociation::class, 'Google_Service_DisplayVideo_YoutubeAssetAssociation');
