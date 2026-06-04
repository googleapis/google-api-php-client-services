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

class GoogleAdsSearchads360V23CommonCriterionCategoryLocaleAvailability extends \Google\Model
{
  /**
   * Not specified.
   */
  public const AVAILABILITY_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const AVAILABILITY_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * The category is available to campaigns of all locales.
   */
  public const AVAILABILITY_MODE_ALL_LOCALES = 'ALL_LOCALES';
  /**
   * The category is available to campaigns within a list of countries,
   * regardless of language.
   */
  public const AVAILABILITY_MODE_COUNTRY_AND_ALL_LANGUAGES = 'COUNTRY_AND_ALL_LANGUAGES';
  /**
   * The category is available to campaigns within a list of languages,
   * regardless of country.
   */
  public const AVAILABILITY_MODE_LANGUAGE_AND_ALL_COUNTRIES = 'LANGUAGE_AND_ALL_COUNTRIES';
  /**
   * The category is available to campaigns within a list of country, language
   * pairs.
   */
  public const AVAILABILITY_MODE_COUNTRY_AND_LANGUAGE = 'COUNTRY_AND_LANGUAGE';
  /**
   * Format of the locale availability. Can be LAUNCHED_TO_ALL (both country and
   * language will be empty), COUNTRY (only country will be set), LANGUAGE (only
   * language wil be set), COUNTRY_AND_LANGUAGE (both country and language will
   * be set).
   *
   * @var string
   */
  public $availabilityMode;
  /**
   * The ISO-3166-1 alpha-2 country code associated with the category.
   *
   * @var string
   */
  public $countryCode;
  /**
   * ISO 639-1 code of the language associated with the category.
   *
   * @var string
   */
  public $languageCode;

  /**
   * Format of the locale availability. Can be LAUNCHED_TO_ALL (both country and
   * language will be empty), COUNTRY (only country will be set), LANGUAGE (only
   * language wil be set), COUNTRY_AND_LANGUAGE (both country and language will
   * be set).
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ALL_LOCALES,
   * COUNTRY_AND_ALL_LANGUAGES, LANGUAGE_AND_ALL_COUNTRIES, COUNTRY_AND_LANGUAGE
   *
   * @param self::AVAILABILITY_MODE_* $availabilityMode
   */
  public function setAvailabilityMode($availabilityMode)
  {
    $this->availabilityMode = $availabilityMode;
  }
  /**
   * @return self::AVAILABILITY_MODE_*
   */
  public function getAvailabilityMode()
  {
    return $this->availabilityMode;
  }
  /**
   * The ISO-3166-1 alpha-2 country code associated with the category.
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
   * ISO 639-1 code of the language associated with the category.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCriterionCategoryLocaleAvailability::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCriterionCategoryLocaleAvailability');
