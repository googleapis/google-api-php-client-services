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

class Google_Service_Compute_VpnTunnelsScopedList extends Google_Collection
{
  protected $collection_key = 'vpnTunnels';
  public $vpnTunnels;
  public $warning;

  public function setVpnTunnels(array $vpnTunnels)
  {
    foreach ($vpnTunnels as $v) {
      if (!$v instanceof Google_Service_Compute_VpnTunnel) {
        throw new InvalidArgumentException('First argument to setVpnTunnels must be an array of Google_Service_Compute_VpnTunnel');
      }
    }
    $this->vpnTunnels = $vpnTunnels;
  }
  public function getVpnTunnels()
  {
    return $this->vpnTunnels;
  }
  public function setWarning(Google_Service_Compute_VpnTunnelsScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  public function getWarning()
  {
    return $this->warning;
  }
}
