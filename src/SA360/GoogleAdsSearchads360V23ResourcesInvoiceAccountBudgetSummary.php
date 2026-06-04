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

class GoogleAdsSearchads360V23ResourcesInvoiceAccountBudgetSummary extends \Google\Collection
{
  protected $collection_key = 'invalidActivitySummaries';
  /**
   * Output only. The resource name of the account budget associated with this
   * summarized billable cost. AccountBudget resource names have the form:
   * `customers/{customer_id}/accountBudgets/{account_budget_id}`
   *
   * @var string
   */
  public $accountBudget;
  /**
   * Output only. The name of the account budget. It appears on the invoice PDF
   * as "Account budget".
   *
   * @var string
   */
  public $accountBudgetName;
  protected $billableActivityDateRangeType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $billableActivityDateRangeDataType = '';
  /**
   * Output only. The pretax billed amount attributable to this budget during
   * the service period, in micros. This does not account for any adjustments.
   *
   * @var string
   */
  public $billedAmountMicros;
  protected $campaignSummariesType = GoogleAdsSearchads360V23ResourcesInvoiceCampaignSummary::class;
  protected $campaignSummariesDataType = 'array';
  /**
   * Output only. The resource name of the customer associated with this account
   * budget. This contains the customer ID, which appears on the invoice PDF as
   * "Account ID". Customer resource names have the form:
   * `customers/{customer_id}`
   *
   * @var string
   */
  public $customer;
  /**
   * Output only. The descriptive name of the account budget's customer. It
   * appears on the invoice PDF as "Account".
   *
   * @var string
   */
  public $customerDescriptiveName;
  /**
   * Output only. The pretax invalid activity amount attributable to this budget
   * in previous months, in micros (negative value).
   *
   * @var string
   */
  public $invalidActivityAmountMicros;
  protected $invalidActivitySummariesType = GoogleAdsSearchads360V23ResourcesInvoiceInvalidActivitySummary::class;
  protected $invalidActivitySummariesDataType = 'array';
  /**
   * Output only. The pretax overdelivery amount attributable to this budget
   * during the service period, in micros (negative value).
   *
   * @var string
   */
  public $overdeliveryAmountMicros;
  /**
   * Output only. The purchase order number of the account budget. It appears on
   * the invoice PDF as "Purchase order".
   *
   * @var string
   */
  public $purchaseOrderNumber;
  /**
   * Output only. The pretax served amount attributable to this budget during
   * the service period, in micros. This is only useful to reconcile invoice and
   * delivery data.
   *
   * @var string
   */
  public $servedAmountMicros;
  /**
   * Output only. The pretax subtotal amount attributable to this budget during
   * the service period, in micros.
   *
   * @var string
   */
  public $subtotalAmountMicros;
  /**
   * Output only. The tax amount attributable to this budget during the service
   * period, in micros.
   *
   * @var string
   */
  public $taxAmountMicros;
  /**
   * Output only. The total amount attributable to this budget during the
   * service period, in micros. This equals the sum of the account budget
   * subtotal amount and the account budget tax amount.
   *
   * @var string
   */
  public $totalAmountMicros;

  /**
   * Output only. The resource name of the account budget associated with this
   * summarized billable cost. AccountBudget resource names have the form:
   * `customers/{customer_id}/accountBudgets/{account_budget_id}`
   *
   * @param string $accountBudget
   */
  public function setAccountBudget($accountBudget)
  {
    $this->accountBudget = $accountBudget;
  }
  /**
   * @return string
   */
  public function getAccountBudget()
  {
    return $this->accountBudget;
  }
  /**
   * Output only. The name of the account budget. It appears on the invoice PDF
   * as "Account budget".
   *
   * @param string $accountBudgetName
   */
  public function setAccountBudgetName($accountBudgetName)
  {
    $this->accountBudgetName = $accountBudgetName;
  }
  /**
   * @return string
   */
  public function getAccountBudgetName()
  {
    return $this->accountBudgetName;
  }
  /**
   * Output only. The billable activity date range of the account budget, within
   * the service date range of this invoice. The end date is inclusive. This can
   * be different from the account budget's start and end time.
   *
   * @param GoogleAdsSearchads360V23CommonDateRange $billableActivityDateRange
   */
  public function setBillableActivityDateRange(GoogleAdsSearchads360V23CommonDateRange $billableActivityDateRange)
  {
    $this->billableActivityDateRange = $billableActivityDateRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDateRange
   */
  public function getBillableActivityDateRange()
  {
    return $this->billableActivityDateRange;
  }
  /**
   * Output only. The pretax billed amount attributable to this budget during
   * the service period, in micros. This does not account for any adjustments.
   *
   * @param string $billedAmountMicros
   */
  public function setBilledAmountMicros($billedAmountMicros)
  {
    $this->billedAmountMicros = $billedAmountMicros;
  }
  /**
   * @return string
   */
  public function getBilledAmountMicros()
  {
    return $this->billedAmountMicros;
  }
  /**
   * Output only. The list of summarized campaign level information associated
   * with this account budget.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoiceCampaignSummary[] $campaignSummaries
   */
  public function setCampaignSummaries($campaignSummaries)
  {
    $this->campaignSummaries = $campaignSummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoiceCampaignSummary[]
   */
  public function getCampaignSummaries()
  {
    return $this->campaignSummaries;
  }
  /**
   * Output only. The resource name of the customer associated with this account
   * budget. This contains the customer ID, which appears on the invoice PDF as
   * "Account ID". Customer resource names have the form:
   * `customers/{customer_id}`
   *
   * @param string $customer
   */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return string
   */
  public function getCustomer()
  {
    return $this->customer;
  }
  /**
   * Output only. The descriptive name of the account budget's customer. It
   * appears on the invoice PDF as "Account".
   *
   * @param string $customerDescriptiveName
   */
  public function setCustomerDescriptiveName($customerDescriptiveName)
  {
    $this->customerDescriptiveName = $customerDescriptiveName;
  }
  /**
   * @return string
   */
  public function getCustomerDescriptiveName()
  {
    return $this->customerDescriptiveName;
  }
  /**
   * Output only. The pretax invalid activity amount attributable to this budget
   * in previous months, in micros (negative value).
   *
   * @param string $invalidActivityAmountMicros
   */
  public function setInvalidActivityAmountMicros($invalidActivityAmountMicros)
  {
    $this->invalidActivityAmountMicros = $invalidActivityAmountMicros;
  }
  /**
   * @return string
   */
  public function getInvalidActivityAmountMicros()
  {
    return $this->invalidActivityAmountMicros;
  }
  /**
   * Output only. The list of summarized invalid activity credits with original
   * linkages.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoiceInvalidActivitySummary[] $invalidActivitySummaries
   */
  public function setInvalidActivitySummaries($invalidActivitySummaries)
  {
    $this->invalidActivitySummaries = $invalidActivitySummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoiceInvalidActivitySummary[]
   */
  public function getInvalidActivitySummaries()
  {
    return $this->invalidActivitySummaries;
  }
  /**
   * Output only. The pretax overdelivery amount attributable to this budget
   * during the service period, in micros (negative value).
   *
   * @param string $overdeliveryAmountMicros
   */
  public function setOverdeliveryAmountMicros($overdeliveryAmountMicros)
  {
    $this->overdeliveryAmountMicros = $overdeliveryAmountMicros;
  }
  /**
   * @return string
   */
  public function getOverdeliveryAmountMicros()
  {
    return $this->overdeliveryAmountMicros;
  }
  /**
   * Output only. The purchase order number of the account budget. It appears on
   * the invoice PDF as "Purchase order".
   *
   * @param string $purchaseOrderNumber
   */
  public function setPurchaseOrderNumber($purchaseOrderNumber)
  {
    $this->purchaseOrderNumber = $purchaseOrderNumber;
  }
  /**
   * @return string
   */
  public function getPurchaseOrderNumber()
  {
    return $this->purchaseOrderNumber;
  }
  /**
   * Output only. The pretax served amount attributable to this budget during
   * the service period, in micros. This is only useful to reconcile invoice and
   * delivery data.
   *
   * @param string $servedAmountMicros
   */
  public function setServedAmountMicros($servedAmountMicros)
  {
    $this->servedAmountMicros = $servedAmountMicros;
  }
  /**
   * @return string
   */
  public function getServedAmountMicros()
  {
    return $this->servedAmountMicros;
  }
  /**
   * Output only. The pretax subtotal amount attributable to this budget during
   * the service period, in micros.
   *
   * @param string $subtotalAmountMicros
   */
  public function setSubtotalAmountMicros($subtotalAmountMicros)
  {
    $this->subtotalAmountMicros = $subtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getSubtotalAmountMicros()
  {
    return $this->subtotalAmountMicros;
  }
  /**
   * Output only. The tax amount attributable to this budget during the service
   * period, in micros.
   *
   * @param string $taxAmountMicros
   */
  public function setTaxAmountMicros($taxAmountMicros)
  {
    $this->taxAmountMicros = $taxAmountMicros;
  }
  /**
   * @return string
   */
  public function getTaxAmountMicros()
  {
    return $this->taxAmountMicros;
  }
  /**
   * Output only. The total amount attributable to this budget during the
   * service period, in micros. This equals the sum of the account budget
   * subtotal amount and the account budget tax amount.
   *
   * @param string $totalAmountMicros
   */
  public function setTotalAmountMicros($totalAmountMicros)
  {
    $this->totalAmountMicros = $totalAmountMicros;
  }
  /**
   * @return string
   */
  public function getTotalAmountMicros()
  {
    return $this->totalAmountMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInvoiceAccountBudgetSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoiceAccountBudgetSummary');
