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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateLabelsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateLabelsResponse;

/**
 * The "labels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $labels = $searchads360Service->customers_labels;
 *  </code>
 */
class CustomersLabels extends \Google\Service\Resource
{
  /**
   * Creates, updates, or removes labels. Operation statuses are returned. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [DatabaseError]() [DateError]() [DistinctError]() [FieldError]()
   * [FieldMaskError]() [HeaderError]() [IdError]() [InternalError]()
   * [LabelError]() [MutateError]() [NewResourceCreationError]() [NotEmptyError]()
   * [NullError]() [OperatorError]() [QuotaError]() [RangeError]()
   * [RequestError]() [ResourceCountLimitExceededError]() [SizeLimitError]()
   * [StringFormatError]() [StringLengthError]() (labels.mutate)
   *
   * @param string $customerId Required. ID of the customer whose labels are being
   * modified.
   * @param GoogleAdsSearchads360V23ServicesMutateLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateLabelsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateLabelsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateLabelsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersLabels::class, 'Google_Service_SA360_Resource_CustomersLabels');
