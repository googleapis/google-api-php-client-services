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

class GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings extends \Google\Model
{
  /**
   * Not specified.
   */
  public const OPTIMIZATION_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const OPTIMIZATION_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * The mode is used when campaign is optimizing equally for existing and new
   * customers, which is the default value.
   */
  public const OPTIMIZATION_MODE_TARGET_ALL_EQUALLY = 'TARGET_ALL_EQUALLY';
  /**
   * The mode is used when campaign is bidding higher for new customers than
   * existing customer.
   */
  public const OPTIMIZATION_MODE_BID_HIGHER_FOR_NEW_CUSTOMER = 'BID_HIGHER_FOR_NEW_CUSTOMER';
  /**
   * The mode is used when campaign is only optimizing for new customers.
   */
  public const OPTIMIZATION_MODE_TARGET_NEW_CUSTOMER = 'TARGET_NEW_CUSTOMER';
  /**
   * Output only. Customer acquisition optimization mode of this campaign.
   *
   * @var string
   */
  public $optimizationMode;
  protected $valueSettingsType = GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings::class;
  protected $valueSettingsDataType = '';

  /**
   * Output only. Customer acquisition optimization mode of this campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TARGET_ALL_EQUALLY,
   * BID_HIGHER_FOR_NEW_CUSTOMER, TARGET_NEW_CUSTOMER
   *
   * @param self::OPTIMIZATION_MODE_* $optimizationMode
   */
  public function setOptimizationMode($optimizationMode)
  {
    $this->optimizationMode = $optimizationMode;
  }
  /**
   * @return self::OPTIMIZATION_MODE_*
   */
  public function getOptimizationMode()
  {
    return $this->optimizationMode;
  }
  /**
   * Output only. Campaign specific values for the customer acquisition goal.
   *
   * @param GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings $valueSettings
   */
  public function setValueSettings(GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings $valueSettings)
  {
    $this->valueSettings = $valueSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings
   */
  public function getValueSettings()
  {
    return $this->valueSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings');
