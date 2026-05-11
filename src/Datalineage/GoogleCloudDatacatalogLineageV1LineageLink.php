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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1LineageLink extends \Google\Collection
{
  protected $collection_key = 'processes';
  protected $dependencyInfoType = GoogleCloudDatacatalogLineageV1LineageLinkDependencyInfo::class;
  protected $dependencyInfoDataType = 'array';
  /**
   * Depth of the current link in the graph starting from 1.
   *
   * @var int
   */
  public $depth;
  /**
   * The location where the LineageEvent that created the link is stored.
   *
   * @var string
   */
  public $location;
  protected $processesType = GoogleCloudDatacatalogLineageV1LineageLinkLineageProcess::class;
  protected $processesDataType = 'array';
  protected $sourceType = GoogleCloudDatacatalogLineageV1EntityReference::class;
  protected $sourceDataType = '';
  protected $targetType = GoogleCloudDatacatalogLineageV1EntityReference::class;
  protected $targetDataType = '';

  /**
   * Describes how the target entity is dependent on the source entity.
   *
   * @param GoogleCloudDatacatalogLineageV1LineageLinkDependencyInfo[] $dependencyInfo
   */
  public function setDependencyInfo($dependencyInfo)
  {
    $this->dependencyInfo = $dependencyInfo;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1LineageLinkDependencyInfo[]
   */
  public function getDependencyInfo()
  {
    return $this->dependencyInfo;
  }
  /**
   * Depth of the current link in the graph starting from 1.
   *
   * @param int $depth
   */
  public function setDepth($depth)
  {
    $this->depth = $depth;
  }
  /**
   * @return int
   */
  public function getDepth()
  {
    return $this->depth;
  }
  /**
   * The location where the LineageEvent that created the link is stored.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Processes metadata associated with the link.
   *
   * @param GoogleCloudDatacatalogLineageV1LineageLinkLineageProcess[] $processes
   */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1LineageLinkLineageProcess[]
   */
  public function getProcesses()
  {
    return $this->processes;
  }
  /**
   * The entity that is the **source** of this link.
   *
   * @param GoogleCloudDatacatalogLineageV1EntityReference $source
   */
  public function setSource(GoogleCloudDatacatalogLineageV1EntityReference $source)
  {
    $this->source = $source;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1EntityReference
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * The entity that is the **target** of this link.
   *
   * @param GoogleCloudDatacatalogLineageV1EntityReference $target
   */
  public function setTarget(GoogleCloudDatacatalogLineageV1EntityReference $target)
  {
    $this->target = $target;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1EntityReference
   */
  public function getTarget()
  {
    return $this->target;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1LineageLink::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1LineageLink');
