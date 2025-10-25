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

class FutureReservation extends \Google\Model
{
  protected $aggregateReservationType = AllocationAggregateReservation::class;
  protected $aggregateReservationDataType = '';
  /**
   * @var string
   */
  public $autoCreatedReservationsDeleteTime;
  protected $autoCreatedReservationsDurationType = Duration::class;
  protected $autoCreatedReservationsDurationDataType = '';
  /**
   * @var bool
   */
  public $autoDeleteAutoCreatedReservations;
  protected $commitmentInfoType = FutureReservationCommitmentInfo::class;
  protected $commitmentInfoDataType = '';
  /**
   * @var string
   */
  public $creationTimestamp;
  /**
   * @var string
   */
  public $deploymentType;
  /**
   * @var string
   */
  public $description;
  /**
   * @var bool
   */
  public $enableEmergentMaintenance;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $namePrefix;
  /**
   * @var string
   */
  public $planningStatus;
  /**
   * @var string
   */
  public $reservationMode;
  /**
   * @var string
   */
  public $reservationName;
  /**
   * @var string
   */
  public $schedulingType;
  /**
   * @var string
   */
  public $selfLink;
  /**
   * @var string
   */
  public $selfLinkWithId;
  protected $shareSettingsType = ShareSettings::class;
  protected $shareSettingsDataType = '';
  /**
   * @var bool
   */
  public $specificReservationRequired;
  protected $specificSkuPropertiesType = FutureReservationSpecificSKUProperties::class;
  protected $specificSkuPropertiesDataType = '';
  protected $statusType = FutureReservationStatus::class;
  protected $statusDataType = '';
  protected $timeWindowType = FutureReservationTimeWindow::class;
  protected $timeWindowDataType = '';
  /**
   * @var string
   */
  public $zone;

  /**
   * @param AllocationAggregateReservation
   */
  public function setAggregateReservation(AllocationAggregateReservation $aggregateReservation)
  {
    $this->aggregateReservation = $aggregateReservation;
  }
  /**
   * @return AllocationAggregateReservation
   */
  public function getAggregateReservation()
  {
    return $this->aggregateReservation;
  }
  /**
   * @param string
   */
  public function setAutoCreatedReservationsDeleteTime($autoCreatedReservationsDeleteTime)
  {
    $this->autoCreatedReservationsDeleteTime = $autoCreatedReservationsDeleteTime;
  }
  /**
   * @return string
   */
  public function getAutoCreatedReservationsDeleteTime()
  {
    return $this->autoCreatedReservationsDeleteTime;
  }
  /**
   * @param Duration
   */
  public function setAutoCreatedReservationsDuration(Duration $autoCreatedReservationsDuration)
  {
    $this->autoCreatedReservationsDuration = $autoCreatedReservationsDuration;
  }
  /**
   * @return Duration
   */
  public function getAutoCreatedReservationsDuration()
  {
    return $this->autoCreatedReservationsDuration;
  }
  /**
   * @param bool
   */
  public function setAutoDeleteAutoCreatedReservations($autoDeleteAutoCreatedReservations)
  {
    $this->autoDeleteAutoCreatedReservations = $autoDeleteAutoCreatedReservations;
  }
  /**
   * @return bool
   */
  public function getAutoDeleteAutoCreatedReservations()
  {
    return $this->autoDeleteAutoCreatedReservations;
  }
  /**
   * @param FutureReservationCommitmentInfo
   */
  public function setCommitmentInfo(FutureReservationCommitmentInfo $commitmentInfo)
  {
    $this->commitmentInfo = $commitmentInfo;
  }
  /**
   * @return FutureReservationCommitmentInfo
   */
  public function getCommitmentInfo()
  {
    return $this->commitmentInfo;
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
   * @param string
   */
  public function setDeploymentType($deploymentType)
  {
    $this->deploymentType = $deploymentType;
  }
  /**
   * @return string
   */
  public function getDeploymentType()
  {
    return $this->deploymentType;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param bool
   */
  public function setEnableEmergentMaintenance($enableEmergentMaintenance)
  {
    $this->enableEmergentMaintenance = $enableEmergentMaintenance;
  }
  /**
   * @return bool
   */
  public function getEnableEmergentMaintenance()
  {
    return $this->enableEmergentMaintenance;
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
   * @param string
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
  /**
   * @param string
   */
  public function setPlanningStatus($planningStatus)
  {
    $this->planningStatus = $planningStatus;
  }
  /**
   * @return string
   */
  public function getPlanningStatus()
  {
    return $this->planningStatus;
  }
  /**
   * @param string
   */
  public function setReservationMode($reservationMode)
  {
    $this->reservationMode = $reservationMode;
  }
  /**
   * @return string
   */
  public function getReservationMode()
  {
    return $this->reservationMode;
  }
  /**
   * @param string
   */
  public function setReservationName($reservationName)
  {
    $this->reservationName = $reservationName;
  }
  /**
   * @return string
   */
  public function getReservationName()
  {
    return $this->reservationName;
  }
  /**
   * @param string
   */
  public function setSchedulingType($schedulingType)
  {
    $this->schedulingType = $schedulingType;
  }
  /**
   * @return string
   */
  public function getSchedulingType()
  {
    return $this->schedulingType;
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
   * @param ShareSettings
   */
  public function setShareSettings(ShareSettings $shareSettings)
  {
    $this->shareSettings = $shareSettings;
  }
  /**
   * @return ShareSettings
   */
  public function getShareSettings()
  {
    return $this->shareSettings;
  }
  /**
   * @param bool
   */
  public function setSpecificReservationRequired($specificReservationRequired)
  {
    $this->specificReservationRequired = $specificReservationRequired;
  }
  /**
   * @return bool
   */
  public function getSpecificReservationRequired()
  {
    return $this->specificReservationRequired;
  }
  /**
   * @param FutureReservationSpecificSKUProperties
   */
  public function setSpecificSkuProperties(FutureReservationSpecificSKUProperties $specificSkuProperties)
  {
    $this->specificSkuProperties = $specificSkuProperties;
  }
  /**
   * @return FutureReservationSpecificSKUProperties
   */
  public function getSpecificSkuProperties()
  {
    return $this->specificSkuProperties;
  }
  /**
   * @param FutureReservationStatus
   */
  public function setStatus(FutureReservationStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return FutureReservationStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * @param FutureReservationTimeWindow
   */
  public function setTimeWindow(FutureReservationTimeWindow $timeWindow)
  {
    $this->timeWindow = $timeWindow;
  }
  /**
   * @return FutureReservationTimeWindow
   */
  public function getTimeWindow()
  {
    return $this->timeWindow;
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
class_alias(FutureReservation::class, 'Google_Service_Compute_FutureReservation');
