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

namespace Google\Service\BigQueryDataTransfer;

class TransferStatusMetric extends \Google\Model
{
  /**
   * Default value.
   */
  public const UNIT_TRANSFER_STATUS_UNIT_UNSPECIFIED = 'TRANSFER_STATUS_UNIT_UNSPECIFIED';
  /**
   * Bytes.
   */
  public const UNIT_TRANSFER_STATUS_UNIT_BYTES = 'TRANSFER_STATUS_UNIT_BYTES';
  /**
   * Objects.
   */
  public const UNIT_TRANSFER_STATUS_UNIT_OBJECTS = 'TRANSFER_STATUS_UNIT_OBJECTS';
  /**
   * Optional. Number of units transferred successfully.
   *
   * @var string
   */
  public $completed;
  /**
   * Optional. Number of units that failed to transfer.
   *
   * @var string
   */
  public $failed;
  /**
   * Optional. Number of units pending transfer.
   *
   * @var string
   */
  public $pending;
  /**
   * Optional. Total number of units for the transfer.
   *
   * @var string
   */
  public $total;
  /**
   * Optional. Unit for measuring progress (e.g., BYTES).
   *
   * @var string
   */
  public $unit;

  /**
   * Optional. Number of units transferred successfully.
   *
   * @param string $completed
   */
  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  /**
   * @return string
   */
  public function getCompleted()
  {
    return $this->completed;
  }
  /**
   * Optional. Number of units that failed to transfer.
   *
   * @param string $failed
   */
  public function setFailed($failed)
  {
    $this->failed = $failed;
  }
  /**
   * @return string
   */
  public function getFailed()
  {
    return $this->failed;
  }
  /**
   * Optional. Number of units pending transfer.
   *
   * @param string $pending
   */
  public function setPending($pending)
  {
    $this->pending = $pending;
  }
  /**
   * @return string
   */
  public function getPending()
  {
    return $this->pending;
  }
  /**
   * Optional. Total number of units for the transfer.
   *
   * @param string $total
   */
  public function setTotal($total)
  {
    $this->total = $total;
  }
  /**
   * @return string
   */
  public function getTotal()
  {
    return $this->total;
  }
  /**
   * Optional. Unit for measuring progress (e.g., BYTES).
   *
   * Accepted values: TRANSFER_STATUS_UNIT_UNSPECIFIED,
   * TRANSFER_STATUS_UNIT_BYTES, TRANSFER_STATUS_UNIT_OBJECTS
   *
   * @param self::UNIT_* $unit
   */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /**
   * @return self::UNIT_*
   */
  public function getUnit()
  {
    return $this->unit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferStatusMetric::class, 'Google_Service_BigQueryDataTransfer_TransferStatusMetric');
