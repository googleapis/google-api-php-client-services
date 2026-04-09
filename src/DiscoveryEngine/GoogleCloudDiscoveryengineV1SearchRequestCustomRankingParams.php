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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1SearchRequestCustomRankingParams extends \Google\Collection
{
  protected $collection_key = 'expressionsToPrecompute';
  /**
   * Optional. A list of ranking expressions (see `ranking_expression` for the
   * syntax documentation) to evaluate. The evaluation results will be returned
   * in `SearchResponse.SearchResult.rank_signals.precomputed_expression_values`
   * field.
   *
   * @var string[]
   */
  public $expressionsToPrecompute;

  /**
   * Optional. A list of ranking expressions (see `ranking_expression` for the
   * syntax documentation) to evaluate. The evaluation results will be returned
   * in `SearchResponse.SearchResult.rank_signals.precomputed_expression_values`
   * field.
   *
   * @param string[] $expressionsToPrecompute
   */
  public function setExpressionsToPrecompute($expressionsToPrecompute)
  {
    $this->expressionsToPrecompute = $expressionsToPrecompute;
  }
  /**
   * @return string[]
   */
  public function getExpressionsToPrecompute()
  {
    return $this->expressionsToPrecompute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchRequestCustomRankingParams::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchRequestCustomRankingParams');
