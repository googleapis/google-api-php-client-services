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

namespace Google\Service\Storagetransfer;

class LoggingConfig extends \Google\Collection
{
  protected $collection_key = 'logActions';
  public $enableOnpremGcsTransferLogs;
  public $logActionStates;
  public $logActions;

  public function setEnableOnpremGcsTransferLogs($enableOnpremGcsTransferLogs)
  {
    $this->enableOnpremGcsTransferLogs = $enableOnpremGcsTransferLogs;
  }
  public function getEnableOnpremGcsTransferLogs()
  {
    return $this->enableOnpremGcsTransferLogs;
  }
  public function setLogActionStates($logActionStates)
  {
    $this->logActionStates = $logActionStates;
  }
  public function getLogActionStates()
  {
    return $this->logActionStates;
  }
  public function setLogActions($logActions)
  {
    $this->logActions = $logActions;
  }
  public function getLogActions()
  {
    return $this->logActions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LoggingConfig::class, 'Google_Service_Storagetransfer_LoggingConfig');
