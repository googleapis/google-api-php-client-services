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

class GoogleAdsSearchads360V23CommonChainFilter extends \Google\Collection
{
  protected $collection_key = 'locationAttributes';
  /**
   * Required. Used to filter chain locations by chain id. Only chain locations
   * that belong to the specified chain will be in the asset set.
   *
   * @var string
   */
  public $chainId;
  /**
   * Used to filter chain locations by location attributes. Only chain locations
   * that belong to all of the specified attribute(s) will be in the asset set.
   * If this field is empty, it means no filtering on this field.
   *
   * @var string[]
   */
  public $locationAttributes;

  /**
   * Required. Used to filter chain locations by chain id. Only chain locations
   * that belong to the specified chain will be in the asset set.
   *
   * @param string $chainId
   */
  public function setChainId($chainId)
  {
    $this->chainId = $chainId;
  }
  /**
   * @return string
   */
  public function getChainId()
  {
    return $this->chainId;
  }
  /**
   * Used to filter chain locations by location attributes. Only chain locations
   * that belong to all of the specified attribute(s) will be in the asset set.
   * If this field is empty, it means no filtering on this field.
   *
   * @param string[] $locationAttributes
   */
  public function setLocationAttributes($locationAttributes)
  {
    $this->locationAttributes = $locationAttributes;
  }
  /**
   * @return string[]
   */
  public function getLocationAttributes()
  {
    return $this->locationAttributes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonChainFilter::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonChainFilter');
