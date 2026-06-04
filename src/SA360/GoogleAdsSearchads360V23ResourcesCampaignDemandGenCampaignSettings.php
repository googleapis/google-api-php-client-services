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

class GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings extends \Google\Model
{
  /**
   * Immutable. Specifies whether this campaign uses upgraded targeting options.
   * When this field is set to `true`, you can use location and language
   * targeting at the ad group level as opposed to the standard campaign-level
   * targeting.
   *
   * @var bool
   */
  public $upgradedTargeting;

  /**
   * Immutable. Specifies whether this campaign uses upgraded targeting options.
   * When this field is set to `true`, you can use location and language
   * targeting at the ad group level as opposed to the standard campaign-level
   * targeting.
   *
   * @param bool $upgradedTargeting
   */
  public function setUpgradedTargeting($upgradedTargeting)
  {
    $this->upgradedTargeting = $upgradedTargeting;
  }
  /**
   * @return bool
   */
  public function getUpgradedTargeting()
  {
    return $this->upgradedTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignDemandGenCampaignSettings');
