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

class Google_Service_YouTubeAnalytics_ResultTable extends Google_Collection
{
  protected $collection_key = 'rows';
  public $columnHeaders;
  public $kind;
  public $rows;

  public function setColumnHeaders(array $columnHeaders)
  {
    foreach ($columnHeaders as $c) {
      if (!$c instanceof Google_Service_YouTubeAnalytics_ResultTableColumnHeaders) {
        throw new InvalidArgumentException('First argument to setColumnHeaders must be an array of Google_Service_YouTubeAnalytics_ResultTableColumnHeaders');
      }
    }
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRows(array $rows)
  {
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
}
