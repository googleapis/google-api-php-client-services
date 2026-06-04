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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateProductLinkInvitationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesCreateProductLinkInvitationResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveProductLinkInvitationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesRemoveProductLinkInvitationResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationResponse;

/**
 * The "productLinkInvitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $productLinkInvitations = $searchads360Service->customers_productLinkInvitations;
 *  </code>
 */
class CustomersProductLinkInvitations extends \Google\Service\Resource
{
  /**
   * Creates a product link invitation. (productLinkInvitations.create)
   *
   * @param string $customerId Required. The ID of the customer being modified.
   * @param GoogleAdsSearchads360V23ServicesCreateProductLinkInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesCreateProductLinkInvitationResponse
   * @throws \Google\Service\Exception
   */
  public function create($customerId, GoogleAdsSearchads360V23ServicesCreateProductLinkInvitationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleAdsSearchads360V23ServicesCreateProductLinkInvitationResponse::class);
  }
  /**
   * Remove a product link invitation. (productLinkInvitations.remove)
   *
   * @param string $customerId Required. The ID of the product link invitation
   * being removed.
   * @param GoogleAdsSearchads360V23ServicesRemoveProductLinkInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesRemoveProductLinkInvitationResponse
   * @throws \Google\Service\Exception
   */
  public function remove($customerId, GoogleAdsSearchads360V23ServicesRemoveProductLinkInvitationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('remove', [$params], GoogleAdsSearchads360V23ServicesRemoveProductLinkInvitationResponse::class);
  }
  /**
   * Update a product link invitation. (productLinkInvitations.update)
   *
   * @param string $customerId Required. The ID of the customer being modified.
   * @param GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationResponse
   * @throws \Google\Service\Exception
   */
  public function update($customerId, GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('update', [$params], GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersProductLinkInvitations::class, 'Google_Service_SA360_Resource_CustomersProductLinkInvitations');
