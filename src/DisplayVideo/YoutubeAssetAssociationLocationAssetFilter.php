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

class YoutubeAssetAssociationLocationAssetFilter extends \Google\Model
{
  /**
   * @var string
   */
  public $assetSetId;
  protected $locationMatchingFunctionType = YoutubeAssetAssociationLocationAssetFilterLocationMatchingFunction::class;
  protected $locationMatchingFunctionDataType = '';
  /**
   * @var string
   */
  public $locationMatchingType;

  /**
   * @param string
   */
  public function setAssetSetId($assetSetId)
  {
    $this->assetSetId = $assetSetId;
  }
  /**
   * @return string
   */
  public function getAssetSetId()
  {
    return $this->assetSetId;
  }
  /**
   * @param YoutubeAssetAssociationLocationAssetFilterLocationMatchingFunction
   */
  public function setLocationMatchingFunction(YoutubeAssetAssociationLocationAssetFilterLocationMatchingFunction $locationMatchingFunction)
  {
    $this->locationMatchingFunction = $locationMatchingFunction;
  }
  /**
   * @return YoutubeAssetAssociationLocationAssetFilterLocationMatchingFunction
   */
  public function getLocationMatchingFunction()
  {
    return $this->locationMatchingFunction;
  }
  /**
   * @param string
   */
  public function setLocationMatchingType($locationMatchingType)
  {
    $this->locationMatchingType = $locationMatchingType;
  }
  /**
   * @return string
   */
  public function getLocationMatchingType()
  {
    return $this->locationMatchingType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeAssetAssociationLocationAssetFilter::class, 'Google_Service_DisplayVideo_YoutubeAssetAssociationLocationAssetFilter');
