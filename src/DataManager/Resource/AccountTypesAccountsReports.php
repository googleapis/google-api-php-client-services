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

namespace Google\Service\DataManager\Resource;

use Google\Service\DataManager\RetrievePartnerMatchReportResponse;

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $reports = $datamanagerService->accountTypes_accounts_reports;
 *  </code>
 */
class AccountTypesAccountsReports extends \Google\Service\Resource
{
  /**
   * (reports.retrievePartnerMatchReport)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param string currencyCode
   * @opt_param string endDate
   * @opt_param string filter
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @opt_param string startDate
   * @return RetrievePartnerMatchReportResponse
   * @throws \Google\Service\Exception
   */
  public function retrievePartnerMatchReport($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('retrievePartnerMatchReport', [$params], RetrievePartnerMatchReportResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountTypesAccountsReports::class, 'Google_Service_DataManager_Resource_AccountTypesAccountsReports');
