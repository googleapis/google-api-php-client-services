<?php
/*
 * Copyright 2014 Google Inc.
 *
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

class Google_Service_People_Organization extends Google_Model
{
  public $current;
  public $department;
  public $domain;
  protected $endDateType = 'Google_Service_People_Date';
  protected $endDateDataType = '';
  public $formattedType;
  public $jobDescription;
  public $location;
  protected $metadataType = 'Google_Service_People_FieldMetadata';
  protected $metadataDataType = '';
  public $name;
  public $phoneticName;
  protected $startDateType = 'Google_Service_People_Date';
  protected $startDateDataType = '';
  public $symbol;
  public $title;
  public $type;

  public function setCurrent($current)
  {
    $this->current = $current;
    return $this;
  }
  public function getCurrent()
  {
    return $this->current;
  }
  public function setDepartment($department)
  {
    $this->department = $department;
    return $this;
  }
  public function getDepartment()
  {
    return $this->department;
  }
  public function setDomain($domain)
  {
    $this->domain = $domain;
    return $this;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setEndDate(Google_Service_People_Date $endDate)
  {
    $this->endDate = $endDate;
    return $this;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
    return $this;
  }
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  public function setJobDescription($jobDescription)
  {
    $this->jobDescription = $jobDescription;
    return $this;
  }
  public function getJobDescription()
  {
    return $this->jobDescription;
  }
  public function setLocation($location)
  {
    $this->location = $location;
    return $this;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setMetadata(Google_Service_People_FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
    return $this;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPhoneticName($phoneticName)
  {
    $this->phoneticName = $phoneticName;
    return $this;
  }
  public function getPhoneticName()
  {
    return $this->phoneticName;
  }
  public function setStartDate(Google_Service_People_Date $startDate)
  {
    $this->startDate = $startDate;
    return $this;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
    return $this;
  }
  public function getSymbol()
  {
    return $this->symbol;
  }
  public function setTitle($title)
  {
    $this->title = $title;
    return $this;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }
  public function getType()
  {
    return $this->type;
  }
}
