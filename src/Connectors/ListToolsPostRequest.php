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

class ListToolsPostRequest extends \Google\Model
{
  protected $executionConfigType = ExecutionConfig::class;
  protected $executionConfigDataType = '';
  /**
   * Page size.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Page token.
   *
   * @var string
   */
  public $pageToken;
  protected $toolSpecType = ToolSpec::class;
  protected $toolSpecDataType = '';

  /**
   * execution config for the request.
   *
   * @param ExecutionConfig $executionConfig
   */
  public function setExecutionConfig(ExecutionConfig $executionConfig)
  {
    $this->executionConfig = $executionConfig;
  }
  /**
   * @return ExecutionConfig
   */
  public function getExecutionConfig()
  {
    return $this->executionConfig;
  }
  /**
   * Page size.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Page token.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * List of tool specifications.
   *
   * @param ToolSpec $toolSpec
   */
  public function setToolSpec(ToolSpec $toolSpec)
  {
    $this->toolSpec = $toolSpec;
  }
  /**
   * @return ToolSpec
   */
  public function getToolSpec()
  {
    return $this->toolSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListToolsPostRequest::class, 'Google_Service_Connectors_ListToolsPostRequest');
