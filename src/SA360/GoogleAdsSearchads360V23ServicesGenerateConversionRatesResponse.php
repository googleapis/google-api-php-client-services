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

class GoogleAdsSearchads360V23ServicesGenerateConversionRatesResponse extends \Google\Collection
{
  protected $collection_key = 'conversionRateSuggestions';
  protected $conversionRateSuggestionsType = GoogleAdsSearchads360V23ServicesConversionRateSuggestion::class;
  protected $conversionRateSuggestionsDataType = 'array';

  /**
   * A list containing conversion rate suggestions. Each repeated element will
   * have an associated product code. Multiple suggestions may share the same
   * product code.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionRateSuggestion[] $conversionRateSuggestions
   */
  public function setConversionRateSuggestions($conversionRateSuggestions)
  {
    $this->conversionRateSuggestions = $conversionRateSuggestions;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionRateSuggestion[]
   */
  public function getConversionRateSuggestions()
  {
    return $this->conversionRateSuggestions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateConversionRatesResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateConversionRatesResponse');
