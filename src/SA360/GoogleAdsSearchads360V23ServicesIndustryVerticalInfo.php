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

class GoogleAdsSearchads360V23ServicesIndustryVerticalInfo extends \Google\Model
{
  /**
   * The unique identifier of the Industry Vertical.
   *
   * @var string
   */
  public $industryVerticalId;
  /**
   * The name of the Industry Vertical.
   *
   * @var string
   */
  public $industryVerticalName;
  /**
   * The unique identifier of the parent Industry Vertical, if exists.
   *
   * @var string
   */
  public $parentIndustryVerticalId;

  /**
   * The unique identifier of the Industry Vertical.
   *
   * @param string $industryVerticalId
   */
  public function setIndustryVerticalId($industryVerticalId)
  {
    $this->industryVerticalId = $industryVerticalId;
  }
  /**
   * @return string
   */
  public function getIndustryVerticalId()
  {
    return $this->industryVerticalId;
  }
  /**
   * The name of the Industry Vertical.
   *
   * @param string $industryVerticalName
   */
  public function setIndustryVerticalName($industryVerticalName)
  {
    $this->industryVerticalName = $industryVerticalName;
  }
  /**
   * @return string
   */
  public function getIndustryVerticalName()
  {
    return $this->industryVerticalName;
  }
  /**
   * The unique identifier of the parent Industry Vertical, if exists.
   *
   * @param string $parentIndustryVerticalId
   */
  public function setParentIndustryVerticalId($parentIndustryVerticalId)
  {
    $this->parentIndustryVerticalId = $parentIndustryVerticalId;
  }
  /**
   * @return string
   */
  public function getParentIndustryVerticalId()
  {
    return $this->parentIndustryVerticalId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesIndustryVerticalInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIndustryVerticalInfo');
