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

class CapacityHistoryResponse extends \Google\Collection
{
  protected $collection_key = 'priceHistory';
  /**
   * Output only. The location (region or zone) for which the capacity history
   * is returned. It is returned as a URL - For
   * example,https://www.googleapis.com/compute/v1/projects/project/zones/zone.
   *
   * @var string
   */
  public $location;
  /**
   * The machine type for which the capacity history is returned.
   *
   * @var string
   */
  public $machineType;
  protected $preemptionHistoryType = CapacityHistoryResponsePreemptionRecord::class;
  protected $preemptionHistoryDataType = 'array';
  protected $priceHistoryType = CapacityHistoryResponsePriceRecord::class;
  protected $priceHistoryDataType = 'array';

  /**
   * Output only. The location (region or zone) for which the capacity history
   * is returned. It is returned as a URL - For
   * example,https://www.googleapis.com/compute/v1/projects/project/zones/zone.
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
   * The machine type for which the capacity history is returned.
   *
   * @param string $machineType
   */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /**
   * @return string
   */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /**
   * The preemption history for the requested machine type and location.
   *
   * @param CapacityHistoryResponsePreemptionRecord[] $preemptionHistory
   */
  public function setPreemptionHistory($preemptionHistory)
  {
    $this->preemptionHistory = $preemptionHistory;
  }
  /**
   * @return CapacityHistoryResponsePreemptionRecord[]
   */
  public function getPreemptionHistory()
  {
    return $this->preemptionHistory;
  }
  /**
   * The price history for the requested machine type and location.
   *
   * @param CapacityHistoryResponsePriceRecord[] $priceHistory
   */
  public function setPriceHistory($priceHistory)
  {
    $this->priceHistory = $priceHistory;
  }
  /**
   * @return CapacityHistoryResponsePriceRecord[]
   */
  public function getPriceHistory()
  {
    return $this->priceHistory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityHistoryResponse::class, 'Google_Service_Compute_CapacityHistoryResponse');
