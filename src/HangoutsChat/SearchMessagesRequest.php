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

class SearchMessagesRequest extends \Google\Model
{
  /**
   * The default / unset value. The API will default to the BASIC view.
   */
  public const VIEW_SEARCH_MESSAGES_VIEW_UNSPECIFIED = 'SEARCH_MESSAGES_VIEW_UNSPECIFIED';
  /**
   * Includes only the matched messages in the results, but no additional
   * metadata. This is the default value.
   */
  public const VIEW_SEARCH_MESSAGES_VIEW_BASIC = 'SEARCH_MESSAGES_VIEW_BASIC';
  /**
   * Includes everything in the results: the matched messages and additional
   * metadata.
   */
  public const VIEW_SEARCH_MESSAGES_VIEW_FULL = 'SEARCH_MESSAGES_VIEW_FULL';
  /**
   * Required. A search query. The query can specify one or more search
   * keywords, which are used to filter the results, You can also filter the
   * results using the following message fields: - `create_time`: Accepts a
   * timestamp in [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339) format and
   * the supported comparison operators are: `<` and `>=`. - `sender.name`: The
   * resource name of the sender (`users/{user}`). Only supports `=`. You can
   * use the e-mail as an alias for `{user}`. For example,
   * `users/example@gmail.com`, where `example@gmail.com` is the e-mail of the
   * Google Chat user. - `space.name`: The resource name of the space where the
   * message is posted. (`spaces/{space}`). Only supports `=`. If this filter is
   * not set, the search is performed across all direct messages and spaces the
   * user has access to as a space member. - `space.display_name`: Supports the
   * operator `:` (has) and filters spaces based on a partial match of their
   * display name. Results are limited to the top five space matches. For
   * example, `space.display_name:Project` searches for messages in the top five
   * spaces that contain the word "Project" in their display names. -
   * `attachment`: Supports the operator `:*` (has any) to check for the
   * presence of attachments. If `attachment:*` is specified, only messages that
   * have at least one attachment are returned. -
   * `annotations.user_mentions.user.name`: The resource name of the mentioned
   * user (`users/{user}`). Only supports `:` (has). For example:
   * `annotations.user_mentions.user.name:"users/1234567890"` returns only
   * messages that contain a mention to the specified user. Alternatively, the
   * alias `me` can be used to filter for messages that mention the caller user,
   * for example: `annotations.user_mentions.user.name:users/me`. You can also
   * use the e-mail as an alias for `{user}`, for example,
   * `users/example@gmail.com`. For advanced filtering, the following functions
   * are also available: - `has_link()`: Returns only messages that have at
   * least one hyperlink in the message text. - `is_unread()`: Filters out
   * messages that have been read by the calling user. Using the
   * `space.display_name` filter requires that the calling credentials include
   * one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.spaces.readonly` -
   * `https://www.googleapis.com/auth/chat.spaces` Using the `is_unread()`
   * filter requires that the calling credentials include one of the following
   * [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.readstate.readonly` -
   * `https://www.googleapis.com/auth/chat.users.readstate` Across different
   * fields, only `AND` operators are supported. A valid example is `sender.name
   * = "users/1234567890" AND is_unread()`. The word `AND` is optional and is
   * implied if omitted. For example, `sender.name = "users/1234567890"
   * is_unread()` is valid and is equivalent to the previous example. An invalid
   * example is `sender.name = "users/1234567890" OR is_unread()` because `OR`
   * is not supported between different fields. Among the same field: -
   * `create_time` supports only `AND`, and can only be used to represent an
   * interval, such as `create_time >= "2022-01-01T00:00:00+00:00" AND
   * create_time < "2023-01-01T00:00:00+00:00"`. - `sender.name` supports only
   * the `OR` operator, for example: `sender.name = "users/1234567890" OR
   * sender.name = "users/0987654321"`. - `space.name` supports only the `OR`
   * operator, for example: `space.name = "spaces/ABCDEFGH" OR space.name =
   * "spaces/QWERTYUI"`. - `space.display_name` supports the operators `AND` and
   * `OR`, but not a mix of both. For example: `space.display_name:Project AND
   * space.display_name:Tasks` returns messages that are in spaces with display
   * names containing both `Project` and `Tasks`, whereas
   * `space.display_name:Project OR space.display_name:Tasks` returns messages
   * that are in spaces with display names containing either `Project` or
   * `Tasks` or both. - `annotations.user_mentions.user.name` supports the
   * operators `AND` and `OR`, but not a mix of both. For example:
   * `annotations.user_mentions.user.name:"users/1234567890" AND
   * annotations.user_mentions.user.name:"users/0987654321"` returns only
   * messages that mentions both users, whereas
   * `annotations.user_mentions.user.name:"users/1234567890" OR
   * annotations.user_mentions.user.name:"users/0987654321"` returns messages
   * that mention either user or both. Parentheses are required to disambiguate
   * operator precedence when combining `AND` and `OR` operators in the same
   * query. For example: `(sender.name="users/me" OR sender.name="users/123456")
   * AND is_unread()`. Otherwise, parentheses are optional. The following
   * example queries are valid: ``` "Pending reports" AND create_time >=
   * "2023-01-01T00:00:00Z" sender.name = "users/example@gmail.com"
   * annotations.user_mentions.user.name:"users/0987654321" attachment:* AND
   * space.name = "spaces/ABCDEFGH" tasks AND is_unread() AND sender.name =
   * "users/1234567890" "things to do" "urgent" (sender.name =
   * "users/1234567890") AND (create_time < "2023-05-01T00:00:00Z") tasks AND
   * space.name = "spaces/ABCDEFGH" AND has_link() "project one" is_unread()
   * space.display_name:Project tasks ``` The maximum query length is 1,000
   * characters. Invalid queries are rejected by the server with an
   * `INVALID_ARGUMENT` error.
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. How the results list is ordered. Supported attributes to order by
   * are: - `create_time`: Sorts the results by the time of the message
   * creation. Default value. - `relevance`: Sorts the results by relevance.
   * [Developer Preview](https://developers.google.com/workspace/preview). The
   * default ordering is `create_time desc`. Only a single order per query
   * (`create_time` or `relevance`) is supported. Only descending order (`desc`)
   * is supported, and it must be specified after the order attribute.
   *
   * @var string
   */
  public $orderBy;
  /**
   * Optional. The maximum number of results to return. The service may return
   * fewer than this value. If unspecified, at most 25 are returned. The maximum
   * value is 100. If you use a value more than 100, it's automatically changed
   * to 100.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. A token, received from the previous search messages call. Provide
   * this parameter to retrieve the subsequent page. When paginating, all other
   * parameters provided should match the call that provided the page token.
   * Passing different values to the other parameters might lead to unexpected
   * results.
   *
   * @var string
   */
  public $pageToken;
  /**
   * Optional. Specifies what kind of search results view to return. The default
   * is `SEARCH_MESSAGES_VIEW_BASIC`.
   *
   * @var string
   */
  public $view;

  /**
   * Required. A search query. The query can specify one or more search
   * keywords, which are used to filter the results, You can also filter the
   * results using the following message fields: - `create_time`: Accepts a
   * timestamp in [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339) format and
   * the supported comparison operators are: `<` and `>=`. - `sender.name`: The
   * resource name of the sender (`users/{user}`). Only supports `=`. You can
   * use the e-mail as an alias for `{user}`. For example,
   * `users/example@gmail.com`, where `example@gmail.com` is the e-mail of the
   * Google Chat user. - `space.name`: The resource name of the space where the
   * message is posted. (`spaces/{space}`). Only supports `=`. If this filter is
   * not set, the search is performed across all direct messages and spaces the
   * user has access to as a space member. - `space.display_name`: Supports the
   * operator `:` (has) and filters spaces based on a partial match of their
   * display name. Results are limited to the top five space matches. For
   * example, `space.display_name:Project` searches for messages in the top five
   * spaces that contain the word "Project" in their display names. -
   * `attachment`: Supports the operator `:*` (has any) to check for the
   * presence of attachments. If `attachment:*` is specified, only messages that
   * have at least one attachment are returned. -
   * `annotations.user_mentions.user.name`: The resource name of the mentioned
   * user (`users/{user}`). Only supports `:` (has). For example:
   * `annotations.user_mentions.user.name:"users/1234567890"` returns only
   * messages that contain a mention to the specified user. Alternatively, the
   * alias `me` can be used to filter for messages that mention the caller user,
   * for example: `annotations.user_mentions.user.name:users/me`. You can also
   * use the e-mail as an alias for `{user}`, for example,
   * `users/example@gmail.com`. For advanced filtering, the following functions
   * are also available: - `has_link()`: Returns only messages that have at
   * least one hyperlink in the message text. - `is_unread()`: Filters out
   * messages that have been read by the calling user. Using the
   * `space.display_name` filter requires that the calling credentials include
   * one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.spaces.readonly` -
   * `https://www.googleapis.com/auth/chat.spaces` Using the `is_unread()`
   * filter requires that the calling credentials include one of the following
   * [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.readstate.readonly` -
   * `https://www.googleapis.com/auth/chat.users.readstate` Across different
   * fields, only `AND` operators are supported. A valid example is `sender.name
   * = "users/1234567890" AND is_unread()`. The word `AND` is optional and is
   * implied if omitted. For example, `sender.name = "users/1234567890"
   * is_unread()` is valid and is equivalent to the previous example. An invalid
   * example is `sender.name = "users/1234567890" OR is_unread()` because `OR`
   * is not supported between different fields. Among the same field: -
   * `create_time` supports only `AND`, and can only be used to represent an
   * interval, such as `create_time >= "2022-01-01T00:00:00+00:00" AND
   * create_time < "2023-01-01T00:00:00+00:00"`. - `sender.name` supports only
   * the `OR` operator, for example: `sender.name = "users/1234567890" OR
   * sender.name = "users/0987654321"`. - `space.name` supports only the `OR`
   * operator, for example: `space.name = "spaces/ABCDEFGH" OR space.name =
   * "spaces/QWERTYUI"`. - `space.display_name` supports the operators `AND` and
   * `OR`, but not a mix of both. For example: `space.display_name:Project AND
   * space.display_name:Tasks` returns messages that are in spaces with display
   * names containing both `Project` and `Tasks`, whereas
   * `space.display_name:Project OR space.display_name:Tasks` returns messages
   * that are in spaces with display names containing either `Project` or
   * `Tasks` or both. - `annotations.user_mentions.user.name` supports the
   * operators `AND` and `OR`, but not a mix of both. For example:
   * `annotations.user_mentions.user.name:"users/1234567890" AND
   * annotations.user_mentions.user.name:"users/0987654321"` returns only
   * messages that mentions both users, whereas
   * `annotations.user_mentions.user.name:"users/1234567890" OR
   * annotations.user_mentions.user.name:"users/0987654321"` returns messages
   * that mention either user or both. Parentheses are required to disambiguate
   * operator precedence when combining `AND` and `OR` operators in the same
   * query. For example: `(sender.name="users/me" OR sender.name="users/123456")
   * AND is_unread()`. Otherwise, parentheses are optional. The following
   * example queries are valid: ``` "Pending reports" AND create_time >=
   * "2023-01-01T00:00:00Z" sender.name = "users/example@gmail.com"
   * annotations.user_mentions.user.name:"users/0987654321" attachment:* AND
   * space.name = "spaces/ABCDEFGH" tasks AND is_unread() AND sender.name =
   * "users/1234567890" "things to do" "urgent" (sender.name =
   * "users/1234567890") AND (create_time < "2023-05-01T00:00:00Z") tasks AND
   * space.name = "spaces/ABCDEFGH" AND has_link() "project one" is_unread()
   * space.display_name:Project tasks ``` The maximum query length is 1,000
   * characters. Invalid queries are rejected by the server with an
   * `INVALID_ARGUMENT` error.
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Optional. How the results list is ordered. Supported attributes to order by
   * are: - `create_time`: Sorts the results by the time of the message
   * creation. Default value. - `relevance`: Sorts the results by relevance.
   * [Developer Preview](https://developers.google.com/workspace/preview). The
   * default ordering is `create_time desc`. Only a single order per query
   * (`create_time` or `relevance`) is supported. Only descending order (`desc`)
   * is supported, and it must be specified after the order attribute.
   *
   * @param string $orderBy
   */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /**
   * @return string
   */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /**
   * Optional. The maximum number of results to return. The service may return
   * fewer than this value. If unspecified, at most 25 are returned. The maximum
   * value is 100. If you use a value more than 100, it's automatically changed
   * to 100.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Optional. A token, received from the previous search messages call. Provide
   * this parameter to retrieve the subsequent page. When paginating, all other
   * parameters provided should match the call that provided the page token.
   * Passing different values to the other parameters might lead to unexpected
   * results.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * Optional. Specifies what kind of search results view to return. The default
   * is `SEARCH_MESSAGES_VIEW_BASIC`.
   *
   * Accepted values: SEARCH_MESSAGES_VIEW_UNSPECIFIED,
   * SEARCH_MESSAGES_VIEW_BASIC, SEARCH_MESSAGES_VIEW_FULL
   *
   * @param self::VIEW_* $view
   */
  public function setView($view)
  {
    $this->view = $view;
  }
  /**
   * @return self::VIEW_*
   */
  public function getView()
  {
    return $this->view;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchMessagesRequest::class, 'Google_Service_HangoutsChat_SearchMessagesRequest');
