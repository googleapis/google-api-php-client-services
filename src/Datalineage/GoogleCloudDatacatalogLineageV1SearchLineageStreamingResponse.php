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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1SearchLineageStreamingResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  protected $linksType = GoogleCloudDatacatalogLineageV1LineageLink::class;
  protected $linksDataType = 'array';
  /**
   * Unordered list. Unreachable resources. If non-empty, the result set might
   * be incomplete. Currently, only locations are supported. Format:
   * `projects/[PROJECT_NUMBER]/locations/[LOCATION]` Example:
   * projects/123456789/locations/us-east1
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * Output only. The lineage links that match the search criteria. Can be empty
   * if no links match.
   *
   * @param GoogleCloudDatacatalogLineageV1LineageLink[] $links
   */
  public function setLinks($links)
  {
    $this->links = $links;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1LineageLink[]
   */
  public function getLinks()
  {
    return $this->links;
  }
  /**
   * Unordered list. Unreachable resources. If non-empty, the result set might
   * be incomplete. Currently, only locations are supported. Format:
   * `projects/[PROJECT_NUMBER]/locations/[LOCATION]` Example:
   * projects/123456789/locations/us-east1
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1SearchLineageStreamingResponse::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1SearchLineageStreamingResponse');
