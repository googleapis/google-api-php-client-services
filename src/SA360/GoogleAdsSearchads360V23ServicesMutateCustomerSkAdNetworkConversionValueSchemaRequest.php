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

class GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaRequest extends \Google\Model
{
  /**
   * Optional. If true, enables returning warnings. Warnings return error
   * messages and error codes without blocking the execution of the mutate
   * operation.
   *
   * @var bool
   */
  public $enableWarnings;
  protected $operationType = GoogleAdsSearchads360V23ServicesCustomerSkAdNetworkConversionValueSchemaOperation::class;
  protected $operationDataType = '';
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Optional. If true, enables returning warnings. Warnings return error
   * messages and error codes without blocking the execution of the mutate
   * operation.
   *
   * @param bool $enableWarnings
   */
  public function setEnableWarnings($enableWarnings)
  {
    $this->enableWarnings = $enableWarnings;
  }
  /**
   * @return bool
   */
  public function getEnableWarnings()
  {
    return $this->enableWarnings;
  }
  /**
   * The operation to perform.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerSkAdNetworkConversionValueSchemaOperation $operation
   */
  public function setOperation(GoogleAdsSearchads360V23ServicesCustomerSkAdNetworkConversionValueSchemaOperation $operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerSkAdNetworkConversionValueSchemaOperation
   */
  public function getOperation()
  {
    return $this->operation;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaRequest');
