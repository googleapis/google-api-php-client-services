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

namespace Google\Service\SecurityCommandCenter;

class IpRules extends \Google\Collection
{
  public const DIRECTION_DIRECTION_UNSPECIFIED = 'DIRECTION_UNSPECIFIED';
  public const DIRECTION_INGRESS = 'INGRESS';
  public const DIRECTION_EGRESS = 'EGRESS';
  protected $collection_key = 'sourceIpRanges';
  protected $allowedType = Allowed::class;
  protected $allowedDataType = '';
  protected $deniedType = Denied::class;
  protected $deniedDataType = '';
  /**
   * @var string[]
   */
  public $destinationIpRanges;
  /**
   * @var string
   */
  public $direction;
  /**
   * @var string[]
   */
  public $exposedServices;
  /**
   * @var string[]
   */
  public $sourceIpRanges;

  /**
   * @param Allowed $allowed
   */
  public function setAllowed(Allowed $allowed)
  {
    $this->allowed = $allowed;
  }
  /**
   * @return Allowed
   */
  public function getAllowed()
  {
    return $this->allowed;
  }
  /**
   * @param Denied $denied
   */
  public function setDenied(Denied $denied)
  {
    $this->denied = $denied;
  }
  /**
   * @return Denied
   */
  public function getDenied()
  {
    return $this->denied;
  }
  /**
   * @param string[] $destinationIpRanges
   */
  public function setDestinationIpRanges($destinationIpRanges)
  {
    $this->destinationIpRanges = $destinationIpRanges;
  }
  /**
   * @return string[]
   */
  public function getDestinationIpRanges()
  {
    return $this->destinationIpRanges;
  }
  /**
   * @param self::DIRECTION_* $direction
   */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /**
   * @return self::DIRECTION_*
   */
  public function getDirection()
  {
    return $this->direction;
  }
  /**
   * @param string[] $exposedServices
   */
  public function setExposedServices($exposedServices)
  {
    $this->exposedServices = $exposedServices;
  }
  /**
   * @return string[]
   */
  public function getExposedServices()
  {
    return $this->exposedServices;
  }
  /**
   * @param string[] $sourceIpRanges
   */
  public function setSourceIpRanges($sourceIpRanges)
  {
    $this->sourceIpRanges = $sourceIpRanges;
  }
  /**
   * @return string[]
   */
  public function getSourceIpRanges()
  {
    return $this->sourceIpRanges;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IpRules::class, 'Google_Service_SecurityCommandCenter_IpRules');
