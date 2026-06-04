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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesListInvoicesResponse;

/**
 * The "invoices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $invoices = $searchads360Service->customers_invoices;
 *  </code>
 */
class CustomersInvoices extends \Google\Service\Resource
{
  /**
   * Returns all invoices associated with a billing setup, for a given month. List
   * of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [FieldError]() [HeaderError]() [InternalError]() [InvoiceError]()
   * [QuotaError]() [RequestError]() (invoices.listCustomersInvoices)
   *
   * @param string $customerId Required. The ID of the customer to fetch invoices
   * for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string billingSetup Required. The billing setup resource name of
   * the requested invoices.
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   * @opt_param bool includeGranularLevelInvoiceDetails Optional. When true, the
   * response will include more granular level invoice details such as campaign
   * level cost breakdown, itemized regulatory costs and adjustments. The default
   * value is false.
   * @opt_param string issueMonth Required. The issue month to retrieve invoices.
   * @opt_param string issueYear Required. The issue year to retrieve invoices, in
   * yyyy format. Only invoices issued in 2019 or later can be retrieved.
   * @return GoogleAdsSearchads360V23ServicesListInvoicesResponse
   * @throws \Google\Service\Exception
   */
  public function listCustomersInvoices($customerId, $optParams = [])
  {
    $params = ['customerId' => $customerId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleAdsSearchads360V23ServicesListInvoicesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersInvoices::class, 'Google_Service_SA360_Resource_CustomersInvoices');
