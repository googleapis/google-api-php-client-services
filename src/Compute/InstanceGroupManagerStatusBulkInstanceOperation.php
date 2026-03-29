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

class InstanceGroupManagerStatusBulkInstanceOperation extends \Google\Model
{
  /**
   * Output only. Informs whether bulk instance operation is in progress.
   *
   * @var bool
   */
  public $inProgress;
  protected $lastProgressCheckType = InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck::class;
  protected $lastProgressCheckDataType = '';

  /**
   * Output only. Informs whether bulk instance operation is in progress.
   *
   * @param bool $inProgress
   */
  public function setInProgress($inProgress)
  {
    $this->inProgress = $inProgress;
  }
  /**
   * @return bool
   */
  public function getInProgress()
  {
    return $this->inProgress;
  }
  /**
   * Output only. Information from the last progress check of bulk instance
   * operation.
   *
   * @param InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck $lastProgressCheck
   */
  public function setLastProgressCheck(InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck $lastProgressCheck)
  {
    $this->lastProgressCheck = $lastProgressCheck;
  }
  /**
   * @return InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck
   */
  public function getLastProgressCheck()
  {
    return $this->lastProgressCheck;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerStatusBulkInstanceOperation::class, 'Google_Service_Compute_InstanceGroupManagerStatusBulkInstanceOperation');
