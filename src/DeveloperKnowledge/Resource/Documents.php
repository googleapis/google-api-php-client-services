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

namespace Google\Service\DeveloperKnowledge\Resource;

use Google\Service\DeveloperKnowledge\BatchGetDocumentsResponse;
use Google\Service\DeveloperKnowledge\Document;
use Google\Service\DeveloperKnowledge\SearchDocumentChunksResponse;

/**
 * The "documents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $developerknowledgeService = new Google\Service\DeveloperKnowledge(...);
 *   $documents = $developerknowledgeService->documents;
 *  </code>
 */
class Documents extends \Google\Service\Resource
{
  /**
   * Retrieves multiple documents, each with its full Markdown content.
   * (documents.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string names Required. Specifies the names of the documents to
   * retrieve. A maximum of 20 documents can be retrieved in a batch. The
   * documents are returned in the same order as the `names` in the request.
   * Format: `documents/{uri_without_scheme}` Example:
   * `documents/docs.cloud.google.com/storage/docs/creating-buckets`
   * @opt_param string view Optional. Specifies the DocumentView of the document.
   * If unspecified, DeveloperKnowledge.BatchGetDocuments defaults to
   * `DOCUMENT_VIEW_CONTENT`.
   * @return BatchGetDocumentsResponse
   * @throws \Google\Service\Exception
   */
  public function batchGet($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', [$params], BatchGetDocumentsResponse::class);
  }
  /**
   * Retrieves a single document with its full Markdown content. (documents.get)
   *
   * @param string $name Required. Specifies the name of the document to retrieve.
   * Format: `documents/{uri_without_scheme}` Example:
   * `documents/docs.cloud.google.com/storage/docs/creating-buckets`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. Specifies the DocumentView of the document.
   * If unspecified, DeveloperKnowledge.GetDocument defaults to
   * `DOCUMENT_VIEW_CONTENT`.
   * @return Document
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Document::class);
  }
  /**
   * Searches for developer knowledge across Google's developer documentation.
   * Returns DocumentChunks based on the user's query. There may be many chunks
   * from the same Document. To retrieve full documents, use
   * DeveloperKnowledge.GetDocument or DeveloperKnowledge.BatchGetDocuments with
   * the DocumentChunk.parent returned in the
   * SearchDocumentChunksResponse.results. (documents.searchDocumentChunks)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Applies a strict filter to the search
   * results. The expression supports a subset of the syntax described at
   * https://google.aip.dev/160. While `SearchDocumentChunks` returns
   * DocumentChunks, the filter is applied to `DocumentChunk.document` fields.
   * Supported fields for filtering: * `data_source` (STRING): The source of the
   * document, e.g. `docs.cloud.google.com`. See
   * https://developers.google.com/knowledge/reference/corpus-reference for the
   * complete list of data sources in the corpus. * `update_time` (TIMESTAMP): The
   * timestamp of when the document was last meaningfully updated. A meaningful
   * update is one that changes document's markdown content or metadata. * `uri`
   * (STRING): The document URI, e.g.
   * `https://docs.cloud.google.com/bigquery/docs/tables`. STRING fields support
   * `=` (equals) and `!=` (not equals) operators for **exact match** on the whole
   * string. Partial match, prefix match, and regexp match are not supported.
   * TIMESTAMP fields support `=`, `<`, `<=`, `>`, and `>=` operators. Timestamps
   * must be in RFC-3339 format, e.g., `"2025-01-01T00:00:00Z"`. You can combine
   * expressions using `AND`, `OR`, and `NOT` (or `-`) logical operators. `OR` has
   * higher precedence than `AND`. Use parentheses for explicit precedence
   * grouping. Examples: * `data_source = "docs.cloud.google.com" OR data_source =
   * "firebase.google.com"` * `data_source != "firebase.google.com"` *
   * `update_time < "2024-01-01T00:00:00Z"` * `update_time >=
   * "2025-01-22T00:00:00Z" AND (data_source = "developer.chrome.com" OR
   * data_source = "web.dev")` * `uri = "https://docs.cloud.google.com/release-
   * notes"` The `filter` string must not exceed 500 characters; values longer
   * than 500 characters will result in an `INVALID_ARGUMENT` error.
   * @opt_param int pageSize Optional. Specifies the maximum number of results to
   * return. The service may return fewer than this value. If unspecified, at most
   * 5 results will be returned. The maximum value is 20; values above 20 will
   * result in an INVALID_ARGUMENT error.
   * @opt_param string pageToken Optional. Contains a page token, received from a
   * previous `SearchDocumentChunks` call. Provide this to retrieve the subsequent
   * page.
   * @opt_param string query Required. Provides the raw query string provided by
   * the user, such as "How to create a Cloud Storage bucket?".
   * @return SearchDocumentChunksResponse
   * @throws \Google\Service\Exception
   */
  public function searchDocumentChunks($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('searchDocumentChunks', [$params], SearchDocumentChunksResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Documents::class, 'Google_Service_DeveloperKnowledge_Resource_Documents');
