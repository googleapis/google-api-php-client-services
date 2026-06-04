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

class GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata extends \Google\Model
{
  /**
   * Time the advertiser uploaded the data to the partner. Required. The format
   * is "YYYY-MM-DD HH:MM:SS". Examples: "2018-03-05 09:15:00" or "2018-02-01
   * 14:34:30"
   *
   * @var string
   */
  public $advertiserUploadDateTime;
  /**
   * Version of partner IDs to be used for uploads. Required.
   *
   * @var string
   */
  public $bridgeMapVersionId;
  /**
   * ID of the third party partner updating the transaction feed.
   *
   * @var string
   */
  public $partnerId;
  /**
   * The fraction of valid transactions that are matched to a third party
   * assigned user ID on the partner side. Required. The fraction needs to be
   * between 0 and 1 (excluding 0).
   *
   * @var 
   */
  public $partnerMatchFraction;
  /**
   * The fraction of valid transactions that are uploaded by the partner to
   * Google. Required. The fraction needs to be between 0 and 1 (excluding 0).
   *
   * @var 
   */
  public $partnerUploadFraction;
  /**
   * The fraction of transactions that are valid. Invalid transactions may
   * include invalid formats or values. Required. The fraction needs to be
   * between 0 and 1 (excluding 0).
   *
   * @var 
   */
  public $validTransactionFraction;

  /**
   * Time the advertiser uploaded the data to the partner. Required. The format
   * is "YYYY-MM-DD HH:MM:SS". Examples: "2018-03-05 09:15:00" or "2018-02-01
   * 14:34:30"
   *
   * @param string $advertiserUploadDateTime
   */
  public function setAdvertiserUploadDateTime($advertiserUploadDateTime)
  {
    $this->advertiserUploadDateTime = $advertiserUploadDateTime;
  }
  /**
   * @return string
   */
  public function getAdvertiserUploadDateTime()
  {
    return $this->advertiserUploadDateTime;
  }
  /**
   * Version of partner IDs to be used for uploads. Required.
   *
   * @param string $bridgeMapVersionId
   */
  public function setBridgeMapVersionId($bridgeMapVersionId)
  {
    $this->bridgeMapVersionId = $bridgeMapVersionId;
  }
  /**
   * @return string
   */
  public function getBridgeMapVersionId()
  {
    return $this->bridgeMapVersionId;
  }
  /**
   * ID of the third party partner updating the transaction feed.
   *
   * @param string $partnerId
   */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /**
   * @return string
   */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
  public function setPartnerMatchFraction($partnerMatchFraction)
  {
    $this->partnerMatchFraction = $partnerMatchFraction;
  }
  public function getPartnerMatchFraction()
  {
    return $this->partnerMatchFraction;
  }
  public function setPartnerUploadFraction($partnerUploadFraction)
  {
    $this->partnerUploadFraction = $partnerUploadFraction;
  }
  public function getPartnerUploadFraction()
  {
    return $this->partnerUploadFraction;
  }
  public function setValidTransactionFraction($validTransactionFraction)
  {
    $this->validTransactionFraction = $validTransactionFraction;
  }
  public function getValidTransactionFraction()
  {
    return $this->validTransactionFraction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata');
