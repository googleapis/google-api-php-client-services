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

class GoogleCloudAiplatformV1BigQueryRequestSet extends \Google\Model
{
  /**
   * @var string[]
   */
  public $candidateResponseColumns;
  /**
   * @var string
   */
  public $promptColumn;
  /**
   * @var string
   */
  public $rubricsColumn;
  protected $samplingConfigType = GoogleCloudAiplatformV1BigQueryRequestSetSamplingConfig::class;
  protected $samplingConfigDataType = '';
  /**
   * @var string
   */
  public $uri;

  /**
   * @param string[]
   */
  public function setCandidateResponseColumns($candidateResponseColumns)
  {
    $this->candidateResponseColumns = $candidateResponseColumns;
  }
  /**
   * @return string[]
   */
  public function getCandidateResponseColumns()
  {
    return $this->candidateResponseColumns;
  }
  /**
   * @param string
   */
  public function setPromptColumn($promptColumn)
  {
    $this->promptColumn = $promptColumn;
  }
  /**
   * @return string
   */
  public function getPromptColumn()
  {
    return $this->promptColumn;
  }
  /**
   * @param string
   */
  public function setRubricsColumn($rubricsColumn)
  {
    $this->rubricsColumn = $rubricsColumn;
  }
  /**
   * @return string
   */
  public function getRubricsColumn()
  {
    return $this->rubricsColumn;
  }
  /**
   * @param GoogleCloudAiplatformV1BigQueryRequestSetSamplingConfig
   */
  public function setSamplingConfig(GoogleCloudAiplatformV1BigQueryRequestSetSamplingConfig $samplingConfig)
  {
    $this->samplingConfig = $samplingConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1BigQueryRequestSetSamplingConfig
   */
  public function getSamplingConfig()
  {
    return $this->samplingConfig;
  }
  /**
   * @param string
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1BigQueryRequestSet::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1BigQueryRequestSet');
