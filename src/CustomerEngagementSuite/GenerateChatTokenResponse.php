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

namespace Google\Service\CustomerEngagementSuite;

class GenerateChatTokenResponse extends \Google\Model
{
  /**
   * The session scoped token for chat widget to authenticate with Session APIs.
   *
   * @var string
   */
  public $chatToken;
  /**
   * The time at which the chat token expires.
   *
   * @var string
   */
  public $expireTime;

  /**
   * The session scoped token for chat widget to authenticate with Session APIs.
   *
   * @param string $chatToken
   */
  public function setChatToken($chatToken)
  {
    $this->chatToken = $chatToken;
  }
  /**
   * @return string
   */
  public function getChatToken()
  {
    return $this->chatToken;
  }
  /**
   * The time at which the chat token expires.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenerateChatTokenResponse::class, 'Google_Service_CustomerEngagementSuite_GenerateChatTokenResponse');
