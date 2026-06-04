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

class GoogleAdsSearchads360V23CommonShoppingLoyalty extends \Google\Model
{
  /**
   * The membership tier. It is a free-form string as each merchant may have
   * their own loyalty system. For example, it could be a number from 1 to 10,
   * or a string such as "Golden" or "Silver", or even empty string "".
   *
   * @var string
   */
  public $loyaltyTier;

  /**
   * The membership tier. It is a free-form string as each merchant may have
   * their own loyalty system. For example, it could be a number from 1 to 10,
   * or a string such as "Golden" or "Silver", or even empty string "".
   *
   * @param string $loyaltyTier
   */
  public function setLoyaltyTier($loyaltyTier)
  {
    $this->loyaltyTier = $loyaltyTier;
  }
  /**
   * @return string
   */
  public function getLoyaltyTier()
  {
    return $this->loyaltyTier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonShoppingLoyalty::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonShoppingLoyalty');
