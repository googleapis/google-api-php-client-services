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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange extends \Google\Model
{
  /**
   * Output only. For event counter ranges, the maximum of the defined range. A
   * value of 0 will be treated as unset.
   *
   * @var string
   */
  public $maxEventCount;
  /**
   * Output only. For event counter ranges, the minimum of the defined range. A
   * value of 0 will be treated as unset.
   *
   * @var string
   */
  public $minEventCount;

  /**
   * Output only. For event counter ranges, the maximum of the defined range. A
   * value of 0 will be treated as unset.
   *
   * @param string $maxEventCount
   */
  public function setMaxEventCount($maxEventCount)
  {
    $this->maxEventCount = $maxEventCount;
  }
  /**
   * @return string
   */
  public function getMaxEventCount()
  {
    return $this->maxEventCount;
  }
  /**
   * Output only. For event counter ranges, the minimum of the defined range. A
   * value of 0 will be treated as unset.
   *
   * @param string $minEventCount
   */
  public function setMinEventCount($minEventCount)
  {
    $this->minEventCount = $minEventCount;
  }
  /**
   * @return string
   */
  public function getMinEventCount()
  {
    return $this->minEventCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventEventOccurrenceRange');
