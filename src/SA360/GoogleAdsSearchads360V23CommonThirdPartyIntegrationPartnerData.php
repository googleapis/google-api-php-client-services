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

class GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData extends \Google\Model
{
  /**
   * The client ID that allows the measurement partner to join multiple
   * campaigns for a particular advertiser.
   *
   * @var string
   */
  public $clientId;
  /**
   * The third party placement ID that maps the measurement partner data with a
   * campaign (or a group of related campaigns) specific data.
   *
   * @var string
   */
  public $thirdPartyPlacementId;

  /**
   * The client ID that allows the measurement partner to join multiple
   * campaigns for a particular advertiser.
   *
   * @param string $clientId
   */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /**
   * @return string
   */
  public function getClientId()
  {
    return $this->clientId;
  }
  /**
   * The third party placement ID that maps the measurement partner data with a
   * campaign (or a group of related campaigns) specific data.
   *
   * @param string $thirdPartyPlacementId
   */
  public function setThirdPartyPlacementId($thirdPartyPlacementId)
  {
    $this->thirdPartyPlacementId = $thirdPartyPlacementId;
  }
  /**
   * @return string
   */
  public function getThirdPartyPlacementId()
  {
    return $this->thirdPartyPlacementId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonThirdPartyIntegrationPartnerData');
