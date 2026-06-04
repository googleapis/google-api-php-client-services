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

class GoogleAdsSearchads360V23ServicesIncentive extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Unknown incentive type. Should not be used as a value explicitly.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * An acquisition incentive.
   */
  public const TYPE_ACQUISITION = 'ACQUISITION';
  /**
   * The incentive ID of this incentive. This is used to identify which
   * incentive is selected by the user in the CYO flow.
   *
   * @var string
   */
  public $incentiveId;
  /**
   * The URL of the terms and conditions for THIS incentive offer ONLY. This is
   * different from the terms_and_conditions_url field in
   * AcquisitionIncentiveOffer which is a combination of all the Incentive
   * offers in a CYO offer.
   *
   * @var string
   */
  public $incentiveTermsAndConditionsUrl;
  protected $requirementType = GoogleAdsSearchads360V23ServicesIncentiveRequirement::class;
  protected $requirementDataType = '';
  /**
   * The type of the incentive.
   *
   * @var string
   */
  public $type;

  /**
   * The incentive ID of this incentive. This is used to identify which
   * incentive is selected by the user in the CYO flow.
   *
   * @param string $incentiveId
   */
  public function setIncentiveId($incentiveId)
  {
    $this->incentiveId = $incentiveId;
  }
  /**
   * @return string
   */
  public function getIncentiveId()
  {
    return $this->incentiveId;
  }
  /**
   * The URL of the terms and conditions for THIS incentive offer ONLY. This is
   * different from the terms_and_conditions_url field in
   * AcquisitionIncentiveOffer which is a combination of all the Incentive
   * offers in a CYO offer.
   *
   * @param string $incentiveTermsAndConditionsUrl
   */
  public function setIncentiveTermsAndConditionsUrl($incentiveTermsAndConditionsUrl)
  {
    $this->incentiveTermsAndConditionsUrl = $incentiveTermsAndConditionsUrl;
  }
  /**
   * @return string
   */
  public function getIncentiveTermsAndConditionsUrl()
  {
    return $this->incentiveTermsAndConditionsUrl;
  }
  /**
   * The requirement for this incentive.
   *
   * @param GoogleAdsSearchads360V23ServicesIncentiveRequirement $requirement
   */
  public function setRequirement(GoogleAdsSearchads360V23ServicesIncentiveRequirement $requirement)
  {
    $this->requirement = $requirement;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIncentiveRequirement
   */
  public function getRequirement()
  {
    return $this->requirement;
  }
  /**
   * The type of the incentive.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACQUISITION
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
class_alias(GoogleAdsSearchads360V23ServicesIncentive::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIncentive');
