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

namespace Google\Service\DeveloperKnowledge;

class SearchDocumentChunksResponse extends \Google\Collection
{
  protected $collection_key = 'results';
  /**
   * Optional. Provides a token that can be sent as `page_token` to retrieve the
   * next page. If this field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $resultsType = DocumentChunk::class;
  protected $resultsDataType = 'array';

  /**
   * Optional. Provides a token that can be sent as `page_token` to retrieve the
   * next page. If this field is omitted, there are no subsequent pages.
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
   * Contains the search results for the given query. Each DocumentChunk in this
   * list contains a snippet of content relevant to the search query. Use the
   * DocumentChunk.parent field of each result with
   * DeveloperKnowledge.GetDocument or DeveloperKnowledge.BatchGetDocuments to
   * retrieve the full document content.
   *
   * @param DocumentChunk[] $results
   */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /**
   * @return DocumentChunk[]
   */
  public function getResults()
  {
    return $this->results;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchDocumentChunksResponse::class, 'Google_Service_DeveloperKnowledge_SearchDocumentChunksResponse');
