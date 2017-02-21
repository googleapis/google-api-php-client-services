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

class Google_Service_Ghire_LegacyAtsInterviewSessionData extends Google_Model
{
  public $cancellationWithReplacement;
  public $defaultTimezone;
  public $endTime;
  public $gcalEventId;
  public $gcalEventStatus;
  public $interviewDateDefaultTimezone;
  public $interviewDateSessionTimezone;
  public $interviewLocation;
  public $kind;
  public $startTime;

  public function setCancellationWithReplacement($cancellationWithReplacement)
  {
    $this->cancellationWithReplacement = $cancellationWithReplacement;
  }
  public function getCancellationWithReplacement()
  {
    return $this->cancellationWithReplacement;
  }
  public function setDefaultTimezone($defaultTimezone)
  {
    $this->defaultTimezone = $defaultTimezone;
  }
  public function getDefaultTimezone()
  {
    return $this->defaultTimezone;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setGcalEventId($gcalEventId)
  {
    $this->gcalEventId = $gcalEventId;
  }
  public function getGcalEventId()
  {
    return $this->gcalEventId;
  }
  public function setGcalEventStatus($gcalEventStatus)
  {
    $this->gcalEventStatus = $gcalEventStatus;
  }
  public function getGcalEventStatus()
  {
    return $this->gcalEventStatus;
  }
  public function setInterviewDateDefaultTimezone($interviewDateDefaultTimezone)
  {
    $this->interviewDateDefaultTimezone = $interviewDateDefaultTimezone;
  }
  public function getInterviewDateDefaultTimezone()
  {
    return $this->interviewDateDefaultTimezone;
  }
  public function setInterviewDateSessionTimezone($interviewDateSessionTimezone)
  {
    $this->interviewDateSessionTimezone = $interviewDateSessionTimezone;
  }
  public function getInterviewDateSessionTimezone()
  {
    return $this->interviewDateSessionTimezone;
  }
  public function setInterviewLocation($interviewLocation)
  {
    $this->interviewLocation = $interviewLocation;
  }
  public function getInterviewLocation()
  {
    return $this->interviewLocation;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}
