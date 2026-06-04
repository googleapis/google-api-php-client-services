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

class GoogleAdsSearchads360V23ResourcesInvoiceAccountSummary extends \Google\Collection
{
  protected $collection_key = 'regulatoryCostSummaries';
  protected $adjustmentSummariesType = GoogleAdsSearchads360V23ResourcesInvoiceAdjustmentSummary::class;
  protected $adjustmentSummariesDataType = 'array';
  /**
   * Output only. Pretax billing correction subtotal amount, in micros.
   *
   * @var string
   */
  public $billingCorrectionSubtotalAmountMicros;
  /**
   * Output only. Tax on billing correction, in micros.
   *
   * @var string
   */
  public $billingCorrectionTaxAmountMicros;
  /**
   * Output only. Total billing correction amount, in micros.
   *
   * @var string
   */
  public $billingCorrectionTotalAmountMicros;
  /**
   * Output only. Pretax coupon adjustment subtotal amount, in micros.
   *
   * @var string
   */
  public $couponAdjustmentSubtotalAmountMicros;
  /**
   * Output only. Tax on coupon adjustment, in micros.
   *
   * @var string
   */
  public $couponAdjustmentTaxAmountMicros;
  /**
   * Output only. Total coupon adjustment amount, in micros.
   *
   * @var string
   */
  public $couponAdjustmentTotalAmountMicros;
  /**
   * Output only. The account associated with the account summary.
   *
   * @var string
   */
  public $customer;
  /**
   * Output only. Pretax excess credit adjustment subtotal amount, in micros.
   *
   * @var string
   */
  public $excessCreditAdjustmentSubtotalAmountMicros;
  /**
   * Output only. Tax on excess credit adjustment, in micros.
   *
   * @var string
   */
  public $excessCreditAdjustmentTaxAmountMicros;
  /**
   * Output only. Total excess credit adjustment amount, in micros.
   *
   * @var string
   */
  public $excessCreditAdjustmentTotalAmountMicros;
  /**
   * Output only. Pretax export charge subtotal amount, in micros.
   *
   * @var string
   */
  public $exportChargeSubtotalAmountMicros;
  /**
   * Output only. Tax on export charge, in micros.
   *
   * @var string
   */
  public $exportChargeTaxAmountMicros;
  /**
   * Output only. Total export charge amount, in micros.
   *
   * @var string
   */
  public $exportChargeTotalAmountMicros;
  protected $regulatoryCostSummariesType = GoogleAdsSearchads360V23ResourcesInvoiceRegulatoryCostSummary::class;
  protected $regulatoryCostSummariesDataType = 'array';
  /**
   * Output only. Pretax regulatory costs subtotal amount, in micros.
   *
   * @var string
   */
  public $regulatoryCostsSubtotalAmountMicros;
  /**
   * Output only. Tax on regulatory costs, in micros.
   *
   * @var string
   */
  public $regulatoryCostsTaxAmountMicros;
  /**
   * Output only. Total regulatory costs amount, in micros.
   *
   * @var string
   */
  public $regulatoryCostsTotalAmountMicros;
  /**
   * Output only. Total pretax subtotal amount attributable to the account
   * during the service period, in micros.
   *
   * @var string
   */
  public $subtotalAmountMicros;
  /**
   * Output only. Total tax amount attributable to the account during the
   * service period, in micros.
   *
   * @var string
   */
  public $taxAmountMicros;
  /**
   * Output only. Total amount attributable to the account during the service
   * period, in micros. This equals the sum of the subtotal_amount_micros and
   * tax_amount_micros.
   *
   * @var string
   */
  public $totalAmountMicros;

  /**
   * Output only. The list of adjustment information associated with this
   * account.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoiceAdjustmentSummary[] $adjustmentSummaries
   */
  public function setAdjustmentSummaries($adjustmentSummaries)
  {
    $this->adjustmentSummaries = $adjustmentSummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoiceAdjustmentSummary[]
   */
  public function getAdjustmentSummaries()
  {
    return $this->adjustmentSummaries;
  }
  /**
   * Output only. Pretax billing correction subtotal amount, in micros.
   *
   * @param string $billingCorrectionSubtotalAmountMicros
   */
  public function setBillingCorrectionSubtotalAmountMicros($billingCorrectionSubtotalAmountMicros)
  {
    $this->billingCorrectionSubtotalAmountMicros = $billingCorrectionSubtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getBillingCorrectionSubtotalAmountMicros()
  {
    return $this->billingCorrectionSubtotalAmountMicros;
  }
  /**
   * Output only. Tax on billing correction, in micros.
   *
   * @param string $billingCorrectionTaxAmountMicros
   */
  public function setBillingCorrectionTaxAmountMicros($billingCorrectionTaxAmountMicros)
  {
    $this->billingCorrectionTaxAmountMicros = $billingCorrectionTaxAmountMicros;
  }
  /**
   * @return string
   */
  public function getBillingCorrectionTaxAmountMicros()
  {
    return $this->billingCorrectionTaxAmountMicros;
  }
  /**
   * Output only. Total billing correction amount, in micros.
   *
   * @param string $billingCorrectionTotalAmountMicros
   */
  public function setBillingCorrectionTotalAmountMicros($billingCorrectionTotalAmountMicros)
  {
    $this->billingCorrectionTotalAmountMicros = $billingCorrectionTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getBillingCorrectionTotalAmountMicros()
  {
    return $this->billingCorrectionTotalAmountMicros;
  }
  /**
   * Output only. Pretax coupon adjustment subtotal amount, in micros.
   *
   * @param string $couponAdjustmentSubtotalAmountMicros
   */
  public function setCouponAdjustmentSubtotalAmountMicros($couponAdjustmentSubtotalAmountMicros)
  {
    $this->couponAdjustmentSubtotalAmountMicros = $couponAdjustmentSubtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getCouponAdjustmentSubtotalAmountMicros()
  {
    return $this->couponAdjustmentSubtotalAmountMicros;
  }
  /**
   * Output only. Tax on coupon adjustment, in micros.
   *
   * @param string $couponAdjustmentTaxAmountMicros
   */
  public function setCouponAdjustmentTaxAmountMicros($couponAdjustmentTaxAmountMicros)
  {
    $this->couponAdjustmentTaxAmountMicros = $couponAdjustmentTaxAmountMicros;
  }
  /**
   * @return string
   */
  public function getCouponAdjustmentTaxAmountMicros()
  {
    return $this->couponAdjustmentTaxAmountMicros;
  }
  /**
   * Output only. Total coupon adjustment amount, in micros.
   *
   * @param string $couponAdjustmentTotalAmountMicros
   */
  public function setCouponAdjustmentTotalAmountMicros($couponAdjustmentTotalAmountMicros)
  {
    $this->couponAdjustmentTotalAmountMicros = $couponAdjustmentTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getCouponAdjustmentTotalAmountMicros()
  {
    return $this->couponAdjustmentTotalAmountMicros;
  }
  /**
   * Output only. The account associated with the account summary.
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
   * Output only. Pretax excess credit adjustment subtotal amount, in micros.
   *
   * @param string $excessCreditAdjustmentSubtotalAmountMicros
   */
  public function setExcessCreditAdjustmentSubtotalAmountMicros($excessCreditAdjustmentSubtotalAmountMicros)
  {
    $this->excessCreditAdjustmentSubtotalAmountMicros = $excessCreditAdjustmentSubtotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getExcessCreditAdjustmentSubtotalAmountMicros()
  {
    return $this->excessCreditAdjustmentSubtotalAmountMicros;
  }
  /**
   * Output only. Tax on excess credit adjustment, in micros.
   *
   * @param string $excessCreditAdjustmentTaxAmountMicros
   */
  public function setExcessCreditAdjustmentTaxAmountMicros($excessCreditAdjustmentTaxAmountMicros)
  {
    $this->excessCreditAdjustmentTaxAmountMicros = $excessCreditAdjustmentTaxAmountMicros;
  }
  /**
   * @return string
   */
  public function getExcessCreditAdjustmentTaxAmountMicros()
  {
    return $this->excessCreditAdjustmentTaxAmountMicros;
  }
  /**
   * Output only. Total excess credit adjustment amount, in micros.
   *
   * @param string $excessCreditAdjustmentTotalAmountMicros
   */
  public function setExcessCreditAdjustmentTotalAmountMicros($excessCreditAdjustmentTotalAmountMicros)
  {
    $this->excessCreditAdjustmentTotalAmountMicros = $excessCreditAdjustmentTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getExcessCreditAdjustmentTotalAmountMicros()
  {
    return $this->excessCreditAdjustmentTotalAmountMicros;
  }
  /**
   * Output only. Pretax export charge subtotal amount, in micros.
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
   * Output only. Tax on export charge, in micros.
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
   * Output only. Total export charge amount, in micros.
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
   * Output only. The list of regulatory cost information associated with this
   * account.
   *
   * @param GoogleAdsSearchads360V23ResourcesInvoiceRegulatoryCostSummary[] $regulatoryCostSummaries
   */
  public function setRegulatoryCostSummaries($regulatoryCostSummaries)
  {
    $this->regulatoryCostSummaries = $regulatoryCostSummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInvoiceRegulatoryCostSummary[]
   */
  public function getRegulatoryCostSummaries()
  {
    return $this->regulatoryCostSummaries;
  }
  /**
   * Output only. Pretax regulatory costs subtotal amount, in micros.
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
   * Output only. Tax on regulatory costs, in micros.
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
   * Output only. Total regulatory costs amount, in micros.
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
   * Output only. Total pretax subtotal amount attributable to the account
   * during the service period, in micros.
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
   * Output only. Total tax amount attributable to the account during the
   * service period, in micros.
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
   * Output only. Total amount attributable to the account during the service
   * period, in micros. This equals the sum of the subtotal_amount_micros and
   * tax_amount_micros.
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
class_alias(GoogleAdsSearchads360V23ResourcesInvoiceAccountSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoiceAccountSummary');
