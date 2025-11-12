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

class GoogleCloudAiplatformV1PreTunedModel extends \Google\Model
{
  /**
   * @var string
   */
  public $baseModel;
  /**
   * @var string
   */
  public $checkpointId;
  /**
   * @var string
   */
  public $tunedModelName;

  /**
   * @param string
   */
  public function setBaseModel($baseModel)
  {
    $this->baseModel = $baseModel;
  }
  /**
   * @return string
   */
  public function getBaseModel()
  {
    return $this->baseModel;
  }
  /**
   * @param string
   */
  public function setCheckpointId($checkpointId)
  {
    $this->checkpointId = $checkpointId;
  }
  /**
   * @return string
   */
  public function getCheckpointId()
  {
    return $this->checkpointId;
  }
  /**
   * @param string
   */
  public function setTunedModelName($tunedModelName)
  {
    $this->tunedModelName = $tunedModelName;
  }
  /**
   * @return string
   */
  public function getTunedModelName()
  {
    return $this->tunedModelName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1PreTunedModel::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1PreTunedModel');
