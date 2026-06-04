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

class GoogleAdsSearchads360V23ServicesUnusableAdGroup extends \Google\Model
{
  /**
   * The AdGroup resource name. Resource name format:
   * `customers/{customer_id}/adGroups/{ad_group_id}`
   *
   * @var string
   */
  public $adGroup;
  /**
   * The Campaign resource name. Resource name format:
   * `customers/{customer_id}/campaigns/{campaign_id}`
   *
   * @var string
   */
  public $campaign;

  /**
   * The AdGroup resource name. Resource name format:
   * `customers/{customer_id}/adGroups/{ad_group_id}`
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * The Campaign resource name. Resource name format:
   * `customers/{customer_id}/campaigns/{campaign_id}`
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUnusableAdGroup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUnusableAdGroup');
