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
  /**
   * Output only. Estimated size of the document in tokens (matching the stored
   * `Document.estimated_tokens` used by submission gates when available).
   *
   * @var string
   */
  public $documentTokenCount;
  /**
   * Output only. Planned PAT workflow topology model call budget for the
   * configured depth and enabled modules (including dynamic prompt-writer calls
   * when enabled and 3 progress slots for citation checking; actual citation
   * verification runs additional per-reference lookups).
   *
   * @var int
   */
  public $estimatedModelCalls;
  /**
   * Output only. Whether explicit context caching applies on Paid Tier Gemini
   * API keys for the configured model and document size, and is reflected in
   * the cost estimate (false when post-launch BYOK analytics show explicit
   * caching is falling back inline; Free-Tier keys do not create explicit
   * caches).
   *
   * @var bool
   */
  public $explicitCachingSupported;
  protected $highCostType = Money::class;
  protected $highCostDataType = '';
  protected $lowCostType = Money::class;
  protected $lowCostDataType = '';
  protected $medianCostType = Money::class;
  protected $medianCostDataType = '';
  protected $paidTier1EstimatedDurationType = DurationRange::class;
  protected $paidTier1EstimatedDurationDataType = '';
  protected $paidTier2PlusEstimatedDurationType = DurationRange::class;
  protected $paidTier2PlusEstimatedDurationDataType = '';
  /**
   * Number of past reviews the estimate is based on.
   *
   * @var int
   */
  public $pastReviewCount;

  /**
   * Output only. Estimated size of the document in tokens (matching the stored
   * `Document.estimated_tokens` used by submission gates when available).
   *
   * @param string $documentTokenCount
   */
  public function setDocumentTokenCount($documentTokenCount)
  {
    $this->documentTokenCount = $documentTokenCount;
  }
  /**
   * @return string
   */
  public function getDocumentTokenCount()
  {
    return $this->documentTokenCount;
  }
  /**
   * Output only. Planned PAT workflow topology model call budget for the
   * configured depth and enabled modules (including dynamic prompt-writer calls
   * when enabled and 3 progress slots for citation checking; actual citation
   * verification runs additional per-reference lookups).
   *
   * @param int $estimatedModelCalls
   */
  public function setEstimatedModelCalls($estimatedModelCalls)
  {
    $this->estimatedModelCalls = $estimatedModelCalls;
  }
  /**
   * @return int
   */
  public function getEstimatedModelCalls()
  {
    return $this->estimatedModelCalls;
  }
  /**
   * Output only. Whether explicit context caching applies on Paid Tier Gemini
   * API keys for the configured model and document size, and is reflected in
   * the cost estimate (false when post-launch BYOK analytics show explicit
   * caching is falling back inline; Free-Tier keys do not create explicit
   * caches).
   *
   * @param bool $explicitCachingSupported
   */
  public function setExplicitCachingSupported($explicitCachingSupported)
  {
    $this->explicitCachingSupported = $explicitCachingSupported;
  }
  /**
   * @return bool
   */
  public function getExplicitCachingSupported()
  {
    return $this->explicitCachingSupported;
  }
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
   * Output only. Estimated wall-clock turnaround range on a Paid Tier 1 Gemini
   * API key (bounded by Paid Tier 1's 1M-2M tokens/min ceilings and retry/spend
   * throttle backoff; single-attempt worker runs cap at 55 minutes until multi-
   * slice continuations are enabled).
   *
   * @param DurationRange $paidTier1EstimatedDuration
   */
  public function setPaidTier1EstimatedDuration(DurationRange $paidTier1EstimatedDuration)
  {
    $this->paidTier1EstimatedDuration = $paidTier1EstimatedDuration;
  }
  /**
   * @return DurationRange
   */
  public function getPaidTier1EstimatedDuration()
  {
    return $this->paidTier1EstimatedDuration;
  }
  /**
   * Output only. Estimated wall-clock turnaround range on a Paid Tier 2 or Paid
   * Tier 3 Gemini API key (unconstrained up to worker concurrency).
   *
   * @param DurationRange $paidTier2PlusEstimatedDuration
   */
  public function setPaidTier2PlusEstimatedDuration(DurationRange $paidTier2PlusEstimatedDuration)
  {
    $this->paidTier2PlusEstimatedDuration = $paidTier2PlusEstimatedDuration;
  }
  /**
   * @return DurationRange
   */
  public function getPaidTier2PlusEstimatedDuration()
  {
    return $this->paidTier2PlusEstimatedDuration;
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
