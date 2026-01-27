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

namespace Google\Service\MigrationCenterAPI;

class AssetsExportJobPerformanceData extends \Google\Model
{
  /**
   * Optional. When this value is set to a positive integer, performance data
   * will be returned for the most recent days for which data is available. When
   * this value is unset (or set to zero), all available data is returned. The
   * maximum value is 420; values above 420 will be coerced to 420. If unset (0
   * value) a default value of 40 will be used.
   *
   * @var int
   */
  public $maxDays;

  /**
   * Optional. When this value is set to a positive integer, performance data
   * will be returned for the most recent days for which data is available. When
   * this value is unset (or set to zero), all available data is returned. The
   * maximum value is 420; values above 420 will be coerced to 420. If unset (0
   * value) a default value of 40 will be used.
   *
   * @param int $maxDays
   */
  public function setMaxDays($maxDays)
  {
    $this->maxDays = $maxDays;
  }
  /**
   * @return int
   */
  public function getMaxDays()
  {
    return $this->maxDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetsExportJobPerformanceData::class, 'Google_Service_MigrationCenterAPI_AssetsExportJobPerformanceData');
