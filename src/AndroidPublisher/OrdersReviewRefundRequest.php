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

namespace Google\Service\AndroidPublisher;

class OrdersReviewRefundRequest extends \Google\Collection
{
  /**
   * Refund preference unspecified. This value is not used.
   */
  public const REFUND_PREFERENCE_REFUND_PREFERENCE_UNSPECIFIED = 'REFUND_PREFERENCE_UNSPECIFIED';
  /**
   * Developer prefers that Play declines the refund.
   */
  public const REFUND_PREFERENCE_DECLINE = 'DECLINE';
  /**
   * Developer prefers that Play grants the refund in full.
   */
  public const REFUND_PREFERENCE_APPROVE = 'APPROVE';
  /**
   * Developer has no preference about Google Play's decision to issue a refund
   */
  public const REFUND_PREFERENCE_NEUTRAL = 'NEUTRAL';
  protected $collection_key = 'consumptionUsageEvents';
  /**
   * Optional. Percentage of the In-App purchase the customer consumed, in
   * milliunits. Minimum: 0 Maximum: 100,000. For paid apps, this can be
   * omitted. Example : 45200 represents 45.2%.
   *
   * @var int
   */
  public $consumptionPercentageMilliunits;
  protected $consumptionUsageEventsType = ConsumptionUsageEvent::class;
  protected $consumptionUsageEventsDataType = 'array';
  /**
   * Required. The pending refund token included in the pending refund review
   * notification.
   *
   * @var string
   */
  public $pendingRefundToken;
  /**
   * Required. Indicates your preference, based on your operational logic, as to
   * whether the Play Store should grant the refund.
   *
   * @var string
   */
  public $refundPreference;
  /**
   * Required. Indicates whether you provided a free sample, trial, or
   * information about the functionality prior to the purchase.
   *
   * @var bool
   */
  public $sampleContentProvided;

  /**
   * Optional. Percentage of the In-App purchase the customer consumed, in
   * milliunits. Minimum: 0 Maximum: 100,000. For paid apps, this can be
   * omitted. Example : 45200 represents 45.2%.
   *
   * @param int $consumptionPercentageMilliunits
   */
  public function setConsumptionPercentageMilliunits($consumptionPercentageMilliunits)
  {
    $this->consumptionPercentageMilliunits = $consumptionPercentageMilliunits;
  }
  /**
   * @return int
   */
  public function getConsumptionPercentageMilliunits()
  {
    return $this->consumptionPercentageMilliunits;
  }
  /**
   * Optional. List of events, each representing an instance where the user
   * consumed or used the purchased item or service. Lists with over 1000 items
   * will be rejected.
   *
   * @param ConsumptionUsageEvent[] $consumptionUsageEvents
   */
  public function setConsumptionUsageEvents($consumptionUsageEvents)
  {
    $this->consumptionUsageEvents = $consumptionUsageEvents;
  }
  /**
   * @return ConsumptionUsageEvent[]
   */
  public function getConsumptionUsageEvents()
  {
    return $this->consumptionUsageEvents;
  }
  /**
   * Required. The pending refund token included in the pending refund review
   * notification.
   *
   * @param string $pendingRefundToken
   */
  public function setPendingRefundToken($pendingRefundToken)
  {
    $this->pendingRefundToken = $pendingRefundToken;
  }
  /**
   * @return string
   */
  public function getPendingRefundToken()
  {
    return $this->pendingRefundToken;
  }
  /**
   * Required. Indicates your preference, based on your operational logic, as to
   * whether the Play Store should grant the refund.
   *
   * Accepted values: REFUND_PREFERENCE_UNSPECIFIED, DECLINE, APPROVE, NEUTRAL
   *
   * @param self::REFUND_PREFERENCE_* $refundPreference
   */
  public function setRefundPreference($refundPreference)
  {
    $this->refundPreference = $refundPreference;
  }
  /**
   * @return self::REFUND_PREFERENCE_*
   */
  public function getRefundPreference()
  {
    return $this->refundPreference;
  }
  /**
   * Required. Indicates whether you provided a free sample, trial, or
   * information about the functionality prior to the purchase.
   *
   * @param bool $sampleContentProvided
   */
  public function setSampleContentProvided($sampleContentProvided)
  {
    $this->sampleContentProvided = $sampleContentProvided;
  }
  /**
   * @return bool
   */
  public function getSampleContentProvided()
  {
    return $this->sampleContentProvided;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrdersReviewRefundRequest::class, 'Google_Service_AndroidPublisher_OrdersReviewRefundRequest');
