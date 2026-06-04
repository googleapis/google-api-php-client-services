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

class GoogleAdsSearchads360V23ServicesIncentiveOffer extends \Google\Model
{
  /**
   * Unknown offer type. Should not be used as a value explicitly.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Unknown offer type.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * An offer with no incentive.
   */
  public const TYPE_NO_INCENTIVE = 'NO_INCENTIVE';
  /**
   * A CYO (Choose-Your-Own) offer with multiple incentives to choose from.
   */
  public const TYPE_CYO_INCENTIVE = 'CYO_INCENTIVE';
  /**
   * Optional. The URL of the terms and conditions for the incentive offer.
   *
   * @var string
   */
  public $consolidatedTermsAndConditionsUrl;
  protected $cyoIncentivesType = GoogleAdsSearchads360V23ServicesCyoIncentives::class;
  protected $cyoIncentivesDataType = '';
  /**
   * Required. The type of this acquisition incentive offer.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The URL of the terms and conditions for the incentive offer.
   *
   * @param string $consolidatedTermsAndConditionsUrl
   */
  public function setConsolidatedTermsAndConditionsUrl($consolidatedTermsAndConditionsUrl)
  {
    $this->consolidatedTermsAndConditionsUrl = $consolidatedTermsAndConditionsUrl;
  }
  /**
   * @return string
   */
  public function getConsolidatedTermsAndConditionsUrl()
  {
    return $this->consolidatedTermsAndConditionsUrl;
  }
  /**
   * CYO incentives. Set when type is CYO_INCENTIVE.
   *
   * @param GoogleAdsSearchads360V23ServicesCyoIncentives $cyoIncentives
   */
  public function setCyoIncentives(GoogleAdsSearchads360V23ServicesCyoIncentives $cyoIncentives)
  {
    $this->cyoIncentives = $cyoIncentives;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCyoIncentives
   */
  public function getCyoIncentives()
  {
    return $this->cyoIncentives;
  }
  /**
   * Required. The type of this acquisition incentive offer.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NO_INCENTIVE, CYO_INCENTIVE
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesIncentiveOffer::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIncentiveOffer');
