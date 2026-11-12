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

namespace Google\Service\Merchant;

class PriceInsightsProductView extends \Google\Model
{
  /**
   * Effectiveness is unknown.
   */
  public const EFFECTIVENESS_EFFECTIVENESS_UNSPECIFIED = 'EFFECTIVENESS_UNSPECIFIED';
  /**
   * Effectiveness is low.
   */
  public const EFFECTIVENESS_LOW = 'LOW';
  /**
   * Effectiveness is medium.
   */
  public const EFFECTIVENESS_MEDIUM = 'MEDIUM';
  /**
   * Effectiveness is high.
   */
  public const EFFECTIVENESS_HIGH = 'HIGH';
  /**
   * Brand of the product.
   *
   * @var string
   */
  public $brand;
  /**
   * Product category (1st level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL1;
  /**
   * Product category (2nd level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL2;
  /**
   * Product category (3rd level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL3;
  /**
   * Product category (4th level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL4;
  /**
   * Product category (5th level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @var string
   */
  public $categoryL5;
  /**
   * The predicted effectiveness of applying the price suggestion, bucketed.
   *
   * @var string
   */
  public $effectiveness;
  /**
   * REST ID of the product, in the form of
   * `channel~languageCode~feedLabel~offerId`. Can be used to join data with the
   * `product_view` table. Required in the `SELECT` clause.
   *
   * @var string
   */
  public $id;
  /**
   * Merchant-provided id of the product.
   *
   * @var string
   */
  public $offerId;
  /**
   * Predicted change in clicks as a fraction after introducing the suggested
   * price compared to current active price. For example, 0.05 is a 5% predicted
   * increase in clicks.
   *
   * @var 
   */
  public $predictedClicksChangeFraction;
  /**
   * Predicted change in conversions as a fraction after introducing the
   * suggested price compared to current active price. For example, 0.05 is a 5%
   * predicted increase in conversions).
   *
   * @var 
   */
  public $predictedConversionsChangeFraction;
  /**
   * Predicted change in impressions as a fraction after introducing the
   * suggested price compared to current active price. For example, 0.05 is a 5%
   * predicted increase in impressions.
   *
   * @var 
   */
  public $predictedImpressionsChangeFraction;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /**
   * Product type (1st level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @var string
   */
  public $productTypeL1;
  /**
   * Product type (2nd level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @var string
   */
  public $productTypeL2;
  /**
   * Product type (3rd level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @var string
   */
  public $productTypeL3;
  /**
   * Product type (4th level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @var string
   */
  public $productTypeL4;
  /**
   * Product type (5th level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @var string
   */
  public $productTypeL5;
  protected $suggestedPriceType = Price::class;
  protected $suggestedPriceDataType = '';
  /**
   * Title of the product.
   *
   * @var string
   */
  public $title;

  /**
   * Brand of the product.
   *
   * @param string $brand
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /**
   * @return string
   */
  public function getBrand()
  {
    return $this->brand;
  }
  /**
   * Product category (1st level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL1
   */
  public function setCategoryL1($categoryL1)
  {
    $this->categoryL1 = $categoryL1;
  }
  /**
   * @return string
   */
  public function getCategoryL1()
  {
    return $this->categoryL1;
  }
  /**
   * Product category (2nd level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL2
   */
  public function setCategoryL2($categoryL2)
  {
    $this->categoryL2 = $categoryL2;
  }
  /**
   * @return string
   */
  public function getCategoryL2()
  {
    return $this->categoryL2;
  }
  /**
   * Product category (3rd level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL3
   */
  public function setCategoryL3($categoryL3)
  {
    $this->categoryL3 = $categoryL3;
  }
  /**
   * @return string
   */
  public function getCategoryL3()
  {
    return $this->categoryL3;
  }
  /**
   * Product category (4th level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL4
   */
  public function setCategoryL4($categoryL4)
  {
    $this->categoryL4 = $categoryL4;
  }
  /**
   * @return string
   */
  public function getCategoryL4()
  {
    return $this->categoryL4;
  }
  /**
   * Product category (5th level) in [Google's product
   * taxonomy](https://support.google.com/merchants/answer/6324436).
   *
   * @param string $categoryL5
   */
  public function setCategoryL5($categoryL5)
  {
    $this->categoryL5 = $categoryL5;
  }
  /**
   * @return string
   */
  public function getCategoryL5()
  {
    return $this->categoryL5;
  }
  /**
   * The predicted effectiveness of applying the price suggestion, bucketed.
   *
   * Accepted values: EFFECTIVENESS_UNSPECIFIED, LOW, MEDIUM, HIGH
   *
   * @param self::EFFECTIVENESS_* $effectiveness
   */
  public function setEffectiveness($effectiveness)
  {
    $this->effectiveness = $effectiveness;
  }
  /**
   * @return self::EFFECTIVENESS_*
   */
  public function getEffectiveness()
  {
    return $this->effectiveness;
  }
  /**
   * REST ID of the product, in the form of
   * `channel~languageCode~feedLabel~offerId`. Can be used to join data with the
   * `product_view` table. Required in the `SELECT` clause.
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
   * Merchant-provided id of the product.
   *
   * @param string $offerId
   */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /**
   * @return string
   */
  public function getOfferId()
  {
    return $this->offerId;
  }
  public function setPredictedClicksChangeFraction($predictedClicksChangeFraction)
  {
    $this->predictedClicksChangeFraction = $predictedClicksChangeFraction;
  }
  public function getPredictedClicksChangeFraction()
  {
    return $this->predictedClicksChangeFraction;
  }
  public function setPredictedConversionsChangeFraction($predictedConversionsChangeFraction)
  {
    $this->predictedConversionsChangeFraction = $predictedConversionsChangeFraction;
  }
  public function getPredictedConversionsChangeFraction()
  {
    return $this->predictedConversionsChangeFraction;
  }
  public function setPredictedImpressionsChangeFraction($predictedImpressionsChangeFraction)
  {
    $this->predictedImpressionsChangeFraction = $predictedImpressionsChangeFraction;
  }
  public function getPredictedImpressionsChangeFraction()
  {
    return $this->predictedImpressionsChangeFraction;
  }
  /**
   * Current price of the product.
   *
   * @param Price $price
   */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /**
   * @return Price
   */
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * Product type (1st level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @param string $productTypeL1
   */
  public function setProductTypeL1($productTypeL1)
  {
    $this->productTypeL1 = $productTypeL1;
  }
  /**
   * @return string
   */
  public function getProductTypeL1()
  {
    return $this->productTypeL1;
  }
  /**
   * Product type (2nd level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @param string $productTypeL2
   */
  public function setProductTypeL2($productTypeL2)
  {
    $this->productTypeL2 = $productTypeL2;
  }
  /**
   * @return string
   */
  public function getProductTypeL2()
  {
    return $this->productTypeL2;
  }
  /**
   * Product type (3rd level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @param string $productTypeL3
   */
  public function setProductTypeL3($productTypeL3)
  {
    $this->productTypeL3 = $productTypeL3;
  }
  /**
   * @return string
   */
  public function getProductTypeL3()
  {
    return $this->productTypeL3;
  }
  /**
   * Product type (4th level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @param string $productTypeL4
   */
  public function setProductTypeL4($productTypeL4)
  {
    $this->productTypeL4 = $productTypeL4;
  }
  /**
   * @return string
   */
  public function getProductTypeL4()
  {
    return $this->productTypeL4;
  }
  /**
   * Product type (5th level) in merchant's own [product
   * taxonomy](https://support.google.com/merchants/answer/6324406).
   *
   * @param string $productTypeL5
   */
  public function setProductTypeL5($productTypeL5)
  {
    $this->productTypeL5 = $productTypeL5;
  }
  /**
   * @return string
   */
  public function getProductTypeL5()
  {
    return $this->productTypeL5;
  }
  /**
   * Latest suggested price for the product.
   *
   * @param Price $suggestedPrice
   */
  public function setSuggestedPrice(Price $suggestedPrice)
  {
    $this->suggestedPrice = $suggestedPrice;
  }
  /**
   * @return Price
   */
  public function getSuggestedPrice()
  {
    return $this->suggestedPrice;
  }
  /**
   * Title of the product.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PriceInsightsProductView::class, 'Google_Service_Merchant_PriceInsightsProductView');
