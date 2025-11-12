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

class YoutubeAssetAssociationAffiliateLocationAssetFilter extends \Google\Model
{
  protected $affiliateLocationMatchingFunctionType = YoutubeAssetAssociationAffiliateLocationAssetFilterAffiliateLocationMatchingFunction::class;
  protected $affiliateLocationMatchingFunctionDataType = '';
  /**
   * @var string
   */
  public $affiliateLocationMatchingType;
  /**
   * @var string
   */
  public $assetSetId;

  /**
   * @param YoutubeAssetAssociationAffiliateLocationAssetFilterAffiliateLocationMatchingFunction
   */
  public function setAffiliateLocationMatchingFunction(YoutubeAssetAssociationAffiliateLocationAssetFilterAffiliateLocationMatchingFunction $affiliateLocationMatchingFunction)
  {
    $this->affiliateLocationMatchingFunction = $affiliateLocationMatchingFunction;
  }
  /**
   * @return YoutubeAssetAssociationAffiliateLocationAssetFilterAffiliateLocationMatchingFunction
   */
  public function getAffiliateLocationMatchingFunction()
  {
    return $this->affiliateLocationMatchingFunction;
  }
  /**
   * @param string
   */
  public function setAffiliateLocationMatchingType($affiliateLocationMatchingType)
  {
    $this->affiliateLocationMatchingType = $affiliateLocationMatchingType;
  }
  /**
   * @return string
   */
  public function getAffiliateLocationMatchingType()
  {
    return $this->affiliateLocationMatchingType;
  }
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeAssetAssociationAffiliateLocationAssetFilter::class, 'Google_Service_DisplayVideo_YoutubeAssetAssociationAffiliateLocationAssetFilter');
