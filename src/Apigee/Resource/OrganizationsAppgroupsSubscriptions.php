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

namespace Google\Service\Apigee\Resource;

use Google\Service\Apigee\GoogleCloudApigeeV1AppGroupSubscription;
use Google\Service\Apigee\GoogleCloudApigeeV1ExpireAppGroupSubscriptionRequest;
use Google\Service\Apigee\GoogleCloudApigeeV1ListAppGroupSubscriptionsResponse;

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google\Service\Apigee(...);
 *   $subscriptions = $apigeeService->organizations_appgroups_subscriptions;
 *  </code>
 */
class OrganizationsAppgroupsSubscriptions extends \Google\Service\Resource
{
  /**
   * Creates a subscription to an API product.  (subscriptions.create)
   *
   * @param string $parent Required. Name of the appgroup that is purchasing a
   * subscription to the API product. Use the following structure in your request:
   * `organizations/{org}/appgroups/{appgroup}`
   * @param GoogleCloudApigeeV1AppGroupSubscription $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1AppGroupSubscription
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudApigeeV1AppGroupSubscription $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudApigeeV1AppGroupSubscription::class);
  }
  /**
   * Expires an API product subscription immediately. (subscriptions.expire)
   *
   * @param string $name Required. Name of the API product subscription. Use the
   * following structure in your request:
   * `organizations/{org}/appgroups/{appgroup}/subscriptions/{subscription}`
   * @param GoogleCloudApigeeV1ExpireAppGroupSubscriptionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1AppGroupSubscription
   * @throws \Google\Service\Exception
   */
  public function expire($name, GoogleCloudApigeeV1ExpireAppGroupSubscriptionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('expire', [$params], GoogleCloudApigeeV1AppGroupSubscription::class);
  }
  /**
   * Get an api product subscription for an appgroup. (subscriptions.get)
   *
   * @param string $name Required. The name of the AppGroupSubscription to
   * retrieve. Format:
   * `organizations/{org}/appgroups/{appgroup}/subscriptions/{subscription}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApigeeV1AppGroupSubscription
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudApigeeV1AppGroupSubscription::class);
  }
  /**
   * List all api product subscriptions for an appgroup.
   * (subscriptions.listOrganizationsAppgroupsSubscriptions)
   *
   * @param string $parent Required. Name of the appgroup. Use the following
   * structure in your request: `organizations/{org}/appgroups/{appgroup}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of subscriptions to
   * return. The service may return fewer than this value. If unspecified, at most
   * 100 subscriptions will be returned. The maximum value is 1000; values above
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAppGroupSubscriptions` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `ListAppGroupSubscriptions` must match the call that provided the page token.
   * @return GoogleCloudApigeeV1ListAppGroupSubscriptionsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsAppgroupsSubscriptions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudApigeeV1ListAppGroupSubscriptionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsAppgroupsSubscriptions::class, 'Google_Service_Apigee_Resource_OrganizationsAppgroupsSubscriptions');
