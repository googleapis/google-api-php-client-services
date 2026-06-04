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

class GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsRequest extends \Google\Model
{
  /**
   * Upper-case, two-letter country code as defined by ISO-3166. This for
   * refining the scope of the query, default to 'US' if not set.
   *
   * @var string
   */
  public $countryCode;
  /**
   * The two letter language code for get corresponding keyword theme for
   * refining the scope of the query, default to 'en' if not set.
   *
   * @var string
   */
  public $languageCode;
  /**
   * The query text of a keyword theme that will be used to map to similar
   * keyword themes. For example, "plumber" or "roofer".
   *
   * @var string
   */
  public $queryText;

  /**
   * Upper-case, two-letter country code as defined by ISO-3166. This for
   * refining the scope of the query, default to 'US' if not set.
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
   * The two letter language code for get corresponding keyword theme for
   * refining the scope of the query, default to 'en' if not set.
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
   * The query text of a keyword theme that will be used to map to similar
   * keyword themes. For example, "plumber" or "roofer".
   *
   * @param string $queryText
   */
  public function setQueryText($queryText)
  {
    $this->queryText = $queryText;
  }
  /**
   * @return string
   */
  public function getQueryText()
  {
    return $this->queryText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsRequest');
