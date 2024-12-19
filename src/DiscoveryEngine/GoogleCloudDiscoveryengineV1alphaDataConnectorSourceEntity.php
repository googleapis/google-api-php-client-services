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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaDataConnectorSourceEntity extends \Google\Model
{
  /**
   * @var string
   */
  public $dataStore;
  /**
   * @var string
   */
  public $entityName;
  /**
   * @var string[]
   */
  public $keyPropertyMappings;
  /**
   * @var array[]
   */
  public $params;

  /**
   * @param string
   */
  public function setDataStore($dataStore)
  {
    $this->dataStore = $dataStore;
  }
  /**
   * @return string
   */
  public function getDataStore()
  {
    return $this->dataStore;
  }
  /**
   * @param string
   */
  public function setEntityName($entityName)
  {
    $this->entityName = $entityName;
  }
  /**
   * @return string
   */
  public function getEntityName()
  {
    return $this->entityName;
  }
  /**
   * @param string[]
   */
  public function setKeyPropertyMappings($keyPropertyMappings)
  {
    $this->keyPropertyMappings = $keyPropertyMappings;
  }
  /**
   * @return string[]
   */
  public function getKeyPropertyMappings()
  {
    return $this->keyPropertyMappings;
  }
  /**
   * @param array[]
   */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /**
   * @return array[]
   */
  public function getParams()
  {
    return $this->params;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaDataConnectorSourceEntity::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaDataConnectorSourceEntity');
