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

namespace Google\Service\GoogleHealthAPI;

class SleepMetadata extends \Google\Model
{
  /**
   * Output only. Sleep stages status is unspecified.
   */
  public const STAGES_STATUS_STAGES_STATE_UNSPECIFIED = 'STAGES_STATE_UNSPECIFIED';
  /**
   * Output only. Sleep stages cannot be computed due to low RR coverage.
   */
  public const STAGES_STATUS_REJECTED_COVERAGE = 'REJECTED_COVERAGE';
  /**
   * Output only. Sleep stages cannot be computed due to the large middle gap
   * (2h).
   */
  public const STAGES_STATUS_REJECTED_MAX_GAP = 'REJECTED_MAX_GAP';
  /**
   * Output only. Sleep stages cannot be computed due to the large start gap
   * (1h).
   */
  public const STAGES_STATUS_REJECTED_START_GAP = 'REJECTED_START_GAP';
  /**
   * Output only. Sleep stages cannot be computed due to the large end gap (1h).
   */
  public const STAGES_STATUS_REJECTED_END_GAP = 'REJECTED_END_GAP';
  /**
   * Output only. Sleep stages cannot be computed because the sleep log is a nap
   * (has < 3h duration).
   */
  public const STAGES_STATUS_REJECTED_NAP = 'REJECTED_NAP';
  /**
   * Output only. Sleep stages cannot be computed because input data is not
   * available (PPGV2, wake magnitude, etc).
   */
  public const STAGES_STATUS_REJECTED_SERVER = 'REJECTED_SERVER';
  /**
   * Output only. Sleep stages cannot be computed due to server timeout.
   */
  public const STAGES_STATUS_TIMEOUT = 'TIMEOUT';
  /**
   * Output only. Sleep stages successfully computed.
   */
  public const STAGES_STATUS_SUCCEEDED = 'SUCCEEDED';
  /**
   * Output only. Sleep stages cannot be computed due to server internal error.
   */
  public const STAGES_STATUS_PROCESSING_INTERNAL_ERROR = 'PROCESSING_INTERNAL_ERROR';
  /**
   * Optional. Sleep identifier relevant in the context of the data source.
   *
   * @var string
   */
  public $externalId;
  /**
   * Output only. Some sleeps autodetected by algorithms can be manually edited
   * by users.
   *
   * @var bool
   */
  public $manuallyEdited;
  /**
   * Output only. Naps are sleeps without stages and relatively short durations.
   *
   * @var bool
   */
  public $nap;
  /**
   * Output only. Sleep and sleep stages algorithms finished processing.
   *
   * @var bool
   */
  public $processed;
  /**
   * Output only. Sleep stages algorithm processing status.
   *
   * @var string
   */
  public $stagesStatus;

  /**
   * Optional. Sleep identifier relevant in the context of the data source.
   *
   * @param string $externalId
   */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /**
   * @return string
   */
  public function getExternalId()
  {
    return $this->externalId;
  }
  /**
   * Output only. Some sleeps autodetected by algorithms can be manually edited
   * by users.
   *
   * @param bool $manuallyEdited
   */
  public function setManuallyEdited($manuallyEdited)
  {
    $this->manuallyEdited = $manuallyEdited;
  }
  /**
   * @return bool
   */
  public function getManuallyEdited()
  {
    return $this->manuallyEdited;
  }
  /**
   * Output only. Naps are sleeps without stages and relatively short durations.
   *
   * @param bool $nap
   */
  public function setNap($nap)
  {
    $this->nap = $nap;
  }
  /**
   * @return bool
   */
  public function getNap()
  {
    return $this->nap;
  }
  /**
   * Output only. Sleep and sleep stages algorithms finished processing.
   *
   * @param bool $processed
   */
  public function setProcessed($processed)
  {
    $this->processed = $processed;
  }
  /**
   * @return bool
   */
  public function getProcessed()
  {
    return $this->processed;
  }
  /**
   * Output only. Sleep stages algorithm processing status.
   *
   * Accepted values: STAGES_STATE_UNSPECIFIED, REJECTED_COVERAGE,
   * REJECTED_MAX_GAP, REJECTED_START_GAP, REJECTED_END_GAP, REJECTED_NAP,
   * REJECTED_SERVER, TIMEOUT, SUCCEEDED, PROCESSING_INTERNAL_ERROR
   *
   * @param self::STAGES_STATUS_* $stagesStatus
   */
  public function setStagesStatus($stagesStatus)
  {
    $this->stagesStatus = $stagesStatus;
  }
  /**
   * @return self::STAGES_STATUS_*
   */
  public function getStagesStatus()
  {
    return $this->stagesStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SleepMetadata::class, 'Google_Service_GoogleHealthAPI_SleepMetadata');
