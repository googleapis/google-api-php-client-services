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

namespace Google\Service\DeepReview\Resource;

use Google\Service\DeepReview\DeepreviewEmpty;
use Google\Service\DeepReview\Document;
use Google\Service\DeepReview\EstimateReviewCostRequest;
use Google\Service\DeepReview\EstimateReviewCostResponse;
use Google\Service\DeepReview\ListDocumentsResponse;

/**
 * The "documents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deepreviewService = new Google\Service\DeepReview(...);
 *   $documents = $deepreviewService->documents;
 *  </code>
 */
class Documents extends \Google\Service\Resource
{
  /**
   * Deletes a document and all associated reviews and stored blobs.
   * (documents.delete)
   *
   * @param string $name Required. The resource name of the document to delete.
   * Format: `documents/{document}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true, and the document is
   * not found, the request succeeds.
   * @opt_param bool force Optional. If set to true, any child resources (e.g.
   * review resources) are also deleted.
   * @return DeepreviewEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DeepreviewEmpty::class);
  }
  /**
   * Estimates what a review of a document would cost on the caller's Gemini API
   * key. The estimate comes from what past reviews with the same model and depth
   * cost, adjusted to this document's size and repriced at the Gemini API's
   * current list prices. It covers one review attempt that runs to completion,
   * and doesn't include retries after errors. (documents.estimateReviewCost)
   *
   * @param string $document Required. The document to review. Format:
   * `documents/{document}`
   * @param EstimateReviewCostRequest $postBody
   * @param array $optParams Optional parameters.
   * @return EstimateReviewCostResponse
   * @throws \Google\Service\Exception
   */
  public function estimateReviewCost($document, EstimateReviewCostRequest $postBody, $optParams = [])
  {
    $params = ['document' => $document, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('estimateReviewCost', [$params], EstimateReviewCostResponse::class);
  }
  /**
   * Retrieves document metadata and review history. (documents.get)
   *
   * @param string $name Required. The resource name of the document to retrieve.
   * Format: `documents/{document}`
   * @param array $optParams Optional parameters.
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
   * Lists documents for the authenticated caller with cursor pagination.
   * (documents.listDocuments)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Supported AIP-160 filter expressions
   * (e.g., `display_name = "..."`).
   * @opt_param string orderBy Optional. Supported AIP-132 order_by field.
   * @opt_param int pageSize Optional. The maximum number of documents to return
   * in a single page. The server may return fewer than this value. If
   * unspecified, at most 50 documents will be returned. The maximum value is
   * 1000; values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token received from a previous
   * `ListDocuments` call.
   * @return ListDocumentsResponse
   * @throws \Google\Service\Exception
   */
  public function listDocuments($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDocumentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Documents::class, 'Google_Service_DeepReview_Resource_Documents');
