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

namespace Google\Service\DiscoveryEngine\Resource;

use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1DistributeLicenseConfigRequest;
use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1DistributeLicenseConfigResponse;
use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1RetractLicenseConfigRequest;
use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1RetractLicenseConfigResponse;

/**
 * The "billingAccountLicenseConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $billingAccountLicenseConfigs = $discoveryengineService->billingAccounts_billingAccountLicenseConfigs;
 *  </code>
 */
class BillingAccountsBillingAccountLicenseConfigs extends \Google\Service\Resource
{
  /**
   * Distributes a LicenseConfig from billing account level to project level.
   * (billingAccountLicenseConfigs.distributeLicenseConfig)
   *
   * @param string $billingAccountLicenseConfig Required. Full resource name of
   * BillingAccountLicenseConfig. Format: `billingAccounts/{billing_account}/billi
   * ngAccountLicenseConfigs/{billing_account_license_config_id}`.
   * @param GoogleCloudDiscoveryengineV1DistributeLicenseConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDiscoveryengineV1DistributeLicenseConfigResponse
   * @throws \Google\Service\Exception
   */
  public function distributeLicenseConfig($billingAccountLicenseConfig, GoogleCloudDiscoveryengineV1DistributeLicenseConfigRequest $postBody, $optParams = [])
  {
    $params = ['billingAccountLicenseConfig' => $billingAccountLicenseConfig, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('distributeLicenseConfig', [$params], GoogleCloudDiscoveryengineV1DistributeLicenseConfigResponse::class);
  }
  /**
   * This method is called from the billing account side to retract the
   * LicenseConfig from the given project back to the billing account.
   * (billingAccountLicenseConfigs.retractLicenseConfig)
   *
   * @param string $billingAccountLicenseConfig Required. Full resource name of
   * BillingAccountLicenseConfig. Format: `billingAccounts/{billing_account}/billi
   * ngAccountLicenseConfigs/{billing_account_license_config_id}`.
   * @param GoogleCloudDiscoveryengineV1RetractLicenseConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDiscoveryengineV1RetractLicenseConfigResponse
   * @throws \Google\Service\Exception
   */
  public function retractLicenseConfig($billingAccountLicenseConfig, GoogleCloudDiscoveryengineV1RetractLicenseConfigRequest $postBody, $optParams = [])
  {
    $params = ['billingAccountLicenseConfig' => $billingAccountLicenseConfig, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('retractLicenseConfig', [$params], GoogleCloudDiscoveryengineV1RetractLicenseConfigResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BillingAccountsBillingAccountLicenseConfigs::class, 'Google_Service_DiscoveryEngine_Resource_BillingAccountsBillingAccountLicenseConfigs');
