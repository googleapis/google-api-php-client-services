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

namespace Google\Service\AgentRegistry;

class SearchAgentsRequest extends \Google\Model
{
  /**
   * Optional. The maximum number of search results to return per page. The page
   * size is capped at `100`, even if a larger value is specified. A negative
   * value will result in an `INVALID_ARGUMENT` error. If unspecified or set to
   * `0`, a default value of `20` will be used. The server may return fewer
   * results than requested.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. If present, retrieve the next batch of results from the preceding
   * call to this method. `page_token` must be the value of `next_page_token`
   * from the previous response. The values of all other method parameters, must
   * be identical to those in the previous call.
   *
   * @var string
   */
  public $pageToken;
  /**
   * Optional. Search criteria used to select the Agents to return. If no search
   * criteria is specified then all accessible Agents will be returned. Search
   * expressions can be used to restrict results based upon searchable fields,
   * where the operators can be used along with the suffix wildcard symbol `*`.
   * See [instructions](https://docs.cloud.google.com/agent-registry/search-
   * agents-and-tools) for more details. Allowed operators: `=`, `:`, `NOT`,
   * `AND`, `OR`, and `()`. Searchable fields: | Field | `=` | `:` | `*` |
   * Keyword Search | |--------------------|-----|-----|-----|----------------|
   * | agentId | Yes | Yes | Yes | Included | | name | No | Yes | Yes | Included
   * | | displayName | No | Yes | Yes | Included | | description | No | Yes | No
   * | Included | | skills | No | Yes | No | Included | | skills.id | No | Yes |
   * No | Included | | skills.name | No | Yes | No | Included | |
   * skills.description | No | Yes | No | Included | | skills.tags | No | Yes |
   * No | Included | | skills.examples | No | Yes | No | Included | Examples: *
   * `agentId=urn:agent:projects-123:projects:123:locations:us-
   * central1:reasoningEngines:1234` to find the agent with the specified agent
   * ID. * `name:important` to find agents whose name contains `important` as a
   * word. * `displayName:works*` to find agents whose display name contains
   * words that start with `works`. * `skills.tags:test` to find agents whose
   * skills tags contain `test`. * `planner OR booking` to find agents whose
   * metadata contains the words `planner` or `booking`.
   *
   * @var string
   */
  public $searchString;

  /**
   * Optional. The maximum number of search results to return per page. The page
   * size is capped at `100`, even if a larger value is specified. A negative
   * value will result in an `INVALID_ARGUMENT` error. If unspecified or set to
   * `0`, a default value of `20` will be used. The server may return fewer
   * results than requested.
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
   * Optional. If present, retrieve the next batch of results from the preceding
   * call to this method. `page_token` must be the value of `next_page_token`
   * from the previous response. The values of all other method parameters, must
   * be identical to those in the previous call.
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
   * Optional. Search criteria used to select the Agents to return. If no search
   * criteria is specified then all accessible Agents will be returned. Search
   * expressions can be used to restrict results based upon searchable fields,
   * where the operators can be used along with the suffix wildcard symbol `*`.
   * See [instructions](https://docs.cloud.google.com/agent-registry/search-
   * agents-and-tools) for more details. Allowed operators: `=`, `:`, `NOT`,
   * `AND`, `OR`, and `()`. Searchable fields: | Field | `=` | `:` | `*` |
   * Keyword Search | |--------------------|-----|-----|-----|----------------|
   * | agentId | Yes | Yes | Yes | Included | | name | No | Yes | Yes | Included
   * | | displayName | No | Yes | Yes | Included | | description | No | Yes | No
   * | Included | | skills | No | Yes | No | Included | | skills.id | No | Yes |
   * No | Included | | skills.name | No | Yes | No | Included | |
   * skills.description | No | Yes | No | Included | | skills.tags | No | Yes |
   * No | Included | | skills.examples | No | Yes | No | Included | Examples: *
   * `agentId=urn:agent:projects-123:projects:123:locations:us-
   * central1:reasoningEngines:1234` to find the agent with the specified agent
   * ID. * `name:important` to find agents whose name contains `important` as a
   * word. * `displayName:works*` to find agents whose display name contains
   * words that start with `works`. * `skills.tags:test` to find agents whose
   * skills tags contain `test`. * `planner OR booking` to find agents whose
   * metadata contains the words `planner` or `booking`.
   *
   * @param string $searchString
   */
  public function setSearchString($searchString)
  {
    $this->searchString = $searchString;
  }
  /**
   * @return string
   */
  public function getSearchString()
  {
    return $this->searchString;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchAgentsRequest::class, 'Google_Service_AgentRegistry_SearchAgentsRequest');
