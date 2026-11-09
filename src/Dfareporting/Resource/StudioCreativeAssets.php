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

namespace Google\Service\Dfareporting\Resource;

use Google\Service\Dfareporting\DfareportingStudioCreativeAssetsInsertRequest;
use Google\Service\Dfareporting\StudioCreativeAssetsResponse;

/**
 * The "studioCreativeAssets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google\Service\Dfareporting(...);
 *   $studioCreativeAssets = $dfareportingService->studioCreativeAssets;
 *  </code>
 */
class StudioCreativeAssets extends \Google\Service\Resource
{
  /**
   * Inserts a new studio creative asset. Requests to upload an asset file must be
   * sent to the upload URI using multipart media upload (or resumable media
   * upload). For [multipart uploads](https://developers.google.com/doubleclick-
   * advertisers/upload#multipart) (`uploadType=multipart`), the request uses
   * `multipart/related` and includes two parts: * **Metadata**: A JSON object
   * representing DfareportingStudioCreativeAssetsInsertRequest with
   * `studioAdvertiserId`, and optional `studioAccountId` and `studioCreativeId`.
   * * **Media**: The binary data of the asset file, specifying the `Content-Type`
   * of the asset and a `Content-Disposition` header with `name="media"` and
   * `filename=""` (for example, `Content-Disposition: form-data; name="media";
   * filename="asset.jpg"`). (studioCreativeAssets.insert)
   *
   * @param DfareportingStudioCreativeAssetsInsertRequest $postBody
   * @param array $optParams Optional parameters.
   * @return StudioCreativeAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function insert(DfareportingStudioCreativeAssetsInsertRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('insert', [$params], StudioCreativeAssetsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StudioCreativeAssets::class, 'Google_Service_Dfareporting_Resource_StudioCreativeAssets');
