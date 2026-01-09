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

class NetworkProfileNetworkFeaturesPredefinedSubnetworkRange extends \Google\Model
{
  /**
   * The IPv6 range of the predefined subnetwork.
   *
   * @var string
   */
  public $ipv6Range;
  /**
   * The naming prefix of the predefined subnetwork.
   *
   * @var string
   */
  public $namePrefix;

  /**
   * The IPv6 range of the predefined subnetwork.
   *
   * @param string $ipv6Range
   */
  public function setIpv6Range($ipv6Range)
  {
    $this->ipv6Range = $ipv6Range;
  }
  /**
   * @return string
   */
  public function getIpv6Range()
  {
    return $this->ipv6Range;
  }
  /**
   * The naming prefix of the predefined subnetwork.
   *
   * @param string $namePrefix
   */
  public function setNamePrefix($namePrefix)
  {
    $this->namePrefix = $namePrefix;
  }
  /**
   * @return string
   */
  public function getNamePrefix()
  {
    return $this->namePrefix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkProfileNetworkFeaturesPredefinedSubnetworkRange::class, 'Google_Service_Compute_NetworkProfileNetworkFeaturesPredefinedSubnetworkRange');
