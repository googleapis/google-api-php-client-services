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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesEndExperimentRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGraduateExperimentRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListExperimentAsyncErrorsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateExperimentsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateExperimentsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesPromoteExperimentRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesScheduleExperimentRequest;
use Google\Service\SA360\GoogleLongrunningOperation;
use Google\Service\SA360\GoogleProtobufEmpty;

/**
 * The "experiments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $experiments = $searchads360Service->customers_experiments;
 *  </code>
 */
class CustomersExperiments extends \Google\Service\Resource
{
  /**
   * Immediately ends an experiment, changing the experiment's scheduled end date
   * and without waiting for end of day. End date is updated to be the time of the
   * request. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [ExperimentError]() [HeaderError]() [InternalError]()
   * [QuotaError]() [RequestError]() (experiments.endExperiment)
   *
   * @param string $experiment Required. The resource name of the campaign
   * experiment to end.
   * @param GoogleAdsSearchads360V23ServicesEndExperimentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function endExperiment($experiment, GoogleAdsSearchads360V23ServicesEndExperimentRequest $postBody, $optParams = [])
  {
    $params = ['experiment' => $experiment, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('endExperiment', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Graduates an experiment to a full campaign. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [ExperimentError]()
   * [HeaderError]() [InternalError]() [MutateError]() [QuotaError]()
   * [RequestError]() (experiments.graduateExperiment)
   *
   * @param string $experiment Required. The experiment to be graduated.
   * @param GoogleAdsSearchads360V23ServicesGraduateExperimentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function graduateExperiment($experiment, GoogleAdsSearchads360V23ServicesGraduateExperimentRequest $postBody, $optParams = [])
  {
    $params = ['experiment' => $experiment, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('graduateExperiment', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Returns all errors that occurred during the last Experiment update (either
   * scheduling or promotion). Supports standard list paging. List of thrown
   * errors: [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (experiments.listExperimentAsyncErrors)
   *
   * @param string $resourceName Required. The name of the experiment from which
   * to retrieve the async errors.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Number of elements to retrieve in a single page. When
   * a page request is too large, the server may decide to further limit the
   * number of returned resources. The maximum page size is 1000.
   * @opt_param string pageToken Token of the page to retrieve. If not specified,
   * the first page of results will be returned. Use the value obtained from
   * `next_page_token` in the previous response in order to request the next page
   * of results.
   * @return GoogleAdsSearchads360V23ServicesListExperimentAsyncErrorsResponse
   * @throws \Google\Service\Exception
   */
  public function listExperimentAsyncErrors($resourceName, $optParams = [])
  {
    $params = ['resourceName' => $resourceName];
    $params = array_merge($params, $optParams);
    return $this->call('listExperimentAsyncErrors', [$params], GoogleAdsSearchads360V23ServicesListExperimentAsyncErrorsResponse::class);
  }
  /**
   * Creates, updates, or removes experiments. Operation statuses are returned.
   * List of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [ExperimentError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (experiments.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose experiments
   * are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateExperimentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateExperimentsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateExperimentsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateExperimentsResponse::class);
  }
  /**
   * Promotes the trial campaign thus applying changes in the trial campaign to
   * the base campaign. This method returns a long running operation that tracks
   * the promotion of the experiment campaign. If it fails, a list of errors can
   * be retrieved using the ListExperimentAsyncErrors method. The operation's
   * metadata will be a string containing the resource name of the created
   * experiment. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [ExperimentError]() [HeaderError]() [InternalError]()
   * [QuotaError]() [RequestError]() (experiments.promoteExperiment)
   *
   * @param string $resourceName Required. The resource name of the experiment to
   * promote.
   * @param GoogleAdsSearchads360V23ServicesPromoteExperimentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function promoteExperiment($resourceName, GoogleAdsSearchads360V23ServicesPromoteExperimentRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('promoteExperiment', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Schedule an experiment. The in design campaign will be converted into a real
   * campaign (called the experiment campaign) that will begin serving ads if
   * successfully created. The experiment is scheduled immediately with status
   * INITIALIZING. This method returns a long running operation that tracks the
   * forking of the in design campaign. If the forking fails, a list of errors can
   * be retrieved using the ListExperimentAsyncErrors method. The operation's
   * metadata will be a string containing the resource name of the created
   * experiment. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [ExperimentError]() [DatabaseError]() [DateError]()
   * [DateRangeError]() [FieldError]() [HeaderError]() [InternalError]()
   * [QuotaError]() [RangeError]() [RequestError]()
   * (experiments.scheduleExperiment)
   *
   * @param string $resourceName Required. The scheduled experiment.
   * @param GoogleAdsSearchads360V23ServicesScheduleExperimentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function scheduleExperiment($resourceName, GoogleAdsSearchads360V23ServicesScheduleExperimentRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('scheduleExperiment', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersExperiments::class, 'Google_Service_SA360_Resource_CustomersExperiments');
