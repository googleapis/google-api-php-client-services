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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo extends \Google\Model
{
  /**
   * Output only. A 16 digit id used to identify the payments account associated
   * with the billing setup. This must be passed as a string with dashes, for
   * example, "1234-5678-9012-3456".
   *
   * @var string
   */
  public $paymentsAccountId;
  /**
   * Immutable. The name of the payments account associated with the billing
   * setup. This enables the user to specify a meaningful name for a payments
   * account to aid in reconciling monthly invoices. This name will be printed
   * in the monthly invoices.
   *
   * @var string
   */
  public $paymentsAccountName;
  /**
   * Immutable. A 12 digit id used to identify the payments profile associated
   * with the billing setup. This must be passed in as a string with dashes, for
   * example, "1234-5678-9012".
   *
   * @var string
   */
  public $paymentsProfileId;
  /**
   * Output only. The name of the payments profile associated with the billing
   * setup.
   *
   * @var string
   */
  public $paymentsProfileName;
  /**
   * Output only. A secondary payments profile id present in uncommon
   * situations, for example, when a sequential liability agreement has been
   * arranged.
   *
   * @var string
   */
  public $secondaryPaymentsProfileId;

  /**
   * Output only. A 16 digit id used to identify the payments account associated
   * with the billing setup. This must be passed as a string with dashes, for
   * example, "1234-5678-9012-3456".
   *
   * @param string $paymentsAccountId
   */
  public function setPaymentsAccountId($paymentsAccountId)
  {
    $this->paymentsAccountId = $paymentsAccountId;
  }
  /**
   * @return string
   */
  public function getPaymentsAccountId()
  {
    return $this->paymentsAccountId;
  }
  /**
   * Immutable. The name of the payments account associated with the billing
   * setup. This enables the user to specify a meaningful name for a payments
   * account to aid in reconciling monthly invoices. This name will be printed
   * in the monthly invoices.
   *
   * @param string $paymentsAccountName
   */
  public function setPaymentsAccountName($paymentsAccountName)
  {
    $this->paymentsAccountName = $paymentsAccountName;
  }
  /**
   * @return string
   */
  public function getPaymentsAccountName()
  {
    return $this->paymentsAccountName;
  }
  /**
   * Immutable. A 12 digit id used to identify the payments profile associated
   * with the billing setup. This must be passed in as a string with dashes, for
   * example, "1234-5678-9012".
   *
   * @param string $paymentsProfileId
   */
  public function setPaymentsProfileId($paymentsProfileId)
  {
    $this->paymentsProfileId = $paymentsProfileId;
  }
  /**
   * @return string
   */
  public function getPaymentsProfileId()
  {
    return $this->paymentsProfileId;
  }
  /**
   * Output only. The name of the payments profile associated with the billing
   * setup.
   *
   * @param string $paymentsProfileName
   */
  public function setPaymentsProfileName($paymentsProfileName)
  {
    $this->paymentsProfileName = $paymentsProfileName;
  }
  /**
   * @return string
   */
  public function getPaymentsProfileName()
  {
    return $this->paymentsProfileName;
  }
  /**
   * Output only. A secondary payments profile id present in uncommon
   * situations, for example, when a sequential liability agreement has been
   * arranged.
   *
   * @param string $secondaryPaymentsProfileId
   */
  public function setSecondaryPaymentsProfileId($secondaryPaymentsProfileId)
  {
    $this->secondaryPaymentsProfileId = $secondaryPaymentsProfileId;
  }
  /**
   * @return string
   */
  public function getSecondaryPaymentsProfileId()
  {
    return $this->secondaryPaymentsProfileId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBillingSetupPaymentsAccountInfo');
