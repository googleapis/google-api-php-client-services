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

namespace Google\Service\SaaSServiceManagement;

class ReplicationStats extends \Google\Collection
{
  protected $collection_key = 'retryCount';
  protected $errorsType = Status::class;
  protected $errorsDataType = 'array';
  /**
   * @var string[]
   */
  public $failedResources;
  /**
   * @var string[]
   */
  public $finishedResources;
  /**
   * @var string[]
   */
  public $pendingResources;
  /**
   * @var int[]
   */
  public $retryCount;

  /**
   * @param Status[]
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Status[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * @param string[]
   */
  public function setFailedResources($failedResources)
  {
    $this->failedResources = $failedResources;
  }
  /**
   * @return string[]
   */
  public function getFailedResources()
  {
    return $this->failedResources;
  }
  /**
   * @param string[]
   */
  public function setFinishedResources($finishedResources)
  {
    $this->finishedResources = $finishedResources;
  }
  /**
   * @return string[]
   */
  public function getFinishedResources()
  {
    return $this->finishedResources;
  }
  /**
   * @param string[]
   */
  public function setPendingResources($pendingResources)
  {
    $this->pendingResources = $pendingResources;
  }
  /**
   * @return string[]
   */
  public function getPendingResources()
  {
    return $this->pendingResources;
  }
  /**
   * @param int[]
   */
  public function setRetryCount($retryCount)
  {
    $this->retryCount = $retryCount;
  }
  /**
   * @return int[]
   */
  public function getRetryCount()
  {
    return $this->retryCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReplicationStats::class, 'Google_Service_SaaSServiceManagement_ReplicationStats');
