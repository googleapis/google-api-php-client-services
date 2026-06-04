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

class GoogleAdsSearchads360V23ServicesAudienceCompositionAttribute extends \Google\Model
{
  protected $attributeMetadataType = GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata::class;
  protected $attributeMetadataDataType = '';
  protected $metricsType = GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics::class;
  protected $metricsDataType = '';

  /**
   * The attribute with its metadata.
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
   * Share and index metrics for the attribute.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics $metrics
   */
  public function setMetrics(GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAudienceCompositionAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAudienceCompositionAttribute');
