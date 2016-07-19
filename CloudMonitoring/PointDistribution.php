<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_CloudMonitoring_PointDistribution extends Google_Collection
{
  protected $collection_key = 'buckets';
  public $buckets;
  public $overflowBucket;
  public $underflowBucket;

  public function setBuckets(array $buckets)
  {
    foreach ($buckets as $b) {
      if (!$b instanceof Google_Service_CloudMonitoring_PointDistributionBucket) {
        throw new InvalidArgumentException('First argument to setBuckets must be an array of Google_Service_CloudMonitoring_PointDistributionBucket');
      }
    }
    $this->buckets = $buckets;
  }
  public function getBuckets()
  {
    return $this->buckets;
  }
  public function setOverflowBucket(Google_Service_CloudMonitoring_PointDistributionOverflowBucket $overflowBucket)
  {
    $this->overflowBucket = $overflowBucket;
  }
  public function getOverflowBucket()
  {
    return $this->overflowBucket;
  }
  public function setUnderflowBucket(Google_Service_CloudMonitoring_PointDistributionUnderflowBucket $underflowBucket)
  {
    $this->underflowBucket = $underflowBucket;
  }
  public function getUnderflowBucket()
  {
    return $this->underflowBucket;
  }
}
