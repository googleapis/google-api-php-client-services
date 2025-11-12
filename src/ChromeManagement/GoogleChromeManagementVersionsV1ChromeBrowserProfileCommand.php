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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1ChromeBrowserProfileCommand extends \Google\Model
{
  protected $commandResultType = GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult::class;
  protected $commandResultDataType = '';
  /**
   * @var string
   */
  public $commandState;
  /**
   * @var string
   */
  public $commandType;
  /**
   * @var string
   */
  public $issueTime;
  /**
   * @var string
   */
  public $name;
  /**
   * @var array[]
   */
  public $payload;
  /**
   * @var string
   */
  public $validDuration;

  /**
   * @param GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult
   */
  public function setCommandResult(GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult $commandResult)
  {
    $this->commandResult = $commandResult;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult
   */
  public function getCommandResult()
  {
    return $this->commandResult;
  }
  /**
   * @param string
   */
  public function setCommandState($commandState)
  {
    $this->commandState = $commandState;
  }
  /**
   * @return string
   */
  public function getCommandState()
  {
    return $this->commandState;
  }
  /**
   * @param string
   */
  public function setCommandType($commandType)
  {
    $this->commandType = $commandType;
  }
  /**
   * @return string
   */
  public function getCommandType()
  {
    return $this->commandType;
  }
  /**
   * @param string
   */
  public function setIssueTime($issueTime)
  {
    $this->issueTime = $issueTime;
  }
  /**
   * @return string
   */
  public function getIssueTime()
  {
    return $this->issueTime;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param array[]
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return array[]
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * @param string
   */
  public function setValidDuration($validDuration)
  {
    $this->validDuration = $validDuration;
  }
  /**
   * @return string
   */
  public function getValidDuration()
  {
    return $this->validDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ChromeBrowserProfileCommand::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ChromeBrowserProfileCommand');
