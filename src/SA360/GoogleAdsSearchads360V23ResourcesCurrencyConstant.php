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

class GoogleAdsSearchads360V23ResourcesCurrencyConstant extends \Google\Model
{
  /**
   * Output only. The billable unit for this currency. Billed amounts should be
   * multiples of this value.
   *
   * @var string
   */
  public $billableUnitMicros;
  /**
   * Output only. ISO 4217 three-letter currency code, for example, "USD"
   *
   * @var string
   */
  public $code;
  /**
   * Output only. Full English name of the currency.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The resource name of the currency constant. Currency constant
   * resource names have the form: `currencyConstants/{code}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Standard symbol for describing this currency, for example, '$'
   * for US Dollars.
   *
   * @var string
   */
  public $symbol;

  /**
   * Output only. The billable unit for this currency. Billed amounts should be
   * multiples of this value.
   *
   * @param string $billableUnitMicros
   */
  public function setBillableUnitMicros($billableUnitMicros)
  {
    $this->billableUnitMicros = $billableUnitMicros;
  }
  /**
   * @return string
   */
  public function getBillableUnitMicros()
  {
    return $this->billableUnitMicros;
  }
  /**
   * Output only. ISO 4217 three-letter currency code, for example, "USD"
   *
   * @param string $code
   */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /**
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * Output only. Full English name of the currency.
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
   * Output only. The resource name of the currency constant. Currency constant
   * resource names have the form: `currencyConstants/{code}`
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
   * Output only. Standard symbol for describing this currency, for example, '$'
   * for US Dollars.
   *
   * @param string $symbol
   */
  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
  }
  /**
   * @return string
   */
  public function getSymbol()
  {
    return $this->symbol;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCurrencyConstant::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCurrencyConstant');
