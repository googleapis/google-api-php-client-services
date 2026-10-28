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

class EstimateReviewCostRequest extends \Google\Model
{
  protected $reviewType = Review::class;
  protected $reviewDataType = '';

  /**
   * Required. The review to estimate, as it would be passed to `CreateReview`.
   * Only its `run_config` is read, and `run_config.gemini_api_key` is ignored.
   *
   * @param Review $review
   */
  public function setReview(Review $review)
  {
    $this->review = $review;
  }
  /**
   * @return Review
   */
  public function getReview()
  {
    return $this->review;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EstimateReviewCostRequest::class, 'Google_Service_DeepReview_EstimateReviewCostRequest');
