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

class GoogleAdsSearchads360V23ResourcesInvoiceRegulatoryCostSummary extends \Google\Model
{
  /**
   * Not specified.
   */
  public const REGULATORY_FEE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REGULATORY_FEE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Represents Austria DST fee.
   */
  public const REGULATORY_FEE_TYPE_AUSTRIA_DST_FEE = 'AUSTRIA_DST_FEE';
  /**
   * Represents Türkiye regulatory operating cost.
   */
  public const REGULATORY_FEE_TYPE_TURKIYE_REGULATORY_OPERATING_COST = 'TURKIYE_REGULATORY_OPERATING_COST';
  /**
   * Represents UK DST fee.
   */
  public const REGULATORY_FEE_TYPE_UK_DST_FEE = 'UK_DST_FEE';
  /**
   * Represents Spain regulatory operating cost.
   */
  public const REGULATORY_FEE_TYPE_SPAIN_REGULATORY_OPERATING_COST = 'SPAIN_REGULATORY_OPERATING_COST';
  /**
   * Represents France regulatory operating cost.
   */
  public const REGULATORY_FEE_TYPE_FRANCE_REGULATORY_OPERATING_COST = 'FRANCE_REGULATORY_OPERATING_COST';
  /**
   * Represents Italy regulatory operating cost.
   */
  public const REGULATORY_FEE_TYPE_ITALY_REGULATORY_OPERATING_COST = 'ITALY_REGULATORY_OPERATING_COST';
  /**
   * Represents India regulatory operating cost.
   */
  public const REGULATORY_FEE_TYPE_INDIA_REGULATORY_OPERATING_COST = 'INDIA_REGULATORY_OPERATING_COST';
  /**
   * Represents Poland regulatory operating cost.
   */
  public const REGULATORY_FEE_TYPE_POLAND_REGULATORY_OPERATING_COST = 'POLAND_REGULATORY_OPERATING_COST';
  /**
   * Represents operating charges.
   */
  public const REGULATORY_FEE_TYPE_OPERATING_CHARGES = 'OPERATING_CHARGES';
  /**
   * Represents Canada DST fee.
   */
  public const REGULATORY_FEE_TYPE_CANADA_DST_FEE = 'CANADA_DST_FEE';
  /**
   * Output only. The amount of the regulatory fee, in micros. The currency code
   * for this amount is the same as the Invoice.currency_code.
   *
   * @var string
   */
  public $amountMicros;
  /**
   * Output only. The type of regulatory fee.
   *
   * @var string
   */
  public $regulatoryFeeType;

  /**
   * Output only. The amount of the regulatory fee, in micros. The currency code
   * for this amount is the same as the Invoice.currency_code.
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
   * Output only. The type of regulatory fee.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AUSTRIA_DST_FEE,
   * TURKIYE_REGULATORY_OPERATING_COST, UK_DST_FEE,
   * SPAIN_REGULATORY_OPERATING_COST, FRANCE_REGULATORY_OPERATING_COST,
   * ITALY_REGULATORY_OPERATING_COST, INDIA_REGULATORY_OPERATING_COST,
   * POLAND_REGULATORY_OPERATING_COST, OPERATING_CHARGES, CANADA_DST_FEE
   *
   * @param self::REGULATORY_FEE_TYPE_* $regulatoryFeeType
   */
  public function setRegulatoryFeeType($regulatoryFeeType)
  {
    $this->regulatoryFeeType = $regulatoryFeeType;
  }
  /**
   * @return self::REGULATORY_FEE_TYPE_*
   */
  public function getRegulatoryFeeType()
  {
    return $this->regulatoryFeeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInvoiceRegulatoryCostSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoiceRegulatoryCostSummary');
