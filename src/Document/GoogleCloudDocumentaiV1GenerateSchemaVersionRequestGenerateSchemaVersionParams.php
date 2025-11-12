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

class GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams extends \Google\Model
{
  protected $historyType = GoogleCloudDocumentaiV1SchemaGenerationHistory::class;
  protected $historyDataType = '';
  /**
   * @var string
   */
  public $prompt;

  /**
   * @param GoogleCloudDocumentaiV1SchemaGenerationHistory
   */
  public function setHistory(GoogleCloudDocumentaiV1SchemaGenerationHistory $history)
  {
    $this->history = $history;
  }
  /**
   * @return GoogleCloudDocumentaiV1SchemaGenerationHistory
   */
  public function getHistory()
  {
    return $this->history;
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
class_alias(GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams::class, 'Google_Service_Document_GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams');
