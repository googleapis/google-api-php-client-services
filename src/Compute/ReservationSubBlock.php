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

class ReservationSubBlock extends \Google\Model
{
  protected $acceleratorTopologiesInfoType = AcceleratorTopologiesInfo::class;
  protected $acceleratorTopologiesInfoDataType = '';
  /**
   * @var int
   */
  public $count;
  /**
   * @var string
   */
  public $creationTimestamp;
  protected $healthInfoType = ReservationSubBlockHealthInfo::class;
  protected $healthInfoDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var int
   */
  public $inUseCount;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $name;
  protected $physicalTopologyType = ReservationSubBlockPhysicalTopology::class;
  protected $physicalTopologyDataType = '';
  protected $reservationSubBlockMaintenanceType = GroupMaintenanceInfo::class;
  protected $reservationSubBlockMaintenanceDataType = '';
  /**
   * @var string
   */
  public $selfLink;
  /**
   * @var string
   */
  public $selfLinkWithId;
  /**
   * @var string
   */
  public $status;
  /**
   * @var string
   */
  public $zone;

  /**
   * @param AcceleratorTopologiesInfo
   */
  public function setAcceleratorTopologiesInfo(AcceleratorTopologiesInfo $acceleratorTopologiesInfo)
  {
    $this->acceleratorTopologiesInfo = $acceleratorTopologiesInfo;
  }
  /**
   * @return AcceleratorTopologiesInfo
   */
  public function getAcceleratorTopologiesInfo()
  {
    return $this->acceleratorTopologiesInfo;
  }
  /**
   * @param int
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return int
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * @param string
   */
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  /**
   * @return string
   */
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  /**
   * @param ReservationSubBlockHealthInfo
   */
  public function setHealthInfo(ReservationSubBlockHealthInfo $healthInfo)
  {
    $this->healthInfo = $healthInfo;
  }
  /**
   * @return ReservationSubBlockHealthInfo
   */
  public function getHealthInfo()
  {
    return $this->healthInfo;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param int
   */
  public function setInUseCount($inUseCount)
  {
    $this->inUseCount = $inUseCount;
  }
  /**
   * @return int
   */
  public function getInUseCount()
  {
    return $this->inUseCount;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param ReservationSubBlockPhysicalTopology
   */
  public function setPhysicalTopology(ReservationSubBlockPhysicalTopology $physicalTopology)
  {
    $this->physicalTopology = $physicalTopology;
  }
  /**
   * @return ReservationSubBlockPhysicalTopology
   */
  public function getPhysicalTopology()
  {
    return $this->physicalTopology;
  }
  /**
   * @param GroupMaintenanceInfo
   */
  public function setReservationSubBlockMaintenance(GroupMaintenanceInfo $reservationSubBlockMaintenance)
  {
    $this->reservationSubBlockMaintenance = $reservationSubBlockMaintenance;
  }
  /**
   * @return GroupMaintenanceInfo
   */
  public function getReservationSubBlockMaintenance()
  {
    return $this->reservationSubBlockMaintenance;
  }
  /**
   * @param string
   */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /**
   * @return string
   */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /**
   * @param string
   */
  public function setSelfLinkWithId($selfLinkWithId)
  {
    $this->selfLinkWithId = $selfLinkWithId;
  }
  /**
   * @return string
   */
  public function getSelfLinkWithId()
  {
    return $this->selfLinkWithId;
  }
  /**
   * @param string
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * @param string
   */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /**
   * @return string
   */
  public function getZone()
  {
    return $this->zone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservationSubBlock::class, 'Google_Service_Compute_ReservationSubBlock');
