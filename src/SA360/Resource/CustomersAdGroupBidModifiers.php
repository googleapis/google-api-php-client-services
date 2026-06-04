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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdGroupBidModifiersRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateAdGroupBidModifiersResponse;

/**
 * The "adGroupBidModifiers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $adGroupBidModifiers = $searchads360Service->customers_adGroupBidModifiers;
 *  </code>
 */
class CustomersAdGroupBidModifiers extends \Google\Service\Resource
{
  /**
   * Creates, updates, or removes ad group bid modifiers. Operation statuses are
   * returned. List of thrown errors: [AdGroupBidModifierError]()
   * [AuthenticationError]() [AuthorizationError]() [ContextError]()
   * [CriterionError]() [DatabaseError]() [DistinctError]() [FieldError]()
   * [FieldMaskError]() [HeaderError]() [IdError]() [InternalError]()
   * [MutateError]() [NewResourceCreationError]() [NotEmptyError]()
   * [OperatorError]() [QuotaError]() [RangeError]() [RequestError]()
   * [ResourceCountLimitExceededError]() [SizeLimitError]() [StringFormatError]()
   * [StringLengthError]() (adGroupBidModifiers.mutate)
   *
   * @param string $customerId Required. ID of the customer whose ad group bid
   * modifiers are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateAdGroupBidModifiersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateAdGroupBidModifiersResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateAdGroupBidModifiersRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateAdGroupBidModifiersResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersAdGroupBidModifiers::class, 'Google_Service_SA360_Resource_CustomersAdGroupBidModifiers');
