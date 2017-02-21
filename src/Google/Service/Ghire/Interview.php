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

class Google_Service_Ghire_Interview extends Google_Collection
{
  protected $collection_key = 'roomId';
  protected $atsDataType = 'Google_Service_Ghire_LegacyAtsInterviewSessionData';
  protected $atsDataDataType = '';
  public $cancellation;
  public $cancellationShortNotice;
  public $candidateTimezone;
  public $ccList;
  public $disableSchedulingNotification;
  public $endTime;
  public $feedbackRequired;
  public $gcalCalendarId;
  public $gcalEventId;
  public $gcalEventPrivate;
  public $gcalEventUrl;
  public $gcalSyncStatus;
  public $inAverage;
  public $instructions;
  public $interviewReminderSentDate;
  public $interviewerTimezone;
  public $kind;
  public $latency;
  public $location;
  public $otherCancellationReason;
  public $phoneNumber;
  public $roomId;
  public $sendFeedback;
  public $startTime;
  public $type;

  public function setAtsData(Google_Service_Ghire_LegacyAtsInterviewSessionData $atsData)
  {
    $this->atsData = $atsData;
  }
  public function getAtsData()
  {
    return $this->atsData;
  }
  public function setCancellation($cancellation)
  {
    $this->cancellation = $cancellation;
  }
  public function getCancellation()
  {
    return $this->cancellation;
  }
  public function setCancellationShortNotice($cancellationShortNotice)
  {
    $this->cancellationShortNotice = $cancellationShortNotice;
  }
  public function getCancellationShortNotice()
  {
    return $this->cancellationShortNotice;
  }
  public function setCandidateTimezone($candidateTimezone)
  {
    $this->candidateTimezone = $candidateTimezone;
  }
  public function getCandidateTimezone()
  {
    return $this->candidateTimezone;
  }
  public function setCcList($ccList)
  {
    $this->ccList = $ccList;
  }
  public function getCcList()
  {
    return $this->ccList;
  }
  public function setDisableSchedulingNotification($disableSchedulingNotification)
  {
    $this->disableSchedulingNotification = $disableSchedulingNotification;
  }
  public function getDisableSchedulingNotification()
  {
    return $this->disableSchedulingNotification;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setFeedbackRequired($feedbackRequired)
  {
    $this->feedbackRequired = $feedbackRequired;
  }
  public function getFeedbackRequired()
  {
    return $this->feedbackRequired;
  }
  public function setGcalCalendarId($gcalCalendarId)
  {
    $this->gcalCalendarId = $gcalCalendarId;
  }
  public function getGcalCalendarId()
  {
    return $this->gcalCalendarId;
  }
  public function setGcalEventId($gcalEventId)
  {
    $this->gcalEventId = $gcalEventId;
  }
  public function getGcalEventId()
  {
    return $this->gcalEventId;
  }
  public function setGcalEventPrivate($gcalEventPrivate)
  {
    $this->gcalEventPrivate = $gcalEventPrivate;
  }
  public function getGcalEventPrivate()
  {
    return $this->gcalEventPrivate;
  }
  public function setGcalEventUrl($gcalEventUrl)
  {
    $this->gcalEventUrl = $gcalEventUrl;
  }
  public function getGcalEventUrl()
  {
    return $this->gcalEventUrl;
  }
  public function setGcalSyncStatus($gcalSyncStatus)
  {
    $this->gcalSyncStatus = $gcalSyncStatus;
  }
  public function getGcalSyncStatus()
  {
    return $this->gcalSyncStatus;
  }
  public function setInAverage($inAverage)
  {
    $this->inAverage = $inAverage;
  }
  public function getInAverage()
  {
    return $this->inAverage;
  }
  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  public function getInstructions()
  {
    return $this->instructions;
  }
  public function setInterviewReminderSentDate($interviewReminderSentDate)
  {
    $this->interviewReminderSentDate = $interviewReminderSentDate;
  }
  public function getInterviewReminderSentDate()
  {
    return $this->interviewReminderSentDate;
  }
  public function setInterviewerTimezone($interviewerTimezone)
  {
    $this->interviewerTimezone = $interviewerTimezone;
  }
  public function getInterviewerTimezone()
  {
    return $this->interviewerTimezone;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLatency($latency)
  {
    $this->latency = $latency;
  }
  public function getLatency()
  {
    return $this->latency;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setOtherCancellationReason($otherCancellationReason)
  {
    $this->otherCancellationReason = $otherCancellationReason;
  }
  public function getOtherCancellationReason()
  {
    return $this->otherCancellationReason;
  }
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }
  public function getRoomId()
  {
    return $this->roomId;
  }
  public function setSendFeedback($sendFeedback)
  {
    $this->sendFeedback = $sendFeedback;
  }
  public function getSendFeedback()
  {
    return $this->sendFeedback;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
