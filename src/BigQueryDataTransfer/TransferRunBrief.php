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

class TransferRunBrief extends \Google\Model
{
  /**
   * Optional. Run URI. Format
   * projects/{project}/locations/{location}/transferConfigs/{config}/run/{run}
   *
   * @var string
   */
  public $run;
  /**
   * Optional. Start time of the transfer run.
   *
   * @var string
   */
  public $startTime;

  /**
   * Optional. Run URI. Format
   * projects/{project}/locations/{location}/transferConfigs/{config}/run/{run}
   *
   * @param string $run
   */
  public function setRun($run)
  {
    $this->run = $run;
  }
  /**
   * @return string
   */
  public function getRun()
  {
    return $this->run;
  }
  /**
   * Optional. Start time of the transfer run.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferRunBrief::class, 'Google_Service_BigQueryDataTransfer_TransferRunBrief');
