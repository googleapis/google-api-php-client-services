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

class ProductMetadata extends \Google\Model
{
  /**
   * Output only. The name associated with the ad product. For example: "Video
   * View Campaign".
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The plannable product code (e.g. "YOUTUBE_REACH_MIX").
   *
   * @var string
   */
  public $plannableProductCode;
  protected $plannableProductCoreAttributesType = PlannableProductCoreAttributes::class;
  protected $plannableProductCoreAttributesDataType = '';
  /**
   * Output only. The plain-text description of the ad product.
   *
   * @var string
   */
  public $plannableProductDescription;
  protected $plannableTargetingType = PlannableTargeting::class;
  protected $plannableTargetingDataType = '';

  /**
   * Output only. The name associated with the ad product. For example: "Video
   * View Campaign".
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. The plannable product code (e.g. "YOUTUBE_REACH_MIX").
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
   * Output only. Core attributes for this product.
   *
   * @param PlannableProductCoreAttributes $plannableProductCoreAttributes
   */
  public function setPlannableProductCoreAttributes(PlannableProductCoreAttributes $plannableProductCoreAttributes)
  {
    $this->plannableProductCoreAttributes = $plannableProductCoreAttributes;
  }
  /**
   * @return PlannableProductCoreAttributes
   */
  public function getPlannableProductCoreAttributes()
  {
    return $this->plannableProductCoreAttributes;
  }
  /**
   * Output only. The plain-text description of the ad product.
   *
   * @param string $plannableProductDescription
   */
  public function setPlannableProductDescription($plannableProductDescription)
  {
    $this->plannableProductDescription = $plannableProductDescription;
  }
  /**
   * @return string
   */
  public function getPlannableProductDescription()
  {
    return $this->plannableProductDescription;
  }
  /**
   * Output only. The targeting capabilities available for this product.
   *
   * @param PlannableTargeting $plannableTargeting
   */
  public function setPlannableTargeting(PlannableTargeting $plannableTargeting)
  {
    $this->plannableTargeting = $plannableTargeting;
  }
  /**
   * @return PlannableTargeting
   */
  public function getPlannableTargeting()
  {
    return $this->plannableTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductMetadata::class, 'Google_Service_DisplayVideo_ProductMetadata');
