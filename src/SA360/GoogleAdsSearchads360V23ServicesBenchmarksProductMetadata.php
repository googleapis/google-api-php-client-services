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

class GoogleAdsSearchads360V23ServicesBenchmarksProductMetadata extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MARKETING_OBJECTIVE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const MARKETING_OBJECTIVE_UNKNOWN = 'UNKNOWN';
  /**
   * The objective is to increase awareness.
   */
  public const MARKETING_OBJECTIVE_AWARENESS = 'AWARENESS';
  /**
   * The objective is to encourage potential customers to consider the brand or
   * products.
   */
  public const MARKETING_OBJECTIVE_CONSIDERATION = 'CONSIDERATION';
  /**
   * The objective is to drive a specific conversion, such as a purchase.
   */
  public const MARKETING_OBJECTIVE_ACTION = 'ACTION';
  /**
   * The marketing objective associated with the product. A marketing objective
   * is a broader classification of products.
   *
   * @var string
   */
  public $marketingObjective;
  /**
   * The identifier of the product. The identifier can be used as inputs for
   * BenchmarksService.GenerateBenchmarksMetrics.
   *
   * @var string
   */
  public $productCode;
  /**
   * The name of the product.
   *
   * @var string
   */
  public $productName;

  /**
   * The marketing objective associated with the product. A marketing objective
   * is a broader classification of products.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AWARENESS, CONSIDERATION, ACTION
   *
   * @param self::MARKETING_OBJECTIVE_* $marketingObjective
   */
  public function setMarketingObjective($marketingObjective)
  {
    $this->marketingObjective = $marketingObjective;
  }
  /**
   * @return self::MARKETING_OBJECTIVE_*
   */
  public function getMarketingObjective()
  {
    return $this->marketingObjective;
  }
  /**
   * The identifier of the product. The identifier can be used as inputs for
   * BenchmarksService.GenerateBenchmarksMetrics.
   *
   * @param string $productCode
   */
  public function setProductCode($productCode)
  {
    $this->productCode = $productCode;
  }
  /**
   * @return string
   */
  public function getProductCode()
  {
    return $this->productCode;
  }
  /**
   * The name of the product.
   *
   * @param string $productName
   */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  /**
   * @return string
   */
  public function getProductName()
  {
    return $this->productName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesBenchmarksProductMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesBenchmarksProductMetadata');
