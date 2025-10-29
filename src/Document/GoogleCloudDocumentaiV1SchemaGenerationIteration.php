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

class GoogleCloudDocumentaiV1SchemaGenerationIteration extends \Google\Model
{
  protected $adjustedSchemaType = GoogleCloudDocumentaiV1SchemaVersion::class;
  protected $adjustedSchemaDataType = '';
  protected $generatedSchemaType = GoogleCloudDocumentaiV1SchemaVersion::class;
  protected $generatedSchemaDataType = '';
  /**
   * @var string
   */
  public $prompt;

  /**
   * @param GoogleCloudDocumentaiV1SchemaVersion
   */
  public function setAdjustedSchema(GoogleCloudDocumentaiV1SchemaVersion $adjustedSchema)
  {
    $this->adjustedSchema = $adjustedSchema;
  }
  /**
   * @return GoogleCloudDocumentaiV1SchemaVersion
   */
  public function getAdjustedSchema()
  {
    return $this->adjustedSchema;
  }
  /**
   * @param GoogleCloudDocumentaiV1SchemaVersion
   */
  public function setGeneratedSchema(GoogleCloudDocumentaiV1SchemaVersion $generatedSchema)
  {
    $this->generatedSchema = $generatedSchema;
  }
  /**
   * @return GoogleCloudDocumentaiV1SchemaVersion
   */
  public function getGeneratedSchema()
  {
    return $this->generatedSchema;
  }
  /**
   * @param string
   */
  public function setPrompt($prompt)
  {
    $this->prompt = $prompt;
  }
  /**
   * @return string
   */
  public function getPrompt()
  {
    return $this->prompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1SchemaGenerationIteration::class, 'Google_Service_Document_GoogleCloudDocumentaiV1SchemaGenerationIteration');
