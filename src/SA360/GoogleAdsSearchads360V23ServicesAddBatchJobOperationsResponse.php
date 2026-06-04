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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesAddBatchJobOperationsResponse extends \Google\Model
{
  /**
   * The sequence token to be used when calling AddBatchJobOperations again if
   * more operations need to be added. The next AddBatchJobOperations request
   * must set the sequence_token field to the value of this field.
   *
   * @var string
   */
  public $nextSequenceToken;
  /**
   * The total number of operations added so far for this batch job.
   *
   * @var string
   */
  public $totalOperations;

  /**
   * The sequence token to be used when calling AddBatchJobOperations again if
   * more operations need to be added. The next AddBatchJobOperations request
   * must set the sequence_token field to the value of this field.
   *
   * @param string $nextSequenceToken
   */
  public function setNextSequenceToken($nextSequenceToken)
  {
    $this->nextSequenceToken = $nextSequenceToken;
  }
  /**
   * @return string
   */
  public function getNextSequenceToken()
  {
    return $this->nextSequenceToken;
  }
  /**
   * The total number of operations added so far for this batch job.
   *
   * @param string $totalOperations
   */
  public function setTotalOperations($totalOperations)
  {
    $this->totalOperations = $totalOperations;
  }
  /**
   * @return string
   */
  public function getTotalOperations()
  {
    return $this->totalOperations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAddBatchJobOperationsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAddBatchJobOperationsResponse');
