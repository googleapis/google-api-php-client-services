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

namespace Google\Service\DisplayVideo\Resource;

use Google\Service\DisplayVideo\AdAsset;
use Google\Service\DisplayVideo\BulkCreateAdAssetsRequest;
use Google\Service\DisplayVideo\BulkCreateAdAssetsResponse;
use Google\Service\DisplayVideo\CreateAdAssetRequest;
use Google\Service\DisplayVideo\ListAdAssetsResponse;
use Google\Service\DisplayVideo\UploadAdAssetRequest;
use Google\Service\DisplayVideo\UploadAdAssetResponse;

/**
 * The "adAssets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google\Service\DisplayVideo(...);
 *   $adAssets = $displayvideoService->advertisers_adAssets;
 *  </code>
 */
class AdvertisersAdAssets extends \Google\Service\Resource
{
  /**
   * BulkCreate video assets for Ad. Only supports youtube video assets for now.
   * (adAssets.bulkCreate)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad asset
   * belongs to.
   * @param BulkCreateAdAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BulkCreateAdAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function bulkCreate($advertiserId, BulkCreateAdAssetsRequest $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('bulkCreate', [$params], BulkCreateAdAssetsResponse::class);
  }
  /**
   * Create a video asset for Ad. Only supports youtube video assets for now.
   * (adAssets.create)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad asset
   * belongs to.
   * @param CreateAdAssetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AdAsset
   * @throws \Google\Service\Exception
   */
  public function create($advertiserId, CreateAdAssetRequest $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AdAsset::class);
  }
  /**
   * Get an ad asset by ad asset ID. Only supports youtube video assets.
   * (adAssets.get)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad asset
   * belongs to.
   * @param string $adAssetId Required. The ID of the ad asset to fetch.
   * @param array $optParams Optional parameters.
   * @return AdAsset
   * @throws \Google\Service\Exception
   */
  public function get($advertiserId, $adAssetId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'adAssetId' => $adAssetId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AdAsset::class);
  }
  /**
   * List ad assets by advertiser ID. Only supports youtube video ad assets.
   * (adAssets.listAdvertisersAdAssets)
   *
   * @param string $advertiserId Required. The ID of the advertiser to list assets
   * for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression to restrict the ad
   * assets to return. The supported fields are: *
   * `youtubeVideoAsset.youtubeVideoId` * `entityStatus` Examples: *
   * `entityStatus=ENTITY_STATUS_ACTIVE`
   * @opt_param string orderBy Optional. Field by which to sort the list.
   * Acceptable values are: * `entityStatus` * `youtubeVideoAsset.youtubeVideoId`
   * * `adAssetId` (default) The default sorting order is ascending. To specify
   * descending order for a field, a suffix "desc" should be added to the field
   * name. Example: `assetId desc`.
   * @opt_param int pageSize Optional. Requested page size. Must be between `1`
   * and `5000`. If unspecified will default to `5000`. Returns error code
   * `INVALID_ARGUMENT` if an invalid value is specified.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return. Typically, this is the value of next_page_token
   * returned from the previous call to `ListAssets` method. If not specified, the
   * first page of results will be returned.
   * @return ListAdAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function listAdvertisersAdAssets($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAdAssetsResponse::class);
  }
  /**
   * Uploads an ad asset. Returns the ID of the newly uploaded ad asset if
   * successful. (adAssets.upload)
   *
   * @param string $advertiserId Required. The ID of the advertiser this ad asset
   * belongs to.
   * @param UploadAdAssetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UploadAdAssetResponse
   * @throws \Google\Service\Exception
   */
  public function upload($advertiserId, UploadAdAssetRequest $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], UploadAdAssetResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdvertisersAdAssets::class, 'Google_Service_DisplayVideo_Resource_AdvertisersAdAssets');
