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

class GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics extends \Google\Model
{
  /**
   * Reference audience size matching the considered targeting for Census.
   *
   * @var string
   */
  public $censusAudienceSize;
  /**
   * Reference audience size matching the considered targeting for YouTube.
   *
   * @var string
   */
  public $youtubeAudienceSize;

  /**
   * Reference audience size matching the considered targeting for Census.
   *
   * @param string $censusAudienceSize
   */
  public function setCensusAudienceSize($censusAudienceSize)
  {
    $this->censusAudienceSize = $censusAudienceSize;
  }
  /**
   * @return string
   */
  public function getCensusAudienceSize()
  {
    return $this->censusAudienceSize;
  }
  /**
   * Reference audience size matching the considered targeting for YouTube.
   *
   * @param string $youtubeAudienceSize
   */
  public function setYoutubeAudienceSize($youtubeAudienceSize)
  {
    $this->youtubeAudienceSize = $youtubeAudienceSize;
  }
  /**
   * @return string
   */
  public function getYoutubeAudienceSize()
  {
    return $this->youtubeAudienceSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesOnTargetAudienceMetrics');
