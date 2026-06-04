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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEvent extends \Google\Model
{
  /**
   * Output only. The reported currency for the event_revenue. ISO 4217 three-
   * letter currency code, for example, "USD"
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Output only. For specific event counter values.
   *
   * @var string
   */
  public $eventCounter;
  protected $eventOccurrenceRangeType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange::class;
  protected $eventOccurrenceRangeDataType = '';
  protected $eventRevenueRangeType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange::class;
  protected $eventRevenueRangeDataType = '';
  /**
   * Output only. The specific event revenue value.
   *
   * @var 
   */
  public $eventRevenueValue;
  /**
   * Output only. Google event name represented by this conversion value.
   *
   * @var string
   */
  public $mappedEventName;

  /**
   * Output only. The reported currency for the event_revenue. ISO 4217 three-
   * letter currency code, for example, "USD"
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Output only. For specific event counter values.
   *
   * @param string $eventCounter
   */
  public function setEventCounter($eventCounter)
  {
    $this->eventCounter = $eventCounter;
  }
  /**
   * @return string
   */
  public function getEventCounter()
  {
    return $this->eventCounter;
  }
  /**
   * Output only. The event counter range.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange $eventOccurrenceRange
   */
  public function setEventOccurrenceRange(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange $eventOccurrenceRange)
  {
    $this->eventOccurrenceRange = $eventOccurrenceRange;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange
   */
  public function getEventOccurrenceRange()
  {
    return $this->eventOccurrenceRange;
  }
  /**
   * Output only. The event revenue range.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange $eventRevenueRange
   */
  public function setEventRevenueRange(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange $eventRevenueRange)
  {
    $this->eventRevenueRange = $eventRevenueRange;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange
   */
  public function getEventRevenueRange()
  {
    return $this->eventRevenueRange;
  }
  public function setEventRevenueValue($eventRevenueValue)
  {
    $this->eventRevenueValue = $eventRevenueValue;
  }
  public function getEventRevenueValue()
  {
    return $this->eventRevenueValue;
  }
  /**
   * Output only. Google event name represented by this conversion value.
   *
   * @param string $mappedEventName
   */
  public function setMappedEventName($mappedEventName)
  {
    $this->mappedEventName = $mappedEventName;
  }
  /**
   * @return string
   */
  public function getMappedEventName()
  {
    return $this->mappedEventName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEvent::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEvent');
