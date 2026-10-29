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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataDocumentationResultDataProductResultAssetDescription extends \Google\Model
{
  /**
   * Output only. A generated description for the asset.
   *
   * @var string
   */
  public $overview;
  /**
   * Output only. The service-qualified full resource name of the asset.
   * Example: //bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/
   * tables/TABLE_ID
   *
   * @var string
   */
  public $resource;

  /**
   * Output only. A generated description for the asset.
   *
   * @param string $overview
   */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /**
   * @return string
   */
  public function getOverview()
  {
    return $this->overview;
  }
  /**
   * Output only. The service-qualified full resource name of the asset.
   * Example: //bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/
   * tables/TABLE_ID
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDocumentationResultDataProductResultAssetDescription::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationResultDataProductResultAssetDescription');
