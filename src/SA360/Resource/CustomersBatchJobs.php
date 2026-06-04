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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesAddBatchJobOperationsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesAddBatchJobOperationsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListBatchJobResultsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateBatchJobRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateBatchJobResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRunBatchJobRequest;
use Google\Service\SA360\GoogleLongrunningOperation;

/**
 * The "batchJobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $batchJobs = $searchads360Service->customers_batchJobs;
 *  </code>
 */
class CustomersBatchJobs extends \Google\Service\Resource
{
  /**
   * Add operations to the batch job. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [BatchJobError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RequestError]()
   * [ResourceCountLimitExceededError]() (batchJobs.addOperations)
   *
   * @param string $resourceName Required. The resource name of the batch job.
   * @param GoogleAdsSearchads360V23ServicesAddBatchJobOperationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesAddBatchJobOperationsResponse
   * @throws \Google\Service\Exception
   */
  public function addOperations($resourceName, GoogleAdsSearchads360V23ServicesAddBatchJobOperationsRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('addOperations', [$params], GoogleAdsSearchads360V23ServicesAddBatchJobOperationsResponse::class);
  }
  /**
   * Returns the results of the batch job. The job must be done. Supports standard
   * list paging. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [BatchJobError]() [HeaderError]() [InternalError]()
   * [QuotaError]() [RequestError]() (batchJobs.listResults)
   *
   * @param string $resourceName Required. The resource name of the batch job
   * whose results are being listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken Token of the page to retrieve. If not specified,
   * the first page of results will be returned. Use the value obtained from
   * `next_page_token` in the previous response in order to request the next page
   * of results.
   * @opt_param string responseContentType The response content type setting.
   * Determines whether the mutable resource or just the resource name should be
   * returned.
   * @return GoogleAdsSearchads360V23ServicesListBatchJobResultsResponse
   * @throws \Google\Service\Exception
   */
  public function listResults($resourceName, $optParams = [])
  {
    $params = ['resourceName' => $resourceName];
    $params = array_merge($params, $optParams);
    return $this->call('listResults', [$params], GoogleAdsSearchads360V23ServicesListBatchJobResultsResponse::class);
  }
  /**
   * Mutates a batch job. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() [ResourceCountLimitExceededError]() (batchJobs.mutate)
   *
   * @param string $customerId Required. The ID of the customer for which to
   * create a batch job.
   * @param GoogleAdsSearchads360V23ServicesMutateBatchJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateBatchJobResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateBatchJobRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateBatchJobResponse::class);
  }
  /**
   * Runs the batch job. The Operation.metadata field type is BatchJobMetadata.
   * When finished, the long running operation will not contain errors or a
   * response. Instead, use ListBatchJobResults to get the results of the job.
   * List of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [BatchJobError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (batchJobs.run)
   *
   * @param string $resourceName Required. The resource name of the BatchJob to
   * run.
   * @param GoogleAdsSearchads360V23ServicesRunBatchJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function run($resourceName, GoogleAdsSearchads360V23ServicesRunBatchJobRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('run', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersBatchJobs::class, 'Google_Service_SA360_Resource_CustomersBatchJobs');
