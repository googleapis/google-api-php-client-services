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

class Host extends \Google\Collection
{
  /**
   * The host has allocated all its resources.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resources are being allocated for the host.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The host is currently being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The host is currently unavailable.
   */
  public const STATE_UNAVAILABLE = 'UNAVAILABLE';
  protected $collection_key = 'aliasLinks';
  /**
   * Output only. All aliases for this resource. e.g. projects/123/zones/us-
   * centra1-a/reservation/r1/reservationBlock/b1/hosts/h1
   *
   * @var string[]
   */
  public $aliasLinks;
  /**
   * Output only. The creation timestamp, formatted asRFC3339 text.
   *
   * @var string
   */
  public $creationTimestamp;
  /**
   * An optional description of this resource.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The unique identifier for this resource. This identifier is
   * defined by the server.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The type of resource. Alwayscompute#host for hosts.
   *
   * @var string
   */
  public $kind;
  /**
   * Output only. The name of the host.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The self link of the host.
   *
   * @var string
   */
  public $selfLink;
  /**
   * Output only. The self link with id of the host.
   *
   * @var string
   */
  public $selfLinkWithId;
  /**
   * Output only. The state of the host.
   *
   * @var string
   */
  public $state;
  protected $statusType = HostStatus::class;
  protected $statusDataType = '';
  /**
   * Output only. The zone in which the host resides.
   *
   * @var string
   */
  public $zone;

  /**
   * Output only. All aliases for this resource. e.g. projects/123/zones/us-
   * centra1-a/reservation/r1/reservationBlock/b1/hosts/h1
   *
   * @param string[] $aliasLinks
   */
  public function setAliasLinks($aliasLinks)
  {
    $this->aliasLinks = $aliasLinks;
  }
  /**
   * @return string[]
   */
  public function getAliasLinks()
  {
    return $this->aliasLinks;
  }
  /**
   * Output only. The creation timestamp, formatted asRFC3339 text.
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
   * An optional description of this resource.
   *
   * @param string $description
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
   * Output only. The unique identifier for this resource. This identifier is
   * defined by the server.
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
   * Output only. The type of resource. Alwayscompute#host for hosts.
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
   * Output only. The name of the host.
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
   * Output only. The self link of the host.
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
   * Output only. The self link with id of the host.
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
   * Output only. The state of the host.
   *
   * Accepted values: ACTIVE, CREATING, DELETING, STATE_UNSPECIFIED, UNAVAILABLE
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
   * Output only. The status of the host
   *
   * @param HostStatus $status
   */
  public function setStatus(HostStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return HostStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. The zone in which the host resides.
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
class_alias(Host::class, 'Google_Service_Compute_Host');
