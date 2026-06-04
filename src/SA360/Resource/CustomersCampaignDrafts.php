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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListCampaignDraftAsyncErrorsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCampaignDraftsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCampaignDraftsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesPromoteCampaignDraftRequest;
use Google\Service\SA360\GoogleLongrunningOperation;

/**
 * The "campaignDrafts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $campaignDrafts = $searchads360Service->customers_campaignDrafts;
 *  </code>
 */
class CustomersCampaignDrafts extends \Google\Service\Resource
{
  /**
   * Returns all errors that occurred during CampaignDraft promote. Throws an
   * error if called before campaign draft is promoted. Supports standard list
   * paging. List of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [HeaderError]() [InternalError]() [QuotaError]() [RequestError]()
   * (campaignDrafts.listAsyncErrors)
   *
   * @param string $resourceName Required. The name of the campaign draft from
   * which to retrieve the async errors.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Number of elements to retrieve in a single page. When
   * a page request is too large, the server may decide to further limit the
   * number of returned resources.
   * @opt_param string pageToken Token of the page to retrieve. If not specified,
   * the first page of results will be returned. Use the value obtained from
   * `next_page_token` in the previous response in order to request the next page
   * of results.
   * @return GoogleAdsSearchads360V23ServicesListCampaignDraftAsyncErrorsResponse
   * @throws \Google\Service\Exception
   */
  public function listAsyncErrors($resourceName, $optParams = [])
  {
    $params = ['resourceName' => $resourceName];
    $params = array_merge($params, $optParams);
    return $this->call('listAsyncErrors', [$params], GoogleAdsSearchads360V23ServicesListCampaignDraftAsyncErrorsResponse::class);
  }
  /**
   * Creates, updates, or removes campaign drafts. Operation statuses are
   * returned. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [CampaignDraftError]() [DatabaseError]()
   * [FieldError]() [HeaderError]() [InternalError]() [MutateError]()
   * [QuotaError]() [RequestError]() (campaignDrafts.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose campaign
   * drafts are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateCampaignDraftsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateCampaignDraftsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateCampaignDraftsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateCampaignDraftsResponse::class);
  }
  /**
   * Promotes the changes in a draft back to the base campaign. This method
   * returns a Long Running Operation (LRO) indicating if the Promote is done. Use
   * google.longrunning.Operations.GetOperation to poll the LRO until it is done.
   * Only a done status is returned in the response. See the status in the
   * Campaign Draft resource to determine if the promotion was successful. If the
   * LRO failed, use CampaignDraftService.ListCampaignDraftAsyncErrors to view the
   * list of error reasons. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [CampaignDraftError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]() (campaignDrafts.promote)
   *
   * @param string $campaignDraft Required. The resource name of the campaign
   * draft to promote.
   * @param GoogleAdsSearchads360V23ServicesPromoteCampaignDraftRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function promote($campaignDraft, GoogleAdsSearchads360V23ServicesPromoteCampaignDraftRequest $postBody, $optParams = [])
  {
    $params = ['campaignDraft' => $campaignDraft, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('promote', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersCampaignDrafts::class, 'Google_Service_SA360_Resource_CustomersCampaignDrafts');
