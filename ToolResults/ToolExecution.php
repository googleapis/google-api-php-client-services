<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_ToolResults_ToolExecution extends Google_Collection
{
  protected $collection_key = 'toolOutputs';
  public $commandLineArguments;
  public $exitCode;
  public $toolLogs;
  public $toolOutputs;

  public function setCommandLineArguments(array $commandLineArguments)
  {
    $this->commandLineArguments = $commandLineArguments;
  }
  public function getCommandLineArguments()
  {
    return $this->commandLineArguments;
  }
  public function setExitCode(Google_Service_ToolResults_ToolExitCode $exitCode)
  {
    $this->exitCode = $exitCode;
  }
  public function getExitCode()
  {
    return $this->exitCode;
  }
  public function setToolLogs(array $toolLogs)
  {
    foreach ($toolLogs as $t) {
      if (!$t instanceof Google_Service_ToolResults_FileReference) {
        throw new InvalidArgumentException('First argument to setToolLogs must be an array of Google_Service_ToolResults_FileReference');
      }
    }
    $this->toolLogs = $toolLogs;
  }
  public function getToolLogs()
  {
    return $this->toolLogs;
  }
  public function setToolOutputs(array $toolOutputs)
  {
    foreach ($toolOutputs as $t) {
      if (!$t instanceof Google_Service_ToolResults_ToolOutputReference) {
        throw new InvalidArgumentException('First argument to setToolOutputs must be an array of Google_Service_ToolResults_ToolOutputReference');
      }
    }
    $this->toolOutputs = $toolOutputs;
  }
  public function getToolOutputs()
  {
    return $this->toolOutputs;
  }
}
