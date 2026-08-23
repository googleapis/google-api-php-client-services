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

class GoogleCloudAiplatformV1SandboxEnvironmentSpec extends \Google\Model
{
  protected $codeExecutionEnvironmentType = GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment::class;
  protected $codeExecutionEnvironmentDataType = '';
  protected $shellEnvironmentType = GoogleCloudAiplatformV1SandboxEnvironmentSpecShellEnvironment::class;
  protected $shellEnvironmentDataType = '';

  /**
   * Optional. The code execution environment.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment $codeExecutionEnvironment
   */
  public function setCodeExecutionEnvironment(GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment $codeExecutionEnvironment)
  {
    $this->codeExecutionEnvironment = $codeExecutionEnvironment;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment
   */
  public function getCodeExecutionEnvironment()
  {
    return $this->codeExecutionEnvironment;
  }
  /**
   * Optional. The shell environment for executing shell commands and scripts.
   *
   * @param GoogleCloudAiplatformV1SandboxEnvironmentSpecShellEnvironment $shellEnvironment
   */
  public function setShellEnvironment(GoogleCloudAiplatformV1SandboxEnvironmentSpecShellEnvironment $shellEnvironment)
  {
    $this->shellEnvironment = $shellEnvironment;
  }
  /**
   * @return GoogleCloudAiplatformV1SandboxEnvironmentSpecShellEnvironment
   */
  public function getShellEnvironment()
  {
    return $this->shellEnvironment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentSpec');
