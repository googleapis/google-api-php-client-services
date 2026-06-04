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

class GoogleAdsSearchads360V23CommonCriterionCategoryAvailability extends \Google\Collection
{
  protected $collection_key = 'locale';
  protected $channelType = GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability::class;
  protected $channelDataType = '';
  protected $localeType = GoogleAdsSearchads360V23CommonCriterionCategoryLocaleAvailability::class;
  protected $localeDataType = 'array';

  /**
   * Channel types and subtypes that are available to the category.
   *
   * @param GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability $channel
   */
  public function setChannel(GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability $channel)
  {
    $this->channel = $channel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability
   */
  public function getChannel()
  {
    return $this->channel;
  }
  /**
   * Locales that are available to the category for the channel.
   *
   * @param GoogleAdsSearchads360V23CommonCriterionCategoryLocaleAvailability[] $locale
   */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCriterionCategoryLocaleAvailability[]
   */
  public function getLocale()
  {
    return $this->locale;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCriterionCategoryAvailability::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCriterionCategoryAvailability');
