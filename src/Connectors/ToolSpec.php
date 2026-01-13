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

namespace Google\Service\Connectors;

class ToolSpec extends \Google\Collection
{
  protected $collection_key = 'toolDefinitions';
  /**
   * List of tool definitions.
   *
   * @var array[]
   */
  public $toolDefinitions;
  /**
   * Version of the tool spec. Format:
   * providerId/connectorId/versionId/toolSpecId
   *
   * @var string
   */
  public $toolSpecVersion;

  /**
   * List of tool definitions.
   *
   * @param array[] $toolDefinitions
   */
  public function setToolDefinitions($toolDefinitions)
  {
    $this->toolDefinitions = $toolDefinitions;
  }
  /**
   * @return array[]
   */
  public function getToolDefinitions()
  {
    return $this->toolDefinitions;
  }
  /**
   * Version of the tool spec. Format:
   * providerId/connectorId/versionId/toolSpecId
   *
   * @param string $toolSpecVersion
   */
  public function setToolSpecVersion($toolSpecVersion)
  {
    $this->toolSpecVersion = $toolSpecVersion;
  }
  /**
   * @return string
   */
  public function getToolSpecVersion()
  {
    return $this->toolSpecVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ToolSpec::class, 'Google_Service_Connectors_ToolSpec');
