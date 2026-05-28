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

class CreateSubscriptionPayload extends \Google\Collection
{
  protected $collection_key = 'dataTypes';
  /**
   * Optional. Data types subscribed to.
   *
   * @var string[]
   */
  public $dataTypes;
  /**
   * Required. Immutable. The resource name of the user for whom this
   * subscription is active. Format: `users/{user}` where `{user}` is the public
   * `healthUserId` as returned by the `GetIdentity` action in the profile PAPI
   * (see `google.devicesandservices.health.v4main.HealthProfileService.GetIdent
   * ity`).
   *
   * @var string
   */
  public $user;

  /**
   * Optional. Data types subscribed to.
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
   * Required. Immutable. The resource name of the user for whom this
   * subscription is active. Format: `users/{user}` where `{user}` is the public
   * `healthUserId` as returned by the `GetIdentity` action in the profile PAPI
   * (see `google.devicesandservices.health.v4main.HealthProfileService.GetIdent
   * ity`).
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
class_alias(CreateSubscriptionPayload::class, 'Google_Service_GoogleHealthAPI_CreateSubscriptionPayload');
