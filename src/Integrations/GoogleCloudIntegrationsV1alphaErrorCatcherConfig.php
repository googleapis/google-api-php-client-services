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

namespace Google\Service\Integrations;

class GoogleCloudIntegrationsV1alphaErrorCatcherConfig extends \Google\Collection
{
  protected $collection_key = 'startErrorTasks';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $errorCatchId;
  /**
   * @var string
   */
  public $errorCatcherNumber;
  /**
   * @var string
   */
  public $label;
  protected $startErrorTasksType = GoogleCloudIntegrationsV1alphaNextTask::class;
  protected $startErrorTasksDataType = 'array';
  public $startErrorTasks = [];

  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setErrorCatchId($errorCatchId)
  {
    $this->errorCatchId = $errorCatchId;
  }
  /**
   * @return string
   */
  public function getErrorCatchId()
  {
    return $this->errorCatchId;
  }
  /**
   * @param string
   */
  public function setErrorCatcherNumber($errorCatcherNumber)
  {
    $this->errorCatcherNumber = $errorCatcherNumber;
  }
  /**
   * @return string
   */
  public function getErrorCatcherNumber()
  {
    return $this->errorCatcherNumber;
  }
  /**
   * @param string
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * @param GoogleCloudIntegrationsV1alphaNextTask[]
   */
  public function setStartErrorTasks($startErrorTasks)
  {
    $this->startErrorTasks = $startErrorTasks;
  }
  /**
   * @return GoogleCloudIntegrationsV1alphaNextTask[]
   */
  public function getStartErrorTasks()
  {
    return $this->startErrorTasks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV1alphaErrorCatcherConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV1alphaErrorCatcherConfig');
