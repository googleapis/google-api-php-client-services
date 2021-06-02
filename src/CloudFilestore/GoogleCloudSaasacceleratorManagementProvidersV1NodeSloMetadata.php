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

namespace Google\Service\CloudFilestore;

class GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata extends \Google\Collection
{
  protected $collection_key = 'exclusions';
  protected $exclusionsType = GoogleCloudSaasacceleratorManagementProvidersV1SloExclusion::class;
  protected $exclusionsDataType = 'array';
  public $location;
  public $nodeId;

  /**
   * @param GoogleCloudSaasacceleratorManagementProvidersV1SloExclusion[]
   */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /**
   * @return GoogleCloudSaasacceleratorManagementProvidersV1SloExclusion[]
   */
  public function getExclusions()
  {
    return $this->exclusions;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setNodeId($nodeId)
  {
    $this->nodeId = $nodeId;
  }
  public function getNodeId()
  {
    return $this->nodeId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata');
