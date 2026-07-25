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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1McpServerConfig extends \Google\Collection
{
  protected $collection_key = 'tools';
  protected $apigeeXTargetDetailsType = GoogleCloudApihubV1ApigeeXTargetDetails::class;
  protected $apigeeXTargetDetailsDataType = '';
  protected $toolsType = GoogleCloudApihubV1McpToolConfig::class;
  protected $toolsDataType = 'array';

  /**
   * Optional. The target Apigee X configuration.
   *
   * @param GoogleCloudApihubV1ApigeeXTargetDetails $apigeeXTargetDetails
   */
  public function setApigeeXTargetDetails(GoogleCloudApihubV1ApigeeXTargetDetails $apigeeXTargetDetails)
  {
    $this->apigeeXTargetDetails = $apigeeXTargetDetails;
  }
  /**
   * @return GoogleCloudApihubV1ApigeeXTargetDetails
   */
  public function getApigeeXTargetDetails()
  {
    return $this->apigeeXTargetDetails;
  }
  /**
   * Required. The tools to expose on the MCP server.
   *
   * @param GoogleCloudApihubV1McpToolConfig[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return GoogleCloudApihubV1McpToolConfig[]
   */
  public function getTools()
  {
    return $this->tools;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1McpServerConfig::class, 'Google_Service_APIhub_GoogleCloudApihubV1McpServerConfig');
