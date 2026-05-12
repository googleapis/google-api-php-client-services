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
   * Optional. The text representing contextual information for which metadata
   * context is being requested.
   *
   * @var string
   */
  public $context;
  /**
   * Optional. Allows to configure the context.Supported options: format - The
   * format of the context (one of yaml, xml, json, default is yaml).
   * context_budget - If provided, the output will be intelligently truncated on
   * a best-effort basis to contain approximately the desired amount of
   * characters. There is no guarantee to achieve the specific amount.
   *
   * @var string[]
   */
  public $options;
  /**
   * Required. The entry names to look up the context for. The maximum number of
   * resources for a request is limited to 10.Examples:projects/{project}/locati
   * ons/{location}/entryGroups/{entry_group}/entries/{entry}
   *
   * @var string[]
   */
  public $resources;

  /**
   * Optional. The text representing contextual information for which metadata
   * context is being requested.
   *
   * @param string $context
   */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /**
   * @return string
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * Optional. Allows to configure the context.Supported options: format - The
   * format of the context (one of yaml, xml, json, default is yaml).
   * context_budget - If provided, the output will be intelligently truncated on
   * a best-effort basis to contain approximately the desired amount of
   * characters. There is no guarantee to achieve the specific amount.
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
   * Required. The entry names to look up the context for. The maximum number of
   * resources for a request is limited to 10.Examples:projects/{project}/locati
   * ons/{location}/entryGroups/{entry_group}/entries/{entry}
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
