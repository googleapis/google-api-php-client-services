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

class Google_Service_Sheets_Spreadsheet extends Google_Collection
{
  protected $collection_key = 'sheets';
  public $namedRanges;
  public $properties;
  public $sheets;
  public $spreadsheetId;

  public function setNamedRanges(array $namedRanges)
  {
    foreach ($namedRanges as $n) {
      if (!$n instanceof Google_Service_Sheets_NamedRange) {
        throw new InvalidArgumentException('First argument to setNamedRanges must be an array of Google_Service_Sheets_NamedRange');
      }
    }
    $this->namedRanges = $namedRanges;
  }
  public function getNamedRanges()
  {
    return $this->namedRanges;
  }
  public function setProperties(Google_Service_Sheets_SpreadsheetProperties $properties)
  {
    $this->properties = $properties;
  }
  public function getProperties()
  {
    return $this->properties;
  }
  public function setSheets(array $sheets)
  {
    foreach ($sheets as $s) {
      if (!$s instanceof Google_Service_Sheets_Sheet) {
        throw new InvalidArgumentException('First argument to setSheets must be an array of Google_Service_Sheets_Sheet');
      }
    }
    $this->sheets = $sheets;
  }
  public function getSheets()
  {
    return $this->sheets;
  }
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
}
