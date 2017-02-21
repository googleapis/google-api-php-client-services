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

class Google_Service_Supportcases_SupportcasesCase extends Google_Collection
{
  protected $collection_key = 'relations';
  protected $assigneeType = 'Google_Service_Supportcases_Assignee';
  protected $assigneeDataType = '';
  protected $attributeMapType = 'Google_Service_Supportcases_Attribute';
  protected $attributeMapDataType = 'map';
  public $caseId;
  protected $communicationInfoType = 'Google_Service_Supportcases_CommunicationInfo';
  protected $communicationInfoDataType = '';
  public $createTime;
  protected $creatorType = 'Google_Service_Supportcases_Source';
  protected $creatorDataType = '';
  protected $customerType = 'Google_Service_Supportcases_Customer';
  protected $customerDataType = '';
  public $dueByTime;
  protected $issueType = 'Google_Service_Supportcases_Issue';
  protected $issueDataType = '';
  public $name;
  public $priority;
  protected $relationsType = 'Google_Service_Supportcases_Relation';
  protected $relationsDataType = 'array';
  public $state;
  public $updateTime;

  public function setAssignee(Google_Service_Supportcases_Assignee $assignee)
  {
    $this->assignee = $assignee;
  }
  public function getAssignee()
  {
    return $this->assignee;
  }
  public function setAttributeMap($attributeMap)
  {
    $this->attributeMap = $attributeMap;
  }
  public function getAttributeMap()
  {
    return $this->attributeMap;
  }
  public function setCaseId($caseId)
  {
    $this->caseId = $caseId;
  }
  public function getCaseId()
  {
    return $this->caseId;
  }
  public function setCommunicationInfo(Google_Service_Supportcases_CommunicationInfo $communicationInfo)
  {
    $this->communicationInfo = $communicationInfo;
  }
  public function getCommunicationInfo()
  {
    return $this->communicationInfo;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setCreator(Google_Service_Supportcases_Source $creator)
  {
    $this->creator = $creator;
  }
  public function getCreator()
  {
    return $this->creator;
  }
  public function setCustomer(Google_Service_Supportcases_Customer $customer)
  {
    $this->customer = $customer;
  }
  public function getCustomer()
  {
    return $this->customer;
  }
  public function setDueByTime($dueByTime)
  {
    $this->dueByTime = $dueByTime;
  }
  public function getDueByTime()
  {
    return $this->dueByTime;
  }
  public function setIssue(Google_Service_Supportcases_Issue $issue)
  {
    $this->issue = $issue;
  }
  public function getIssue()
  {
    return $this->issue;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  public function getPriority()
  {
    return $this->priority;
  }
  public function setRelations($relations)
  {
    $this->relations = $relations;
  }
  public function getRelations()
  {
    return $this->relations;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}
