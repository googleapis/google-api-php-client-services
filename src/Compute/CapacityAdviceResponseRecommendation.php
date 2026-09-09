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

namespace Google\Service\Compute;

class CapacityAdviceResponseRecommendation extends \Google\Collection
{
  protected $collection_key = 'shards';
  protected $scoresType = CapacityAdviceResponseRecommendationScores::class;
  protected $scoresDataType = '';
  protected $shardsType = CapacityAdviceResponseRecommendationShard::class;
  protected $shardsDataType = 'array';

  /**
   * Scores for the recommendation.
   *
   * @param CapacityAdviceResponseRecommendationScores $scores
   */
  public function setScores(CapacityAdviceResponseRecommendationScores $scores)
  {
    $this->scores = $scores;
  }
  /**
   * @return CapacityAdviceResponseRecommendationScores
   */
  public function getScores()
  {
    return $this->scores;
  }
  /**
   * Shards represent blocks of uniform capacity in recommendations.
   *
   * @param CapacityAdviceResponseRecommendationShard[] $shards
   */
  public function setShards($shards)
  {
    $this->shards = $shards;
  }
  /**
   * @return CapacityAdviceResponseRecommendationShard[]
   */
  public function getShards()
  {
    return $this->shards;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceResponseRecommendation::class, 'Google_Service_Compute_CapacityAdviceResponseRecommendation');
