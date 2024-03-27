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

namespace Google\Service\Contentwarehouse;

class AssistantApiRobinCapabilitiesRobinStatus extends \Google\Model
{
  protected $availableType = AssistantApiRobinCapabilitiesRobinStatusRobinStatusAvailable::class;
  protected $availableDataType = '';
  protected $notAvailableType = AssistantApiRobinCapabilitiesRobinStatusRobinStatusNotAvailable::class;
  protected $notAvailableDataType = '';
  protected $optedInType = AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedIn::class;
  protected $optedInDataType = '';
  protected $optedOutType = AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedOut::class;
  protected $optedOutDataType = '';

  /**
   * @param AssistantApiRobinCapabilitiesRobinStatusRobinStatusAvailable
   */
  public function setAvailable(AssistantApiRobinCapabilitiesRobinStatusRobinStatusAvailable $available)
  {
    $this->available = $available;
  }
  /**
   * @return AssistantApiRobinCapabilitiesRobinStatusRobinStatusAvailable
   */
  public function getAvailable()
  {
    return $this->available;
  }
  /**
   * @param AssistantApiRobinCapabilitiesRobinStatusRobinStatusNotAvailable
   */
  public function setNotAvailable(AssistantApiRobinCapabilitiesRobinStatusRobinStatusNotAvailable $notAvailable)
  {
    $this->notAvailable = $notAvailable;
  }
  /**
   * @return AssistantApiRobinCapabilitiesRobinStatusRobinStatusNotAvailable
   */
  public function getNotAvailable()
  {
    return $this->notAvailable;
  }
  /**
   * @param AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedIn
   */
  public function setOptedIn(AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedIn $optedIn)
  {
    $this->optedIn = $optedIn;
  }
  /**
   * @return AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedIn
   */
  public function getOptedIn()
  {
    return $this->optedIn;
  }
  /**
   * @param AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedOut
   */
  public function setOptedOut(AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedOut $optedOut)
  {
    $this->optedOut = $optedOut;
  }
  /**
   * @return AssistantApiRobinCapabilitiesRobinStatusRobinStatusOptedOut
   */
  public function getOptedOut()
  {
    return $this->optedOut;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiRobinCapabilitiesRobinStatus::class, 'Google_Service_Contentwarehouse_AssistantApiRobinCapabilitiesRobinStatus');
