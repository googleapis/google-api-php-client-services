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

namespace Google\Service\DatabaseCenter;

class AggregateFleetRow extends \Google\Collection
{
  protected $collection_key = 'dimension';
  protected $deltaDetailsType = DeltaDetails::class;
  protected $deltaDetailsDataType = '';
  protected $dimensionType = Dimension::class;
  protected $dimensionDataType = 'array';
  /**
   * Number of resource groups that have a particular dimension.
   *
   * @var int
   */
  public $resourceGroupsCount;
  /**
   * Number of resources that have a particular dimension.
   *
   * @var int
   */
  public $resourcesCount;

  /**
   * Optional. Delta counts and details of resources which were added to/deleted
   * from fleet.
   *
   * @param DeltaDetails $deltaDetails
   */
  public function setDeltaDetails(DeltaDetails $deltaDetails)
  {
    $this->deltaDetails = $deltaDetails;
  }
  /**
   * @return DeltaDetails
   */
  public function getDeltaDetails()
  {
    return $this->deltaDetails;
  }
  /**
   * Group by dimension.
   *
   * @param Dimension[] $dimension
   */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return Dimension[]
   */
  public function getDimension()
  {
    return $this->dimension;
  }
  /**
   * Number of resource groups that have a particular dimension.
   *
   * @param int $resourceGroupsCount
   */
  public function setResourceGroupsCount($resourceGroupsCount)
  {
    $this->resourceGroupsCount = $resourceGroupsCount;
  }
  /**
   * @return int
   */
  public function getResourceGroupsCount()
  {
    return $this->resourceGroupsCount;
  }
  /**
   * Number of resources that have a particular dimension.
   *
   * @param int $resourcesCount
   */
  public function setResourcesCount($resourcesCount)
  {
    $this->resourcesCount = $resourcesCount;
  }
  /**
   * @return int
   */
  public function getResourcesCount()
  {
    return $this->resourcesCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateFleetRow::class, 'Google_Service_DatabaseCenter_AggregateFleetRow');
