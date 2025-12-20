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

class GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const CODE_LANGUAGE_LANGUAGE_UNSPECIFIED = 'LANGUAGE_UNSPECIFIED';
  /**
   * The coding language is Python.
   */
  public const CODE_LANGUAGE_LANGUAGE_PYTHON = 'LANGUAGE_PYTHON';
  /**
   * The coding language is JavaScript.
   */
  public const CODE_LANGUAGE_LANGUAGE_JAVASCRIPT = 'LANGUAGE_JAVASCRIPT';
  /**
   * The default value: milligcu 2000, memory 1.5Gib
   */
  public const MACHINE_CONFIG_MACHINE_CONFIG_UNSPECIFIED = 'MACHINE_CONFIG_UNSPECIFIED';
  /**
   * The default value: milligcu 4000, memory 4 Gib
   */
  public const MACHINE_CONFIG_MACHINE_CONFIG_VCPU4_RAM4GIB = 'MACHINE_CONFIG_VCPU4_RAM4GIB';
  /**
   * The coding language supported in this environment.
   *
   * @var string
   */
  public $codeLanguage;
  /**
   * The machine config of the code execution environment.
   *
   * @var string
   */
  public $machineConfig;

  /**
   * The coding language supported in this environment.
   *
   * Accepted values: LANGUAGE_UNSPECIFIED, LANGUAGE_PYTHON, LANGUAGE_JAVASCRIPT
   *
   * @param self::CODE_LANGUAGE_* $codeLanguage
   */
  public function setCodeLanguage($codeLanguage)
  {
    $this->codeLanguage = $codeLanguage;
  }
  /**
   * @return self::CODE_LANGUAGE_*
   */
  public function getCodeLanguage()
  {
    return $this->codeLanguage;
  }
  /**
   * The machine config of the code execution environment.
   *
   * Accepted values: MACHINE_CONFIG_UNSPECIFIED, MACHINE_CONFIG_VCPU4_RAM4GIB
   *
   * @param self::MACHINE_CONFIG_* $machineConfig
   */
  public function setMachineConfig($machineConfig)
  {
    $this->machineConfig = $machineConfig;
  }
  /**
   * @return self::MACHINE_CONFIG_*
   */
  public function getMachineConfig()
  {
    return $this->machineConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentSpecCodeExecutionEnvironment');
