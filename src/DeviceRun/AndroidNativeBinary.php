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

namespace Google\Service\DeviceRun;

class AndroidNativeBinary extends \Google\Collection
{
  protected $collection_key = 'args';
  protected $androidNativeBinaryType = InputFile::class;
  protected $androidNativeBinaryDataType = '';
  /**
   * Optional. Arguments for running the binary file. The flags will be appended
   * to the command line that invokes the binary. The number of options is
   * limited to 100.
   *
   * @var string[]
   */
  public $args;
  /**
   * Optional. A map of environment variables to set for the binary process. The
   * keys are the variable names and the values are the variable values. The
   * maximum number of entries is 100. Each key is limited to 128 characters and
   * must conform to POSIX standards. Each value is limited to 2048 characters.
   * The total size of all environment variables must not exceed 16 KiB.
   *
   * @var string[]
   */
  public $envVars;
  /**
   * Optional. The timeout of the execution. Default value: 5 min. Range: [1
   * min, 3 hours].
   *
   * @var string
   */
  public $executionTimeout;

  /**
   * Required. The file path of the Android native binary.
   *
   * @param InputFile $androidNativeBinary
   */
  public function setAndroidNativeBinary(InputFile $androidNativeBinary)
  {
    $this->androidNativeBinary = $androidNativeBinary;
  }
  /**
   * @return InputFile
   */
  public function getAndroidNativeBinary()
  {
    return $this->androidNativeBinary;
  }
  /**
   * Optional. Arguments for running the binary file. The flags will be appended
   * to the command line that invokes the binary. The number of options is
   * limited to 100.
   *
   * @param string[] $args
   */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /**
   * @return string[]
   */
  public function getArgs()
  {
    return $this->args;
  }
  /**
   * Optional. A map of environment variables to set for the binary process. The
   * keys are the variable names and the values are the variable values. The
   * maximum number of entries is 100. Each key is limited to 128 characters and
   * must conform to POSIX standards. Each value is limited to 2048 characters.
   * The total size of all environment variables must not exceed 16 KiB.
   *
   * @param string[] $envVars
   */
  public function setEnvVars($envVars)
  {
    $this->envVars = $envVars;
  }
  /**
   * @return string[]
   */
  public function getEnvVars()
  {
    return $this->envVars;
  }
  /**
   * Optional. The timeout of the execution. Default value: 5 min. Range: [1
   * min, 3 hours].
   *
   * @param string $executionTimeout
   */
  public function setExecutionTimeout($executionTimeout)
  {
    $this->executionTimeout = $executionTimeout;
  }
  /**
   * @return string
   */
  public function getExecutionTimeout()
  {
    return $this->executionTimeout;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidNativeBinary::class, 'Google_Service_DeviceRun_AndroidNativeBinary');
