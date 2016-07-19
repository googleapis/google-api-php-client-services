<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Compute_RouterStatus extends Google_Collection
{
  protected $collection_key = 'bgpPeerStatus';
  public $bestRoutes;
  public $bgpPeerStatus;
  public $network;

  public function setBestRoutes(array $bestRoutes)
  {
    foreach ($bestRoutes as $b) {
      if (!$b instanceof Google_Service_Compute_Route) {
        throw new InvalidArgumentException('First argument to setBestRoutes must be an array of Google_Service_Compute_Route');
      }
    }
    $this->bestRoutes = $bestRoutes;
  }
  public function getBestRoutes()
  {
    return $this->bestRoutes;
  }
  public function setBgpPeerStatus(array $bgpPeerStatus)
  {
    foreach ($bgpPeerStatus as $b) {
      if (!$b instanceof Google_Service_Compute_RouterStatusBgpPeerStatus) {
        throw new InvalidArgumentException('First argument to setBgpPeerStatus must be an array of Google_Service_Compute_RouterStatusBgpPeerStatus');
      }
    }
    $this->bgpPeerStatus = $bgpPeerStatus;
  }
  public function getBgpPeerStatus()
  {
    return $this->bgpPeerStatus;
  }
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  public function getNetwork()
  {
    return $this->network;
  }
}
