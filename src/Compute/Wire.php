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

class Wire extends \Google\Collection
{
  protected $collection_key = 'endpoints';
  /**
   * @var bool
   */
  public $adminEnabled;
  protected $endpointsType = WireEndpoint::class;
  protected $endpointsDataType = 'array';
  /**
   * @var string
   */
  public $label;
  protected $wirePropertiesType = WireProperties::class;
  protected $wirePropertiesDataType = '';

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
   * @param WireEndpoint[]
   */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /**
   * @return WireEndpoint[]
   */
  public function getEndpoints()
  {
    return $this->endpoints;
  }
  /**
   * @param string
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Wire::class, 'Google_Service_Compute_Wire');
