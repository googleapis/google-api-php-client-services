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

namespace Google\Service\NetworkServices;

class ServiceLbPolicyIsolationConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $isolationGranularity;
  /**
   * @var string
   */
  public $isolationMode;

  /**
   * @param string
   */
  public function setIsolationGranularity($isolationGranularity)
  {
    $this->isolationGranularity = $isolationGranularity;
  }
  /**
   * @return string
   */
  public function getIsolationGranularity()
  {
    return $this->isolationGranularity;
  }
  /**
   * @param string
   */
  public function setIsolationMode($isolationMode)
  {
    $this->isolationMode = $isolationMode;
  }
  /**
   * @return string
   */
  public function getIsolationMode()
  {
    return $this->isolationMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceLbPolicyIsolationConfig::class, 'Google_Service_NetworkServices_ServiceLbPolicyIsolationConfig');
