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

namespace Google\Service\GoogleHealthAPI;

class SubscriberConfig extends \Google\Collection
{
  /**
   * Represents an unspecified policy.
   */
  public const SUBSCRIPTION_CREATE_POLICY_SUBSCRIPTION_CREATE_POLICY_UNSPECIFIED = 'SUBSCRIPTION_CREATE_POLICY_UNSPECIFIED';
  /**
   * When using `AUTOMATIC`, individual subscriptions are not created or stored.
   * Instead, eligibility for notifications is computed dynamically. When a data
   * update occurs for a given data type, notifications are sent to all
   * subscribers with an `AUTOMATIC` policy for that data type, provided the
   * user has granted the necessary consents. This means you do not need to call
   * `CreateSubscription` for each user; notifications are managed automatically
   * based on user consents. As `Subscription` resources are not stored, they
   * cannot be retrieved or managed through `GetSubscription`,
   * `ListSubscriptions`, `UpdateSubscription`, or `DeleteSubscription`.
   */
  public const SUBSCRIPTION_CREATE_POLICY_AUTOMATIC = 'AUTOMATIC';
  /**
   * Requires subscriptions to be created manually for new users. The developer
   * needs to call CreateSubscription for new users.
   */
  public const SUBSCRIPTION_CREATE_POLICY_MANUAL = 'MANUAL';
  protected $collection_key = 'dataTypes';
  /**
   * Required. See [Google Health API data
   * types](https://developers.google.com/health/data-types) for the list of
   * supported data types. Values should be in kebab-case.
   *
   * @var string[]
   */
  public $dataTypes;
  /**
   * Required. Policy for subscription creation.
   *
   * @var string
   */
  public $subscriptionCreatePolicy;

  /**
   * Required. See [Google Health API data
   * types](https://developers.google.com/health/data-types) for the list of
   * supported data types. Values should be in kebab-case.
   *
   * @param string[] $dataTypes
   */
  public function setDataTypes($dataTypes)
  {
    $this->dataTypes = $dataTypes;
  }
  /**
   * @return string[]
   */
  public function getDataTypes()
  {
    return $this->dataTypes;
  }
  /**
   * Required. Policy for subscription creation.
   *
   * Accepted values: SUBSCRIPTION_CREATE_POLICY_UNSPECIFIED, AUTOMATIC, MANUAL
   *
   * @param self::SUBSCRIPTION_CREATE_POLICY_* $subscriptionCreatePolicy
   */
  public function setSubscriptionCreatePolicy($subscriptionCreatePolicy)
  {
    $this->subscriptionCreatePolicy = $subscriptionCreatePolicy;
  }
  /**
   * @return self::SUBSCRIPTION_CREATE_POLICY_*
   */
  public function getSubscriptionCreatePolicy()
  {
    return $this->subscriptionCreatePolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubscriberConfig::class, 'Google_Service_GoogleHealthAPI_SubscriberConfig');
