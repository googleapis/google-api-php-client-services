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

namespace Google\Service\Dataproc;

class LifecycleConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $autoDeleteTime;
  /**
   * @var string
   */
  public $autoDeleteTtl;
  /**
   * @var string
   */
  public $autoStopTime;
  /**
   * @var string
   */
  public $autoStopTtl;
  /**
   * @var string
   */
  public $idleDeleteTtl;
  /**
   * @var string
   */
  public $idleStartTime;
  /**
   * @var string
   */
  public $idleStopTtl;

  /**
   * @param string
   */
  public function setAutoDeleteTime($autoDeleteTime)
  {
    $this->autoDeleteTime = $autoDeleteTime;
  }
  /**
   * @return string
   */
  public function getAutoDeleteTime()
  {
    return $this->autoDeleteTime;
  }
  /**
   * @param string
   */
  public function setAutoDeleteTtl($autoDeleteTtl)
  {
    $this->autoDeleteTtl = $autoDeleteTtl;
  }
  /**
   * @return string
   */
  public function getAutoDeleteTtl()
  {
    return $this->autoDeleteTtl;
  }
  /**
   * @param string
   */
  public function setAutoStopTime($autoStopTime)
  {
    $this->autoStopTime = $autoStopTime;
  }
  /**
   * @return string
   */
  public function getAutoStopTime()
  {
    return $this->autoStopTime;
  }
  /**
   * @param string
   */
  public function setAutoStopTtl($autoStopTtl)
  {
    $this->autoStopTtl = $autoStopTtl;
  }
  /**
   * @return string
   */
  public function getAutoStopTtl()
  {
    return $this->autoStopTtl;
  }
  /**
   * @param string
   */
  public function setIdleDeleteTtl($idleDeleteTtl)
  {
    $this->idleDeleteTtl = $idleDeleteTtl;
  }
  /**
   * @return string
   */
  public function getIdleDeleteTtl()
  {
    return $this->idleDeleteTtl;
  }
  /**
   * @param string
   */
  public function setIdleStartTime($idleStartTime)
  {
    $this->idleStartTime = $idleStartTime;
  }
  /**
   * @return string
   */
  public function getIdleStartTime()
  {
    return $this->idleStartTime;
  }
  /**
   * @param string
   */
  public function setIdleStopTtl($idleStopTtl)
  {
    $this->idleStopTtl = $idleStopTtl;
  }
  /**
   * @return string
   */
  public function getIdleStopTtl()
  {
    return $this->idleStopTtl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LifecycleConfig::class, 'Google_Service_Dataproc_LifecycleConfig');
