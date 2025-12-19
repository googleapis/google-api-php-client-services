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

class GoogleCloudDiscoveryengineV1betaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec extends \Google\Model
{
  /**
   * Default value. In this case, server behavior defaults to Google defined
   * threshold.
   */
  public const RELEVANCE_THRESHOLD_RELEVANCE_THRESHOLD_UNSPECIFIED = 'RELEVANCE_THRESHOLD_UNSPECIFIED';
  /**
   * Lowest relevance threshold.
   */
  public const RELEVANCE_THRESHOLD_LOWEST = 'LOWEST';
  /**
   * Low relevance threshold.
   */
  public const RELEVANCE_THRESHOLD_LOW = 'LOW';
  /**
   * Medium relevance threshold.
   */
  public const RELEVANCE_THRESHOLD_MEDIUM = 'MEDIUM';
  /**
   * High relevance threshold.
   */
  public const RELEVANCE_THRESHOLD_HIGH = 'HIGH';
  /**
   * Pre-defined relevance threshold for the sub-search.
   *
   * @var string
   */
  public $relevanceThreshold;
  /**
   * Custom relevance threshold for the sub-search. The value must be in [0.0,
   * 1.0].
   *
   * @var float
   */
  public $semanticRelevanceThreshold;

  /**
   * Pre-defined relevance threshold for the sub-search.
   *
   * Accepted values: RELEVANCE_THRESHOLD_UNSPECIFIED, LOWEST, LOW, MEDIUM, HIGH
   *
   * @param self::RELEVANCE_THRESHOLD_* $relevanceThreshold
   */
  public function setRelevanceThreshold($relevanceThreshold)
  {
    $this->relevanceThreshold = $relevanceThreshold;
  }
  /**
   * @return self::RELEVANCE_THRESHOLD_*
   */
  public function getRelevanceThreshold()
  {
    return $this->relevanceThreshold;
  }
  /**
   * Custom relevance threshold for the sub-search. The value must be in [0.0,
   * 1.0].
   *
   * @param float $semanticRelevanceThreshold
   */
  public function setSemanticRelevanceThreshold($semanticRelevanceThreshold)
  {
    $this->semanticRelevanceThreshold = $semanticRelevanceThreshold;
  }
  /**
   * @return float
   */
  public function getSemanticRelevanceThreshold()
  {
    return $this->semanticRelevanceThreshold;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaSearchRequestRelevanceFilterSpecRelevanceThresholdSpec');
