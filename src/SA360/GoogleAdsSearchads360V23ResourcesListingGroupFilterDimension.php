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

class GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension extends \Google\Model
{
  protected $productBrandType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductBrand::class;
  protected $productBrandDataType = '';
  protected $productCategoryType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCategory::class;
  protected $productCategoryDataType = '';
  protected $productChannelType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductChannel::class;
  protected $productChannelDataType = '';
  protected $productConditionType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCondition::class;
  protected $productConditionDataType = '';
  protected $productCustomAttributeType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCustomAttribute::class;
  protected $productCustomAttributeDataType = '';
  protected $productItemIdType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductItemId::class;
  protected $productItemIdDataType = '';
  protected $productTypeType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductType::class;
  protected $productTypeDataType = '';
  protected $webpageType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage::class;
  protected $webpageDataType = '';

  /**
   * Brand of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductBrand $productBrand
   */
  public function setProductBrand(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductBrand $productBrand)
  {
    $this->productBrand = $productBrand;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductBrand
   */
  public function getProductBrand()
  {
    return $this->productBrand;
  }
  /**
   * Category of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCategory $productCategory
   */
  public function setProductCategory(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCategory $productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCategory
   */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /**
   * Locality of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductChannel $productChannel
   */
  public function setProductChannel(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductChannel $productChannel)
  {
    $this->productChannel = $productChannel;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductChannel
   */
  public function getProductChannel()
  {
    return $this->productChannel;
  }
  /**
   * Condition of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCondition $productCondition
   */
  public function setProductCondition(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCondition $productCondition)
  {
    $this->productCondition = $productCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCondition
   */
  public function getProductCondition()
  {
    return $this->productCondition;
  }
  /**
   * Custom attribute of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCustomAttribute $productCustomAttribute
   */
  public function setProductCustomAttribute(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCustomAttribute $productCustomAttribute)
  {
    $this->productCustomAttribute = $productCustomAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductCustomAttribute
   */
  public function getProductCustomAttribute()
  {
    return $this->productCustomAttribute;
  }
  /**
   * Item id of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductItemId $productItemId
   */
  public function setProductItemId(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductItemId $productItemId)
  {
    $this->productItemId = $productItemId;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductItemId
   */
  public function getProductItemId()
  {
    return $this->productItemId;
  }
  /**
   * Type of a product offer.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductType $productType
   */
  public function setProductType(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductType $productType)
  {
    $this->productType = $productType;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionProductType
   */
  public function getProductType()
  {
    return $this->productType;
  }
  /**
   * Filters for URLs in a page feed and URLs from the advertiser web domain.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage $webpage
   */
  public function setWebpage(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage $webpage)
  {
    $this->webpage = $webpage;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage
   */
  public function getWebpage()
  {
    return $this->webpage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesListingGroupFilterDimension');
