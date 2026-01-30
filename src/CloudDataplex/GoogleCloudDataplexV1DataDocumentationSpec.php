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

class GoogleCloudDataplexV1DataDocumentationSpec extends \Google\Collection
{
  protected $collection_key = 'generationScopes';
  /**
   * Optional. Whether to publish result to Dataplex Catalog.
   *
   * @var bool
   */
  public $catalogPublishingEnabled;
  /**
   * Optional. Specifies which components of the data documentation to generate.
   * Any component that is required to generate the specified components will
   * also be generated. If no generation scope is specified, all available
   * documentation components will be generated.
   *
   * @var string[]
   */
  public $generationScopes;

  /**
   * Optional. Whether to publish result to Dataplex Catalog.
   *
   * @param bool $catalogPublishingEnabled
   */
  public function setCatalogPublishingEnabled($catalogPublishingEnabled)
  {
    $this->catalogPublishingEnabled = $catalogPublishingEnabled;
  }
  /**
   * @return bool
   */
  public function getCatalogPublishingEnabled()
  {
    return $this->catalogPublishingEnabled;
  }
  /**
   * Optional. Specifies which components of the data documentation to generate.
   * Any component that is required to generate the specified components will
   * also be generated. If no generation scope is specified, all available
   * documentation components will be generated.
   *
   * @param string[] $generationScopes
   */
  public function setGenerationScopes($generationScopes)
  {
    $this->generationScopes = $generationScopes;
  }
  /**
   * @return string[]
   */
  public function getGenerationScopes()
  {
    return $this->generationScopes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDocumentationSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationSpec');
