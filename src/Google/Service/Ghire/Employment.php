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

class Google_Service_Ghire_Employment extends Google_Collection
{
  protected $collection_key = 'urn';
  public $createDate;
  protected $endDateType = 'Google_Service_Ghire_Date';
  protected $endDateDataType = '';
  public $id;
  public $kind;
  protected $legacyAtsDataType = 'Google_Service_Ghire_LegacyAtsEmploymentData';
  protected $legacyAtsDataDataType = '';
  public $name;
  public $notes;
  protected $startDateType = 'Google_Service_Ghire_Date';
  protected $startDateDataType = '';
  public $title;
  public $updatedDate;
  public $urn;

  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setEndDate(Google_Service_Ghire_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
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
  public function setLegacyAtsData(Google_Service_Ghire_LegacyAtsEmploymentData $legacyAtsData)
  {
    $this->legacyAtsData = $legacyAtsData;
  }
  public function getLegacyAtsData()
  {
    return $this->legacyAtsData;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  public function getNotes()
  {
    return $this->notes;
  }
  public function setStartDate(Google_Service_Ghire_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setUpdatedDate($updatedDate)
  {
    $this->updatedDate = $updatedDate;
  }
  public function getUpdatedDate()
  {
    return $this->updatedDate;
  }
  public function setUrn($urn)
  {
    $this->urn = $urn;
  }
  public function getUrn()
  {
    return $this->urn;
  }
}
