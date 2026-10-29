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

namespace Google\Service\DeepReview\Resource;

use Google\Service\DeepReview\ListReviewsResponse;
use Google\Service\DeepReview\Operation;
use Google\Service\DeepReview\Review;

/**
 * The "reviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deepreviewService = new Google\Service\DeepReview(...);
 *   $reviews = $deepreviewService->documents_reviews;
 *  </code>
 */
class DocumentsReviews extends \Google\Service\Resource
{
  /**
   * Creates and initiates an asynchronous multi-agent review for a document.
   * Returns a google.longrunning.Operation. When the operation completes, the
   * `response` field contains a `Review` and the `metadata` field contains
   * `CreateReviewMetadata`. (reviews.create)
   *
   * @param string $parent Required. The parent Document resource name where this
   * review will be created.
   * @param Review $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. Idempotency identifier for network
   * retry safety (AIP-155). Must be a valid UUID4 string.
   * @opt_param string reviewId Optional. The ID to use for the review, which will
   * become the final component of the review's resource name. If not provided, a
   * unique server-generated UUID will be assigned.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Review $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Retrieves a specific review execution result. (reviews.get)
   *
   * @param string $name Required. The resource name of the review to retrieve.
   * @param array $optParams Optional parameters.
   * @return Review
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Review::class);
  }
  /**
   * Lists all review execution runs for a document.
   * (reviews.listDocumentsReviews)
   *
   * @param string $parent Required. The parent Document resource name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Custom filter expressions are not
   * currently supported; non-empty values return INVALID_ARGUMENT.
   * @opt_param string orderBy Optional. Custom order_by expressions are not
   * currently supported; non-empty values return INVALID_ARGUMENT.
   * @opt_param int pageSize Optional. The maximum number of reviews to return in
   * a single page. The server may return fewer than this value. If unspecified,
   * at most 50 reviews will be returned. The maximum value is 100; values above
   * 100 will be coerced to 100.
   * @opt_param string pageToken Optional. A page token received from a previous
   * `ListReviews` call.
   * @return ListReviewsResponse
   * @throws \Google\Service\Exception
   */
  public function listDocumentsReviews($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListReviewsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DocumentsReviews::class, 'Google_Service_DeepReview_Resource_DocumentsReviews');
