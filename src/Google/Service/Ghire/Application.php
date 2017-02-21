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

class Google_Service_Ghire_Application extends Google_Collection
{
  protected $collection_key = 'tag';
  protected $aclEntryType = 'Google_Service_Ghire_AclEntry';
  protected $aclEntryDataType = 'array';
  public $applicationKey;
  public $applicationWorkflowId;
  public $createDate;
  protected $currentStatusType = 'Google_Service_Ghire_ApplicationStatus';
  protected $currentStatusDataType = '';
  public $doNotUseMe;
  public $emailSubject;
  public $emailTo;
  public $feedbackReleasedDateMs;
  protected $feedbackSummaryType = 'Google_Service_Ghire_FeedbackSummary';
  protected $feedbackSummaryDataType = '';
  protected $historicalOfferType = 'Google_Service_Ghire_Offer';
  protected $historicalOfferDataType = 'array';
  public $id;
  protected $jobOpeningType = 'Google_Service_Ghire_JobOpening';
  protected $jobOpeningDataType = '';
  public $jobOpeningStatusIndex;
  public $kind;
  protected $legacyAtsDataType = 'Google_Service_Ghire_LegacyAtsApplicationData';
  protected $legacyAtsDataDataType = '';
  public $legacyAtsParentId;
  public $legacyAtsSourceId;
  protected $offerType = 'Google_Service_Ghire_Offer';
  protected $offerDataType = '';
  public $personRoleIndex;
  public $releaseFeedbackToInterviewers;
  public $setiScore;
  protected $statusHistoryType = 'Google_Service_Ghire_ApplicationStatus';
  protected $statusHistoryDataType = 'array';
  protected $tagType = 'Google_Service_Ghire_Tag';
  protected $tagDataType = 'array';
  public $updateDate;

  public function setAclEntry($aclEntry)
  {
    $this->aclEntry = $aclEntry;
  }
  public function getAclEntry()
  {
    return $this->aclEntry;
  }
  public function setApplicationKey($applicationKey)
  {
    $this->applicationKey = $applicationKey;
  }
  public function getApplicationKey()
  {
    return $this->applicationKey;
  }
  public function setApplicationWorkflowId($applicationWorkflowId)
  {
    $this->applicationWorkflowId = $applicationWorkflowId;
  }
  public function getApplicationWorkflowId()
  {
    return $this->applicationWorkflowId;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setCurrentStatus(Google_Service_Ghire_ApplicationStatus $currentStatus)
  {
    $this->currentStatus = $currentStatus;
  }
  public function getCurrentStatus()
  {
    return $this->currentStatus;
  }
  public function setDoNotUseMe($doNotUseMe)
  {
    $this->doNotUseMe = $doNotUseMe;
  }
  public function getDoNotUseMe()
  {
    return $this->doNotUseMe;
  }
  public function setEmailSubject($emailSubject)
  {
    $this->emailSubject = $emailSubject;
  }
  public function getEmailSubject()
  {
    return $this->emailSubject;
  }
  public function setEmailTo($emailTo)
  {
    $this->emailTo = $emailTo;
  }
  public function getEmailTo()
  {
    return $this->emailTo;
  }
  public function setFeedbackReleasedDateMs($feedbackReleasedDateMs)
  {
    $this->feedbackReleasedDateMs = $feedbackReleasedDateMs;
  }
  public function getFeedbackReleasedDateMs()
  {
    return $this->feedbackReleasedDateMs;
  }
  public function setFeedbackSummary(Google_Service_Ghire_FeedbackSummary $feedbackSummary)
  {
    $this->feedbackSummary = $feedbackSummary;
  }
  public function getFeedbackSummary()
  {
    return $this->feedbackSummary;
  }
  public function setHistoricalOffer($historicalOffer)
  {
    $this->historicalOffer = $historicalOffer;
  }
  public function getHistoricalOffer()
  {
    return $this->historicalOffer;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setJobOpening(Google_Service_Ghire_JobOpening $jobOpening)
  {
    $this->jobOpening = $jobOpening;
  }
  public function getJobOpening()
  {
    return $this->jobOpening;
  }
  public function setJobOpeningStatusIndex($jobOpeningStatusIndex)
  {
    $this->jobOpeningStatusIndex = $jobOpeningStatusIndex;
  }
  public function getJobOpeningStatusIndex()
  {
    return $this->jobOpeningStatusIndex;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLegacyAtsData(Google_Service_Ghire_LegacyAtsApplicationData $legacyAtsData)
  {
    $this->legacyAtsData = $legacyAtsData;
  }
  public function getLegacyAtsData()
  {
    return $this->legacyAtsData;
  }
  public function setLegacyAtsParentId($legacyAtsParentId)
  {
    $this->legacyAtsParentId = $legacyAtsParentId;
  }
  public function getLegacyAtsParentId()
  {
    return $this->legacyAtsParentId;
  }
  public function setLegacyAtsSourceId($legacyAtsSourceId)
  {
    $this->legacyAtsSourceId = $legacyAtsSourceId;
  }
  public function getLegacyAtsSourceId()
  {
    return $this->legacyAtsSourceId;
  }
  public function setOffer(Google_Service_Ghire_Offer $offer)
  {
    $this->offer = $offer;
  }
  public function getOffer()
  {
    return $this->offer;
  }
  public function setPersonRoleIndex($personRoleIndex)
  {
    $this->personRoleIndex = $personRoleIndex;
  }
  public function getPersonRoleIndex()
  {
    return $this->personRoleIndex;
  }
  public function setReleaseFeedbackToInterviewers($releaseFeedbackToInterviewers)
  {
    $this->releaseFeedbackToInterviewers = $releaseFeedbackToInterviewers;
  }
  public function getReleaseFeedbackToInterviewers()
  {
    return $this->releaseFeedbackToInterviewers;
  }
  public function setSetiScore($setiScore)
  {
    $this->setiScore = $setiScore;
  }
  public function getSetiScore()
  {
    return $this->setiScore;
  }
  public function setStatusHistory($statusHistory)
  {
    $this->statusHistory = $statusHistory;
  }
  public function getStatusHistory()
  {
    return $this->statusHistory;
  }
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
  public function setUpdateDate($updateDate)
  {
    $this->updateDate = $updateDate;
  }
  public function getUpdateDate()
  {
    return $this->updateDate;
  }
}
