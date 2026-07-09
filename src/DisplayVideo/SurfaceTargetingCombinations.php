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

namespace Google\Service\DisplayVideo;

class SurfaceTargetingCombinations extends \Google\Collection
{
  protected $collection_key = 'validSurfaceCombinations';
  /**
   * Output only. The surface types available.
   *
   * @var string[]
   */
  public $availableSurfaceTypes;
  /**
   * Output only. The default surface types for this product.
   *
   * @var string[]
   */
  public $defaultSurfaceTypes;
  protected $validSurfaceCombinationsType = SurfaceTargetingCombination::class;
  protected $validSurfaceCombinationsDataType = 'array';

  /**
   * Output only. The surface types available.
   *
   * @param string[] $availableSurfaceTypes
   */
  public function setAvailableSurfaceTypes($availableSurfaceTypes)
  {
    $this->availableSurfaceTypes = $availableSurfaceTypes;
  }
  /**
   * @return string[]
   */
  public function getAvailableSurfaceTypes()
  {
    return $this->availableSurfaceTypes;
  }
  /**
   * Output only. The default surface types for this product.
   *
   * @param string[] $defaultSurfaceTypes
   */
  public function setDefaultSurfaceTypes($defaultSurfaceTypes)
  {
    $this->defaultSurfaceTypes = $defaultSurfaceTypes;
  }
  /**
   * @return string[]
   */
  public function getDefaultSurfaceTypes()
  {
    return $this->defaultSurfaceTypes;
  }
  /**
   * Output only. Valid combinations of surfaces that can be selected together.
   *
   * @param SurfaceTargetingCombination[] $validSurfaceCombinations
   */
  public function setValidSurfaceCombinations($validSurfaceCombinations)
  {
    $this->validSurfaceCombinations = $validSurfaceCombinations;
  }
  /**
   * @return SurfaceTargetingCombination[]
   */
  public function getValidSurfaceCombinations()
  {
    return $this->validSurfaceCombinations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SurfaceTargetingCombinations::class, 'Google_Service_DisplayVideo_SurfaceTargetingCombinations');
