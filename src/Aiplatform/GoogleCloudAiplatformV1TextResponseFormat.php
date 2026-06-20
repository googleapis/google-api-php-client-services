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

class GoogleCloudAiplatformV1TextResponseFormat extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const MIME_TYPE_MIME_TYPE_UNSPECIFIED = 'MIME_TYPE_UNSPECIFIED';
  /**
   * JSON output format.
   */
  public const MIME_TYPE_APPLICATION_JSON = 'APPLICATION_JSON';
  /**
   * Plain text output format.
   */
  public const MIME_TYPE_TEXT_PLAIN = 'TEXT_PLAIN';
  /**
   * Optional. The IANA standard MIME type of the response.
   *
   * @var string
   */
  public $mimeType;
  /**
   * Optional. The JSON schema that the output should conform to. Only
   * applicable when mime_type is APPLICATION_JSON.
   *
   * @var array
   */
  public $schema;

  /**
   * Optional. The IANA standard MIME type of the response.
   *
   * Accepted values: MIME_TYPE_UNSPECIFIED, APPLICATION_JSON, TEXT_PLAIN
   *
   * @param self::MIME_TYPE_* $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return self::MIME_TYPE_*
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
   * Optional. The JSON schema that the output should conform to. Only
   * applicable when mime_type is APPLICATION_JSON.
   *
   * @param array $schema
   */
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return array
   */
  public function getSchema()
  {
    return $this->schema;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1TextResponseFormat::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1TextResponseFormat');
