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

namespace Google\Service\GoogleHealthAPI\Resource;

use Google\Service\GoogleHealthAPI\CreateSubscriptionPayload;
use Google\Service\GoogleHealthAPI\HealthEmpty;
use Google\Service\GoogleHealthAPI\ListSubscriptionsResponse;
use Google\Service\GoogleHealthAPI\Subscription;

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $healthService = new Google\Service\GoogleHealthAPI(...);
 *   $subscriptions = $healthService->projects_subscribers_subscriptions;
 *  </code>
 */
class ProjectsSubscribersSubscriptions extends \Google\Service\Resource
{
  /**
   * Creates a subscription for a specific user to a specific subscriber. This
   * method requires the subscriber to have a `SubscriptionCreatePolicy` set to
   * `MANUAL` for the given data types. (subscriptions.create)
   *
   * @param string $parent Required. The parent subscriber. Format:
   * projects/{project}/subscribers/{subscriber} The {subscriber} ID is user-
   * settable (4-36 characters, matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) if
   * provided during creation, or system-generated otherwise.
   * @param CreateSubscriptionPayload $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string subscriptionId Optional. The {subscription_id} is user-
   * settable (4-36 chars, matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) or system-
   * generated otherwise. If provided, the ID must be unique within the parent
   * subscriber.
   * @return Subscription
   * @throws \Google\Service\Exception
   */
  public function create($parent, CreateSubscriptionPayload $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Subscription::class);
  }
  /**
   * Deletes a specific user subscription, stopping notifications for this user to
   * this subscriber. (subscriptions.delete)
   *
   * @param string $name Required. The resource name of the subscription to
   * delete. Format:
   * `projects/{project}/subscribers/{subscriber}/subscriptions/{subscription}`
   * Example: `projects/my-project/subscribers/my-subscriber-123/subscriptions/my-
   * subscription-456` The {subscriber} ID is user-settable (4-36 characters,
   * matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) if provided during creation, or
   * system-generated otherwise. The {subscription} ID is user-settable (4-36
   * characters, matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) or system-generated if
   * not provided during creation.
   * @param array $optParams Optional parameters.
   * @return HealthEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], HealthEmpty::class);
  }
  /**
   * Lists all active subscriptions for a given subscriber. This can be filtered,
   * for example, by user or data type.
   * (subscriptions.listProjectsSubscribersSubscriptions)
   *
   * @param string $parent Required. The parent subscriber. Format:
   * projects/{project}/subscribers/{subscriber} The {subscriber} ID is user-
   * settable (4-36 characters, matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) if
   * provided during creation, or system-generated otherwise.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter to apply to the list of
   * subscriptions. The filter syntax is described in https://google.aip.dev/160.
   * The filter can be applied to the following fields: - `user` - `data_type` The
   * `user` identifier (e.g., `user1` in `users/user1`) refers to the public
   * `health_user_id` Example: user = "users/user1" Example: user = "users/user1"
   * OR user = "users/user2" Example: user = "users/user1" AND (data_type =
   * "sleep" OR data_type = "weight")
   * @opt_param int pageSize Optional. The maximum number of subscriptions to
   * return. The service may return fewer than this value. If unspecified, at most
   * 50 subscriptions will be returned. The maximum value is 1000; values above
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListSubscriptions` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListSubscriptions` must match
   * the call that provided the page token.
   * @return ListSubscriptionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsSubscribersSubscriptions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSubscriptionsResponse::class);
  }
  /**
   * Updates the data types for an existing user subscription.
   * (subscriptions.patch)
   *
   * @param string $name Identifier. The resource name of the Subscription.
   * Format:
   * `projects/{project}/subscribers/{subscriber}/subscriptions/{subscription}`
   * Example: `projects/my-project/subscribers/my-subscriber-123/subscriptions/my-
   * subscription-456` The {project} ID is mandatory (6-30 characters, matching
   * /a-z{6,30}/) The {subscriber} ID is user-settable (4-36 characters, matching
   * /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) if provided during creation, or system-
   * generated otherwise. The {subscription} ID is user-settable (4-36 chars,
   * matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) or system-generated otherwise.
   * @param Subscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return Subscription
   * @throws \Google\Service\Exception
   */
  public function patch($name, Subscription $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Subscription::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsSubscribersSubscriptions::class, 'Google_Service_GoogleHealthAPI_Resource_ProjectsSubscribersSubscriptions');
