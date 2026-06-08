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

class GoogleCloudDataplexV1UnstructuredDataProfileSpec extends \Google\Model
{
  /**
   * Optional. Customized prompt for unstructured data profile. The field will
   * be used as part of the prompt, could be some instruction, specifying skill,
   * or specific area to focus.
   *
   * @var string
   */
  public $customizedPrompt;
  /**
   * Optional. Whether to use the global model.
   *
   * @var bool
   */
  public $globalEndpointEnabled;
  /**
   * Optional. Whether to publish graph-profile as aspect on the catalog entry.
   *
   * @var bool
   */
  public $graphProfilePublishingEnabled;

  /**
   * Optional. Customized prompt for unstructured data profile. The field will
   * be used as part of the prompt, could be some instruction, specifying skill,
   * or specific area to focus.
   *
   * @param string $customizedPrompt
   */
  public function setCustomizedPrompt($customizedPrompt)
  {
    $this->customizedPrompt = $customizedPrompt;
  }
  /**
   * @return string
   */
  public function getCustomizedPrompt()
  {
    return $this->customizedPrompt;
  }
  /**
   * Optional. Whether to use the global model.
   *
   * @param bool $globalEndpointEnabled
   */
  public function setGlobalEndpointEnabled($globalEndpointEnabled)
  {
    $this->globalEndpointEnabled = $globalEndpointEnabled;
  }
  /**
   * @return bool
   */
  public function getGlobalEndpointEnabled()
  {
    return $this->globalEndpointEnabled;
  }
  /**
   * Optional. Whether to publish graph-profile as aspect on the catalog entry.
   *
   * @param bool $graphProfilePublishingEnabled
   */
  public function setGraphProfilePublishingEnabled($graphProfilePublishingEnabled)
  {
    $this->graphProfilePublishingEnabled = $graphProfilePublishingEnabled;
  }
  /**
   * @return bool
   */
  public function getGraphProfilePublishingEnabled()
  {
    return $this->graphProfilePublishingEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1UnstructuredDataProfileSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1UnstructuredDataProfileSpec');
