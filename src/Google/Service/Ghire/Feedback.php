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

class Google_Service_Ghire_Feedback extends Google_Collection
{
  protected $collection_key = 'feedbackItem';
  protected $aclEntryType = 'Google_Service_Ghire_AclEntry';
  protected $aclEntryDataType = 'array';
  public $applicationId;
  public $candidate;
  public $candidateId;
  protected $committeeVoteType = 'Google_Service_Ghire_CommitteeVote';
  protected $committeeVoteDataType = '';
  public $completedDate;
  public $createDate;
  public $doNotUse;
  public $domain;
  public $dueDate;
  protected $employeeIdType = 'Google_Service_Ghire_PersonOrGroup';
  protected $employeeIdDataType = '';
  public $feedbackId;
  protected $feedbackItemType = 'Google_Service_Ghire_FeedbackItem';
  protected $feedbackItemDataType = 'array';
  protected $feedbackOnFeedbackType = 'Google_Service_Ghire_FeedbackOnFeedback';
  protected $feedbackOnFeedbackDataType = '';
  public $feedbackType;
  protected $internalReferenceType = 'Google_Service_Ghire_InternalReference';
  protected $internalReferenceDataType = '';
  protected $interviewType = 'Google_Service_Ghire_Interview';
  protected $interviewDataType = '';
  public $isPending;
  public $kind;
  public $originalCandidateId;
  public $orphanChecked;
  protected $referralType = 'Google_Service_Ghire_Referral';
  protected $referralDataType = '';
  protected $requestorType = 'Google_Service_Ghire_PrincipalWithName';
  protected $requestorDataType = '';
  protected $requestorIdType = 'Google_Service_Ghire_PersonOrGroup';
  protected $requestorIdDataType = '';
  public $requestorNotes;
  protected $reviewerType = 'Google_Service_Ghire_PrincipalWithName';
  protected $reviewerDataType = '';
  protected $routeApprovalType = 'Google_Service_Ghire_RouteApproval';
  protected $routeApprovalDataType = '';
  public $securityToken;
  public $slateId;
  public $status;
  public $updateDate;

  public function setAclEntry($aclEntry)
  {
    $this->aclEntry = $aclEntry;
  }
  public function getAclEntry()
  {
    return $this->aclEntry;
  }
  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  public function setCandidate($candidate)
  {
    $this->candidate = $candidate;
  }
  public function getCandidate()
  {
    return $this->candidate;
  }
  public function setCandidateId($candidateId)
  {
    $this->candidateId = $candidateId;
  }
  public function getCandidateId()
  {
    return $this->candidateId;
  }
  public function setCommitteeVote(Google_Service_Ghire_CommitteeVote $committeeVote)
  {
    $this->committeeVote = $committeeVote;
  }
  public function getCommitteeVote()
  {
    return $this->committeeVote;
  }
  public function setCompletedDate($completedDate)
  {
    $this->completedDate = $completedDate;
  }
  public function getCompletedDate()
  {
    return $this->completedDate;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setDoNotUse($doNotUse)
  {
    $this->doNotUse = $doNotUse;
  }
  public function getDoNotUse()
  {
    return $this->doNotUse;
  }
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setDueDate($dueDate)
  {
    $this->dueDate = $dueDate;
  }
  public function getDueDate()
  {
    return $this->dueDate;
  }
  public function setEmployeeId(Google_Service_Ghire_PersonOrGroup $employeeId)
  {
    $this->employeeId = $employeeId;
  }
  public function getEmployeeId()
  {
    return $this->employeeId;
  }
  public function setFeedbackId($feedbackId)
  {
    $this->feedbackId = $feedbackId;
  }
  public function getFeedbackId()
  {
    return $this->feedbackId;
  }
  public function setFeedbackItem($feedbackItem)
  {
    $this->feedbackItem = $feedbackItem;
  }
  public function getFeedbackItem()
  {
    return $this->feedbackItem;
  }
  public function setFeedbackOnFeedback(Google_Service_Ghire_FeedbackOnFeedback $feedbackOnFeedback)
  {
    $this->feedbackOnFeedback = $feedbackOnFeedback;
  }
  public function getFeedbackOnFeedback()
  {
    return $this->feedbackOnFeedback;
  }
  public function setFeedbackType($feedbackType)
  {
    $this->feedbackType = $feedbackType;
  }
  public function getFeedbackType()
  {
    return $this->feedbackType;
  }
  public function setInternalReference(Google_Service_Ghire_InternalReference $internalReference)
  {
    $this->internalReference = $internalReference;
  }
  public function getInternalReference()
  {
    return $this->internalReference;
  }
  public function setInterview(Google_Service_Ghire_Interview $interview)
  {
    $this->interview = $interview;
  }
  public function getInterview()
  {
    return $this->interview;
  }
  public function setIsPending($isPending)
  {
    $this->isPending = $isPending;
  }
  public function getIsPending()
  {
    return $this->isPending;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOriginalCandidateId($originalCandidateId)
  {
    $this->originalCandidateId = $originalCandidateId;
  }
  public function getOriginalCandidateId()
  {
    return $this->originalCandidateId;
  }
  public function setOrphanChecked($orphanChecked)
  {
    $this->orphanChecked = $orphanChecked;
  }
  public function getOrphanChecked()
  {
    return $this->orphanChecked;
  }
  public function setReferral(Google_Service_Ghire_Referral $referral)
  {
    $this->referral = $referral;
  }
  public function getReferral()
  {
    return $this->referral;
  }
  public function setRequestor(Google_Service_Ghire_PrincipalWithName $requestor)
  {
    $this->requestor = $requestor;
  }
  public function getRequestor()
  {
    return $this->requestor;
  }
  public function setRequestorId(Google_Service_Ghire_PersonOrGroup $requestorId)
  {
    $this->requestorId = $requestorId;
  }
  public function getRequestorId()
  {
    return $this->requestorId;
  }
  public function setRequestorNotes($requestorNotes)
  {
    $this->requestorNotes = $requestorNotes;
  }
  public function getRequestorNotes()
  {
    return $this->requestorNotes;
  }
  public function setReviewer(Google_Service_Ghire_PrincipalWithName $reviewer)
  {
    $this->reviewer = $reviewer;
  }
  public function getReviewer()
  {
    return $this->reviewer;
  }
  public function setRouteApproval(Google_Service_Ghire_RouteApproval $routeApproval)
  {
    $this->routeApproval = $routeApproval;
  }
  public function getRouteApproval()
  {
    return $this->routeApproval;
  }
  public function setSecurityToken($securityToken)
  {
    $this->securityToken = $securityToken;
  }
  public function getSecurityToken()
  {
    return $this->securityToken;
  }
  public function setSlateId($slateId)
  {
    $this->slateId = $slateId;
  }
  public function getSlateId()
  {
    return $this->slateId;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
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
