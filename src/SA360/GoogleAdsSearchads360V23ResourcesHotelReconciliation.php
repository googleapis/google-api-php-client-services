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

class GoogleAdsSearchads360V23ResourcesHotelReconciliation extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Bookings are for a future date, or a stay is underway but the check-out
   * date hasn't passed. An active reservation can't be reconciled.
   */
  public const STATUS_RESERVATION_ENABLED = 'RESERVATION_ENABLED';
  /**
   * Check-out has already taken place, or the booked dates have passed without
   * cancellation. Bookings that are not reconciled within 45 days of the check-
   * out date are billed based on the original booking price.
   */
  public const STATUS_RECONCILIATION_NEEDED = 'RECONCILIATION_NEEDED';
  /**
   * These bookings have been reconciled. Reconciled bookings are billed 45 days
   * after the check-out date.
   */
  public const STATUS_RECONCILED = 'RECONCILED';
  /**
   * This booking was marked as canceled. Canceled stays with a value greater
   * than zero (due to minimum stay rules or cancellation fees) are billed 45
   * days after the check-out date.
   */
  public const STATUS_CANCELED = 'CANCELED';
  /**
   * Output only. Whether a given booking has been billed. Once billed, a
   * booking can't be modified.
   *
   * @var bool
   */
  public $billed;
  /**
   * Output only. The resource name for the Campaign associated with the
   * conversion.
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. Check-in date recorded when the booking is made. If the check-
   * in date is modified at reconciliation, the revised date will then take the
   * place of the original date in this column. Format is YYYY-MM-DD.
   *
   * @var string
   */
  public $checkInDate;
  /**
   * Output only. Check-out date recorded when the booking is made. If the
   * check-in date is modified at reconciliation, the revised date will then
   * take the place of the original date in this column. Format is YYYY-MM-DD.
   *
   * @var string
   */
  public $checkOutDate;
  /**
   * Required. Output only. The commission ID is Google's ID for this booking.
   * Every booking event is assigned a Commission ID to help you match it to a
   * guest stay.
   *
   * @var string
   */
  public $commissionId;
  /**
   * Output only. Identifier for the Hotel Center account which provides the
   * rates for the Hotel campaign.
   *
   * @var string
   */
  public $hotelCenterId;
  /**
   * Output only. Unique identifier for the booked property, as provided in the
   * Hotel Center feed. The hotel ID comes from the 'ID' parameter of the
   * conversion tracking tag.
   *
   * @var string
   */
  public $hotelId;
  /**
   * Output only. The order ID is the identifier for this booking as provided in
   * the 'transaction_id' parameter of the conversion tracking tag.
   *
   * @var string
   */
  public $orderId;
  /**
   * Required. Output only. Reconciled value is the final value of a booking as
   * paid by the guest. If original booking value changes for any reason, such
   * as itinerary changes or room upsells, the reconciled value should be the
   * full final amount collected. If a booking is canceled, the reconciled value
   * should include the value of any cancellation fees or non-refundable nights
   * charged. Value is in millionths of the base unit currency. For example,
   * $12.35 would be represented as 12350000. Currency unit is in the default
   * customer currency.
   *
   * @var string
   */
  public $reconciledValueMicros;
  /**
   * Immutable. The resource name of the hotel reconciliation. Hotel
   * reconciliation resource names have the form:
   * `customers/{customer_id}/hotelReconciliations/{commission_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Required. Output only. Current status of a booking with regards to
   * reconciliation and billing. Bookings should be reconciled within 45 days
   * after the check-out date. Any booking not reconciled within 45 days will be
   * billed at its original value.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. Whether a given booking has been billed. Once billed, a
   * booking can't be modified.
   *
   * @param bool $billed
   */
  public function setBilled($billed)
  {
    $this->billed = $billed;
  }
  /**
   * @return bool
   */
  public function getBilled()
  {
    return $this->billed;
  }
  /**
   * Output only. The resource name for the Campaign associated with the
   * conversion.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. Check-in date recorded when the booking is made. If the check-
   * in date is modified at reconciliation, the revised date will then take the
   * place of the original date in this column. Format is YYYY-MM-DD.
   *
   * @param string $checkInDate
   */
  public function setCheckInDate($checkInDate)
  {
    $this->checkInDate = $checkInDate;
  }
  /**
   * @return string
   */
  public function getCheckInDate()
  {
    return $this->checkInDate;
  }
  /**
   * Output only. Check-out date recorded when the booking is made. If the
   * check-in date is modified at reconciliation, the revised date will then
   * take the place of the original date in this column. Format is YYYY-MM-DD.
   *
   * @param string $checkOutDate
   */
  public function setCheckOutDate($checkOutDate)
  {
    $this->checkOutDate = $checkOutDate;
  }
  /**
   * @return string
   */
  public function getCheckOutDate()
  {
    return $this->checkOutDate;
  }
  /**
   * Required. Output only. The commission ID is Google's ID for this booking.
   * Every booking event is assigned a Commission ID to help you match it to a
   * guest stay.
   *
   * @param string $commissionId
   */
  public function setCommissionId($commissionId)
  {
    $this->commissionId = $commissionId;
  }
  /**
   * @return string
   */
  public function getCommissionId()
  {
    return $this->commissionId;
  }
  /**
   * Output only. Identifier for the Hotel Center account which provides the
   * rates for the Hotel campaign.
   *
   * @param string $hotelCenterId
   */
  public function setHotelCenterId($hotelCenterId)
  {
    $this->hotelCenterId = $hotelCenterId;
  }
  /**
   * @return string
   */
  public function getHotelCenterId()
  {
    return $this->hotelCenterId;
  }
  /**
   * Output only. Unique identifier for the booked property, as provided in the
   * Hotel Center feed. The hotel ID comes from the 'ID' parameter of the
   * conversion tracking tag.
   *
   * @param string $hotelId
   */
  public function setHotelId($hotelId)
  {
    $this->hotelId = $hotelId;
  }
  /**
   * @return string
   */
  public function getHotelId()
  {
    return $this->hotelId;
  }
  /**
   * Output only. The order ID is the identifier for this booking as provided in
   * the 'transaction_id' parameter of the conversion tracking tag.
   *
   * @param string $orderId
   */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /**
   * @return string
   */
  public function getOrderId()
  {
    return $this->orderId;
  }
  /**
   * Required. Output only. Reconciled value is the final value of a booking as
   * paid by the guest. If original booking value changes for any reason, such
   * as itinerary changes or room upsells, the reconciled value should be the
   * full final amount collected. If a booking is canceled, the reconciled value
   * should include the value of any cancellation fees or non-refundable nights
   * charged. Value is in millionths of the base unit currency. For example,
   * $12.35 would be represented as 12350000. Currency unit is in the default
   * customer currency.
   *
   * @param string $reconciledValueMicros
   */
  public function setReconciledValueMicros($reconciledValueMicros)
  {
    $this->reconciledValueMicros = $reconciledValueMicros;
  }
  /**
   * @return string
   */
  public function getReconciledValueMicros()
  {
    return $this->reconciledValueMicros;
  }
  /**
   * Immutable. The resource name of the hotel reconciliation. Hotel
   * reconciliation resource names have the form:
   * `customers/{customer_id}/hotelReconciliations/{commission_id}`
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
  /**
   * Required. Output only. Current status of a booking with regards to
   * reconciliation and billing. Bookings should be reconciled within 45 days
   * after the check-out date. Any booking not reconciled within 45 days will be
   * billed at its original value.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, RESERVATION_ENABLED,
   * RECONCILIATION_NEEDED, RECONCILED, CANCELED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesHotelReconciliation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesHotelReconciliation');
