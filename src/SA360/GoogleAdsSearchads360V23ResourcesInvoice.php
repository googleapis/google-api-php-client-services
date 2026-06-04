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

class GoogleAdsSearchads360V23ResourcesInvoice extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * An invoice with a negative amount. The account receives a credit.
   */
  public const TYPE_CREDIT_MEMO = 'CREDIT_MEMO';
  /**
   * An invoice with a positive amount. The account owes a balance.
   */
  public const TYPE_INVOICE = 'INVOICE';
  protected $collection_key = 'replacedInvoices';
  protected $accountBudgetSummariesType = GoogleAdsSearchads360V23ResourcesInvoiceAccountBudgetSummary::class;
  protected $accountBudgetSummariesDataType = 'array';
  protected $accountSummariesType = GoogleAdsSearchads360V23ResourcesInvoiceAccountSummary::class;
  protected $accountSummariesDataType = 'array';
  /**
   * Output only. The pretax subtotal amount of invoice level adjustments, in
   * micros.
   *
   * @var string
   */
  public $adjustmentsSubtotalAmountMicros;
  /**
   * Output only. The sum of taxes on the invoice level adjustments, in micros.
   *
   * @var string
   */
  public $adjustmentsTaxAmountMicros;
  /**
   * Output only. The total amount of invoice level adjustments, in micros.
   *
   * @var string
   */
  public $adjustmentsTotalAmountMicros;
  /**
   * Output only. The resource name of this invoice's billing setup.
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   *
   * @var string
   */
  public $billingSetup;
  /**
   * Output only. The resource name of the original invoice corrected, wrote
   * off, or canceled by this invoice, if applicable. If `corrected_invoice` is
   * set, `replaced_invoices` will not be set. Invoice resource names have the
   * form: `customers/{customer_id}/invoices/{invoice_id}`
   *
   * @var string
   */
  public $correctedInvoice;
  /**
   * Output only. The currency code. All costs are returned in this currency. A
   * subset of the currency codes derived from the ISO 4217 standard is
   * supported.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Output only. The due date in yyyy-mm-dd format.
   *
   * @var string
   */
  public $dueDate;
  /**
   * Output only. The pretax subtotal amount of invoice level export charges, in
   * micros.
   *
   * @var string
   */
  public $exportChargeSubtotalAmountMicros;
  /**
   * Output only. The sum of taxes on the invoice level export charges, in
   * micros.
   *
   * @var string
   */
  public $exportChargeTaxAmountMicros;
  /**
   * Output only. The total amount of invoice level export charges, in micros.
   *
   * @var string
   */
  public $exportChargeTotalAmountMicros;
  /**
   * Output only. The ID of the invoice. It appears on the invoice PDF as
   * "Invoice number".
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The issue date in yyyy-mm-dd format. It appears on the invoice
   * PDF as either "Issue date" or "Invoice date".
   *
   * @var string
   */
  public $issueDate;
  /**
   * Output only. A 16 digit ID used to identify the payments account associated
   * with the billing setup, for example, "1234-5678-9012-3456". It appears on
   * the invoice PDF as "Billing Account Number".
   *
   * @var string
   */
  public $paymentsAccountId;
  /**
   * Output only. A 12 digit ID used to identify the payments profile associated
   * with the billing setup, for example, "1234-5678-9012". It appears on the
   * invoice PDF as "Billing ID".
   *
   * @var string
   */
  public $paymentsProfileId;
  /**
   * Output only. The URL to a PDF copy of the invoice. Users need to pass in
   * their OAuth token to request the PDF with this URL.
   *
   * @var string
   */
  public $pdfUrl;
  /**
   * Output only. The pretax subtotal amount of invoice level regulatory costs,
   * in micros.
   *
   * @var string
   */
  public $regulatoryCostsSubtotalAmountMicros;
  /**
   * Output only. The sum of taxes on the invoice level regulatory costs, in
   * micros.
   *
   * @var string
   */
  public $regulatoryCostsTaxAmountMicros;
  /**
   * Output only. The total amount of invoice level regulatory costs, in micros.
   *
   * @var string
   */
  public $regulatoryCostsTotalAmountMicros;
  /**
   * Output only. The resource name of the original invoice(s) being rebilled or
   * replaced by this invoice, if applicable. There might be multiple replaced
   * invoices due to invoice consolidation. The replaced invoices may not belong
   * to the same payments account. If `replaced_invoices` is set,
   * `corrected_invoice` will not be set. Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   *
   * @var string[]
   */
  public $replacedInvoices;
  /**
   * Output only. The resource name of the invoice. Multiple customers can share
   * a given invoice, so multiple resource names may point to the same invoice.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $serviceDateRangeType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $serviceDateRangeDataType = '';
  /**
   * Output only. The pretax subtotal amount, in micros. This is equal to the
   * sum of the AccountBudgetSummary subtotal amounts and
   * Invoice.adjustments_subtotal_amount_micros.
   *
   * @var string
   */
  public $subtotalAmountMicros;
  /**
   * Output only. The sum of all taxes on the invoice, in micros. This equals
   * the sum of the AccountBudgetSummary tax amounts, plus taxes not associated
   * with a specific account budget.
   *
   * @var string
   */
  public $taxAmountMicros;
  /**
   * Output only. The total amount, in micros. This equals the sum of
   * Invoice.subtotal_amount_micros, Invoice.tax_amount_micros,
   * Invoice.regulatory_costs_subtotal_amount_micros, and
   * Invoice.export_charge_subtotal_amount_micros (which is separated into a
   * separate line item starting with V14.1).
   *
   * @var string
   */
  public $totalAmountMicros;
  /**
   * Output only. The type of invoice.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The list of summarized account budget information associated
   * with this invoice.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoiceAccountBudgetSummary[] $accountBudgetSummaries
   */
  public function setAccountBudgetSummaries($accountBudgetSummaries)
  {
    $this->accountBudgetSummaries = $accountBudgetSummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoiceAccountBudgetSummary[]
   */
  public function getAccountBudgetSummaries()
  {
    return $this->accountBudgetSummaries;
  }
  /**
   * Output only. The list of summarized account information associated with
   * this invoice.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoiceAccountSummary[] $accountSummaries
   */
  public function setAccountSummaries($accountSummaries)
  {
    $this->accountSummaries = $accountSummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoiceAccountSummary[]
   */
  public function getAccountSummaries()
  {
    return $this->accountSummaries;
  }
  /**
   * Output only. The pretax subtotal amount of invoice level adjustments, in
   * micros.
   *
   * @param string $adjustmentsSubtotalAmountMicros
   */
  public function setAdjustmentsSubtotalAmountMicros($adjustmentsSubtotalAmountMicros)
  {
    $this->adjustmentsSubtotalAmountMicros = $adjustmentsSubtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getAdjustmentsSubtotalAmountMicros()
  {
    return $this->adjustmentsSubtotalAmountMicros;
  }
  /**
   * Output only. The sum of taxes on the invoice level adjustments, in micros.
   *
   * @param string $adjustmentsTaxAmountMicros
   */
  public function setAdjustmentsTaxAmountMicros($adjustmentsTaxAmountMicros)
  {
    $this->adjustmentsTaxAmountMicros = $adjustmentsTaxAmountMicros;
  }
  /**
   * @return string
   */
  public function getAdjustmentsTaxAmountMicros()
  {
    return $this->adjustmentsTaxAmountMicros;
  }
  /**
   * Output only. The total amount of invoice level adjustments, in micros.
   *
   * @param string $adjustmentsTotalAmountMicros
   */
  public function setAdjustmentsTotalAmountMicros($adjustmentsTotalAmountMicros)
  {
    $this->adjustmentsTotalAmountMicros = $adjustmentsTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getAdjustmentsTotalAmountMicros()
  {
    return $this->adjustmentsTotalAmountMicros;
  }
  /**
   * Output only. The resource name of this invoice's billing setup.
   * `customers/{customer_id}/billingSetups/{billing_setup_id}`
   *
   * @param string $billingSetup
   */
  public function setBillingSetup($billingSetup)
  {
    $this->billingSetup = $billingSetup;
  }
  /**
   * @return string
   */
  public function getBillingSetup()
  {
    return $this->billingSetup;
  }
  /**
   * Output only. The resource name of the original invoice corrected, wrote
   * off, or canceled by this invoice, if applicable. If `corrected_invoice` is
   * set, `replaced_invoices` will not be set. Invoice resource names have the
   * form: `customers/{customer_id}/invoices/{invoice_id}`
   *
   * @param string $correctedInvoice
   */
  public function setCorrectedInvoice($correctedInvoice)
  {
    $this->correctedInvoice = $correctedInvoice;
  }
  /**
   * @return string
   */
  public function getCorrectedInvoice()
  {
    return $this->correctedInvoice;
  }
  /**
   * Output only. The currency code. All costs are returned in this currency. A
   * subset of the currency codes derived from the ISO 4217 standard is
   * supported.
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
   * Output only. The due date in yyyy-mm-dd format.
   *
   * @param string $dueDate
   */
  public function setDueDate($dueDate)
  {
    $this->dueDate = $dueDate;
  }
  /**
   * @return string
   */
  public function getDueDate()
  {
    return $this->dueDate;
  }
  /**
   * Output only. The pretax subtotal amount of invoice level export charges, in
   * micros.
   *
   * @param string $exportChargeSubtotalAmountMicros
   */
  public function setExportChargeSubtotalAmountMicros($exportChargeSubtotalAmountMicros)
  {
    $this->exportChargeSubtotalAmountMicros = $exportChargeSubtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getExportChargeSubtotalAmountMicros()
  {
    return $this->exportChargeSubtotalAmountMicros;
  }
  /**
   * Output only. The sum of taxes on the invoice level export charges, in
   * micros.
   *
   * @param string $exportChargeTaxAmountMicros
   */
  public function setExportChargeTaxAmountMicros($exportChargeTaxAmountMicros)
  {
    $this->exportChargeTaxAmountMicros = $exportChargeTaxAmountMicros;
  }
  /**
   * @return string
   */
  public function getExportChargeTaxAmountMicros()
  {
    return $this->exportChargeTaxAmountMicros;
  }
  /**
   * Output only. The total amount of invoice level export charges, in micros.
   *
   * @param string $exportChargeTotalAmountMicros
   */
  public function setExportChargeTotalAmountMicros($exportChargeTotalAmountMicros)
  {
    $this->exportChargeTotalAmountMicros = $exportChargeTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getExportChargeTotalAmountMicros()
  {
    return $this->exportChargeTotalAmountMicros;
  }
  /**
   * Output only. The ID of the invoice. It appears on the invoice PDF as
   * "Invoice number".
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The issue date in yyyy-mm-dd format. It appears on the invoice
   * PDF as either "Issue date" or "Invoice date".
   *
   * @param string $issueDate
   */
  public function setIssueDate($issueDate)
  {
    $this->issueDate = $issueDate;
  }
  /**
   * @return string
   */
  public function getIssueDate()
  {
    return $this->issueDate;
  }
  /**
   * Output only. A 16 digit ID used to identify the payments account associated
   * with the billing setup, for example, "1234-5678-9012-3456". It appears on
   * the invoice PDF as "Billing Account Number".
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
   * with the billing setup, for example, "1234-5678-9012". It appears on the
   * invoice PDF as "Billing ID".
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
   * Output only. The URL to a PDF copy of the invoice. Users need to pass in
   * their OAuth token to request the PDF with this URL.
   *
   * @param string $pdfUrl
   */
  public function setPdfUrl($pdfUrl)
  {
    $this->pdfUrl = $pdfUrl;
  }
  /**
   * @return string
   */
  public function getPdfUrl()
  {
    return $this->pdfUrl;
  }
  /**
   * Output only. The pretax subtotal amount of invoice level regulatory costs,
   * in micros.
   *
   * @param string $regulatoryCostsSubtotalAmountMicros
   */
  public function setRegulatoryCostsSubtotalAmountMicros($regulatoryCostsSubtotalAmountMicros)
  {
    $this->regulatoryCostsSubtotalAmountMicros = $regulatoryCostsSubtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getRegulatoryCostsSubtotalAmountMicros()
  {
    return $this->regulatoryCostsSubtotalAmountMicros;
  }
  /**
   * Output only. The sum of taxes on the invoice level regulatory costs, in
   * micros.
   *
   * @param string $regulatoryCostsTaxAmountMicros
   */
  public function setRegulatoryCostsTaxAmountMicros($regulatoryCostsTaxAmountMicros)
  {
    $this->regulatoryCostsTaxAmountMicros = $regulatoryCostsTaxAmountMicros;
  }
  /**
   * @return string
   */
  public function getRegulatoryCostsTaxAmountMicros()
  {
    return $this->regulatoryCostsTaxAmountMicros;
  }
  /**
   * Output only. The total amount of invoice level regulatory costs, in micros.
   *
   * @param string $regulatoryCostsTotalAmountMicros
   */
  public function setRegulatoryCostsTotalAmountMicros($regulatoryCostsTotalAmountMicros)
  {
    $this->regulatoryCostsTotalAmountMicros = $regulatoryCostsTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getRegulatoryCostsTotalAmountMicros()
  {
    return $this->regulatoryCostsTotalAmountMicros;
  }
  /**
   * Output only. The resource name of the original invoice(s) being rebilled or
   * replaced by this invoice, if applicable. There might be multiple replaced
   * invoices due to invoice consolidation. The replaced invoices may not belong
   * to the same payments account. If `replaced_invoices` is set,
   * `corrected_invoice` will not be set. Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
   *
   * @param string[] $replacedInvoices
   */
  public function setReplacedInvoices($replacedInvoices)
  {
    $this->replacedInvoices = $replacedInvoices;
  }
  /**
   * @return string[]
   */
  public function getReplacedInvoices()
  {
    return $this->replacedInvoices;
  }
  /**
   * Output only. The resource name of the invoice. Multiple customers can share
   * a given invoice, so multiple resource names may point to the same invoice.
   * Invoice resource names have the form:
   * `customers/{customer_id}/invoices/{invoice_id}`
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
   * Output only. The service period date range of this invoice. The end date is
   * inclusive.
   *
   * @param GoogleAdsSearchads360V23CommonDateRange $serviceDateRange
   */
  public function setServiceDateRange(GoogleAdsSearchads360V23CommonDateRange $serviceDateRange)
  {
    $this->serviceDateRange = $serviceDateRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDateRange
   */
  public function getServiceDateRange()
  {
    return $this->serviceDateRange;
  }
  /**
   * Output only. The pretax subtotal amount, in micros. This is equal to the
   * sum of the AccountBudgetSummary subtotal amounts and
   * Invoice.adjustments_subtotal_amount_micros.
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
   * Output only. The sum of all taxes on the invoice, in micros. This equals
   * the sum of the AccountBudgetSummary tax amounts, plus taxes not associated
   * with a specific account budget.
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
   * Output only. The total amount, in micros. This equals the sum of
   * Invoice.subtotal_amount_micros, Invoice.tax_amount_micros,
   * Invoice.regulatory_costs_subtotal_amount_micros, and
   * Invoice.export_charge_subtotal_amount_micros (which is separated into a
   * separate line item starting with V14.1).
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
  /**
   * Output only. The type of invoice.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CREDIT_MEMO, INVOICE
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInvoice::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoice');
