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

class GoogleAdsSearchads360V23ServicesListPlannableProductsRequest extends \Google\Model
{
  /**
   * Required. The ID of the selected location for planning. To list the
   * available plannable location IDs use
   * ReachPlanService.ListPlannableLocations.
   *
   * @var string
   */
  public $plannableLocationId;
  protected $reachApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $reachApplicationInfoDataType = '';

  /**
   * Required. The ID of the selected location for planning. To list the
   * available plannable location IDs use
   * ReachPlanService.ListPlannableLocations.
   *
   * @param string $plannableLocationId
   */
  public function setPlannableLocationId($plannableLocationId)
  {
    $this->plannableLocationId = $plannableLocationId;
  }
  /**
   * @return string
   */
  public function getPlannableLocationId()
  {
    return $this->plannableLocationId;
  }
  /**
   * Optional. Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo
   */
  public function setReachApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo)
  {
    $this->reachApplicationInfo = $reachApplicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getReachApplicationInfo()
  {
    return $this->reachApplicationInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListPlannableProductsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListPlannableProductsRequest');
