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

class GoogleCloudAiplatformV1AgentTool extends \Google\Model
{
  /**
   * Optional. Not used; the tool is resolved from `name` via Agent Registry.
   *
   * @var string[]
   */
  public $headers;
  /**
   * Optional. The tool's Google Cloud resource name, used to resolve the tool.
   * Applicable when `type` is `mcp_server` or `endpoint` (a tool registered in
   * Agent Registry), for example
   * `projects/{project}/locations/{location}/.../mcpServers/{id}` or
   * `projects/{project}/locations/{location}/.../endpoints/{id}`.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The type of the tool. Supported types: * `audio_generation` *
   * `endpoint` * `google_search` * `image_generation` * `mcp_server` *
   * `speech_generation` * `url_context` * `video_generation`
   *
   * @var string
   */
  public $type;
  /**
   * Optional. The runtime reference is resolved from `name` via Agent Registry
   * (`GetMcpServer` / `GetEndpoint`), so this is not required.
   *
   * @var string
   */
  public $url;

  /**
   * Optional. Not used; the tool is resolved from `name` via Agent Registry.
   *
   * @param string[] $headers
   */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /**
   * @return string[]
   */
  public function getHeaders()
  {
    return $this->headers;
  }
  /**
   * Optional. The tool's Google Cloud resource name, used to resolve the tool.
   * Applicable when `type` is `mcp_server` or `endpoint` (a tool registered in
   * Agent Registry), for example
   * `projects/{project}/locations/{location}/.../mcpServers/{id}` or
   * `projects/{project}/locations/{location}/.../endpoints/{id}`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. The type of the tool. Supported types: * `audio_generation` *
   * `endpoint` * `google_search` * `image_generation` * `mcp_server` *
   * `speech_generation` * `url_context` * `video_generation`
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Optional. The runtime reference is resolved from `name` via Agent Registry
   * (`GetMcpServer` / `GetEndpoint`), so this is not required.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentTool::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentTool');
