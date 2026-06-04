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

namespace Google\Service\SA360\Resource;

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateSharedCriteriaRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateSharedCriteriaResponse;

/**
 * The "sharedCriteria" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $sharedCriteria = $searchads360Service->customers_sharedCriteria;
 *  </code>
 */
class CustomersSharedCriteria extends \Google\Service\Resource
{
  /**
   * Creates or removes shared criteria. Operation statuses are returned. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [CriterionError]() [DatabaseError]() [DistinctError]() [FieldError]()
   * [HeaderError]() [IdError]() [InternalError]() [MutateError]()
   * [NotEmptyError]() [NullError]() [OperatorError]() [QuotaError]()
   * [RangeError]() [RequestError]() [ResourceCountLimitExceededError]()
   * [SizeLimitError]() [StringFormatError]() [StringLengthError]()
   * (sharedCriteria.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose shared
   * criteria are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateSharedCriteriaRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateSharedCriteriaResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateSharedCriteriaRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateSharedCriteriaResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersSharedCriteria::class, 'Google_Service_SA360_Resource_CustomersSharedCriteria');
