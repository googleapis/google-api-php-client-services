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

namespace Google\Service\DisplayVideo;

class DemandGenSettings extends \Google\Model
{
  /**
   * Optional. Immutable. Whether location and language targeting can be set at
   * the line item level. Otherwise, relevant targeting types must be assigned
   * directly to ad groups.
   *
   * @var bool
   */
  public $geoLanguageTargetingEnabled;
  /**
   * Optional. The ID of the Merchant Center account used to provide a product
   * feed. This Merchant Center account must already be linked to the
   * advertiser.
   *
   * @var string
   */
  public $linkedMerchantId;
  protected $thirdPartyMeasurementConfigsType = ThirdPartyMeasurementConfigs::class;
  protected $thirdPartyMeasurementConfigsDataType = '';

  /**
   * Optional. Immutable. Whether location and language targeting can be set at
   * the line item level. Otherwise, relevant targeting types must be assigned
   * directly to ad groups.
   *
   * @param bool $geoLanguageTargetingEnabled
   */
  public function setGeoLanguageTargetingEnabled($geoLanguageTargetingEnabled)
  {
    $this->geoLanguageTargetingEnabled = $geoLanguageTargetingEnabled;
  }
  /**
   * @return bool
   */
  public function getGeoLanguageTargetingEnabled()
  {
    return $this->geoLanguageTargetingEnabled;
  }
  /**
   * Optional. The ID of the Merchant Center account used to provide a product
   * feed. This Merchant Center account must already be linked to the
   * advertiser.
   *
   * @param string $linkedMerchantId
   */
  public function setLinkedMerchantId($linkedMerchantId)
  {
    $this->linkedMerchantId = $linkedMerchantId;
  }
  /**
   * @return string
   */
  public function getLinkedMerchantId()
  {
    return $this->linkedMerchantId;
  }
  /**
   * Optional. The third party measurement settings for the Demand Gen line
   * item.
   *
   * @param ThirdPartyMeasurementConfigs $thirdPartyMeasurementConfigs
   */
  public function setThirdPartyMeasurementConfigs(ThirdPartyMeasurementConfigs $thirdPartyMeasurementConfigs)
  {
    $this->thirdPartyMeasurementConfigs = $thirdPartyMeasurementConfigs;
  }
  /**
   * @return ThirdPartyMeasurementConfigs
   */
  public function getThirdPartyMeasurementConfigs()
  {
    return $this->thirdPartyMeasurementConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DemandGenSettings::class, 'Google_Service_DisplayVideo_DemandGenSettings');
