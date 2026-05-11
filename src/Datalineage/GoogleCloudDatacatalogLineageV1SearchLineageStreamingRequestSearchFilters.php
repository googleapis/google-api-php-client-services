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

class GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters extends \Google\Collection
{
  /**
   * The entity set is unspecified. Returns all the data.
   */
  public const ENTITY_SET_ENTITY_SET_UNSPECIFIED = 'ENTITY_SET_UNSPECIFIED';
  /**
   * Returns entities with only FQN specified. For example, entities with the
   * `field` field set are not returned.
   */
  public const ENTITY_SET_ENTITIES = 'ENTITIES';
  protected $collection_key = 'dependencyTypes';
  /**
   * Optional. Types of dependencies between entities to retrieve. If
   * unspecified, all dependency types are returned.
   *
   * @var string[]
   */
  public $dependencyTypes;
  /**
   * Optional. Entity set restriction. If unspecified, the method returns all
   * entities.
   *
   * @var string
   */
  public $entitySet;
  protected $timeRangeType = GoogleTypeInterval::class;
  protected $timeRangeDataType = '';

  /**
   * Optional. Types of dependencies between entities to retrieve. If
   * unspecified, all dependency types are returned.
   *
   * @param string[] $dependencyTypes
   */
  public function setDependencyTypes($dependencyTypes)
  {
    $this->dependencyTypes = $dependencyTypes;
  }
  /**
   * @return string[]
   */
  public function getDependencyTypes()
  {
    return $this->dependencyTypes;
  }
  /**
   * Optional. Entity set restriction. If unspecified, the method returns all
   * entities.
   *
   * Accepted values: ENTITY_SET_UNSPECIFIED, ENTITIES
   *
   * @param self::ENTITY_SET_* $entitySet
   */
  public function setEntitySet($entitySet)
  {
    $this->entitySet = $entitySet;
  }
  /**
   * @return self::ENTITY_SET_*
   */
  public function getEntitySet()
  {
    return $this->entitySet;
  }
  /**
   * Optional. Time interval to search for lineage. If unspecified, all lineage
   * is returned. Currently, at most one of `start_time` and `end_time` can be
   * set.
   *
   * @param GoogleTypeInterval $timeRange
   */
  public function setTimeRange(GoogleTypeInterval $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /**
   * @return GoogleTypeInterval
   */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters');
