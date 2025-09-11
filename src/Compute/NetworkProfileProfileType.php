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

class NetworkProfileProfileType extends \Google\Model
{
  /**
   * @var string
   */
  public $networkType;
  /**
   * @var string
   */
  public $rdmaSubtype;
  /**
   * @var string
   */
  public $ullSubtype;
  /**
   * @var string
   */
  public $vpcSubtype;

  /**
   * @param string
   */
  public function setNetworkType($networkType)
  {
    $this->networkType = $networkType;
  }
  /**
   * @return string
   */
  public function getNetworkType()
  {
    return $this->networkType;
  }
  /**
   * @param string
   */
  public function setRdmaSubtype($rdmaSubtype)
  {
    $this->rdmaSubtype = $rdmaSubtype;
  }
  /**
   * @return string
   */
  public function getRdmaSubtype()
  {
    return $this->rdmaSubtype;
  }
  /**
   * @param string
   */
  public function setUllSubtype($ullSubtype)
  {
    $this->ullSubtype = $ullSubtype;
  }
  /**
   * @return string
   */
  public function getUllSubtype()
  {
    return $this->ullSubtype;
  }
  /**
   * @param string
   */
  public function setVpcSubtype($vpcSubtype)
  {
    $this->vpcSubtype = $vpcSubtype;
  }
  /**
   * @return string
   */
  public function getVpcSubtype()
  {
    return $this->vpcSubtype;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkProfileProfileType::class, 'Google_Service_Compute_NetworkProfileProfileType');
