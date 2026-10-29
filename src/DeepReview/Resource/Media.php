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

use Google\Service\DeepReview\Document;
use Google\Service\DeepReview\DownloadDocumentResponse;

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deepreviewService = new Google\Service\DeepReview(...);
 *   $media = $deepreviewService->media;
 *  </code>
 */
class Media extends \Google\Service\Resource
{
  /**
   * Downloads the original document content (PDF binary) using media streaming.
   * Pass `alt=media` as a query parameter to stream the binary PDF bytes. Without
   * `alt=media`, a JSON response is returned. (media.download)
   *
   * @param string $name Required. The resource name of the document to download.
   * @param array $optParams Optional parameters.
   * @return DownloadDocumentResponse
   * @throws \Google\Service\Exception
   */
  public function download($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('download', [$params], DownloadDocumentResponse::class);
  }
  /**
   * Creates a new Document resource and ingests the manuscript using media upload
   * or Google Drive. (media.upload)
   *
   * @param Document $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string documentId Optional. The ID to use for the document, which
   * will become the final component of the document's resource name. If not
   * provided, a unique server-generated UUID will be assigned.
   * @opt_param string requestId Optional. Idempotency identifier for network
   * retry safety (AIP-155). Must be a valid UUID4 string.
   * @return Document
   * @throws \Google\Service\Exception
   */
  public function upload(Document $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], Document::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Media::class, 'Google_Service_DeepReview_Resource_Media');
