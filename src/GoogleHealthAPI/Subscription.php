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

class Subscription extends \Google\Collection
{
  protected $collection_key = 'dataTypes';
  /**
   * Optional. Data types subscribed to. A subscriber will only receive
   * notifications for data types that are declared here. A subscription can
   * only subscribe to the data types of the subscriber. The values should be in
   * the format "users/{health_user_id}/dataTypes/{data_type}" where
   * `{data_type}` is one of "altitude", "distance", "floors", "sleep", "steps",
   * "weight".
   *
   * @var string[]
   */
  public $dataTypes;
  /**
   * Identifier. The resource name of the Subscription. Format:
   * `projects/{project}/subscribers/{subscriber}/subscriptions/{subscription}`
   * Example: `projects/my-project/subscribers/my-
   * subscriber-123/subscriptions/my-subscription-456` The {project} ID is
   * mandatory (6-30 characters, matching /a-z{6,30}/) The {subscriber} ID is
   * user-settable (4-36 characters, matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/)
   * if provided during creation, or system-generated otherwise. The
   * {subscription} ID is user-settable (4-36 chars, matching
   * /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) or system-generated otherwise.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the user for whom this subscription is
   * active. Format: `users/{user}` where `{user}` is the public `healthUserId`
   * as returned by the `GetIdentity` action in the profile PAPI (see `google.de
   * vicesandservices.health.v4main.HealthProfileService.GetIdentity`).
   *
   * @var string
   */
  public $user;

  /**
   * Optional. Data types subscribed to. A subscriber will only receive
   * notifications for data types that are declared here. A subscription can
   * only subscribe to the data types of the subscriber. The values should be in
   * the format "users/{health_user_id}/dataTypes/{data_type}" where
   * `{data_type}` is one of "altitude", "distance", "floors", "sleep", "steps",
   * "weight".
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
   * Identifier. The resource name of the Subscription. Format:
   * `projects/{project}/subscribers/{subscriber}/subscriptions/{subscription}`
   * Example: `projects/my-project/subscribers/my-
   * subscriber-123/subscriptions/my-subscription-456` The {project} ID is
   * mandatory (6-30 characters, matching /a-z{6,30}/) The {subscriber} ID is
   * user-settable (4-36 characters, matching /[a-z]([a-z0-9-]{2,34}[a-z0-9])/)
   * if provided during creation, or system-generated otherwise. The
   * {subscription} ID is user-settable (4-36 chars, matching
   * /[a-z]([a-z0-9-]{2,34}[a-z0-9])/) or system-generated otherwise.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Immutable. The resource name of the user for whom this subscription is
   * active. Format: `users/{user}` where `{user}` is the public `healthUserId`
   * as returned by the `GetIdentity` action in the profile PAPI (see `google.de
   * vicesandservices.health.v4main.HealthProfileService.GetIdentity`).
   *
   * @param string $user
   */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /**
   * @return string
   */
  public function getUser()
  {
    return $this->user;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Subscription::class, 'Google_Service_GoogleHealthAPI_Subscription');
