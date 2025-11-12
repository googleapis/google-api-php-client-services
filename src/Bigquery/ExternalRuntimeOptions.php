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

class ExternalRuntimeOptions extends \Google\Model
{
  public $containerCpu;
  /**
   * @var string
   */
  public $containerMemory;
  /**
   * @var string
   */
  public $maxBatchingRows;
  /**
   * @var string
   */
  public $runtimeConnection;
  /**
   * @var string
   */
  public $runtimeVersion;

  public function setContainerCpu($containerCpu)
  {
    $this->containerCpu = $containerCpu;
  }
  public function getContainerCpu()
  {
    return $this->containerCpu;
  }
  /**
   * @param string
   */
  public function setContainerMemory($containerMemory)
  {
    $this->containerMemory = $containerMemory;
  }
  /**
   * @return string
   */
  public function getContainerMemory()
  {
    return $this->containerMemory;
  }
  /**
   * @param string
   */
  public function setMaxBatchingRows($maxBatchingRows)
  {
    $this->maxBatchingRows = $maxBatchingRows;
  }
  /**
   * @return string
   */
  public function getMaxBatchingRows()
  {
    return $this->maxBatchingRows;
  }
  /**
   * @param string
   */
  public function setRuntimeConnection($runtimeConnection)
  {
    $this->runtimeConnection = $runtimeConnection;
  }
  /**
   * @return string
   */
  public function getRuntimeConnection()
  {
    return $this->runtimeConnection;
  }
  /**
   * @param string
   */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /**
   * @return string
   */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExternalRuntimeOptions::class, 'Google_Service_Bigquery_ExternalRuntimeOptions');
