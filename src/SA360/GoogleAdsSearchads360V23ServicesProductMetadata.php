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

class GoogleAdsSearchads360V23ServicesProductMetadata extends \Google\Model
{
  /**
   * The code associated with the ad product (for example: BUMPER,
   * TRUEVIEW_IN_STREAM). To list the available plannable product codes use
   * ReachPlanService.ListPlannableProducts.
   *
   * @var string
   */
  public $plannableProductCode;
  /**
   * The name associated with the ad product.
   *
   * @var string
   */
  public $plannableProductName;
  protected $plannableTargetingType = GoogleAdsSearchads360V23ServicesPlannableTargeting::class;
  protected $plannableTargetingDataType = '';

  /**
   * The code associated with the ad product (for example: BUMPER,
   * TRUEVIEW_IN_STREAM). To list the available plannable product codes use
   * ReachPlanService.ListPlannableProducts.
   *
   * @param string $plannableProductCode
   */
  public function setPlannableProductCode($plannableProductCode)
  {
    $this->plannableProductCode = $plannableProductCode;
  }
  /**
   * @return string
   */
  public function getPlannableProductCode()
  {
    return $this->plannableProductCode;
  }
  /**
   * The name associated with the ad product.
   *
   * @param string $plannableProductName
   */
  public function setPlannableProductName($plannableProductName)
  {
    $this->plannableProductName = $plannableProductName;
  }
  /**
   * @return string
   */
  public function getPlannableProductName()
  {
    return $this->plannableProductName;
  }
  /**
   * The allowed plannable targeting for this product.
   *
   * @param GoogleAdsSearchads360V23ServicesPlannableTargeting $plannableTargeting
   */
  public function setPlannableTargeting(GoogleAdsSearchads360V23ServicesPlannableTargeting $plannableTargeting)
  {
    $this->plannableTargeting = $plannableTargeting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesPlannableTargeting
   */
  public function getPlannableTargeting()
  {
    return $this->plannableTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesProductMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesProductMetadata');
