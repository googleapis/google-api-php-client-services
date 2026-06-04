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

class GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation extends \Google\Model
{
  protected $adType = GoogleAdsSearchads360V23ResourcesAd::class;
  protected $adDataType = '';
  /**
   * Output only. Date, if present, is the earliest when the recommendation will
   * be auto applied. YYYY-MM-DD format, for example, 2018-04-17.
   *
   * @var string
   */
  public $autoApplyDate;
  /**
   * Output only. Creation date of the recommended ad. YYYY-MM-DD format, for
   * example, 2018-04-17.
   *
   * @var string
   */
  public $creationDate;

  /**
   * Output only. Recommended ad.
   *
   * @param GoogleAdsSearchads360V23ResourcesAd $ad
   */
  public function setAd(GoogleAdsSearchads360V23ResourcesAd $ad)
  {
    $this->ad = $ad;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAd
   */
  public function getAd()
  {
    return $this->ad;
  }
  /**
   * Output only. Date, if present, is the earliest when the recommendation will
   * be auto applied. YYYY-MM-DD format, for example, 2018-04-17.
   *
   * @param string $autoApplyDate
   */
  public function setAutoApplyDate($autoApplyDate)
  {
    $this->autoApplyDate = $autoApplyDate;
  }
  /**
   * @return string
   */
  public function getAutoApplyDate()
  {
    return $this->autoApplyDate;
  }
  /**
   * Output only. Creation date of the recommended ad. YYYY-MM-DD format, for
   * example, 2018-04-17.
   *
   * @param string $creationDate
   */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /**
   * @return string
   */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationTextAdRecommendation');
