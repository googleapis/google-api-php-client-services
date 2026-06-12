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

class UnitUpdatePacing extends \Google\Model
{
  /**
   * Optional. An absolute cap on concurrent units operations. If both percent
   * and count are provided, the system uses the MINIMUM (most restrictive).
   *
   * @var int
   */
  public $maxConcurrentOperationsCount;
  protected $maxConcurrentOperationsPercentType = Decimal::class;
  protected $maxConcurrentOperationsPercentDataType = '';

  /**
   * Optional. An absolute cap on concurrent units operations. If both percent
   * and count are provided, the system uses the MINIMUM (most restrictive).
   *
   * @param int $maxConcurrentOperationsCount
   */
  public function setMaxConcurrentOperationsCount($maxConcurrentOperationsCount)
  {
    $this->maxConcurrentOperationsCount = $maxConcurrentOperationsCount;
  }
  /**
   * @return int
   */
  public function getMaxConcurrentOperationsCount()
  {
    return $this->maxConcurrentOperationsCount;
  }
  /**
   * Optional. The maximum percentage of total units in the scope that can be
   * in-flight. Example: 10.5 for 10.5%. If both percent and count are provided,
   * the system uses the MINIMUM (most restrictive).
   *
   * @param Decimal $maxConcurrentOperationsPercent
   */
  public function setMaxConcurrentOperationsPercent(Decimal $maxConcurrentOperationsPercent)
  {
    $this->maxConcurrentOperationsPercent = $maxConcurrentOperationsPercent;
  }
  /**
   * @return Decimal
   */
  public function getMaxConcurrentOperationsPercent()
  {
    return $this->maxConcurrentOperationsPercent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UnitUpdatePacing::class, 'Google_Service_SaaSServiceManagement_UnitUpdatePacing');
