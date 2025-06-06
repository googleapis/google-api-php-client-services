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

namespace Google\Service\FirebaseAppHosting;

class RolloutPolicy extends \Google\Model
{
  /**
   * @var string
   */
  public $codebaseBranch;
  /**
   * @var bool
   */
  public $disabled;
  /**
   * @var string
   */
  public $disabledTime;

  /**
   * @param string
   */
  public function setCodebaseBranch($codebaseBranch)
  {
    $this->codebaseBranch = $codebaseBranch;
  }
  /**
   * @return string
   */
  public function getCodebaseBranch()
  {
    return $this->codebaseBranch;
  }
  /**
   * @param bool
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * @param string
   */
  public function setDisabledTime($disabledTime)
  {
    $this->disabledTime = $disabledTime;
  }
  /**
   * @return string
   */
  public function getDisabledTime()
  {
    return $this->disabledTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RolloutPolicy::class, 'Google_Service_FirebaseAppHosting_RolloutPolicy');
