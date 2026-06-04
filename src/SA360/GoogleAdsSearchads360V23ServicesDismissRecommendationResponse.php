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

class GoogleAdsSearchads360V23ServicesDismissRecommendationResponse extends \Google\Collection
{
  protected $collection_key = 'results';
  protected $partialFailureErrorType = GoogleRpcStatus::class;
  protected $partialFailureErrorDataType = '';
  protected $resultsType = GoogleAdsSearchads360V23ServicesDismissRecommendationResponseDismissRecommendationResult::class;
  protected $resultsDataType = 'array';

  /**
   * Errors that pertain to operation failures in the partial failure mode.
   * Returned only when partial_failure = true and all errors occur inside the
   * operations. If any errors occur outside the operations (for example, auth
   * errors) we return the RPC level error.
   *
   * @param GoogleRpcStatus $partialFailureError
   */
  public function setPartialFailureError(GoogleRpcStatus $partialFailureError)
  {
    $this->partialFailureError = $partialFailureError;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getPartialFailureError()
  {
    return $this->partialFailureError;
  }
  /**
   * Results of operations to dismiss recommendations.
   *
   * @param GoogleAdsSearchads360V23ServicesDismissRecommendationResponseDismissRecommendationResult[] $results
   */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesDismissRecommendationResponseDismissRecommendationResult[]
   */
  public function getResults()
  {
    return $this->results;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesDismissRecommendationResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesDismissRecommendationResponse');
