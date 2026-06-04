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

class GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResponse extends \Google\Model
{
  protected $resultType = GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult::class;
  protected $resultDataType = '';
  protected $warningType = GoogleRpcStatus::class;
  protected $warningDataType = '';

  /**
   * All results for the mutate.
   *
   * @param GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult $result
   */
  public function setResult(GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult $result)
  {
    $this->result = $result;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult
   */
  public function getResult()
  {
    return $this->result;
  }
  /**
   * Non blocking errors that provides schema validation failure details.
   * Returned only when enable_warnings = true.
   *
   * @param GoogleRpcStatus $warning
   */
  public function setWarning(GoogleRpcStatus $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getWarning()
  {
    return $this->warning;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResponse');
