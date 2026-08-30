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

namespace Google\Service\CurationPartners\Resource;

use Google\Service\CurationPartners\ActivateDataSegmentRequest;
use Google\Service\CurationPartners\DataSegment;
use Google\Service\CurationPartners\DeactivateDataSegmentRequest;
use Google\Service\CurationPartners\ListDataSegmentsResponse;

/**
 * The "dataSegments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $curationpartnersService = new Google\Service\CurationPartners(...);
 *   $dataSegments = $curationpartnersService->curators_dataSegments;
 *  </code>
 */
class CuratorsDataSegments extends \Google\Service\Resource
{
  /**
   * Activates a data segment. (dataSegments.activate)
   *
   * @param string $name Required. Name of data segment to activate. Format:
   * `curators/{accountId}/dataSegments/{curatorDataSegmentId}`
   * @param ActivateDataSegmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DataSegment
   * @throws \Google\Service\Exception
   */
  public function activate($name, ActivateDataSegmentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('activate', [$params], DataSegment::class);
  }
  /**
   * Creates a data segment owned by the listed curator. The data segment will be
   * created in the `ACTIVE` state, meaning it will be immediately available for
   * buyers to use in preferred deals, private auction deals, and auction
   * packages. (dataSegments.create)
   *
   * @param string $parent Required. The parent resource where this data segment
   * will be created. Format: `curators/{accountId}`
   * @param DataSegment $postBody
   * @param array $optParams Optional parameters.
   * @return DataSegment
   * @throws \Google\Service\Exception
   */
  public function create($parent, DataSegment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], DataSegment::class);
  }
  /**
   * Deactivates a data segment. (dataSegments.deactivate)
   *
   * @param string $name Required. Name of data segment to deactivate. Format:
   * `curators/{accountId}/dataSegments/{curatorDataSegmentId}`
   * @param DeactivateDataSegmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DataSegment
   * @throws \Google\Service\Exception
   */
  public function deactivate($name, DeactivateDataSegmentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('deactivate', [$params], DataSegment::class);
  }
  /**
   * Gets a data segment given its name. (dataSegments.get)
   *
   * @param string $name Required. Name of data segment to get. Format:
   * `curators/{accountId}/dataSegments/{curatorDataSegmentId}`
   * @param array $optParams Optional parameters.
   * @return DataSegment
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], DataSegment::class);
  }
  /**
   * List the data segments owned by a curator.
   * (dataSegments.listCuratorsDataSegments)
   *
   * @param string $parent Required. Name of the parent curator that can access
   * the data segment. Format: `curators/{accountId}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. The server may return
   * fewer results than requested. Max allowed page size is 500. If unspecified,
   * the server will default to 500.
   * @opt_param string pageToken Optional. The page token as returned.
   * ListDataSegmentsResponse.nextPageToken
   * @return ListDataSegmentsResponse
   * @throws \Google\Service\Exception
   */
  public function listCuratorsDataSegments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDataSegmentsResponse::class);
  }
  /**
   * Updates a data segment. (dataSegments.patch)
   *
   * @param string $name Immutable. Identifier. The unique identifier for the data
   * segment. Account ID corresponds to the account ID that created the segment.
   * Format: `curators/{curatorAccountId}/dataSegments/{curatorDataSegmentId}`
   * @param DataSegment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. List of fields to be updated. If empty
   * or unspecified, the service will update all fields populated in the update
   * request excluding the output only fields and primitive fields with default
   * value. Note that explicit field mask is required in order to reset a
   * primitive field back to its default value, for example, false for boolean
   * fields, 0 for integer fields. A special field mask consisting of a single
   * path "*" can be used to indicate full replacement(the equivalent of PUT
   * method), updatable fields unset or unspecified in the input will be cleared
   * or set to default value. Output only fields will be ignored regardless of the
   * value of updateMask.
   * @return DataSegment
   * @throws \Google\Service\Exception
   */
  public function patch($name, DataSegment $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], DataSegment::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CuratorsDataSegments::class, 'Google_Service_CurationPartners_Resource_CuratorsDataSegments');
