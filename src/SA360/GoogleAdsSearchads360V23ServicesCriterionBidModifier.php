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

class GoogleAdsSearchads360V23ServicesCriterionBidModifier extends \Google\Model
{
  /**
   * The associated multiplier for the criterion_id. If set, this value cannot
   * be 0.
   *
   * @var 
   */
  public $bidModifier;
  /**
   * The resource name of the geo location to target. The resource name is of
   * the format "geoTargetConstants/{criterion_id}".
   *
   * @var string
   */
  public $geoTargetConstant;

  public function setBidModifier($bidModifier)
  {
    $this->bidModifier = $bidModifier;
  }
  public function getBidModifier()
  {
    return $this->bidModifier;
  }
  /**
   * The resource name of the geo location to target. The resource name is of
   * the format "geoTargetConstants/{criterion_id}".
   *
   * @param string $geoTargetConstant
   */
  public function setGeoTargetConstant($geoTargetConstant)
  {
    $this->geoTargetConstant = $geoTargetConstant;
  }
  /**
   * @return string
   */
  public function getGeoTargetConstant()
  {
    return $this->geoTargetConstant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCriterionBidModifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCriterionBidModifier');
