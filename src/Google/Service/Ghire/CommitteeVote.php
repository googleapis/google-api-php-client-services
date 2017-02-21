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

class Google_Service_Ghire_CommitteeVote extends Google_Model
{
  public $committeeId;
  public $decisionLevel;
  public $deprecatedApproval;
  public $deprecatedCommitteeId;
  public $deprecatedDecisionLevel;
  public $deprecatedGrade;
  public $deprecatedMeetingId;
  public $grade;
  public $kind;
  public $meetingId;
  public $migratedJuryVoteKey;
  public $notes;
  public $rating;
  public $type;
  public $unknownJudgeInfo;

  public function setCommitteeId($committeeId)
  {
    $this->committeeId = $committeeId;
  }
  public function getCommitteeId()
  {
    return $this->committeeId;
  }
  public function setDecisionLevel($decisionLevel)
  {
    $this->decisionLevel = $decisionLevel;
  }
  public function getDecisionLevel()
  {
    return $this->decisionLevel;
  }
  public function setDeprecatedApproval($deprecatedApproval)
  {
    $this->deprecatedApproval = $deprecatedApproval;
  }
  public function getDeprecatedApproval()
  {
    return $this->deprecatedApproval;
  }
  public function setDeprecatedCommitteeId($deprecatedCommitteeId)
  {
    $this->deprecatedCommitteeId = $deprecatedCommitteeId;
  }
  public function getDeprecatedCommitteeId()
  {
    return $this->deprecatedCommitteeId;
  }
  public function setDeprecatedDecisionLevel($deprecatedDecisionLevel)
  {
    $this->deprecatedDecisionLevel = $deprecatedDecisionLevel;
  }
  public function getDeprecatedDecisionLevel()
  {
    return $this->deprecatedDecisionLevel;
  }
  public function setDeprecatedGrade($deprecatedGrade)
  {
    $this->deprecatedGrade = $deprecatedGrade;
  }
  public function getDeprecatedGrade()
  {
    return $this->deprecatedGrade;
  }
  public function setDeprecatedMeetingId($deprecatedMeetingId)
  {
    $this->deprecatedMeetingId = $deprecatedMeetingId;
  }
  public function getDeprecatedMeetingId()
  {
    return $this->deprecatedMeetingId;
  }
  public function setGrade($grade)
  {
    $this->grade = $grade;
  }
  public function getGrade()
  {
    return $this->grade;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMeetingId($meetingId)
  {
    $this->meetingId = $meetingId;
  }
  public function getMeetingId()
  {
    return $this->meetingId;
  }
  public function setMigratedJuryVoteKey($migratedJuryVoteKey)
  {
    $this->migratedJuryVoteKey = $migratedJuryVoteKey;
  }
  public function getMigratedJuryVoteKey()
  {
    return $this->migratedJuryVoteKey;
  }
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  public function getNotes()
  {
    return $this->notes;
  }
  public function setRating($rating)
  {
    $this->rating = $rating;
  }
  public function getRating()
  {
    return $this->rating;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUnknownJudgeInfo($unknownJudgeInfo)
  {
    $this->unknownJudgeInfo = $unknownJudgeInfo;
  }
  public function getUnknownJudgeInfo()
  {
    return $this->unknownJudgeInfo;
  }
}
