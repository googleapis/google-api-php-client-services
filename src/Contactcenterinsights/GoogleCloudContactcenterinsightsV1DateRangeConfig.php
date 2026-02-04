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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1DateRangeConfig extends \Google\Model
{
  protected $absoluteDateRangeType = GoogleCloudContactcenterinsightsV1QueryInterval::class;
  protected $absoluteDateRangeDataType = '';
  protected $relativeDateRangeType = GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange::class;
  protected $relativeDateRangeDataType = '';

  /**
   * An absolute date range.
   *
   * @param GoogleCloudContactcenterinsightsV1QueryInterval $absoluteDateRange
   */
  public function setAbsoluteDateRange(GoogleCloudContactcenterinsightsV1QueryInterval $absoluteDateRange)
  {
    $this->absoluteDateRange = $absoluteDateRange;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1QueryInterval
   */
  public function getAbsoluteDateRange()
  {
    return $this->absoluteDateRange;
  }
  /**
   * A relative date range.
   *
   * @param GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange $relativeDateRange
   */
  public function setRelativeDateRange(GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange $relativeDateRange)
  {
    $this->relativeDateRange = $relativeDateRange;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange
   */
  public function getRelativeDateRange()
  {
    return $this->relativeDateRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1DateRangeConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DateRangeConfig');
