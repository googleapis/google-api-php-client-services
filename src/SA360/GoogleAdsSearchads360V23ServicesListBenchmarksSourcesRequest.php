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

class GoogleAdsSearchads360V23ServicesListBenchmarksSourcesRequest extends \Google\Collection
{
  protected $collection_key = 'benchmarksSources';
  protected $applicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $applicationInfoDataType = '';
  /**
   * Required. The types of benchmarks sources to be returned (for example,
   * INDUSTRY_VERTICAL).
   *
   * @var string[]
   */
  public $benchmarksSources;

  /**
   * Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $applicationInfo
   */
  public function setApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $applicationInfo)
  {
    $this->applicationInfo = $applicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getApplicationInfo()
  {
    return $this->applicationInfo;
  }
  /**
   * Required. The types of benchmarks sources to be returned (for example,
   * INDUSTRY_VERTICAL).
   *
   * @param string[] $benchmarksSources
   */
  public function setBenchmarksSources($benchmarksSources)
  {
    $this->benchmarksSources = $benchmarksSources;
  }
  /**
   * @return string[]
   */
  public function getBenchmarksSources()
  {
    return $this->benchmarksSources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListBenchmarksSourcesRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListBenchmarksSourcesRequest');
