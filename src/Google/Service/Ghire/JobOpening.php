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

class Google_Service_Ghire_JobOpening extends Google_Collection
{
  protected $collection_key = 'schedule';
  protected $aclType = 'Google_Service_Ghire_AclEntry';
  protected $aclDataType = 'array';
  public $costCenterCode;
  public $createDate;
  protected $creatorType = 'Google_Service_Ghire_PrincipalWithName';
  protected $creatorDataType = '';
  public $domain;
  public $expirationDateMs;
  public $headcount;
  public $id;
  public $kind;
  protected $legacyRequisitionType = 'Google_Service_Ghire_LegacyRequisition';
  protected $legacyRequisitionDataType = '';
  public $liveDate;
  protected $matchingCriteriaType = 'Google_Service_Ghire_MatchingCriteria';
  protected $matchingCriteriaDataType = 'array';
  protected $noteType = 'Google_Service_Ghire_Note';
  protected $noteDataType = 'array';
  public $otherBuildingId;
  protected $postingType = 'Google_Service_Ghire_JobPosting';
  protected $postingDataType = 'array';
  public $postingInstructions;
  protected $postingTitleType = 'Google_Service_Ghire_JobDefinitionSnippet';
  protected $postingTitleDataType = 'array';
  public $primaryBuildingId;
  public $publicUpdateDate;
  protected $responsibilityType = 'Google_Service_Ghire_JobDefinitionSnippet';
  protected $responsibilityDataType = 'array';
  public $schedule;
  public $status;
  public $templateId;
  protected $templatedType = 'Google_Service_Ghire_TemplatedFields';
  protected $templatedDataType = '';
  public $type;
  public $updateDate;
  public $version;

  public function setAcl($acl)
  {
    $this->acl = $acl;
  }
  public function getAcl()
  {
    return $this->acl;
  }
  public function setCostCenterCode($costCenterCode)
  {
    $this->costCenterCode = $costCenterCode;
  }
  public function getCostCenterCode()
  {
    return $this->costCenterCode;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setCreator(Google_Service_Ghire_PrincipalWithName $creator)
  {
    $this->creator = $creator;
  }
  public function getCreator()
  {
    return $this->creator;
  }
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setExpirationDateMs($expirationDateMs)
  {
    $this->expirationDateMs = $expirationDateMs;
  }
  public function getExpirationDateMs()
  {
    return $this->expirationDateMs;
  }
  public function setHeadcount($headcount)
  {
    $this->headcount = $headcount;
  }
  public function getHeadcount()
  {
    return $this->headcount;
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
  public function setLegacyRequisition(Google_Service_Ghire_LegacyRequisition $legacyRequisition)
  {
    $this->legacyRequisition = $legacyRequisition;
  }
  public function getLegacyRequisition()
  {
    return $this->legacyRequisition;
  }
  public function setLiveDate($liveDate)
  {
    $this->liveDate = $liveDate;
  }
  public function getLiveDate()
  {
    return $this->liveDate;
  }
  public function setMatchingCriteria($matchingCriteria)
  {
    $this->matchingCriteria = $matchingCriteria;
  }
  public function getMatchingCriteria()
  {
    return $this->matchingCriteria;
  }
  public function setNote($note)
  {
    $this->note = $note;
  }
  public function getNote()
  {
    return $this->note;
  }
  public function setOtherBuildingId($otherBuildingId)
  {
    $this->otherBuildingId = $otherBuildingId;
  }
  public function getOtherBuildingId()
  {
    return $this->otherBuildingId;
  }
  public function setPosting($posting)
  {
    $this->posting = $posting;
  }
  public function getPosting()
  {
    return $this->posting;
  }
  public function setPostingInstructions($postingInstructions)
  {
    $this->postingInstructions = $postingInstructions;
  }
  public function getPostingInstructions()
  {
    return $this->postingInstructions;
  }
  public function setPostingTitle($postingTitle)
  {
    $this->postingTitle = $postingTitle;
  }
  public function getPostingTitle()
  {
    return $this->postingTitle;
  }
  public function setPrimaryBuildingId($primaryBuildingId)
  {
    $this->primaryBuildingId = $primaryBuildingId;
  }
  public function getPrimaryBuildingId()
  {
    return $this->primaryBuildingId;
  }
  public function setPublicUpdateDate($publicUpdateDate)
  {
    $this->publicUpdateDate = $publicUpdateDate;
  }
  public function getPublicUpdateDate()
  {
    return $this->publicUpdateDate;
  }
  public function setResponsibility($responsibility)
  {
    $this->responsibility = $responsibility;
  }
  public function getResponsibility()
  {
    return $this->responsibility;
  }
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  public function getTemplateId()
  {
    return $this->templateId;
  }
  public function setTemplated(Google_Service_Ghire_TemplatedFields $templated)
  {
    $this->templated = $templated;
  }
  public function getTemplated()
  {
    return $this->templated;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUpdateDate($updateDate)
  {
    $this->updateDate = $updateDate;
  }
  public function getUpdateDate()
  {
    return $this->updateDate;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}
