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

class GoogleAdsSearchads360V23CommonUserAttribute extends \Google\Collection
{
  protected $collection_key = 'eventAttribute';
  /**
   * Timestamp when the user was acquired. The format is YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default.
   *
   * @var string
   */
  public $acquisitionDateTime;
  /**
   * Advertiser defined average number of purchases that are made by the user in
   * a 30 day period.
   *
   * @var int
   */
  public $averagePurchaseCount;
  /**
   * Advertiser defined average purchase value in micros for the user.
   *
   * @var string
   */
  public $averagePurchaseValueMicros;
  protected $eventAttributeType = GoogleAdsSearchads360V23CommonEventAttribute::class;
  protected $eventAttributeDataType = 'array';
  /**
   * Optional. Timestamp of the first purchase made by the user. The format is
   * YYYY-MM-DD HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone
   * offset from UTC. If the offset is absent, the API will use the account's
   * timezone as default.
   *
   * @var string
   */
  public $firstPurchaseDateTime;
  /**
   * Timestamp of the last purchase made by the user. The format is YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default.
   *
   * @var string
   */
  public $lastPurchaseDateTime;
  /**
   * Optional. Advertiser defined lifecycle stage for the user. The accepted
   * values are "Lead", "Active" and "Churned".
   *
   * @var string
   */
  public $lifecycleStage;
  /**
   * Advertiser defined lifetime value bucket for the user. The valid range for
   * a lifetime value bucket is from 1 (low) to 10 (high), except for remove
   * operation where 0 will also be accepted.
   *
   * @var int
   */
  public $lifetimeValueBucket;
  /**
   * Advertiser defined lifetime value for the user.
   *
   * @var string
   */
  public $lifetimeValueMicros;
  protected $shoppingLoyaltyType = GoogleAdsSearchads360V23CommonShoppingLoyalty::class;
  protected $shoppingLoyaltyDataType = '';

  /**
   * Timestamp when the user was acquired. The format is YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default.
   *
   * @param string $acquisitionDateTime
   */
  public function setAcquisitionDateTime($acquisitionDateTime)
  {
    $this->acquisitionDateTime = $acquisitionDateTime;
  }
  /**
   * @return string
   */
  public function getAcquisitionDateTime()
  {
    return $this->acquisitionDateTime;
  }
  /**
   * Advertiser defined average number of purchases that are made by the user in
   * a 30 day period.
   *
   * @param int $averagePurchaseCount
   */
  public function setAveragePurchaseCount($averagePurchaseCount)
  {
    $this->averagePurchaseCount = $averagePurchaseCount;
  }
  /**
   * @return int
   */
  public function getAveragePurchaseCount()
  {
    return $this->averagePurchaseCount;
  }
  /**
   * Advertiser defined average purchase value in micros for the user.
   *
   * @param string $averagePurchaseValueMicros
   */
  public function setAveragePurchaseValueMicros($averagePurchaseValueMicros)
  {
    $this->averagePurchaseValueMicros = $averagePurchaseValueMicros;
  }
  /**
   * @return string
   */
  public function getAveragePurchaseValueMicros()
  {
    return $this->averagePurchaseValueMicros;
  }
  /**
   * Optional. Advertiser defined events and their attributes. All the values in
   * the nested fields are required. Currently this field is in beta.
   *
   * @param GoogleAdsSearchads360V23CommonEventAttribute[] $eventAttribute
   */
  public function setEventAttribute($eventAttribute)
  {
    $this->eventAttribute = $eventAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonEventAttribute[]
   */
  public function getEventAttribute()
  {
    return $this->eventAttribute;
  }
  /**
   * Optional. Timestamp of the first purchase made by the user. The format is
   * YYYY-MM-DD HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone
   * offset from UTC. If the offset is absent, the API will use the account's
   * timezone as default.
   *
   * @param string $firstPurchaseDateTime
   */
  public function setFirstPurchaseDateTime($firstPurchaseDateTime)
  {
    $this->firstPurchaseDateTime = $firstPurchaseDateTime;
  }
  /**
   * @return string
   */
  public function getFirstPurchaseDateTime()
  {
    return $this->firstPurchaseDateTime;
  }
  /**
   * Timestamp of the last purchase made by the user. The format is YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM], where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default.
   *
   * @param string $lastPurchaseDateTime
   */
  public function setLastPurchaseDateTime($lastPurchaseDateTime)
  {
    $this->lastPurchaseDateTime = $lastPurchaseDateTime;
  }
  /**
   * @return string
   */
  public function getLastPurchaseDateTime()
  {
    return $this->lastPurchaseDateTime;
  }
  /**
   * Optional. Advertiser defined lifecycle stage for the user. The accepted
   * values are "Lead", "Active" and "Churned".
   *
   * @param string $lifecycleStage
   */
  public function setLifecycleStage($lifecycleStage)
  {
    $this->lifecycleStage = $lifecycleStage;
  }
  /**
   * @return string
   */
  public function getLifecycleStage()
  {
    return $this->lifecycleStage;
  }
  /**
   * Advertiser defined lifetime value bucket for the user. The valid range for
   * a lifetime value bucket is from 1 (low) to 10 (high), except for remove
   * operation where 0 will also be accepted.
   *
   * @param int $lifetimeValueBucket
   */
  public function setLifetimeValueBucket($lifetimeValueBucket)
  {
    $this->lifetimeValueBucket = $lifetimeValueBucket;
  }
  /**
   * @return int
   */
  public function getLifetimeValueBucket()
  {
    return $this->lifetimeValueBucket;
  }
  /**
   * Advertiser defined lifetime value for the user.
   *
   * @param string $lifetimeValueMicros
   */
  public function setLifetimeValueMicros($lifetimeValueMicros)
  {
    $this->lifetimeValueMicros = $lifetimeValueMicros;
  }
  /**
   * @return string
   */
  public function getLifetimeValueMicros()
  {
    return $this->lifetimeValueMicros;
  }
  /**
   * The shopping loyalty related data. Shopping utilizes this data to provide
   * users with a better experience. Accessible only to merchants on the allow-
   * list with the user's consent.
   *
   * @param GoogleAdsSearchads360V23CommonShoppingLoyalty $shoppingLoyalty
   */
  public function setShoppingLoyalty(GoogleAdsSearchads360V23CommonShoppingLoyalty $shoppingLoyalty)
  {
    $this->shoppingLoyalty = $shoppingLoyalty;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonShoppingLoyalty
   */
  public function getShoppingLoyalty()
  {
    return $this->shoppingLoyalty;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserAttribute');
