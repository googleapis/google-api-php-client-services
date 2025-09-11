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

class GoogleCloudAiplatformV1GenerateInstanceRubricsRequest extends \Google\Collection
{
  protected $collection_key = 'contents';
  protected $contentsType = GoogleCloudAiplatformV1Content::class;
  protected $contentsDataType = 'array';
  protected $predefinedRubricGenerationSpecType = GoogleCloudAiplatformV1PredefinedMetricSpec::class;
  protected $predefinedRubricGenerationSpecDataType = '';
  protected $rubricGenerationSpecType = GoogleCloudAiplatformV1RubricGenerationSpec::class;
  protected $rubricGenerationSpecDataType = '';

  /**
   * @param GoogleCloudAiplatformV1Content[]
   */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /**
   * @return GoogleCloudAiplatformV1Content[]
   */
  public function getContents()
  {
    return $this->contents;
  }
  /**
   * @param GoogleCloudAiplatformV1PredefinedMetricSpec
   */
  public function setPredefinedRubricGenerationSpec(GoogleCloudAiplatformV1PredefinedMetricSpec $predefinedRubricGenerationSpec)
  {
    $this->predefinedRubricGenerationSpec = $predefinedRubricGenerationSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1PredefinedMetricSpec
   */
  public function getPredefinedRubricGenerationSpec()
  {
    return $this->predefinedRubricGenerationSpec;
  }
  /**
   * @param GoogleCloudAiplatformV1RubricGenerationSpec
   */
  public function setRubricGenerationSpec(GoogleCloudAiplatformV1RubricGenerationSpec $rubricGenerationSpec)
  {
    $this->rubricGenerationSpec = $rubricGenerationSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1RubricGenerationSpec
   */
  public function getRubricGenerationSpec()
  {
    return $this->rubricGenerationSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GenerateInstanceRubricsRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GenerateInstanceRubricsRequest');
