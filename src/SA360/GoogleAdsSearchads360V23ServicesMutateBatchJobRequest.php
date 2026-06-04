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

class GoogleAdsSearchads360V23ServicesMutateBatchJobRequest extends \Google\Model
{
  protected $operationType = GoogleAdsSearchads360V23ServicesBatchJobOperation::class;
  protected $operationDataType = '';

  /**
   * Required. The operation to perform on an individual batch job.
   *
   * @param GoogleAdsSearchads360V23ServicesBatchJobOperation $operation
   */
  public function setOperation(GoogleAdsSearchads360V23ServicesBatchJobOperation $operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBatchJobOperation
   */
  public function getOperation()
  {
    return $this->operation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateBatchJobRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateBatchJobRequest');
