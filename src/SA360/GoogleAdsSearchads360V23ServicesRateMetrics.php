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

class GoogleAdsSearchads360V23ServicesRateMetrics extends \Google\Model
{
  /**
   * The percentage of time when your ad appeared on an Active View enabled site
   * (measurable impressions) and was viewable (viewable impressions).
   *
   * @var 
   */
  public $activeViewViewability;
  /**
   * Average cost-per-thousand viewable impressions.
   *
   * @var 
   */
  public $averageActiveViewCpm;
  /**
   * The average cost-per-click (CPC) is defined by the total cost of all clicks
   * divided by the total number of clicks received.
   *
   * @var 
   */
  public $averageCpc;
  /**
   * The average cost-per-engagement (CPE) is defined by the total cost of all
   * ad engagements divided by the total number of ad engagements.
   *
   * @var 
   */
  public $averageCpe;
  /**
   * The average cost-per-interaction (CPI) is defined by the total cost of all
   * interactions divided by the total number of interactions.
   *
   * @var 
   */
  public $averageCpi;
  /**
   * Average cost-per-thousand impressions (CPM).
   *
   * @var 
   */
  public $averageCpm;
  /**
   * The number of clicks your ad receives (Clicks) divided by the number of
   * times your ad is shown (Impressions).
   *
   * @var 
   */
  public $clickThroughRate;
  /**
   * How often people engage with your ad after it's shown to them. This is the
   * number of ad expansions divided by the number of times your ad is shown.
   *
   * @var 
   */
  public $engagementRate;
  /**
   * How often people interact with your ad after it is shown to them. This is
   * the number of interactions divided by the number of times your ad is shown.
   *
   * @var 
   */
  public $interactionRate;
  /**
   * The average TrueView cost-per-view (CPV) is defined by the total cost of
   * all ad TrueView views divided by the number of TrueView views.
   *
   * @var 
   */
  public $trueviewAverageCpv;
  /**
   * Number of completed TrueView views divided by the number of impressions.
   *
   * @var 
   */
  public $trueviewViewRate;
  /**
   * Percentage of impressions where the viewer watched all of your video.
   *
   * @var 
   */
  public $videoCompletionP100Rate;
  /**
   * Percentage of impressions where the viewer watched 25% of your video.
   *
   * @var 
   */
  public $videoCompletionP25Rate;
  /**
   * Percentage of impressions where the viewer watched 50% of your video.
   *
   * @var 
   */
  public $videoCompletionP50Rate;
  /**
   * Percentage of impressions where the viewer watched 75% of your video.
   *
   * @var 
   */
  public $videoCompletionP75Rate;

  public function setActiveViewViewability($activeViewViewability)
  {
    $this->activeViewViewability = $activeViewViewability;
  }
  public function getActiveViewViewability()
  {
    return $this->activeViewViewability;
  }
  public function setAverageActiveViewCpm($averageActiveViewCpm)
  {
    $this->averageActiveViewCpm = $averageActiveViewCpm;
  }
  public function getAverageActiveViewCpm()
  {
    return $this->averageActiveViewCpm;
  }
  public function setAverageCpc($averageCpc)
  {
    $this->averageCpc = $averageCpc;
  }
  public function getAverageCpc()
  {
    return $this->averageCpc;
  }
  public function setAverageCpe($averageCpe)
  {
    $this->averageCpe = $averageCpe;
  }
  public function getAverageCpe()
  {
    return $this->averageCpe;
  }
  public function setAverageCpi($averageCpi)
  {
    $this->averageCpi = $averageCpi;
  }
  public function getAverageCpi()
  {
    return $this->averageCpi;
  }
  public function setAverageCpm($averageCpm)
  {
    $this->averageCpm = $averageCpm;
  }
  public function getAverageCpm()
  {
    return $this->averageCpm;
  }
  public function setClickThroughRate($clickThroughRate)
  {
    $this->clickThroughRate = $clickThroughRate;
  }
  public function getClickThroughRate()
  {
    return $this->clickThroughRate;
  }
  public function setEngagementRate($engagementRate)
  {
    $this->engagementRate = $engagementRate;
  }
  public function getEngagementRate()
  {
    return $this->engagementRate;
  }
  public function setInteractionRate($interactionRate)
  {
    $this->interactionRate = $interactionRate;
  }
  public function getInteractionRate()
  {
    return $this->interactionRate;
  }
  public function setTrueviewAverageCpv($trueviewAverageCpv)
  {
    $this->trueviewAverageCpv = $trueviewAverageCpv;
  }
  public function getTrueviewAverageCpv()
  {
    return $this->trueviewAverageCpv;
  }
  public function setTrueviewViewRate($trueviewViewRate)
  {
    $this->trueviewViewRate = $trueviewViewRate;
  }
  public function getTrueviewViewRate()
  {
    return $this->trueviewViewRate;
  }
  public function setVideoCompletionP100Rate($videoCompletionP100Rate)
  {
    $this->videoCompletionP100Rate = $videoCompletionP100Rate;
  }
  public function getVideoCompletionP100Rate()
  {
    return $this->videoCompletionP100Rate;
  }
  public function setVideoCompletionP25Rate($videoCompletionP25Rate)
  {
    $this->videoCompletionP25Rate = $videoCompletionP25Rate;
  }
  public function getVideoCompletionP25Rate()
  {
    return $this->videoCompletionP25Rate;
  }
  public function setVideoCompletionP50Rate($videoCompletionP50Rate)
  {
    $this->videoCompletionP50Rate = $videoCompletionP50Rate;
  }
  public function getVideoCompletionP50Rate()
  {
    return $this->videoCompletionP50Rate;
  }
  public function setVideoCompletionP75Rate($videoCompletionP75Rate)
  {
    $this->videoCompletionP75Rate = $videoCompletionP75Rate;
  }
  public function getVideoCompletionP75Rate()
  {
    return $this->videoCompletionP75Rate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesRateMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesRateMetrics');
