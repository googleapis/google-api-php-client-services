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

class WireGroup extends \Google\Collection
{
  protected $collection_key = 'wires';
  /**
   * @var bool
   */
  public $adminEnabled;
  /**
   * @var string
   */
  public $creationTimestamp;
  /**
   * @var string
   */
  public $description;
  protected $endpointsType = WireGroupEndpoint::class;
  protected $endpointsDataType = 'map';
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
   * @var bool
   */
  public $reconciling;
  /**
   * @var string
   */
  public $selfLink;
  protected $topologyType = WireGroupTopology::class;
  protected $topologyDataType = '';
  protected $wirePropertiesType = WireProperties::class;
  protected $wirePropertiesDataType = '';
  protected $wiresType = Wire::class;
  protected $wiresDataType = 'array';

  /**
   * @param bool
   */
  public function setAdminEnabled($adminEnabled)
  {
    $this->adminEnabled = $adminEnabled;
  }
  /**
   * @return bool
   */
  public function getAdminEnabled()
  {
    return $this->adminEnabled;
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
   * @param WireGroupEndpoint[]
   */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /**
   * @return WireGroupEndpoint[]
   */
  public function getEndpoints()
  {
    return $this->endpoints;
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
   * @param bool
   */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /**
   * @return bool
   */
  public function getReconciling()
  {
    return $this->reconciling;
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
   * @param WireGroupTopology
   */
  public function setTopology(WireGroupTopology $topology)
  {
    $this->topology = $topology;
  }
  /**
   * @return WireGroupTopology
   */
  public function getTopology()
  {
    return $this->topology;
  }
  /**
   * @param WireProperties
   */
  public function setWireProperties(WireProperties $wireProperties)
  {
    $this->wireProperties = $wireProperties;
  }
  /**
   * @return WireProperties
   */
  public function getWireProperties()
  {
    return $this->wireProperties;
  }
  /**
   * @param Wire[]
   */
  public function setWires($wires)
  {
    $this->wires = $wires;
  }
  /**
   * @return Wire[]
   */
  public function getWires()
  {
    return $this->wires;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WireGroup::class, 'Google_Service_Compute_WireGroup');
