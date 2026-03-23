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

class GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput extends \Google\Model
{
  /**
   * Optional. Additional parameters for the session, like app_name, etc. For
   * example, {"app_name": "my-app"}.
   *
   * @var string[]
   */
  public $parameters;
  /**
   * Optional. Session specific memory which stores key conversation points.
   *
   * @var array[]
   */
  public $sessionState;
  /**
   * Optional. The user id for the agent session. The ID can be up to 128
   * characters long.
   *
   * @var string
   */
  public $userId;

  /**
   * Optional. Additional parameters for the session, like app_name, etc. For
   * example, {"app_name": "my-app"}.
   *
   * @param string[] $parameters
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return string[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Optional. Session specific memory which stores key conversation points.
   *
   * @param array[] $sessionState
   */
  public function setSessionState($sessionState)
  {
    $this->sessionState = $sessionState;
  }
  /**
   * @return array[]
   */
  public function getSessionState()
  {
    return $this->sessionState;
  }
  /**
   * Optional. The user id for the agent session. The ID can be up to 128
   * characters long.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput');
