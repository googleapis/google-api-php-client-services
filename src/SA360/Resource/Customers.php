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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateCustomerClientResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListAccessibleCustomersResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomerRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomerResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestTravelAssetsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadCallConversionsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadCallConversionsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadClickConversionsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadClickConversionsResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsResponse;

/**
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $customers = $searchads360Service->customers;
 *  </code>
 */
class Customers extends \Google\Service\Resource
{
  /**
   * Creates a new client under manager. The new client customer is returned. List
   * of thrown errors: [AccessInvitationError]() [AuthenticationError]()
   * [AuthorizationError]() [CurrencyCodeError]() [HeaderError]()
   * [InternalError]() [ManagerLinkError]() [QuotaError]() [RequestError]()
   * [StringLengthError]() [TimeZoneError]() (customers.createCustomerClient)
   *
   * @param string $customerId Required. The ID of the Manager under whom client
   * customer is being created.
   * @param GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateCustomerClientResponse
   * @throws \Google\Service\Exception
   */
  public function createCustomerClient($customerId, GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('createCustomerClient', [$params], GoogleAdsSearchads360V23ServicesCreateCustomerClientResponse::class);
  }
  /**
   * Returns resource names of customers directly accessible by the user
   * authenticating the call. List of thrown errors: [AuthenticationError]()
   * [AuthorizationError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (customers.listAccessibleCustomers)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesListAccessibleCustomersResponse
   * @throws \Google\Service\Exception
   */
  public function listAccessibleCustomers($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('listAccessibleCustomers', [$params], GoogleAdsSearchads360V23ServicesListAccessibleCustomersResponse::class);
  }
  /**
   * Updates a customer. Operation statuses are returned. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [DatabaseError]()
   * [FieldMaskError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() [UrlFieldError]() (customers.mutate)
   *
   * @param string $customerId Required. The ID of the customer being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateCustomerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateCustomerResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateCustomerRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateCustomerResponse::class);
  }
  /**
   * Removes automatically created assets from a campaign. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [ContextError]()
   * [FieldError]() [InternalError]() [MutateError]() [PartialFailureError]()
   * [QuotaError]() [RequestError]()
   * (customers.removeCampaignAutomaticallyCreatedAsset)
   *
   * @param string $customerId Required. The ID of the customer whose assets are
   * being removed.
   * @param GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetResponse
   * @throws \Google\Service\Exception
   */
  public function removeCampaignAutomaticallyCreatedAsset($customerId, GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('removeCampaignAutomaticallyCreatedAsset', [$params], GoogleAdsSearchads360V23ServicesRemoveCampaignAutomaticallyCreatedAssetResponse::class);
  }
  /**
   * Returns Travel Asset suggestions. Asset suggestions are returned on a best-
   * effort basis. There are no guarantees that all possible asset types will be
   * returned for any given hotel property. (customers.suggestTravelAssets)
   *
   * @param string $customerId Required. The ID of the customer.
   * @param GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSuggestTravelAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function suggestTravelAssets($customerId, GoogleAdsSearchads360V23ServicesSuggestTravelAssetsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suggestTravelAssets', [$params], GoogleAdsSearchads360V23ServicesSuggestTravelAssetsResponse::class);
  }
  /**
   * Processes the given call conversions. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [PartialFailureError]() [QuotaError]() [RequestError]()
   * (customers.uploadCallConversions)
   *
   * @param string $customerId Required. The ID of the customer performing the
   * upload.
   * @param GoogleAdsSearchads360V23ServicesUploadCallConversionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesUploadCallConversionsResponse
   * @throws \Google\Service\Exception
   */
  public function uploadCallConversions($customerId, GoogleAdsSearchads360V23ServicesUploadCallConversionsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadCallConversions', [$params], GoogleAdsSearchads360V23ServicesUploadCallConversionsResponse::class);
  }
  /**
   * Processes the given click conversions. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [ConversionUploadError]()
   * [HeaderError]() [InternalError]() [PartialFailureError]() [QuotaError]()
   * [RequestError]() (customers.uploadClickConversions)
   *
   * @param string $customerId Required. The ID of the customer performing the
   * upload.
   * @param GoogleAdsSearchads360V23ServicesUploadClickConversionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesUploadClickConversionsResponse
   * @throws \Google\Service\Exception
   */
  public function uploadClickConversions($customerId, GoogleAdsSearchads360V23ServicesUploadClickConversionsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadClickConversions', [$params], GoogleAdsSearchads360V23ServicesUploadClickConversionsResponse::class);
  }
  /**
   * Processes the given conversion adjustments. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [PartialFailureError]() [QuotaError]() [RequestError]()
   * (customers.uploadConversionAdjustments)
   *
   * @param string $customerId Required. The ID of the customer performing the
   * upload.
   * @param GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsResponse
   * @throws \Google\Service\Exception
   */
  public function uploadConversionAdjustments($customerId, GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadConversionAdjustments', [$params], GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Customers::class, 'Google_Service_SA360_Resource_Customers');
