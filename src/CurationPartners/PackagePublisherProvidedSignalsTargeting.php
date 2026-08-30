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

namespace Google\Service\CurationPartners;

class PackagePublisherProvidedSignalsTargeting extends \Google\Model
{
  protected $audienceTargetingType = TaxonomyTargeting::class;
  protected $audienceTargetingDataType = '';
  protected $contentTargetingType = TaxonomyTargeting::class;
  protected $contentTargetingDataType = '';
  protected $videoAndAudioSignalsTargetingType = StringTargetingDimension::class;
  protected $videoAndAudioSignalsTargetingDataType = '';

  /**
   * Optional. The list of targeted or excluded audience IDs. Based off of IAB
   * Audience Taxonomy version 1.1 (https://github.com/InteractiveAdvertisingBur
   * eau/Taxonomies/blob/main/Audience%20Taxonomies/Audience%20Taxonomy%201.1.ts
   * v)
   *
   * @param TaxonomyTargeting $audienceTargeting
   */
  public function setAudienceTargeting(TaxonomyTargeting $audienceTargeting)
  {
    $this->audienceTargeting = $audienceTargeting;
  }
  /**
   * @return TaxonomyTargeting
   */
  public function getAudienceTargeting()
  {
    return $this->audienceTargeting;
  }
  /**
   * Optional. The list of targeted or excluded content IDs. Based off of IAB
   * Content Taxonomy version 2.2 (https://github.com/InteractiveAdvertisingBure
   * au/Taxonomies/blob/main/Content%20Taxonomies/Content%20Taxonomy%202.2.tsv)
   *
   * @param TaxonomyTargeting $contentTargeting
   */
  public function setContentTargeting(TaxonomyTargeting $contentTargeting)
  {
    $this->contentTargeting = $contentTargeting;
  }
  /**
   * @return TaxonomyTargeting
   */
  public function getContentTargeting()
  {
    return $this->contentTargeting;
  }
  /**
   * Optional. The list of targeted and excluded video and audio signals IDs.
   * These are additional signals supported by publisher provided signals.
   *
   * @param StringTargetingDimension $videoAndAudioSignalsTargeting
   */
  public function setVideoAndAudioSignalsTargeting(StringTargetingDimension $videoAndAudioSignalsTargeting)
  {
    $this->videoAndAudioSignalsTargeting = $videoAndAudioSignalsTargeting;
  }
  /**
   * @return StringTargetingDimension
   */
  public function getVideoAndAudioSignalsTargeting()
  {
    return $this->videoAndAudioSignalsTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PackagePublisherProvidedSignalsTargeting::class, 'Google_Service_CurationPartners_PackagePublisherProvidedSignalsTargeting');
