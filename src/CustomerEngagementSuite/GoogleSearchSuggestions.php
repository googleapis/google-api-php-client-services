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

class GoogleSearchSuggestions extends \Google\Collection
{
  protected $collection_key = 'webSearchQueries';
  /**
   * Compliant HTML and CSS styling for search suggestions. The provided HTML
   * and CSS automatically adapts to your device settings, displaying in either
   * light or dark mode indicated by `@media(prefers-color-scheme)`.
   *
   * @var string[]
   */
  public $htmls;
  protected $webSearchQueriesType = WebSearchQuery::class;
  protected $webSearchQueriesDataType = 'array';

  /**
   * Compliant HTML and CSS styling for search suggestions. The provided HTML
   * and CSS automatically adapts to your device settings, displaying in either
   * light or dark mode indicated by `@media(prefers-color-scheme)`.
   *
   * @param string[] $htmls
   */
  public function setHtmls($htmls)
  {
    $this->htmls = $htmls;
  }
  /**
   * @return string[]
   */
  public function getHtmls()
  {
    return $this->htmls;
  }
  /**
   * List of queries used to perform the google search along with the search
   * result URIs forming the search suggestions.
   *
   * @param WebSearchQuery[] $webSearchQueries
   */
  public function setWebSearchQueries($webSearchQueries)
  {
    $this->webSearchQueries = $webSearchQueries;
  }
  /**
   * @return WebSearchQuery[]
   */
  public function getWebSearchQueries()
  {
    return $this->webSearchQueries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleSearchSuggestions::class, 'Google_Service_CustomerEngagementSuite_GoogleSearchSuggestions');
