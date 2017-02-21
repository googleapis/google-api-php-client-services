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

class Google_Service_Ghire_Education extends Google_Collection
{
  protected $collection_key = 'urn';
  public $countryCode;
  public $createDate;
  public $degree;
  protected $endDateType = 'Google_Service_Ghire_Date';
  protected $endDateDataType = '';
  public $field;
  public $gpa;
  public $id;
  public $internationalGpa;
  public $isGraduated;
  public $kind;
  protected $legacyAtsDataType = 'Google_Service_Ghire_LegacyAtsEducationData';
  protected $legacyAtsDataDataType = '';
  public $majorGpa;
  public $name;
  public $notes;
  public $nowAttending;
  public $otherStatus;
  protected $startDateType = 'Google_Service_Ghire_Date';
  protected $startDateDataType = '';
  public $universitySelectivity;
  public $updatedDate;
  public $urn;

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setDegree($degree)
  {
    $this->degree = $degree;
  }
  public function getDegree()
  {
    return $this->degree;
  }
  public function setEndDate(Google_Service_Ghire_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setField($field)
  {
    $this->field = $field;
  }
  public function getField()
  {
    return $this->field;
  }
  public function setGpa($gpa)
  {
    $this->gpa = $gpa;
  }
  public function getGpa()
  {
    return $this->gpa;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInternationalGpa($internationalGpa)
  {
    $this->internationalGpa = $internationalGpa;
  }
  public function getInternationalGpa()
  {
    return $this->internationalGpa;
  }
  public function setIsGraduated($isGraduated)
  {
    $this->isGraduated = $isGraduated;
  }
  public function getIsGraduated()
  {
    return $this->isGraduated;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLegacyAtsData(Google_Service_Ghire_LegacyAtsEducationData $legacyAtsData)
  {
    $this->legacyAtsData = $legacyAtsData;
  }
  public function getLegacyAtsData()
  {
    return $this->legacyAtsData;
  }
  public function setMajorGpa($majorGpa)
  {
    $this->majorGpa = $majorGpa;
  }
  public function getMajorGpa()
  {
    return $this->majorGpa;
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
  public function setNowAttending($nowAttending)
  {
    $this->nowAttending = $nowAttending;
  }
  public function getNowAttending()
  {
    return $this->nowAttending;
  }
  public function setOtherStatus($otherStatus)
  {
    $this->otherStatus = $otherStatus;
  }
  public function getOtherStatus()
  {
    return $this->otherStatus;
  }
  public function setStartDate(Google_Service_Ghire_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setUniversitySelectivity($universitySelectivity)
  {
    $this->universitySelectivity = $universitySelectivity;
  }
  public function getUniversitySelectivity()
  {
    return $this->universitySelectivity;
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
