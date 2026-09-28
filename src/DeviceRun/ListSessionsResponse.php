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

namespace Google\Service\DeviceRun;

class ListSessionsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * Token to receive the next page of sessions. This will be absent if the end
   * of the response list has been reached.
   *
   * @var string
   */
  public $nextPageToken;
  protected $sessionsType = Session::class;
  protected $sessionsDataType = 'array';
  /**
   * Unordered list. Sessions that could not be reached.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * Token to receive the next page of sessions. This will be absent if the end
   * of the response list has been reached.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The list of sessions.
   *
   * @param Session[] $sessions
   */
  public function setSessions($sessions)
  {
    $this->sessions = $sessions;
  }
  /**
   * @return Session[]
   */
  public function getSessions()
  {
    return $this->sessions;
  }
  /**
   * Unordered list. Sessions that could not be reached.
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListSessionsResponse::class, 'Google_Service_DeviceRun_ListSessionsResponse');
