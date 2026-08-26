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

namespace Google\Service\HangoutsChat;

class ListMessagePinsResponse extends \Google\Collection
{
  protected $collection_key = 'messagePins';
  protected $messagePinsType = MessagePin::class;
  protected $messagePinsDataType = 'array';
  /**
   * You can send a token as `pageToken` to retrieve the next page of results.
   * If empty, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The pinned messages from the specified space.
   *
   * @param MessagePin[] $messagePins
   */
  public function setMessagePins($messagePins)
  {
    $this->messagePins = $messagePins;
  }
  /**
   * @return MessagePin[]
   */
  public function getMessagePins()
  {
    return $this->messagePins;
  }
  /**
   * You can send a token as `pageToken` to retrieve the next page of results.
   * If empty, there are no subsequent pages.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListMessagePinsResponse::class, 'Google_Service_HangoutsChat_ListMessagePinsResponse');
