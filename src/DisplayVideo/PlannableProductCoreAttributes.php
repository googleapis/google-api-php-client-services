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

namespace Google\Service\DisplayVideo;

class PlannableProductCoreAttributes extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BUYING_METHOD_PLANNABLE_BUYING_METHOD_UNSPECIFIED = 'PLANNABLE_BUYING_METHOD_UNSPECIFIED';
  /**
   * Auction.
   */
  public const BUYING_METHOD_PLANNABLE_BUYING_METHOD_AUCTION = 'PLANNABLE_BUYING_METHOD_AUCTION';
  /**
   * Reservation.
   */
  public const BUYING_METHOD_PLANNABLE_BUYING_METHOD_RESERVATION = 'PLANNABLE_BUYING_METHOD_RESERVATION';
  /**
   * Not specified.
   */
  public const COST_MODEL_PLANNABLE_COST_MODEL_UNSPECIFIED = 'PLANNABLE_COST_MODEL_UNSPECIFIED';
  /**
   * CPM.
   */
  public const COST_MODEL_PLANNABLE_COST_MODEL_CPM = 'PLANNABLE_COST_MODEL_CPM';
  /**
   * CPV.
   */
  public const COST_MODEL_PLANNABLE_COST_MODEL_CPV = 'PLANNABLE_COST_MODEL_CPV';
  /**
   * CPC.
   */
  public const COST_MODEL_PLANNABLE_COST_MODEL_CPC = 'PLANNABLE_COST_MODEL_CPC';
  /**
   * CPA.
   */
  public const COST_MODEL_PLANNABLE_COST_MODEL_CPA = 'PLANNABLE_COST_MODEL_CPA';
  /**
   * Not specified.
   */
  public const PRODUCT_CATEGORY_PLANNABLE_PRODUCT_CATEGORY_UNSPECIFIED = 'PLANNABLE_PRODUCT_CATEGORY_UNSPECIFIED';
  /**
   * YouTube.
   */
  public const PRODUCT_CATEGORY_YOUTUBE = 'YOUTUBE';
  /**
   * Open Auction.
   */
  public const PRODUCT_CATEGORY_OPEN_AUCTION = 'OPEN_AUCTION';
  /**
   * Output only. The buying method.
   *
   * @var string
   */
  public $buyingMethod;
  /**
   * Output only. The cost model.
   *
   * @var string
   */
  public $costModel;
  /**
   * Output only. The product category.
   *
   * @var string
   */
  public $productCategory;

  /**
   * Output only. The buying method.
   *
   * Accepted values: PLANNABLE_BUYING_METHOD_UNSPECIFIED,
   * PLANNABLE_BUYING_METHOD_AUCTION, PLANNABLE_BUYING_METHOD_RESERVATION
   *
   * @param self::BUYING_METHOD_* $buyingMethod
   */
  public function setBuyingMethod($buyingMethod)
  {
    $this->buyingMethod = $buyingMethod;
  }
  /**
   * @return self::BUYING_METHOD_*
   */
  public function getBuyingMethod()
  {
    return $this->buyingMethod;
  }
  /**
   * Output only. The cost model.
   *
   * Accepted values: PLANNABLE_COST_MODEL_UNSPECIFIED,
   * PLANNABLE_COST_MODEL_CPM, PLANNABLE_COST_MODEL_CPV,
   * PLANNABLE_COST_MODEL_CPC, PLANNABLE_COST_MODEL_CPA
   *
   * @param self::COST_MODEL_* $costModel
   */
  public function setCostModel($costModel)
  {
    $this->costModel = $costModel;
  }
  /**
   * @return self::COST_MODEL_*
   */
  public function getCostModel()
  {
    return $this->costModel;
  }
  /**
   * Output only. The product category.
   *
   * Accepted values: PLANNABLE_PRODUCT_CATEGORY_UNSPECIFIED, YOUTUBE,
   * OPEN_AUCTION
   *
   * @param self::PRODUCT_CATEGORY_* $productCategory
   */
  public function setProductCategory($productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /**
   * @return self::PRODUCT_CATEGORY_*
   */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannableProductCoreAttributes::class, 'Google_Service_DisplayVideo_PlannableProductCoreAttributes');
