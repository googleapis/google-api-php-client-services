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

class Metrics extends \Google\Model
{
  protected $currentMemoryUsedBytesType = MetricData::class;
  protected $currentMemoryUsedBytesDataType = '';
  protected $currentStorageUsedBytesType = MetricData::class;
  protected $currentStorageUsedBytesDataType = '';
  protected $nodeCountType = MetricData::class;
  protected $nodeCountDataType = '';
  protected $p95CpuUtilizationType = MetricData::class;
  protected $p95CpuUtilizationDataType = '';
  protected $p99CpuUtilizationType = MetricData::class;
  protected $p99CpuUtilizationDataType = '';
  protected $peakMemoryUtilizationType = MetricData::class;
  protected $peakMemoryUtilizationDataType = '';
  protected $peakNumberConnectionsType = MetricData::class;
  protected $peakNumberConnectionsDataType = '';
  protected $peakStorageUtilizationType = MetricData::class;
  protected $peakStorageUtilizationDataType = '';
  protected $processingUnitCountType = MetricData::class;
  protected $processingUnitCountDataType = '';

  /**
   * Current memory used by the resource in bytes.
   *
   * @param MetricData $currentMemoryUsedBytes
   */
  public function setCurrentMemoryUsedBytes(MetricData $currentMemoryUsedBytes)
  {
    $this->currentMemoryUsedBytes = $currentMemoryUsedBytes;
  }
  /**
   * @return MetricData
   */
  public function getCurrentMemoryUsedBytes()
  {
    return $this->currentMemoryUsedBytes;
  }
  /**
   * Current storage used by the resource in bytes.
   *
   * @param MetricData $currentStorageUsedBytes
   */
  public function setCurrentStorageUsedBytes(MetricData $currentStorageUsedBytes)
  {
    $this->currentStorageUsedBytes = $currentStorageUsedBytes;
  }
  /**
   * @return MetricData
   */
  public function getCurrentStorageUsedBytes()
  {
    return $this->currentStorageUsedBytes;
  }
  /**
   * Number of nodes in instance for spanner or bigtable.
   *
   * @param MetricData $nodeCount
   */
  public function setNodeCount(MetricData $nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }
  /**
   * @return MetricData
   */
  public function getNodeCount()
  {
    return $this->nodeCount;
  }
  /**
   * P95 CPU utilization observed for the resource. The value is a fraction
   * between 0.0 and 1.0 (may momentarily exceed 1.0 in some cases).
   *
   * @param MetricData $p95CpuUtilization
   */
  public function setP95CpuUtilization(MetricData $p95CpuUtilization)
  {
    $this->p95CpuUtilization = $p95CpuUtilization;
  }
  /**
   * @return MetricData
   */
  public function getP95CpuUtilization()
  {
    return $this->p95CpuUtilization;
  }
  /**
   * P99 CPU utilization observed for the resource. The value is a fraction
   * between 0.0 and 1.0 (may momentarily exceed 1.0 in some cases).
   *
   * @param MetricData $p99CpuUtilization
   */
  public function setP99CpuUtilization(MetricData $p99CpuUtilization)
  {
    $this->p99CpuUtilization = $p99CpuUtilization;
  }
  /**
   * @return MetricData
   */
  public function getP99CpuUtilization()
  {
    return $this->p99CpuUtilization;
  }
  /**
   * Peak memory utilization observed for the resource. The value is a fraction
   * between 0.0 and 1.0 (may momentarily exceed 1.0 in some cases).
   *
   * @param MetricData $peakMemoryUtilization
   */
  public function setPeakMemoryUtilization(MetricData $peakMemoryUtilization)
  {
    $this->peakMemoryUtilization = $peakMemoryUtilization;
  }
  /**
   * @return MetricData
   */
  public function getPeakMemoryUtilization()
  {
    return $this->peakMemoryUtilization;
  }
  /**
   * Peak number of connections observed for the resource. The value is a
   * positive integer.
   *
   * @param MetricData $peakNumberConnections
   */
  public function setPeakNumberConnections(MetricData $peakNumberConnections)
  {
    $this->peakNumberConnections = $peakNumberConnections;
  }
  /**
   * @return MetricData
   */
  public function getPeakNumberConnections()
  {
    return $this->peakNumberConnections;
  }
  /**
   * Peak storage utilization observed for the resource. The value is a fraction
   * between 0.0 and 1.0 (may momentarily exceed 1.0 in some cases).
   *
   * @param MetricData $peakStorageUtilization
   */
  public function setPeakStorageUtilization(MetricData $peakStorageUtilization)
  {
    $this->peakStorageUtilization = $peakStorageUtilization;
  }
  /**
   * @return MetricData
   */
  public function getPeakStorageUtilization()
  {
    return $this->peakStorageUtilization;
  }
  /**
   * Number of processing units in spanner.
   *
   * @param MetricData $processingUnitCount
   */
  public function setProcessingUnitCount(MetricData $processingUnitCount)
  {
    $this->processingUnitCount = $processingUnitCount;
  }
  /**
   * @return MetricData
   */
  public function getProcessingUnitCount()
  {
    return $this->processingUnitCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metrics::class, 'Google_Service_DatabaseCenter_Metrics');
