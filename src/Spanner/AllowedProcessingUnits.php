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

namespace Google\Service\Spanner;

class AllowedProcessingUnits extends \Google\Model
{
  /**
   * The maximum value of processing units applicable to this interval,
   * inclusive. If unset, there is no predefined limit to the supported number
   * of processing units, although project quota limits still apply.
   *
   * @var int
   */
  public $maxProcessingUnits;
  /**
   * The minimum value of processing units applicable to this interval,
   * inclusive.
   *
   * @var int
   */
  public $minProcessingUnits;
  /**
   * Allowed increments of processing units between “min” and “max”.
   *
   * @var int
   */
  public $processingUnitIncrement;

  /**
   * The maximum value of processing units applicable to this interval,
   * inclusive. If unset, there is no predefined limit to the supported number
   * of processing units, although project quota limits still apply.
   *
   * @param int $maxProcessingUnits
   */
  public function setMaxProcessingUnits($maxProcessingUnits)
  {
    $this->maxProcessingUnits = $maxProcessingUnits;
  }
  /**
   * @return int
   */
  public function getMaxProcessingUnits()
  {
    return $this->maxProcessingUnits;
  }
  /**
   * The minimum value of processing units applicable to this interval,
   * inclusive.
   *
   * @param int $minProcessingUnits
   */
  public function setMinProcessingUnits($minProcessingUnits)
  {
    $this->minProcessingUnits = $minProcessingUnits;
  }
  /**
   * @return int
   */
  public function getMinProcessingUnits()
  {
    return $this->minProcessingUnits;
  }
  /**
   * Allowed increments of processing units between “min” and “max”.
   *
   * @param int $processingUnitIncrement
   */
  public function setProcessingUnitIncrement($processingUnitIncrement)
  {
    $this->processingUnitIncrement = $processingUnitIncrement;
  }
  /**
   * @return int
   */
  public function getProcessingUnitIncrement()
  {
    return $this->processingUnitIncrement;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllowedProcessingUnits::class, 'Google_Service_Spanner_AllowedProcessingUnits');
