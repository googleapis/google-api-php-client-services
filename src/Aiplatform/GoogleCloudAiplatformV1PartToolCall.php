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

class GoogleCloudAiplatformV1PartToolCall extends \Google\Model
{
  /**
   * Unspecified tool type.
   */
  public const TOOL_TYPE_TOOL_TYPE_UNSPECIFIED = 'TOOL_TYPE_UNSPECIFIED';
  /**
   * Google search tool, maps to Tool.google_search.search_types.web_search.
   */
  public const TOOL_TYPE_GOOGLE_SEARCH_WEB = 'GOOGLE_SEARCH_WEB';
  /**
   * Image search tool, maps to Tool.google_search.search_types.image_search.
   */
  public const TOOL_TYPE_GOOGLE_SEARCH_IMAGE = 'GOOGLE_SEARCH_IMAGE';
  /**
   * URL context tool, maps to Tool.url_context.
   */
  public const TOOL_TYPE_URL_CONTEXT = 'URL_CONTEXT';
  /**
   * Google maps tool, maps to Tool.google_maps.
   */
  public const TOOL_TYPE_GOOGLE_MAPS = 'GOOGLE_MAPS';
  /**
   * Media Processing tool types (e.g. video, audio, etc.).
   */
  public const TOOL_TYPE_MEDIA_PROCESSING = 'MEDIA_PROCESSING';
  /**
   * Optional. The tool call arguments. Example: {"arg1" : "value1", "arg2" :
   * "value2" , ...}
   *
   * @var array[]
   */
  public $args;
  /**
   * Optional. Unique identifier of the tool call. The server returns the tool
   * response with the matching `id`.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. The type of tool that was called.
   *
   * @var string
   */
  public $toolType;

  /**
   * Optional. The tool call arguments. Example: {"arg1" : "value1", "arg2" :
   * "value2" , ...}
   *
   * @param array[] $args
   */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /**
   * @return array[]
   */
  public function getArgs()
  {
    return $this->args;
  }
  /**
   * Optional. Unique identifier of the tool call. The server returns the tool
   * response with the matching `id`.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. The type of tool that was called.
   *
   * Accepted values: TOOL_TYPE_UNSPECIFIED, GOOGLE_SEARCH_WEB,
   * GOOGLE_SEARCH_IMAGE, URL_CONTEXT, GOOGLE_MAPS, MEDIA_PROCESSING
   *
   * @param self::TOOL_TYPE_* $toolType
   */
  public function setToolType($toolType)
  {
    $this->toolType = $toolType;
  }
  /**
   * @return self::TOOL_TYPE_*
   */
  public function getToolType()
  {
    return $this->toolType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1PartToolCall::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1PartToolCall');
