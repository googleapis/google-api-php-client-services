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

class GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsResponse extends \Google\Collection
{
  protected $collection_key = 'sections';
  protected $sectionsType = GoogleAdsSearchads360V23ServicesAudienceCompositionSection::class;
  protected $sectionsDataType = 'array';

  /**
   * The contents of the insights report, organized into sections. Each section
   * is associated with one of the AudienceInsightsDimension values in the
   * request. There may be more than one section per dimension.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceCompositionSection[] $sections
   */
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceCompositionSection[]
   */
  public function getSections()
  {
    return $this->sections;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsResponse');
