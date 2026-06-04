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

class GoogleAdsSearchads360V23ServicesCyoIncentives extends \Google\Model
{
  protected $highOfferType = GoogleAdsSearchads360V23ServicesIncentive::class;
  protected $highOfferDataType = '';
  protected $lowOfferType = GoogleAdsSearchads360V23ServicesIncentive::class;
  protected $lowOfferDataType = '';
  protected $mediumOfferType = GoogleAdsSearchads360V23ServicesIncentive::class;
  protected $mediumOfferDataType = '';

  /**
   * Required. The CYO incentive with high target and award amounts.
   *
   * @param GoogleAdsSearchads360V23ServicesIncentive $highOffer
   */
  public function setHighOffer(GoogleAdsSearchads360V23ServicesIncentive $highOffer)
  {
    $this->highOffer = $highOffer;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIncentive
   */
  public function getHighOffer()
  {
    return $this->highOffer;
  }
  /**
   * Required. The CYO incentive with low target and award amounts.
   *
   * @param GoogleAdsSearchads360V23ServicesIncentive $lowOffer
   */
  public function setLowOffer(GoogleAdsSearchads360V23ServicesIncentive $lowOffer)
  {
    $this->lowOffer = $lowOffer;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIncentive
   */
  public function getLowOffer()
  {
    return $this->lowOffer;
  }
  /**
   * Required. The CYO incentive with medium target and award amounts.
   *
   * @param GoogleAdsSearchads360V23ServicesIncentive $mediumOffer
   */
  public function setMediumOffer(GoogleAdsSearchads360V23ServicesIncentive $mediumOffer)
  {
    $this->mediumOffer = $mediumOffer;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIncentive
   */
  public function getMediumOffer()
  {
    return $this->mediumOffer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCyoIncentives::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCyoIncentives');
