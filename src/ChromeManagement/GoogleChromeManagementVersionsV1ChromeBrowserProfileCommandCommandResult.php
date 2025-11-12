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

class GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult extends \Google\Model
{
  /**
   * @var string
   */
  public $clientExecutionTime;
  /**
   * @var string
   */
  public $resultCode;
  /**
   * @var string
   */
  public $resultType;

  /**
   * @param string
   */
  public function setClientExecutionTime($clientExecutionTime)
  {
    $this->clientExecutionTime = $clientExecutionTime;
  }
  /**
   * @return string
   */
  public function getClientExecutionTime()
  {
    return $this->clientExecutionTime;
  }
  /**
   * @param string
   */
  public function setResultCode($resultCode)
  {
    $this->resultCode = $resultCode;
  }
  /**
   * @return string
   */
  public function getResultCode()
  {
    return $this->resultCode;
  }
  /**
   * @param string
   */
  public function setResultType($resultType)
  {
    $this->resultType = $resultType;
  }
  /**
   * @return string
   */
  public function getResultType()
  {
    return $this->resultType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ChromeBrowserProfileCommandCommandResult');
