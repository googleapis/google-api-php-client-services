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

class GoogleAdsSearchads360V23ResourcesAdGroupBidModifier extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BID_MODIFIER_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BID_MODIFIER_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * The bid modifier is specified at the campaign level, on the campaign level
   * criterion.
   */
  public const BID_MODIFIER_SOURCE_CAMPAIGN = 'CAMPAIGN';
  /**
   * The bid modifier is specified (overridden) at the ad group level.
   */
  public const BID_MODIFIER_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * Immutable. The ad group to which this criterion belongs.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. The base ad group from which this draft/trial adgroup bid
   * modifier was created. If ad_group is a base ad group then this field will
   * be equal to ad_group. If the ad group was created in the draft or trial and
   * has no corresponding base ad group, then this field will be null. This
   * field is readonly.
   *
   * @var string
   */
  public $baseAdGroup;
  /**
   * The modifier for the bid when the criterion matches. The modifier must be
   * in the range: 0.1 - 10.0. Use 0 to opt out of a Device type.
   *
   * @var 
   */
  public $bidModifier;
  /**
   * Output only. Bid modifier source.
   *
   * @var string
   */
  public $bidModifierSource;
  /**
   * Output only. The ID of the criterion to bid modify. This field is ignored
   * for mutates.
   *
   * @var string
   */
  public $criterionId;
  protected $deviceType = GoogleAdsSearchads360V23CommonDeviceInfo::class;
  protected $deviceDataType = '';
  protected $hotelAdvanceBookingWindowType = GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo::class;
  protected $hotelAdvanceBookingWindowDataType = '';
  protected $hotelCheckInDateRangeType = GoogleAdsSearchads360V23CommonHotelCheckInDateRangeInfo::class;
  protected $hotelCheckInDateRangeDataType = '';
  protected $hotelCheckInDayType = GoogleAdsSearchads360V23CommonHotelCheckInDayInfo::class;
  protected $hotelCheckInDayDataType = '';
  protected $hotelDateSelectionTypeType = GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo::class;
  protected $hotelDateSelectionTypeDataType = '';
  protected $hotelLengthOfStayType = GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo::class;
  protected $hotelLengthOfStayDataType = '';
  /**
   * Immutable. The resource name of the ad group bid modifier. Ad group bid
   * modifier resource names have the form:
   * `customers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Immutable. The ad group to which this criterion belongs.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Output only. The base ad group from which this draft/trial adgroup bid
   * modifier was created. If ad_group is a base ad group then this field will
   * be equal to ad_group. If the ad group was created in the draft or trial and
   * has no corresponding base ad group, then this field will be null. This
   * field is readonly.
   *
   * @param string $baseAdGroup
   */
  public function setBaseAdGroup($baseAdGroup)
  {
    $this->baseAdGroup = $baseAdGroup;
  }
  /**
   * @return string
   */
  public function getBaseAdGroup()
  {
    return $this->baseAdGroup;
  }
  public function setBidModifier($bidModifier)
  {
    $this->bidModifier = $bidModifier;
  }
  public function getBidModifier()
  {
    return $this->bidModifier;
  }
  /**
   * Output only. Bid modifier source.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN, AD_GROUP
   *
   * @param self::BID_MODIFIER_SOURCE_* $bidModifierSource
   */
  public function setBidModifierSource($bidModifierSource)
  {
    $this->bidModifierSource = $bidModifierSource;
  }
  /**
   * @return self::BID_MODIFIER_SOURCE_*
   */
  public function getBidModifierSource()
  {
    return $this->bidModifierSource;
  }
  /**
   * Output only. The ID of the criterion to bid modify. This field is ignored
   * for mutates.
   *
   * @param string $criterionId
   */
  public function setCriterionId($criterionId)
  {
    $this->criterionId = $criterionId;
  }
  /**
   * @return string
   */
  public function getCriterionId()
  {
    return $this->criterionId;
  }
  /**
   * Immutable. A device criterion.
   *
   * @param GoogleAdsSearchads360V23CommonDeviceInfo $device
   */
  public function setDevice(GoogleAdsSearchads360V23CommonDeviceInfo $device)
  {
    $this->device = $device;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDeviceInfo
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * Immutable. Criterion for number of days prior to the stay the booking is
   * being made.
   *
   * @param GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo $hotelAdvanceBookingWindow
   */
  public function setHotelAdvanceBookingWindow(GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo $hotelAdvanceBookingWindow)
  {
    $this->hotelAdvanceBookingWindow = $hotelAdvanceBookingWindow;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo
   */
  public function getHotelAdvanceBookingWindow()
  {
    return $this->hotelAdvanceBookingWindow;
  }
  /**
   * Immutable. Criterion for a hotel check-in date range.
   *
   * @param GoogleAdsSearchads360V23CommonHotelCheckInDateRangeInfo $hotelCheckInDateRange
   */
  public function setHotelCheckInDateRange(GoogleAdsSearchads360V23CommonHotelCheckInDateRangeInfo $hotelCheckInDateRange)
  {
    $this->hotelCheckInDateRange = $hotelCheckInDateRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelCheckInDateRangeInfo
   */
  public function getHotelCheckInDateRange()
  {
    return $this->hotelCheckInDateRange;
  }
  /**
   * Immutable. Criterion for day of the week the booking is for.
   *
   * @param GoogleAdsSearchads360V23CommonHotelCheckInDayInfo $hotelCheckInDay
   */
  public function setHotelCheckInDay(GoogleAdsSearchads360V23CommonHotelCheckInDayInfo $hotelCheckInDay)
  {
    $this->hotelCheckInDay = $hotelCheckInDay;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelCheckInDayInfo
   */
  public function getHotelCheckInDay()
  {
    return $this->hotelCheckInDay;
  }
  /**
   * Immutable. Criterion for hotel date selection (default dates versus user
   * selected).
   *
   * @param GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo $hotelDateSelectionType
   */
  public function setHotelDateSelectionType(GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo $hotelDateSelectionType)
  {
    $this->hotelDateSelectionType = $hotelDateSelectionType;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelDateSelectionTypeInfo
   */
  public function getHotelDateSelectionType()
  {
    return $this->hotelDateSelectionType;
  }
  /**
   * Immutable. Criterion for length of hotel stay in nights.
   *
   * @param GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo $hotelLengthOfStay
   */
  public function setHotelLengthOfStay(GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo $hotelLengthOfStay)
  {
    $this->hotelLengthOfStay = $hotelLengthOfStay;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo
   */
  public function getHotelLengthOfStay()
  {
    return $this->hotelLengthOfStay;
  }
  /**
   * Immutable. The resource name of the ad group bid modifier. Ad group bid
   * modifier resource names have the form:
   * `customers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupBidModifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupBidModifier');
