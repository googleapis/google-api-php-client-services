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

class GoogleCloudAiplatformV1ModelContainerSpec extends \Google\Collection
{
  protected $collection_key = 'ports';
  /**
   * @var string[]
   */
  public $args;
  /**
   * @var string[]
   */
  public $command;
  protected $envType = GoogleCloudAiplatformV1EnvVar::class;
  protected $envDataType = 'array';
  /**
   * @var string
   */
  public $healthRoute;
  /**
   * @var string
   */
  public $imageUri;
  protected $portsType = GoogleCloudAiplatformV1Port::class;
  protected $portsDataType = 'array';
  /**
   * @var string
   */
  public $predictRoute;

  /**
   * @param string[]
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
   * @param string[]
   */
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /**
   * @return string[]
   */
  public function getCommand()
  {
    return $this->command;
  }
  /**
   * @param GoogleCloudAiplatformV1EnvVar[]
   */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /**
   * @return GoogleCloudAiplatformV1EnvVar[]
   */
  public function getEnv()
  {
    return $this->env;
  }
  /**
   * @param string
   */
  public function setHealthRoute($healthRoute)
  {
    $this->healthRoute = $healthRoute;
  }
  /**
   * @return string
   */
  public function getHealthRoute()
  {
    return $this->healthRoute;
  }
  /**
   * @param string
   */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /**
   * @return string
   */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /**
   * @param GoogleCloudAiplatformV1Port[]
   */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /**
   * @return GoogleCloudAiplatformV1Port[]
   */
  public function getPorts()
  {
    return $this->ports;
  }
  /**
   * @param string
   */
  public function setPredictRoute($predictRoute)
  {
    $this->predictRoute = $predictRoute;
  }
  /**
   * @return string
   */
  public function getPredictRoute()
  {
    return $this->predictRoute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ModelContainerSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ModelContainerSpec');
