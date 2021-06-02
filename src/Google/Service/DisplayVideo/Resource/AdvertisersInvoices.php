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

/**
 * The "invoices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google_Service_DisplayVideo(...);
 *   $invoices = $displayvideoService->invoices;
 *  </code>
 */
class Google_Service_DisplayVideo_Resource_AdvertisersInvoices extends Google_Service_Resource
{
  /**
   * List invoices for an advertiser. (invoices.listAdvertisersInvoices)
   *
   * @param string $advertiserId Required. The ID of the advertiser to list
   * invoices for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issueMonth Required. Month for which invoices are needed in
   * the format YYYYMM.
   * @opt_param string loiSapinInvoiceType Select type of invoice to query for Loi
   * Sapin advertisers. Otherwise its ignored.
   * @opt_param int pageSize Requested page size. Must be between `1` and `100`.
   * If unspecified will default to `100`. Returns error code `INVALID_ARGUMENT`
   * if an invalid value is specified.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return. Typically, this is the value of
   * [ListInvoicesResponse.next_page_token] returned from the previous call to
   * `ListInvoice` method. If not specified, the first page of results will be
   * returned.
   * @return Google_Service_DisplayVideo_ListInvoicesResponse
   */
  public function listAdvertisersInvoices($advertiserId, $optParams = array())
  {
    $params = array('advertiserId' => $advertiserId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_DisplayVideo_ListInvoicesResponse");
  }
  /**
   * Lookup invoice currency for an advertiser. (invoices.lookupInvoiceCurrency)
   *
   * @param string $advertiserId Required. The ID of the advertiser to lookup
   * currency for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string invoiceMonth Month for which currency is needed in the
   * format YYYYMM. If not set Api would return currency based on current
   * settings.
   * @return Google_Service_DisplayVideo_LookupInvoiceCurrencyResponse
   */
  public function lookupInvoiceCurrency($advertiserId, $optParams = array())
  {
    $params = array('advertiserId' => $advertiserId);
    $params = array_merge($params, $optParams);
    return $this->call('lookupInvoiceCurrency', array($params), "Google_Service_DisplayVideo_LookupInvoiceCurrencyResponse");
  }
}
