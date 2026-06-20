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

class GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource extends \Google\Model
{
  /**
   * Required. The content of the inline data.
   *
   * @var string
   */
  public $content;
  protected $importSchemaConfigType = GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig::class;
  protected $importSchemaConfigDataType = '';

  /**
   * Required. The content of the inline data.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Required. Schema configuration for the inline data.
   *
   * @param GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig $importSchemaConfig
   */
  public function setImportSchemaConfig(GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig $importSchemaConfig)
  {
    $this->importSchemaConfig = $importSchemaConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1ImportEvaluationSetRequestImportSchemaConfig
   */
  public function getImportSchemaConfig()
  {
    return $this->importSchemaConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImportEvaluationSetRequestInlineSource');
