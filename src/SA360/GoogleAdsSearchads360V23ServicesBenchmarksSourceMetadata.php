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

class GoogleAdsSearchads360V23ServicesBenchmarksSourceMetadata extends \Google\Model
{
  /**
   * Not specified.
   */
  public const BENCHMARKS_SOURCE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const BENCHMARKS_SOURCE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The classification of ad categories for benchmarking. (for example,
   * "Technology" or "Finance").
   */
  public const BENCHMARKS_SOURCE_TYPE_INDUSTRY_VERTICAL = 'INDUSTRY_VERTICAL';
  /**
   * The type of benchmarks source.
   *
   * @var string
   */
  public $benchmarksSourceType;
  protected $industryVerticalInfoType = GoogleAdsSearchads360V23ServicesIndustryVerticalInfo::class;
  protected $industryVerticalInfoDataType = '';

  /**
   * The type of benchmarks source.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INDUSTRY_VERTICAL
   *
   * @param self::BENCHMARKS_SOURCE_TYPE_* $benchmarksSourceType
   */
  public function setBenchmarksSourceType($benchmarksSourceType)
  {
    $this->benchmarksSourceType = $benchmarksSourceType;
  }
  /**
   * @return self::BENCHMARKS_SOURCE_TYPE_*
   */
  public function getBenchmarksSourceType()
  {
    return $this->benchmarksSourceType;
  }
  /**
   * Information on the Industry Vertical.
   *
   * @param GoogleAdsSearchads360V23ServicesIndustryVerticalInfo $industryVerticalInfo
   */
  public function setIndustryVerticalInfo(GoogleAdsSearchads360V23ServicesIndustryVerticalInfo $industryVerticalInfo)
  {
    $this->industryVerticalInfo = $industryVerticalInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIndustryVerticalInfo
   */
  public function getIndustryVerticalInfo()
  {
    return $this->industryVerticalInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesBenchmarksSourceMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesBenchmarksSourceMetadata');
