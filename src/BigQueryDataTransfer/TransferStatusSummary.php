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

class TransferStatusSummary extends \Google\Collection
{
  /**
   * Default value.
   */
  public const PROGRESS_UNIT_TRANSFER_STATUS_UNIT_UNSPECIFIED = 'TRANSFER_STATUS_UNIT_UNSPECIFIED';
  /**
   * Bytes.
   */
  public const PROGRESS_UNIT_TRANSFER_STATUS_UNIT_BYTES = 'TRANSFER_STATUS_UNIT_BYTES';
  /**
   * Objects.
   */
  public const PROGRESS_UNIT_TRANSFER_STATUS_UNIT_OBJECTS = 'TRANSFER_STATUS_UNIT_OBJECTS';
  protected $collection_key = 'metrics';
  protected $metricsType = TransferStatusMetric::class;
  protected $metricsDataType = 'array';
  /**
   * Input only. Unit based on which transfer status progress should be
   * calculated.
   *
   * @var string
   */
  public $progressUnit;

  /**
   * Optional. List of transfer status metrics.
   *
   * @param TransferStatusMetric[] $metrics
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return TransferStatusMetric[]
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * Input only. Unit based on which transfer status progress should be
   * calculated.
   *
   * Accepted values: TRANSFER_STATUS_UNIT_UNSPECIFIED,
   * TRANSFER_STATUS_UNIT_BYTES, TRANSFER_STATUS_UNIT_OBJECTS
   *
   * @param self::PROGRESS_UNIT_* $progressUnit
   */
  public function setProgressUnit($progressUnit)
  {
    $this->progressUnit = $progressUnit;
  }
  /**
   * @return self::PROGRESS_UNIT_*
   */
  public function getProgressUnit()
  {
    return $this->progressUnit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferStatusSummary::class, 'Google_Service_BigQueryDataTransfer_TransferStatusSummary');
