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

class GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest extends \Google\Collection
{
  protected $collection_key = 'placeIds';
  /**
   * Required. The language specifications in BCP 47 format (for example, en-US,
   * zh-CN, etc.) for the asset suggestions. Text will be in this language.
   * Usually matches one of the campaign target languages.
   *
   * @var string
   */
  public $languageOption;
  /**
   * The Google Maps Place IDs of hotels for which assets are requested. See
   * https://developers.google.com/places/web-service/place-id for more
   * information.
   *
   * @var string[]
   */
  public $placeIds;

  /**
   * Required. The language specifications in BCP 47 format (for example, en-US,
   * zh-CN, etc.) for the asset suggestions. Text will be in this language.
   * Usually matches one of the campaign target languages.
   *
   * @param string $languageOption
   */
  public function setLanguageOption($languageOption)
  {
    $this->languageOption = $languageOption;
  }
  /**
   * @return string
   */
  public function getLanguageOption()
  {
    return $this->languageOption;
  }
  /**
   * The Google Maps Place IDs of hotels for which assets are requested. See
   * https://developers.google.com/places/web-service/place-id for more
   * information.
   *
   * @param string[] $placeIds
   */
  public function setPlaceIds($placeIds)
  {
    $this->placeIds = $placeIds;
  }
  /**
   * @return string[]
   */
  public function getPlaceIds()
  {
    return $this->placeIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest');
