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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV1ExternalSystem extends \Google\Collection
{
  protected $collection_key = 'assignees';
  public $assignees;
  public $externalSystemUpdateTime;
  public $externalUid;
  public $name;
  public $status;

  public function setAssignees($assignees)
  {
    $this->assignees = $assignees;
  }
  public function getAssignees()
  {
    return $this->assignees;
  }
  public function setExternalSystemUpdateTime($externalSystemUpdateTime)
  {
    $this->externalSystemUpdateTime = $externalSystemUpdateTime;
  }
  public function getExternalSystemUpdateTime()
  {
    return $this->externalSystemUpdateTime;
  }
  public function setExternalUid($externalUid)
  {
    $this->externalUid = $externalUid;
  }
  public function getExternalUid()
  {
    return $this->externalUid;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV1ExternalSystem::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1ExternalSystem');
