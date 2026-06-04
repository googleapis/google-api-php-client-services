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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesAppendLeadConversationRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesAppendLeadConversationResponse;

/**
 * The "localServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $localServices = $searchads360Service->customers_localServices;
 *  </code>
 */
class CustomersLocalServices extends \Google\Service\Resource
{
  /**
   * RPC to append Local Services Lead Conversation resources to Local Services
   * Lead resources. (localServices.appendLeadConversation)
   *
   * @param string $customerId Required. The Id of the customer which owns the
   * leads onto which the conversations will be appended.
   * @param GoogleAdsSearchads360V23ServicesAppendLeadConversationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesAppendLeadConversationResponse
   * @throws \Google\Service\Exception
   */
  public function appendLeadConversation($customerId, GoogleAdsSearchads360V23ServicesAppendLeadConversationRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('appendLeadConversation', [$params], GoogleAdsSearchads360V23ServicesAppendLeadConversationResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersLocalServices::class, 'Google_Service_SA360_Resource_CustomersLocalServices');
