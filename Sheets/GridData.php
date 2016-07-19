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

class Google_Service_Sheets_GridData extends Google_Collection
{
  protected $collection_key = 'rowMetadata';
  public $columnMetadata;
  public $rowData;
  public $rowMetadata;
  public $startColumn;
  public $startRow;

  public function setColumnMetadata(array $columnMetadata)
  {
    foreach ($columnMetadata as $c) {
      if (!$c instanceof Google_Service_Sheets_DimensionProperties) {
        throw new InvalidArgumentException('First argument to setColumnMetadata must be an array of Google_Service_Sheets_DimensionProperties');
      }
    }
    $this->columnMetadata = $columnMetadata;
  }
  public function getColumnMetadata()
  {
    return $this->columnMetadata;
  }
  public function setRowData(array $rowData)
  {
    foreach ($rowData as $r) {
      if (!$r instanceof Google_Service_Sheets_RowData) {
        throw new InvalidArgumentException('First argument to setRowData must be an array of Google_Service_Sheets_RowData');
      }
    }
    $this->rowData = $rowData;
  }
  public function getRowData()
  {
    return $this->rowData;
  }
  public function setRowMetadata(array $rowMetadata)
  {
    foreach ($rowMetadata as $r) {
      if (!$r instanceof Google_Service_Sheets_DimensionProperties) {
        throw new InvalidArgumentException('First argument to setRowMetadata must be an array of Google_Service_Sheets_DimensionProperties');
      }
    }
    $this->rowMetadata = $rowMetadata;
  }
  public function getRowMetadata()
  {
    return $this->rowMetadata;
  }
  public function setStartColumn($startColumn)
  {
    $this->startColumn = $startColumn;
  }
  public function getStartColumn()
  {
    return $this->startColumn;
  }
  public function setStartRow($startRow)
  {
    $this->startRow = $startRow;
  }
  public function getStartRow()
  {
    return $this->startRow;
  }
}
