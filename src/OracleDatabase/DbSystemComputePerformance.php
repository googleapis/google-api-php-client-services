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

namespace Google\Service\OracleDatabase;

class DbSystemComputePerformance extends \Google\Collection
{
  protected $collection_key = 'computePerformances';
  protected $computePerformancesType = ComputePerformance::class;
  protected $computePerformancesDataType = 'array';
  /**
   * Identifier. The name of the DbSystemComputePerformance resource with the
   * format: projects/{project}/locations/{location}/dbSystemComputePerformances
   * /{db_system_compute_performance}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The shape of the DB system.
   *
   * @var string
   */
  public $shape;

  /**
   * Output only. List of Compute performance details for the specified DB
   * system shape.
   *
   * @param ComputePerformance[] $computePerformances
   */
  public function setComputePerformances($computePerformances)
  {
    $this->computePerformances = $computePerformances;
  }
  /**
   * @return ComputePerformance[]
   */
  public function getComputePerformances()
  {
    return $this->computePerformances;
  }
  /**
   * Identifier. The name of the DbSystemComputePerformance resource with the
   * format: projects/{project}/locations/{location}/dbSystemComputePerformances
   * /{db_system_compute_performance}
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
   * Output only. The shape of the DB system.
   *
   * @param string $shape
   */
  public function setShape($shape)
  {
    $this->shape = $shape;
  }
  /**
   * @return string
   */
  public function getShape()
  {
    return $this->shape;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DbSystemComputePerformance::class, 'Google_Service_OracleDatabase_DbSystemComputePerformance');
