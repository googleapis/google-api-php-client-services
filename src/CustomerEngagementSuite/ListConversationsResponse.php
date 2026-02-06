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

class ListConversationsResponse extends \Google\Collection
{
  protected $collection_key = 'conversations';
  protected $conversationsType = Conversation::class;
  protected $conversationsDataType = 'array';
  /**
   * A token that can be sent as ListConversationsRequest.page_token to retrieve
   * the next page. Absence of this field indicates there are no subsequent
   * pages.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The list of conversations.
   *
   * @param Conversation[] $conversations
   */
  public function setConversations($conversations)
  {
    $this->conversations = $conversations;
  }
  /**
   * @return Conversation[]
   */
  public function getConversations()
  {
    return $this->conversations;
  }
  /**
   * A token that can be sent as ListConversationsRequest.page_token to retrieve
   * the next page. Absence of this field indicates there are no subsequent
   * pages.
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
class_alias(ListConversationsResponse::class, 'Google_Service_CustomerEngagementSuite_ListConversationsResponse');
