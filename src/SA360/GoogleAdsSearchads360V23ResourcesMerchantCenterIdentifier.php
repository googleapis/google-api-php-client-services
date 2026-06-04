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

class GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier extends \Google\Model
{
  /**
   * Immutable. The customer ID of the Google Merchant Center account. This
   * field is required and should not be empty when creating a new Merchant
   * Center link. It is unable to be modified after the creation of the link.
   *
   * @var string
   */
  public $merchantCenterId;

  /**
   * Immutable. The customer ID of the Google Merchant Center account. This
   * field is required and should not be empty when creating a new Merchant
   * Center link. It is unable to be modified after the creation of the link.
   *
   * @param string $merchantCenterId
   */
  public function setMerchantCenterId($merchantCenterId)
  {
    $this->merchantCenterId = $merchantCenterId;
  }
  /**
   * @return string
   */
  public function getMerchantCenterId()
  {
    return $this->merchantCenterId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier');
