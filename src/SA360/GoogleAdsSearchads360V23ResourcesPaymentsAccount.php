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

class GoogleAdsSearchads360V23ResourcesPaymentsAccount extends \Google\Model
{
  /**
   * Output only. The currency code of the payments account. A subset of the
   * currency codes derived from the ISO 4217 standard is supported.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Output only. The name of the payments account.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Paying manager of this payment account.
   *
   * @var string
   */
  public $payingManagerCustomer;
  /**
   * Output only. A 16 digit ID used to identify a payments account.
   *
   * @var string
   */
  public $paymentsAccountId;
  /**
   * Output only. A 12 digit ID used to identify the payments profile associated
   * with the payments account.
   *
   * @var string
   */
  public $paymentsProfileId;
  /**
   * Output only. The resource name of the payments account. PaymentsAccount
   * resource names have the form:
   * `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. A secondary payments profile ID present in uncommon
   * situations, for example, when a sequential liability agreement has been
   * arranged.
   *
   * @var string
   */
  public $secondaryPaymentsProfileId;

  /**
   * Output only. The currency code of the payments account. A subset of the
   * currency codes derived from the ISO 4217 standard is supported.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Output only. The name of the payments account.
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
  /**
   * Output only. Paying manager of this payment account.
   *
   * @param string $payingManagerCustomer
   */
  public function setPayingManagerCustomer($payingManagerCustomer)
  {
    $this->payingManagerCustomer = $payingManagerCustomer;
  }
  /**
   * @return string
   */
  public function getPayingManagerCustomer()
  {
    return $this->payingManagerCustomer;
  }
  /**
   * Output only. A 16 digit ID used to identify a payments account.
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
   * Output only. A 12 digit ID used to identify the payments profile associated
   * with the payments account.
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
   * Output only. The resource name of the payments account. PaymentsAccount
   * resource names have the form:
   * `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. A secondary payments profile ID present in uncommon
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
class_alias(GoogleAdsSearchads360V23ResourcesPaymentsAccount::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesPaymentsAccount');
