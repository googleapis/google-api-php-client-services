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

namespace Google\Service\OracleDatabase;

class PluggableDatabaseNodeLevelDetails extends \Google\Model
{
  /**
   * @var string
   */
  public $nodeName;
  /**
   * @var string
   */
  public $openMode;
  /**
   * @var string
   */
  public $pluggableDatabaseId;

  /**
   * @param string
   */
  public function setNodeName($nodeName)
  {
    $this->nodeName = $nodeName;
  }
  /**
   * @return string
   */
  public function getNodeName()
  {
    return $this->nodeName;
  }
  /**
   * @param string
   */
  public function setOpenMode($openMode)
  {
    $this->openMode = $openMode;
  }
  /**
   * @return string
   */
  public function getOpenMode()
  {
    return $this->openMode;
  }
  /**
   * @param string
   */
  public function setPluggableDatabaseId($pluggableDatabaseId)
  {
    $this->pluggableDatabaseId = $pluggableDatabaseId;
  }
  /**
   * @return string
   */
  public function getPluggableDatabaseId()
  {
    return $this->pluggableDatabaseId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PluggableDatabaseNodeLevelDetails::class, 'Google_Service_OracleDatabase_PluggableDatabaseNodeLevelDetails');
