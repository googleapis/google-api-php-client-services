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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesAudienceOverlapItem extends \Google\Model
{
  protected $attributeMetadataType = GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata::class;
  protected $attributeMetadataDataType = '';
  /**
   * The estimated size of the intersection of this audience attribute with the
   * primary attribute, that is, the number of reachable YouTube users who match
   * BOTH the primary attribute and this one.
   *
   * @var string
   */
  public $potentialYoutubeReachIntersection;

  /**
   * The attribute and its metadata, including potential YouTube reach.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata $attributeMetadata
   */
  public function setAttributeMetadata(GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata $attributeMetadata)
  {
    $this->attributeMetadata = $attributeMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata
   */
  public function getAttributeMetadata()
  {
    return $this->attributeMetadata;
  }
  /**
   * The estimated size of the intersection of this audience attribute with the
   * primary attribute, that is, the number of reachable YouTube users who match
   * BOTH the primary attribute and this one.
   *
   * @param string $potentialYoutubeReachIntersection
   */
  public function setPotentialYoutubeReachIntersection($potentialYoutubeReachIntersection)
  {
    $this->potentialYoutubeReachIntersection = $potentialYoutubeReachIntersection;
  }
  /**
   * @return string
   */
  public function getPotentialYoutubeReachIntersection()
  {
    return $this->potentialYoutubeReachIntersection;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAudienceOverlapItem::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAudienceOverlapItem');
