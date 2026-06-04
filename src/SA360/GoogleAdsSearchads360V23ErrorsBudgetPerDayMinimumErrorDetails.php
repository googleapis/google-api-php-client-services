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

class GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails extends \Google\Model
{
  /**
   * The minimum budget required by the campaign per day, in micros of the
   * advertiser currency. Applies to both daily and custom budgets.
   *
   * @var string
   */
  public $budgetPerDayMinimumMicros;
  /**
   * The advertiser's currency, represented as a three-letter ISO 4217 currency
   * code (such as "USD").
   *
   * @var string
   */
  public $currencyCode;
  /**
   * The budget amount value that was rejected as too low, in micros of the
   * advertiser currency. Only set if this error is caused by the amount field
   * value.
   *
   * @var string
   */
  public $failedBudgetAmountMicros;
  /**
   * The budget total_amount value that was rejected as too low, in micros of
   * the advertiser currency. Only set if this error is caused by the
   * total_amount field value.
   *
   * @var string
   */
  public $failedBudgetTotalAmountMicros;
  /**
   * The minimum value for the budget's amount field required by the campaign,
   * in micros of the advertiser currency. Only set if this error is caused by
   * the amount field value.
   *
   * @var string
   */
  public $minimumBudgetAmountMicros;
  /**
   * The minimum value for the budget's total_amount field required by the
   * campaign given its configured start and end time, in micros of the
   * advertiser currency. Only set if this error is caused by the total_amount
   * field value.
   *
   * @var string
   */
  public $minimumBudgetTotalAmountMicros;

  /**
   * The minimum budget required by the campaign per day, in micros of the
   * advertiser currency. Applies to both daily and custom budgets.
   *
   * @param string $budgetPerDayMinimumMicros
   */
  public function setBudgetPerDayMinimumMicros($budgetPerDayMinimumMicros)
  {
    $this->budgetPerDayMinimumMicros = $budgetPerDayMinimumMicros;
  }
  /**
   * @return string
   */
  public function getBudgetPerDayMinimumMicros()
  {
    return $this->budgetPerDayMinimumMicros;
  }
  /**
   * The advertiser's currency, represented as a three-letter ISO 4217 currency
   * code (such as "USD").
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
   * The budget amount value that was rejected as too low, in micros of the
   * advertiser currency. Only set if this error is caused by the amount field
   * value.
   *
   * @param string $failedBudgetAmountMicros
   */
  public function setFailedBudgetAmountMicros($failedBudgetAmountMicros)
  {
    $this->failedBudgetAmountMicros = $failedBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getFailedBudgetAmountMicros()
  {
    return $this->failedBudgetAmountMicros;
  }
  /**
   * The budget total_amount value that was rejected as too low, in micros of
   * the advertiser currency. Only set if this error is caused by the
   * total_amount field value.
   *
   * @param string $failedBudgetTotalAmountMicros
   */
  public function setFailedBudgetTotalAmountMicros($failedBudgetTotalAmountMicros)
  {
    $this->failedBudgetTotalAmountMicros = $failedBudgetTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getFailedBudgetTotalAmountMicros()
  {
    return $this->failedBudgetTotalAmountMicros;
  }
  /**
   * The minimum value for the budget's amount field required by the campaign,
   * in micros of the advertiser currency. Only set if this error is caused by
   * the amount field value.
   *
   * @param string $minimumBudgetAmountMicros
   */
  public function setMinimumBudgetAmountMicros($minimumBudgetAmountMicros)
  {
    $this->minimumBudgetAmountMicros = $minimumBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getMinimumBudgetAmountMicros()
  {
    return $this->minimumBudgetAmountMicros;
  }
  /**
   * The minimum value for the budget's total_amount field required by the
   * campaign given its configured start and end time, in micros of the
   * advertiser currency. Only set if this error is caused by the total_amount
   * field value.
   *
   * @param string $minimumBudgetTotalAmountMicros
   */
  public function setMinimumBudgetTotalAmountMicros($minimumBudgetTotalAmountMicros)
  {
    $this->minimumBudgetTotalAmountMicros = $minimumBudgetTotalAmountMicros;
  }
  /**
   * @return string
   */
  public function getMinimumBudgetTotalAmountMicros()
  {
    return $this->minimumBudgetTotalAmountMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ErrorsBudgetPerDayMinimumErrorDetails');
