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

class NetworkPeeringConnectionStatusTrafficConfiguration extends \Google\Model
{
  /**
   * @var bool
   */
  public $exportCustomRoutesToPeer;
  /**
   * @var bool
   */
  public $exportSubnetRoutesWithPublicIpToPeer;
  /**
   * @var bool
   */
  public $importCustomRoutesFromPeer;
  /**
   * @var bool
   */
  public $importSubnetRoutesWithPublicIpFromPeer;
  /**
   * @var string
   */
  public $stackType;

  /**
   * @param bool
   */
  public function setExportCustomRoutesToPeer($exportCustomRoutesToPeer)
  {
    $this->exportCustomRoutesToPeer = $exportCustomRoutesToPeer;
  }
  /**
   * @return bool
   */
  public function getExportCustomRoutesToPeer()
  {
    return $this->exportCustomRoutesToPeer;
  }
  /**
   * @param bool
   */
  public function setExportSubnetRoutesWithPublicIpToPeer($exportSubnetRoutesWithPublicIpToPeer)
  {
    $this->exportSubnetRoutesWithPublicIpToPeer = $exportSubnetRoutesWithPublicIpToPeer;
  }
  /**
   * @return bool
   */
  public function getExportSubnetRoutesWithPublicIpToPeer()
  {
    return $this->exportSubnetRoutesWithPublicIpToPeer;
  }
  /**
   * @param bool
   */
  public function setImportCustomRoutesFromPeer($importCustomRoutesFromPeer)
  {
    $this->importCustomRoutesFromPeer = $importCustomRoutesFromPeer;
  }
  /**
   * @return bool
   */
  public function getImportCustomRoutesFromPeer()
  {
    return $this->importCustomRoutesFromPeer;
  }
  /**
   * @param bool
   */
  public function setImportSubnetRoutesWithPublicIpFromPeer($importSubnetRoutesWithPublicIpFromPeer)
  {
    $this->importSubnetRoutesWithPublicIpFromPeer = $importSubnetRoutesWithPublicIpFromPeer;
  }
  /**
   * @return bool
   */
  public function getImportSubnetRoutesWithPublicIpFromPeer()
  {
    return $this->importSubnetRoutesWithPublicIpFromPeer;
  }
  /**
   * @param string
   */
  public function setStackType($stackType)
  {
    $this->stackType = $stackType;
  }
  /**
   * @return string
   */
  public function getStackType()
  {
    return $this->stackType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkPeeringConnectionStatusTrafficConfiguration::class, 'Google_Service_Compute_NetworkPeeringConnectionStatusTrafficConfiguration');
