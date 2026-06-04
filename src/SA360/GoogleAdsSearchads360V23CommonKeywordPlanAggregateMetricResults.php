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

class GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetricResults extends \Google\Collection
{
  protected $collection_key = 'deviceSearches';
  protected $deviceSearchesType = GoogleAdsSearchads360V23CommonKeywordPlanDeviceSearches::class;
  protected $deviceSearchesDataType = 'array';

  /**
   * The aggregate searches for all the keywords segmented by device for the
   * specified time. Supports the following device types: MOBILE, TABLET,
   * DESKTOP. This is only set when KeywordPlanAggregateMetricTypeEnum.DEVICE is
   * set in the KeywordPlanAggregateMetrics field in the request.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordPlanDeviceSearches[] $deviceSearches
   */
  public function setDeviceSearches($deviceSearches)
  {
    $this->deviceSearches = $deviceSearches;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordPlanDeviceSearches[]
   */
  public function getDeviceSearches()
  {
    return $this->deviceSearches;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetricResults::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonKeywordPlanAggregateMetricResults');
