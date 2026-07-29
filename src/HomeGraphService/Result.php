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

namespace Google\Service\HomeGraphService;

class Result extends \Google\Model
{
  /**
   * The trait commit timestamp of the state update in Home Graph.
   *
   * @var string
   */
  public $homeTraitCommitTime;

  /**
   * The trait commit timestamp of the state update in Home Graph.
   *
   * @param string $homeTraitCommitTime
   */
  public function setHomeTraitCommitTime($homeTraitCommitTime)
  {
    $this->homeTraitCommitTime = $homeTraitCommitTime;
  }
  /**
   * @return string
   */
  public function getHomeTraitCommitTime()
  {
    return $this->homeTraitCommitTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, 'Google_Service_HomeGraphService_Result');
