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

namespace Google\Service\SQLAdmin;

class ExecuteSqlPayload extends \Google\Model
{
  /**
   * @var bool
   */
  public $autoIamAuthn;
  /**
   * @var string
   */
  public $database;
  /**
   * @var string
   */
  public $partialResultMode;
  /**
   * @var string
   */
  public $rowLimit;
  /**
   * @var string
   */
  public $sqlStatement;
  /**
   * @var string
   */
  public $user;

  /**
   * @param bool
   */
  public function setAutoIamAuthn($autoIamAuthn)
  {
    $this->autoIamAuthn = $autoIamAuthn;
  }
  /**
   * @return bool
   */
  public function getAutoIamAuthn()
  {
    return $this->autoIamAuthn;
  }
  /**
   * @param string
   */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /**
   * @return string
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * @param string
   */
  public function setPartialResultMode($partialResultMode)
  {
    $this->partialResultMode = $partialResultMode;
  }
  /**
   * @return string
   */
  public function getPartialResultMode()
  {
    return $this->partialResultMode;
  }
  /**
   * @param string
   */
  public function setRowLimit($rowLimit)
  {
    $this->rowLimit = $rowLimit;
  }
  /**
   * @return string
   */
  public function getRowLimit()
  {
    return $this->rowLimit;
  }
  /**
   * @param string
   */
  public function setSqlStatement($sqlStatement)
  {
    $this->sqlStatement = $sqlStatement;
  }
  /**
   * @return string
   */
  public function getSqlStatement()
  {
    return $this->sqlStatement;
  }
  /**
   * @param string
   */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /**
   * @return string
   */
  public function getUser()
  {
    return $this->user;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteSqlPayload::class, 'Google_Service_SQLAdmin_ExecuteSqlPayload');
