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

class GoogleCloudAiplatformV1EvaluationItem extends \Google\Model
{
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $displayName;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  /**
   * @var string
   */
  public $evaluationItemType;
  protected $evaluationRequestType = GoogleCloudAiplatformV1EvaluationRequest::class;
  protected $evaluationRequestDataType = '';
  protected $evaluationResponseType = GoogleCloudAiplatformV1EvaluationResult::class;
  protected $evaluationResponseDataType = '';
  /**
   * @var string
   */
  public $gcsUri;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var array
   */
  public $metadata;
  /**
   * @var string
   */
  public $name;

  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
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
  /**
   * @param GoogleRpcStatus
   */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param string
   */
  public function setEvaluationItemType($evaluationItemType)
  {
    $this->evaluationItemType = $evaluationItemType;
  }
  /**
   * @return string
   */
  public function getEvaluationItemType()
  {
    return $this->evaluationItemType;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRequest
   */
  public function setEvaluationRequest(GoogleCloudAiplatformV1EvaluationRequest $evaluationRequest)
  {
    $this->evaluationRequest = $evaluationRequest;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRequest
   */
  public function getEvaluationRequest()
  {
    return $this->evaluationRequest;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationResult
   */
  public function setEvaluationResponse(GoogleCloudAiplatformV1EvaluationResult $evaluationResponse)
  {
    $this->evaluationResponse = $evaluationResponse;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationResult
   */
  public function getEvaluationResponse()
  {
    return $this->evaluationResponse;
  }
  /**
   * @param string
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param array
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return array
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationItem::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationItem');
