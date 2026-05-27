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

namespace Google\Service\Dataproc;

class UsageMetrics extends \Google\Model
{
  /**
   * Optional. Accelerator type being used, if any Deprecated: This field is
   * only used in runtime versions below 3.0.
   *
   * @var string
   */
  public $acceleratorType;
  /**
   * Optional. Accelerator usage in (milliAccelerator x seconds) (see Dataproc
   * Serverless pricing (https://cloud.google.com/dataproc-serverless/pricing)).
   * Deprecated: This field is only used in runtime versions below 3.0.
   *
   * @var string
   */
  public $milliAcceleratorSeconds;
  /**
   * Optional. A100-40 accelerator usage in (milliAccelerator x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @var string
   */
  public $milliAcceleratorSecondsA10040;
  /**
   * Optional. A100-80 accelerator usage in (milliAccelerator x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @var string
   */
  public $milliAcceleratorSecondsA10080;
  /**
   * Optional. L4 accelerator usage in (milliAccelerator x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @var string
   */
  public $milliAcceleratorSecondsL4;
  /**
   * Optional. DCU (Dataproc Compute Units) usage in (milliDCU x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @var string
   */
  public $milliDcuSeconds;
  /**
   * Optional. Shuffle storage usage in (GB x seconds) (see Dataproc Serverless
   * pricing (https://cloud.google.com/dataproc-serverless/pricing)).
   *
   * @var string
   */
  public $shuffleStorageGbSeconds;
  /**
   * Optional. The timestamp of the usage metrics.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Accelerator type being used, if any Deprecated: This field is
   * only used in runtime versions below 3.0.
   *
   * @param string $acceleratorType
   */
  public function setAcceleratorType($acceleratorType)
  {
    $this->acceleratorType = $acceleratorType;
  }
  /**
   * @return string
   */
  public function getAcceleratorType()
  {
    return $this->acceleratorType;
  }
  /**
   * Optional. Accelerator usage in (milliAccelerator x seconds) (see Dataproc
   * Serverless pricing (https://cloud.google.com/dataproc-serverless/pricing)).
   * Deprecated: This field is only used in runtime versions below 3.0.
   *
   * @param string $milliAcceleratorSeconds
   */
  public function setMilliAcceleratorSeconds($milliAcceleratorSeconds)
  {
    $this->milliAcceleratorSeconds = $milliAcceleratorSeconds;
  }
  /**
   * @return string
   */
  public function getMilliAcceleratorSeconds()
  {
    return $this->milliAcceleratorSeconds;
  }
  /**
   * Optional. A100-40 accelerator usage in (milliAccelerator x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @param string $milliAcceleratorSecondsA10040
   */
  public function setMilliAcceleratorSecondsA10040($milliAcceleratorSecondsA10040)
  {
    $this->milliAcceleratorSecondsA10040 = $milliAcceleratorSecondsA10040;
  }
  /**
   * @return string
   */
  public function getMilliAcceleratorSecondsA10040()
  {
    return $this->milliAcceleratorSecondsA10040;
  }
  /**
   * Optional. A100-80 accelerator usage in (milliAccelerator x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @param string $milliAcceleratorSecondsA10080
   */
  public function setMilliAcceleratorSecondsA10080($milliAcceleratorSecondsA10080)
  {
    $this->milliAcceleratorSecondsA10080 = $milliAcceleratorSecondsA10080;
  }
  /**
   * @return string
   */
  public function getMilliAcceleratorSecondsA10080()
  {
    return $this->milliAcceleratorSecondsA10080;
  }
  /**
   * Optional. L4 accelerator usage in (milliAccelerator x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @param string $milliAcceleratorSecondsL4
   */
  public function setMilliAcceleratorSecondsL4($milliAcceleratorSecondsL4)
  {
    $this->milliAcceleratorSecondsL4 = $milliAcceleratorSecondsL4;
  }
  /**
   * @return string
   */
  public function getMilliAcceleratorSecondsL4()
  {
    return $this->milliAcceleratorSecondsL4;
  }
  /**
   * Optional. DCU (Dataproc Compute Units) usage in (milliDCU x seconds) (see
   * Dataproc Serverless pricing (https://cloud.google.com/dataproc-
   * serverless/pricing)).
   *
   * @param string $milliDcuSeconds
   */
  public function setMilliDcuSeconds($milliDcuSeconds)
  {
    $this->milliDcuSeconds = $milliDcuSeconds;
  }
  /**
   * @return string
   */
  public function getMilliDcuSeconds()
  {
    return $this->milliDcuSeconds;
  }
  /**
   * Optional. Shuffle storage usage in (GB x seconds) (see Dataproc Serverless
   * pricing (https://cloud.google.com/dataproc-serverless/pricing)).
   *
   * @param string $shuffleStorageGbSeconds
   */
  public function setShuffleStorageGbSeconds($shuffleStorageGbSeconds)
  {
    $this->shuffleStorageGbSeconds = $shuffleStorageGbSeconds;
  }
  /**
   * @return string
   */
  public function getShuffleStorageGbSeconds()
  {
    return $this->shuffleStorageGbSeconds;
  }
  /**
   * Optional. The timestamp of the usage metrics.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsageMetrics::class, 'Google_Service_Dataproc_UsageMetrics');
