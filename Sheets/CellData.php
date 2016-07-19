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

class Google_Service_Sheets_CellData extends Google_Collection
{
  protected $collection_key = 'textFormatRuns';
  public $dataValidation;
  public $effectiveFormat;
  public $effectiveValue;
  public $formattedValue;
  public $hyperlink;
  public $note;
  public $pivotTable;
  public $textFormatRuns;
  public $userEnteredFormat;
  public $userEnteredValue;

  public function setDataValidation(Google_Service_Sheets_DataValidationRule $dataValidation)
  {
    $this->dataValidation = $dataValidation;
  }
  public function getDataValidation()
  {
    return $this->dataValidation;
  }
  public function setEffectiveFormat(Google_Service_Sheets_CellFormat $effectiveFormat)
  {
    $this->effectiveFormat = $effectiveFormat;
  }
  public function getEffectiveFormat()
  {
    return $this->effectiveFormat;
  }
  public function setEffectiveValue(Google_Service_Sheets_ExtendedValue $effectiveValue)
  {
    $this->effectiveValue = $effectiveValue;
  }
  public function getEffectiveValue()
  {
    return $this->effectiveValue;
  }
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  public function getFormattedValue()
  {
    return $this->formattedValue;
  }
  public function setHyperlink($hyperlink)
  {
    $this->hyperlink = $hyperlink;
  }
  public function getHyperlink()
  {
    return $this->hyperlink;
  }
  public function setNote($note)
  {
    $this->note = $note;
  }
  public function getNote()
  {
    return $this->note;
  }
  public function setPivotTable(Google_Service_Sheets_PivotTable $pivotTable)
  {
    $this->pivotTable = $pivotTable;
  }
  public function getPivotTable()
  {
    return $this->pivotTable;
  }
  public function setTextFormatRuns(array $textFormatRuns)
  {
    foreach ($textFormatRuns as $t) {
      if (!$t instanceof Google_Service_Sheets_TextFormatRun) {
        throw new InvalidArgumentException('First argument to setTextFormatRuns must be an array of Google_Service_Sheets_TextFormatRun');
      }
    }
    $this->textFormatRuns = $textFormatRuns;
  }
  public function getTextFormatRuns()
  {
    return $this->textFormatRuns;
  }
  public function setUserEnteredFormat(Google_Service_Sheets_CellFormat $userEnteredFormat)
  {
    $this->userEnteredFormat = $userEnteredFormat;
  }
  public function getUserEnteredFormat()
  {
    return $this->userEnteredFormat;
  }
  public function setUserEnteredValue(Google_Service_Sheets_ExtendedValue $userEnteredValue)
  {
    $this->userEnteredValue = $userEnteredValue;
  }
  public function getUserEnteredValue()
  {
    return $this->userEnteredValue;
  }
}
