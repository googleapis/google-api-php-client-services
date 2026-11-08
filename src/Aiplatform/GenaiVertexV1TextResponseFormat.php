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

class GenaiVertexV1TextResponseFormat extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const MIME_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * JSON output format.
   */
  public const MIME_TYPE_TYPE_APPLICATION_JSON = 'TYPE_APPLICATION_JSON';
  /**
   * Plain text output format.
   */
  public const MIME_TYPE_TYPE_TEXT_PLAIN = 'TYPE_TEXT_PLAIN';
  /**
   * The MIME type of the text output.
   *
   * @var string
   */
  public $mimeType;
  protected $schemaType = GenaiVertexV1Struct::class;
  protected $schemaDataType = '';

  /**
   * The MIME type of the text output.
   *
   * Accepted values: TYPE_UNSPECIFIED, TYPE_APPLICATION_JSON, TYPE_TEXT_PLAIN
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
   * The JSON schema that the output should conform to. Only applicable when
   * mime_type is application/json. Supports a subset of JSON Schema.
   * `minLength`, `maxLength`, `minProperties`, `maxProperties`, `uniqueItems`,
   * `contains`, `minContains`, and `maxContains` are ignored and not enforced;
   * validate these in your application. `minItems` and `maxItems` are enforced.
   * Schemas that are too complex to enforce (for example, large `maxItems` on
   * nested arrays) return a 400 INVALID_ARGUMENT error.
   *
   * @param GenaiVertexV1Struct $schema
   */
  public function setSchema(GenaiVertexV1Struct $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return GenaiVertexV1Struct
   */
  public function getSchema()
  {
    return $this->schema;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1TextResponseFormat::class, 'Google_Service_Aiplatform_GenaiVertexV1TextResponseFormat');
