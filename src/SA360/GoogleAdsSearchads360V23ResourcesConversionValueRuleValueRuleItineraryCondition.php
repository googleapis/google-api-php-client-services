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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition extends \Google\Model
{
  protected $advanceBookingWindowType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow::class;
  protected $advanceBookingWindowDataType = '';
  protected $travelLengthType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelLength::class;
  protected $travelLengthDataType = '';
  protected $travelStartDayType = GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay::class;
  protected $travelStartDayDataType = '';

  /**
   * Range for the number of days between the date of the booking and the start
   * of the itinerary.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow $advanceBookingWindow
   */
  public function setAdvanceBookingWindow(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow $advanceBookingWindow)
  {
    $this->advanceBookingWindow = $advanceBookingWindow;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow
   */
  public function getAdvanceBookingWindow()
  {
    return $this->advanceBookingWindow;
  }
  /**
   * Range for the itinerary length in number of nights.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelLength $travelLength
   */
  public function setTravelLength(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelLength $travelLength)
  {
    $this->travelLength = $travelLength;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelLength
   */
  public function getTravelLength()
  {
    return $this->travelLength;
  }
  /**
   * The days of the week on which this itinerary's travel can start.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay $travelStartDay
   */
  public function setTravelStartDay(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay $travelStartDay)
  {
    $this->travelStartDay = $travelStartDay;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay
   */
  public function getTravelStartDay()
  {
    return $this->travelStartDay;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryCondition');
