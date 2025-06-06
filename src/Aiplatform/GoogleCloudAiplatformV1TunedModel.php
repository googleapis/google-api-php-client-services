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

class GoogleCloudAiplatformV1TunedModel extends \Google\Collection
{
  protected $collection_key = 'checkpoints';
  protected $checkpointsType = GoogleCloudAiplatformV1TunedModelCheckpoint::class;
  protected $checkpointsDataType = 'array';
  /**
   * @var string
   */
  public $endpoint;
  /**
   * @var string
   */
  public $model;

  /**
   * @param GoogleCloudAiplatformV1TunedModelCheckpoint[]
   */
  public function setCheckpoints($checkpoints)
  {
    $this->checkpoints = $checkpoints;
  }
  /**
   * @return GoogleCloudAiplatformV1TunedModelCheckpoint[]
   */
  public function getCheckpoints()
  {
    return $this->checkpoints;
  }
  /**
   * @param string
   */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /**
   * @return string
   */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /**
   * @param string
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1TunedModel::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1TunedModel');
