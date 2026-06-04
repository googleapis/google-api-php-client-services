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

class GoogleAdsSearchads360V23CommonUserData extends \Google\Collection
{
  protected $collection_key = 'userIdentifiers';
  protected $consentType = GoogleAdsSearchads360V23CommonConsent::class;
  protected $consentDataType = '';
  protected $transactionAttributeType = GoogleAdsSearchads360V23CommonTransactionAttribute::class;
  protected $transactionAttributeDataType = '';
  protected $userAttributeType = GoogleAdsSearchads360V23CommonUserAttribute::class;
  protected $userAttributeDataType = '';
  protected $userIdentifiersType = GoogleAdsSearchads360V23CommonUserIdentifier::class;
  protected $userIdentifiersDataType = 'array';

  /**
   * The consent setting for the user. If set, will override the job level
   * consent for this user.
   *
   * @param GoogleAdsSearchads360V23CommonConsent $consent
   */
  public function setConsent(GoogleAdsSearchads360V23CommonConsent $consent)
  {
    $this->consent = $consent;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonConsent
   */
  public function getConsent()
  {
    return $this->consent;
  }
  /**
   * Additional transactions/attributes associated with the user. Required when
   * updating store sales data.
   *
   * @param GoogleAdsSearchads360V23CommonTransactionAttribute $transactionAttribute
   */
  public function setTransactionAttribute(GoogleAdsSearchads360V23CommonTransactionAttribute $transactionAttribute)
  {
    $this->transactionAttribute = $transactionAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTransactionAttribute
   */
  public function getTransactionAttribute()
  {
    return $this->transactionAttribute;
  }
  /**
   * Additional attributes associated with the user. Required when updating
   * customer match attributes. These have an expiration of 540 days.
   *
   * @param GoogleAdsSearchads360V23CommonUserAttribute $userAttribute
   */
  public function setUserAttribute(GoogleAdsSearchads360V23CommonUserAttribute $userAttribute)
  {
    $this->userAttribute = $userAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserAttribute
   */
  public function getUserAttribute()
  {
    return $this->userAttribute;
  }
  /**
   * User identification info.
   *
   * @param GoogleAdsSearchads360V23CommonUserIdentifier[] $userIdentifiers
   */
  public function setUserIdentifiers($userIdentifiers)
  {
    $this->userIdentifiers = $userIdentifiers;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserIdentifier[]
   */
  public function getUserIdentifiers()
  {
    return $this->userIdentifiers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserData::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserData');
