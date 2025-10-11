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

class FutureReservationCommitmentInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $commitmentName;
  /**
   * @var string
   */
  public $commitmentPlan;
  /**
   * @var string
   */
  public $previousCommitmentTerms;

  /**
   * @param string
   */
  public function setCommitmentName($commitmentName)
  {
    $this->commitmentName = $commitmentName;
  }
  /**
   * @return string
   */
  public function getCommitmentName()
  {
    return $this->commitmentName;
  }
  /**
   * @param string
   */
  public function setCommitmentPlan($commitmentPlan)
  {
    $this->commitmentPlan = $commitmentPlan;
  }
  /**
   * @return string
   */
  public function getCommitmentPlan()
  {
    return $this->commitmentPlan;
  }
  /**
   * @param string
   */
  public function setPreviousCommitmentTerms($previousCommitmentTerms)
  {
    $this->previousCommitmentTerms = $previousCommitmentTerms;
  }
  /**
   * @return string
   */
  public function getPreviousCommitmentTerms()
  {
    return $this->previousCommitmentTerms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FutureReservationCommitmentInfo::class, 'Google_Service_Compute_FutureReservationCommitmentInfo');
