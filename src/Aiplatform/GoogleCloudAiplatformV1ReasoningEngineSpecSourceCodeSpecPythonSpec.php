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

class GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecPythonSpec extends \Google\Model
{
  /**
   * @var string
   */
  public $entrypointModule;
  /**
   * @var string
   */
  public $entrypointObject;
  /**
   * @var string
   */
  public $requirementsFile;
  /**
   * @var string
   */
  public $version;

  /**
   * @param string
   */
  public function setEntrypointModule($entrypointModule)
  {
    $this->entrypointModule = $entrypointModule;
  }
  /**
   * @return string
   */
  public function getEntrypointModule()
  {
    return $this->entrypointModule;
  }
  /**
   * @param string
   */
  public function setEntrypointObject($entrypointObject)
  {
    $this->entrypointObject = $entrypointObject;
  }
  /**
   * @return string
   */
  public function getEntrypointObject()
  {
    return $this->entrypointObject;
  }
  /**
   * @param string
   */
  public function setRequirementsFile($requirementsFile)
  {
    $this->requirementsFile = $requirementsFile;
  }
  /**
   * @return string
   */
  public function getRequirementsFile()
  {
    return $this->requirementsFile;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecPythonSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecSourceCodeSpecPythonSpec');
