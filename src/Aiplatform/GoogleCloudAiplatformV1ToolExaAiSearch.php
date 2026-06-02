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

class GoogleCloudAiplatformV1ToolExaAiSearch extends \Google\Model
{
  /**
   * Required. The API key for ExaAiSearch.
   *
   * @var string
   */
  public $apiKey;
  /**
   * Optional. This field can be used to pass any parameter from the Exa.ai
   * Search API.
   *
   * @var array[]
   */
  public $customConfigs;

  /**
   * Required. The API key for ExaAiSearch.
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
   * Optional. This field can be used to pass any parameter from the Exa.ai
   * Search API.
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
class_alias(GoogleCloudAiplatformV1ToolExaAiSearch::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ToolExaAiSearch');
