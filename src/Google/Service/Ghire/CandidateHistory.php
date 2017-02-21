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

class Google_Service_Ghire_CandidateHistory extends Google_Collection
{
  protected $collection_key = 'employment';
  protected $educationType = 'Google_Service_Ghire_Education';
  protected $educationDataType = 'array';
  protected $employmentType = 'Google_Service_Ghire_Employment';
  protected $employmentDataType = 'array';
  public $kind;
  public $updateDateMs;

  public function setEducation($education)
  {
    $this->education = $education;
  }
  public function getEducation()
  {
    return $this->education;
  }
  public function setEmployment($employment)
  {
    $this->employment = $employment;
  }
  public function getEmployment()
  {
    return $this->employment;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUpdateDateMs($updateDateMs)
  {
    $this->updateDateMs = $updateDateMs;
  }
  public function getUpdateDateMs()
  {
    return $this->updateDateMs;
  }
}
