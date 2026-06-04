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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRunOfflineUserDataJobRequest;
use Google\Service\SA360\GoogleLongrunningOperation;

/**
 * The "offlineUserDataJobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $offlineUserDataJobs = $searchads360Service->customers_offlineUserDataJobs;
 *  </code>
 */
class CustomersOfflineUserDataJobs extends \Google\Service\Resource
{
  /**
   * Adds operations to the offline user data job. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [DatabaseError]()
   * [FieldError]() [HeaderError]() [InternalError]() [MutateError]()
   * [OfflineUserDataJobError]() [QuotaError]() [RequestError]()
   * (offlineUserDataJobs.addOperations)
   *
   * @param string $resourceName Required. The resource name of the
   * OfflineUserDataJob.
   * @param GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsResponse
   * @throws \Google\Service\Exception
   */
  public function addOperations($resourceName, GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('addOperations', [$params], GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsResponse::class);
  }
  /**
   * Creates an offline user data job. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [DatabaseError]()
   * [FieldError]() [HeaderError]() [InternalError]() [NotAllowlistedError]()
   * [OfflineUserDataJobError]() [QuotaError]() [RequestError]()
   * (offlineUserDataJobs.create)
   *
   * @param string $customerId Required. The ID of the customer for which to
   * create an offline user data job.
   * @param GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobResponse
   * @throws \Google\Service\Exception
   */
  public function create($customerId, GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleAdsSearchads360V23ServicesCreateOfflineUserDataJobResponse::class);
  }
  /**
   * Runs the offline user data job. When finished, the long running operation
   * will contain the processing result or failure information, if any. List of
   * thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [DatabaseError]() [HeaderError]() [InternalError]()
   * [OfflineUserDataJobError]() [QuotaError]() [RequestError]()
   * (offlineUserDataJobs.run)
   *
   * @param string $resourceName Required. The resource name of the
   * OfflineUserDataJob to run.
   * @param GoogleAdsSearchads360V23ServicesRunOfflineUserDataJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function run($resourceName, GoogleAdsSearchads360V23ServicesRunOfflineUserDataJobRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('run', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersOfflineUserDataJobs::class, 'Google_Service_SA360_Resource_CustomersOfflineUserDataJobs');
