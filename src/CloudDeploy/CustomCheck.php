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

class CustomCheck extends \Google\Model
{
  /**
   * Optional. The frequency at which the custom check will be run, with a
   * minimum and default of 5 minutes.
   *
   * @var string
   */
  public $frequency;
  /**
   * Required. The ID of the custom Analysis check.
   *
   * @var string
   */
  public $id;
  protected $taskType = Task::class;
  protected $taskDataType = '';

  /**
   * Optional. The frequency at which the custom check will be run, with a
   * minimum and default of 5 minutes.
   *
   * @param string $frequency
   */
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /**
   * @return string
   */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /**
   * Required. The ID of the custom Analysis check.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Required. The Task to be run for this custom check.
   *
   * @param Task $task
   */
  public function setTask(Task $task)
  {
    $this->task = $task;
  }
  /**
   * @return Task
   */
  public function getTask()
  {
    return $this->task;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomCheck::class, 'Google_Service_CloudDeploy_CustomCheck');
