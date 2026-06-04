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

class GoogleAdsSearchads360V23CommonListingDimensionInfo extends \Google\Model
{
  protected $activityCityType = GoogleAdsSearchads360V23CommonActivityCityInfo::class;
  protected $activityCityDataType = '';
  protected $activityCountryType = GoogleAdsSearchads360V23CommonActivityCountryInfo::class;
  protected $activityCountryDataType = '';
  protected $activityIdType = GoogleAdsSearchads360V23CommonActivityIdInfo::class;
  protected $activityIdDataType = '';
  protected $activityRatingType = GoogleAdsSearchads360V23CommonActivityRatingInfo::class;
  protected $activityRatingDataType = '';
  protected $activityStateType = GoogleAdsSearchads360V23CommonActivityStateInfo::class;
  protected $activityStateDataType = '';
  protected $hotelCityType = GoogleAdsSearchads360V23CommonHotelCityInfo::class;
  protected $hotelCityDataType = '';
  protected $hotelClassType = GoogleAdsSearchads360V23CommonHotelClassInfo::class;
  protected $hotelClassDataType = '';
  protected $hotelCountryRegionType = GoogleAdsSearchads360V23CommonHotelCountryRegionInfo::class;
  protected $hotelCountryRegionDataType = '';
  protected $hotelIdType = GoogleAdsSearchads360V23CommonHotelIdInfo::class;
  protected $hotelIdDataType = '';
  protected $hotelStateType = GoogleAdsSearchads360V23CommonHotelStateInfo::class;
  protected $hotelStateDataType = '';
  protected $productBrandType = GoogleAdsSearchads360V23CommonProductBrandInfo::class;
  protected $productBrandDataType = '';
  protected $productCategoryType = GoogleAdsSearchads360V23CommonProductCategoryInfo::class;
  protected $productCategoryDataType = '';
  protected $productChannelType = GoogleAdsSearchads360V23CommonProductChannelInfo::class;
  protected $productChannelDataType = '';
  protected $productChannelExclusivityType = GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo::class;
  protected $productChannelExclusivityDataType = '';
  protected $productConditionType = GoogleAdsSearchads360V23CommonProductConditionInfo::class;
  protected $productConditionDataType = '';
  protected $productCustomAttributeType = GoogleAdsSearchads360V23CommonProductCustomAttributeInfo::class;
  protected $productCustomAttributeDataType = '';
  protected $productGroupingType = GoogleAdsSearchads360V23CommonProductGroupingInfo::class;
  protected $productGroupingDataType = '';
  protected $productItemIdType = GoogleAdsSearchads360V23CommonProductItemIdInfo::class;
  protected $productItemIdDataType = '';
  protected $productLabelsType = GoogleAdsSearchads360V23CommonProductLabelsInfo::class;
  protected $productLabelsDataType = '';
  protected $productLegacyConditionType = GoogleAdsSearchads360V23CommonProductLegacyConditionInfo::class;
  protected $productLegacyConditionDataType = '';
  protected $productTypeType = GoogleAdsSearchads360V23CommonProductTypeInfo::class;
  protected $productTypeDataType = '';
  protected $productTypeFullType = GoogleAdsSearchads360V23CommonProductTypeFullInfo::class;
  protected $productTypeFullDataType = '';
  protected $unknownListingDimensionType = GoogleAdsSearchads360V23CommonUnknownListingDimensionInfo::class;
  protected $unknownListingDimensionDataType = '';

  /**
   * The city where the travel activity is available.
   *
   * @param GoogleAdsSearchads360V23CommonActivityCityInfo $activityCity
   */
  public function setActivityCity(GoogleAdsSearchads360V23CommonActivityCityInfo $activityCity)
  {
    $this->activityCity = $activityCity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonActivityCityInfo
   */
  public function getActivityCity()
  {
    return $this->activityCity;
  }
  /**
   * The country where the travel activity is available.
   *
   * @param GoogleAdsSearchads360V23CommonActivityCountryInfo $activityCountry
   */
  public function setActivityCountry(GoogleAdsSearchads360V23CommonActivityCountryInfo $activityCountry)
  {
    $this->activityCountry = $activityCountry;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonActivityCountryInfo
   */
  public function getActivityCountry()
  {
    return $this->activityCountry;
  }
  /**
   * Advertiser-specific activity ID.
   *
   * @param GoogleAdsSearchads360V23CommonActivityIdInfo $activityId
   */
  public function setActivityId(GoogleAdsSearchads360V23CommonActivityIdInfo $activityId)
  {
    $this->activityId = $activityId;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonActivityIdInfo
   */
  public function getActivityId()
  {
    return $this->activityId;
  }
  /**
   * Rating of the activity as a number 1 to 5, where 5 is the best.
   *
   * @param GoogleAdsSearchads360V23CommonActivityRatingInfo $activityRating
   */
  public function setActivityRating(GoogleAdsSearchads360V23CommonActivityRatingInfo $activityRating)
  {
    $this->activityRating = $activityRating;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonActivityRatingInfo
   */
  public function getActivityRating()
  {
    return $this->activityRating;
  }
  /**
   * The state where the travel activity is available.
   *
   * @param GoogleAdsSearchads360V23CommonActivityStateInfo $activityState
   */
  public function setActivityState(GoogleAdsSearchads360V23CommonActivityStateInfo $activityState)
  {
    $this->activityState = $activityState;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonActivityStateInfo
   */
  public function getActivityState()
  {
    return $this->activityState;
  }
  /**
   * City the hotel is located in.
   *
   * @param GoogleAdsSearchads360V23CommonHotelCityInfo $hotelCity
   */
  public function setHotelCity(GoogleAdsSearchads360V23CommonHotelCityInfo $hotelCity)
  {
    $this->hotelCity = $hotelCity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelCityInfo
   */
  public function getHotelCity()
  {
    return $this->hotelCity;
  }
  /**
   * Class of the hotel as a number of stars 1 to 5.
   *
   * @param GoogleAdsSearchads360V23CommonHotelClassInfo $hotelClass
   */
  public function setHotelClass(GoogleAdsSearchads360V23CommonHotelClassInfo $hotelClass)
  {
    $this->hotelClass = $hotelClass;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelClassInfo
   */
  public function getHotelClass()
  {
    return $this->hotelClass;
  }
  /**
   * Country or Region the hotel is located in.
   *
   * @param GoogleAdsSearchads360V23CommonHotelCountryRegionInfo $hotelCountryRegion
   */
  public function setHotelCountryRegion(GoogleAdsSearchads360V23CommonHotelCountryRegionInfo $hotelCountryRegion)
  {
    $this->hotelCountryRegion = $hotelCountryRegion;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelCountryRegionInfo
   */
  public function getHotelCountryRegion()
  {
    return $this->hotelCountryRegion;
  }
  /**
   * Advertiser-specific hotel ID.
   *
   * @param GoogleAdsSearchads360V23CommonHotelIdInfo $hotelId
   */
  public function setHotelId(GoogleAdsSearchads360V23CommonHotelIdInfo $hotelId)
  {
    $this->hotelId = $hotelId;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelIdInfo
   */
  public function getHotelId()
  {
    return $this->hotelId;
  }
  /**
   * State the hotel is located in.
   *
   * @param GoogleAdsSearchads360V23CommonHotelStateInfo $hotelState
   */
  public function setHotelState(GoogleAdsSearchads360V23CommonHotelStateInfo $hotelState)
  {
    $this->hotelState = $hotelState;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelStateInfo
   */
  public function getHotelState()
  {
    return $this->hotelState;
  }
  /**
   * Brand of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductBrandInfo $productBrand
   */
  public function setProductBrand(GoogleAdsSearchads360V23CommonProductBrandInfo $productBrand)
  {
    $this->productBrand = $productBrand;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductBrandInfo
   */
  public function getProductBrand()
  {
    return $this->productBrand;
  }
  /**
   * Category of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductCategoryInfo $productCategory
   */
  public function setProductCategory(GoogleAdsSearchads360V23CommonProductCategoryInfo $productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductCategoryInfo
   */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /**
   * Locality of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductChannelInfo $productChannel
   */
  public function setProductChannel(GoogleAdsSearchads360V23CommonProductChannelInfo $productChannel)
  {
    $this->productChannel = $productChannel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductChannelInfo
   */
  public function getProductChannel()
  {
    return $this->productChannel;
  }
  /**
   * Availability of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo $productChannelExclusivity
   */
  public function setProductChannelExclusivity(GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo $productChannelExclusivity)
  {
    $this->productChannelExclusivity = $productChannelExclusivity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductChannelExclusivityInfo
   */
  public function getProductChannelExclusivity()
  {
    return $this->productChannelExclusivity;
  }
  /**
   * Condition of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductConditionInfo $productCondition
   */
  public function setProductCondition(GoogleAdsSearchads360V23CommonProductConditionInfo $productCondition)
  {
    $this->productCondition = $productCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductConditionInfo
   */
  public function getProductCondition()
  {
    return $this->productCondition;
  }
  /**
   * Custom attribute of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductCustomAttributeInfo $productCustomAttribute
   */
  public function setProductCustomAttribute(GoogleAdsSearchads360V23CommonProductCustomAttributeInfo $productCustomAttribute)
  {
    $this->productCustomAttribute = $productCustomAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductCustomAttributeInfo
   */
  public function getProductCustomAttribute()
  {
    return $this->productCustomAttribute;
  }
  /**
   * Grouping of a product offer. This listing dimension is deprecated and it is
   * supported only in Display campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonProductGroupingInfo $productGrouping
   */
  public function setProductGrouping(GoogleAdsSearchads360V23CommonProductGroupingInfo $productGrouping)
  {
    $this->productGrouping = $productGrouping;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductGroupingInfo
   */
  public function getProductGrouping()
  {
    return $this->productGrouping;
  }
  /**
   * Item id of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductItemIdInfo $productItemId
   */
  public function setProductItemId(GoogleAdsSearchads360V23CommonProductItemIdInfo $productItemId)
  {
    $this->productItemId = $productItemId;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductItemIdInfo
   */
  public function getProductItemId()
  {
    return $this->productItemId;
  }
  /**
   * Labels of a product offer. This listing dimension is deprecated and it is
   * supported only in Display campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonProductLabelsInfo $productLabels
   */
  public function setProductLabels(GoogleAdsSearchads360V23CommonProductLabelsInfo $productLabels)
  {
    $this->productLabels = $productLabels;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductLabelsInfo
   */
  public function getProductLabels()
  {
    return $this->productLabels;
  }
  /**
   * Legacy condition of a product offer. This listing dimension is deprecated
   * and it is supported only in Display campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonProductLegacyConditionInfo $productLegacyCondition
   */
  public function setProductLegacyCondition(GoogleAdsSearchads360V23CommonProductLegacyConditionInfo $productLegacyCondition)
  {
    $this->productLegacyCondition = $productLegacyCondition;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductLegacyConditionInfo
   */
  public function getProductLegacyCondition()
  {
    return $this->productLegacyCondition;
  }
  /**
   * Type of a product offer.
   *
   * @param GoogleAdsSearchads360V23CommonProductTypeInfo $productType
   */
  public function setProductType(GoogleAdsSearchads360V23CommonProductTypeInfo $productType)
  {
    $this->productType = $productType;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductTypeInfo
   */
  public function getProductType()
  {
    return $this->productType;
  }
  /**
   * Full type of a product offer. This listing dimension is deprecated and it
   * is supported only in Display campaigns.
   *
   * @param GoogleAdsSearchads360V23CommonProductTypeFullInfo $productTypeFull
   */
  public function setProductTypeFull(GoogleAdsSearchads360V23CommonProductTypeFullInfo $productTypeFull)
  {
    $this->productTypeFull = $productTypeFull;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProductTypeFullInfo
   */
  public function getProductTypeFull()
  {
    return $this->productTypeFull;
  }
  /**
   * Unknown dimension. Set when no other listing dimension is set.
   *
   * @param GoogleAdsSearchads360V23CommonUnknownListingDimensionInfo $unknownListingDimension
   */
  public function setUnknownListingDimension(GoogleAdsSearchads360V23CommonUnknownListingDimensionInfo $unknownListingDimension)
  {
    $this->unknownListingDimension = $unknownListingDimension;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUnknownListingDimensionInfo
   */
  public function getUnknownListingDimension()
  {
    return $this->unknownListingDimension;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonListingDimensionInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonListingDimensionInfo');
