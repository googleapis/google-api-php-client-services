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

class GoogleAdsSearchads360V23CommonHotelCalloutAsset extends \Google\Model
{
  /**
   * Required. The language of the hotel callout. Represented as BCP 47 language
   * tag.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Required. The text of the hotel callout asset. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @var string
   */
  public $text;

  /**
   * Required. The language of the hotel callout. Represented as BCP 47 language
   * tag.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Required. The text of the hotel callout asset. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonHotelCalloutAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHotelCalloutAsset');
