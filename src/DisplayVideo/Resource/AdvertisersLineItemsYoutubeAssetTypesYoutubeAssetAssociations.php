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

use Google\Service\DisplayVideo\DisplayvideoEmpty;
use Google\Service\DisplayVideo\ListYoutubeAssetAssociationsResponse;
use Google\Service\DisplayVideo\YoutubeAssetAssociation;

/**
 * The "youtubeAssetAssociations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google\Service\DisplayVideo(...);
 *   $youtubeAssetAssociations = $displayvideoService->advertisers_lineItems_youtubeAssetTypes_youtubeAssetAssociations;
 *  </code>
 */
class AdvertisersLineItemsYoutubeAssetTypesYoutubeAssetAssociations extends \Google\Service\Resource
{
  /**
   * Creates a new association between an entity (line item or ad group) and a
   * YouTube asset. Returns the newly created association if successful.
   * (youtubeAssetAssociations.create)
   *
   * @param string $advertiserId Required. The ID of the advertiser this request
   * is for.
   * @param string $lineItemId The unique ID of the line item linked.
   * @param string $youtubeAssetType Required. The type of the linked YouTube
   * asset in the association.
   * @param YoutubeAssetAssociation $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string linkedEntity.adGroupId The unique ID of the ad group
   * linked.
   * @return YoutubeAssetAssociation
   * @throws \Google\Service\Exception
   */
  public function create($advertiserId, $lineItemId, $youtubeAssetType, YoutubeAssetAssociation $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'lineItemId' => $lineItemId, 'youtubeAssetType' => $youtubeAssetType, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], YoutubeAssetAssociation::class);
  }
  /**
   * Deletes an existing association between an entity (line item or ad group) and
   * a YouTube asset. (youtubeAssetAssociations.delete)
   *
   * @param string $advertiserId Required. The ID of the advertiser this request
   * is for.
   * @param string $lineItemId The unique ID of the line item linked.
   * @param string $youtubeAssetType Required. The YouTube asset type this request
   * is for.
   * @param string $youtubeAssetAssociationId Required. The ID of the YouTube
   * asset in the association. For location associations: This should be the ID of
   * the asset set linked, or 0 if the association stands for location asset is
   * disabled. For affiliate location associations: This should be the ID of the
   * asset set linked, or 0 if the association stands for affiliate location asset
   * is disabled. For sitelink associations: This should be the ID of the sitelink
   * asset linked.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string linkedEntity.adGroupId The unique ID of the ad group
   * linked.
   * @return DisplayvideoEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($advertiserId, $lineItemId, $youtubeAssetType, $youtubeAssetAssociationId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'lineItemId' => $lineItemId, 'youtubeAssetType' => $youtubeAssetType, 'youtubeAssetAssociationId' => $youtubeAssetAssociationId];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DisplayvideoEmpty::class);
  }
  /**
   * Lists the YouTube asset associations for given resource. (youtubeAssetAssocia
   * tions.listAdvertisersLineItemsYoutubeAssetTypesYoutubeAssetAssociations)
   *
   * @param string $advertiserId Required. The ID of the advertiser this request
   * is for.
   * @param string $lineItemId The unique ID of the line item linked.
   * @param string $youtubeAssetType Required. The type of YouTube asset in the
   * association.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string linkedEntity.adGroupId The unique ID of the ad group
   * linked.
   * @opt_param string orderBy Optional. Field by which to sort the list. The only
   * acceptable values are: `linkedYoutubeAsset.locationAssetFilter.assetSetId`,
   * `linkedYoutubeAsset.affiliateLocationAssetFilter.assetSetId`,
   * `linkedYoutubeAsset.sitelinkAsset.assetId` The default sorting order is
   * ascending. To specify descending order for a field, a suffix " desc" should
   * be added to the field name. Example:
   * `linkedYoutubeAsset.sitelinkAsset.assetId desc`.
   * @opt_param int pageSize Optional. Requested page size. Must be between `1`
   * and `10000`. If unspecified will default to `100`.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListYoutubeAssetAssociationsResponse
   * @throws \Google\Service\Exception
   */
  public function listAdvertisersLineItemsYoutubeAssetTypesYoutubeAssetAssociations($advertiserId, $lineItemId, $youtubeAssetType, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'lineItemId' => $lineItemId, 'youtubeAssetType' => $youtubeAssetType];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListYoutubeAssetAssociationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdvertisersLineItemsYoutubeAssetTypesYoutubeAssetAssociations::class, 'Google_Service_DisplayVideo_Resource_AdvertisersLineItemsYoutubeAssetTypesYoutubeAssetAssociations');
