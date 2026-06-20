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

namespace Google\Service\DatabaseCenter;

class SignalTypeGroup extends \Google\Collection
{
  protected $collection_key = 'signalTypes';
  /**
   * Required. The display name of a signal group.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. List of signal types present in the group.
   *
   * @var string[]
   */
  public $signalTypes;

  /**
   * Required. The display name of a signal group.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. List of signal types present in the group.
   *
   * @param string[] $signalTypes
   */
  public function setSignalTypes($signalTypes)
  {
    $this->signalTypes = $signalTypes;
  }
  /**
   * @return string[]
   */
  public function getSignalTypes()
  {
    return $this->signalTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SignalTypeGroup::class, 'Google_Service_DatabaseCenter_SignalTypeGroup');
