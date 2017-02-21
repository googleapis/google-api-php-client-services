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

class Google_Service_Ghire_Requisition extends Google_Collection
{
  protected $collection_key = 'titleHistory';
  public $approved;
  public $approvedHeadcount;
  public $attributes;
  public $building;
  public $costCenter;
  public $createDate;
  public $deleted;
  protected $descriptionType = 'Google_Service_Ghire_Description';
  protected $descriptionDataType = 'array';
  protected $draftApproverType = 'Google_Service_Ghire_PersonOrGroup';
  protected $draftApproverDataType = '';
  public $draftApproverId;
  public $draftRequisitionId;
  protected $emailAddressType = 'Google_Service_Ghire_EmailAddress';
  protected $emailAddressDataType = 'array';
  public $embeddedDescription;
  public $employeeTypeCode;
  public $employmentSchedule;
  public $engCategory;
  public $experienceLevel;
  protected $externalPostingType = 'Google_Service_Ghire_ExternalPosting';
  protected $externalPostingDataType = 'array';
  public $googleExperience;
  protected $hiringManagerType = 'Google_Service_Ghire_PersonOrGroup';
  protected $hiringManagerDataType = '';
  public $hiringManagerId;
  protected $historyType = 'Google_Service_Ghire_History';
  protected $historyDataType = 'array';
  protected $internalContactType = 'Google_Service_Ghire_PersonOrGroup';
  protected $internalContactDataType = '';
  public $internalContactId;
  public $internalDescription;
  public $jobCode;
  public $jobLevelRangeBottom;
  public $jobLevelRangeTop;
  public $kind;
  protected $leadRecruiterType = 'Google_Service_Ghire_PersonOrGroup';
  protected $leadRecruiterDataType = '';
  public $leadRecruiterId;
  public $location;
  protected $noteType = 'Google_Service_Ghire_RequisitionNote';
  protected $noteDataType = 'array';
  public $parentRequisitionId;
  public $postingInstructions;
  public $reminderDate;
  public $requisitionId;
  public $requisitionNumber;
  public $requisitionType;
  public $status;
  public $templateText;
  public $title;
  protected $titleHistoryType = 'Google_Service_Ghire_TitleHistory';
  protected $titleHistoryDataType = 'array';
  public $updateDate;
  public $visible;

  public function setApproved($approved)
  {
    $this->approved = $approved;
  }
  public function getApproved()
  {
    return $this->approved;
  }
  public function setApprovedHeadcount($approvedHeadcount)
  {
    $this->approvedHeadcount = $approvedHeadcount;
  }
  public function getApprovedHeadcount()
  {
    return $this->approvedHeadcount;
  }
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setBuilding($building)
  {
    $this->building = $building;
  }
  public function getBuilding()
  {
    return $this->building;
  }
  public function setCostCenter($costCenter)
  {
    $this->costCenter = $costCenter;
  }
  public function getCostCenter()
  {
    return $this->costCenter;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDraftApprover(Google_Service_Ghire_PersonOrGroup $draftApprover)
  {
    $this->draftApprover = $draftApprover;
  }
  public function getDraftApprover()
  {
    return $this->draftApprover;
  }
  public function setDraftApproverId($draftApproverId)
  {
    $this->draftApproverId = $draftApproverId;
  }
  public function getDraftApproverId()
  {
    return $this->draftApproverId;
  }
  public function setDraftRequisitionId($draftRequisitionId)
  {
    $this->draftRequisitionId = $draftRequisitionId;
  }
  public function getDraftRequisitionId()
  {
    return $this->draftRequisitionId;
  }
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  public function setEmbeddedDescription($embeddedDescription)
  {
    $this->embeddedDescription = $embeddedDescription;
  }
  public function getEmbeddedDescription()
  {
    return $this->embeddedDescription;
  }
  public function setEmployeeTypeCode($employeeTypeCode)
  {
    $this->employeeTypeCode = $employeeTypeCode;
  }
  public function getEmployeeTypeCode()
  {
    return $this->employeeTypeCode;
  }
  public function setEmploymentSchedule($employmentSchedule)
  {
    $this->employmentSchedule = $employmentSchedule;
  }
  public function getEmploymentSchedule()
  {
    return $this->employmentSchedule;
  }
  public function setEngCategory($engCategory)
  {
    $this->engCategory = $engCategory;
  }
  public function getEngCategory()
  {
    return $this->engCategory;
  }
  public function setExperienceLevel($experienceLevel)
  {
    $this->experienceLevel = $experienceLevel;
  }
  public function getExperienceLevel()
  {
    return $this->experienceLevel;
  }
  public function setExternalPosting($externalPosting)
  {
    $this->externalPosting = $externalPosting;
  }
  public function getExternalPosting()
  {
    return $this->externalPosting;
  }
  public function setGoogleExperience($googleExperience)
  {
    $this->googleExperience = $googleExperience;
  }
  public function getGoogleExperience()
  {
    return $this->googleExperience;
  }
  public function setHiringManager(Google_Service_Ghire_PersonOrGroup $hiringManager)
  {
    $this->hiringManager = $hiringManager;
  }
  public function getHiringManager()
  {
    return $this->hiringManager;
  }
  public function setHiringManagerId($hiringManagerId)
  {
    $this->hiringManagerId = $hiringManagerId;
  }
  public function getHiringManagerId()
  {
    return $this->hiringManagerId;
  }
  public function setHistory($history)
  {
    $this->history = $history;
  }
  public function getHistory()
  {
    return $this->history;
  }
  public function setInternalContact(Google_Service_Ghire_PersonOrGroup $internalContact)
  {
    $this->internalContact = $internalContact;
  }
  public function getInternalContact()
  {
    return $this->internalContact;
  }
  public function setInternalContactId($internalContactId)
  {
    $this->internalContactId = $internalContactId;
  }
  public function getInternalContactId()
  {
    return $this->internalContactId;
  }
  public function setInternalDescription($internalDescription)
  {
    $this->internalDescription = $internalDescription;
  }
  public function getInternalDescription()
  {
    return $this->internalDescription;
  }
  public function setJobCode($jobCode)
  {
    $this->jobCode = $jobCode;
  }
  public function getJobCode()
  {
    return $this->jobCode;
  }
  public function setJobLevelRangeBottom($jobLevelRangeBottom)
  {
    $this->jobLevelRangeBottom = $jobLevelRangeBottom;
  }
  public function getJobLevelRangeBottom()
  {
    return $this->jobLevelRangeBottom;
  }
  public function setJobLevelRangeTop($jobLevelRangeTop)
  {
    $this->jobLevelRangeTop = $jobLevelRangeTop;
  }
  public function getJobLevelRangeTop()
  {
    return $this->jobLevelRangeTop;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLeadRecruiter(Google_Service_Ghire_PersonOrGroup $leadRecruiter)
  {
    $this->leadRecruiter = $leadRecruiter;
  }
  public function getLeadRecruiter()
  {
    return $this->leadRecruiter;
  }
  public function setLeadRecruiterId($leadRecruiterId)
  {
    $this->leadRecruiterId = $leadRecruiterId;
  }
  public function getLeadRecruiterId()
  {
    return $this->leadRecruiterId;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setNote($note)
  {
    $this->note = $note;
  }
  public function getNote()
  {
    return $this->note;
  }
  public function setParentRequisitionId($parentRequisitionId)
  {
    $this->parentRequisitionId = $parentRequisitionId;
  }
  public function getParentRequisitionId()
  {
    return $this->parentRequisitionId;
  }
  public function setPostingInstructions($postingInstructions)
  {
    $this->postingInstructions = $postingInstructions;
  }
  public function getPostingInstructions()
  {
    return $this->postingInstructions;
  }
  public function setReminderDate($reminderDate)
  {
    $this->reminderDate = $reminderDate;
  }
  public function getReminderDate()
  {
    return $this->reminderDate;
  }
  public function setRequisitionId($requisitionId)
  {
    $this->requisitionId = $requisitionId;
  }
  public function getRequisitionId()
  {
    return $this->requisitionId;
  }
  public function setRequisitionNumber($requisitionNumber)
  {
    $this->requisitionNumber = $requisitionNumber;
  }
  public function getRequisitionNumber()
  {
    return $this->requisitionNumber;
  }
  public function setRequisitionType($requisitionType)
  {
    $this->requisitionType = $requisitionType;
  }
  public function getRequisitionType()
  {
    return $this->requisitionType;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTemplateText($templateText)
  {
    $this->templateText = $templateText;
  }
  public function getTemplateText()
  {
    return $this->templateText;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitleHistory($titleHistory)
  {
    $this->titleHistory = $titleHistory;
  }
  public function getTitleHistory()
  {
    return $this->titleHistory;
  }
  public function setUpdateDate($updateDate)
  {
    $this->updateDate = $updateDate;
  }
  public function getUpdateDate()
  {
    return $this->updateDate;
  }
  public function setVisible($visible)
  {
    $this->visible = $visible;
  }
  public function getVisible()
  {
    return $this->visible;
  }
}
