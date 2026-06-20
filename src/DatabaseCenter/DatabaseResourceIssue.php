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

class DatabaseResourceIssue extends \Google\Model
{
  protected $resourceType = DatabaseResource::class;
  protected $resourceDataType = '';
  protected $signalType = Signal::class;
  protected $signalDataType = '';

  /**
   * Resource associated with the issue.
   *
   * @param DatabaseResource $resource
   */
  public function setResource(DatabaseResource $resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return DatabaseResource
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * Signal associated with the issue.
   *
   * @param Signal $signal
   */
  public function setSignal(Signal $signal)
  {
    $this->signal = $signal;
  }
  /**
   * @return Signal
   */
  public function getSignal()
  {
    return $this->signal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseResourceIssue::class, 'Google_Service_DatabaseCenter_DatabaseResourceIssue');
