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

namespace Google\Service\TravelImpactModel;

class EmissionsBreakdown extends \Google\Model
{
  protected $ttwEmissionsGramsPerPaxType = EmissionsGramsPerPax::class;
  protected $ttwEmissionsGramsPerPaxDataType = '';
  protected $wttEmissionsGramsPerPaxType = EmissionsGramsPerPax::class;
  protected $wttEmissionsGramsPerPaxDataType = '';

  /**
   * Per-passenger tank-to-wake emission estimate numbers. Will not be present
   * if emissions could not be computed. For the list of reasons why emissions
   * could not be computed, see ComputeFlightEmissions.
   *
   * @param EmissionsGramsPerPax $ttwEmissionsGramsPerPax
   */
  public function setTtwEmissionsGramsPerPax(EmissionsGramsPerPax $ttwEmissionsGramsPerPax)
  {
    $this->ttwEmissionsGramsPerPax = $ttwEmissionsGramsPerPax;
  }
  /**
   * @return EmissionsGramsPerPax
   */
  public function getTtwEmissionsGramsPerPax()
  {
    return $this->ttwEmissionsGramsPerPax;
  }
  /**
   * Per-passenger well-to-tank emission estimate numbers. Will not be present
   * if emissions could not be computed. For the list of reasons why emissions
   * could not be computed, see ComputeFlightEmissions.
   *
   * @param EmissionsGramsPerPax $wttEmissionsGramsPerPax
   */
  public function setWttEmissionsGramsPerPax(EmissionsGramsPerPax $wttEmissionsGramsPerPax)
  {
    $this->wttEmissionsGramsPerPax = $wttEmissionsGramsPerPax;
  }
  /**
   * @return EmissionsGramsPerPax
   */
  public function getWttEmissionsGramsPerPax()
  {
    return $this->wttEmissionsGramsPerPax;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EmissionsBreakdown::class, 'Google_Service_TravelImpactModel_EmissionsBreakdown');
