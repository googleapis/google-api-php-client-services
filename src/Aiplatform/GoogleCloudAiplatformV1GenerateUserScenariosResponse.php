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

class GoogleCloudAiplatformV1GenerateUserScenariosResponse extends \Google\Collection
{
  protected $collection_key = 'userScenarios';
  protected $userScenariosType = GoogleCloudAiplatformV1UserScenario::class;
  protected $userScenariosDataType = 'array';

  /**
   * The generated user scenarios used to simulate multi-turn agent running
   * results and agent evaluation.
   *
   * @param GoogleCloudAiplatformV1UserScenario[] $userScenarios
   */
  public function setUserScenarios($userScenarios)
  {
    $this->userScenarios = $userScenarios;
  }
  /**
   * @return GoogleCloudAiplatformV1UserScenario[]
   */
  public function getUserScenarios()
  {
    return $this->userScenarios;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GenerateUserScenariosResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GenerateUserScenariosResponse');
