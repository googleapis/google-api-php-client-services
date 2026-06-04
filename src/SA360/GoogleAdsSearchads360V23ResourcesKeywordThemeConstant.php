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

class GoogleAdsSearchads360V23ResourcesKeywordThemeConstant extends \Google\Model
{
  /**
   * Output only. The ISO-3166 Alpha-2 country code of the constant, eg. "US".
   * To display and query matching purpose, the keyword theme needs to be
   * localized.
   *
   * @var string
   */
  public $countryCode;
  /**
   * Output only. The display name of the keyword theme or sub keyword theme.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The ISO-639-1 language code with 2 letters of the constant,
   * eg. "en". To display and query matching purpose, the keyword theme needs to
   * be localized.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Output only. The resource name of the keyword theme constant. Keyword theme
   * constant resource names have the form:
   * `keywordThemeConstants/{keyword_theme_id}~{sub_keyword_theme_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. The ISO-3166 Alpha-2 country code of the constant, eg. "US".
   * To display and query matching purpose, the keyword theme needs to be
   * localized.
   *
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * Output only. The display name of the keyword theme or sub keyword theme.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. The ISO-639-1 language code with 2 letters of the constant,
   * eg. "en". To display and query matching purpose, the keyword theme needs to
   * be localized.
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
   * Output only. The resource name of the keyword theme constant. Keyword theme
   * constant resource names have the form:
   * `keywordThemeConstants/{keyword_theme_id}~{sub_keyword_theme_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesKeywordThemeConstant::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesKeywordThemeConstant');
