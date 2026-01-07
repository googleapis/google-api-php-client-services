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

namespace Google\Service\AndroidPublisher;

class RegionalProductAgeRatingInfo extends \Google\Model
{
  /**
   * Unknown age rating tier.
   */
  public const PRODUCT_AGE_RATING_TIER_PRODUCT_AGE_RATING_TIER_UNKNOWN = 'PRODUCT_AGE_RATING_TIER_UNKNOWN';
  /**
   * Age rating tier for products that are appropriate for all ages.
   */
  public const PRODUCT_AGE_RATING_TIER_PRODUCT_AGE_RATING_TIER_EVERYONE = 'PRODUCT_AGE_RATING_TIER_EVERYONE';
  /**
   * Age rating tier for products that are appropriate for 13 years and above.
   */
  public const PRODUCT_AGE_RATING_TIER_PRODUCT_AGE_RATING_TIER_THIRTEEN_AND_ABOVE = 'PRODUCT_AGE_RATING_TIER_THIRTEEN_AND_ABOVE';
  /**
   * Age rating tier for products that are appropriate for 16 years and above.
   */
  public const PRODUCT_AGE_RATING_TIER_PRODUCT_AGE_RATING_TIER_SIXTEEN_AND_ABOVE = 'PRODUCT_AGE_RATING_TIER_SIXTEEN_AND_ABOVE';
  /**
   * Age rating tier for products that are appropriate for 18 years and above.
   */
  public const PRODUCT_AGE_RATING_TIER_PRODUCT_AGE_RATING_TIER_EIGHTEEN_AND_ABOVE = 'PRODUCT_AGE_RATING_TIER_EIGHTEEN_AND_ABOVE';
  /**
   * The age rating tier of a product for the given region.
   *
   * @var string
   */
  public $productAgeRatingTier;
  /**
   * Region code this configuration applies to, as defined by ISO 3166-2, e.g.
   * "US".
   *
   * @var string
   */
  public $regionCode;

  /**
   * The age rating tier of a product for the given region.
   *
   * Accepted values: PRODUCT_AGE_RATING_TIER_UNKNOWN,
   * PRODUCT_AGE_RATING_TIER_EVERYONE,
   * PRODUCT_AGE_RATING_TIER_THIRTEEN_AND_ABOVE,
   * PRODUCT_AGE_RATING_TIER_SIXTEEN_AND_ABOVE,
   * PRODUCT_AGE_RATING_TIER_EIGHTEEN_AND_ABOVE
   *
   * @param self::PRODUCT_AGE_RATING_TIER_* $productAgeRatingTier
   */
  public function setProductAgeRatingTier($productAgeRatingTier)
  {
    $this->productAgeRatingTier = $productAgeRatingTier;
  }
  /**
   * @return self::PRODUCT_AGE_RATING_TIER_*
   */
  public function getProductAgeRatingTier()
  {
    return $this->productAgeRatingTier;
  }
  /**
   * Region code this configuration applies to, as defined by ISO 3166-2, e.g.
   * "US".
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RegionalProductAgeRatingInfo::class, 'Google_Service_AndroidPublisher_RegionalProductAgeRatingInfo');
