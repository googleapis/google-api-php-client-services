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

class GoogleAdsSearchads360V23ResourcesDistanceView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DISTANCE_BUCKET_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const DISTANCE_BUCKET_UNKNOWN = 'UNKNOWN';
  /**
   * User was within 700m of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_700M = 'WITHIN_700M';
  /**
   * User was within 1KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_1KM = 'WITHIN_1KM';
  /**
   * User was within 5KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_5KM = 'WITHIN_5KM';
  /**
   * User was within 10KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_10KM = 'WITHIN_10KM';
  /**
   * User was within 15KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_15KM = 'WITHIN_15KM';
  /**
   * User was within 20KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_20KM = 'WITHIN_20KM';
  /**
   * User was within 25KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_25KM = 'WITHIN_25KM';
  /**
   * User was within 30KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_30KM = 'WITHIN_30KM';
  /**
   * User was within 35KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_35KM = 'WITHIN_35KM';
  /**
   * User was within 40KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_40KM = 'WITHIN_40KM';
  /**
   * User was within 45KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_45KM = 'WITHIN_45KM';
  /**
   * User was within 50KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_50KM = 'WITHIN_50KM';
  /**
   * User was within 55KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_55KM = 'WITHIN_55KM';
  /**
   * User was within 60KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_60KM = 'WITHIN_60KM';
  /**
   * User was within 65KM of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_65KM = 'WITHIN_65KM';
  /**
   * User was beyond 65KM of the location.
   */
  public const DISTANCE_BUCKET_BEYOND_65KM = 'BEYOND_65KM';
  /**
   * User was within 0.7 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_0_7MILES = 'WITHIN_0_7MILES';
  /**
   * User was within 1 mile of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_1MILE = 'WITHIN_1MILE';
  /**
   * User was within 5 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_5MILES = 'WITHIN_5MILES';
  /**
   * User was within 10 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_10MILES = 'WITHIN_10MILES';
  /**
   * User was within 15 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_15MILES = 'WITHIN_15MILES';
  /**
   * User was within 20 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_20MILES = 'WITHIN_20MILES';
  /**
   * User was within 25 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_25MILES = 'WITHIN_25MILES';
  /**
   * User was within 30 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_30MILES = 'WITHIN_30MILES';
  /**
   * User was within 35 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_35MILES = 'WITHIN_35MILES';
  /**
   * User was within 40 miles of the location.
   */
  public const DISTANCE_BUCKET_WITHIN_40MILES = 'WITHIN_40MILES';
  /**
   * User was beyond 40 miles of the location.
   */
  public const DISTANCE_BUCKET_BEYOND_40MILES = 'BEYOND_40MILES';
  /**
   * Output only. Grouping of user distance from location extensions.
   *
   * @var string
   */
  public $distanceBucket;
  /**
   * Output only. True if the DistanceBucket is using the metric system, false
   * otherwise.
   *
   * @var bool
   */
  public $metricSystem;
  /**
   * Output only. The resource name of the distance view. Distance view resource
   * names have the form:
   * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. Grouping of user distance from location extensions.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WITHIN_700M, WITHIN_1KM, WITHIN_5KM,
   * WITHIN_10KM, WITHIN_15KM, WITHIN_20KM, WITHIN_25KM, WITHIN_30KM,
   * WITHIN_35KM, WITHIN_40KM, WITHIN_45KM, WITHIN_50KM, WITHIN_55KM,
   * WITHIN_60KM, WITHIN_65KM, BEYOND_65KM, WITHIN_0_7MILES, WITHIN_1MILE,
   * WITHIN_5MILES, WITHIN_10MILES, WITHIN_15MILES, WITHIN_20MILES,
   * WITHIN_25MILES, WITHIN_30MILES, WITHIN_35MILES, WITHIN_40MILES,
   * BEYOND_40MILES
   *
   * @param self::DISTANCE_BUCKET_* $distanceBucket
   */
  public function setDistanceBucket($distanceBucket)
  {
    $this->distanceBucket = $distanceBucket;
  }
  /**
   * @return self::DISTANCE_BUCKET_*
   */
  public function getDistanceBucket()
  {
    return $this->distanceBucket;
  }
  /**
   * Output only. True if the DistanceBucket is using the metric system, false
   * otherwise.
   *
   * @param bool $metricSystem
   */
  public function setMetricSystem($metricSystem)
  {
    $this->metricSystem = $metricSystem;
  }
  /**
   * @return bool
   */
  public function getMetricSystem()
  {
    return $this->metricSystem;
  }
  /**
   * Output only. The resource name of the distance view. Distance view resource
   * names have the form:
   * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesDistanceView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesDistanceView');
