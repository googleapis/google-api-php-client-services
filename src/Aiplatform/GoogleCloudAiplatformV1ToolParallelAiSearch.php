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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ToolParallelAiSearch extends \Google\Model
{
  /**
   * Optional. The API key for ParallelAiSearch. If an API key is not provided,
   * the system will attempt to verify access by checking for an active
   * Parallel.ai subscription through the Google Cloud Marketplace. See
   * https://docs.parallel.ai/search/search-quickstart for more details.
   *
   * @var string
   */
  public $apiKey;
  /**
   * Optional. Custom configs for ParallelAiSearch. This field can be used to
   * pass any parameter from the Parallel.ai Search API. See the Parallel.ai
   * documentation for the full list of available parameters and their usage:
   * https://docs.parallel.ai/api-reference/search-beta/search Currently only
   * `source_policy`, `excerpts`, `max_results`, `mode`, `fetch_policy` can be
   * set via this field. For example: { "source_policy": { "include_domains":
   * ["google.com", "wikipedia.org"], "exclude_domains": ["example.com"] },
   * "fetch_policy": { "max_age_seconds": 3600 } }
   *
   * @var array[]
   */
  public $customConfigs;

  /**
   * Optional. The API key for ParallelAiSearch. If an API key is not provided,
   * the system will attempt to verify access by checking for an active
   * Parallel.ai subscription through the Google Cloud Marketplace. See
   * https://docs.parallel.ai/search/search-quickstart for more details.
   *
   * @param string $apiKey
   */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /**
   * @return string
   */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /**
   * Optional. Custom configs for ParallelAiSearch. This field can be used to
   * pass any parameter from the Parallel.ai Search API. See the Parallel.ai
   * documentation for the full list of available parameters and their usage:
   * https://docs.parallel.ai/api-reference/search-beta/search Currently only
   * `source_policy`, `excerpts`, `max_results`, `mode`, `fetch_policy` can be
   * set via this field. For example: { "source_policy": { "include_domains":
   * ["google.com", "wikipedia.org"], "exclude_domains": ["example.com"] },
   * "fetch_policy": { "max_age_seconds": 3600 } }
   *
   * @param array[] $customConfigs
   */
  public function setCustomConfigs($customConfigs)
  {
    $this->customConfigs = $customConfigs;
  }
  /**
   * @return array[]
   */
  public function getCustomConfigs()
  {
    return $this->customConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ToolParallelAiSearch::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ToolParallelAiSearch');
