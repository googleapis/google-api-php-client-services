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

class GoogleCloudDataplexV1LookupContextRequest extends \Google\Collection
{
  protected $collection_key = 'resources';
  /**
   * Optional. Allows to configure the context.
   *
   * @var string[]
   */
  public $options;
  /**
   * Required. The entry names to lookup context for. The request should have
   * max 10 of those.Examples:projects/{project}/locations/{location}/entryGroup
   * s/{entry_group}/entries/{entry}
   *
   * @var string[]
   */
  public $resources;

  /**
   * Optional. Allows to configure the context.
   *
   * @param string[] $options
   */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /**
   * @return string[]
   */
  public function getOptions()
  {
    return $this->options;
  }
  /**
   * Required. The entry names to lookup context for. The request should have
   * max 10 of those.Examples:projects/{project}/locations/{location}/entryGroup
   * s/{entry_group}/entries/{entry}
   *
   * @param string[] $resources
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return string[]
   */
  public function getResources()
  {
    return $this->resources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1LookupContextRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1LookupContextRequest');
