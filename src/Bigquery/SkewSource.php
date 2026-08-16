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

namespace Google\Service\Bigquery;

class SkewSource extends \Google\Model
{
  /**
   * Output only. Max partition output size (in bytes) for this stage.
   *
   * @var string
   */
  public $outputBytesMax;
  /**
   * Output only. Median partition output size (in bytes) for this stage.
   *
   * @var string
   */
  public $outputBytesMedian;
  /**
   * Output only. 95-th percentile of partition output size (in bytes) for this
   * stage.
   *
   * @var string
   */
  public $outputBytesP95;
  /**
   * Output only. Stage id of the skew source stage.
   *
   * @var string
   */
  public $stageId;

  /**
   * Output only. Max partition output size (in bytes) for this stage.
   *
   * @param string $outputBytesMax
   */
  public function setOutputBytesMax($outputBytesMax)
  {
    $this->outputBytesMax = $outputBytesMax;
  }
  /**
   * @return string
   */
  public function getOutputBytesMax()
  {
    return $this->outputBytesMax;
  }
  /**
   * Output only. Median partition output size (in bytes) for this stage.
   *
   * @param string $outputBytesMedian
   */
  public function setOutputBytesMedian($outputBytesMedian)
  {
    $this->outputBytesMedian = $outputBytesMedian;
  }
  /**
   * @return string
   */
  public function getOutputBytesMedian()
  {
    return $this->outputBytesMedian;
  }
  /**
   * Output only. 95-th percentile of partition output size (in bytes) for this
   * stage.
   *
   * @param string $outputBytesP95
   */
  public function setOutputBytesP95($outputBytesP95)
  {
    $this->outputBytesP95 = $outputBytesP95;
  }
  /**
   * @return string
   */
  public function getOutputBytesP95()
  {
    return $this->outputBytesP95;
  }
  /**
   * Output only. Stage id of the skew source stage.
   *
   * @param string $stageId
   */
  public function setStageId($stageId)
  {
    $this->stageId = $stageId;
  }
  /**
   * @return string
   */
  public function getStageId()
  {
    return $this->stageId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SkewSource::class, 'Google_Service_Bigquery_SkewSource');
