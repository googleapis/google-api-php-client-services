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

class GoogleCloudAiplatformV1AnalyzedInvocation extends \Google\Model
{
  /**
   * Unspecified state.
   */
  public const INVOCATION_STATE_INVOCATION_STATE_UNSPECIFIED = 'INVOCATION_STATE_UNSPECIFIED';
  /**
   * The invocation is anomalous.
   */
  public const INVOCATION_STATE_INVOCATION_STATE_ANOMALOUS = 'INVOCATION_STATE_ANOMALOUS';
  /**
   * The invocation is not anomalous.
   */
  public const INVOCATION_STATE_INVOCATION_STATE_NOT_ANOMALOUS = 'INVOCATION_STATE_NOT_ANOMALOUS';
  protected $assessmentType = GoogleCloudAiplatformV1Assessment::class;
  protected $assessmentDataType = '';
  /**
   * Output only. The invocation ID.
   *
   * @var string
   */
  public $invocationId;
  /**
   * Output only. The state of the invocation.
   *
   * @var string
   */
  public $invocationState;
  /**
   * Identifier. The resource name of the AnalyzedInvocation.
   *
   * @var string
   */
  public $name;

  /**
   * Output only. The assessment of the invocation.
   *
   * @param GoogleCloudAiplatformV1Assessment $assessment
   */
  public function setAssessment(GoogleCloudAiplatformV1Assessment $assessment)
  {
    $this->assessment = $assessment;
  }
  /**
   * @return GoogleCloudAiplatformV1Assessment
   */
  public function getAssessment()
  {
    return $this->assessment;
  }
  /**
   * Output only. The invocation ID.
   *
   * @param string $invocationId
   */
  public function setInvocationId($invocationId)
  {
    $this->invocationId = $invocationId;
  }
  /**
   * @return string
   */
  public function getInvocationId()
  {
    return $this->invocationId;
  }
  /**
   * Output only. The state of the invocation.
   *
   * Accepted values: INVOCATION_STATE_UNSPECIFIED, INVOCATION_STATE_ANOMALOUS,
   * INVOCATION_STATE_NOT_ANOMALOUS
   *
   * @param self::INVOCATION_STATE_* $invocationState
   */
  public function setInvocationState($invocationState)
  {
    $this->invocationState = $invocationState;
  }
  /**
   * @return self::INVOCATION_STATE_*
   */
  public function getInvocationState()
  {
    return $this->invocationState;
  }
  /**
   * Identifier. The resource name of the AnalyzedInvocation.
   *
   * @param string $name
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
class_alias(GoogleCloudAiplatformV1AnalyzedInvocation::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AnalyzedInvocation');
