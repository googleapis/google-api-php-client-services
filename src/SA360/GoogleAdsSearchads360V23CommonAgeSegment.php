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

class GoogleAdsSearchads360V23CommonAgeSegment extends \Google\Model
{
  /**
   * Maximum age to include. A maximum age need not be specified. If specified,
   * max_age must be greater than min_age, and allowed values are 24, 34, 44,
   * 54, and 64.
   *
   * @var int
   */
  public $maxAge;
  /**
   * Minimum age to include. A minimum age must be specified and must be at
   * least 18. Allowed values are 18, 25, 35, 45, 55, and 65.
   *
   * @var int
   */
  public $minAge;

  /**
   * Maximum age to include. A maximum age need not be specified. If specified,
   * max_age must be greater than min_age, and allowed values are 24, 34, 44,
   * 54, and 64.
   *
   * @param int $maxAge
   */
  public function setMaxAge($maxAge)
  {
    $this->maxAge = $maxAge;
  }
  /**
   * @return int
   */
  public function getMaxAge()
  {
    return $this->maxAge;
  }
  /**
   * Minimum age to include. A minimum age must be specified and must be at
   * least 18. Allowed values are 18, 25, 35, 45, 55, and 65.
   *
   * @param int $minAge
   */
  public function setMinAge($minAge)
  {
    $this->minAge = $minAge;
  }
  /**
   * @return int
   */
  public function getMinAge()
  {
    return $this->minAge;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAgeSegment::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAgeSegment');
