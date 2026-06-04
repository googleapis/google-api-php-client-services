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

class GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesResponse extends \Google\Collection
{
  protected $collection_key = 'unusableAdGroups';
  protected $adGroupKeywordSuggestionsType = GoogleAdsSearchads360V23ServicesAdGroupKeywordSuggestion::class;
  protected $adGroupKeywordSuggestionsDataType = 'array';
  protected $unusableAdGroupsType = GoogleAdsSearchads360V23ServicesUnusableAdGroup::class;
  protected $unusableAdGroupsDataType = 'array';

  /**
   * A list of suggested AdGroup/keyword pairings.
   *
   * @param GoogleAdsSearchads360V23ServicesAdGroupKeywordSuggestion[] $adGroupKeywordSuggestions
   */
  public function setAdGroupKeywordSuggestions($adGroupKeywordSuggestions)
  {
    $this->adGroupKeywordSuggestions = $adGroupKeywordSuggestions;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdGroupKeywordSuggestion[]
   */
  public function getAdGroupKeywordSuggestions()
  {
    return $this->adGroupKeywordSuggestions;
  }
  /**
   * A list of provided AdGroups that could not be used as suggestions.
   *
   * @param GoogleAdsSearchads360V23ServicesUnusableAdGroup[] $unusableAdGroups
   */
  public function setUnusableAdGroups($unusableAdGroups)
  {
    $this->unusableAdGroups = $unusableAdGroups;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesUnusableAdGroup[]
   */
  public function getUnusableAdGroups()
  {
    return $this->unusableAdGroups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateAdGroupThemesResponse');
