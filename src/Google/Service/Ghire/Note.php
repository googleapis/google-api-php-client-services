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

class Google_Service_Ghire_Note extends Google_Model
{
  public $applicationId;
  public $createDate;
  protected $creatorType = 'Google_Service_Ghire_PrincipalWithName';
  protected $creatorDataType = '';
  public $id;
  public $kind;
  protected $legacyAtsDataType = 'Google_Service_Ghire_LegacyAtsNoteData';
  protected $legacyAtsDataDataType = '';
  public $note;
  public $status;
  public $type;
  public $typeDetail;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId()
  {
    return $this->applicationId;
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
  public function setLegacyAtsData(Google_Service_Ghire_LegacyAtsNoteData $legacyAtsData)
  {
    $this->legacyAtsData = $legacyAtsData;
  }
  public function getLegacyAtsData()
  {
    return $this->legacyAtsData;
  }
  public function setNote($note)
  {
    $this->note = $note;
  }
  public function getNote()
  {
    return $this->note;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setTypeDetail($typeDetail)
  {
    $this->typeDetail = $typeDetail;
  }
  public function getTypeDetail()
  {
    return $this->typeDetail;
  }
}
