<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Sheets_ProtectedRange extends Google_Collection
{
  protected $collection_key = 'unprotectedRanges';
  public $description;
  public $editors;
  public $namedRangeId;
  public $protectedRangeId;
  public $range;
  public $requestingUserCanEdit;
  public $unprotectedRanges;
  public $warningOnly;

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEditors(Google_Service_Sheets_Editors $editors)
  {
    $this->editors = $editors;
  }
  public function getEditors()
  {
    return $this->editors;
  }
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  public function setProtectedRangeId($protectedRangeId)
  {
    $this->protectedRangeId = $protectedRangeId;
  }
  public function getProtectedRangeId()
  {
    return $this->protectedRangeId;
  }
  public function setRange(Google_Service_Sheets_GridRange $range)
  {
    $this->range = $range;
  }
  public function getRange()
  {
    return $this->range;
  }
  public function setRequestingUserCanEdit($requestingUserCanEdit)
  {
    $this->requestingUserCanEdit = $requestingUserCanEdit;
  }
  public function getRequestingUserCanEdit()
  {
    return $this->requestingUserCanEdit;
  }
  public function setUnprotectedRanges(array $unprotectedRanges)
  {
    foreach ($unprotectedRanges as $u) {
      if (!$u instanceof Google_Service_Sheets_GridRange) {
        throw new InvalidArgumentException('First argument to setUnprotectedRanges must be an array of Google_Service_Sheets_GridRange');
      }
    }
    $this->unprotectedRanges = $unprotectedRanges;
  }
  public function getUnprotectedRanges()
  {
    return $this->unprotectedRanges;
  }
  public function setWarningOnly($warningOnly)
  {
    $this->warningOnly = $warningOnly;
  }
  public function getWarningOnly()
  {
    return $this->warningOnly;
  }
}
