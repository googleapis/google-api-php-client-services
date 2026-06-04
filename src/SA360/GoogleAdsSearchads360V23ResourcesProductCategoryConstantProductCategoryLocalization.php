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

class GoogleAdsSearchads360V23ResourcesProductCategoryConstantProductCategoryLocalization extends \Google\Model
{
  /**
   * Output only. Two-letter ISO 639-1 language code of the localized category.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Output only. Upper-case two-letter ISO 3166-1 country code of the localized
   * category.
   *
   * @var string
   */
  public $regionCode;
  /**
   * Output only. The name of the category in the specified locale.
   *
   * @var string
   */
  public $value;

  /**
   * Output only. Two-letter ISO 639-1 language code of the localized category.
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
   * Output only. Upper-case two-letter ISO 3166-1 country code of the localized
   * category.
   *
   * @param string $regionCode
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /**
   * Output only. The name of the category in the specified locale.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesProductCategoryConstantProductCategoryLocalization::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesProductCategoryConstantProductCategoryLocalization');
