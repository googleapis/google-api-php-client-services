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

class GoogleAdsSearchads360V23ServicesAddBatchJobOperationsRequest extends \Google\Collection
{
  protected $collection_key = 'mutateOperations';
  protected $mutateOperationsType = GoogleAdsSearchads360V23ServicesMutateOperation::class;
  protected $mutateOperationsDataType = 'array';
  /**
   * A token used to enforce sequencing. The first AddBatchJobOperations request
   * for a batch job should not set sequence_token. Subsequent requests must set
   * sequence_token to the value of next_sequence_token received in the previous
   * AddBatchJobOperations response.
   *
   * @var string
   */
  public $sequenceToken;

  /**
   * Required. The list of mutates being added. Operations can use negative
   * integers as temp ids to signify dependencies between entities created in
   * this batch job. For example, a customer with id = 1234 can create a
   * campaign and an ad group in that same campaign by creating a campaign in
   * the first operation with the resource name explicitly set to
   * "customers/1234/campaigns/-1", and creating an ad group in the second
   * operation with the campaign field also set to
   * "customers/1234/campaigns/-1".
   *
   * @param GoogleAdsSearchads360V23ServicesMutateOperation[] $mutateOperations
   */
  public function setMutateOperations($mutateOperations)
  {
    $this->mutateOperations = $mutateOperations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesMutateOperation[]
   */
  public function getMutateOperations()
  {
    return $this->mutateOperations;
  }
  /**
   * A token used to enforce sequencing. The first AddBatchJobOperations request
   * for a batch job should not set sequence_token. Subsequent requests must set
   * sequence_token to the value of next_sequence_token received in the previous
   * AddBatchJobOperations response.
   *
   * @param string $sequenceToken
   */
  public function setSequenceToken($sequenceToken)
  {
    $this->sequenceToken = $sequenceToken;
  }
  /**
   * @return string
   */
  public function getSequenceToken()
  {
    return $this->sequenceToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAddBatchJobOperationsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAddBatchJobOperationsRequest');
