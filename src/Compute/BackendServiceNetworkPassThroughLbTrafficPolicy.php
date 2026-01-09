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

namespace Google\Service\Compute;

class BackendServiceNetworkPassThroughLbTrafficPolicy extends \Google\Model
{
  protected $zonalAffinityType = BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity::class;
  protected $zonalAffinityDataType = '';

  /**
   * When configured, new connections are load balanced across healthy backend
   * endpoints in the local zone.
   *
   * @param BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity $zonalAffinity
   */
  public function setZonalAffinity(BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity $zonalAffinity)
  {
    $this->zonalAffinity = $zonalAffinity;
  }
  /**
   * @return BackendServiceNetworkPassThroughLbTrafficPolicyZonalAffinity
   */
  public function getZonalAffinity()
  {
    return $this->zonalAffinity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackendServiceNetworkPassThroughLbTrafficPolicy::class, 'Google_Service_Compute_BackendServiceNetworkPassThroughLbTrafficPolicy');
