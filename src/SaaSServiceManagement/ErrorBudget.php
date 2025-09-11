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

class ErrorBudget extends \Google\Model
{
  /**
   * @var int
   */
  public $allowedCount;
  /**
   * @var int
   */
  public $allowedPercentage;

  /**
   * @param int
   */
  public function setAllowedCount($allowedCount)
  {
    $this->allowedCount = $allowedCount;
  }
  /**
   * @return int
   */
  public function getAllowedCount()
  {
    return $this->allowedCount;
  }
  /**
   * @param int
   */
  public function setAllowedPercentage($allowedPercentage)
  {
    $this->allowedPercentage = $allowedPercentage;
  }
  /**
   * @return int
   */
  public function getAllowedPercentage()
  {
    return $this->allowedPercentage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ErrorBudget::class, 'Google_Service_SaaSServiceManagement_ErrorBudget');
