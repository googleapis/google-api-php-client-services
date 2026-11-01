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

namespace Google\Service\Chromewebstore\Resource;

use Google\Service\Chromewebstore\CancelSubmissionRequest;
use Google\Service\Chromewebstore\CancelSubmissionResponse;
use Google\Service\Chromewebstore\FetchItemReviewsResponse;
use Google\Service\Chromewebstore\FetchItemStatusResponse;
use Google\Service\Chromewebstore\PublishItemRequest;
use Google\Service\Chromewebstore\PublishItemResponse;
use Google\Service\Chromewebstore\QueryItemMetricsResponse;
use Google\Service\Chromewebstore\RatingSummary;
use Google\Service\Chromewebstore\RollbackItemRequest;
use Google\Service\Chromewebstore\RollbackItemResponse;
use Google\Service\Chromewebstore\SetPublishedDeployPercentageRequest;
use Google\Service\Chromewebstore\SetPublishedDeployPercentageResponse;

/**
 * The "items" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromewebstoreService = new Google\Service\Chromewebstore(...);
 *   $items = $chromewebstoreService->publishers_items;
 *  </code>
 */
class PublishersItems extends \Google\Service\Resource
{
  /**
   * Cancel the current active submission of an item if present. This can be used
   * to cancel the review of a pending submission. (items.cancelSubmission)
   *
   * @param string $name Required. Name of the item to cancel the submission of in
   * the form `publishers/{publisherId}/items/{itemId}`
   * @param CancelSubmissionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CancelSubmissionResponse
   * @throws \Google\Service\Exception
   */
  public function cancelSubmission($name, CancelSubmissionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('cancelSubmission', [$params], CancelSubmissionResponse::class);
  }
  /**
   * Fetch user reviews for an item. (items.fetchReviews)
   *
   * @param string $name Required. The item resource name whose reviews are being
   * fetched. Format: publishers/{publisher_id}/items/{item_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter to apply to the reviews. Only
   * equality comparison on rating is supported, e.g. `rating = 5`.
   * @opt_param string orderBy Optional. An optional comma-separated list of
   * fields by which to sort the results. The default sort order is ascending
   * (`asc`). Supported fields are: - `rating`: Supported orders are `asc`
   * (default) and `desc`. - `create_time`: Only `desc` (most recent first) is
   * supported; `desc` must be explicitly specified since the default is `asc`.
   * Example: `rating desc`, `create_time desc`, or `rating desc, create_time
   * desc`.
   * @opt_param int pageSize Optional. The maximum number of reviews to return.
   * The service may return fewer than this value. If unspecified, at most 50
   * reviews will be returned. The maximum value is 200; values above 200 will be
   * coerced to 200.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `FetchItemReviews` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `FetchItemReviews` must match
   * the call that provided the page token.
   * @return FetchItemReviewsResponse
   * @throws \Google\Service\Exception
   */
  public function fetchReviews($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchReviews', [$params], FetchItemReviewsResponse::class);
  }
  /**
   * Fetch the status of an item. (items.fetchStatus)
   *
   * @param string $name Required. Name of the item to retrieve the status of in
   * the form `publishers/{publisherId}/items/{itemId}`
   * @param array $optParams Optional parameters.
   * @return FetchItemStatusResponse
   * @throws \Google\Service\Exception
   */
  public function fetchStatus($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchStatus', [$params], FetchItemStatusResponse::class);
  }
  /**
   * Gets the RatingSummary for the publishers item. (items.getRatingSummary)
   *
   * @param string $name Required. The name of the rating summary to retrieve.
   * Format: publishers/{publisher}/items/{item}/ratingSummary
   * @param array $optParams Optional parameters.
   * @return RatingSummary
   * @throws \Google\Service\Exception
   */
  public function getRatingSummary($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getRatingSummary', [$params], RatingSummary::class);
  }
  /**
   * Submit the item to be published in the store. The item will be submitted for
   * review unless `skip_review` is set to true, or the item is staged from a
   * previous submission with `publish_type` set to `STAGED_PUBLISH`.
   * (items.publish)
   *
   * @param string $name Required. Name of the item in the form
   * `publishers/{publisherId}/items/{itemId}`
   * @param PublishItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return PublishItemResponse
   * @throws \Google\Service\Exception
   */
  public function publish($name, PublishItemRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('publish', [$params], PublishItemResponse::class);
  }
  /**
   * Query the metrics for an item. (items.queryMetrics)
   *
   * @param string $name Required. The name of the item to query the metrics for.
   * Format: publishers/{publisher}/items/{item}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dimensions Optional. Dimensions to slice the metrics by. At
   * most one dimension can be specified. **Supported dimensions:** - os: The
   * operating system of the user. - app-version: The version of the item. -
   * country: The country of the user. - install-source: The source of the
   * install. - install-type: The type of install (from webstore, inline, or
   * other). - language: The language of the user. - enabled: If the item is
   * enabled or disabled. - utm-campaign: The UTM campaign of the user. - utm-
   * content: The UTM content of the user. - utm-medium: The UTM medium of the
   * user. - utm-source: The UTM source of the user. - utm-term: The UTM term of
   * the user.
   * @opt_param string metrics Required. The metrics to query the metric set for.
   * **Supported metrics:** - installs: Count of item installs. - installs-7d:
   * Count of item installs in the last 7 days. - uninstalls: Count of item
   * uninstalls. - users: Count of daily active users of the item. - users-7d:
   * Count of 7-day active users of the item. - impressions: Count of item
   * impressions across the entire store front. - page-views: Count of individual
   * views of the item's detail page.
   * @opt_param int pageSize Optional. The maximum number of rows to return. If
   * unspecified, at most 100 rows will be returned. The maximum value is 1000;
   * Values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * call. Provide this to retrieve the subsequent page. When paginating, all
   * other parameters provided to the request must match the call that provided
   * the page token.
   * @opt_param int timeSpec.firstDate.day Day of a month. Must be from 1 to 31
   * and valid for the year and month, or 0 to specify a year by itself or a year
   * and month where the day isn't significant.
   * @opt_param int timeSpec.firstDate.month Month of a year. Must be from 1 to
   * 12, or 0 to specify a year without a month and day.
   * @opt_param int timeSpec.firstDate.year Year of the date. Must be from 1 to
   * 9999, or 0 to specify a date without a year.
   * @opt_param int timeSpec.lastDate.day Day of a month. Must be from 1 to 31 and
   * valid for the year and month, or 0 to specify a year by itself or a year and
   * month where the day isn't significant.
   * @opt_param int timeSpec.lastDate.month Month of a year. Must be from 1 to 12,
   * or 0 to specify a year without a month and day.
   * @opt_param int timeSpec.lastDate.year Year of the date. Must be from 1 to
   * 9999, or 0 to specify a date without a year.
   * @return QueryItemMetricsResponse
   * @throws \Google\Service\Exception
   */
  public function queryMetrics($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('queryMetrics', [$params], QueryItemMetricsResponse::class);
  }
  /**
   * Rolls back an item's published CRX package to a specified previously
   * published CRX package and publishes it to all users. (items.rollback)
   *
   * @param string $name Required. Name of the item to rollback in the form
   * `publishers/{publisherId}/items/{itemId}`
   * @param RollbackItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RollbackItemResponse
   * @throws \Google\Service\Exception
   */
  public function rollback($name, RollbackItemRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rollback', [$params], RollbackItemResponse::class);
  }
  /**
   * Set a higher target deploy percentage for the item's published revision. This
   * will be updated without the item being submitted for review. This is only
   * available to items with over 10,000 seven-day active users.
   * (items.setPublishedDeployPercentage)
   *
   * @param string $name Required. Name of the item to update the published
   * revision of in the form `publishers/{publisherId}/items/{itemId}`
   * @param SetPublishedDeployPercentageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return SetPublishedDeployPercentageResponse
   * @throws \Google\Service\Exception
   */
  public function setPublishedDeployPercentage($name, SetPublishedDeployPercentageRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setPublishedDeployPercentage', [$params], SetPublishedDeployPercentageResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublishersItems::class, 'Google_Service_Chromewebstore_Resource_PublishersItems');
