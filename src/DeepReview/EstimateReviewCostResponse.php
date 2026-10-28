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

namespace Google\Service\DeepReview;

class EstimateReviewCostResponse extends \Google\Model
{
  protected $highCostType = Money::class;
  protected $highCostDataType = '';
  protected $lowCostType = Money::class;
  protected $lowCostDataType = '';
  protected $medianCostType = Money::class;
  protected $medianCostDataType = '';
  /**
   * Number of past reviews the estimate is based on.
   *
   * @var int
   */
  public $pastReviewCount;

  /**
   * The 95th percentile of what comparable past reviews would cost for this
   * document.
   *
   * @param Money $highCost
   */
  public function setHighCost(Money $highCost)
  {
    $this->highCost = $highCost;
  }
  /**
   * @return Money
   */
  public function getHighCost()
  {
    return $this->highCost;
  }
  /**
   * The 20th percentile of what comparable past reviews would cost for this
   * document.
   *
   * @param Money $lowCost
   */
  public function setLowCost(Money $lowCost)
  {
    $this->lowCost = $lowCost;
  }
  /**
   * @return Money
   */
  public function getLowCost()
  {
    return $this->lowCost;
  }
  /**
   * The median of what comparable past reviews would cost for this document.
   *
   * @param Money $medianCost
   */
  public function setMedianCost(Money $medianCost)
  {
    $this->medianCost = $medianCost;
  }
  /**
   * @return Money
   */
  public function getMedianCost()
  {
    return $this->medianCost;
  }
  /**
   * Number of past reviews the estimate is based on.
   *
   * @param int $pastReviewCount
   */
  public function setPastReviewCount($pastReviewCount)
  {
    $this->pastReviewCount = $pastReviewCount;
  }
  /**
   * @return int
   */
  public function getPastReviewCount()
  {
    return $this->pastReviewCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EstimateReviewCostResponse::class, 'Google_Service_DeepReview_EstimateReviewCostResponse');
