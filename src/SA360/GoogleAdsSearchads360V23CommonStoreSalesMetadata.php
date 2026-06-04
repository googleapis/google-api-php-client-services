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

class GoogleAdsSearchads360V23CommonStoreSalesMetadata extends \Google\Model
{
  /**
   * Name of the store sales custom variable key. A predefined key that can be
   * applied to the transaction and then later used for custom segmentation in
   * reporting. Accessible only to customers on the allow-list.
   *
   * @var string
   */
  public $customKey;
  /**
   * This is the fraction of all transactions that are identifiable (for
   * example, associated with any form of customer information). Required. The
   * fraction needs to be between 0 and 1 (excluding 0).
   *
   * @var 
   */
  public $loyaltyFraction;
  protected $thirdPartyMetadataType = GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata::class;
  protected $thirdPartyMetadataDataType = '';
  /**
   * This is the ratio of sales being uploaded compared to the overall sales
   * that can be associated with a customer. Required. The fraction needs to be
   * between 0 and 1 (excluding 0). For example, if you upload half the sales
   * that you are able to associate with a customer, this would be 0.5.
   *
   * @var 
   */
  public $transactionUploadFraction;

  /**
   * Name of the store sales custom variable key. A predefined key that can be
   * applied to the transaction and then later used for custom segmentation in
   * reporting. Accessible only to customers on the allow-list.
   *
   * @param string $customKey
   */
  public function setCustomKey($customKey)
  {
    $this->customKey = $customKey;
  }
  /**
   * @return string
   */
  public function getCustomKey()
  {
    return $this->customKey;
  }
  public function setLoyaltyFraction($loyaltyFraction)
  {
    $this->loyaltyFraction = $loyaltyFraction;
  }
  public function getLoyaltyFraction()
  {
    return $this->loyaltyFraction;
  }
  /**
   * Metadata for a third party Store Sales upload.
   *
   * @param GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata $thirdPartyMetadata
   */
  public function setThirdPartyMetadata(GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata $thirdPartyMetadata)
  {
    $this->thirdPartyMetadata = $thirdPartyMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonStoreSalesThirdPartyMetadata
   */
  public function getThirdPartyMetadata()
  {
    return $this->thirdPartyMetadata;
  }
  public function setTransactionUploadFraction($transactionUploadFraction)
  {
    $this->transactionUploadFraction = $transactionUploadFraction;
  }
  public function getTransactionUploadFraction()
  {
    return $this->transactionUploadFraction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonStoreSalesMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonStoreSalesMetadata');
