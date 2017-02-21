<?php
/*
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

class Google_Service_Ghire_JobPosting extends Google_Model
{
  public $createDateMs;
  public $id;
  public $jobSiteId;
  public $kind;

  public function setCreateDateMs($createDateMs)
  {
    $this->createDateMs = $createDateMs;
  }
  public function getCreateDateMs()
  {
    return $this->createDateMs;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setJobSiteId($jobSiteId)
  {
    $this->jobSiteId = $jobSiteId;
  }
  public function getJobSiteId()
  {
    return $this->jobSiteId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
