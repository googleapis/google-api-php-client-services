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

namespace Google\Service\CloudDeploy;

class ContainerTask extends \Google\Collection
{
  protected $collection_key = 'command';
  /**
   * Optional. Args is the container arguments to use. This overrides the
   * default arguments defined in the container image.
   *
   * @var string[]
   */
  public $args;
  /**
   * Optional. Command is the container entrypoint to use. This overrides the
   * default entrypoint defined in the container image.
   *
   * @var string[]
   */
  public $command;
  /**
   * Optional. Environment variables that are set in the container.
   *
   * @var string[]
   */
  public $env;
  /**
   * Required. Image is the container image to use.
   *
   * @var string
   */
  public $image;

  /**
   * Optional. Args is the container arguments to use. This overrides the
   * default arguments defined in the container image.
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
   * Optional. Command is the container entrypoint to use. This overrides the
   * default entrypoint defined in the container image.
   *
   * @param string[] $command
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
   * Optional. Environment variables that are set in the container.
   *
   * @param string[] $env
   */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /**
   * @return string[]
   */
  public function getEnv()
  {
    return $this->env;
  }
  /**
   * Required. Image is the container image to use.
   *
   * @param string $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /**
   * @return string
   */
  public function getImage()
  {
    return $this->image;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContainerTask::class, 'Google_Service_CloudDeploy_ContainerTask');
