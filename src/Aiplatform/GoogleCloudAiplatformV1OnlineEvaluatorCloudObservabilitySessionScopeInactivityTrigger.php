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

class GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger extends \Google\Model
{
  /**
   * Required. The amount of time that must pass with no new traces before a
   * session is considered ready for evaluation. This is a required field if
   * InactivityTrigger is used. The value must be a positive duration no greater
   * than 7 days (604800 seconds).
   *
   * @var string
   */
  public $threshold;

  /**
   * Required. The amount of time that must pass with no new traces before a
   * session is considered ready for evaluation. This is a required field if
   * InactivityTrigger is used. The value must be a positive duration no greater
   * than 7 days (604800 seconds).
   *
   * @param string $threshold
   */
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  /**
   * @return string
   */
  public function getThreshold()
  {
    return $this->threshold;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger');
