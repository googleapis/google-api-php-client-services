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

namespace Google\Service\PlayIntegrity;

class PcRequestDetails extends \Google\Model
{
  /**
   * @var string
   */
  public $requestHash;
  /**
   * @var string
   */
  public $requestPackageName;
  /**
   * @var string
   */
  public $requestTime;

  /**
   * @param string
   */
  public function setRequestHash($requestHash)
  {
    $this->requestHash = $requestHash;
  }
  /**
   * @return string
   */
  public function getRequestHash()
  {
    return $this->requestHash;
  }
  /**
   * @param string
   */
  public function setRequestPackageName($requestPackageName)
  {
    $this->requestPackageName = $requestPackageName;
  }
  /**
   * @return string
   */
  public function getRequestPackageName()
  {
    return $this->requestPackageName;
  }
  /**
   * @param string
   */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /**
   * @return string
   */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PcRequestDetails::class, 'Google_Service_PlayIntegrity_PcRequestDetails');
