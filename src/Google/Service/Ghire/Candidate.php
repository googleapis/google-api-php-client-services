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

class Google_Service_Ghire_Candidate extends Google_Collection
{
  protected $collection_key = 'tag';
  protected $aclEntryType = 'Google_Service_Ghire_AclEntry';
  protected $aclEntryDataType = 'array';
  protected $applicationType = 'Google_Service_Ghire_Application';
  protected $applicationDataType = 'array';
  protected $atsDataType = 'Google_Service_Ghire_LegacyAtsData';
  protected $atsDataDataType = '';
  protected $attachmentType = 'Google_Service_Ghire_Attachment';
  protected $attachmentDataType = 'array';
  protected $candidateHistoryType = 'Google_Service_Ghire_CandidateHistory';
  protected $candidateHistoryDataType = '';
  public $candidateId;
  public $createDate;
  protected $currentEmploymentStatusType = 'Google_Service_Ghire_Tag';
  protected $currentEmploymentStatusDataType = '';
  protected $currentStatusType = 'Google_Service_Ghire_Tag';
  protected $currentStatusDataType = '';
  protected $demographicsType = 'Google_Service_Ghire_Demographics';
  protected $demographicsDataType = '';
  public $domain;
  public $dossierUrl;
  protected $employeeInfoType = 'Google_Service_Ghire_EmployeeInfo';
  protected $employeeInfoDataType = '';
  protected $employmentStatusHistoryType = 'Google_Service_Ghire_Tag';
  protected $employmentStatusHistoryDataType = 'array';
  public $flattenedTags;
  public $forwardingId;
  public $id;
  public $kind;
  public $lastApplicationCreateDate;
  public $matchCodes;
  public $mergeSuggestion;
  protected $noteType = 'Google_Service_Ghire_Note';
  protected $noteDataType = 'array';
  protected $personType = 'Google_Service_Ghire_Person';
  protected $personDataType = 'array';
  protected $personInfoType = 'Google_Service_Ghire_PersonInfo';
  protected $personInfoDataType = '';
  protected $searchInfoType = 'Google_Service_Ghire_SearchInfo';
  protected $searchInfoDataType = '';
  public $searchScore;
  public $searchableMatchCodes;
  protected $sourceType = 'Google_Service_Ghire_Source';
  protected $sourceDataType = 'array';
  protected $statusHistoryType = 'Google_Service_Ghire_Tag';
  protected $statusHistoryDataType = 'array';
  protected $tagType = 'Google_Service_Ghire_Tag';
  protected $tagDataType = 'array';
  public $updateDate;
  public $vsiSentDate;

  public function setAclEntry($aclEntry)
  {
    $this->aclEntry = $aclEntry;
  }
  public function getAclEntry()
  {
    return $this->aclEntry;
  }
  public function setApplication($application)
  {
    $this->application = $application;
  }
  public function getApplication()
  {
    return $this->application;
  }
  public function setAtsData(Google_Service_Ghire_LegacyAtsData $atsData)
  {
    $this->atsData = $atsData;
  }
  public function getAtsData()
  {
    return $this->atsData;
  }
  public function setAttachment($attachment)
  {
    $this->attachment = $attachment;
  }
  public function getAttachment()
  {
    return $this->attachment;
  }
  public function setCandidateHistory(Google_Service_Ghire_CandidateHistory $candidateHistory)
  {
    $this->candidateHistory = $candidateHistory;
  }
  public function getCandidateHistory()
  {
    return $this->candidateHistory;
  }
  public function setCandidateId($candidateId)
  {
    $this->candidateId = $candidateId;
  }
  public function getCandidateId()
  {
    return $this->candidateId;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setCurrentEmploymentStatus(Google_Service_Ghire_Tag $currentEmploymentStatus)
  {
    $this->currentEmploymentStatus = $currentEmploymentStatus;
  }
  public function getCurrentEmploymentStatus()
  {
    return $this->currentEmploymentStatus;
  }
  public function setCurrentStatus(Google_Service_Ghire_Tag $currentStatus)
  {
    $this->currentStatus = $currentStatus;
  }
  public function getCurrentStatus()
  {
    return $this->currentStatus;
  }
  public function setDemographics(Google_Service_Ghire_Demographics $demographics)
  {
    $this->demographics = $demographics;
  }
  public function getDemographics()
  {
    return $this->demographics;
  }
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setDossierUrl($dossierUrl)
  {
    $this->dossierUrl = $dossierUrl;
  }
  public function getDossierUrl()
  {
    return $this->dossierUrl;
  }
  public function setEmployeeInfo(Google_Service_Ghire_EmployeeInfo $employeeInfo)
  {
    $this->employeeInfo = $employeeInfo;
  }
  public function getEmployeeInfo()
  {
    return $this->employeeInfo;
  }
  public function setEmploymentStatusHistory($employmentStatusHistory)
  {
    $this->employmentStatusHistory = $employmentStatusHistory;
  }
  public function getEmploymentStatusHistory()
  {
    return $this->employmentStatusHistory;
  }
  public function setFlattenedTags($flattenedTags)
  {
    $this->flattenedTags = $flattenedTags;
  }
  public function getFlattenedTags()
  {
    return $this->flattenedTags;
  }
  public function setForwardingId($forwardingId)
  {
    $this->forwardingId = $forwardingId;
  }
  public function getForwardingId()
  {
    return $this->forwardingId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastApplicationCreateDate($lastApplicationCreateDate)
  {
    $this->lastApplicationCreateDate = $lastApplicationCreateDate;
  }
  public function getLastApplicationCreateDate()
  {
    return $this->lastApplicationCreateDate;
  }
  public function setMatchCodes($matchCodes)
  {
    $this->matchCodes = $matchCodes;
  }
  public function getMatchCodes()
  {
    return $this->matchCodes;
  }
  public function setMergeSuggestion($mergeSuggestion)
  {
    $this->mergeSuggestion = $mergeSuggestion;
  }
  public function getMergeSuggestion()
  {
    return $this->mergeSuggestion;
  }
  public function setNote($note)
  {
    $this->note = $note;
  }
  public function getNote()
  {
    return $this->note;
  }
  public function setPerson($person)
  {
    $this->person = $person;
  }
  public function getPerson()
  {
    return $this->person;
  }
  public function setPersonInfo(Google_Service_Ghire_PersonInfo $personInfo)
  {
    $this->personInfo = $personInfo;
  }
  public function getPersonInfo()
  {
    return $this->personInfo;
  }
  public function setSearchInfo(Google_Service_Ghire_SearchInfo $searchInfo)
  {
    $this->searchInfo = $searchInfo;
  }
  public function getSearchInfo()
  {
    return $this->searchInfo;
  }
  public function setSearchScore($searchScore)
  {
    $this->searchScore = $searchScore;
  }
  public function getSearchScore()
  {
    return $this->searchScore;
  }
  public function setSearchableMatchCodes($searchableMatchCodes)
  {
    $this->searchableMatchCodes = $searchableMatchCodes;
  }
  public function getSearchableMatchCodes()
  {
    return $this->searchableMatchCodes;
  }
  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
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
  public function setVsiSentDate($vsiSentDate)
  {
    $this->vsiSentDate = $vsiSentDate;
  }
  public function getVsiSentDate()
  {
    return $this->vsiSentDate;
  }
}
