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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1SubscriptionInfo extends \Google\Model
{
  protected $chromeEnterpriseUpgradeAnnualType = GoogleChromeManagementVersionsV1AnnualSubscriptionInfo::class;
  protected $chromeEnterpriseUpgradeAnnualDataType = '';
  protected $chromePerpetualUpgradeType = GoogleChromeManagementVersionsV1PerpetualLicenseInfo::class;
  protected $chromePerpetualUpgradeDataType = '';
  protected $kioskSignageUpgradeAnnualType = GoogleChromeManagementVersionsV1AnnualSubscriptionInfo::class;
  protected $kioskSignageUpgradeAnnualDataType = '';
  /**
   * Identifier. The resource name of the customer subscription info. Format:
   * customers/{customer}/subscriptionInfo
   *
   * @var string
   */
  public $name;

  /**
   * Output only. Details for Chrome Enterprise Upgrade Annual SKU.
   *
   * @param GoogleChromeManagementVersionsV1AnnualSubscriptionInfo $chromeEnterpriseUpgradeAnnual
   */
  public function setChromeEnterpriseUpgradeAnnual(GoogleChromeManagementVersionsV1AnnualSubscriptionInfo $chromeEnterpriseUpgradeAnnual)
  {
    $this->chromeEnterpriseUpgradeAnnual = $chromeEnterpriseUpgradeAnnual;
  }
  /**
   * @return GoogleChromeManagementVersionsV1AnnualSubscriptionInfo
   */
  public function getChromeEnterpriseUpgradeAnnual()
  {
    return $this->chromeEnterpriseUpgradeAnnual;
  }
  /**
   * Output only. Details for Chrome Ent/Edu Upgrade Perpetual SKU.
   *
   * @param GoogleChromeManagementVersionsV1PerpetualLicenseInfo $chromePerpetualUpgrade
   */
  public function setChromePerpetualUpgrade(GoogleChromeManagementVersionsV1PerpetualLicenseInfo $chromePerpetualUpgrade)
  {
    $this->chromePerpetualUpgrade = $chromePerpetualUpgrade;
  }
  /**
   * @return GoogleChromeManagementVersionsV1PerpetualLicenseInfo
   */
  public function getChromePerpetualUpgrade()
  {
    return $this->chromePerpetualUpgrade;
  }
  /**
   * Output only. Details for Kiosk & Signage Upgrade Annual SKU.
   *
   * @param GoogleChromeManagementVersionsV1AnnualSubscriptionInfo $kioskSignageUpgradeAnnual
   */
  public function setKioskSignageUpgradeAnnual(GoogleChromeManagementVersionsV1AnnualSubscriptionInfo $kioskSignageUpgradeAnnual)
  {
    $this->kioskSignageUpgradeAnnual = $kioskSignageUpgradeAnnual;
  }
  /**
   * @return GoogleChromeManagementVersionsV1AnnualSubscriptionInfo
   */
  public function getKioskSignageUpgradeAnnual()
  {
    return $this->kioskSignageUpgradeAnnual;
  }
  /**
   * Identifier. The resource name of the customer subscription info. Format:
   * customers/{customer}/subscriptionInfo
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1SubscriptionInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1SubscriptionInfo');
