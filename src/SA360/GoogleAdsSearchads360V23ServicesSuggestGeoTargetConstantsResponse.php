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

class GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsResponse extends \Google\Collection
{
  protected $collection_key = 'geoTargetConstantSuggestions';
  protected $geoTargetConstantSuggestionsType = GoogleAdsSearchads360V23ServicesGeoTargetConstantSuggestion::class;
  protected $geoTargetConstantSuggestionsDataType = 'array';

  /**
   * Geo target constant suggestions.
   *
   * @param GoogleAdsSearchads360V23ServicesGeoTargetConstantSuggestion[] $geoTargetConstantSuggestions
   */
  public function setGeoTargetConstantSuggestions($geoTargetConstantSuggestions)
  {
    $this->geoTargetConstantSuggestions = $geoTargetConstantSuggestions;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGeoTargetConstantSuggestion[]
   */
  public function getGeoTargetConstantSuggestions()
  {
    return $this->geoTargetConstantSuggestions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsResponse');
