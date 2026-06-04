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

class GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics extends \Google\Model
{
  /**
   * The fraction (from 0 to 1 inclusive) of the specific audience that match
   * the attribute.
   *
   * @var 
   */
  public $audienceShare;
  /**
   * The fraction (from 0 to 1 inclusive) of the baseline audience that match
   * the attribute.
   *
   * @var 
   */
  public $baselineAudienceShare;
  /**
   * The ratio of audience_share to baseline_audience_share, or zero if this
   * ratio is undefined or is not meaningful.
   *
   * @var 
   */
  public $index;
  /**
   * A relevance score from 0 to 1 inclusive.
   *
   * @var 
   */
  public $score;

  public function setAudienceShare($audienceShare)
  {
    $this->audienceShare = $audienceShare;
  }
  public function getAudienceShare()
  {
    return $this->audienceShare;
  }
  public function setBaselineAudienceShare($baselineAudienceShare)
  {
    $this->baselineAudienceShare = $baselineAudienceShare;
  }
  public function getBaselineAudienceShare()
  {
    return $this->baselineAudienceShare;
  }
  public function setIndex($index)
  {
    $this->index = $index;
  }
  public function getIndex()
  {
    return $this->index;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAudienceCompositionMetrics');
