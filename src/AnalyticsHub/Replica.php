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

namespace Google\Service\AnalyticsHub;

class Replica extends \Google\Model
{
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $primaryState;
  /**
   * @var string
   */
  public $replicaState;

  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param string
   */
  public function setPrimaryState($primaryState)
  {
    $this->primaryState = $primaryState;
  }
  /**
   * @return string
   */
  public function getPrimaryState()
  {
    return $this->primaryState;
  }
  /**
   * @param string
   */
  public function setReplicaState($replicaState)
  {
    $this->replicaState = $replicaState;
  }
  /**
   * @return string
   */
  public function getReplicaState()
  {
    return $this->replicaState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Replica::class, 'Google_Service_AnalyticsHub_Replica');
