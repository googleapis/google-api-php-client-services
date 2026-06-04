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

class GoogleAdsSearchads360V23ResourcesInvoiceInvalidActivitySummary extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_UNKNOWN = 'UNKNOWN';
  /**
   * January.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_JANUARY = 'JANUARY';
  /**
   * February.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_FEBRUARY = 'FEBRUARY';
  /**
   * March.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_MARCH = 'MARCH';
  /**
   * April.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_APRIL = 'APRIL';
  /**
   * May.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_MAY = 'MAY';
  /**
   * June.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_JUNE = 'JUNE';
  /**
   * July.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_JULY = 'JULY';
  /**
   * August.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_AUGUST = 'AUGUST';
  /**
   * September.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_SEPTEMBER = 'SEPTEMBER';
  /**
   * October.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_OCTOBER = 'OCTOBER';
  /**
   * November.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_NOVEMBER = 'NOVEMBER';
  /**
   * December.
   */
  public const ORIGINAL_MONTH_OF_SERVICE_DECEMBER = 'DECEMBER';
  /**
   * Output only. Invalid activity amount in micros.
   *
   * @var string
   */
  public $amountMicros;
  /**
   * Output only. Original account budget name related to this invalid activity
   * credit.
   *
   * @var string
   */
  public $originalAccountBudgetName;
  /**
   * Output only. Original invoice number related to this invalid activity
   * credit.
   *
   * @var string
   */
  public $originalInvoiceId;
  /**
   * Output only. Original month of service related to this invalid activity
   * credit.
   *
   * @var string
   */
  public $originalMonthOfService;
  /**
   * Output only. Original purchase order number related to this invalid
   * activity credit.
   *
   * @var string
   */
  public $originalPurchaseOrderNumber;
  /**
   * Output only. Original year of service related to this invalid activity
   * credit.
   *
   * @var string
   */
  public $originalYearOfService;

  /**
   * Output only. Invalid activity amount in micros.
   *
   * @param string $amountMicros
   */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /**
   * @return string
   */
  public function getAmountMicros()
  {
    return $this->amountMicros;
  }
  /**
   * Output only. Original account budget name related to this invalid activity
   * credit.
   *
   * @param string $originalAccountBudgetName
   */
  public function setOriginalAccountBudgetName($originalAccountBudgetName)
  {
    $this->originalAccountBudgetName = $originalAccountBudgetName;
  }
  /**
   * @return string
   */
  public function getOriginalAccountBudgetName()
  {
    return $this->originalAccountBudgetName;
  }
  /**
   * Output only. Original invoice number related to this invalid activity
   * credit.
   *
   * @param string $originalInvoiceId
   */
  public function setOriginalInvoiceId($originalInvoiceId)
  {
    $this->originalInvoiceId = $originalInvoiceId;
  }
  /**
   * @return string
   */
  public function getOriginalInvoiceId()
  {
    return $this->originalInvoiceId;
  }
  /**
   * Output only. Original month of service related to this invalid activity
   * credit.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, JANUARY, FEBRUARY, MARCH, APRIL,
   * MAY, JUNE, JULY, AUGUST, SEPTEMBER, OCTOBER, NOVEMBER, DECEMBER
   *
   * @param self::ORIGINAL_MONTH_OF_SERVICE_* $originalMonthOfService
   */
  public function setOriginalMonthOfService($originalMonthOfService)
  {
    $this->originalMonthOfService = $originalMonthOfService;
  }
  /**
   * @return self::ORIGINAL_MONTH_OF_SERVICE_*
   */
  public function getOriginalMonthOfService()
  {
    return $this->originalMonthOfService;
  }
  /**
   * Output only. Original purchase order number related to this invalid
   * activity credit.
   *
   * @param string $originalPurchaseOrderNumber
   */
  public function setOriginalPurchaseOrderNumber($originalPurchaseOrderNumber)
  {
    $this->originalPurchaseOrderNumber = $originalPurchaseOrderNumber;
  }
  /**
   * @return string
   */
  public function getOriginalPurchaseOrderNumber()
  {
    return $this->originalPurchaseOrderNumber;
  }
  /**
   * Output only. Original year of service related to this invalid activity
   * credit.
   *
   * @param string $originalYearOfService
   */
  public function setOriginalYearOfService($originalYearOfService)
  {
    $this->originalYearOfService = $originalYearOfService;
  }
  /**
   * @return string
   */
  public function getOriginalYearOfService()
  {
    return $this->originalYearOfService;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInvoiceInvalidActivitySummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoiceInvalidActivitySummary');
