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

namespace Google\Service\NetworkServices;

class ExtensionBindingMatchConditionToDestination extends \Google\Collection
{
  protected $collection_key = 'resources';
  protected $headerSetType = ExtensionBindingMatchConditionToDestinationHeaderSet::class;
  protected $headerSetDataType = '';
  protected $hostsType = ExtensionBindingMatchConditionStringMatch::class;
  protected $hostsDataType = 'array';
  protected $pathsType = ExtensionBindingMatchConditionStringMatch::class;
  protected $pathsDataType = 'array';
  protected $resourcesType = ExtensionBindingMatchConditionStringMatch::class;
  protected $resourcesDataType = 'array';

  /**
   * Optional. A set of HTTP headers to match against. If not specified,
   * requests with any headers are matched.
   *
   * @param ExtensionBindingMatchConditionToDestinationHeaderSet $headerSet
   */
  public function setHeaderSet(ExtensionBindingMatchConditionToDestinationHeaderSet $headerSet)
  {
    $this->headerSet = $headerSet;
  }
  /**
   * @return ExtensionBindingMatchConditionToDestinationHeaderSet
   */
  public function getHeaderSet()
  {
    return $this->headerSet;
  }
  /**
   * Optional. A list of HTTP hosts to match against. Limited to 10 hosts. If
   * not specified, any host is allowed. If specified, a match occurs if any of
   * the hosts matches the host value in the request.
   *
   * @param ExtensionBindingMatchConditionStringMatch[] $hosts
   */
  public function setHosts($hosts)
  {
    $this->hosts = $hosts;
  }
  /**
   * @return ExtensionBindingMatchConditionStringMatch[]
   */
  public function getHosts()
  {
    return $this->hosts;
  }
  /**
   * Optional. A list of paths to match against. Limited to 10 paths. If not
   * specified, any path is allowed. Note that this path match includes the
   * query parameters. For gRPC services, this should be a fully qualified name
   * of the form `/package.service/method`.
   *
   * @param ExtensionBindingMatchConditionStringMatch[] $paths
   */
  public function setPaths($paths)
  {
    $this->paths = $paths;
  }
  /**
   * @return ExtensionBindingMatchConditionStringMatch[]
   */
  public function getPaths()
  {
    return $this->paths;
  }
  /**
   * Optional. A list of non-empty strings whose value is matched against the
   * resource to which a request is sent (for example, an `Agent` in
   * `AiApplication`). If not specified, any resource is allowed. If specified,
   * a match occurs if any of the resources matches the resource value in the
   * request. Limited to 5 resources. When matching against resources in the
   * Agent Registry, use the URNs of the registry resources.
   *
   * @param ExtensionBindingMatchConditionStringMatch[] $resources
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return ExtensionBindingMatchConditionStringMatch[]
   */
  public function getResources()
  {
    return $this->resources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtensionBindingMatchConditionToDestination::class, 'Google_Service_NetworkServices_ExtensionBindingMatchConditionToDestination');
