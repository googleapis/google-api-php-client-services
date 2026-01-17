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

class ReservationSlot extends \Google\Model
{
  /**
   * The reservation slot has allocated all its resources.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resources are being allocated for the reservation slot.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The reservation slot is currently being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Output only. [Output Only] The creation timestamp, formatted asRFC3339
   * text.
   *
   * @var string
   */
  public $creationTimestamp;
  /**
   * Output only. [Output Only] The unique identifier for this resource. This
   * identifier is defined by the server.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. [Output Only] The type of resource.
   * Alwayscompute#reservationSlot for reservation slots.
   *
   * @var string
   */
  public $kind;
  /**
   * Output only. [Output Only] The name of the reservation slot.
   *
   * @var string
   */
  public $name;
  protected $physicalTopologyType = ReservationSlotPhysicalTopology::class;
  protected $physicalTopologyDataType = '';
  /**
   * Output only. [Output Only] A server-defined fully-qualified URL for this
   * resource.
   *
   * @var string
   */
  public $selfLink;
  /**
   * Output only. [Output Only] A server-defined URL for this resource with the
   * resource ID.
   *
   * @var string
   */
  public $selfLinkWithId;
  protected $shareSettingsType = ShareSettings::class;
  protected $shareSettingsDataType = '';
  /**
   * Output only. [Output Only] The state of the reservation slot.
   *
   * @var string
   */
  public $state;
  protected $statusType = ReservationSlotStatus::class;
  protected $statusDataType = '';
  /**
   * Output only. [Output Only] The zone in which the reservation slot resides.
   *
   * @var string
   */
  public $zone;

  /**
   * Output only. [Output Only] The creation timestamp, formatted asRFC3339
   * text.
   *
   * @param string $creationTimestamp
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
   * Output only. [Output Only] The unique identifier for this resource. This
   * identifier is defined by the server.
   *
   * @param string $id
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
   * Output only. [Output Only] The type of resource.
   * Alwayscompute#reservationSlot for reservation slots.
   *
   * @param string $kind
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
   * Output only. [Output Only] The name of the reservation slot.
   *
   * @param string $name
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
   * Output only. [Output Only] The physical topology of the reservation slot.
   *
   * @deprecated
   * @param ReservationSlotPhysicalTopology $physicalTopology
   */
  public function setPhysicalTopology(ReservationSlotPhysicalTopology $physicalTopology)
  {
    $this->physicalTopology = $physicalTopology;
  }
  /**
   * @deprecated
   * @return ReservationSlotPhysicalTopology
   */
  public function getPhysicalTopology()
  {
    return $this->physicalTopology;
  }
  /**
   * Output only. [Output Only] A server-defined fully-qualified URL for this
   * resource.
   *
   * @param string $selfLink
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
   * Output only. [Output Only] A server-defined URL for this resource with the
   * resource ID.
   *
   * @param string $selfLinkWithId
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
   * Specify share settings to create a shared slot. Set to empty to inherit the
   * share settings from a parent resource.
   *
   * @param ShareSettings $shareSettings
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
   * Output only. [Output Only] The state of the reservation slot.
   *
   * Accepted values: ACTIVE, CREATING, DELETING, STATE_UNSPECIFIED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. [Output Only] The status of the reservation slot.
   *
   * @param ReservationSlotStatus $status
   */
  public function setStatus(ReservationSlotStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return ReservationSlotStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. [Output Only] The zone in which the reservation slot resides.
   *
   * @param string $zone
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
class_alias(ReservationSlot::class, 'Google_Service_Compute_ReservationSlot');
