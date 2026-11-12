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

class ProductView extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const AGGREGATED_REPORTING_CONTEXT_STATUS_AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED = 'AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED';
  /**
   * Product is not eligible or is disapproved for all reporting contexts and
   * countries.
   */
  public const AGGREGATED_REPORTING_CONTEXT_STATUS_NOT_ELIGIBLE_OR_DISAPPROVED = 'NOT_ELIGIBLE_OR_DISAPPROVED';
  /**
   * Product's status is pending in all reporting contexts and countries.
   */
  public const AGGREGATED_REPORTING_CONTEXT_STATUS_PENDING = 'PENDING';
  /**
   * Product is eligible for some (but not all) reporting contexts and
   * countries.
   */
  public const AGGREGATED_REPORTING_CONTEXT_STATUS_ELIGIBLE_LIMITED = 'ELIGIBLE_LIMITED';
  /**
   * Product is eligible for all reporting contexts and countries.
   */
  public const AGGREGATED_REPORTING_CONTEXT_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * Not specified.
   */
  public const CHANNEL_CHANNEL_ENUM_UNSPECIFIED = 'CHANNEL_ENUM_UNSPECIFIED';
  /**
   * Online product.
   */
  public const CHANNEL_ONLINE = 'ONLINE';
  /**
   * Local product.
   */
  public const CHANNEL_LOCAL = 'LOCAL';
  /**
   * Unknown predicted clicks impact.
   */
  public const CLICK_POTENTIAL_CLICK_POTENTIAL_UNSPECIFIED = 'CLICK_POTENTIAL_UNSPECIFIED';
  /**
   * Potential to receive a low number of clicks compared to the highest
   * performing products of the merchant.
   */
  public const CLICK_POTENTIAL_LOW = 'LOW';
  /**
   * Potential to receive a moderate number of clicks compared to the highest
   * performing products of the merchant.
   */
  public const CLICK_POTENTIAL_MEDIUM = 'MEDIUM';
  /**
   * Potential to receive a similar number of clicks as the highest performing
   * products of the merchant.
   */
  public const CLICK_POTENTIAL_HIGH = 'HIGH';
  /**
   * Not specified.
   */
  public const REPORTING_CONTEXT_REPORTING_CONTEXT_ENUM_UNSPECIFIED = 'REPORTING_CONTEXT_ENUM_UNSPECIFIED';
  /**
   * [Shopping ads](https://support.google.com/merchants/answer/6149970).
   */
  public const REPORTING_CONTEXT_SHOPPING_ADS = 'SHOPPING_ADS';
  /**
   * Deprecated: Use `DEMAND_GEN_ADS` instead. [Discovery and Demand Gen
   * ads](https://support.google.com/merchants/answer/13389785).
   *
   * @deprecated
   */
  public const REPORTING_CONTEXT_DISCOVERY_ADS = 'DISCOVERY_ADS';
  /**
   * [Demand Gen ads](https://support.google.com/merchants/answer/13389785).
   */
  public const REPORTING_CONTEXT_DEMAND_GEN_ADS = 'DEMAND_GEN_ADS';
  /**
   * [Demand Gen ads on Discover
   * surface](https://support.google.com/merchants/answer/13389785).
   */
  public const REPORTING_CONTEXT_DEMAND_GEN_ADS_DISCOVER_SURFACE = 'DEMAND_GEN_ADS_DISCOVER_SURFACE';
  /**
   * [Video ads](https://support.google.com/google-ads/answer/6340491).
   */
  public const REPORTING_CONTEXT_VIDEO_ADS = 'VIDEO_ADS';
  /**
   * [Display ads](https://support.google.com/merchants/answer/6069387).
   */
  public const REPORTING_CONTEXT_DISPLAY_ADS = 'DISPLAY_ADS';
  /**
   * [Local inventory ads](https://support.google.com/merchants/answer/3271956).
   */
  public const REPORTING_CONTEXT_LOCAL_INVENTORY_ADS = 'LOCAL_INVENTORY_ADS';
  /**
   * [Vehicle inventory
   * ads](https://support.google.com/merchants/answer/11544533).
   */
  public const REPORTING_CONTEXT_VEHICLE_INVENTORY_ADS = 'VEHICLE_INVENTORY_ADS';
  /**
   * [Free product
   * listings](https://support.google.com/merchants/answer/9199328).
   */
  public const REPORTING_CONTEXT_FREE_LISTINGS = 'FREE_LISTINGS';
  /**
   * [Free product listings on UCP
   * checkout](https://developers.google.com/merchant/ucp).
   */
  public const REPORTING_CONTEXT_FREE_LISTINGS_UCP_CHECKOUT = 'FREE_LISTINGS_UCP_CHECKOUT';
  /**
   * [Free local product
   * listings](https://support.google.com/merchants/answer/9825611).
   */
  public const REPORTING_CONTEXT_FREE_LOCAL_LISTINGS = 'FREE_LOCAL_LISTINGS';
  /**
   * [Free local vehicle
   * listings](https://support.google.com/merchants/answer/11544533).
   */
  public const REPORTING_CONTEXT_FREE_LOCAL_VEHICLE_LISTINGS = 'FREE_LOCAL_VEHICLE_LISTINGS';
  /**
   * [Youtube Affiliate](https://support.google.com/youtube/answer/13376398).
   */
  public const REPORTING_CONTEXT_YOUTUBE_AFFILIATE = 'YOUTUBE_AFFILIATE';
  /**
   * [YouTube Shopping](https://support.google.com/merchants/answer/13478370).
   */
  public const REPORTING_CONTEXT_YOUTUBE_SHOPPING = 'YOUTUBE_SHOPPING';
  /**
   * [Cloud retail](https://cloud.google.com/solutions/retail).
   */
  public const REPORTING_CONTEXT_CLOUD_RETAIL = 'CLOUD_RETAIL';
  /**
   * [Local cloud retail](https://cloud.google.com/solutions/retail).
   */
  public const REPORTING_CONTEXT_LOCAL_CLOUD_RETAIL = 'LOCAL_CLOUD_RETAIL';
  /**
   * [Product Reviews](https://support.google.com/merchants/answer/14620732).
   */
  public const REPORTING_CONTEXT_PRODUCT_REVIEWS = 'PRODUCT_REVIEWS';
  /**
   * [Merchant Reviews](https://developers.google.com/merchant-review-feeds).
   */
  public const REPORTING_CONTEXT_MERCHANT_REVIEWS = 'MERCHANT_REVIEWS';
  /**
   * YouTube Checkout .
   */
  public const REPORTING_CONTEXT_YOUTUBE_CHECKOUT = 'YOUTUBE_CHECKOUT';
  /**
   * Real Estate Rental Ads. .
   */
  public const REPORTING_CONTEXT_RENTAL_ADS = 'RENTAL_ADS';
  protected $collection_key = 'statusPerReportingContext';
  /**
   * Aggregated status across all reporting contexts. Reporting contexts
   * included in the computation of the aggregated status can be restricted
   * using a filter on the `reporting_context` field.
   *
   * @var string
   */
  public $aggregatedReportingContextStatus;
  /**
   * [Availability](https://support.google.com/merchants/answer/6324448) of the
   * product.
   *
   * @var string
   */
  public $availability;
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
   * Channel of the product. Can be `ONLINE` or `LOCAL`.
   *
   * @var string
   */
  public $channel;
  /**
   * Estimated performance potential compared to highest performing products of
   * the merchant.
   *
   * @var string
   */
  public $clickPotential;
  /**
   * Normalized click potential of the product. Values range from 1 to 1000,
   * where 1 is the highest click potential and 1000 is the theoretical lowest.
   *
   * @var string
   */
  public $clickPotentialRank;
  /**
   * [Condition](https://support.google.com/merchants/answer/6324469) of the
   * product.
   *
   * @var string
   */
  public $condition;
  /**
   * The time the merchant created the product in timestamp seconds.
   *
   * @var string
   */
  public $creationTime;
  protected $expirationDateType = Date::class;
  protected $expirationDateDataType = '';
  /**
   * Feed label of the product.
   *
   * @var string
   */
  public $feedLabel;
  /**
   * List of Global Trade Item Numbers (GTINs) of the product.
   *
   * @var string[]
   */
  public $gtin;
  /**
   * REST ID of the product, in the form of
   * `channel~languageCode~feedLabel~offerId`. Merchant API methods that operate
   * on products take this as their `name` parameter. Required in the `SELECT`
   * clause.
   *
   * @var string
   */
  public $id;
  /**
   * Item group id provided by the merchant for grouping variants together.
   *
   * @var string
   */
  public $itemGroupId;
  protected $itemIssuesType = ItemIssue::class;
  protected $itemIssuesDataType = 'array';
  /**
   * Language code of the product in BCP 47 format.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Merchant-provided id of the product.
   *
   * @var string
   */
  public $offerId;
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
  /**
   * Reporting context to restrict the query to. Restricts the reporting
   * contexts returned in `status_per_reporting_context` and `item_issues`, and
   * used to compute `aggregated_reporting_context_status`. **This field can
   * only be used in the `WHERE` clause and cannot be selected in the `SELECT`
   * clause.**
   *
   * @var string
   */
  public $reportingContext;
  /**
   * Normalized [shipping
   * label](https://support.google.com/merchants/answer/6324504) specified in
   * the data source.
   *
   * @var string
   */
  public $shippingLabel;
  protected $statusPerReportingContextType = StatusPerReportingContext::class;
  protected $statusPerReportingContextDataType = 'array';
  /**
   * Link to the processed image of the product, hosted on the Google
   * infrastructure.
   *
   * @var string
   */
  public $thumbnailLink;
  /**
   * Title of the product.
   *
   * @var string
   */
  public $title;

  /**
   * Aggregated status across all reporting contexts. Reporting contexts
   * included in the computation of the aggregated status can be restricted
   * using a filter on the `reporting_context` field.
   *
   * Accepted values: AGGREGATED_REPORTING_CONTEXT_STATUS_UNSPECIFIED,
   * NOT_ELIGIBLE_OR_DISAPPROVED, PENDING, ELIGIBLE_LIMITED, ELIGIBLE
   *
   * @param self::AGGREGATED_REPORTING_CONTEXT_STATUS_* $aggregatedReportingContextStatus
   */
  public function setAggregatedReportingContextStatus($aggregatedReportingContextStatus)
  {
    $this->aggregatedReportingContextStatus = $aggregatedReportingContextStatus;
  }
  /**
   * @return self::AGGREGATED_REPORTING_CONTEXT_STATUS_*
   */
  public function getAggregatedReportingContextStatus()
  {
    return $this->aggregatedReportingContextStatus;
  }
  /**
   * [Availability](https://support.google.com/merchants/answer/6324448) of the
   * product.
   *
   * @param string $availability
   */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /**
   * @return string
   */
  public function getAvailability()
  {
    return $this->availability;
  }
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
   * Channel of the product. Can be `ONLINE` or `LOCAL`.
   *
   * Accepted values: CHANNEL_ENUM_UNSPECIFIED, ONLINE, LOCAL
   *
   * @param self::CHANNEL_* $channel
   */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /**
   * @return self::CHANNEL_*
   */
  public function getChannel()
  {
    return $this->channel;
  }
  /**
   * Estimated performance potential compared to highest performing products of
   * the merchant.
   *
   * Accepted values: CLICK_POTENTIAL_UNSPECIFIED, LOW, MEDIUM, HIGH
   *
   * @param self::CLICK_POTENTIAL_* $clickPotential
   */
  public function setClickPotential($clickPotential)
  {
    $this->clickPotential = $clickPotential;
  }
  /**
   * @return self::CLICK_POTENTIAL_*
   */
  public function getClickPotential()
  {
    return $this->clickPotential;
  }
  /**
   * Normalized click potential of the product. Values range from 1 to 1000,
   * where 1 is the highest click potential and 1000 is the theoretical lowest.
   *
   * @param string $clickPotentialRank
   */
  public function setClickPotentialRank($clickPotentialRank)
  {
    $this->clickPotentialRank = $clickPotentialRank;
  }
  /**
   * @return string
   */
  public function getClickPotentialRank()
  {
    return $this->clickPotentialRank;
  }
  /**
   * [Condition](https://support.google.com/merchants/answer/6324469) of the
   * product.
   *
   * @param string $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return string
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * The time the merchant created the product in timestamp seconds.
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Expiration date for the product, specified on insertion.
   *
   * @param Date $expirationDate
   */
  public function setExpirationDate(Date $expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }
  /**
   * @return Date
   */
  public function getExpirationDate()
  {
    return $this->expirationDate;
  }
  /**
   * Feed label of the product.
   *
   * @param string $feedLabel
   */
  public function setFeedLabel($feedLabel)
  {
    $this->feedLabel = $feedLabel;
  }
  /**
   * @return string
   */
  public function getFeedLabel()
  {
    return $this->feedLabel;
  }
  /**
   * List of Global Trade Item Numbers (GTINs) of the product.
   *
   * @param string[] $gtin
   */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /**
   * @return string[]
   */
  public function getGtin()
  {
    return $this->gtin;
  }
  /**
   * REST ID of the product, in the form of
   * `channel~languageCode~feedLabel~offerId`. Merchant API methods that operate
   * on products take this as their `name` parameter. Required in the `SELECT`
   * clause.
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
   * Item group id provided by the merchant for grouping variants together.
   *
   * @param string $itemGroupId
   */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /**
   * @return string
   */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /**
   * List of item issues for the product. **This field cannot be used for
   * sorting the results.** **Only selected attributes of this field (for
   * example, `item_issues.severity.aggregated_severity`) can be used for
   * filtering the results.**
   *
   * @param ItemIssue[] $itemIssues
   */
  public function setItemIssues($itemIssues)
  {
    $this->itemIssues = $itemIssues;
  }
  /**
   * @return ItemIssue[]
   */
  public function getItemIssues()
  {
    return $this->itemIssues;
  }
  /**
   * Language code of the product in BCP 47 format.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
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
  /**
   * Product price. Absent if the information about the price of the product is
   * not available.
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
   * Reporting context to restrict the query to. Restricts the reporting
   * contexts returned in `status_per_reporting_context` and `item_issues`, and
   * used to compute `aggregated_reporting_context_status`. **This field can
   * only be used in the `WHERE` clause and cannot be selected in the `SELECT`
   * clause.**
   *
   * Accepted values: REPORTING_CONTEXT_ENUM_UNSPECIFIED, SHOPPING_ADS,
   * DISCOVERY_ADS, DEMAND_GEN_ADS, DEMAND_GEN_ADS_DISCOVER_SURFACE, VIDEO_ADS,
   * DISPLAY_ADS, LOCAL_INVENTORY_ADS, VEHICLE_INVENTORY_ADS, FREE_LISTINGS,
   * FREE_LISTINGS_UCP_CHECKOUT, FREE_LOCAL_LISTINGS,
   * FREE_LOCAL_VEHICLE_LISTINGS, YOUTUBE_AFFILIATE, YOUTUBE_SHOPPING,
   * CLOUD_RETAIL, LOCAL_CLOUD_RETAIL, PRODUCT_REVIEWS, MERCHANT_REVIEWS,
   * YOUTUBE_CHECKOUT, RENTAL_ADS
   *
   * @param self::REPORTING_CONTEXT_* $reportingContext
   */
  public function setReportingContext($reportingContext)
  {
    $this->reportingContext = $reportingContext;
  }
  /**
   * @return self::REPORTING_CONTEXT_*
   */
  public function getReportingContext()
  {
    return $this->reportingContext;
  }
  /**
   * Normalized [shipping
   * label](https://support.google.com/merchants/answer/6324504) specified in
   * the data source.
   *
   * @param string $shippingLabel
   */
  public function setShippingLabel($shippingLabel)
  {
    $this->shippingLabel = $shippingLabel;
  }
  /**
   * @return string
   */
  public function getShippingLabel()
  {
    return $this->shippingLabel;
  }
  /**
   * Detailed product status per reporting context. Reporting contexts included
   * in this list can be restricted using a filter on the `reporting_context`
   * field. Equivalent to `ProductStatus.destination_statuses` in Products API.
   * **This field cannot be used for sorting or filtering the results.**
   *
   * @param StatusPerReportingContext[] $statusPerReportingContext
   */
  public function setStatusPerReportingContext($statusPerReportingContext)
  {
    $this->statusPerReportingContext = $statusPerReportingContext;
  }
  /**
   * @return StatusPerReportingContext[]
   */
  public function getStatusPerReportingContext()
  {
    return $this->statusPerReportingContext;
  }
  /**
   * Link to the processed image of the product, hosted on the Google
   * infrastructure.
   *
   * @param string $thumbnailLink
   */
  public function setThumbnailLink($thumbnailLink)
  {
    $this->thumbnailLink = $thumbnailLink;
  }
  /**
   * @return string
   */
  public function getThumbnailLink()
  {
    return $this->thumbnailLink;
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
class_alias(ProductView::class, 'Google_Service_Merchant_ProductView');
