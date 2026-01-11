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

class GoogleCloudAiplatformV1VertexMultimodalDatasetDestination extends \Google\Model
{
  protected $bigqueryDestinationType = GoogleCloudAiplatformV1BigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  /**
   * Optional. Display name of the output dataset.
   *
   * @var string
   */
  public $displayName;

  /**
   * Optional. The destination of the underlying BigQuery table that will be
   * created for the output Multimodal Dataset. If not specified, the BigQuery
   * table will be created in a default BigQuery dataset.
   *
   * @param GoogleCloudAiplatformV1BigQueryDestination $bigqueryDestination
   */
  public function setBigqueryDestination(GoogleCloudAiplatformV1BigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /**
   * @return GoogleCloudAiplatformV1BigQueryDestination
   */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /**
   * Optional. Display name of the output dataset.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1VertexMultimodalDatasetDestination::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1VertexMultimodalDatasetDestination');
