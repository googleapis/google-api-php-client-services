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

namespace Google\Service\Document;

class GoogleCloudDocumentaiV1GenerateSchemaVersionResponse extends \Google\Model
{
  protected $schemaVersionType = GoogleCloudDocumentaiV1SchemaVersion::class;
  protected $schemaVersionDataType = '';

  /**
   * @param GoogleCloudDocumentaiV1SchemaVersion
   */
  public function setSchemaVersion(GoogleCloudDocumentaiV1SchemaVersion $schemaVersion)
  {
    $this->schemaVersion = $schemaVersion;
  }
  /**
   * @return GoogleCloudDocumentaiV1SchemaVersion
   */
  public function getSchemaVersion()
  {
    return $this->schemaVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1GenerateSchemaVersionResponse::class, 'Google_Service_Document_GoogleCloudDocumentaiV1GenerateSchemaVersionResponse');
