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

class GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionResponse extends \Google\Collection
{
  protected $collection_key = 'mediumRelevanceAttributes';
  protected $highRelevanceAttributesType = GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata::class;
  protected $highRelevanceAttributesDataType = 'array';
  protected $mediumRelevanceAttributesType = GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata::class;
  protected $mediumRelevanceAttributesDataType = 'array';

  /**
   * The attributes that make up the audience definition.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata[] $highRelevanceAttributes
   */
  public function setHighRelevanceAttributes($highRelevanceAttributes)
  {
    $this->highRelevanceAttributes = $highRelevanceAttributes;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata[]
   */
  public function getHighRelevanceAttributes()
  {
    return $this->highRelevanceAttributes;
  }
  /**
   * Additional attributes that are less relevant but still related to the
   * audience description. Use these attributes to broaden the audience
   * definition to reach more users.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata[] $mediumRelevanceAttributes
   */
  public function setMediumRelevanceAttributes($mediumRelevanceAttributes)
  {
    $this->mediumRelevanceAttributes = $mediumRelevanceAttributes;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata[]
   */
  public function getMediumRelevanceAttributes()
  {
    return $this->mediumRelevanceAttributes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionResponse');
