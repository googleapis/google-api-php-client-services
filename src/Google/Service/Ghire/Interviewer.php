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

class Google_Service_Ghire_Interviewer extends Google_Collection
{
  protected $collection_key = 'recentInterviewTimestampsMs';
  protected $constraintsType = 'Google_Service_Ghire_InterviewerConstraints';
  protected $constraintsDataType = '';
  public $domain;
  public $futureInterviewTimestampsMs;
  protected $interviewDataType = 'Google_Service_Ghire_InterviewData';
  protected $interviewDataDataType = '';
  protected $interviewerIdType = 'Google_Service_Ghire_PrincipalWithName';
  protected $interviewerIdDataType = '';
  public $kind;
  public $lifetimeOnsiteInterviewCount;
  public $lifetimePhoneScreenCount;
  public $recentInterviewTimestampsMs;
  public $shadowsAssignedCount;
  public $shadowsToCompleteCount;
  public $shadowsToScheduleCount;

  public function setConstraints(Google_Service_Ghire_InterviewerConstraints $constraints)
  {
    $this->constraints = $constraints;
  }
  public function getConstraints()
  {
    return $this->constraints;
  }
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setFutureInterviewTimestampsMs($futureInterviewTimestampsMs)
  {
    $this->futureInterviewTimestampsMs = $futureInterviewTimestampsMs;
  }
  public function getFutureInterviewTimestampsMs()
  {
    return $this->futureInterviewTimestampsMs;
  }
  public function setInterviewData(Google_Service_Ghire_InterviewData $interviewData)
  {
    $this->interviewData = $interviewData;
  }
  public function getInterviewData()
  {
    return $this->interviewData;
  }
  public function setInterviewerId(Google_Service_Ghire_PrincipalWithName $interviewerId)
  {
    $this->interviewerId = $interviewerId;
  }
  public function getInterviewerId()
  {
    return $this->interviewerId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLifetimeOnsiteInterviewCount($lifetimeOnsiteInterviewCount)
  {
    $this->lifetimeOnsiteInterviewCount = $lifetimeOnsiteInterviewCount;
  }
  public function getLifetimeOnsiteInterviewCount()
  {
    return $this->lifetimeOnsiteInterviewCount;
  }
  public function setLifetimePhoneScreenCount($lifetimePhoneScreenCount)
  {
    $this->lifetimePhoneScreenCount = $lifetimePhoneScreenCount;
  }
  public function getLifetimePhoneScreenCount()
  {
    return $this->lifetimePhoneScreenCount;
  }
  public function setRecentInterviewTimestampsMs($recentInterviewTimestampsMs)
  {
    $this->recentInterviewTimestampsMs = $recentInterviewTimestampsMs;
  }
  public function getRecentInterviewTimestampsMs()
  {
    return $this->recentInterviewTimestampsMs;
  }
  public function setShadowsAssignedCount($shadowsAssignedCount)
  {
    $this->shadowsAssignedCount = $shadowsAssignedCount;
  }
  public function getShadowsAssignedCount()
  {
    return $this->shadowsAssignedCount;
  }
  public function setShadowsToCompleteCount($shadowsToCompleteCount)
  {
    $this->shadowsToCompleteCount = $shadowsToCompleteCount;
  }
  public function getShadowsToCompleteCount()
  {
    return $this->shadowsToCompleteCount;
  }
  public function setShadowsToScheduleCount($shadowsToScheduleCount)
  {
    $this->shadowsToScheduleCount = $shadowsToScheduleCount;
  }
  public function getShadowsToScheduleCount()
  {
    return $this->shadowsToScheduleCount;
  }
}
