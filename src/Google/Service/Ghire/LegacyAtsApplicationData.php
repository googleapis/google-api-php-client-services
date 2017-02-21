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

class Google_Service_Ghire_LegacyAtsApplicationData extends Google_Collection
{
  protected $collection_key = 'appRejEmail';
  public $actualAnonymizationDate;
  public $anonymizationPolicy;
  public $anonymized;
  protected $appRejEmailType = 'Google_Service_Ghire_LegacyAtsAppRejEmail';
  protected $appRejEmailDataType = 'array';
  public $cerebroPositionType;
  public $cerebroScore;
  public $createDate;
  public $currentOfferId;
  public $fileSubdirectory;
  public $futureFollowupDate;
  public $futureFollowupRequired;
  public $gaiaUserId;
  public $hiringCommitteeReviewRequire;
  public $interviewScheduleRequired;
  public $kind;
  public $originalCoverletterFile;
  public $originalResumeFile;
  public $originalTranscriptFile;
  public $projectedAnonymizationDate;
  public $requisitionId;
  public $requisitionTitle;
  public $resumeGrade;
  public $spamAssassinScore;
  public $systemCreateDate;
  public $textCoverletterFile;
  public $textResumeFile;
  public $textTranscriptFile;

  public function setActualAnonymizationDate($actualAnonymizationDate)
  {
    $this->actualAnonymizationDate = $actualAnonymizationDate;
  }
  public function getActualAnonymizationDate()
  {
    return $this->actualAnonymizationDate;
  }
  public function setAnonymizationPolicy($anonymizationPolicy)
  {
    $this->anonymizationPolicy = $anonymizationPolicy;
  }
  public function getAnonymizationPolicy()
  {
    return $this->anonymizationPolicy;
  }
  public function setAnonymized($anonymized)
  {
    $this->anonymized = $anonymized;
  }
  public function getAnonymized()
  {
    return $this->anonymized;
  }
  public function setAppRejEmail($appRejEmail)
  {
    $this->appRejEmail = $appRejEmail;
  }
  public function getAppRejEmail()
  {
    return $this->appRejEmail;
  }
  public function setCerebroPositionType($cerebroPositionType)
  {
    $this->cerebroPositionType = $cerebroPositionType;
  }
  public function getCerebroPositionType()
  {
    return $this->cerebroPositionType;
  }
  public function setCerebroScore($cerebroScore)
  {
    $this->cerebroScore = $cerebroScore;
  }
  public function getCerebroScore()
  {
    return $this->cerebroScore;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setCurrentOfferId($currentOfferId)
  {
    $this->currentOfferId = $currentOfferId;
  }
  public function getCurrentOfferId()
  {
    return $this->currentOfferId;
  }
  public function setFileSubdirectory($fileSubdirectory)
  {
    $this->fileSubdirectory = $fileSubdirectory;
  }
  public function getFileSubdirectory()
  {
    return $this->fileSubdirectory;
  }
  public function setFutureFollowupDate($futureFollowupDate)
  {
    $this->futureFollowupDate = $futureFollowupDate;
  }
  public function getFutureFollowupDate()
  {
    return $this->futureFollowupDate;
  }
  public function setFutureFollowupRequired($futureFollowupRequired)
  {
    $this->futureFollowupRequired = $futureFollowupRequired;
  }
  public function getFutureFollowupRequired()
  {
    return $this->futureFollowupRequired;
  }
  public function setGaiaUserId($gaiaUserId)
  {
    $this->gaiaUserId = $gaiaUserId;
  }
  public function getGaiaUserId()
  {
    return $this->gaiaUserId;
  }
  public function setHiringCommitteeReviewRequire($hiringCommitteeReviewRequire)
  {
    $this->hiringCommitteeReviewRequire = $hiringCommitteeReviewRequire;
  }
  public function getHiringCommitteeReviewRequire()
  {
    return $this->hiringCommitteeReviewRequire;
  }
  public function setInterviewScheduleRequired($interviewScheduleRequired)
  {
    $this->interviewScheduleRequired = $interviewScheduleRequired;
  }
  public function getInterviewScheduleRequired()
  {
    return $this->interviewScheduleRequired;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOriginalCoverletterFile($originalCoverletterFile)
  {
    $this->originalCoverletterFile = $originalCoverletterFile;
  }
  public function getOriginalCoverletterFile()
  {
    return $this->originalCoverletterFile;
  }
  public function setOriginalResumeFile($originalResumeFile)
  {
    $this->originalResumeFile = $originalResumeFile;
  }
  public function getOriginalResumeFile()
  {
    return $this->originalResumeFile;
  }
  public function setOriginalTranscriptFile($originalTranscriptFile)
  {
    $this->originalTranscriptFile = $originalTranscriptFile;
  }
  public function getOriginalTranscriptFile()
  {
    return $this->originalTranscriptFile;
  }
  public function setProjectedAnonymizationDate($projectedAnonymizationDate)
  {
    $this->projectedAnonymizationDate = $projectedAnonymizationDate;
  }
  public function getProjectedAnonymizationDate()
  {
    return $this->projectedAnonymizationDate;
  }
  public function setRequisitionId($requisitionId)
  {
    $this->requisitionId = $requisitionId;
  }
  public function getRequisitionId()
  {
    return $this->requisitionId;
  }
  public function setRequisitionTitle($requisitionTitle)
  {
    $this->requisitionTitle = $requisitionTitle;
  }
  public function getRequisitionTitle()
  {
    return $this->requisitionTitle;
  }
  public function setResumeGrade($resumeGrade)
  {
    $this->resumeGrade = $resumeGrade;
  }
  public function getResumeGrade()
  {
    return $this->resumeGrade;
  }
  public function setSpamAssassinScore($spamAssassinScore)
  {
    $this->spamAssassinScore = $spamAssassinScore;
  }
  public function getSpamAssassinScore()
  {
    return $this->spamAssassinScore;
  }
  public function setSystemCreateDate($systemCreateDate)
  {
    $this->systemCreateDate = $systemCreateDate;
  }
  public function getSystemCreateDate()
  {
    return $this->systemCreateDate;
  }
  public function setTextCoverletterFile($textCoverletterFile)
  {
    $this->textCoverletterFile = $textCoverletterFile;
  }
  public function getTextCoverletterFile()
  {
    return $this->textCoverletterFile;
  }
  public function setTextResumeFile($textResumeFile)
  {
    $this->textResumeFile = $textResumeFile;
  }
  public function getTextResumeFile()
  {
    return $this->textResumeFile;
  }
  public function setTextTranscriptFile($textTranscriptFile)
  {
    $this->textTranscriptFile = $textTranscriptFile;
  }
  public function getTextTranscriptFile()
  {
    return $this->textTranscriptFile;
  }
}
