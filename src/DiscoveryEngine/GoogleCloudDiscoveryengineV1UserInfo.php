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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1UserInfo extends \Google\Model
{
  protected $preciseLocationType = GoogleCloudDiscoveryengineV1UserInfoPreciseLocation::class;
  protected $preciseLocationDataType = '';
  /**
   * Optional. IANA time zone, e.g. Europe/Budapest.
   *
   * @var string
   */
  public $timeZone;
  /**
   * User agent as included in the HTTP header. The field must be a UTF-8
   * encoded string with a length limit of 1,000 characters. Otherwise, an
   * `INVALID_ARGUMENT` error is returned. This should not be set when using the
   * client side event reporting with GTM or JavaScript tag in
   * UserEventService.CollectUserEvent or if UserEvent.direct_user_request is
   * set.
   *
   * @var string
   */
  public $userAgent;
  /**
   * Highly recommended for logged-in users. Unique identifier for logged-in
   * user, such as a user name. Don't set for anonymous users. Always use a
   * hashed value for this ID. Don't set the field to the same fixed ID for
   * different users. This mixes the event history of those users together,
   * which results in degraded model quality. The field must be a UTF-8 encoded
   * string with a length limit of 128 characters. Otherwise, an
   * `INVALID_ARGUMENT` error is returned. Represents an opaque ID to the Search
   * API. The Search API doesn't interpret the value in any way. This field is
   * used to associate events with a user across sessions if the events are
   * being uploaded.
   *
   * @var string
   */
  public $userId;

  /**
   * Optional. Input only. Precise location of the user. It is used in Custom
   * Ranking to calculate the distance between the user and the relevant
   * documents.
   *
   * @param GoogleCloudDiscoveryengineV1UserInfoPreciseLocation $preciseLocation
   */
  public function setPreciseLocation(GoogleCloudDiscoveryengineV1UserInfoPreciseLocation $preciseLocation)
  {
    $this->preciseLocation = $preciseLocation;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1UserInfoPreciseLocation
   */
  public function getPreciseLocation()
  {
    return $this->preciseLocation;
  }
  /**
   * Optional. IANA time zone, e.g. Europe/Budapest.
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /**
   * User agent as included in the HTTP header. The field must be a UTF-8
   * encoded string with a length limit of 1,000 characters. Otherwise, an
   * `INVALID_ARGUMENT` error is returned. This should not be set when using the
   * client side event reporting with GTM or JavaScript tag in
   * UserEventService.CollectUserEvent or if UserEvent.direct_user_request is
   * set.
   *
   * @param string $userAgent
   */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /**
   * @return string
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /**
   * Highly recommended for logged-in users. Unique identifier for logged-in
   * user, such as a user name. Don't set for anonymous users. Always use a
   * hashed value for this ID. Don't set the field to the same fixed ID for
   * different users. This mixes the event history of those users together,
   * which results in degraded model quality. The field must be a UTF-8 encoded
   * string with a length limit of 128 characters. Otherwise, an
   * `INVALID_ARGUMENT` error is returned. Represents an opaque ID to the Search
   * API. The Search API doesn't interpret the value in any way. This field is
   * used to associate events with a user across sessions if the events are
   * being uploaded.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1UserInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1UserInfo');
